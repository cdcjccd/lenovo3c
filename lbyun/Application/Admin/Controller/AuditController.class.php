<?php
namespace Admin\Controller;
use Think\Controller;
/*
* name  yjc
* time  7-5 7-11
* action  审核订单生成  回收站功能  多条件搜索 
* issue  日期查询   图片显示
*/
class AuditController extends Controller{  

      public  function order_inser(){ // 订单生产

          if(IS_POST){
             $upload = new \Think\Upload();// 实例化上传类
             $upload->maxSize = 3145728 ;// 设置附件上传大小
             $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
             $upload->rootPath = './Public/'; // 设置附件上传目录
             $upload->savePath = './Shens/'; // 设置附件上传（子）目录
             $info = $upload->upload();
           if(!$info){
                 $this->error($upload->getError()); // 上传错误提示错误信息
             }
              else{// 上传成功
              $datr = date("Y-m-d");
              $brand_logo="./Public/Shens/$datr/".$info['audit_file']['savename'];  
              $audit =  M('checking_audit');//实例化
              $date = $audit ->create();//创建
              $date['audit_file']=$brand_logo;//图片添加
              $date['audit_time'] =date("Y-m-d");// 初创时间
              $date['audit_name'] = session('user_name');    // 姓名
              $date['audit_phone'] = session('phone');

              $date['audit_order'] = $yCode[intval(date('C'))-2017].strtoupper(dechex(date('m'))).date('d').substr(time(),-5).substr(microtime(),2,5).  sprintf('%02d',rand(1111, 9999));// 订单号
              // LMLE号码
              $arr=array();
              while(count($arr)<10){
                    $arr[]=rand(1,10);
                    $arr=array_unique($arr);
              }
              $date['audit_serial_number'] = implode("",$arr);
          
                if($audit->add($date)){
                   $this->success("订单生成成功",U('Audit/authstr_list'));
               }else{
                   $this->error('订单生产失败');
               }  
               die;
             }
           }
            $this ->ling= M("hou_product")  ->field("product_id,product_name") -> select();//产品类型
            $king  = M("sys_business") ->field("id,busname,parentid") -> select(); // 显示类型
            $this ->ping = shops($king,0);//商家名称
            $data  = M("hou_brand") ->field("brand_id,brand_name,parent_id") -> select(); // 显示类型
            $this ->brand = catgory($data,0);//品牌名称
            $this ->like = M("hou_brand")->field("brand_id,model_name")->select();//model名称
            $this ->king = M("sys_route")->field("t_id,name")->select();
            $this -> display("order_add");

      }

      // 待审核
      public function authstr_list(){
            $key="audit_decision!='1' && audit_decision!='3'";
            // 下单时间
            $time = I("post.audit_time");
            if($time!=""){
              $key.=" and audit_time='$time'";
            }
            //订单号
             $phone = I('post.audit_serial_number');
             if($phone!=""){
                $key.=" and audit_serial_number=$phone";
             }
            $shen_list = M("checking_audit");
            $count= $shen_list->where($key)->count();// 查询满足要求的总记录数
            $Page = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $shen_list->where($key)
                              ->field("product_life,id,busname,audit_order,audit_serial_number,audit_id,audit_time,audit_name,audit_order_source,audit_state,audit_decision,audit_test")
                              ->join("sys_business on audit_shops_name = id")
                              ->join("hou_product on audit_product = product_id")
                              ->limit($Page->firstRow.','.$Page->listRows)
                              ->select();

            $this->asd=array("audit_time"=>$time,"audit_serial_number"=>$phone);
            $this->assign('list',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
            $this ->display("order_list");
      }
      
      // 查到某订单且吧值放在页面中(问题一  图片显示问题)
      public  function  order_list(){

             $hid = I('get.x_id');
             $find_list = M('checking_audit')
                        ->where("audit_id=$hid")
                        ->join("hou_product on audit_product=product_id")
                        ->field("product_life,audit_decision,audit_model,audit_brand,audit_ids,audit_card_name,audit_file,audit_come_time,audit_order,audit_serial_number,audit_id,audit_time,audit_name,audit_order_source,audit_state")
                        ->find();
             $data  = M("hou_brand") ->field("brand_id,brand_name,parent_id") -> select(); // 显示类型
             $this -> brand = catgory($data,0);//品牌名称
             $this ->like=M("hou_brand")->field("brand_id,model_name")->select();
             $this->assign('vo',$find_list);
             $this->display("order_upda");
       }

      // 查看审核信息 是否通过
      public function order_upde(){

            $bid=I("post.audit_id");//隐藏ID 
            $look =M("hou_product")->field("product_id,product_life")->find($bid);
            $upda_audit = M("checking_audit");
            $good = $upda_audit->create();
            $good['audit_come_time'] = date("Y-m-d H-i-s",time());
            $good['audit_take_time'] = date("Y-m-d H-i-s",time()+2592000);

            if ($look['product_life']='0'){
              $good['audit_out_time']=date("Y-m-d H-i-s",time()+7776000);
            }elseif ($look['product_life']='1'){
              $good['audit_out_time']=date("Y-m-d H-i-s",time()+31104000);
            }elseif ($look['product_life']='2'){
              $good['audit_out_time']=date("Y-m-d H-i-s",time()+62208000);
            }
            $pan = session("name_id");
            $duan = session('user_name');
            if(empty($pan) && empty($duan)){
               $this->error("请登录!",U("Login/index"));
            }else{
              $good['check_user'] = $pan;
              $good['check_name'] = $duan;
            }
            $reform=$upda_audit->where("audit_id=$bid")->save($good);
            if($reform){
                 $this->success("审核成功");
            }else{
                 $this->error("审核失败");
            }
      }
       // 审核通过
      public  function order_via(){

             $keysd = "audit_decision=1";
             $by_list = M("checking_audit");
             $count= $by_list->where($keysd)->count();// 查询满足要求的总记录数
             $Page = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
             $shows = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
             $lists = $by_list->where($keysd)
                              ->field("id,busname,audit_order,audit_serial_number,audit_id,audit_time,audit_name,audit_order_source,audit_state,audit_decision")
                              ->join("sys_business on audit_shops_name = id")
                              ->limit($Page->firstRow.','.$Page->listRows)
                              ->select();
             $this->assign('list',$lists);// 赋值数据集
             $this->assign('page',$shows);// 赋值分页输出
             $this->display("order_pass");

       }
       // 审核不通过或者待定
      public  function order_no_via(){

             $keysd = "audit_decision=3";
             $by_list = M("checking_audit");
             $count= $by_list->where($keysd)->count();// 查询满足要求的总记录数
             $Page = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
             $shows = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
             $lists = $by_list->where($keysd)
                              ->field("id,busname,audit_order,audit_serial_number,audit_id,audit_time,audit_name,audit_order_source,audit_state,audit_decision")
                              ->join("sys_business on audit_shops_name = id")
                              ->limit($Page->firstRow.','.$Page->listRows)
                              ->select();
             $this->assign('list',$lists);// 赋值数据集
             $this->assign('page',$shows);// 赋值分页输出
             $this->display("order_no_shen");
       }
       //审核不通过详情
      public  function  xiangqing(){
        
             $l_id = I("get.k_id");
             $king = M("checking_audit")
                              ->join(" hou_brand on audit_brand = brand_id")
                              ->join("hou_product on audit_product=product_id")
                              ->join("sys_route on audit_tong=t_id")
                              ->where("audit_id = '$l_id'")
                              ->field("audit_id,audit_order,audit_time,audit_product,audit_brand,audit_model,audit_tong,brand_name,brand_id,product_id,product_name,t_id,model_name,name")
                              ->find();
             $this -> assign("king",$king);
             $this -> display("cha_upde");
       }

}
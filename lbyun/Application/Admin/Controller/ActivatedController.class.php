<?php namespace Admin\Controller; 
use Think\Controller;
/*    name  yjc 
 *     time  7/6  /7-12
 *      action 已激活列表
 *       (品牌 产品 订单 用户 序列); 5759311 
 */ 
class ActivatedController extends Controller {

      public function activated_acl(){
          $key="pid=1";
          // 品牌
          $brand_md=I('post.audit_brand');
          if($brand_md != ""){
             $key.=" and audit_brand=$brand_md";
          }
          // 购买方式
          $way_md = I('post.audit_way');
          if($way_md != ""){
             $key.=" and audit_way='$way_md'";
          }
          // 产品
          $product_md = I("post.audit_product");
          if($product_md != ""){
             $key.=" and audit_product='$product_md'";
          }
          // 订单号
          $order_md = I("post.audit_order");
          if($order_md != ""){
             $key.=" and audit_order='$order_md'";
          }
          // LMLE号
          $xulie = I("post.audit_serial_number");
          if($xulie != ""){
             $key.=" and audit_serial_number='$xulie'";
          }
          // 手机号
          $phone = I("post.audit_phone");
          if($phone != ""){
             $key.=" and audit_phone='$phone'";
          }
          //用户名
          $login = I("post.audit_name"); 
          if($login != ""){
             $key.=" and audit_name='$login'";
          }
        
          // // 下单时间
          $s_time = I("post.audit_time");
          if($s_time != ""){
             $key.=" and audit_time=$s_time";
          }  
          // var_dump($s_time);
          // 第三方订单号
          // 激活码
          $enable = M('checking_audit'); // 实例化User对象
          $count  = $enable->where($key)->count();// 查询满足要求的总记录数
          $Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
          $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
          $list = $enable->where($key)->join("hou_product on audit_product = product_id")->join("sys_business on audit_shops_name = id")->field("busname,id,product_id,product_name,audit_id,audit_name,audit_time,audit_phone,audit_order,audit_serial_number,audit_decision,audit_model,audit_order_source")->limit($Page->firstRow.','.$Page->listRows)->order("audit_time desc")->select();
          $product = M("hou_product") ->field("product_id,product_name,product_type,product_life,product_price")->select();//产品
          $data = M('hou_brand')->field("brand_id,brand_name,parent_id") ->select(); //品牌显示
          $this -> brand = catgory($data,0);
          $this -> assign('chanpin',$product);
          $this -> dsa_key =array("audit_name"=>$login,"audit_phone"=>$phone,"audit_serial_number"=>$xulie,"audit_order"=>$order_md,"audit_product"=>$product_md,"audit_brand"=>$brand_md,"audit_way"=>$way_md);
          $this -> assign('list',$list);// 赋值数据集
          $this -> assign('page',$show);// 赋值分页输出
          $this -> display("actavated_lists");

    }

      //查看详情
      public  function  activa_list(){

          $bid = I('get.x_id');
          $enable = M('checking_audit');
          $list = $enable->where("audit_id='$bid'")->join("hou_product on audit_product = product_id")->join("sys_business on audit_shops_name = id")->join("hou_brand on audit_brand = brand_id")->join("sys_route on audit_tong = t_id")->field("audit_out_time,name,id,audit_test,check_name,check_user,model_name,brand_describe,brand_name,brand_id,audit_brand,audit_ids,audit_card_name,product_price,product_sku,audit_state,audit_come_time,product_life,product_type,busname,id,product_id,product_name,audit_id,audit_name,audit_time,audit_phone,audit_order,audit_serial_number,audit_decision,audit_model,audit_order_source,audit_take_time,audit_way,area,audit_file")->order("audit_time desc")->find();
          $this->assign("list",$list);
          $this->display("activa_add_pi");

    }
   
      //查看申请修改信息
      public   function  activa_upda(){

          $g_id = I("get.b_id");
          $blues  = M("checking_audit");
          $king= $blues -> where("audit_id=$g_id") ->field("audit_id,audit_order,audit_product,audit_time,audit_out_time,audit_take_time,audit_order_source,product_id,product_type,product_name,product_life") ->join("hou_product on audit_product = product_id") ->find();
          $this ->assign("list",$king);
          $this -> display("actava_upde");  

      }

      // 修改信息状态
      public  function  activa_modified(){

           $updas = I('post.audit_id');
           $si = I('post.apply_type');
           $gai = I('post.apply_test');
           $instance = M('checking_audit');
           $xiugai = $instance->create();
           $xiugai['apply_type'] = $si;
           $xiugai['apply_test'] = $gai;
           $reform=$instance->where("audit_id=$updas")->save($xiugai);
           if($reform){
              $this->success('批改成功',U('Activated/activated_acl'));
           }else{
              $this->error('批改失败');
           }
      }

}
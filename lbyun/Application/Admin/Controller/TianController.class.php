<?php
/**
 * Created by PhpStorm.
 * User: 杨进昌
 * Date: 2017/6/16-6-19
 * Time: 14:24
 * action  天猫合同单 订单生成  多条件查询  查看详情
 */
namespace Admin\Controller;
use Think\Controller;
class TianController extends CommonController
{
/*
  *订单生成 添加功能
  *存取session
  */
      public function tian_add(){
          if(IS_POST){
              $order = M("tianmao");//实例化
              $tianmao = $order ->create();//创建
              $tianmao['tian_user'] = session('user_name');//用户名
              $tianmao['user_address'] = session('province').",".session('s_address').session('country'); //地址
              $tianmao['tian_phone'] = session('phone');//用户电话
              $yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
              $tianmao['tian_order'] = $yCode[intval(date('C'))-2017].strtoupper(dechex(date('m'))).date('d').substr(time(),-5).substr(microtime(),2,5).sprintf('%02d',rand(1111, 9999));//订单号  
              $tianmao['tian_time'] =date("Y-m-d H-i-s",time());//购买时间
              $tianmao['tian_come_time'] =date("Y-m-d H-i-s",time()+86400);//生效时间  一天后生效
              if($order->add($tianmao)){//添加
                  $this -> success("已完成，请稍后");
              }else{
                  $this  -> error("是不是傻！");
              }
              die;
             }
             $data  =  M("hou_brand")->select();//品牌显示
             $this  -> brand =  catgory($data,0);
             $product_n = M('hou_product')->field("product_id,product_name,product_type,product_price")->select();//产品显示
             $shangjia  = M("sys_business")->field("id,busname,route")->select();
             $this -> assign("hing",$shangjia);
             $this -> assign("good",$data);
             $this -> assign("vip",$product_n);
             $this -> assign("nip",$product_n);
             $this -> display();
      }

/**
 *订单显示
 * 多条件查询
 * 日期转时间戳
 * */
      public function tian_list(){

             $key ="pid=1";
             //用户名
             $username = I("post.tian_user");
             if($username!=""){
                  $key.= " and tian_user='$username'";
             }
             //手机号
             $phone= I("post.tian_phone");
             if($phone!=""){
                  $key.= " and tian_phone='$phone'";
             }
            //时间段查询
            $time = I("post.tian_time");
            $s_time =I("post.tian_come_time");
            if($time!="" and $s_time!=""){
                $key.=" and tian_time between '$time' and '$s_time'";
            }
             $cat  = M('tianmao'); // 实例化User对象
             $count= $cat->where($key)->count();// 查询满足要求的总记录数
             $Page = new \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)
             $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
             $list = $cat->where($key)->join("hou_product on product_names = product_id")->limit($Page->firstRow.','.$Page->listRows)->select();
             $this->asd=array("tian_user"=>$username,"tian_phone"=>$phone,"tian_time"=>$time,"tian_come_time"=>$s_time);
             $this->assign('list',$list);// 赋值数据集
             $this->assign('page',$show);// 赋值分页输出
             $this->display("tian_list");
      }
/**
 * 查看详情
 * 接到ID之后,
 * 联表查询各个信息
 * 显示详情页
 */
      public function tian_details(){
             $x_id = I('get.t_id');
             $xian = M("tianmao");
             $chanpin=$xian-> where("tian_id='$x_id'")->join("hou_product on product_names = product_id")->join("sys_business on tian_busname = id")->field("tian_order,product_type,product_name,tian_way,product_price,model_name,brand_name,tian_user,tian_phone,user_address,id,busname,tian_time,tian_come_time")->find();
             // echo "<pre>";
             // var_dump($chanpin);die;
             $this->assign("king",$chanpin);
             $this->display("tian_details");
      }

//结束
}
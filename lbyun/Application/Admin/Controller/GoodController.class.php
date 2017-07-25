<?php
namespace Admin\Controller;
use Think\Controller;
 /*
name yjc
time 6-13 
action 确定收货显示  多条件查询
*/
class GoodController extends Controller {

    public function index(){
        $key = "order_collect=2";
        // 创建人     
        $creater = trim(I('get.order_creater'));
        if(!empty($creater)){
         $key.=" and order_creater like '%$creater%'"; 
        }
        // 手机号
        $phone = trim(I('get.order_phone'));
        if(!empty($phone)){
         $key.=" and order_phone like '%$phone%'"; 
        }
        // 订单号
        $number = trim(I('get.order_number'));
        if(!empty($number)){
         $key.=" and order_number='$number'"; 
        }
        $order  = M('market_order'); //实例化User对象
        $count= $order->where($key)->count();    //询满足要求的总记录数
        $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();//分页显示输出
        $list = $order->where($key)->limit($Page->firstRow.','.$Page->listRows)->select();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->asd=array("order_number"=>$number,"order_phone"=>$phone,"order_creater"=>$creater);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this ->display();  
     }
   
 }
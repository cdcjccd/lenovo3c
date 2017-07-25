<?php
namespace Admin\Controller;
use Think\Controller;
/*
@ name 杨进昌
@ time 6-15 
@ action  激活码查询
*/
class CodesController extends Controller {


    public function index(){
         
      if(IS_POST){
    	 $code = I('post.order_code');
    	 if(empty($code)){
    	     $this->error("激活码为空");
         }
         $s_user = M('market_order');
         $data=$s_user->where("order_code='$code'")->find();
         if(empty($data)){
         	$this->error("激活码/不存在");
         }
         $this->assign("date",$data);
         $this->asd=array("order_code"=>$code);
         $this->display();
         die;
        } 
    	$this->display();
    }
 
}
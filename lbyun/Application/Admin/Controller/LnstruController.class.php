<?php

namespace Admin\Controller;
use Think\Controller;
class LnstruController extends CommonController {

/*
@ 6-12
@代客激活/添加订单
@
*/
    public function index(){
	      
    	  $this->display();
    }


 /*注册表单*/
    public function register_add(){
         
        $act_valu = I('post.act_val');
        $hou = M("act_log");
    	  $data = $hou->where("act_val='$act_valu'")->find();     
        if(empty($data) && $data['act_val']!=$act_valu){

            $this->error('数据为空/激活码不正确');
         }
        $tong = M("sys_route") ->field("t_id,name")->select();
        $goods = M('sys_business') -> field('id,busname') ->select();
        $data  = M("hou_brand") -> field("brand_id,brand_name,parent_id") -> select(); // 显示类型
        $this ->brand = catgory($data,0);
        $this ->like = M("hou_brand") -> field("brand_id,model_name") -> select(); // 显示类型
        $this ->assign("goods",$goods);
        $this ->assign("tong",$tong);
        $this ->display("register");
      }
  
   // 代客提交订单
    public  function register_insert(){
       if(IS_POST){
           $upload = new \Think\Upload();// 实例化上传类
			     $upload->maxSize = 3145728 ;// 设置附件上传大小
			     $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			     $upload->rootPath = './Public/'; // 设置附件上传目录
			     $upload->savePath = './Goods/'; // 设置附件上传（子）目录
			     $info =$upload->upload();
			 if(!$info){
			      $this->error($upload->getError()); // 上传错误提示错误信息
			   }
			 else{  
			      // 上传成功
			      $date=date("Y-m-d");   
			      $brand_logo="./Public/Goods/$date/".$info['act_file']['savename'];
            $wing = $zhuce = D("register"); // 实例化User对象
			      // $zhuce = M("register");//代客激活实例化
            if (!$wing->create()){
                exit($zhuce->getError());
            }else{
              // echo 1;die;
             $wing  = $zhuce ->create();
             $wing['act_file']=$brand_logo;
             $wing['act_time'] = date("Y-m-d H-i-s");
             $wing['end_time'] = date("Y-m-d H-i-s"); 
             $wing['act_username'] = session('user_name');
            // echo "<pre>";
            // var_dump($wing);die; 
         if($zhuce->add($wing)){
            $this->success("代客注册成功",U('Blot/index_add'));
         }else{
            $this->error('代客注册失败');
              }
           }
          }
         die;
        }
        $this->display("register");
    }

   // 查看条款
   public  function  list_clause(){

       $this->display("tiaokuan");
   }


}
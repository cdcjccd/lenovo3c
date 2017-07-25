<?php

namespace Admin\Controller;
use Think\Controller;
/*
* name yjc
* time 2017-5-25
* action  品牌添加 显示
*/
class BackgroundController extends Controller {

  /*
  @后台管理模块开发
  @首先添加品牌、型号表 add
  @显示页面
  1.子类显示  3.绑定
  */
    public function brand_add(){

        if(IS_POST){
           $brand =  M('hou_brand');      
           $data  =  $brand -> create(); 
           $data['brand_time'] = date("Y-m-d,H-i-s");//当前时间
           if($brand -> add($data)){
           	   $this -> success("添加成功");// 成功
           }else{
            	 $this -> error("添加失败");// 失败
             }
            die;//不被击穿
          }
           $data  =  M("hou_brand")->select();
    	     $this  ->brand =  catgory($data,0);
		       $this  ->display("brand_add");// 指向品牌添加表
    }

/*
 @显示型号内容
 @分页功能
 @多条件查询 类型(父类) 关键字(模糊);
*/
     public function brand_show(){
            
            $keys = "brand_state=1";// 正常状态
            $keyword = I("post.brand_keywords");//关键字
            if($keyword!=""){
               $keys.=" and brand_name like '%$keyword%'";
            }
            //品牌查询
            $pinpai = I("post.parent_id");
            if($pinpai!="0" && $pinpai!=""){
              $keys.=" and brand_id=$pinpai";
            }
            $cat  = M('hou_brand'); // 实例化User对象
            $count= $cat->where($keys)->count();// 查询满足要求的总记录数
            $Page = new \Think\Page($count,16);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $cat->where($keys)->field("brand_id,parent_id,brand_name,brand_describe,model_describe,brand_state")->limit($Page->firstRow.','.$Page->listRows)->select();
            $asd_key=array("brand_keywords"=>$keyword,"parent_id"=>$pinpai);
            $this->dsa_key=$asd_key;
            $this->assign('list',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
            $data  = M("hou_brand") -> select(); // 显示类型
            $this ->brand = catgory($data,0);
            $this ->display("brand_list"); 
            
          }

}
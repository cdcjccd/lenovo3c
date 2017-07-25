<?php

namespace Admin\Controller;
use Think\Controller;

/*
@@1.直接指向 产品添加表
@@分页  显示数据库内容
@@1.多条件查询
@@@2.模糊查询
*/
class ProductController extends Controller {


	  public function index(){

	  	    $keys ="pro_pid=1";
          // 产品名模糊查询
          $keyword = I("post.product_name");
          if($keyword!=""){
             $keys.=" and product_name like '%$keyword%'";
          }
          // 类型查询
          $pinpai = I("post.parent_id");
          if($pinpai!="0" && $pinpai!=""){
             $keys.=" and bid=$pinpai";
          }
          // 销售渠道
          $sell=I('post.product_ditch');
          if($sell!='' && $sell!='0'){
             $keys.=" and product_ditch='$sell'";
          }

          $cat  = M('hou_product'); // 实例化User对象
          $count= $cat->where($keys)->count();// 查询满足要求的总记录数a
          $Page = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
          $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
          $list = $cat->where($keys)->limit($Page->firstRow.','.$Page->listRows)->select();
          $this->assign('list',$list);// 赋值数据集
          $this->assign('page',$show);// 赋值分页输出
          $asd_key=array("parent_id"=>$pinpai,'product_ditch'=>$sell);
          $this->dsa_key=$asd_key;
          // $this ->look=p_sell();//
          $this->look=$sell;
          $data  =  M("hou_brand")->select();
    	    $this ->brand =catgory($data,0);
          $this->assign('look',$look);
	  	    $this ->display("product_list");
	  }  
/*
@@@产品添加s
@@@产品与sku
*/
      public function product_add(){
            if(IS_POST){
                $product = M('hou_product');
                $data = $product -> create();
                $data['product_minute']=$data['product_name'];
                if($product->add($data)){
                    session("price",$data['product_price']);
                	$this -> success('操作成功');
                }else{
                	$this -> error('操作失败');
                }
            	die;
            }  
      	 $this -> display("product_add");
      }
   
}
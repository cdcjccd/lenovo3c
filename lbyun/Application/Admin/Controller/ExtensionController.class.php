<?php
namespace Admin\Controller;
use Think\Controller;
/*
* name yjc
* time 2017-6-5
* action  sku管理 curl
*/
class ExtensionController extends Controller {

    public function index(){    
          $keys ="pro_pid=1";      
          $keyword = I("post.product_sku");   // 产品名模糊查询
          if($keyword!=""){
             $keys.=" and product_sku=$keyword";
          }
          $look = I('post.product_number');// 物料编号
          if($look!=""){
             $keys.=" and product_number=$look";
          }
          
//------------------以下分页显示---------------------
          $cat  = M('hou_product'); // 实例化User对象
          $count= $cat->where($keys)->count();// 查询满足要求的总记录数
          $Page = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
          $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
          $list = $cat->where($keys)->limit($Page->firstRow.','.$Page->listRows)->select();
          $asd_key=array("product_sku"=>$keyword);
          $this->dsa_key=$asd_key;
          $this->assign('list',$list);// 赋值数据集
          $this->assign('page',$show);// 赋值分页输出
         
          $data  = M("hou_brand") -> select(); // 显示类型
          $this ->brand = catgory($data,0);
          $this -> display("sku_list");
          
    }

    public function upda(){

        $p_id  = I("get.p_id");
        $model = M("hou_product");
        $alter = $model->where("product_id=$p_id")->find();
        $this -> assign("ss",$alter);
        $this -> display("upda_list");
    
    } 
    public function upda_save(){
        $id   = I("post.product_id");
        $nav  = M("hou_product");  //实例化
        $quer = $nav->create();
        $date = $nav->where("product_id=$id")->save($quer);
        if($date){
            $this->success("修改成功",U('Extension/index'));
        }else{
            $this->error("修改失败");
        } 
    }

    public  function dele(){
        $id  = I("get.s_id");
        $de_pro = M("hou_product");  //实例化对象
        $da_ta  = $de_pro->where("product_id=$id")->delete();
        if($da_ta){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
   } 
}
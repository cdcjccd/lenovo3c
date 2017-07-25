<?php
namespace Admin\Controller;
use Think\Controller;
/*
 @显示型号内容
 @分页功能
 @多条件查询  类型(父类)  关键字(模糊);
*/
class ModelController extends Controller {

     public function model_add(){
            
            $keys = "brand_state=1";// 正常状态
            $keyword = I("post.brand_keywords");//关键字
            if($keyword!=""){
               $keys.=" and model_name like '%$keyword%'";
            }
            $pinpai = I("post.parent_id");//品牌查询
            if($pinpai!="0" && $pinpai!=""){
              $keys.=" and brand_id=$pinpai";
            }
            $cat = M('hou_brand'); // 实例化User对象
            $count= $cat->where($keys)->count();// 查询满足要求的总记录数
            $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $cat->where($keys)->limit($Page->firstRow.','.$Page->listRows)->select();
            $asd_key=array("brand_keywords"=>$keyword,"parent_id"=>$pinpai);
            $this->dsa_key=$asd_key;
            $this->assign('list',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
            $data  = M("hou_brand") -> select(); // 显示类型
            $this ->brand = catgory($data,0);
            $this ->display("model_list");
          }

}
<?php

namespace Admin\Controller;
use Think\Controller;
class WorkController extends Controller
{
    /*
    @@天猫工单 6
    @@ 问题: 查看合同详细详情 更新 两个页面
    */
    public function work_list(){

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
          //工单订单
          $order_id = I("post.tian_order");
          if($order_id!=""){
              $key.= " and tian_order='$order_id'";
          }

          $cat  = M('tianmao'); // 实例化User对象
          $count= $cat->where($key)->count();// 查询满足要求的总记录数
          $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
          $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
          $list = $cat->where($key)->join("hou_product on product_names = product_id")->limit($Page->firstRow.','.$Page->listRows)->select();
          $this->asd=array("tian_user"=>$username,"tian_phone"=>$phone,"tian_order"=>$order_id);
          $this->assign('list',$list);// 赋值数据集
          $this->assign('page',$show);// 赋值分页输出
          $this -> display("work_list");
    }

/*
  *  超时订单
*/
    public  function  over_list(){

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
         //工单订单
         $order_id = I("post.tian_order");
         if($order_id!=""){
              $key.= " and tian_order='$order_id'";
         }
         $chaoshi  = M('tianmao'); // 实例化User对象
         $count= $chaoshi->where($key)->count();// 查询满足要求的总记录数
         $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
         $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
         $list = $chaoshi->where($key)->join("hou_product on product_names = product_id")->limit($Page->firstRow.','.$Page->listRows)->select();
         $this->asd=array("tian_user"=>$username,"tian_phone"=>$phone,"tian_order"=>$order_id);
         $this->assign('list',$list);// 赋值数据集
         $this->assign('page',$show);// 赋值分页输出
         $this->display("over_list");
    }
/*
  *  完成订单
  *
*/
    public  function  finish_list(){

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
        //工单订单
        $order_id = I("post.tian_order");
        if($order_id!=""){
            $key.= " and tian_order='$order_id'";
        }
        //时间段
        $start = I("post.tian_time");
        $starts = I("post.tian_come_time");
        if($start!="" and $starts!=""){
            $key.=" and tian_time between '$start' and '$starts'";
        }

        $win  = M('tianmao'); // 实例化User对象
        $count= $win->where($key)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $win->where($key)->join("hou_product on product_names = product_id")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->asd=array("tian_user"=>$username,"tian_phone"=>$phone,"tian_order"=>$order_id,"tian_time"=>$start,"tian_come_time"=>$starts);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display("finish");
    }


    //详情页
    public function tarsh(){
        $q_id = I("get.t_id");
        $king = M("tianmao") ->where("tian_id='$q_id'")->join("hou_product on product_names = product_id")->find();
        $this->assign('king',$king);
        $this->display("xiangqing");

    }



}
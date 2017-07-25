<?php
namespace Admin\Controller;
use Think\Controller;
class BlotController extends Controller {

/*
@@  name  yjc 
@@  time  6-16
@@  action 批次号订单查询  
*/
    public function index_add(){

        $key ="act_enable=1";
        $cat  = M('register'); // 实例化User对象
        $count= $cat->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $cat->join("sys_route on act_tong = t_id")->join("sys_business on act_good = id")->limit($Page->firstRow.','.$Page->listRows)->field("count(act_enable),t_id,name,act_time,id,busname,act_username,act_danhao,act_good,fonst")->group('act_good')->select();
        //var_dump($cat->getLastSql($list));die;
        $tonglu = M("sys_route")->field("t_id,name")->select($sql);
        $this->assign("date",$date);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    	$this->assign("tonglu",$tonglu);
    	$this->display("index_add");	

    }
   
}
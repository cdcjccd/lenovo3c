<?php
namespace Admin\Controller;
use Think\Controller;
class ImportController extends Controller {

 /*
 @@  name  yjc
 @@  time  7-21
 @@  action 批量导入
 */
 
    // 待绑定订单列表
    public function index(){
      
        $this -> display("import_list");

    }

    // 通用导入数据
    public  function time_list(){
       
    	$this -> display("add_list");
    }

    // 导入记录
    public  function  lead_list(){
      
    	$this -> display("list");
    }

}
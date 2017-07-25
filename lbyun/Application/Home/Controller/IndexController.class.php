<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){ 
      echo "前台";
      $this->display();
    }

    //   方案展示
    public function caseshow(){
        $this->display();
    }

    //   联系我们
    public function contactus(){
        $this->display();
    }

    //   产品报价
    public function cost(){
        $this->display();
    }


    /*public function delay(){
        $this->display();
    }*/

    //   关于联保云
    public function aboutus(){
        $this->display();
    }

    //  公共部分   头部
    public function header(){
        $this->display();
    }

    //  公共部分   足部
    public function footer(){
        $this->display();
    }
}
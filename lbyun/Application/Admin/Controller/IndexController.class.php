<?php

namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    /*
    @@1.直接指向后台模板main
    @@2.url设置简便 admin/home
    */

    public function main(){

        $this -> display();
    }

}
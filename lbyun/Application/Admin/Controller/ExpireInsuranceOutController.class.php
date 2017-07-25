<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * Author: cd
 * Date: 2017/7/8
 * Time: 14:27
 * 数据统计 满期出险率控制器
 */
namespace Admin\Controller;
use Think\Controller;

/**
 * Class ExpireInsuranceOutController
 * @package Admin\Controller    满期出险率控制器
 */
class ExpireInsuranceOutController extends Controller {

    /**
     *  通路分析
     */
    public function route(){
        $this -> display();

    }

    /**
     *  产品分析
     */
    public function product(){
        $this -> display();

    }

    /**
     *  品牌分析
     */
    public function brand(){
        $this -> display();

    }

    /**
     *  区域分析
     */
    public function area(){
        $this -> display();

    }

    /**
     *  商家分析
     */
    public function seller(){
        $this -> display();

    }


}
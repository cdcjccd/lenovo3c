<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * Author: cd
 * Date: 2017/7/7
 * Time: 9:42
 * Controller: 出险分析控制器
 */
namespace Admin\Controller;
use Think\Controller;

/**
 * Class InsuranceOutAnalyzeController
 * @package Admin\Controller    出险分析控制器
 */
class InsuranceOutAnalyzeController extends Controller {

    /**
     *  通路分析
     */
    public function route() {
        $this -> display();

    }

    /**
     *  产品分析
     */
    public function product() {
        $this -> display();

    }

    /**
     *  品牌分析
     */
    public function brand() {
        $this -> display();

    }

    /**
     *  区域分析
     */
    public function area() {
        $this -> display();

    }

    /**
     *  注册出险率
     */
    public function registerInsOut() {
        $this -> display();

    }

    /**
     *  出险数据导出
     */
    public function insDataExport() {
        $routeName = M('sys_route') -> field ('name , code') -> select ();
        $this -> assign('routeName',$routeName);
        $this -> display();

    }

    public function insDataExportView() {
        $this -> display();
    }
    /**
     *  平均出险率
     */
    public function avgInsurance() {
        $this -> display();

    }

}
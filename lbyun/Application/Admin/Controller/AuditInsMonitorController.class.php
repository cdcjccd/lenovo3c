<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * Author: cd
 * Date: 2017/7/8
 * Time: 15:20
 *  审核监控面板控制器
 */
namespace Admin\Controller;
use Think\Controller;

/**
 * Class AuditInsMonitorController
 * @package Admin\Controller    审核监控面板控制器
 */
class AuditInsMonitorController extends Controller{

    /**
     *  实时监控面板
     */
    public function realTimeMonitor() {
        $this -> display();
    }

    /**
     *  月度统计
     */
    public function monthlyStatistics() {
        $this -> display();
    }

    /**
     *  超时订单
     */
    public function overTimeOrder() {
        $this -> display();
    }

    /**
     *  人员效率
     */
    public function peopleEfficiency() {
        $this -> display();
    }

    /**
     *  自定义查询
     */
    public function customQuery() {
        $this -> display();
    }


    protected function qrcode($url='http://www.jd.com/',$level=6,$size=10){
        Vendor('phpqrcode.phpqrcode');
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小//生成二维码图片
        ob_end_clean();
        $object = new \QRcode();
        $QR = './Public/Uploads/'.time ().'.png';
        $object->png($url, $QR, $errorCorrectionLevel, $matrixPointSize, 2);
        $logo = './Public/Uploads/logo.png';//准备好的logo图片
//        $QR = $name;//已经生成的原始二维码图
        if ($logo !== FALSE) {
            $QR = imagecreatefromstring(file_get_contents($QR));
            $logo = imagecreatefromstring(file_get_contents($logo));
            $QR_width = imagesx($QR);//二维码图片宽度
            $QR_height = imagesy($QR);//二维码图片高度
            $logo_width = imagesx($logo);//logo图片宽度
            $logo_height = imagesy($logo);//logo图片高度
            $logo_qr_width = $QR_width / 5;
            $scale = $logo_width/$logo_qr_width;
            $logo_qr_height = $logo_height/$scale;
            $from_width = ($QR_width - $logo_qr_width) / 2;
            //重新组合图片并调整大小
            imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,
                $logo_qr_height, $logo_width, $logo_height);
        }
        //输出图片
        imagepng($QR, './Public/Uploads/helloweba.png');
        echo "<img src='/Public/Uploads/helloweba.png'>";

    }

}
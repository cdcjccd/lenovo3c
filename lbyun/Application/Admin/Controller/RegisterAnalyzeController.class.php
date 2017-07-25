<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * Author: cd
 * Date: 2017/7/3
 * Time: 14:54
 * Controller: 注册分析控制器
 */
namespace Admin\Controller;
use Think\Controller;

class RegisterAnalyzeController extends Controller {

    public function route() {
        $this -> display ();
    }

    public function product() {
        $this -> display ();
    }

    public function brand() {
        $this -> display ();

    }

    public function area() {
        $this -> display ();

    }

    public function business() {
        $this -> display ();

    }

    public function dataExport() {
        $this -> display();
    }

    public function exportView() {
        $this -> display();
    }

    public function keyStoreSales() {
        $this -> display();
    }

    public function export ($data) {
        //引入类库
        vendor ('PHPExcel.PHPExcel');
        $obj = new \PHPExcel();
        //设置属性
        $obj->getProperties ()->setCreator ("ctos")
            ->setLastModifiedBy ("ctos")
            ->setTitle ("Office 2007 XLSX  Test Document")
            ->setSubject ("Office 2007 XLSX  Test Document")
            ->setDescription ("Test document for Office 2007 XLSX , generated using PHP classes.")
            ->setKeywords ("office 2007 openxml php")
            ->setCategory ("Test result file");
        //set width
//        $obj->getActiveSheet ()->getColumnDimension ('A')->setWidth (20);
//        $obj->getActiveSheet ()->getColumnDimension ('B')->setWidth (20);
//        $obj->getActiveSheet ()->getColumnDimension ('C')->setWidth (20);
//        $obj->getActiveSheet ()->getColumnDimension ('D')->setWidth (20);
        //表头
        $obj->setActiveSheetIndex(0)
            ->setCellValue('A1', '注册导出')
            ->setCellValue('A2', 'ID')
            ->setCellValue('B2', '订单ID')
            ->setCellValue('C2', '通路')
            ->setCellValue('D2', '用户姓名')
            ->setCellValue('E2', '用户联系电话')
            ->setCellValue('F2', '产品类别')
            ->setCellValue('G2', '产品ID')
            ->setCellValue('H2', '联想物料编号')
            ->setCellValue('I2', '产品名称')
            ->setCellValue('J2', '设备品牌')
            ->setCellValue('K2', '设别型号')
            ->setCellValue('L2', '价格')
            ->setCellValue('M2', '设备IMEI号')
            ->setCellValue('N2', '创建时间')
            ->setCellValue('O2', '出险时间')
            ->setCellValue('P2', '生效时间')
            ->setCellValue('Q2', '截止时间')
            ->setCellValue('R2', '注册账户ID')
            ->setCellValue('S2', '注册账户管理员')
            ->setCellValue('T2', '所属机构ID')
            ->setCellValue('U2', '机构名称')
            ->setCellValue('V2', '订单类型')
            ->setCellValue('W2', '结算价')
            ->setCellValue('X2', '实际成交价')
            ->setCellValue('Y2', '媒体价')
            ->setCellValue('Z2', '订单状态')
            ->setCellValue('AA2', '合作伙伴订单号')
            ->setCellValue('AB2', '投保')
            ->setCellValue('AC2', '产品类型')
            ->setCellValue('AD2', '产品保期')
            ->setCellValue('AE2', '激活ID');
        //循环添加数据
        foreach ($data as $k => $v) {
            $obj->getActiveSheet(0)->setCellValue('A'.($k+3), $v['name']);
            $obj->getActiveSheet(0)->setCellValue('B'.($k+3), $v['code']);
            $obj->getActiveSheet(0)->setCellValue('C'.($k+3), $v['remarks']);
            $obj->getActiveSheet(0)->setCellValue('D'.($k+3), $v['sort']);

//            $obj->getActiveSheet()->getStyle('A'.($k+3).':D'.($k+3))->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
//            $obj->getActiveSheet()->getStyle('A'.($k+3).':D'.($k+3))->getBorders()->getAllBorders()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
            $obj->getActiveSheet()->getRowDimension($k+3)->setRowHeight(16);
        }
        //表信息
        $obj->getActiveSheet()->setTitle('销售导出');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="销售导出('.date('Ymd-His').').xls"');  //日期为文件名后缀
        header('Cache-Control: max-age=0');
        ob_clean();//关键
        flush();//关键
        $objWriter = \PHPExcel_IOFactory::createWriter($obj, 'Excel5');  //excel5为xls格式，excel2007为xlsx格式        s

        $objWriter->save('php://output');
    }


}
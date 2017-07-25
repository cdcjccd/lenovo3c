<?php

namespace Admin\Controller;
use Think\Controller;
/*
@ phpexcel 导出功能 批量
@ 杨近昌  2017年6月2日
*/
class ExportController extends Controller {

/*
 @expUser  导出文件字段
  @exportExcel  从引入phpexcel库    调试 excel 宽高颜色等
   @objPHPExcel  实例化类 前  切记  加上 \;
    @phpexcel  文件下的phpexcel.php   不用加 class
*/
        public function exportExcel($expTitle,$expCellName,$expTableData){
               
              $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
              $fileName = $_SESSION['account'].date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
              $cellNum  = count($expCellName);
              $dataNum  = count($expTableData);
              Vendor("PHPExcel.PHPExcel");//引入phpexcel库扩展
              $objPHPExcel = new \PHPExcel();//实例化
              $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');                    
               for($i=0; $i<$cellNum; $i++){

                  $objPHPExcel -> setActiveSheetIndex(0) -> setCellValue($cellName[$i].'1', $expCellName[$i][1]); 
              } 
         
                   for($i=0;$i<$dataNum;$i++)
                      {
                        for($j=0; $j<$cellNum; $j++){
                                 $objPHPExcel -> getActiveSheet(0) -> setCellValue($cellName[$j].($i+2), $expTableData[$i][$expCellName[$j][0]]);
                            }             
                      }  
    
              header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
              header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印     
              $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
              $objWriter -> save('php://output'); 
              exit;                 
             }

/**
* 导出Excel
*/
          function expUser(){//导出Excel
               // $xlsName  = "User";
               $xlsCell  = array(//字段
                            array('bulk_phone','手机号码'),
                            array('bulk_lmei','唯一序列号'),
                            array('bulk_time','下单时间'),
                            array('bulk_key','激活码'),
                            array('bulk_card','身份证号'),
                           );
              $xlsModel = M('market_bulk');//实例化数据库
              $xlsData  = $xlsModel->field('bulk_phone,bulk_lmei,bulk_key,bulk_card')->select();//查找内容    
              foreach ($xlsData as $k => $v) {
                                           
                       // $xlsData[$k]['brand_state']=$v['brand_state']==1?'正常':'禁用';
                } 
              $this -> exportExcel($xlsName,$xlsCell,$xlsData);   
        }

//--结束--      
}
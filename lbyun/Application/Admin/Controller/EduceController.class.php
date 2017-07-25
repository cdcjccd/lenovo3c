<?php

namespace Admin\Controller;
use Think\Controller;
/*
@ phpexcel 导出功能 
@ 杨近昌  2017年6月1日 6657044
*/
class EduceController extends Controller {

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
              $cellName = array('A','B','C','D','E','F','G','H','I','J');        
                   for($i=0; $i<$cellNum; $i++)
                     {
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
               $xlsName  = "User";
               $xlsCell  = array(//字段
                            array('brand_name','品牌名称'),
                            array('parent_id','品牌等级'),
                            array('brand_name','品牌名称'),
                            array('model_name','型号名称'),
                            array('model_price','型号价格'),
                            array('brand_state','状态'),
                           );
              $xlsModel = M('hou_brand');//实例化数据库
              $xlsData  = $xlsModel->field('brand_name,parent_id,brand_name,model_name,model_price,brand_state')->select();//查找内容   
              foreach ($xlsData as $k => $v) {                  
                       $xlsData[$k]['brand_state']=$v['brand_state']==1?'正常':'禁用';
                } 
              $this->exportExcel($xlsName,$xlsCell,$xlsData);
        }

//--结束--      
}
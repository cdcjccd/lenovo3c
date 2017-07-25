<?php
namespace Admin\Controller;
use Think\Controller;
class NvaController extends Controller {

/*
@@产品表 品牌表  结合显示
*/
    public function index(){

        $x_id  = I("get.x_id");
        $model = M("hou_product");
        $alter = $model->where("product_id=$x_id")->find();
        $this -> assign("val",$alter);
    	$this -> display();
    }
/*
@expUser  导出文件字段
@exportExcel 从引入phpexcel库  调试 excel 宽高颜色等
@objPHPExcel 实例化类前切记  加上 \;
*/
    public function exportExcel($expTitle,$expCellName,$expTableData){
              

        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $_SESSION['account'].date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum  = count($expCellName);
        $dataNum  = count($expTableData);

        Vendor("PHPExcel.PHPExcel");//引入phpexcel库扩展
        $objPHPExcel = new \PHPExcel();//实例化
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
        $objPHPExcel -> getActiveSheet(0) -> mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
         
       for($i=0; $i<$cellNum; $i++){
            $objPHPExcel -> setActiveSheetIndex(0) -> setCellValue($cellName[$i].'2', $expCellName[$i][1]); 
          } 
         
       for($i=0;$i<$dataNum;$i++){
          for($j=0; $j<$cellNum; $j++){
            $objPHPExcel -> getActiveSheet(0) -> setCellValue($cellName[$j].($i+3), $expTableData[$i][$expCellName[$j][0]]);
          }              
       }  
      header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
      header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
                   
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
        $objWriter-> save('php://output'); 
        exit;             
   }

 /*
* *导出Excel
 */
    function expUser(){//导出Excel
         $xlsName  = "User";
         $xlsCell  = array(//字段
             array('hou_id','ID'),
             array('hou_sku','SKU'),
             array('hou_price','采购价格'),
             array('hou_brandname','品牌名称'),
             array('hou_service','型号名称'),
             array('hou_price_range','价格区间'),
             array('hou_good','商品类目'),
           );
        $xlsModel = M('hou_biao');//实例化数据库
        $xlsData  = $xlsModel->field('hou_id,hou_sku,hou_price,hou_brandname,hou_service,hou_price_range,hou_good')->select();//查找内容        
        foreach ($xlsData as $k => $v) {
                                          
           $xlsData[$k]['brand_state']=$v['brand_state']==1?'正常':'禁用';

        }
              $this -> exportExcel($xlsName,$xlsCell,$xlsData);
            
      }
/**
* 导入excel到数据库
* @param string $db 数据库表名
* @param path string 文件名（路径）
* @return boolean
*/
    function excelImport($db, $file) {
        import("Org.Util.PHPExcel");
        $PHPExcel = new \PHPExcel();
        $PHPReader = new \PHPExcel_Reader_Excel2007();
        if (!$PHPReader->canRead($file)) {
            $PHPReader = new \PHPExcel_Reader_Excel5();
            if (!$PHPReader->canRead($file)){
                return false;
            }
        }
        
        $E = $PHPReader->load($file);
        $cur = $E->getSheet(0);  // 读取第一个表
        $end = $cur->getHighestColumn(); // 获得最大的列数
        $line = $cur->getHighestRow(); // 获得最大总行数
        $info = array();   // 获取数据数组     
        for ($row = 1; $row <= $line; $row ++) {
            for ($column = 'A'; $column <= $end; $column ++) {                
                $val = $cur->getCellByColumnAndRow(ord($column) - 65, $row)->getValue();
                $info[$row][] = $val;
            }
        } 
        $DB = M($db);
        $data = array();

        for ($i = 2; $i <= count($info); $i ++) {
            for ($j = 0; $j < count($info[$i]); $j ++) {
                for ($k = 0; $k < count($info[1]); $k ++) {
                     $data[$i][$info[1][$k]] = $info[$i][$k];
                   }
              }
         }

        $datalist = array_values($data);
        $result = $DB->addAll($datalist);
        if ($result) {
            return true;
        }
        return false;
  }
//结束标签 
}
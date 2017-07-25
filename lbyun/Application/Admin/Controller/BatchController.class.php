<?php

namespace Admin\Controller;
use Think\Controller;
class BatchController extends Controller {

/*
@批量激活订单
@导入功能 (半成品)
*/
    public function index(){

        $data = M("hou_brand")->field("brand_id,brand_name,parent_id")->select();
        $this ->brand =  catgory($data,0);
       	$this -> display();
    }
   
/**
    *
    * Enter 导出excel共同方法 ...
    * @param unknown_type $expTitle
    * @param unknown_type $expCellName
    * @param unknown_type $expTableData
     */ 

    public function exportExcel($expTitle,$expCellName,$expTableData){
               
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $_SESSION['account'].date('_YmdHis');//or $xlsTit文件名称可根据自己情况设定
        $cellNum  = count($expCellName);
        $dataNum  = count($expTableData);
        Vendor("PHPExcel.PHPExcel");//引入phpexcel库扩展
        $objPHPExcel = new \PHPExcel();//实例化
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');    

        for($i=0; $i<$cellNum; $i++){

                  $objPHPExcel -> setActiveSheetIndex(0) -> setCellValue($cellName[$i].'1', $expCellName[$i][1]);     
        } 
        // $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格 

        for($i=0;$i<$dataNum;$i++){            
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
* 导出Excel*/
    function expUser(){//导出Excel
               $xlsName  = "market";
               $xlsCell  = array(//字段
                            array('bulk_phone','手机号码'),
                            array('bulk_lmei','唯一序列号'),
                            array('bulk_time','下单时间'),
                            array('bulk_key','激活码'),
                            array('bulk_card','身份证号'),
                           );
              $xlsModel = M('market_bulk');//实例化数据库
              $xlsData  = $xlsModel->Field('bulk_phone,bulk_lmei,bulk_key,bulk_card,bulk_time')->select();//查找内容    
              // foreach ($xlsData as $k => $v) {
                                           
              //          // $xlsData[$k]['brand_state']=$v['brand_state']==1?'正常':'禁用';
              //   } 

              $this -> exportExcel($xlsName,$xlsCell,$xlsData);   
        }

 
     //上传方法  
      public function impUser(){
        
        if (!empty($_FILES)) {

            $config=array(
                'exts'=>array('xlsx','xls'),
                'rootPath'=>"./Public/",
                'savePath'=>'Img/', 
                // 'autoSub' =>true,
                'subName'    =>    array('date','Ymd'),
            );

            $uploads = new \Think\Upload($config);
            if (!$info=$uploads->upload()) {
                $this->error($uploads->getError());
            }

            vendor("PHPExcel.PHPExcel");

            $file_name=$uploads->rootPath.$info['action_file']['savepath'].$info['action_file']['savename'];
            
            $objReader = \PHPExcel_IOFactory::createReader('Excel5');
     
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');

            $sheet = $objPHPExcel->getSheet(0);
        
            $highestRow = $sheet->getHighestRow(); // 取得总行数

            $highestColumn = $sheet->getHighestColumn(); // 取得总列数

        for($i=0;$i<=$highestRow;$i++){

               $date['bulk_phone'] = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();
               $date['bulk_lmei']= $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();
               $date['bulk_key']= $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();
               $date['bulk_card']= $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();
               $date['active_bid']= $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();
               $date['action_count']= $objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue();  
               $date['bulk_time']= $objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue(); 
               $date['action_file'] = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getValue();
               $fing = M('market_action');
               $king = $fing->create();
               $date['bulk_time'] =date("Y-m-d");
               $date['active_bid'] = $_POST['active_bid'];
               $date['action_count'] = $_POST['action_count'];
               $date['action_file'] = $file_name;
    
            if($fing->add($date)){

                  $this->success('导入成功！'); 

                }
           }  
           die; 
             }   
         else{
                 $this->error('请选择文件!');
         }
         
        } 
       // 结束
      }



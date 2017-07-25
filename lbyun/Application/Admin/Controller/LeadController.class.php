<?php
namespace Admin\Controller;
use Think\Controller;

/*
@ phpexcel 导入导出功能 
@name  杨近昌  
@time  2017年6月7日 -8日
*/

class LeadController extends Controller {


    public function uploa(){
    
       // chanpin 显示
        $x_product = M('hou_product')->field("product_name")->select();
        // 品牌显示
        $data   = M("hou_brand")->select();
        $this  ->brand =  catgory($data,0);
        $this  ->product = $x_product;
        $this  ->display("inser");

        }


    public function impUser(){
        if (!empty($_FILES)) {

            $config=array(
                'exts'=>array('xlsx','xls'),
                'rootPath'=>"./Public/",
                'savePath'=>'Uploads/',
                'autoSub'    =>    true,
                'subName'    =>    array('date','Ymd'),
            );
            $upload = new \Think\Upload($config);
            //var_dump($upload);exit;
            if (!$info=$upload->upload()) {

                $this->error($upload->getError());
            } 

            vendor("PHPExcel.PHPExcel");
            $file_name=$upload->rootPath.$info['hou_file']['savepath'].$info['hou_file']['savename'];
            $objReader = \PHPExcel_IOFactory::createReader('Excel5');
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数

            for($i=3;$i<=$highestRow;$i++){
                $data['hou_file'] = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();
                $data['hou_sku']= $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();
                $data['hou_price']= $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();
                $data['hou_brandname']= $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();
                $data['hou_peice_range']= $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();
                $data['hou_good']= $objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue();
                $data['hou_regdata'] = date("Y-m-d,H-i-s");
               }

            $chuan = M('hou_bcd');//实例化表
                if($chuan ->add($data)){
                    $this->success('导入成功！');
               }else{
                  $this->error("导入失败");
                }  
              }
              else{
                 $this->error("请选择上传的文件");
              }
        }
 


}



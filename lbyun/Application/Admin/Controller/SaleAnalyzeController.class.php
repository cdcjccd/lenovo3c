<?php
/**
 * Created by PhpStorm.
 * PROJECT=> Lenovo3C
 * Author=> cd
 * Date=> 2017/6/20
 * Time=> 14=>49
 * Controller=>  销售分析控制器
 */

namespace Admin\Controller;
use Think\Controller;

class SaleAnalyzeController extends Controller
{

    /**
     * 通路分析扇形图
     */
    public function route()
    {
        if (IS_AJAX) {
            if (I ('get.day') == '7') {
                $where['audit_time'] = array('GT' , date ( 'Y-m-d H:i:s' , time() - (7*86400) ) );
                $where['audit_decision'] = 1;
                $pie7 = $this -> pie ($where);
                $this->ajaxReturn (array_values ($pie7));
            }elseif (I ('get.day') == '30'){
                $where['audit_time'] = array('GT' , date ( 'Y-m-d H:i:s' , time() - (30*86400) ) );
                $where['audit_decision'] = 1;
                $pie30 = $this -> pie ($where);
                $this->ajaxReturn (array_values ($pie30) );
            }elseif (IS_POST){
                $where['audit_time'] = array('between' , array( I('post.startDate') , I('post.endDate') ) );
                $where['audit_decision'] = 1;
                $search = $this -> pie ($where);
//                $this->ajaxReturn (M('checking_audit')->getLastSql() );
                $this->ajaxReturn (array_values ($search) );
            }
        }else{
            $this->display ();
        }
    }

    /**
     *  Pie图查询数据
     * @param $where
     * @return array    返回数据
     */
    protected function pie ($where)
    {
        $num = M('sys_route') -> max('t_id');
//                dump ($num);
        $pie = [];
        for ($i = 1 ; $i <= $num ; $i++) {
            $pie[$i] = array (
                'name' => M('sys_route') -> field('name') -> where("t_id = $i") -> find()['name'] ,
                'value' => M('checking_audit') -> field('audit_tong') -> where("audit_tong = $i") -> where($where) -> count()
            );
        }
        return $pie;
    }

    /**
     *  通路分析柱形图
     */
    public function columnar()
    {
        if (IS_AJAX) {
            if ( I('get.day') == 7 ) {
                if (I('get.route') != '') {
                    $routeWhere = I('get.route');
                    $data = $this -> columnData (7,$routeWhere);
                    $this->ajaxReturn ($data);
//                    dump ($data);
                }else{
                    $data = $this -> columnData (7);
                    $this->ajaxReturn ($data);
                }

            }elseif (I('get.day') == 30) {
                if (I('get.route') != '') {
                    $routeWhere = I('get.route');
                    $data = $this -> columnData (30,$routeWhere);
                    $this->ajaxReturn ($data);
//                    dump ($data);
                }else{
                    $data = $this -> columnData (30);
                    $this->ajaxReturn ($data);
                }
            }

        }
    }

    public function columnarRouteList() {
        $this -> ajaxReturn( M('sys_route') -> field ('t_id , name') -> select() );
    }
    public function columnData($dayNum , $routeWhere = '')
    {
        $day = array();
        for ($i=0 ; $i < $dayNum ;$i++) {
            if ($i == 0) {
                $day[$i] = date ("Y-m-d ", time ());
                continue;
            }
            $day[$i] = date ("Y-m-d ", strtotime ("-$i day"));
        }
        // 数据
        if ($routeWhere != '') {
            $routeName = M('sys_route') -> field ('name') -> where ("t_id = $routeWhere") -> find ()['name'];
            $dataList = [];
            $num = [];
            for ($p = 0 ; $p < count ($day) ; $p++) {
                $map['audit_time'] = array('between' , array($day[$p].' 00:00:00' , date ('Y-m-d H:i:s' , strtotime("$day[$p] +1 day")-1)));
                $map['audit_tong'] = $routeWhere;
                $map['audit_decision'] = 1;
                $num[$p] = M('checking_audit')
//                    -> field ('audit_time')
                    -> where ($map)
                    -> count ();
//            dump (M('checking_audit')->getlastSql());
            }
            $dataList[] = array(
                'name' => $routeName ,
                'type' => 'bar' ,
                'data' => array_reverse ($num)
            );
//            dump ($dataList);
//            dump (array('time' => $day , 'data' => $dataList));die;
            return array('time' =>  array_reverse ($day) , 'data' => $dataList);
        }else{
            $routeNum = M('sys_route') -> max('t_id');
            $data = [];
            $value = [];
            for ($s = 1 ; $s <= $routeNum ; $s++) {
                for ($n = 0 ; $n < count($day) ; $n++) {
                    $where['audit_time'] = array('between' , array($day[$n].' 00:00:00' , date ('Y-m-d H:i:s' , strtotime("$day[$n] +1 day")-1)));
                    $where['audit_tong'] = $s;
                    $where['audit_decision'] = 1;
                    $value[$n] = M('checking_audit')
                        -> field('audit_tong')
                        -> where($where)
                        -> count();
//                        var_dump (M('checking_audit') -> getLastSql ());
//                        echo '<br>';
                }
                $data[$s] = array (
                    'name' => M('sys_route')
                        -> field('name')
                        -> where("t_id = $s")
                        -> find()['name'] ,
                    'type' => 'bar' ,
                    'data' => array_reverse ( $value )
                );
            }
//            dump(array_values ($data));
            return array('time' => array_reverse ($day) , 'data' => array_values ($data));
//            dump (array('time' => array_reverse ($day) , 'data' => array_values ($data)));
        }

    }

    /**
     *  产品销售分析
     */
    public function product(){
        if (IS_AJAX) {
//            $data =  [
//                ['name'=> 'test1', 'value'=> $this->rand()],
//                ['name'=> 'test2', 'value'=> $this->rand()],
//                ['name'=> 'test3', 'value'=> $this->rand()],
//                ['name'=> 'test4', 'value'=> $this->rand()],
//                ['name'=> 'test5', 'value'=> $this->rand()],
//                ['name'=> 'test6', 'value'=> $this->rand()],
//                ['name'=> 'test7', 'value'=> $this->rand()],
//                ['name'=> 'test8', 'value'=> $this->rand()],
//                ['name'=> 'test9', 'value'=> $this->rand()],
//                ['name'=> 'test10', 'value'=> $this->rand()],
//                ['name'=> 'test11', 'value'=> $this->rand()],
//                ['name'=> 'test12', 'value'=> $this->rand()],
//                ['name'=> 'test13', 'value'=> $this->rand()],
//                ['name'=> 'test14', 'value'=> $this->rand()],
//                ['name'=> 'test15', 'value'=> $this->rand()],
//                ['name'=> 'test16', 'value'=> $this->rand()],
//            ];

            $this -> ajaxReturn();
        }else {
            $this -> display();
        }

    }

    /**
     * @return int 模拟数据方法
     */
    public function rand(){
        return mt_rand (100,999);
    }

    /**
     *  区域分析
     */
    public function area(){

        if (IS_AJAX) {
//            if (I('get.day') == 7){
                $data =  [
                    ['name'=> '北京', 'value'=> $this->rand()],
                    ['name'=> '天津', 'value'=> $this->rand()],
                    ['name'=> '上海', 'value'=> $this->rand()],
                    ['name'=> '重庆', 'value'=> $this->rand()],
                    ['name'=> '河北', 'value'=> $this->rand()],
                    ['name'=> '河南', 'value'=> $this->rand()],
                    ['name'=> '云南', 'value'=> $this->rand()],
                    ['name'=> '辽宁', 'value'=> $this->rand()],
                    ['name'=> '黑龙江', 'value'=> $this->rand()],
                    ['name'=> '湖南', 'value'=> $this->rand()],
                    ['name'=> '安徽', 'value'=> $this->rand()],
                    ['name'=> '山东', 'value'=> $this->rand()],
                    ['name'=> '新疆', 'value'=> $this->rand()],
                    ['name'=> '江苏', 'value'=> $this->rand()],
                    ['name'=> '浙江', 'value'=> $this->rand()],
                    ['name'=> '江西', 'value'=> $this->rand()],
                    ['name'=> '湖北', 'value'=> $this->rand()],
                    ['name'=> '广西', 'value'=> $this->rand()],
                    ['name'=> '甘肃', 'value'=> $this->rand()],
                    ['name'=> '山西', 'value'=> $this->rand()],
                    ['name'=> '内蒙古', 'value'=> $this->rand()],
                    ['name'=> '陕西', 'value'=> $this->rand()],
                    ['name'=> '吉林', 'value'=> $this->rand()],
                    ['name'=> '福建', 'value'=> $this->rand()],
                    ['name'=> '贵州', 'value'=> $this->rand()],
                    ['name'=> '广东', 'value'=> $this->rand()],
                    ['name'=> '青海', 'value'=> $this->rand()],
                    ['name'=> '西藏', 'value'=> $this->rand()],
                    ['name'=> '四川', 'value'=> $this->rand()],
                    ['name'=> '宁夏', 'value'=> $this->rand()],
                    ['name'=> '海南', 'value'=> $this->rand()],
                    ['name'=> '台湾', 'value'=> $this->rand()],
                    ['name'=> '香港', 'value'=> $this->rand()],
                    ['name'=> '澳门', 'value'=> $this->rand()]
                ];
//            }
            $this->ajaxReturn($data);
        }else {
            $this -> display();
        }
    }

    /**
     *  销售商家占比分析
     */
    public function business() {
        $this -> display ();
    }

    /**
     *  销售占比分析
     */
    public function saleExport(){
        if (I('get.export') == 'export'){
            $data = M ('sys_route')->field ('name , code , remarks , sort')->select ();
            $this -> excelOut($data);
        }
        $this -> display ();
    }

    /**
     *  Excel 导出数据
     * @param $data 数据
     */
    protected function excelOut($data) {

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
        //set wt_idth
        $obj->getActiveSheet ()->getColumnDimension ('A')->setWt_idth (20);
        $obj->getActiveSheet ()->getColumnDimension ('B')->setWt_idth (20);
        $obj->getActiveSheet ()->getColumnDimension ('C')->setWt_idth (20);
        $obj->getActiveSheet ()->getColumnDimension ('D')->setWt_idth (20);
        //表头
//        $arr = array(
//            'A1' => '销售导出',
//            'A2' => '通路名称',
//            'B2' => '通路编码',
//            'C2' => '通路描述',
//            'D2' => '通路排序',
//        );
        $obj->setActiveSheetIndex(0)
            ->setCellValue('A1', '销售导出')
            ->setCellValue('A2', '通路名称')
            ->setCellValue('B2', '通路编码')
            ->setCellValue('C2', '通路描述')
            ->setCellValue('D2', '通路排序');
//        $obj->setActiveSheetIndex(0)
//            ->setCellValue('A1', '销售导出')
//            ->setCellValue('A2', '通路名称')
//            ->setCellValue('B2', '通路编码')
//            ->setCellValue('C2', '通路描述')
//            ->setCellValue('D2', '通路排序');
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

    public function excelIn() {

    }

}

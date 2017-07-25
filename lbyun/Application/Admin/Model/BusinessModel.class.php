<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * Author: cd
 * Date: 2017/6/14
 * Time: 16:42
 */
namespace Admin\Model;
use Think\Model;

class BusinessModel extends Model{

    /**
     * @var string 指定表名
     */
    protected $tableName = 'sys_business';

    /**
     * @var array 验证字段
     */
    protected $_validate = array(
        array('busName','require','商家名必须'),
        array('busName','','商家名已存在','','unique','1'),
//        array('channelCode','require','渠道编码必须'),
        array('dealerLev','require','商家名必须'),
//        array('route','require','通路必须'),

    );

    /**
     * @param $where    查询条件
     * @return array    带分页的数据
     */
    public function getAll($where){
        $count = $this->where($where)->count();
		$Page = new \Think\Page($count,C('PAGE_NUM'));
		$Page -> setConfig('header','共%TOTAL_ROW%条记录');
		$Page -> setConfig('first','首页');
		$Page -> setConfig('last','共%TOTAL_PAGE%页');
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('link','indexpagenumb');
		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $Page->show();

        $data = $this->field ('id,busName,channelCode,dealerLev,route,area,parentId')
            ->where($where)
            ->limit($Page->firsRow.','.$Page->listRows)
            ->select();

        return array($show,$data);

    }

    /**
     * @return mixed 查出通路列表
     */
    public function tonglu(){
//        $tongluModel = new \Admin\Model\TongluModel;
        $tongluModel= M('sys_route');
        return $tongluModel->field('name,code')->select();
    }

    /**
     * @return mixed 查出上层区域
     */
    public function upList(){
        return $this->field ('id,busName')->where('parentId=0')->select();
    }



}
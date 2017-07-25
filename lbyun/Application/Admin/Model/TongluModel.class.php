<?php 

namespace Admin\Model;
use Think\Model;

class TongluModel extends Model{
	
	protected $tableName = 'sys_route';

	protected $_validate = array(
	    array('name','require','通路名称必须！'),
	    array('code','require','通路编码必须！'),
	    array('remarks','require','描述必须'),
	    array('sort','require','排序必须')
	);

//    protected $_auto = array (
////        array('status','1'),  // 新增的时候把status字段设置为1
////        array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
////        array('name','getName',3,'callback'), // 对name字段在新增和编辑的时候回调getName方法
//        array('create_date',"createTime",1,'callback'), // 对update_time字段在更新的时候写入当前时间戳
//    );

//    public function createTime(){
//        return date('Y-m-d H:i:s',time());
//    }


	public function getAll($where){
//		$count = $this->tongluModel->where($where)->count();
//		$Page = new \Think\Page($count,C('PAGE_NUM'));
//		$Page -> setConfig('header','共%TOTAL_ROW%条记录');
//		$Page -> setConfig('first','首页');
//		$Page -> setConfig('last','共%TOTAL_PAGE%页');
//		$Page -> setConfig('prev','上一页');
//		$Page -> setConfig('next','下一页');
//		$Page -> setConfig('link','indexpagenumb');
//		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
//		$show = $Page->show();

		$data = $this
			->field('name,remarks,code,sort')
			->where($where)
//			->limit($Page->firstRow.','.$Page->listRows)
			->select();

//		return array($show,$data);
		return $data;
	}



}
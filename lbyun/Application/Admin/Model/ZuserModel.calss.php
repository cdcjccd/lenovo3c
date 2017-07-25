<?php 

namespace Admin\Model;
use Think\Model;

class ZuserModel extends Model{
	
	protected $tableName = 'z_user';

	protected $tongluModel;

	protected $_validate = array(
	    array('tongluName','require','通路名称必须！'), 
	    array('tongluNum','require','通路编码必须！'), 
	    array('remark','require','描述必须'),  
	    array('rank','require','排序必须') 
	);

	public function __construct(){
		parent::__construct();
		$this->tongluModel = M($this->tableName);
	}

	public function getAll($where){
		$count = $this->tongluModel->where($where)->count();
		$Page = new \Think\Page($count,C('PAGE_NUM'));
		$Page -> setConfig('header','共%TOTAL_ROW%条记录');
		$Page -> setConfig('first','首页');
		$Page -> setConfig('last','共%TOTAL_PAGE%页');
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('link','indexpagenumb');
		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');		
		$show = $Page->show();

		$data = $this->tongluModel
			->field('id,tongluId',true)
			->where($where)
			->limit($Page->firstRow.','.$Page->listRows)
			->select();

		return array($show,$data);
		
	}



}
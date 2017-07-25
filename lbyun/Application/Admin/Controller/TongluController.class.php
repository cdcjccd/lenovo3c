<?php 

namespace Admin\Controller;
use Think\Controller;
// use Admin\Model\TongluModel;
class TongluController extends Controller{
	
	public $Model;
	public function __construct(){
		
		parent::__construct();
		$this->Model = D('Tonglu');

	}

	public function tongluList(){

		if (IS_GET) {
			$tongluName = trim(I('name'));
			if (!empty($tongluName)) {
				$where['name'] = array('like',"%$tongluName%");
			}
		}				
		$data = $this->Model->getAll($where);
//		$this->assign('page',$data[0]);
//		$this->assign('data',$data[1]);
		$this->assign('data',$data);
        $this->display();

	}

	public function tongluAdd(){
		
		if(IS_POST){			
			$data = I('');
            $this->ajaxReturn(I(''));die;
			if ($this->Model->create()) {
			        $data['create_date'] = date('Y-m-d H:i:s',time());
				if ($this->Model->add($data)) {
					$this->ajaxReturn(1);
				}else{
					$this->ajaxReturn(0);
				}
			}else{
				$this->ajaxReturn('添加失败:'.$this->Model->geterror());
			}

		}
		$this->display();
	}



}
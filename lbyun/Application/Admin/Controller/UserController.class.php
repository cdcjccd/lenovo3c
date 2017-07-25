<?php

namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller{

	public $userModel;
	// public $blackModel;

	/**
	 * 继承父类构造方法
	 */
	public function __construct(){

		parent::__construct();

		$this->userModel = M('z_user');

	}

	/**
	 * 在线用户列表
	 */
	public function userList(){

			$userMobile = I('userMobile');
			$userRealName = I('userRealName');
			$registerFrom = I('registerFrom');

			$map['userMobile'] = array('like',"%$userMobile%");
			$map['userRealName'] = array('like',"%$userRealName%");//where查询条件
			$map['registerFrom'] = array('like',"%$registerFrom%");


			$count = $this->userModel->where($map)->count();//分页显示
			$Page = new \Think\Page($count,C('PAGE_NUM'));

			$Page -> setConfig('header','共%TOTAL_ROW%条记录');
			$Page -> setConfig('first','首页');
			$Page -> setConfig('last','共%TOTAL_PAGE%页');
			$Page -> setConfig('prev','上一页');
			$Page -> setConfig('next','下一页');
			$Page -> setConfig('link','indexpagenumb');
			$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

			$show = $Page->show();//分页输出

			$data = $this->userModel//查出数据并分页
			->field('userMobile,registerFrom,userRealName,create_time,can_buy_ow')
			->where($map)
			->limit($Page->firstRow.','.$Page->listRows)
			->order('create_time desc')
			->select();
			// var_dump($this->userModel->getLastSql());
			$this->assign('data',$data);
			$this->assign('page',$show);
			$this->display();			
				
	}

	/**
	 * 在线用户添加
	 */
	public function userAdd(){

		if (IS_POST) {

			$data = I('post.');//接收数据

			$data['create_time'] = date('Y-m-d H:i:s',time());
			$str = 'abcdefghjklmnopqrstuvwxyz';
			$data['userId'] = str_shuffle( substr( str_shuffle($str) , 0,5 ).mt_rand(10000000,99999999) );
//			dump ($data);
			$res = $this->userModel->data($data)->add();//写入数据
			
			if ($res) {
				$this->success('添加成功','userList',2);
			}else{
				$this->error('添加失败','userAdd',2);
			}
		}else{
			$this->display();
		}
		
	}

	/**
	 * 黑名单列表
	 */
	public function blackList(){

		// var_dump(I());die;

		$userMobile = I('userMobile');
		$description = I('description');
		$arr['userMobile'] = array('like',"%$userMobile%");
		$arr['description'] = array('like',"%$description%");//where查询条件
		
		$num = $this->userModel->where($arr)->where('userStatus=0')->count();//查询满足条件的记录数
		$Pages = new \Think\Page($num,C('PAGE_NUM'));//分页显示
		
		$Pages -> setConfig('header','共%TOTAL_ROW%条记录');
		$Pages -> setConfig('first','首页');
		$Pages -> setConfig('last','共%TOTAL_PAGE%页');
		$Pages -> setConfig('prev','上一页');
		$Pages -> setConfig('next','下一页');
		$Pages -> setConfig('link','indexpagenumb');
		$Pages -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

		$shows = $Pages->show();//分页输出

		$data = $this->userModel//代入条件查询数据并分页
			->field('userId,userRealName,userMobile,userIdCard,description')
			->where($arr)
			->where('userStatus=0')
			->limit($Pages->firstRow.','.$Pages->listRows)
			->order('create_time desc')
			->select();

		$this->assign('data',$data);
		$this->assign('page',$shows);
		$this->display();
	}

	/**
	 * 黑名单添加
	 */
	public function blackAdd(){

		if (IS_POST) {
			$info = I('post.');
			// $data['description'] = $info['description'];
			$data['userStatus'] = 0;
			$userName = trim($info['userName']);
			$userMobile = trim($info['userMobile']);
			$userIdCard = trim($info['userIdCard']);
			$description = trim($info['description']);
			if (!empty($userName)) {
				$data['userName'] = $userName;
				$map['userName'] = $userName;
			}
			if (!empty($userMobile)) {
				$data['userMobile'] = $userMobile;
				$map['userMobile'] = $userMobile;
			}
			if (!empty($userIdCard)) {
				$data['userIdCard'] = $userIdCard;

			}
			if (!empty($description)) {
				$data['description'] = $description;//判断数据并赋值
			}

			
			$res = $this->userModel->data($data)->where($map)->save();//查询数据并添加黑名单状态

            if ($res){//ajax判断是否添加成功
                $this->ajaxReturn(6);
            }else{
                $this->ajaxReturn(0);
            }
		}else{
			$this->display();
		}
	}

	/**
	 * 黑名单修改
	 */
	public function blackEdit(){

		if (IS_GET) {

			$id = I('userid');	//接收id
			$where = array('userId'=>$id);
			$info = $this->userModel->field('userId,userRealName,userMobile,userIdCard,description')->where($where)->find();//利用id查出一条数据

			$this->assign('info',$info)->display();
		}elseif (IS_POST) {

			$data = I('post.');
			$where = array('userId'=>$data['userId']);
			$res = $this->userModel->data($data)->where($where)->save();//修改post上来的数据

			if ($res) {
                $this->ajaxReturn(6);
			}
		}
	}

	/**
	 * 黑名单删除
	 */
	public function blackDel(){

		$userid = I('userid');
		$data['userStatus'] = 1;
		$data['description'] = '';
		$res = $this->userModel->data($data)->where('userId='."$userid")->save();//修改黑名单状态

		if ($res) {
			$this->ajaxReturn(1);
		}else{
            $this->ajaxReturn(0);
		}
	}

	/**
	 * 检验黑名单添加姓名是否重复
	 */
	public function checkBlackName(){

		$map['userRealName'] = I('get.name');
		$map['userStatus'] = 0;
		$res = $this->userModel->field('userRealName')->where($map)->find();

		if ($res) {
            $this->ajaxReturn(6);
		}

	}

    /**
     * 检验黑名单添加手机是否重复
     */
	public function checkBlackMobile(){

	    $info['userMobile'] = I('get.mobile');
	    $info['userStatus'] = 0;
	    $res = $this->userModel->field('userMobile')->where($info)->find();

	    if ($res) {
            $this->ajaxReturn(6);
        }
    }


}

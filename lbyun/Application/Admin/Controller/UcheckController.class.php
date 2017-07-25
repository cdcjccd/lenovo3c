<?php
namespace Admin\Controller;
use Think\Controller;

class UcheckController extends Controller{

    protected $userModel;

    public function __construct(){
      parent::__construct();
      $this->userModel = M('z_user');
    }

    //检验用户添加
    public function checkUserMobile(){
      $where['userMobile'] = I('mobile');
      $res = $this->userModel->field('userMobile')->where($where)->find();

      if ($res) {
         $this->ajaxReturn(6);
      }
    }




}

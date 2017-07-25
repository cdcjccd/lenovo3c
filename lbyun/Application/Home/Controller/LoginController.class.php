<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/23
 * Time: 9:41
 */
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    /**
     * 登录页面视图
     */
    public function index(){
        $this->display('login');
    }
    /*
     * 登录表单处理
     */
    public function login(){
        // if(!$_POST) halt('页面不存在...');
        if($_SESSION('verify')!=$this->_post('code','md5')){
            $this->error('验证码错误...');
        }
        $username = $this->_post('username');
        $password = $this->_post('password');
        $where =array('username'=>$username);
        $db = M('a_sys_user');
        $user = $db->where($where)->find();
        if(!$user || $user['password']!=$password){
            $this->error('帐号或密码错误...');
        }
        // if($user['lock']){
        //     $this->error('您的帐号已被冻结，请联系联保云客服...');
        // }
        $data=array(
            'id' => $user['id'],
            'last_login_time' => time(),
            'last_login_ip' => get_client_ip(),
        );
        $db->save($data);

        session('uid',$user['id']);
        session('username',$user['username']);
        session('logintime',date('Y-m-d H:i:s',$user['logintime']));
        session('loginip',$user['loginip']);

        redirect(__APP__);
    }
    /*
     * 异步验证管理员帐号
     * */
    public function checkUsername(){
        if(!$this->isAjax()) halt('页面不存在...');
        $username = $this->_post('username');
        $where = array('username' => $username);
        if(M('a_sys_user')->where($where)->username('id')){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
     * 异步验证管理员密码
     * */
    public function checkPassword(){
        if(!$this->isAjax()) halt('页面不存在...');
        $username = $this->_post('username');
        $pwd = $this->_post('password','md5');
        $where = array('username' => $username);
        $password = (M('a_sys_user')->where($where)->getField('password'));
        if($password && $password=$pwd){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
     * 异步验证验证码
     * */
    public function checkVerify(){
        if(!$this->isAjax()) halt('页面不存在...');
        if($_SESSION['verify'] == $this->_post('code','md5')){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
     * 验证码图片
     * */
    public function verify(){
        $config =    array(    
            'fontSize'    =>    25,    // 验证码字体大小    
            'length'      =>    4,     // 验证码位数    
            'useNoise'    =>    false, // 关闭验证码杂点
            'imageW'    =>    0, // 验证码宽度
            'imageH'    =>    0, // 验证码高度
        );
        $Verify =     new \Think\Verify($config);
        $Verify->useImgBg = true; 
        $Verify->entry();
    }
    //注册用户订单处理
    public function addUserHandel(){
        // var_dump(I('post.'));die;
        // if(!$this->isPost()) halt('页面不存在...');
        /*if($_POST['password'] != $_POST['chkpwd']){
            $this->error('两次输入的密码不一致...');
        }*/
        if (IS_POST) {
            $data = I('post.');
            $data['USER_ID'] = md5(time().get_client_ip().rand(00000).$data['username']);
            $data['PASSWORD'] = md5(I('post.password'));
            $data['CREATE_TIME'] = date('Y-m-d H:i:s',time());
            $data['ROLE_ID'] = 3;
            unset($data['rcode']);
            unset($data['FKEY']);
            unset($data['tm']);

            $user = M('a_sys_user');
            $res = $user -> data($data) -> add();
            var_dump($res);die;
        }else{
            $this -> display('login');
        }
        /*$data = array(
            'user_id'=>md5(time().get_client_ip().rand(00000)),
            'username'=>$this->_post['username'],
            'password'=>md5($this->_post['password']),
            'user_name'=>$this->_post['user_name'],
            'mobile'=>$this->_post['mobile'],
            'rights'=>$this->_post['rights'],
            'email'=>$this->_post['email'],
            'user_type'=>$this->_post['user_type'],
            // 'logntime' =>$this->time(),
            // 'loginip'  =>$this->get_client_ip(),
            'create_time'=>date('Y-m-d H:i:s',time()),
            'role_id'=>'3'
        );
        if(M('a_sys_user')->data($data)->add()){
            $this->success('注册成功...',U('index'));
        }else{
            $this->error('注册失败...');
        }*/
    }
}
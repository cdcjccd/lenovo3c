<?php

namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

/*
@@1.直接指向后台模板main 
@@2.url设置简便 admin/home
*/
    public function index(){
    	  if(IS_POST){
           $loginname = I("post.loginname");
           $password  = I("post.password");
           $user=M("zhong_user");
           $s_user=$user->field('userid,userMobile,userProvince,loginname,password,userCity,userAddress')
                        ->where("loginname='$loginname'")
                        ->find();
           if(empty($s_user)){
              $this->error("用户名不存在");
           }
           if($s_user['password']!=$password){
              $this->error("密码错误");
           }
           session("name_id",$s_user['userid']);
           session("user_name",$s_user['loginname']);
           session("phone",$s_user['usermobile']);
           session("province",$s_user['userprovince']);
           session("country",$s_user['usercity']);
           session("s_address",$s_user['userAddress']);
           $this->success("登录成功",U("Index/main"));
           die;
        }
    	  $this -> display();
    } 

    
     /**
     * 退出登录
     */
    public  function login_out() {
 
         session_destroy();//销毁一切数据
         $this -> redirect('Login/index');
    }
  


    //     /**
    //  * 用户注册处理
    //  * @author yz 
    //  * */
    // public function lby_user_add(){
    //   if (IS_POST) {
    //     $post   =  I('post.');
        
    //     $useremail     =  trimall($post['useremail']);
    //     $password     =    trimall($post['password']);
    //     $rcode               =   trimall($post['rcode']);
    //     $telcode              =   trimall($post['telcode']);
    //     $mobile                =    trimall($post['mobile']);
    //     // 校验数据
    //     if (!$post) {
    //       echo 2; die;
    //     }
        
    //     // 校验账号是否合法
    //     if(!preg_match('/^(?:[a-zA-Z0-9]+[_\-\+\.]?)*[a-zA-Z0-9]+@(?:([a-zA-Z0-9]+[_\-]?)*[a-zA-Z0-9]+\.)+([a-zA-Z]{2,})+$/', $useremail)) {
    //       echo 1; die;
    //     }
        
    //     // 校验验证码
    //     if (!$rcode) {
    //       echo 3; die;
    //     }
      
    //     if (!$this->checkVerify($rcode)) {
    //       echo 6;  die;
    //     }
        
    //     // 校验短信验证码是否为空
    //     if(!$telcode) {
    //       echo 5; die;
    //     }
        
    //     // 校验短信验证码是否正确
    //     $messagelog        = M("Messagelog");
    //     $map                        = array();
    //         $map['message_type']        = 1;
    //         $map['mobile']              = $mobile;
    //         $map['verification_code']   = $telcode;
    //         $order                      = 'createdonutc desc';
    //         $msgInfo = $messagelog->field(true)->where($map)->order($order)->find();
    //         if(!$msgInfo){
    //           echo 7; die;
    //         }
            
    //         //校验短信验证码是否过期 
    //         $codeCreateTime             = strtotime($msgInfo['createdonutc']);
    //         $verifyTime                 = 5 * 60;  // 设置过期时间
    //         if(time() > ($codeCreateTime + $verifyTime)){
    //           echo 8; die;
    //         }
            
    //         if($msgInfo['status'] != 1){
    //           echo 9; die;
    //         }
            
    //     // 校验账号是否存在
    //     $uArr = M('User')->where( array('useremail'=>$useremail) )->find();
    //     if ($uArr) {
    //       echo 4; die;
    //     } else {
    //       // 数据入库
    //       $data['useremail']    = $useremail;
    //       $data['password']     = md5($password);
    //       $data['uniqid']           = user_uniqid();  
    //       $data['create_time']     = date('Y-m-d H:i:s',time());
    //       $data['supid']                = 1;  // 超级管理员
    //       $data['name']                 =  $post['name'];
    //       $data['qiye']           =  $post['qiye'];
    //       $data['mobile']         =   $post['mobile'];
    //       if (M('User')->create($data)) {
    //         $uid  = M('User')->add($data);
            
    //         // 添加权限组
    //         $gArr['uid'] = $uid; 
    //         $gArr['group_id'] = 1;  //默认为超级管理员组
    //         M('AuthGroupAccess')->add($gArr);
            
    //         //  添加组织结构
    //         $data2['company_id']      =  '001';
    //         $data2['company_name'] = $post['qiye'];
    //         $data2['uniqid'] =   $data['uniqid'];
    //         $data2['flag']     =  1; 
    //         $data2['pid']      =  0;           // 最顶层
    //         $data2['comnext_id']            = 1;   // 公司
    //         M('Structure')->add($data2);
             
    //         // 修改短信验证码状态
    //         $result = M('messagelog')->where(array('mobile'=>$mobile,'status'=>1))->setField('status',0);
            
    //         // 存储session
    //               $user['uid']        = $uid;
    //               $user['nick_name']  = $nikeName;
    //               $expiretime         = time() + 1800;
    //               session('user',$user);
    //               session('expiretime',$expiretime);    // 设置过期时间 半小时
    //         echo 0; die; 
    //       }
    //     }
    //   }else{
    //     $this ->display('login');
    //   }
    // }
    
    // /**
    //  * 发送短信验证码
    //  * @param $tel     需要接受的短信验证码
    //  * @param $flag   标记,是否需要验证图形验证码[1-需要2-不需要] 默认为不验证
    //  * @param $type  发送短信验证码类型[1-注册2-找回密码3-修改密码] 可扩展 
    //  * @param $code 不需要验证可以不传值
    //  * @author 尹政
    //  */
    // public function telcode() {
      
    //   $tel   =  I('post.mobile');
    //   $type  = I('post.type');
    //   $code   =  I('post.code');
    //   $flag      =  I('post.flag',0); 
      
    //   // 校验数据
    //   if(!$tel) {
    //     $this->ajaxReturn( array('statusCode'=>1,'msg'=>'手机账号不能为空') );
    //   }
      
    //   if(!$type) {
    //     $this->ajaxReturn( array('statusCode'=>1,'msg'=>'手机账号不能为空') );
    //   }
      
    //   if($flag) {
    //     if(!$code) {
    //       $this->ajaxReturn( array('statusCode'=>1,'msg'=>'验证码不能为空') );
    //     } else {
    //       if(!$this->checkVerify($code)){
    //         $this->ajaxReturn( array('statusCode'=>1,'msg'=>'验证码不正确') );
    //       }
    //     }
    //   } 

    //   // 判断发送验证码的途径
    //   if ($type == 1) {
    //     // 校验手机是否可以注册
    //     $userInfo =M('User')->where( array('mobile'=>$tel,'status'=>0) )->find();
    //     if ($userInfo) {
    //       $this->ajaxReturn( array('statusCode'=>'1', 'msg'=>'手机号已注册') ); 
    //     }
    //   }
      
    //   $rand                  = mt_rand(1111,9999);    // 生成验证码随机数
    //   $minture                = 5;                // 验证码过期时间
    //   $nowTime                = time();
    //   $repeatTime              = time() - 60;      // 重复发送有效时间
    //   // 检查是否可以发送验证码
    //   $Messagelog = M('Messagelog');
    //   $ini['mobile']   = $tel;
    //   $info                 = $Messagelog->where($ini)->order('createdonutc desc')->find();
    //   $createtime        = strtotime($info['createdonutc']);      
    //   if($createtime < $repeatTime) {
    //       $res = sendTemplateSMS($tel,$type,$rand);
    //       if($res) {
    //         $this->ajaxReturn( array('statusCode'=>'2', 'msg'=>'发送成功') );
    //       } else {
    //         $this->ajaxReturn( array('statusCode'=>'1', 'msg'=>'发送失败') );
    //       }
    //   } else { // 不发送
    //     $this->ajaxReturn( array('statusCode'=>'1', 'msg'=>'您的请求太频繁了') );
    //   }
    // }
      
    
    /**
     * 退出登录
     */
    // public  function login_out() {
    //   if(UID){
    //     session('[destroy]');
    //     redirect(U('Login/index'));
    //   }else{
    //     redirect(U('Login/index'));
    //   }
    // }

   // /**
   //  * AJAX ( 检查账号是否存在 )
   //  * */ 
   //  public function checkEmail() {
   //      $flag     =    I('post.flag');
   //      if($flag == 'checkemail'){
   //          $val = I('post.val');
   //          $user = M('User')->field('useremail')->where( array('useremail'=>$val) )->find();
   //          if (empty($user)) {
   //              echo 1;
   //          } else {
   //              echo 0;
   //          }
   //          die;
   //      }
   //  }
    
    
    /**
     * 异步验证验证码
     * */
    public function checkVerify($code, $id =''){
      $verify = new \Think\Verify();
      return $verify->check($code, $id);
    }   
    
    /**
     * 验证码图片
     * */
    public function verify(){
      $config =    array(
          'fontSize'    =>    25,    // 验证码字体大小
          'length'      =>      4,     // 验证码位数
          'useNoise'    =>    false, // 关闭验证码杂点
          'imageW'    =>    0, // 验证码宽度
          'imageH'    =>    0, // 验证码高度
      );
      $Verify =     new \Think\Verify($config);
      $Verify->useImgBg = false;
      $Verify->codeSet = '0123456789';
      $Verify->entry();
        
    }    

}
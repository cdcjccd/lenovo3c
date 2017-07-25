<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * User: cd cddong@163.com
 * Date: 2017/6/12
 * Time: 10:43
 */

namespace Admin\Controller;
use Think\Controller;

/**
 * Class UserManageController
 * @package Admin\Controller
 */
class UserManageController extends Controller{

    /**
     * UserManageController constructor.
     * 构造方法  继承父类并实例化Model
     */
    public function __construct(){
        parent::__construct();
        $this -> Model = D('UserManage');
    }

    public function userList(){
//        $company = trim(I('company'));
//        if (!empty($company)){
//            $id = $this->Model->getComId($company);
//            dump ($id['id']);die;
//            $where['company_id'] = array('in',$id['id']);
//        }
        $login_name = trim (I('login_name'));
        if (!empty($login_name)){
            $where['login_name'] = array('like' , "%$login_name%");
        }
        $name = trim (I('name'));
        if (!empty($name)){
            $where['name'] = array('like' , "%$name%");
        }
        $info = $this -> Model -> getAll($where);
//        dump ($this->Model->getLastSql ());die;
//        dump ($info);die();
        $this -> assign('data' , $info[1]);
        $this -> assign('page' , $info[0]);
        $this -> display();
    }


    /**
     *
     */
    public function orgView(){
        $company_id = (I('company_id'));
        $info = $this -> Model -> getCompanyInfo($company_id);
//        dump ($info);
        $this -> assign('company' , $info[0]);
        $this ->assign('upname' , $info[1]);
        $this -> assign('user' , $info[2]);
        $this -> assign('page' , $info[3]);
        $this -> display();
    }

    public function userSearch(){

//        $a = [
//            0 => [
//                'name' => 'zhangsan',
//                'age' => '19'
//            ],
//            1 => [
//                'name' => 'lisi',
//                'age' => '20'
//            ]
//        ];
//        $this -> ajaxReturn($a);die;

        $login_name = trim (I('get.login_name'));
        if (!empty($login_name)){
            $where['login_name'] = array('like' , "%$login_name%");
        }
        $name = trim (I('get.name'));
        if (!empty($name)) {
            $where['name'] = array('like' , "%$name%");
        }
        $office_id = I('get.office_id');
        $data = $this -> Model -> searchUser($where , $office_id);

//        $this -> ajaxReturn($this -> Model -> getLastSql ());die;
        $this -> ajaxReturn($data);

    }


    public function userView(){
        if (IS_POST){
            $data = I('');
            $id = I('post.id');
            $res = $this -> Model -> where('id='.$id) -> save($data);

        }

        $user_id = I('user_id');
        $user_info = $this -> Model -> userForm($user_id);

//        dump ($user_info);
        $this -> assign('user' , $user_info)->display();


    }


}
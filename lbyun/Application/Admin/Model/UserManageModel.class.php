<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * Author: cd
 * Date: 2017/6/16
 * Time: 12:02
 */
namespace Admin\Model;
use Think\Model\RelationModel;

class UserManageModel extends RelationModel{

    protected $tableName = 'sys_user';

    protected $_link = array(
        'Business' => array(
            'mapping_type' => 2,
//            'class_name' => 'Business',
            'foreign_key' => 'company_id',
            'mapping_fields' => 'busName,dealerLev,area,route',
//            'as_field' => 'busName:company_name'
        )
    );



    public function getAll($where){
        $Page = $this -> paging($where);
        $show = $Page -> show();
        $data = $this -> field ('id,company_id,login_name,name,phone,mobile,user_state')
            -> where ($where)
            -> relation (true)
            -> limit($Page -> firstRow.','.$Page -> listRows)
            -> select();
        return array($show , $data);
    }

   /* public function getComId($com_name){
        $where['busName'] = array('like',"%$com_name%");
        $id = M('sys_business')
            ->field ('id,busName')
            ->where($where)
            ->select ();
        if ($id){
            return $id;
        }else{
            return false;
        }
    }*/



    public function getCompanyInfo($company_id){
        $where['id'] = $company_id;
        $companyModel = M('sys_business');
        $company_data = $companyModel
            ->where($where)
            ->find ();

        $up['id'] = $company_data['parentid'];
        $up_company = $companyModel
            -> field ('busName')
            -> where ($up)
            -> find ();

        $map['office_id'] = $company_id;
        $Page = $this -> paging($map);
        $show = $Page -> show();
        $user_data = $this->field ('login_name,name,phone,mobile,user_state,office_id,user_type')
            ->where($map)
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

//        return $company_data['parentId'];
        return array($company_data,$up_company,$user_data,$show);
    }


    public function searchUser($where ,$office_id){
        $Page = $this -> paging($where);
        $show = $Page -> show();
        $data = $this -> field('login_name,office_id,name,phone,mobile,user_state,user_type')
            -> where ($where)
            -> where ('office_id='.$office_id)
            -> limit ($Page -> firstRow.','.$Page -> listRows)
            -> select();

        return array($show , $data);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function userForm($id){
        return $this->field ('del_flag,update_date,create_by,update_by,password',true)
            -> where ('id='.$id)
            -> relation(true)
            -> find ();
    }


    /**
     * @param $where           查询条件
     * @param $lengh           默认分页长度
     * @return \Think\Page     分页对象
     */
    protected function paging($where , $lengh){
        $count = $this -> where($where) -> count();
        $Page = new \Think\Page($count,$lengh?$lengh:C('PAGE_NUM'));
        $Page -> setConfig('header' , '共%TOTAL_ROW%条记录');
        $Page -> setConfig('first'  , '首页');
        $Page -> setConfig('last'   , '共%TOTAL_PAGE%页');
        $Page -> setConfig('prev'   , '上一页');
        $Page -> setConfig('next'   , '下一页');
        $Page -> setConfig('link'   , 'indexpagenumb');
        $Page -> setConfig('theme'  , '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

        return $Page;
    }


}
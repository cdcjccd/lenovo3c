<?php
namespace Admin\Model;
use Think\Model;
class CompanyModel extends Model {

	protected $tableName = 'a_sys_user_attr_company_info';  //  表名

	/*
	查询多条
	带分页
	 */
    public function getAll(){
    	return 123213;

        /*$Page = new \Think\Page($count, $pagenum);// 实例化分页类 传入总记录数和每页显示的记录数($pagenum)

        $data = array();

        $data['show']       = $Page->show();// 分页显示输出

        $data['list'] = M('a_sys_user_attr_company_info as info')    //  查询公司信息表
    		-> field('COMPANYINFO_ID,COMPANY_NAME,CERT,COMPANY_AUTHENTICATION,SERVICE_LEVEL,COMPANY_NUM')  //  需求字段
    		-> join('a_service_level as level on info.SERVICE_ID = level.SERVICE_ID')  //  两表联查
            ->limit($Page->firstRow.','.$Page->listRows)    //   分页查询
    		-> where($where) 		//   查询条件
    		-> select();

    	return $data;*/
    }

    /*
    文件上传
     */
    public function upload(){    
    $upload = new \Think\Upload();// 实例化上传类    
    $upload->maxSize   =     1024*1024*5 ;// 设置附件上传大小    
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
    $upload->rootPath  =     './Public/';  
    $upload->savePath  =     'Uploads/'; // 设置附件上传目录    
    // 上传文件     
    $info   =   $upload->upload();    
    return $info;
    
    }

}
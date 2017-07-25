<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public  $company;
	public function __construct(){
		//  继承父类构造函数
		parent::__construct();

		// $this -> company = D('Company');

	}
    public function Company_Info_List(){
        // $keywords = "",$start_date = "",$end_date = "",$pagenum = 10
        /*
        $user = session('USER_ID');   //   获取已登录用户
         */
      //   $user = 'c4b19072a79e4a6e81f06761f1e6bd2b';
      //   $where = array('USER_ID' => $user);
      //   if(!empty($keywords)){
      //       $where['COMPANY_NAME'] = array('like',"%$keywords%");
      //   }
      //   if (!empty($start_date)) {
      //       $where['CREATE_TIME'] = array('gt',$start_date);
      //   }
      //   if (!empty($end_date)) {
      //       $where['CREATE_TIME'] = array('lt',$end_date);
      //   }
      //   $count = M('a_sys_user_attr_company_info')
      //       -> where($where)
      //       -> count();

      //   $Page = new \Think\Page($count, $pagenum);// 实例化分页类 传入总记录数和每页显示的记录数($pagenum)

      //   $show       = $Page->show();// 分页显示输出

      //   $list = M('a_sys_user_attr_company_info as info')    //  查询公司信息表
    		// -> field('COMPANYINFO_ID,COMPANY_NAME,CERT,COMPANY_AUTHENTICATION,SERVICE_LEVEL,COMPANY_NUM')  //  需求字段
    		// -> join('a_service_level as level on info.SERVICE_ID = level.SERVICE_ID')  //  两表联查
      //       ->limit($Page->firstRow.','.$Page->listRows)    //   分页查询
    		// -> where($where) 		//   查询条件
    		// -> select();

      //   // var_dump($list);die;
        
      //   $this -> assign('show' , $show);
      //   $this -> assign('list' , $list);
        $this -> display('list');
    }

    //  添加
    public function Company_Info_Add(){
        if (IS_POST) {
            $data = I('post.');

            /*array(10) { 
                ["companyName"]=> string(0) ""  //  企业名称非空
                ["cert"]=> string(0) ""         //  营业执照注册号不可为空
                ["compicture"]=> string(0) ""   //  营业执照扫描件不可为空
                ["companyUrl"]=> string(0) ""   //  企业网址不可为空
                ["country"]=> string(0) ""      //  国家地址不可为空
                ["province"]=> string(0) ""     //  所在地区不可为空
                ["city"]=> string(0) ""         //  所在地区不可为空
                ["COMPANY_TYPE"]=> string(13) "" //  公司类型不可为空
                ["streetAddress"]=> string(0) "" //  街道地址不可为空
                ["companyTel"]=> string(0) ""    //  公司电话不可为空
            } */

            /*
            添加验证
             */
            if ($data['companyName'] == '') {
                $this -> error('企业名称不可为空');
            }
            if ($data['cert'] == '') {
                $this -> error('营业执照注册号不可为空');
            }
            /*if ($data['compicture'] == '') {
                $this -> error('营业执照扫描件不可为空');
            }*/
            if ($data['companyUrl'] == '') {
                $this -> error('企业网址不可为空');
            }
            if ($data['country'] == '') {
                $this -> error('国家网址不可为空');
            }
            if ($data['province'] == '') {
                $this -> error('所在城市不可为空');
            }
            if ($data['streetAddress'] == '') {
                $this -> error('公司类型不可为空');
            }
            if ($data['companyTel'] == '') {
                $this -> error('公司电话型不可为空');
            }

            var_dump($data);
        }else{
            $this -> display();
        }
    }

    //   编辑
    public function edit($companyinfo_id){
        //  调用数据库
        $company = M('a_sys_user_attr_company_info as info');

        /*
        通过id查询
         */
        $companyinfo = $company 
            -> where("COMPANYINFO_ID = '$companyinfo_id'") 
            -> find();


        if (IS_POST) {
            /*
            表单提交
            进行修改
             */
            $data = I('post.');
            unset($data['COMPANYINFO_ID']);
            unset($data['USER_ID']);
            $info = $this -> company -> upload();
            if(!$info) {// 上传错误提示错误信息        
                $this -> error($upload -> getError);    
            }else{// 上传成功   
                $cert_url = array();     
                foreach($info as $file){        
                    $cert_url[] = $file['savepath'].$file['savename'];    
                }    
                $data['CERT_URL'] = serialize($cert_url);
            }
            $res = M('a_sys_user_attr_company_info')
                -> where("COMPANYINFO_ID = '$companyinfo_id'")
                -> data($data)
                -> save();
            if ($res) {
                $this -> success('修改成功','Company_Info_List');
                // $this -> redirect('Company/Company_Info_List',array('companyinfo_id' => $companyinfo_id), 3,'修改成功');
            }else{
                $this -> error('修改失败');
            }

        }else{
            /*
            表单展示
             */
            $this -> assign('companyinfo_id',$companyinfo_id);
            $this -> assign('companyinfo',$companyinfo);
            $this -> display();
        }
        
    }

    /*
    上传图片
     */
    public function upload(){
        $this -> display('upload1');
    }
}
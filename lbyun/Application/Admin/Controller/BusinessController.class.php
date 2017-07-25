<?php
/**
 * Created by PhpStorm.
 * PROJECT: Lenovo3C
 * User: cd cddong@163.com
 * Date: 2017/6/12
 * Time: 15:05
 */
namespace Admin\Controller;
use Think\Controller;

/**
 * Class BusinessController  商家管理控制器
 * @package Admin\Controller    命名空间
 */
class BusinessController extends Controller{

    /**
     * @var \Model|string|\Think\Model  对象Model
     */
    protected $Model = '';

    /**
     * BusinessController constructor. 调用Model
     */
    public function __construct(){
        parent::__construct();
        $this->Model = D('Business');
    }

    /**
     *
     */
    public function index(){

        $where['parentId'] = 0;
        $data = $this->Model->getAll($where);
        $this->assign('data',$data[1]);
        $this->assign('page',$data[0]);
        $this->display();
    }

    /**
     * 列表
     */
    public function businessList(){
        $name = trim(I('busName'));
        if (!empty($name)){
            $where['busName'] = array('like',"%$name%");
        }
        $code = trim(I('channelCode'));
        if (!empty($code)){
            $where['channelCode'] = array('like',"%$code%");
        }
        if (empty($name) && empty($code)){
            $where['parentId'] = I('id');
        }

//        $id = I('id');
//        $ids = !empty($id)?$id:'';
//        $where['parentId'] = $ids;
        $data = $this->Model->getAll($where);
//        dump ($this->Model->getLastSql());die();
        $this->assign('data',$data[1]);
        $this->assign('page',$data[0]);
        $this->display();

    }

    /**
     * 添加
     */
    public function businessAdd(){
        if (!IS_POST){
            $list = $this->Model->upList();
            $tonglu = $this->Model->tonglu();

            $this->assign('uplist',$list);
            $this->assign('tonglu',$tonglu);
            $this->display();
        }elseif (IS_POST){
            if (!$this->Model->create()){
                $this->ajaxReturn($this->Model->getError());
                exit;
            }

            $res= $this->Model->add();
            if($res){
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn($this->Model->getLastSql());
            }
        }
    }


}
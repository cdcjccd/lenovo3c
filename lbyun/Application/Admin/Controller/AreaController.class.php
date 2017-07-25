<?php 

namespace Admin\Controller;
use Think\Controller;
use Think\Image\Driver\Gd;

class AreaController extends Controller{

    /**
     * @var \string   实例化的Model对象
     */
    protected $Model = '';
    /**
     * 继承父类构造方法
     * 实例化 AreaModel()给$Model
     */
    public function __construct(){

        parent::__construct();
        $this->Model = D('Area');
    }

    /**
     * 调用Model的 getTree() 方法查出数据
     */
    public function areaList(){

        $data = $this->Model->getTree();

        $this->assign('data',$data)->display();

    }

    /**
     * 接收 id 并传给 getOne() 方法查处一行
     */
    public function areaView(){

        if (IS_GET){
            $info = $this->Model->getOne(I('id'));
            $this->assign('data',$info)->display();
        }
    }

}
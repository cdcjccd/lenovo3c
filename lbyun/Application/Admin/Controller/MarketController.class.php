<?php
namespace Admin\Controller;
use Think\Controller;
/*
* name yjc
* time 2017-6-9   
* action  订单提交
*/
class MarketController extends Controller {
/*
*订单提交模板
*/
    public  function  market_add(){
    	if(IS_POST){
    	    $order = M('market_order');
    	    $data = $order ->create();
            // var_dump($data);die;
    	    $yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
            $data['order_number']=$yCode[intval(date('C'))-2017].strtoupper(dechex(date('m'))).date('d').substr(time(),-5).substr(microtime(),2,5).sprintf('%02d',rand(1111, 9999));//订单数
            // var_dump($data['order_number']);die;
            $data['create_time']=date("Y-m-d H-i-s");//初创时间
            $data['end_time']=date("Y-m-d H-i-s");//下单时间
            $data['order_code'] = $yCode[intval(date('Y'))-2017].strtoupper(dechex(date('m'))).date('d').substr(time(),-5).substr(microtime(),2,5).sprintf('%02d',rand(0, 99));
            $data['order_creater'] = session('user_name');
            $yjk=1;
            $data['product_num']+=$yjk;
          
            if($order->add($data)){
                $this->success("成功",U('Market/market_add'));
            }else{
            	$this->error("失败");
            }
            die;
    	}
/**产品 @显示 类型 @@@名称*/  
            $data  =  M("hou_brand")->select();
            $this  ->brand =  catgory($data,0); 
            $product_n = M('hou_product')->select();
            $this->vip=$product_n;
            $this->nip=$product_n;
    	    $this->display("market_add");
    }

/*
@@1.直接指向后台模板  销售管理
  2.销售添加订单  多条件查询 6-13
*/
    public  function  index(){
         // 链接
        $key = "join_id=1";
         // 创建人     
        $creater = trim(I('get.order_creater'));
        if(!empty($creater)){
         $key.=" and order_creater like '%$creater%'"; 
        }
         // 手机号
        $phone = trim(I('get.order_phone'));
        if(!empty($phone)){
         $key.=" and order_phone like '%$phone%'"; 
        }
        // 订单号
        $number = trim(I('get.order_number'));
        if(!empty($number)){
         $key.=" and order_number='$number'"; 
        }
        // 品牌类型
        $type = I("get.brand_name"); 
        if(!empty($type)){
           $key.=" and brand_name='$type'";
        }

        // 产品名称
        $name = I("get.product_name"); 
        if($name!="0" && $name!=""){
           $key.=" and product_name='$name'";
        }
        // 购买方式
        $buy = trim(I('get.order_card_type'));
         if($buy=="0"){
            $key .= " and order_card_type=$buy";
            }
         if($buy=="1"){
            $key .= " and order_card_type=$buy";
            }
        $order  = M('market_order'); // 实例化User对象
        $count= $order->where($key)->count();    // 查询满足要求的总记录数
        $Page = new \Think\Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();//分页显示输出
        $list = $order->where($key)->limit($Page->firstRow.','.$Page->listRows)->select();// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->asd=array("order_number"=>$number,"order_phone"=>$phone,"order_creater"=>$creater,"brand_name"=>$type,"product_name"=>$name,"order_card_type");
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $data  =  M("hou_brand")->select();
        $this  ->brand =  catgory($data,0);
        $product_n = M('hou_product')->select();
        $this->wing=$product_n;
        $this -> display();

    }
   
}
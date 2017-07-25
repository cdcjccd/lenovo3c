<?php

namespace Admin\Controller;
use Think\Controller;
class InfoController extends Controller {

    /*

    @@产品统计
    */
    public function stat_list(){
        
        $key="join_id=1";
         //时间段查询
        $time = I("post.create_time");
        $s_time =I("post.end_time");
        if($time!="" and $s_time!=""){
        $key.=" and create_time between '$time' and '$s_time'";
        } 

        $good = date("Y-m-d",strtotime('-7 days'));
        $good1 = date("Y-m-d",strtotime('-6 days'));
        $good2 = date("Y-m-d",strtotime('-5 days'));
        $good3 = date("Y-m-d",strtotime('-4 days'));
        $good4 = date("Y-m-d",strtotime('-3 days'));
        $good5 = date("Y-m-d",strtotime('-2 days'));
        $good6 = date("Y-m-d",strtotime('-1 days'));
        
        $qian = M("hou_product")->field("product_id,product_type,product_name")->select();//产品查询
        $order = M("market_order")->field("create_time,end_time")->select();
        $this->asd=array("create_time"=>$time,"end_time"=>$s_time);
        $this->assign("market",$order);
    	$this->assign("qing",$qian);
        $this->king=array($good,$good1,$good2,$good3,$good4,$good5,$good6);
        $this-> display("stat_list");
    }


}
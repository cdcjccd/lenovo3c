<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8">
<title>联保云</title>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?58048c7c6830cb6ac05774e385b98c70";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src="/yjc/lby/Public/Home/public/js/jquery.js"></script>
<link rel="stylesheet" href="/yjc/lby/Public/Home/public/css/commen.css">
<link href="/yjc/lby/Public/Home/public/css/datouwang.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/yjc/lby/Public/Home/public/js/koala.min.1.5.js"></script>
<style type="text/css">
/*联保云*/
.center{ width:1180px; margin:0 auto;}
.center h1{ text-align:center; font-size:24px; color:#333333; margin:80px auto;}
.pic .hide{ background-color:#224ea9;}
.pic .hide a{ color:#fff;}
.pic ul{ float:left; width:236px; height:160px; background-color:#e5e6e6;border-left:#d9d9d9 1px solid; box-sizing:border-box;}
.pic ul:hover{border:#39F 1px solid; box-sizing:border-box;}
.pic img{ display:block; margin-top:20px; margin-left:auto; margin-right:auto;}
.pic a{ display:block;margin-top:20px; text-align:center; font-size:18px; color:#333333; font-weight:bold;}
.title ul{ float:left; width:236px; height:340px;border-left:#280000 1px solid; box-sizing:border-box;}
.title li{ margin-top:14px; margin-bottom:14px; text-align:center;}
.title .one_li{ margin-top:46px;}
.title a{ font-size:16px; color:#333333;}
.title li a:hover{ color:#09F;}
/*banner中间*/
.banner_c{ width:100%; background-color:#208fca;}
.banner_c img{ display:block; margin-left:auto; margin-right:auto; margin-top:50px; margin-bottom:50px;}

/*雪碧图*/
.Sprite {
    position: fixed;
    bottom: 290px;
    right: 0px;

}
.Sprite ul{
    width: 34px;
    height: 38px;
}
.Sprite ul li{
    background: url(/yjc/lby/Public/Home/public/images/CSS_Satyr.png) no-repeat;
    width: 34px;
    height: 38px;
    margin-bottom: 8px;
}
.Sprite ul li:nth-of-type(1):hover{
    background-position:0  -200px;
}
.Sprite ul li:nth-of-type(2){
    background-position:0  -50px;
}
.Sprite ul li:nth-of-type(2):hover{
    background-position:0  -250px;
}
.Sprite ul li:nth-of-type(3){
    background-position:0  -100px;
}
.Sprite ul li:nth-of-type(3):hover{
    background-position:0  -300px;
}
.Sprite ul li:nth-of-type(4){
    background-position:0  -150px;
}
.Sprite ul li:nth-of-type(4):hover{
    background-position:0  -350px;
}
.MPAQCode{
    position: fixed;
    bottom: 200px;
    right: 50px;
    display: none;
}

.PreSaleTelephone{
    width: 403px;
    height: 212px;
    border: 1px solid #c5d8db;
    border-top: 5px solid #00c1de;
    padding-top: 30px;
    font-size: 14px;
    background:#fff;
    position: fixed;
    right: 50px;
    bottom: 100px;
    display: none;

}
.PreSaleTelephone .top img{
    float: left;
    margin-right:25px;
    margin-left: 74px;
    margin-top:5px;
}
.PreSaleTelephone .top{
    overflow: hidden;
    height: 45px;
    margin-bottom:55px;

}
.PreSaleTelephone .top div:first-of-type{
    color: #5d6265;
    height: 27px;
}
.PreSaleTelephone .top div:last-of-type{
    color: #ffa63d;
}
.PreSaleTelephone ul li{
    float: left;
    width: 161px;
    height: 30px;
    padding-left: 40px;

}
.PreSaleTelephone ul li a{
    color: #acb3b7;
}
/*<!--联保云，鼠标划过放大显示-->*/
.center .pic .Big{
	width:280px;
	border:1px solid #00c1de;
	display: none;
	position: absolute;
	margin-left: -20px;
	height:220px;
	margin-top: -150px;
	z-index: 2;
	padding-top: 50px;
	border-bottom:none;
	box-shadow:0px 0px 20px #69dff1;
	background: #00c1de;

}
.center .pic .Big a{
	color:#fff;
}
.center .Small{
	position: relative;
}

.center .title .Big{
	width:280px;
	border:1px solid #00c1de;
	display: none;
	position: absolute;
	margin-left: -20px;
	height:380px;
	z-index: 2;
	background:#FFFFFF;
	bottom: -55px;
	border-top: none;
	box-shadow:0px 0px 20px #69dff1;
}

</style>
</head>

<body>
<!--导航-->
	<div class="nav">
	    	<a href="index.html" target="_blank">
	    		<img class="logo" src="/yjc/lby/Public/Home/public/images/logo.png">
	    		<img class="logo" src="/yjc/lby/Public/Home/public/images/05.gif" style="height:36px; margin-left:20px;">
	    	</a>
	    	<p>Beta</p>
	        <ul class="nav_center">
	        	<li><a href="<?php echo U('Home/Index/index');?>" target="_blank">首页</a></li>
	            <li><a href="<?php echo U('Home/Index/aboutus');?>" >关于联保云</a></li>
	            <li><a href="<?php echo U('Home/Index/caseshow');?>">方案展示</a></li>
	            <li><a href="<?php echo U('Home/Index/cost');?>">产品报价</a></li>
	            <li><a href="<?php echo U('Home/Index/contactus');?>">联系我们</a></li>
	             
	        </ul>
	        <ul class="nav_right">
	        <li><a href=" javascript:void(0);" >管理中心</a></li>            <!-- onclick="cooklogin()" -->
            <li><a href="<?php echo U('Home/Index/login');?>">登录</a></li>
            <li><a href="<?php echo U('Home/Index/login');?>" target="_blank">注册</a></li>
	        </ul>
	        <div class="clearfix"></div>
	    </div>
 <!--banner-->


 <div id="fsD1" class="focus">
    <div id="D1pic1" class="fPic">
    	<div class="fcon" style="display: none;">
            <a target="_blank" href="#"><img src="/yjc/lby/Public/Home/public/images/banner_03_01.jpg" style="opacity: 1; "></a>
        </div>
        <div class="fcon" style="display: none;">
            <a target="_blank" href="#"><img src="/yjc/lby/Public/Home/public/images/banner_03.jpg" style="opacity: 1; "></a>
        </div>
        <div class="fcon" style="display: none;">
            <a target="_blank" href="#"><img src="/yjc/lby/Public/Home/public/images/banner_01.jpg" style="opacity: 1; "></a>
        </div>
        <div class="fcon" style="display: none;">
            <a target="_blank" href="#"><img src="/yjc/lby/Public/Home/public/images/banner_02.jpg" style="opacity: 1; "></a>
        </div>

    </div>
    <div class="fbg">
    <div class="D1fBt" id="D1fBt">
        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>1</i></a>
        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>
        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>3</i></a>
        <!-- <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>4</i></a>  -->
    </div>
    </div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
	Qfast.add('widgets', { path: "/yjc/lby/Public/Home/public/js/terminator2.2.min.js", type: "js", requires: ['fx'] });
	Qfast(false, 'widgets', function () {
		K.tabs({
			id: 'fsD1',  			//焦点图包裹id
			conId: "D1pic1",  		//大图域包裹id
			tabId:"D1fBt",  		//小圆点数字提示id
			tabTn:"a",
			conCn: '.fcon',			//大图域配置class
			auto: 1, 				//自动播放1或0
			effect: 'fade', 		//效果配置
			eType: 'click', 		//点击事件
			pageBt:true,			//是否有按钮切换页码
			bns: ['.prev', '.next'],//前后按钮配置class
			interval: 4000 			//停顿时间
		})
	})
</script>



<!--联保云-->
	<div class="center">
    	<h1>联保云——全球首创售后保障服务云平台</h1>
        <div class="pic">
            <ul class="Small">
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_09.png"></li>
                <li><a href="">免费入住</a></li>
            <ul class="Big">
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_09-01.png"></li>
                <li><a href="">免费入住</a></li>
            </ul>
            </ul>



            <ul class="Small">
            	<li><a href="yunchanpin.html" target="_blank"><img src="/yjc/lby/Public/Home/public/images/lxy_index_13.png"></a></li>
                <li><a href="yunchanpin.html" target="_blank">产品服务卡</a></li>
             <ul class="Big">
            	<li><a href="yunchanpin.html" target="_blank"><img src="/yjc/lby/Public/Home/public/images/lxy_index_13-01.png"></a></li>
                <li><a href="yunchanpin.html" target="_blank">产品服务卡</a></li>
            </ul>
            </ul>
        	<ul class="show Small">
                <li><a href="yanbao.html" target="_blank"><img src="/yjc/lby/Public/Home/public/images/lxy_index_11.png"></a></li>
                <li><a href="yanbao.html" target="_blank">云延保服务</a></li>
              <ul class="Big">
                <li><a href="yanbao.html" target="_blank"><img src="/yjc/lby/Public/Home/public/images/lxy_index_11-01.png"></a></li>
                <li><a href="yanbao.html" target="_blank">云延保服务</a></li>
            </ul>
            </ul>
            <ul class="Small">
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_15.png"></li>
                <li><a href="">云售后服务</a></li>
              <ul class="Big">
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_15-01.png"></li>
                <li><a href="">云售后服务</a></li>
            </ul>
            </ul>

            <ul class="Small">
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_17.png"></li>
                <li><a href="">合作伙伴加盟</a></li>
             <ul class="Big">
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_17-01.png"></li>
                <li><a href="">合作伙伴加盟</a></li>
            </ul>
            </ul>

            <div class="clearfix"></div>
        </div>
		<div class="title">
        	<ul class="Small">
                <li class="one_li"><a href="<%=basePath%>go_login">家电、智能硬件厂商入住</a></li>
                <li><a href="<%=basePath%>go_login">其他消费产品厂商入住</a></li>
                <li><a href="<%=basePath%>go_login">产品经销商、代理入住</a></li>
                <li><a href="<%=basePath%>go_login">线上电商、店铺入住</a></li>
                <li><a href="<%=basePath%>go_login">线下连锁和卖场入住</a></li>
                <li><a href="<%=basePath%>go_login">业务人员、店员个人入住</a></li>
        	<ul class="Big">
                <li class="one_li"><a href="<%=basePath%>go_login">家电、智能硬件厂商入住</a></li>
                <li><a href="<%=basePath%>go_login">其他消费产品厂商入住</a></li>
                <li><a href="<%=basePath%>go_login">产品经销商、代理入住</a></li>
                <li><a href="<%=basePath%>go_login">线上电商、店铺入住</a></li>
                <li><a href="<%=basePath%>go_login">线下连锁和卖场入住</a></li>
                <li><a href="<%=basePath%>go_login">业务人员、店员个人入住</a></li>
            </ul>
            </ul>





            <ul class="Small">
                <li class="one_li"><a href="<%=basePath%>go_login" target="_blank">制作云产品介绍、说明书</a></li>
                <li><a href="<%=basePath%>go_login">云产品保修卡</a></li>
                <li><a href="<%=basePath%>go_login" target="_blank">云产品真伪验证</a></li>
                <li><a href="<%=basePath%>go_login" target="_blank">云保修查询</a>、<a href="zaixiankefu.html" target="_blank">在线客服</li>
                <li><a href="<%=basePath%>go_login">云知识库(常见问题Q&A)</a></li>
                <li><a href="<%=basePath%>go_login">云在线咨询与报修</a></li>

            <ul class="Big">
                <li class="one_li"><a href="<%=basePath%>go_login" target="_blank">制作云产品介绍、说明书</a></li>
                <li><a href="<%=basePath%>go_login">云产品保修卡</a></li>
                <li><a href="<%=basePath%>go_login" target="_blank">云产品真伪验证</a></li>
                <li><a href="<%=basePath%>go_login" target="_blank">云保修查询</a>、<a href="zaixiankefu.html" target="_blank">在线客服</li>
                <li><a href="<%=basePath%>go_login">云知识库(常见问题Q&A)</a></li>
                <li><a href="<%=basePath%>go_login">云在线咨询与报修</a></li>

            </ul>
            </ul>
             <ul class="Small">
                <li class="one_li"><a href="<%=basePath%>go_login" target="_blank">免费生成延保产品</a></li>
                <li><a href="<%=basePath%>go_login">赠送延保</a></li>
                <li><a href="<%=basePath%>go_login">销售延保</a></li>
                <li><a href="<%=basePath%>go_login">销量、注册量统计</a></li>
                <li><a href="<%=basePath%>go_login">延保出险率统计</a></li>
                <li><a href="<%=basePath%>go_login">延保售后管理</a></li>
             <ul class="Big">
                <li class="one_li"><a href="<%=basePath%>go_login" target="_blank">免费生成延保产品</a></li>
                <li><a href="<%=basePath%>go_login">赠送延保</a></li>
                <li><a href="<%=basePath%>go_login">销售延保</a></li>
                <li><a href="<%=basePath%>go_login">销量、注册量统计</a></li>
                <li><a href="<%=basePath%>go_login">延保出险率统计</a></li>
                <li><a href="<%=basePath%>go_login">延保售后管理</a></li>
            </ul>
            </ul>

            <ul class="Small">
            	<li class="one_li"><a href="<%=basePath%>go_login">云客服（呼叫中心）托管</a></li>
                <li><a href="<%=basePath%>go_login">云售后服务网点托管</a></li>
                <li><a href="<%=basePath%>go_login">云回访、满意度调研</a></li>
                <li><a href="<%=basePath%>go_login">云客户关怀</a></li>
                <li><a href="<%=basePath%>go_login">云舆情监控</a></li>
                <li><a href="<%=basePath%>go_login">云语音、语义分析</a></li>

             <ul class="Big">
             	<li class="one_li"><a href="<%=basePath%>go_login">云客服（呼叫中心）托管</a></li>
                <li><a href="<%=basePath%>go_login">云售后服务网点托管</a></li>
                <li><a href="<%=basePath%>go_login">云回访、满意度调研</a></li>
                <li><a href="<%=basePath%>go_login">云客户关怀</a></li>
                <li><a href="<%=basePath%>go_login">云舆情监控</a></li>
                <li><a href="<%=basePath%>go_login">云语音、语义分析</a></li>

            </ul>
            </ul>


            <ul class="Small" style="border-right :1px solid #280000; box-sizing:border-box;">
                <li class="one_li"><a href="<%=basePath%>go_login">全国各类售后服务网点加盟</a></li>
                <li><a href="<%=basePath%>go_login">各类呼叫中心加盟</a></li>
                <li><a href="<%=basePath%>go_login">联保云代理商加盟</a></li>
                <li><a href="<%=basePath%>go_login">广告、推广合作</a></li>
             <ul class="Big" style="border-right :1px solid #280000; box-sizing:border-box;">
                <li class="one_li"><a href="<%=basePath%>go_login">全国各类售后服务网点加盟</a></li>
                <li><a href="<%=basePath%>go_login">各类呼叫中心加盟</a></li>
                <li><a href="<%=basePath%>go_login">联保云代理商加盟</a></li>
                <li><a href="<%=basePath%>go_login">广告、推广合作</a></li>
            </ul>
            </ul>


            <div class="clearfix"></div>
        </div>
    </div>
<!--banner中间-->
	<div class="banner_c">
    	<img src="/yjc/lby/Public/Home/public/images/banner_04.png">
    </div>
<!--页脚-->
	<div class="footer">
        <div class="footer_t">
        	<ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_29.png"></li>
                <li><p>十分钟让您拥有云端售后能力</p></li>
            </ul>
            <ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_31.png"></li>
                <li><p>7*24小时售后顾问支持</p></li>
            </ul>
            <ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_33.png"></li>
                <li><p>极大降低服务成本</p></li>
            </ul>
            <ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_35.png"></li>
                <li><p>助你赢取客户忠诚度</p></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="footer_c">
        	<ul>
            	<li><img src="/yjc/lby/Public/Home/public/images/lxy_index_41.png"></li>
                <li>
                	<p>服务热线</p>
                    <p>400-882-2088</p>
                </li>
            </ul>
            <ul style=" margin-left:120px;">
            	<li><a href="">为您的产品保驾护航&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;精准的方案推荐&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;灵活的合作方案&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;一对一贴心帮助服务</a></li>
                <div class="clearfix"></div>
            </ul>
            <div class="clearfix"></div>
        </div>
<!--        <div class="link">
        	<p>友情链接：</p>
        </div>-->
        <div class="footer_b">
            <span>Copyright&nbsp;&nbsp;联保云&nbsp;版权所有2016&nbsp;&nbsp;
            	<a target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备16042723号-1</a>&nbsp;&nbsp;
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802022735">
		 			<img src="/yjc/lby/Public/Home/public/images/record.png">
		 			京公网安备 11010802022735号
		 		</a>
		 	</span>
        </div>
    </div>

        <!-- 雪碧图 -->
        <div class="PreSaleTelephone">
	        <div class="top">
	        <img src="/yjc/lby/Public/Home/public/images/PreSaleTelephoneIcon.png" alt="">
	        <div>售前咨询电话</div>
	        <div>400-882-2088</div>
	        </div>
	         <ul>
	         <li><a href="">全方位的购买咨询</a></li>
	         <li><a href="">精确的配置推荐</a></li>
	         <li><a href="">灵活的价格方案</a></li>
	         <li><a href="">1对1的贴心服务</a></li>
	         </ul>
	        </div>
	        <div class="MPAQCode"><img src="public/images/MobilePhoneAppQrCode.png" alt=""></div>
	        <div class="Sprite">
	            <ul>
	                <li></li>
	                <li></li>
	                <li></li>
	                <li></li>
	
	            </ul>
	        </div>
    </div>
</body>
<script>
<!-- 雪碧图 -->
var PreSaleTelephone=document.querySelector(".PreSaleTelephone");
var MPAQCode=document.querySelector(".MPAQCode");
var LiSprites=document.querySelectorAll(".Sprite ul li");

    LiSprites[1].onmouseover=function(){
         PreSaleTelephone.style.display="block";
    }
    LiSprites[1].onmouseout=function(){
         PreSaleTelephone.style.display="none";
    }

    LiSprites[2].onmouseover=function(){
         MPAQCode.style.display="block";
    }
    LiSprites[2].onmouseout=function(){
         MPAQCode.style.display="none";
    }
</script>
<script>
<!--联保云，鼠标划过放大显示-->

var UlCenterPSmall=document.querySelectorAll(".center .Small");
var UlCenterPBig=document.querySelectorAll(".center .Big");

   for(var i=0;i<UlCenterPSmall.length;i++){
   console.log(i); 	
   	UlCenterPSmall[i].index=i;
	   	if(i<5&&i>=0){
	     UlCenterPSmall[i].onmouseover=function(){ 	
	        UlCenterPBig[this.index].style.display="block";
	        UlCenterPBig[this.index+5].style.display="block";  	
	     }
   	}else{
 	      UlCenterPSmall[i].onmouseover=function(){ 	
	        UlCenterPBig[this.index].style.display="block";
	        UlCenterPBig[this.index-5].style.display="block";  	
	     }  		
   	}
	   	

    UlCenterPBig[i].onmouseout=function(){
    for(var j=0;j<UlCenterPBig.length;j++){
    UlCenterPBig[j].style.display="none";	
    }
      
  
   }
  
}
</script>
</html>
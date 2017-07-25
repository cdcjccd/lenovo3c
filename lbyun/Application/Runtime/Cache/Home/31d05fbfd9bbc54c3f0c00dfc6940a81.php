<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="UTF-8">
		<title>案例展示</title>
		<base href="<%=basePath%>">
		<link rel="stylesheet" href="/yjc/lby/Public/Home/public/css/commen.css">
		<link rel="stylesheet" href="/yjc/lby/Public/Home/public/css/shoufei.css">
		<link href="/yjc/lby/Public/Home/public/css/datouwang.css" rel="stylesheet" type="text/css" />
		<style>
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
    background: url("/yjc/lby/Public/Home/public/images/images/CSS_Satyr.png") no-repeat;
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
			
		</style>
		<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
		<script src="/yjc/lby/Public/Home/public/js/jquery-1.8.3.min.js"></script>
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
<!--	    <div class="fcon">
            <a target="_blank"><img src="images/lianxi.jpg" style="opacity: 1; "></a>
        </div>
        -->
      <div role="main" class="main yx-wx"> 
	        <div class="sec4 pt-80" style="position: relative;">
	            <div class="container p-none" style="width:1180px; margin:0 auto;">
	               
	                <div class="col-md-5 p-none center function-pic">
	                    <div class="pic">
	
	                    </div>
	                </div>
	                <div class="col-md-7 p-none text-right pt-60">
	                	<p>案例展示</p>
	                 	<p>快速为您的企业创建产品服务中心</p>
	                    <div class="top">
	                        <div class="dd pull-right ml-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/08194917wjel.png')" style="margin-right:0;">售后<br>保修卡</div>
	                        <div class="dd pull-right ml-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/08194927gfb8.png')">真伪<br>验证</div>
	                        <div class="dd pull-right ml-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/08194907dc6y.png')">产品<br>展示</div>
	                        <div class="dd pull-right ml-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/08194808j7tx.png')">会员<br>注册</div>
	                        <div class="dd pull-right ml-lg pt-xl" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/08194858acw7.png')">服务<br>首页</div>
	                        
	                    </div>
	                    <div class="bottom">
	                        <div class="dd pull-right ml-lg mt-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/081948387693.png')" style="margin-right:0;">产品<br>配置单</div>
	                        <div class="dd pull-right ml-lg mt-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/081948284kzi.png')">购买<br>延保</div>
	                        <div class="dd pull-right ml-lg mt-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/08194818gdsc.png')">增值<br>商城</div>
	                        <div class="dd pull-right ml-lg mt-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/081929364cwn.png')">常见<br>问题</div>
	                        <div class="dd pull-right ml-lg mt-lg" onmouseover="changeImg('/yjc/lby/Public/Home/public/images/081929365cwn.png')">网上<br>报修</div>
	                    </div>
	                    
	                </div>
	                <div style="clear:both;"></div>
	            </div>
	        </div>   
	    </div>
<!--案例-->
		<div class="title_anli">
			<h3>我们的案例</h3>
			<p></p>
		</div>
<!---->
		<div class="lanrenzhijia">
			<ul class="clearfix">
				<li>
					<div class="photo">
						<p>希澈科技</p>
						<img src="/yjc/lby/Public/Home/public/images/02.jpg" width="300" />
						
					</div>
					<div class="rsp"></div>
					<div class="text">
						<a href="">
							<h3>拿起手机扫一扫</h3>
							<!--<div>POST TIME :2016.12.12</div>-->
							<img src="/yjc/lby/Public/Home/public/images/erweima.jpg" width="100px" style="display: block; margin: 10px auto;">
						</a>
					</div>
				</li>
				<li>
					<div class="photo">
						<p>炽魂电竞</p>
						<img src="/yjc/lby/Public/Home/public/images/03.jpg" width="300"/>
						
					</div>
					<div class="rsp"></div>
					<div class="text">
						<a href="">
							<h3>拿起手机扫一扫</h3>
							<!--<div>POST TIME :2016.12.12</div>-->
							<img src="/yjc/lby/Public/Home/public/images/erweima_02.jpg" width="100px" style="display: block; margin: 10px auto;">
						</a>
					</div>
				</li>
			</ul>
			<div class="clear"></div>
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
         <li><a href="">一对一的贴心服务</a></li>
         </ul>
        </div>
        <div class="MPAQCode"><img src="/yjc/lby/Public/Home/public/images/MobilePhoneAppQrCode.png" alt=""></div>
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
<!-- 雪碧图 -->
	<script>
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
<!--交换图片-->
<script>
    function changeImg(a){
        $(".yx-wx .function-pic div").css("background","url("+a+") no-repeat");
    }
</script>
<!--鼠标经过-->
<script>
$(function(){
	$(".lanrenzhijia ul li .rsp").hide();	
	$(".lanrenzhijia ul li").hover(function(){
		$(this).find(".rsp").stop().fadeTo(500,0.5)
		$(this).find(".text").stop().animate({left:'0'}, {duration: 500})
	},
	function(){
		$(this).find(".rsp").stop().fadeTo(500,0)
		$(this).find(".text").stop().animate({left:'300'}, {duration: "fast"})
		$(this).find(".text").animate({left:'-300'}, {duration: 0})
	});
});
</script>
</html>
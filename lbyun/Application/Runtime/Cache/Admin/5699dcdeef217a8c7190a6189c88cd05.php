<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

<!-- jsp文件头和头部 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>联保云</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/bootstrap.css" />
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/font-awesome.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-fonts.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-ie.css" />
		<![endif]-->
		<!-- inline styles related to this page -->
		<!-- ace settings handler -->
		<script src="/Public/Admin/static/ace/js/ace-extra.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		<!--[if lte IE 8]>
		<script src="/Public/Admin/static/ace/js/html5shiv.js"></script>
		<script src="/Public/Admin/static/ace/js/respond.js"></script>
		<![endif]-->

<!-- 百度echarts -->
<script src="/Public/Admin/plugins/echarts/echarts.min.js"></script>
<script src="/Public/Admin/ace/js/jquery.js"></script>
<link rel="stylesheet" href="/Public/Admin/static/login/css/commen.css">
<link rel="stylesheet" href="/Public/Admin/static/login/css/center_houtai.css">
</head>
<body class="no-skin">

	<!-- /section:basics/navbar.layout -->
	<div class="main-container" id="main-container">
		<!-- /section:basics/sidebar -->
		<div class="main-content">
			<div class="main-content-inner">
				<div class="page-content">
					<div class="hr hr-18 dotted hr-double"></div>
					<div class="row">
						<div class="col-xs-12">

							<!-- <div class="alert alert-block alert-success">
								<button type="button" class="close" data-dismiss="alert">
									<i class="ace-icon fa fa-times"></i>
								</button>
								<i class="ace-icon fa fa-check green"></i>
								欢迎使用 云联保 系统&nbsp;&nbsp;
								<strong class="green">
									&nbsp;服务热线：400-882-2088
									<title>云联保</title>
							</div> -->


<!--云联保-->
	<div class="center" style="margin-top:30px;">
    	<!-- <h1>云联保——全球首创售后服务云平台</h1> -->
        <div class="pic">
            <ul class="Small">
            	<li><a href="companyinfo/list.do" ><img src="/Public/Admin/static/images/lxy_index_09.png"></a></li>
                <li><a href="companyinfo/list.do">免费入住</a></li>
            <ul class="Big">
            	<li> <a href="companyinfo/list.do" ><img  src="/Public/Admin/static/images/lxy_index_09-01.png"></a></li>
                <li><a href="companyinfo/list.do" >免费入住</a></li>
            </ul>                 
            </ul>
          
          	 <ul class="Small">
            	<li><a href="device/life_list.do" ><img src="/Public/Admin/static/images/lxy_index_13.png"></a></li>
                <li><a href="device/life_list.do" >产品生命卡</a></li>
             <ul class="Big">
            	<li><a href="device/life_list.do" ><img src="/Public/Admin/static/images/lxy_index_13-01.png"></a></li>
                <li><a href="device/life_list.do" >产品生命卡</a></li>
            </ul>                  
            </ul>
          
            <ul class="show Small">
                <li><a href="welcome/delay.jsp" ><img src="/Public/Admin/static/images/lxy_index_11.png"></a></li>
                <li><a href="welcome/delay.jsp" >云延保服务</a></li>
              <ul class="Big">
                <li><a href="welcome/delay.jsp" ><img src="/Public/Admin/static/images/lxy_index_11-01.png"></a></li>
                <li><a href="welcome/delay.jsp" >云延保服务</a></li>
            </ul>                     
            </ul>
         
           
        
            <ul class="Small">
            	<li> <a href="welcome/delay.jsp" ><img src="/Public/Admin/static/images/lxy_index_15.png"></a></li>
                <li><a href="welcome/delay.jsp" >云客服经营</a></li>
              <ul class="Big">
            	<li><a href="welcome/delay.jsp" ><img src="/Public/Admin/static/images/lxy_index_15-01.png"></a></li>
                <li><a href="welcome/delay.jsp" >云客服经营</a></li>
            </ul>                
            </ul>
          
            <ul class="Small">
            	<li><a href="welcome/delay.jsp"><img src="/Public/Admin/static/images/lxy_index_17.png"></a></li>
                <li><a href="welcome/delay.jsp">合作伙伴加盟</a></li>
             <ul class="Big">
            	<li> <a  href="welcome/delay.jsp"><img src="/Public/Admin/static/images/lxy_index_17-01.png"></a></li>
                <li><a href="welcome/delay.jsp">合作伙伴加盟</a></li>
            </ul>                 
            </ul>
         
            <div class="clearfix"></div>
        </div>
		<div class="title">
        	<ul class="Small">
                <li class="one_li"><a href="companyinfo/list.do">家电、智能硬件厂商入住</a></li>
                <li><a href="companyinfo/list.do" >其他消费产品厂商入住</a></li>
                <li><a href="companyinfo/list.do" >产品经销商、代理入住</a></li>
                <li><a href="companyinfo/list.do" >线上电商、店铺入住</a></li>
                <li><a href="companyinfo/list.do" >线下连锁和卖场入住</a></li>
                <li><a href="companyinfo/list.do" >业务人员、店员个人入住</a></li>
        	<ul class="Big">
                <li class="one_li"><a href="companyinfo/list.do" >家电、智能硬件厂商入住</a></li>
                <li><a href="companyinfo/list.do" >其他消费产品厂商入住</a></li>
                <li><a href="companyinfo/list.do" >产品经销商、代理入住</a></li>
                <li><a href="companyinfo/list.do" >线上电商、店铺入住</a></li>
                <li><a href="companyinfo/list.do" >线下连锁和卖场入住</a></li>
                <li><a href="companyinfo/list.do" >业务人员、店员个人入住</a></li>
            </ul>                
            </ul>
            
            
            
            
            
            <ul class="Small">
                <li class="one_li"><a href="instructions/list.do" >制作云产品介绍、说明书</a></li>
                <li><a href="warranty_card/list.do" >云产品保修卡</a></li>
                <li><a href="instructions/list.do" >云产品真伪验证</a></li>
                <li><a href="instructions/list.do" >云保修查询</a>、<a href="instructions/list.do"  >在线客服 </a></li>
                <li><a href="question/list.do" >云知识库(常见问题Q&A)</a></li>
                <li><a href="instructions/list.do" >云在线咨询与报修</a></li>
               
            <ul class="Big">
                <li class="one_li"><a href="instructions/list.do" >制作云产品介绍、说明书</a></li>
                <li><a href="warranty_card/list.do" >云产品保修卡</a></li>
                <li><a  href="welcome/delay.jsp" >云产品真伪验证</a></li>
                <li><a  href="welcome/delay.jsp" >云保修查询</a>、<a  href="welcome/delay.jsp"  >在线客服 </a></li>
                <li><a href="question/list.do" >云知识库(常见问题Q&A)</a></li>
                <li><a href="advisory/list.do" >云在线咨询与报修</a></li>
               
            </ul>                
            </ul>
            
            <ul class="Small">
                <li class="one_li"><a href="welcome/delay.jsp" >免费生成延保产品</a></li>
                <li><a href="welcome/delay.jsp" >赠送延保</a></li>
                <li><a href="welcome/delay.jsp" >销售延保</a></li>
                <li><a href="welcome/delay.jsp" >销量、注册量统计</a></li>
                <li><a href="welcome/delay.jsp" >延保出险率统计</a></li>
                <li><a href="welcome/delay.jsp" >延保售后管理</a></li>
                <li><a href="welcome/delay.jsp" >云客服（呼叫中心）托管</a></li>
                <li><a href="welcome/delay.jsp" >云售后服务网点托管</a></li>
             <ul class="Big">
                <li class="one_li"><a href="welcome/delay.jsp" >免费生成延保产品</a></li>
                <li><a href="welcome/delay.jsp" >赠送延保</a></li>
                <li><a href="welcome/delay.jsp" >销售延保</a></li>
                <li><a href="welcome/delay.jsp">销量、注册量统计</a></li>
                <li><a href="welcome/delay.jsp">延保出险率统计</a></li>
                <li><a href="welcome/delay.jsp">延保售后管理</a></li>
                <li><a href="callcenter/goAdd.do">云客服（呼叫中心）托管</a></li>
                <li><a href="sernethost/goAdd.do">云售后服务网点托管</a></li>
            </ul>               
            </ul>
            
            
            <ul class="Small">
                <li class="one_li"><a href="welcome/delay.jsp" >云回访、满意度调研</a></li>
                <li><a href="welcome/delay.jsp" >云客户关怀</a></li>
                <li><a href="welcome/delay.jsp" >云舆情监控</a></li>
                <li><a href="welcome/delay.jsp" >云语音、语义分析</a></li>

             <ul class="Big">
                <li class="one_li"><a href="welcome/delay.jsp" >云回访、满意度调研</a></li>
                <li><a href="welcome/delay.jsp" >云客户关怀</a></li>
                <li><a href="welcome/delay.jsp" >云舆情监控</a></li>
                <li><a href="welcome/delay.jsp" >云语音、语义分析</a></li>
             
            </ul>               
            </ul>
            
            
            <ul class="Small" style="border-right :1px solid #280000; box-sizing:border-box;">
                <li class="one_li"><a href="compar/list.do">全国各类售后服务网点加盟</a></li>
                <li><a href="compar/list.do">各类呼叫中心加盟</a></li>
                <li><a href="compar/list.do">云联保代理商加盟</a></li>
                <li><a href="compar/list.do">广告、推广合作</a></li>
             <ul class="Big" style="border-right :1px solid #280000; box-sizing:border-box;">
                <li class="one_li"><a href="compar/list.do">全国各类售后服务网点加盟</a></li>
                <li><a href="compar/list.do">各类呼叫中心加盟</a></li>
                <li><a href="compar/list.do">云联保代理商加盟</a></li>
                <li><a href="compar/list.do">广告、推广合作</a></li>            
            </ul>                  
            </ul>
            
        
            <div class="clearfix"></div>
        </div>
    </div> 

<script>
<!--云联保，鼠标划过放大显示-->

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
									<!-- <a href="http://www.fhadmin.org" target="_blank"><small>(&nbsp;www.fhadmin.org&nbsp;)</small></a> -->
								</strong>
							</div>
							
							
							<!-- <div id="main" style="width: 600px;height:300px;"></div>
							<script type="text/javascript">
						        // 基于准备好的dom，初始化echarts实例
						        var myChart = echarts.init(document.getElementById('main'));
						
						        // 指定图表的配置项和数据
								var option = {
						            title: {
						                text: 'FH Admin用户统计'
						            },
						            tooltip: {},
						            xAxis: {
						                data: ["系统用户","系统会员"]
						            },
						            yAxis: {},
						            series: [
						               {
						                name: '',
						                type: 'bar',
						                data: [40,0],
						                itemStyle: {
						                    normal: {
						                        color: function(params) {
						                            // build a color map as your need.
						                            var colorList = ['#6FB3E0','#87B87F'];
						                            return colorList[params.dataIndex];
						                        }
						                    }
						                }
						               }
						            ]
						        };	        

						        // 使用刚指定的配置项和数据显示图表。
						        myChart.setOption(option);
						    </script>
							
						</div> -->
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.page-content -->
			</div>
		</div>
		<!-- /.main-content -->


		<!-- 返回顶部 -->
		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>

	</div>
	<!-- /.main-container -->

	<!-- basic scripts -->
	<!-- 页面底部js¨ -->
			
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='/Public/Admin/static/ace/js/jquery1x.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Admin/static/ace/js/bootstrap.js"></script>
	<!-- ace scripts -->
	<script src="/Public/Admin/static/ace/js/ace/ace.js"></script>
	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		// $(top.hangge());
	</script>
<script type="text/javascript" src="/Public/Admin/static/ace/js/jquery.js"></script>
</body>
</html>
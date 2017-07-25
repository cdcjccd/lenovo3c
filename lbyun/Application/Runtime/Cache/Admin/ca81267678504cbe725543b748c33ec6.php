<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- jsp文件头和头部 -->
			<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->
		<meta charset="utf-8" />
		<title>联保云</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/Admin/ace/css/bootstrap.css" />
		<link rel="stylesheet" href="/Public/Admin/ace/css/font-awesome.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/Admin/ace/css/ace-fonts.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/Admin/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/Admin/ace/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/Admin/ace/css/ace-ie.css" />
		<![endif]-->
		<!-- inline styles related to this page -->
		<!-- ace settings handler -->
		<script src="/Public/Admin/ace/js/ace-extra.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		<!--[if lte IE 8]>
		<script src="/Public/Admin/ace/js/html5shiv.js"></script>
		<script src="/Public/Admin/ace/js/respond.js"></script>
		<![endif]-->

	<style type="text/css">
	.commitopacity{position:absolute; width:100%; height:100px; background:#7f7f7f; filter:alpha(opacity=50); -moz-opacity:0.8; -khtml-opacity: 0.5; opacity: 0.5; top:0px; z-index:99999;}
	</style>
	
	<!-- 即时通讯 -->
	<link rel="stylesheet" type="text/css" href="plugins/websocketInstantMsg/ext4/resources/css/ext-all.css">
	<link rel="stylesheet" type="text/css" href="plugins/websocketInstantMsg/css/websocket.css" />
	<script type="text/javascript" src="plugins/websocketInstantMsg/ext4/ext-all-debug.js"></script>
	<script type="text/javascript" src="plugins/websocketInstantMsg/websocket.js"></script>
	<!-- 即时通讯 -->
	
</head>
	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		
		<!-- 页面顶部¨ -->
				<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed');}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a class="navbar-brand">
						<!--  <small> <i class="fa fa-leaf"></i>  </small>-->
						<img src="/Public/Admin/ace/images/logo.png">
					</a><!--  <span style="line-height:20px; color:#fff;">一站式售后服务</span>-->

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!--<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">2</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									预留功能,待开发
								</li>
								<li class="dropdown-footer">
									<a href="javascript:">
										预留功能,待开发
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li title="即时聊天" class="purple"  onclick="creatw();">--><!-- creatw()在 WebRoot\plugins\websocketInstantMsg\websocket.js中 -->
							<!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important"></span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-bell-o"></i>
									FH Aadmin 即时通讯
								</li>
							</ul>
						</li>

						<li title="站内信" class="green" onclick="fhsms();" id="fhsmstss">--><!-- fhsms()在 WebRoot\static\js\myjs\head.js中 -->
							<!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success" id="fhsmsCount"></span>
							</a>
						</li>-->

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown"  class="dropdown-toggle" href="#">
								<!--  <img class="nav-user-photo" src="ace/avatars/user.jpg" alt="Jason's Photo" id="userPhoto" /> -->
								<span class="user-info" id="user_info">
								</span>
								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a onclick="editPhoto();" style="cursor:pointer;"><i class="ace-icon glyphicon glyphicon-picture"></i>修改头像</a><!-- editUserH()在 WebRoot\static\js\myjs\head.js中 -->
								</li>
								<li>
									<a onclick="editUserH();" style="cursor:pointer;"><i class="ace-icon fa fa-user"></i>修改资料</a><!-- editUserH()在 WebRoot\static\js\myjs\head.js中 -->
								</li>
								<li id="systemset">
									<a onclick="editSys();" style="cursor:pointer;"><i class="ace-icon fa fa-cog"></i>系统设置</a><!-- editSys()在 WebRoot\static\js\myjs\head.js中 -->
								</li>
								<li class="divider"></li>
								<li>
									<a href="logout" onclick="logout()"><i class="ace-icon fa fa-power-off"></i>退出登录</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>
				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>
		<div id="fhsmsobj"><!-- 站内信声音消息提示 --></div>
	 <script src="login/js/jquery-1.11.1.js"></script>
	 <script type="text/javascript">
       
	/*  function logout(){
		     
		   
		
		    var loginname = $.cookie('loginname');
		    alert(loginname);
			   
			   
			
		 
	 } */
	    
	  
      </script>
		
		
		
		<div id="websocket_button"></div><!-- 少了此处，聊天窗口就无法关闭 -->
		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<!-- 左侧菜单 -->
			

<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				

				<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo U('Main/index');?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">管理中心首页</span>
						</a>
						<b class="arrow"></b>
					</li>
                    
				<ul class="nav nav-list">
					<!-- <li class="">
						<a href="#">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">控制台首页 </span>
						</a>

						<b class="arrow"></b>
					</li> -->
					<li class="">
						<a  class="dropdown-toggle">
							<i class="menu-icon fa fa-icon-file-alt"></i>
							<span class="menu-text"> 我的订单</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									订单查询
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									订单支付
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									订单结算
								</a>

								<b class="arrow"></b>
							</li>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								公司信息
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="companyinfo/list.do" target="mainFrame" >
									<i class="menu-icon fa fa-caret-right"></i>
									添加/维护公司信息
                               </a>
								<b class="arrow"></b>
							</li>
							
							
							<li class="">
								<a href="userinfo/goEdit.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									完善个人信息
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					
					
					

					<li class="">
						<a class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">产品信息</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="device/list.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									添加/维护产品
								</a>

								<b class="arrow"></b>
							</li>

							<!-- <li class="">
								<a href="jqgrid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									修改我公司生产/销售的产品
								</a>

								<b class="arrow"></b>
							</li> -->
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle"><!--  -->
							<i class="menu-icon fa  fa-tags"></i>
							<span class="menu-text">产品服务卡 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a  href="module/list.do" target="mainFrame" >
									<i class="menu-icon fa fa-caret-right"></i>
									产品服务卡预览/版面修改
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a  href="productsshow/list.do" target="mainFrame" >
									<i class="menu-icon fa fa-caret-right"></i>
									产品介绍
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									说明书
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="instructions/list"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											添加/维护说明书
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									配置参数
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="proconlist/list.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											添加/维护配置参数
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="warranty_card/list.do" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									保修卡
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="warranty_card/list.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											添加/维护保修卡
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									常见问题Q&A
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="question/list.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											添加/维护问题分类
										</a>

										<b class="arrow"></b>
									</li>
							
									<li class="">
										<a href="probleminformation/list.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											添加/维护问题和答案
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									客户咨询与报修
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="advisory/list.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											查看/回复用户咨询
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									新闻维护
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="hardwarenews/list.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											 新闻维护
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="extendedwarranty/list.do" target="mainFrame"><!--  class="dropdown-toggle" -->
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> 管理延保产品 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						
					</li>
					<li class="">
						<a class="dropdown-toggle"><!--  -->
							<i class="menu-icon fa fa-icon-book"></i>
							<span class="menu-text">管理售后体系</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="" target="mainFrame"  class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right" ></i>
									建立呼叫中心
									<b class="arrow fa fa-angle-down"></b>
								</a>
								
							
								<b class="arrow"></b>
								<ul class="submenu">
								     <li class="">
										<a href="callcenter/goAdd.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											提交需求
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="callcenter/list.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											需求列表
										</a>

										<b class="arrow"></b>
									</li>
									
								</ul>
							</li>

							<li class="">
								<a href="" target="mainFrame"  class="dropdown-toggle">
								
									<i class="menu-icon fa fa-caret-right"></i>
									部署服务网点
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>
								
								 <ul class="submenu">
								     <li class="">
										<a href="sernethost/goAdd.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											提交需求
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="sernethost/list.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											需求列表
										</a>

										<b class="arrow"></b>
									</li>
									
								</ul>
								
							</li>

							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									备件供应链
								</a>
								<b class="arrow"></b>

							</li>
							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									二级维修工厂
									
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									回访、满意度调研
									
								</a>
								<b class="arrow"></b>
		
							</li>
							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									会员和客户关怀
									
								</a>
								<b class="arrow"></b>
					
							</li>
							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									舆情监控
									
								</a>
								<b class="arrow"></b>
								
							</li>
							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									语音、语义分析
									
								</a>
								<b class="arrow"></b>
								
							</li>
							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									质量监控
									
								</a>
								<b class="arrow"></b>
								
							</li>
							<li class="">
								<a >
									<i class="menu-icon fa fa-caret-right"></i>
									数据报表
									
								</a>
								<b class="arrow"></b>
								
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-user"></i>
							<span class="menu-text">管理用户信息 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="signup/list.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									查看注册用户信息
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-group"></i>
							<span class="menu-text">合作伙伴 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="compar/list.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									合作伙伴加盟
								</a>
								<b class="arrow"></b>
							</li>
							<!-- <li class="">
								<a href="menu/listAllMenu.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									加盟步骤
								</a>
								<b class="arrow"></b>
							</li> 
							<li class="">
								<a href="role.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									角色
								</a>
								<b class="arrow"></b>
							</li>  -->
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-cloud"></i>
							<span class="menu-text">联保云商城 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="http://www.yunlianbao.org/web/merchant.php?i=2" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									 公司/商户登录
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="" style="display: none" id="work">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-group"></i>
							<span class="menu-text">管理员模块 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="" target="mainFrame" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									审核
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="check/list_company.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											审核公司
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="check/list_user.do"  target="mainFrame">
											<i class="menu-icon fa fa-caret-right"></i>
											审核用户
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="pictures/list.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									图片列表
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="menu/listAllMenu.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									加盟步骤
								</a>
								<b class="arrow"></b>
							</li> 
							<li class="">
								<a href="role.do" target="mainFrame">
									<i class="menu-icon fa fa-caret-right"></i>
									角色
								</a>
								<b class="arrow"></b>
							</li> 
						</ul>
					</li>
					
				</ul><!-- /.nav-list -->


				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
                <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					
					
				    var name='希澈科技';
				    
				   
				    
				    
				    $(document).ready(function(){
				    	
				    	if (name!='' && name=='ylb') {
							
				    		$("#work").show();
						}else if(name!='' && name=='Lby'){
							
							$("#work").show();
							
						}
				    	
				    	});
				    
				    
					
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<!-- #section:settings.skins -->
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; 选择皮肤</span>
									</div>

									<!-- #section:settings.breadcrumbs -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
									</div>

									<!-- #section:settings.container -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											居中风格
										</label>
									</div>

									<!-- /section:settings.container -->
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<!-- #section:basics/sidebar.options -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover">折叠菜单</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact">压缩菜单</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight">弹出风格</label>
									</div>

									<!-- /section:basics/sidebar.options -->
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
						<div class="row">	
						<div id="jzts" style="display:none; width:100%; position:fixed; z-index:99999999;">
						<div class="commitopacity" id="bkbgjz"></div>
						<div style="padding-left: 70%;padding-top: 1px;">
							<div style="float: left;margin-top: 3px;"><img src="images/loadingi.gif" /> </div>
							<div style="margin-top: 6px;"><h4 class="lighter block red">&nbsp;加载中 ...</h4></div>
						</div>
						</div>
						<div>
							
							
						</div>
						</div><!-- /.row -->	
					</div><!-- /.page-content -->
					
				</div>
			</div><!-- /.main-content -->

		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<!-- 页面底部js¨ -->
				
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/Admin/ace/js/jquery.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='/Public/Admin/ace/js/jquery1x.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/Admin/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Admin/ace/js/bootstrap.js"></script>
		
		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="/Public/Admin/ace/js/ace/elements.scroller.js"></script>
		<script src="/Public/Admin/ace/js/ace/elements.colorpicker.js"></script>
		<script src="/Public/Admin/ace/js/ace/elements.fileinput.js"></script>
		<script src="/Public/Admin/ace/js/ace/elements.typeahead.js"></script>
		<script src="/Public/Admin/ace/js/ace/elements.wysiwyg.js"></script>
		<script src="/Public/Admin/ace/js/ace/elements.spinner.js"></script>
		<script src="/Public/Admin/ace/js/ace/elements.treeview.js"></script>
		<script src="/Public/Admin/ace/js/ace/elements.wizard.js"></script>
		<script src="/Public/Admin/ace/js/ace/elements.aside.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.ajax-content.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.touch-drag.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.sidebar.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.submenu-hover.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.widget-box.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.settings.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.settings-rtl.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.settings-skin.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.widget-on-reload.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.searchbox-autocomplete.js"></script>
		<!-- inline scripts related to this page -->

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<link rel="stylesheet" href="/Public/Admin/ace/css/ace.onpage-help.css" />

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="/Public/Admin/ace/js/ace/elements.onpage-help.js"></script>
		<script src="/Public/Admin/ace/js/ace/ace.onpage-help.js"></script>
	
		<!--引入属于此页面的js -->
		<script type="text/javascript" src="js/myjs/head.js"></script>
		<!--引入属于此页面的js -->
		<script type="text/javascript" src="js/myjs/index.js"></script>
		
		<!--引入弹窗组件1start-->
		<!--<script type="text/javascript" src="plugins/attention/zDialog/zDrag.js"></script>-->
		<!--<script type="text/javascript" src="plugins/attention/zDialog/zDialog.js"></script>-->
		<!--引入弹窗组件1end-->
		
		<!--引入弹窗组件2start-->
		<script type="text/javascript" src="plugins/attention/drag/drag.js"></script>
		<script type="text/javascript" src="plugins/attention/drag/dialog.js"></script>
		<link type="text/css" rel="stylesheet" href="plugins/attention/drag/style.css"  />
		<!--引入弹窗组件2end-->
		
		<!--提示框-->
		<script type="text/javascript" src="js/jquery.tips.js"></script>
	</body>
</html>
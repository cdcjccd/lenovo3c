<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
<title>联保云</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="/lbyun/lbyun/Public/Home/login/bootstrap.min.css" />
<link rel="stylesheet" href="/lbyun/lbyun/Public/Home/login/css/camera.css" />
<link rel="stylesheet" href="/lbyun/lbyun/Public/Home/login/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/lbyun/lbyun/Public/Home/login/matrix-login.css" />
<link rel="stylesheet" href="/lbyun/lbyun/Public/Home/public/css/commen.css">
<!-- <link rel="stylesheet" href="login/css/commen.css" /> -->
<link href="/lbyun/lbyun/Public/Home/login/font-awesome.css" rel="stylesheet" />
<script type="text/javascript" src="/lbyun/lbyun/Public/Home/login/js/jquery-1.5.1.min.js"></script>
<!-- 软键盘控件start -->
<link href="/lbyun/lbyun/Public/Home/login/keypad/css/framework/form.css" rel="stylesheet" type="text/css"/>
<!-- 软键盘控件end -->
<!-- input提示框 -->
<script src="/lbyun/lbyun/Public/Home/login/js/jquery-1.11.1.js"></script>
<script src="/lbyun/lbyun/Public/Home/login/js/jquery-validate.js"></script>
<link rel="stylesheet" href="/lbyun/lbyun/Public/Home/login/css/input_tishi.css"/>
<!-- input提示框 -->
 <style type="text/css">
      .cavs{
    	z-index:1;
    	position: fixed;
    	width:95%;
    	margin-left: 20px;
    	margin-right: 20px;
    }
  </style>
  <script>
  		// window.setTimeout(showfh,3000);
  		var timer;
		function showfh(){
			fhi = 1;
			//关闭提示晃动屏幕，注释掉这句话即可
			timer = setInterval(xzfh2, 10);
		};
		var current = 0;
		function xzfh(){
			current = (current)%360;
			document.body.style.transform = 'rotate('+current+'deg)';
			current ++;
			if(current>360){current = 0;}
		};
		var fhi = 1;
		var current2 = 1;
		function xzfh2(){
			if(fhi>50){
				document.body.style.transform = 'rotate(0deg)';
				clearInterval(timer);
				return;
			}
			current = (current2)%360;
			document.body.style.transform = 'rotate('+current+'deg)';
			current ++;
			if(current2 == 1){current2 = -1;}else{current2 = 1;}
			fhi++;
		};
	</script>
</head>
<body>
	<!-- 页头 -->
	

	<canvas class="cavs"></canvas>
	<div class="loginbox_one">
		<!-- 登录 -->
		<div id="windows1">
		<div id="loginbox">
			<form action="<?php echo U('login/index');?>" method="post" name="loginForm" id="loginForm" class="form_bg">
			
				<div class="control-group">
				<h4 style="padding-bottom:20px;" id="cookmsg">用户登录</h4>
					<div class="controls">
						<div class="main_input_box">
							<p class="huiyuanming">用户名：</p>
							<span class="add-on bg_lg">
							<i><img height="37" src="/lbyun/lbyun/Public/Home/login/user.png" /></i>
							</span><input class="input_shuru" type="text" name="loginname" id="loginname" value="" placeholder="请输入用户名" />
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<p class="huiyuanming">密码：</p>
							<span class="add-on bg_lg">
							<i><img height="37" src="/lbyun/lbyun/Public/Home/login/suo.png" /></i>
							</span><input class="input_shuru" type="password" name="password" id="password" placeholder="请输入密码" value=""/>
							<p class="wangjimima">忘记密码？</p>
							<p class="tiaoyue"><input type="checkbox" checked><span>我已阅读并同意<a href="xieyi.html">《联保云服务协议》</a></span></p>
						</div>
					</div>
				</div>
				<div style="float:right;padding-right:10%;">
					<div style="float: left;margin-top:3px;margin-right:2px;">
						<font>记住密码</font>
					</div>
					<div style="float: left;">
						<input name="form-field-checkbox" id="saveid" type="checkbox"
							onclick="savePaw();" style="padding-top:0px;" />
					</div>
				</div>
				<div class="form-actions">
					<div style="width:86%;padding-left:8%;">
                       <div id="yzm" style="display: none">
						<div style="float: left;padding-top:2px;">
							<i><img src="/lbyun/lbyun/Public/Home/login/yan.png" /></i>
						</div>
						<!-- <div style="float: left;" class="codediv">
							<input type="text" name="code" id="code" class="login_code"
								style="height:16px; padding-top:4px;" />
						</div> -->
						<div style="float: left;padding-top:2px;">
							<i><img style="height:30px;" id="codeImg" alt="点击更换" title="点击更换" src="" /></i>
						</div>
					  </div>
						<span class="pull-right" style="padding-right:3%;"><a href="javascript:changepage(1);" class="btn btn-success">注册</a></span>
						 <input id="btnSubmit" class="btn btn-primary" value="提交" onclick="return search();" type="submit">
					</div>
				</div>
			</form>
		</div>
		<div id="loginbox" style="margin-right:2%;">
			<form class="form_img">
				<a href="#"><img src="/lbyun/lbyun/Public/Home/login/images/img_02.png"></a>
			</form>
		</div>
		<div class="cliearfix" style="clear:both;"></div>
		<div class="footer" style="margin-top:100px;">
	        <div class="footer_t">
	        	<ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_29.png"></li>
	                <li><p>十分钟让您拥有云端售后能力</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_31.png"></li>
	                <li><p>7*24小时售后顾问支持</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_33.png"></li>
	                <li><p>极大降低服务成本</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_35.png"></li>
	                <li><p>助你赢取客户忠诚度</p></li>
	            </ul>
	            <div class="clearfix"></div>
	        </div>
	        <div class="footer_c">
	        	<ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_41.png"></li>
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
	        <div class="footer_b">
	            <span>Copyright&nbsp;&nbsp;联保云&nbsp;版权所有2016&nbsp;&nbsp;<a target="_blank" href=""><!-- http://www.miitbeian.gov.cn/ -->京ICP备16042723号-1</a>&nbsp;&nbsp;
		 		<a target="_blank" href=""><!-- http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802022735 -->
		 			<img src="/lbyun/lbyun/Public/Home/public/images/record.png">
		 			京公网安备 11010802022735号
		 		</a>
		 	</span>
	        </div>
	   </div>
		</div>
		<!-- 注册 -->
		<div id="windows2" style="display: none;">
		<div id="loginboxo"style="margin-top:20px;">
			<form action="" method="post" name="loginForm" id="loginForm" class="form_bg">
				<h4 style="padding-bottom:20px; padding-top:20px;">会员注册</h4>
				<div class="control-group">

					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							用户名
							</span><input class="input_shuru required" data-tip="限16个字符，支持中英文、数字、减号或下划线，请勿包含姓名/身份证/银行卡等隐私信息，一旦设置成功无法修改" data-valid="isNonEmpty" data-error="用户名不能为空" type="text" name="USERNAME" id="USERNAME" value="" placeholder="请输入用户名" />
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							密码
							</span><input class="input_shuru required" data-tip="请您输入密码" data-valid="isNonEmpty" data-error="密码不能为空" type="password" name="PASSWORD" id="PASSWORD" placeholder="请输入密码" class="keypad" keypadMode="full" allowKeyboard="true" value=""/>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							重输
							</span><input class="input_shuru required" data-tip="与上边密码相同" data-valid="isNonEmpty" data-error="密码不能为空" type="password" name="chkpwd" id="chkpwd" placeholder="请重新输入密码" class="keypad" keypadMode="full" allowKeyboard="true" value=""/>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							姓名
							</span><input class="input_shuru required" data-tip="请输入您的真实的姓名" data-valid="isNonEmpty||onlyZh" data-error="姓名不能为空||请您输入真实姓名" type="text" name="USER_NAME" id="name" value="" placeholder="请输入姓名" />
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							电话
							</span><input class="input_shuru required" data-tip="请输入您的电话号" data-valid="isNonEmpty||isMobile" data-error="电话不能为空||电话号码格式不对" type="text" name="MOBILE" id="MOBILE" value="" placeholder="请输入手机号" />
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							我来自
							</span><select name="USER_FROM" id="user_from">
								<option>==请选择==</option>
								<option>智能硬件厂商</option>
								<option>家电厂商</option>
								<option>汽车厂商</option>
								<option>经销商、代理商</option>
								<option>线上电商、店铺</option>
								<option>线下连锁卖场、店铺</option>
								<option>第三方售后服务商</option>
								<option> 授权售后服务商</option>
								<option>其他公司</option>
								<option>个人</option>

							</select>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							我的职业
							</span><select name="USER_PROFESSION" id="profession">
								<option>==请选择==</option>
								<option>企业CEO</option>
								<option>企业运营负责人</option>
								<option>采购负责人</option>
								<option>财务负责人</option>
								<option>售后服务管理人员</option>
								<option>售后服务职员</option>
								<option>市场销售管理人员</option>
								<option>市场销售职员</option>
								<option>其他岗位</option>
								<option>个人消费者</option>
							</select>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							邮箱
							</span><input class="input_shuru required" data-tip="请输入您的邮箱" data-valid="isNonEmpty||isEmail" data-error="邮箱不能为空||邮箱格式不正确" type="text" name="EMAIL" id="EMAIL" value="" placeholder="请输入邮箱" />
						</div>
					</div>
				</div>
				<div class="form-actions">
					<div style="width:60%;padding-left:20%;">

						<div style="float: left;padding-top:2px;">
							<i><img src="/lbyun/lbyun/Public/Home/login/yan.png" /></i>
						</div>
						<div style="float: left;" class="codediv">
							<input type="text" name="rcode" id="rcode" class="login_code" style="height:16px; padding-top:4px;" data-tip="请输入您的邮箱" data-valid="isNonEmpty" data-error="验证码不能为空" />
						</div>
						<div style="float: left; padding-top:2px;">
							<i><img style="height:30px;" id="zcodeImg" alt="点击更换" title="点击更换" src="" /></i>
						</div>
						<span class="pull-right" style="padding-right:3%;"><a href="javascript:changepage(2);" class="btn btn-success">取消</a></span>
						<span class="pull-right"><a onclick="register();" class="flip-link btn btn-info" id="to-recover">提交</a>
						</span>
					</div>
				</div>
			</form>
			<div class="footer" style="margin-top:100px;">
	        <div class="footer_t">
	        	<ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_29.png"></li>
	                <li><p>十分钟让您拥有云端售后能力</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_31.png"></li>
	                <li><p>7*24小时售后顾问支持</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_33.png"></li>
	                <li><p>极大降低服务成本</p></li>
	            </ul>
	            <ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_35.png"></li>
	                <li><p>助你赢取客户忠诚度</p></li>
	            </ul>
	            <div class="clearfix"></div>
	        </div>
	        <div class="footer_c">
	        	<ul>
	            	<li><img src="/lbyun/lbyun/Public/Home/login/images/lxy_index_41.png"></li>
	                <li>
	                	<p>服务热线</p>
	                    <p>400-882-2088</p>
	                </li>
	            </ul>FH
	            <ul style=" margin-left:120px;">
	            	<li><a href="">为您的产品保驾护航&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
	                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;精准的方案推荐&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
	                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;灵活的合作方案&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
	                <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;一对一贴心帮助服务</a></li>
	                <div class="clearfix"></div>
	            </ul>
	            <div class="clearfix"></div>
	        </div>
	        <div class="footer_b">
	            <span>Copyright&nbsp;&nbsp;联保云&nbsp;版权所有2016&nbsp;&nbsp;<a target="_blank" href=""><!-- http://www.miitbeian.gov.cn/ -->京ICP备16042723号-1</a>&nbsp;&nbsp;
		 		<a target="_blank" href="">
		 			<img src="/lbyun/lbyun/Public/Home/public/images/record.png">
		 			京公网安备 11010802022735号
		 		</a>
		 	</span>
	        </div>
	   </div>
		</div>
		</div>
	</div>
	<div id="templatemo_banner_slide" class="container_wapper" style="">
	</div>
<!-- input提示框 -->
	<script type="text/javascript">
	var num;
		//服务器校验
		function severCheck(){
			if(check()){
				var loginname = $("#loginname").val();
				var password = $("#password").val();
				var code = $("#code").val();
				if (typeof(num) == 'undefined') {
					num = -1;
				}
				
				$.ajax({
					type: "POST",
					url: "<?php echo U('Admin/Login/index');?>",
			    	data: "loginname="+loginname+"&password="+password+"&code="+code+"&num="+num,
					dataType:'json',
					cache: false,
					success: function(data){
						num=data.loginnum;
						 if(num>=2){
							 $("#yzm").show();
						 }
						if("success" == data.result){
							saveCookie();
							window.location.href="<?php echo U('Admin/Index/main');?>";
						}else if("usererror" == data.result){
							$("#loginname").tips({
								side : 1,
								msg : "用户名或密码有误",
								bg : '#FF5080',
								time : 15
							});
							showfh();
							$("#loginname").focus();
						}else if("codeerror" == data.result){
							$("#code").tips({
								side : 1,
								msg : "验证码输入有误",
								bg : '#FF5080',
								time : 15
							});
							showfh();
							$("#code").focus();
						}
					}
				});
			}
		}

		$(document).ready(function() {
			changeCode1();
			$("#codeImg").bind("click", changeCode1);
			$("#zcodeImg").bind("click", changeCode2);
		});

		function changeCode1() {
			$("#codeImg").attr("src", "<?php echo U('Home/Login/verify');?>"+'?rand='+Math.random()*100);
		}





		function changeCode2() {
			$("#zcodeImg").attr("src", "<?php echo U('Home/Login/verify');?>"+'?rand='+Math.random()*100);
		}






		//客户端校验
		function check() {

			if ($("#loginname").val() == "") {
				$("#loginname").tips({
					side : 2,
					msg : '用户名不得为空',
					bg : '#AE81FF',
					time : 3
				});
				showfh();
				$("#loginname").focus();
				return false;
			} else {
				$("#loginname").val(jQuery.trim($('#loginname').val()));
			}
			if ($("#password").val() == "") {
				$("#password").tips({
					side : 2,
					msg : '密码不得为空',
					bg : '#AE81FF',
					time : 3
				});
				showfh();
				$("#password").focus();
				return false;
			}
			if( num ==2){
				$("#yzm").show();
			if ($("#code").val() == "") {
				$("#code").tips({
					side : 1,
					msg : '验证码不得为空',
					bg : '#AE81FF',
					time : 3
				});
				showfh();
				$("#code").focus();
				return false;
			}
			}
			$("#loginbox").tips({
				side : 1,
				msg : '正在登录 , 请稍后 ...',
				bg : '#68B500',
				time : 10
			});

			return true;
		}

		function savePaw() {
			if (!$("#saveid").prop("checked")) {
				$.cookie('loginname', '', {
					expires : -1
				});
				$.cookie('password', '', {
					expires : -1
				});
				$("#loginname").val('');
				$("#password").val('');
			}
		}

		function saveCookie() {
			if ($("#saveid").prop("checked") == true) {
				// alert(saveCookie);
				$.cookie('loginname', $("#loginname").val(), {
					expires : 7
				});
				$.cookie('password', $("#password").val(), {
					expires : 7
				});
			}
		}

		jQuery(function() {
			var loginname = $.cookie('loginname');
			var password = $.cookie('password');
			if (typeof(loginname) != "undefined"
					&& typeof(password) != "undefined") {
				$("#loginname").val(loginname);
				$("#password").val(password);
				$("#saveid").attr("checked", true);
				$("#code").focus();
			}
		});



		function cooklogin(){



			var loginname = $.cookie('loginname');
			var password = $.cookie('password');
			if(loginname !=null && loginname !='' && password !=null && password != ''){


				var code = "warranty"+loginname+",fh,"+password+"warr"+",fh,"+$("#code").val();
				$.ajax({
					type: "POST",
					url: "<?php echo U('Home/Login/login');?>",
			    	data: {KEYDATA:code,tm:new Date().getTime()},
					dataType:'json',
					cache: false,
					success: function(data){

						num=data.loginnum
						 if(num==2){
							 $("#yzm").show();
						 }
						if("success" == data.result){
							saveCookie();
							window.location.href="<?php echo U('Admin/Index/main');?>";
						}else{

							$("#cookmsg").tips({
								side : 2,
								msg : '用户名或密码过期请重新登录',
								bg : '#AE81FF',
								time : 3
							});
						}
					}
				});
			}else{

				$("#cookmsg").tips({
					side : 2,
					msg : '用户名或密码过期请重新登录',
					bg : '#AE81FF',
					time : 3
				});
			}

			}
		//登录注册页面切换
		function changepage(value) {
			if(value == 1){
				$("#windows1").hide();
				$("#windows2").show();
				changeCode2();
			}else{
				$("#windows2").hide();
				$("#windows1").show();
				changeCode1();
			}
		}
	//注册
	function rcheck(){

		if($("#USERNAME").val()==""){
			$("#USERNAME").tips({
				side:3,
	            msg:'用户名不能为空',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#USERNAME").focus();
			$("#USERNAME").val('');
			return false;
		}else{
			$("#USERNAME").val(jQuery.trim($('#USERNAME').val()));
		}
		if($("#PASSWORD").val()=="" || $("#PASSWORD").val().length<6){
			$("#PASSWORD").tips({
				side:3,
	            msg:'输入至少6位密码',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#PASSWORD").focus();
			return false;
		}
		if($("#PASSWORD").val()!=$("#chkpwd").val()){
			$("#chkpwd").tips({
				side:3,
	            msg:'两次密码不相同',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#chkpwd").focus();
			return false;
		}

		if($("#name").val()==""){
			$("#name").tips({
				side:3,
	            msg:'请输入本人身份证姓名',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#name").focus();
		return false;
		}else if(!iszw($("#name").val())){
			$("#name").tips({
				side:3,
	            msg:'请输入您的真实姓名',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#name").focus();
			return false;
		}
		if($("#MOBILE").val()==""){
			$("#MOBILE").tips({
				side:3,
	            msg:'请输入本人手机号码',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#MOBILE").focus();
		return false;
		}else if($("#MOBILE").val().length>11 || !isphone($("#MOBILE").val()) ){
			$("#MOBILE").tips({
				side:3,
	            msg:'手机号码格式不正确',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#MOBILE").focus();
			return false;
		}
		if($("#user_from").val()=="==请选择=="){
			$("#user_from").tips({
				side:3,
	            msg:'请选择来自',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#company_type").focus();
		return false;
		}
		if($("#profession").val()=="==请选择=="){
			$("#profession").tips({
				side:3,
	            msg:'请选择我的职业',
	            bg:'#AE81FF',
	            time:2
	        });
			$("#profession").focus();
		return false;
		}
		if($("#EMAIL").val()==""){
			$("#EMAIL").tips({
				side:3,
	            msg:'输入邮箱',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#EMAIL").focus();
			return false;
		}else if(!ismail($("#EMAIL").val())){
			$("#EMAIL").tips({
				side:3,
	            msg:'邮箱格式不正确',
	            bg:'#AE81FF',
	            time:3
	        });
			$("#EMAIL").focus();
			return false;
		}
		return true;
	}

	//提交注册
	function register(){
		   if(rcheck()){
			var nowtime = date2str(new Date(),"yyyyMMdd");
			$.ajax({
				type: "POST",
				url: "<?php echo U('Home/Login/lby_user_add');?>",
		    	data: {USERNAME:$("#USERNAME").val(),USER_PROFESSION:$("#profession").val(),MOBILE:$("#MOBILE").val(),
		    		USER_FROM:$("#user_from").val(),PASSWORD:$("#PASSWORD").val(),USER_NAME:$("#name").val(),EMAIL:$("#EMAIL").val(),rcode:$("#rcode").val()},
				dataType:'json',
				cache: false,
				success: function(data){
					if("0" == data){
						$("#windows2").hide();
						$("#windows1").show();
						$("#loginbox").tips({
							side : 1,
							msg : '注册成功,请登录',
							bg : '#68B500',
							time : 3
						});
						changeCode1();
					}else if("4" == data){
						$("#USERNAME").tips({
							side : 1,
							msg : "用户名已存在",
							bg : '#FF5080',
							time : 15
						});
						showfh();
						$("#USERNAME").focus();
					}else if("6" == data){
						$("#rcode").tips({
							side : 1,
							msg : "验证码输入有误",
							bg : '#FF5080',
							time : 15
						});
						showfh();
						$("#rcode").focus();
					}
				}
			});
		   }
		}

	//邮箱格式校验
	function ismail(mail){
		return(new RegExp(/^(?:[a-zA-Z0-9]+[_\-\+\.]?)*[a-zA-Z0-9]+@(?:([a-zA-Z0-9]+[_\-]?)*[a-zA-Z0-9]+\.)+([a-zA-Z]{2,})+$/).test(mail));
	}
	//正则的验证
	function isphone(value){
		return(new RegExp(/^\+?[1-9][0-9]*$/).test(value));
	}
	function iszw(value){
		return(new RegExp(/^[A-z]+$|^[\u4E00-\u9FA5]+$/).test(value));
	}
	function issfz(value){
		return(new RegExp(/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/).test(value));
	}
	//js  日期格式
	function date2str(x,y) {
	     var z ={y:x.getFullYear(),M:x.getMonth()+1,d:x.getDate(),h:x.getHours(),m:x.getMinutes(),s:x.getSeconds()};
	     return y.replace(/(y+|M+|d+|h+|m+|s+)/g,function(v) {return ((v.length>1?"0":"")+eval('z.'+v.slice(-1))).slice(-(v.length>2?v.length:2))});
	 	};
	</script>
	<script>
		//TOCMAT重启之后 点击左侧列表跳转登录首页
		if (window != top) {
			top.location.href = location.href;
		}
	</script>
	<script src="/lbyun/lbyun/Public/Home/login/js/bootstrap.min.js"></script>
	<script src="/lbyun/lbyun/Public/Home/js/jquery-1.7.2.js"></script>
	<script src="/lbyun/lbyun/Public/Home/login/js/jquery.easing.1.3.js"></script>
	<script src="/lbyun/lbyun/Public/Home/login/js/jquery.mobile.customized.min.js"></script>
	<script src="/lbyun/lbyun/Public/Home/login/js/camera.min.js"></script>
	<script src="/lbyun/lbyun/Public/Home/login/js/templatemo_script.js"></script>
	<script src="/lbyun/lbyun/Public/Home/login/js/ban.js"></script>
	<script type="text/javascript" src="/lbyun/lbyun/Public/Home/js/jQuery.md5.js"></script>
	<script type="text/javascript" src="/lbyun/lbyun/Public/Home/js/jquery.tips.js"></script>
	<script type="text/javascript" src="/lbyun/lbyun/Public/Home/js/jquery.cookie.js"></script>
	
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		黑名单修改 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="#">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
<script src="/lby/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
<script src="/lby/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
<script src="/lby/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
<script src="/lby/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
<link href="/lby/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
<script src="/lby/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
<script src="/lby/Public/Admin/static/userlist/jquery_006.js" type="text/javascript"></script>
<link href="/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
<script src="/lby/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
<script src="/lby/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">
<script src="/lby/Public/Admin/static/userlist/jquery_003.js"></script>
<script src="/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
<link href="/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
<script src="/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>



		<!--  需要添加百度统计分析-->


<meta name="decorator" content="default">
<!-- <script type="text/javascript">
		$(document).ready(function() {
			$("#value").focus();
			$("#inputForm").validate({
				rules: {
					mobile: {remote: "/lenjoy/Admin/sys/blockList/checkMobile?oldMobile=" + encodeURIComponent('')},
					idCard: {remote: "/lenjoy/Admin/sys/blockList/checkIdCard?oldIdCard=" + encodeURIComponent('')},
				},
				messages: {
					mobile: {remote: "手机号黑名单已经存在"},
					idCard:{remote:"身份证号已存在"}
				},
				submitHandler: function(form){
					loading('正在提交，请稍等...');
					form.submit();
				},
				errorContainer: "#messageBox",
				errorPlacement: function(error, element) {
					$("#messageBox").text("输入有误，请先更正。");
					if (element.is(":checkbox")||element.is(":radio")||element.parent().is(".input-append")){
						error.appendTo(element.parent().parent());
					} else {
						error.insertAfter(element);
					}
				}
			});
		});
	</script> -->

	</head>
	<body>

	<ul class="nav nav-tabs">
		<li><a href="<?php echo U('Admin/User/blackList');?>">黑名单列表</a></li>
		<li class="active"><a href="#">黑名单修改
				</a></li>
	</ul>
	<br>

	<form id="inputForm" class="form-horizontal" action="<?php echo U('Admin/User/blackEdit');?>" method="post" novalidate="novalidate">

		<input id="id" name="userId" value="<?php echo ($info['userid']); ?>" type="hidden">

          <script type="text/javascript">top.$.jBox.closeTip();</script>



		<div class="control-group">
			<label class="control-label">姓名:</label>
			<div class="controls">
				<input id="name" name="userRealName" class="required" maxlength="10" aria-required="true" type="text" value="<?php echo ($info['userrealname']); ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">手机:</label>
			<div class="controls">
			    <input id="oldMobile" name="oldMobile" value="" type="hidden">
				<input id="mobile" name="userMobile" value="<?php echo ($info['usermobile']); ?>" maxlength="15" type="text">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">身份证号:</label>
			<div class="controls">
			    <input id="oldIdCard" name="oldIdCard" value="" type="hidden">
				<input id="idCard" name="userIdCard" value="<?php echo ($info['useridcard']); ?>" maxlength="18" type="text">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">描述:</label>
			<div class="controls">
				<textarea id="remark" name="description" placeholder="请填写描述！" class="span8"><?php echo ($info['description']); ?></textarea>
			</div>
		</div>
		<div class="form-actions">

				<input id="tijiao" class="btn btn-primary" value="保 存" type="button">&nbsp;
			<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1)" type="button">
		</div>
	</form>


			<script>

				$('#tijiao').click(function(){

					var url = "<?php echo U('Admin/User/blackEdit');?>"
					var data = $('form').serialize()

					$.ajax({
						type: 'post',
						url: url,
						data: data,
						success: function(res){

							if (res == '6') {
								alert('修改成功')
								window.location.href = "<?php echo U('Admin/User/blackList');?>"
							}else{
								document.write(res)
								exit
								alert('修改失败')
							}
						}
					})

				})

			</script>


</body></html>
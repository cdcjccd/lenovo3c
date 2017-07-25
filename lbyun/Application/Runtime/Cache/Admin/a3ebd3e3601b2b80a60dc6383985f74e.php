<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="#">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
<!-- <script src="/lenovo3C/Public/admin/static/userlist/jquery-1.js" type="text/javascript"></script>
<script src="/lenovo3C/Public/admin/static/userlist/jquery.js" type="text/javascript"></script>
<script src="/lenovo3C/Public/admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
<script src="/lenovo3C/Public/admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script> -->
<link href="/lenovo3C/Public/admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
<!-- <script src="/lenovo3C/Public/admin/static/userlist/jquery_002.js" type="text/javascript"></script> -->
<!-- <script src="/lenovo3C/Public/admin/static/userlist/jquery_006.js" type="text/javascript"></script> -->
<link href="/lenovo3C/Public/admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <script src="/lenovo3C/Public/admin/static/userlist/bootstrap.js" type="text/javascript"></script> -->
<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
<!--<script src="/lenovo3C/Public/admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">-->
<!-- <script src="/lenovo3C/Public/admin/static/userlist/jquery_003.js"></script> -->
<!-- <script src="/lenovo3C/Public/admin/static/userlist/mustache.js" type="text/javascript"></script> -->
<link href="/lenovo3C/Public/admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
<!-- <script src="/lenovo3C/Public/admin/static/userlist/lenjoy.js" type="text/javascript"></script> -->

	<script src="/lenovo3C/Public/Admin/layer/jquery.js" type="text/javascript"></script>
	<!-- <script src="/lenovo3C/Public/Admin/layer/layer.js" type="text/javascript"></script> -->
		<!--  需要添加百度统计分析-->


<meta name="decorator" content="default">


<!-- <script type="text/javascript">
		$(document).ready(function() {
			$("#value").focus();
			$("#inputForm").validate({
				rules: {
					mobile: {remote: "/lenjoy/admin/sys/blockList/checkMobile?oldMobile=" + encodeURIComponent('')},
					idCard: {remote: "/lenjoy/admin/sys/blockList/checkIdCard?oldIdCard=" + encodeURIComponent('')},
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
<!-- <style type="text/css">
html {
	font: 500 14px 'roboto';
	color: #333;
	background-color: #fafafa;
}
a {
	text-decoration: none;
}
ul, ol, li {
	list-style: none;
	padding: 0;
	margin: 0;
}
/*#demo {
	width: 300px;
	margin: 150px auto;
}*/
/*p {
	margin: 0;
}*/
/*#dt {
	margin: 30px auto;
	height: 28px;
	width: 200px;
	padding: 0 6px;
	border: 1px solid #ccc;
	outline: none;
}*/
</style>
	<script src="/lenovo3C/Public/Admin/js/jquery.js"></script> 
<script src="/lenovo3C/Public/Admin/js/calendar.js"></script>  -->

	</head>
	<body>

	<ul class="nav nav-tabs">
		<li><a href="<?php echo U('Admin/Business/index');?>">商家列表</a></li>
		<li class="active"><a href="#">商家添加
				</a></li>
	</ul>
	<br>
	<form id="inputForm" class="form-horizontal" action="#" method="post" novalidate="novalidate">
		<!-- <input id="id" name="id" value="" type="hidden"> -->


<!-- <script type="text/javascript">top.$.jBox.closeTip();</script> -->


		<div class="control-group">
			<label class="control-label">商家名称:</label>
			<div class="controls">
				<input id="name" name="busName" class="required" maxlength="100" aria-required="true" type="text">
				<!--<span id="tongluName"></span>-->
			</div>
		</div>


		<div class="control-group">
			<label class="control-label">渠道编码:</label>
			<div class="controls">
			    <!-- <input id="oldMobile" name="oldMobile" value="" type="hidden"> -->
				<input id="mobile" name="channelCode" maxlength="15" type="text">
								<!--<span id="phone"></span>-->
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">经销商级别:</label>
			<div class="controls">
			    <!-- <input id="oldIdCard" name="oldIdCard" value="" type="hidden"> -->
				<!--<textarea id="remark" name="remarks" placeholder="描述" class="span8"></textarea>-->
				<select name="dealerLev" id="dealerlev">
					<option value="">--请选择--</option>
					<option value="1">一级</option>
					<option value="2">二级</option>
					<option value="3">三级</option>
					<option value="4">四级</option>
				</select>
				<!-- <input id="idCard" name="remark" maxlength="18" type="text"> -->
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">归属区域:</label>
			<div class="controls">
				<!-- <textarea id="remark" name="rank" placeholder="排序" class="span8"></textarea> -->
				<input name="area" type="text" placeholder="区域名">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">上层商家:</label>
			<div class="controls">
				<!-- <textarea id="remark" name="rank" placeholder="排序" class="span8"></textarea> -->
				<select name="parentId" id="parent">
					<option value="0">--我是最高层--</option>
					<?php if(is_array($uplist)): foreach($uplist as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['busname']); ?></option><?php endforeach; endif; ?>
				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">所属通路:</label>
			<div class="controls">
				<!-- <textarea id="remark" name="rank" placeholder="排序" class="span8"></textarea> -->
				<select name="route" id="route">
					<option value="">--请选择--</option>
				<?php if(is_array($tonglu)): foreach($tonglu as $key=>$v): ?><option value="<?php echo ($v['name']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
				</select>
			</div>
		</div>

		<div class="form-actions">

				<input id="btnSubmit" class="btn btn-primary" value="保 存" type="button">&nbsp;
			<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1)" type="button">
		</div>
	</form>


					<script>

						$('#btnSubmit').click(function(){

							if (window.confirm('是否确定添加')) {

								$.ajax({
									type : 'post',
									url : "<?php echo U('Admin/Business/businessAdd');?>",
									data : $('form').serialize(),
									// datatype : 'json',									
									success : function(res){										
										if (res == '1') {
											alert('添加成功')
											history.go(-1)
										}else{
											alert(res)
										}
									}
								})
							}
						})


					// $('#btnSubmit').click(function(){

					// 	layer.confirm('是否确认添加？', {
					// 	    btn: ['添加','取消'], //按钮
					// 	    shade: false //不显示遮罩
					// 	}, function(index){
						    
					// 	    var url = "<?php echo U('Admin/User/blackAdd');?>"
     //                        $.ajax({
     //                            type : 'post',
     //                            url : url,
     //                            data : $("form").serialize(),
     //                            success : function(res){
     //                                if (res == '6'){
     //                                    layer.msg('添加成功',{
     //                                    	time: 2000,
     //                                    	btn: ['知道了','哦','滚开']
     //                                    })
     //                                }else{
     //                                	alert('添加失败')
     //                                }
     //                            }

     //                        })
					// 	    layer.close(index);
					// 	});

     //                })




					</script>


</body></html>
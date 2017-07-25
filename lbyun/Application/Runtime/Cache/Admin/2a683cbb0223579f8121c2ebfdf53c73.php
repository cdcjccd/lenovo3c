<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		产品添加 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
<link href="/lbyun/lbyun/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_004.js" type="text/javascript"></script>
<link href="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
<script src="/lbyun/lbyun/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">
<script src="jquery_003.js"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
<link href="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>


		<!--  需要添加百度统计分析-->
		
	
	<meta name="decorator" content="default">
	<script type="text/javascript">
		$(document).ready(function() {
			$(function(){
				$(".poprover").popover();
			});
			$("#inputForm").validate({
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
	</script>

	</head>
	<body>
		
	<ul class="nav nav-tabs">
		
	</ul><br>

	<form id="inputForm" class="form-horizontal" action="/lenjoy/admin/business/skuOfJd/view?id=24" method="post" novalidate="novalidate">

		<input id="id" name="id" value="9011025407" type="hidden">
     
			<div class="control-group">
				<label class="control-label">SKU值:</label>
				<div class="controls">
				<a href="#" class="btn poprover" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-original-title="sku值"><?php echo ($val['product_sku']); ?></a>
			</div>
			</div>

		<div class="control-group">
			<label class="control-label">产品ID:</label>
			<div class="controls">
				<a href="#" class="btn poprover" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="您的产品ID已经选定" title="" data-original-title="产品ID"><?php echo ($val['product_id']); ?></a>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">产品名称:</label>
			<div class="controls">
				<a href="#" class="btn poprover" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="您的产品已经选定" title="" data-original-title="产品"><?php echo ($val['product_name']); ?></a>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">对应产品价格:</label>
			<div class="controls">
				<a href="#" class="btn poprover" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="您的产品价格设定" title="" data-original-title="价格"><?php echo ($val['product_price']); ?></a>元
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">类型:</label>
			<div class="controls">
				<a href="#" class="btn poprover" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="您的类型已经选定" title="" data-original-title="类型状态"><?php echo ($val['product_type']); ?></a>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">产品版本:</label>
			<div class="controls">
				<a href="#" class="btn poprover" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="产品版本已经选定" title="" data-original-title="产品版本">产品2.0版本</a>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">销售通路:</label>
			<div class="controls">
				<span><input id="rountSets1" name="rountSets" value="1" checked="checked" type="checkbox">
					<label for="rountSets1">京东</label></span><span>
					<input id="rountSets2" name="rountSets" value="2" type="checkbox">
					<label for="rountSets2">m5</label></span><span>
					<input id="rountSets3" name="rountSets" value="3" type="checkbox">
					<label for="rountSets3">苏宁</label></span><span>
					<input id="rountSets4" name="rountSets" value="5" type="checkbox">
					<label for="rountSets4">淘宝</label></span><span>
					<input id="rountSets5" name="rountSets" value="16" type="checkbox">
					<label for="rountSets5">天猫通路</label></span><span>
					<input id="rountSets6" name="rountSets" value="12" type="checkbox">
					<label for="rountSets6">深圳平安</label></span><span>
					<input id="rountSets7" name="rountSets" value="8" type="checkbox">
					<label for="rountSets7">北京平安</label></span><span>
					<input id="rountSets8" name="rountSets" value="7" type="checkbox">
					<label for="rountSets8">北京联通</label></span><span>
					<input id="rountSets9" name="rountSets" value="6" type="checkbox">
					<label for="rountSets9">北京移动</label></span><span>
					<input id="rountSets10" name="rountSets" value="4" type="checkbox">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">销售渠道:</label>
			<div class="controls">
				<span><input id="saleChannels1" name="saleChannels" value="0" type="checkbox">
					<label for="saleChannels1">PC官网</label></span><span>
					<input id="saleChannels2" name="saleChannels" value="1" type="checkbox">
					<label for="saleChannels2">手机官网</label></span><span>
					<input id="saleChannels3" name="saleChannels" value="2" type="checkbox">
					<label for="saleChannels3">后台单个</label></span><span>
					<input id="saleChannels4" name="saleChannels" value="3" type="checkbox">
					<label for="saleChannels4">后台批量</label></span><span>
					<input id="saleChannels5" name="saleChannels" value="4" checked="checked" type="checkbox">
					<label for="saleChannels5">后台导入销售</label></span><span>
					<input id="saleChannels6" name="saleChannels" value="5" type="checkbox">
					<label for="saleChannels6">对接接口销售</label></span>
					<input name="_saleChannels" value="on" type="hidden">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">产品绑定品牌:</label>
			<div class="controls">
				<span><input id="brands1" name="brands" value="222" type="checkbox">
					<label for="brands1">优它</label></span><span><input id="brands2" name="brands" value="17" checked="checked" type="checkbox">
			</div>
		</div>


		<div class="control-group">
			<label class="control-label">保险单位:</label>
			<div class="controls">
				<a href="#" class="btn poprover" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="您的保期已经选定" title="" data-original-title="保期"><?php echo ($val['product_life']); ?></a>
			</div>
		</div>


		<div class="control-group">
			<label class="control-label">产品状态:</label>
			<div class="controls">
				<label>
					<?php if($val['product_state'] == '1'): echo "<font color='red'>"."禁用"."</font>";?>
				     <?php elseif($val['product_state'] == '0'): ?>
                         <?php  echo "<font color='green'>"."正常"."</font>"; endif; ?>
					</label>
			</div>
		</div>


		<div class="control-group">
			<label class="control-label">免赔期:</label>
			<div class="controls">
				<input id="deductibleDay" name="product_period" value="<?php echo ($val['product_period']); ?>" class="required" readonly="readonly" aria-required="true" type="text">天
			</div>
		</div>


	<!-- 	<div class="control-group">
			<label class="control-label">产品有效期:</label>
			<div class="controls">
				<input type="text" id="st" name="product_time" onclick="return Calendar('st');" value="" class="text" style="width:85px;"/>-<input type="text" id="et" onclick="return Calendar('et');" value="" name="et" class="text" style="width:85px;"/>
				
				<input id="d12" name="expirationDate" onclick="WdatePicker()" placeholder="有效的销售期" class="required Wdate" readonly="readonly" value="2019-07-24" aria-required="true" type="text">

		          <! <input type="text" class="date" name="product_time"  placeholder="请选择日期"> -->
			<!-- </div>
		</div> --> 


		<div class="control-group">
			<label class="control-label">批量批发价格:</label>
			<div class="controls">
				<input id="price" name="volume_price" class="required" readonly="readonly" value="<?php echo ($val['volume_price']); ?>" aria-required="true" type="text">元
			</div>
		</div>


		<div class="control-group">
			<label class="control-label">物料编号:</label>
			<div class="controls">
				<input id="materialNumber" name="materialNumber" placeholder="物料编号" readonly="readonly" value="<?php echo ($val['product_number']); ?>" type="text">
			</div>
		</div>


		<div class="control-group">
			<label class="control-label">产品排序:</label>
			<div class="controls">
				<input id="sort" name="sort" placeholder="排序" class="required digits" readonly="readonly" value="1" aria-required="true" type="text">
			</div>
		</div>
		
			<div class="form-actions">
			<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1);return false;" type="button">
		</div>
		
	</form>
	


	
</body>
<script src="/lbyun/lbyun/Public/Admin/static/ace/js/date-time/bootstrap-datepicker.js"></script>
<script>

	
</script>


</html>
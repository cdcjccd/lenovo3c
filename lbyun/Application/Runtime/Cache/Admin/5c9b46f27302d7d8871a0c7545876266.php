<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		即将审核的订单 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>

	<link href="/lenovo3C/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
	<!--<script src="/lenovo3C/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>-->
	<!--[if lte IE 6]><!--<link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />-->
	<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->

	<!--<link href="/lenovo3C/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />-->
	<script src="/lenovo3C/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

	<script src="/lenovo3C/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>


	<style>
		th{
			color: #ffffff;
			background: rgb(68,142,205);
		}
	</style>
		<!--  需要添加百度统计分析-->
		

<meta name="decorator" content="default">
<script type="text/javascript">
	function search() {
		$("#searchForm").submit();
		return false;
	}
</script>

	</head>
	<body>
		
	<div id="warning" style="display: none" class="alert alert-warning" aria-hidden="true">
		<a class="closed close" href="#">×</a> <strong>提示！</strong>
	</div>
	<ul class="nav nav-tabs">
		<li class="active"><a href="http://114.247.140.53:8080/lenjoy#tOrder/auditUserListOrder">实时监控</a></li>
	</ul>
	<h4>核保实时监控面板</h4>
	<br>
	<table id="contentTable" class="table table-condensed info_tab table-bordered table-striped" cellspacing="1" cellpadding="3">
		<tbody>
			<tr>
				<td><b>今日新增订单</b></td>
				<td colspan="3" class="text-error">15</td>
			</tr>
			<tr>
				<td><b>待审核订单</b></td>
				<td>1单</td>
				<td><b>今日已审核订单</b></td>
				<td>36单</td>
			</tr><tr>
				<td><b>平均审核用时</b></td>
				<td>7时44分14秒</td>
				<td><b>审核完成率</b></td>
				
					
						<td class="text-success">97.30%</td>
					
					
					
				

			</tr>
		</tbody>
	</table>
	<br>
	<h4>已审核订单用时分析</h4>
	<br>
	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<th>审核时间</th>
				<th>订单数量</th>
				<th>平均审核时间</th>
				<th>比例</th>
			</tr>
		</thead>
		<tbody>
			
				<tr>
					<td>&lt; 5分钟</td>
					<td>0</td>
					<td>0秒</td>
					<td>0.00%</td>
				</tr>
			
				<tr>
					<td>&lt; 10分钟</td>
					<td>2</td>
					<td>7分54秒</td>
					<td>5.56%</td>
				</tr>
			
				<tr>
					<td>&lt; 30分钟</td>
					<td>6</td>
					<td>22分58秒</td>
					<td>16.67%</td>
				</tr>
			
				<tr>
					<td>&gt; 30分钟</td>
					<td>28</td>
					<td>9时51分23秒</td>
					<td>77.78%</td>
				</tr>
			
			
		</tbody>
	</table>

	<h4>核保人员分析</h4>
	<br>
	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<th>工号</th>
				<th>姓名</th>
				<th>订单数量</th>
				<th>平均审核时间</th>
				<th>审核数量占比</th>
			</tr>
		</thead>
		<tbody>
			
				<tr>
					<td>14229</td>
					<td>温嘉玮-北京</td>
					<td>14</td>
					<td>9时14分4秒</td>
					<td>38.89%</td>
				</tr>
			
				<tr>
					<td>14252</td>
					<td>杜海争-北京</td>
					<td>22</td>
					<td>6时47分4秒</td>
					<td>61.11%</td>
				</tr>
			
			
		</tbody>
	</table>


	
</body></html>
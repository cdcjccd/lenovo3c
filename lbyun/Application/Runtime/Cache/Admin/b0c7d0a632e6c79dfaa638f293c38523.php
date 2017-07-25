<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;">
<head>
	<title>
		通路销售统计 - Powered By Enjoy3C</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Cache-Control" content="no-store" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<meta name="author" content="http://ljz0721cx.iteye.com/" />
	<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10" />
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
	<link href="/lenovo3C/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet" />
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
	<!--<script src="/lenovo3C/Public/Admin/static/userlist/jquery_004.js" type="text/javascript"></script>-->
	<link href="/lenovo3C/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
	<script src="/lenovo3C/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
	<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
	<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
	<!--<script src="/lenovo3C/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script>-->
	<!--<link href="/lenovo3C/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css" />-->
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery_003.js"></script>
	<script src="/lenovo3C/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
	<link href="/lenovo3C/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />
	<script src="/lenovo3C/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
	<!--  需要添加百度统计分析-->
	<meta name="decorator" content="default" />

	<!--<link rel="stylesheet" href="style.css" type="text/css">-->
	<script src="/lenovo3C/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>
	<!--<script src="/lenovo3C/Public/Admin/amcharts/amcharts.js" type="text/javascript"></script>-->
	<!--<script src="/lenovo3C/Public/Admin/amcharts/pie.js" type="text/javascript"></script>-->

	<script src="/lenovo3C/Public/Admin/static/userlist/echarts/echarts.js"></script>
	<script src="/lenovo3C/Public/Admin/static/userlist/echarts/china.js"></script>
	<style>
		.center{
			text-align:center;
		}
		h5{
			text-align: center;
		}
	</style>
	<!--<script data-require-id="echarts/chart/pie" src="/lenovo3C/Public/Admin/static/userlist/pie.js" async=""></script><script data-require-id="echarts/chart/bar" src="/lenovo3C/Public/Admin/static/userlist/bar.js" async=""></script><script data-require-id="echarts/chart/funnel" src="/lenovo3C/Public/Admin/static/userlist/funnel.js" async=""></script><script data-require-id="echarts/chart/line" src="/lenovo3C/Public/Admin/static/userlist/line.js" async=""></script></head>-->
</head>


<body>
<div class="container-fluid">

	<div id="warning" style="display: none" class="alert alert-warning" aria-hidden="true">
		<a class="closed close" href="#">&times;</a>
		<strong>提示！</strong>开始时间和结束时间都必须选择,只允许查询时间间隔不超过30天的数据!
	</div>
	<form style="margin-top: 15px;" id="searchForm" class="breadcrumb form-search" action="#" method="post">
		<div>
			<label>时间段销售：</label>
			<input type="text" id="startDate" placeholder="开始时间" name="startDate" class="required Wdate span2" maxlength="50" onClick="WdatePicker()">
			<!--<input id="startDate" name="startDate" onclick="WdatePicker()" placeholder="开始时间" class="required Wdate span2" maxlength="50" type="text" />-->
			~
			<input type="text" id="endDate" placeholder="结束时间" name="endDate" class="required Wdate span2" maxlength="50" onClick="WdatePicker()">&nbsp;&nbsp;&nbsp;
			<select style="width: 110px;" name="" id="" >
				<option value="">数据展示选择</option>
				<option value=""></option>
			</select>
			&nbsp;&nbsp;
			<!--<input id="endDate" name="endDate" onclick="WdatePicker()" placeholder="结束时间" class="required Wdate span2" maxlength="50" type="text" /> &nbsp;-->
			<input id="btnSubmit" class="btn btn-primary" value="查询"  onclick="reSearch();return false;" type="submit" />&nbsp;&nbsp;
			<input id="btnExcel" class="btn btn-primary" value="数据导出" style="background: #000;" onclick="toExcel();return false;" type="submit" />

			<!--<input type="button" value="tijiao" id="haha">-->
			<!--<testarea id="test"></testarea>-->
		</div>
	</form>

	<h5>批量数据: 共***条</h5>
	<!--列表1-->
	<table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">
		<thead>
		<tr>
			<!-- <th class="center" style="width:35px;">
            <label class="pos-rel"><input type="checkbox" class="ace" id="zcheckbox" /><span class="lbl"></span></label>
            </th> -->
			<!--<th class="center">序号</th>-->
			<th class='center'>订单号</th>
			<th class='center'>创建时间</th>
			<th class='center'>购买机构</th>
			<th class='center'>购买数量</th>
			<!--<th class='center'>通路</th>-->

			<!--<th class='center'>用户状态</th>-->
			<!-- <th class="center">操作</th> -->
		</tr>
		</thead>

		<tbody>
		<!-- 开始循环 -->

		<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				<td class='center'><a href="#"><?php echo ($v['busname']); ?></a></td>
				<td class='center'><?php echo ($v['channelcode']); ?></td>
				<td class='center'>
					<?php
 if($v['dealerlev'] == 1){echo '一级';} if($v['dealerlev'] == 2){echo '二级';} if($v['dealerlev'] == 3){echo '三级';} if($v['dealerlev'] == 4){echo '四级';} ?>
				</td>
				<td class='center'><?php echo ($v['area']); ?></td>
				<td class='center'><?php echo ($v['route']); ?></td>
			</tr><?php endforeach; endif; ?>


		<!-- 循环结束 -->
		</tbody>
	</table>

	<!--列表2-->
	<h5>非批量数据: 共***条</h5>
	<table id="simple-table2" class="table table-striped table-bordered table-hover" style="margin-top:5px;">
		<thead>
		<tr>
			<!-- <th class="center" style="width:35px;">
            <label class="pos-rel"><input type="checkbox" class="ace" id="zcheckbox" /><span class="lbl"></span></label>
            </th> -->
			<!--<th class="center">序号</th>-->
			<th class='center'>订单号</th>
			<th class='center'>创建时间</th>
			<th class='center'>订单来源</th>
			<th class='center'>订单状态</th>
			<!--<th class='center'>通路</th>-->

			<!--<th class='center'>用户状态</th>-->
			<!-- <th class="center">操作</th> -->
		</tr>
		</thead>

		<tbody>
		<!-- 开始循环 -->

		<?php if(is_array($data2)): foreach($data2 as $key=>$v): ?><tr>
				<td class='center'><a href="#"><?php echo ($v['busname']); ?></a></td>
				<td class='center'><?php echo ($v['channelcode']); ?></td>
				<td class='center'>
					<?php
 if($v['dealerlev'] == 1){echo '一级';} if($v['dealerlev'] == 2){echo '二级';} if($v['dealerlev'] == 3){echo '三级';} if($v['dealerlev'] == 4){echo '四级';} ?>
				</td>
				<td class='center'><?php echo ($v['area']); ?></td>
				<td class='center'><?php echo ($v['route']); ?></td>
			</tr><?php endforeach; endif; ?>


		<!-- 循环结束 -->
		</tbody>
	</table>
	<!--分页-->
	<div class="page-header position-relative">

		<table style="width:100%;">
			<tr>
				<td style="vertical-align:top;">

					<?php echo ($page); ?>

				</td>
				<td style="vertical-align:top;"><div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">



				</div></td>
			</tr>
		</table>

	</div>
</div>


</body>
</html>
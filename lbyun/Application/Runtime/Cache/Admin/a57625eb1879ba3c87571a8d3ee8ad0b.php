<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		通路--满期出险率 - Powered By Enjoy3C</title>
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

		<!--  需要添加百度统计分析-->
		
	
	<meta name="decorator" content="default">
	<link href="routeList_data/treeTable.css" rel="stylesheet" type="text/css">
<script src="routeList_data/jquery.js" type="text/javascript"></script>
	
	<style type="text/css">
		th{
			color: #ffffff;
			background: rgb(68,142,205);
		}
		.loading{  
		    width:160px;  
		    height:56px;  
		    position: absolute;  
		    top:50%;  
		    left:50%;  
		    line-height:56px;  
		    color:#fff;  
		    padding-left:60px;  
		    font-size:15px;  
		    background: #000 url(/lenjoy/static/images/loader.gif) no-repeat 10px 50%;  
		    opacity: 0.7;  
		    z-index:9999;  
		    -moz-border-radius:20px;  
		    -webkit-border-radius:20px;  
		    border-radius:20px;  
		    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=70);  
		}  
</style>


	</head>
	<body>
		
     <div id="loading" class="loading" style="display: none"></div> 
	<ul class="nav nav-tabs">
		<li class="active"><a href="http://114.247.140.53:8080/#/stats/outInsurance/routeList">通路--满期出险率</a></li>
	</ul>
	<form id="searchForm" class="breadcrumb form-search" action="/#/stats/outInsurance/routeList" method="post">
		<div style="margin-top: 8px;">
			<label>统计日期：</label>
			<input name="endDate" maxlength="50" onclick="WdatePicker()" readonly="readonly" class="input-medium Wdate" value="2017-07-08" type="text">
			&nbsp;<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return search();" type="submit">
		</div>
	</form>
	


  











	


<script type="text/javascript">top.$.jBox.closeTip();</script>



	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
			    <th>通路</th>
			    <th>出险数</th>
			    <th>总数</th>
				<th>满期出险率</th>
			</tr>
		</thead>
		<tbody>
		
				<tr>
					<td>京东</td>
					<td>13855</td>
					<td>186309</td>
					<td>7.44%</td>
				</tr>
			
				<tr>
					<td>m5</td>
					<td>5748</td>
					<td>103762</td>
					<td>5.54%</td>
				</tr>
			
				<tr>
					<td>苏宁</td>
					<td>630</td>
					<td>5656</td>
					<td>11.14%</td>
				</tr>
			
				<tr>
					<td>m3</td>
					<td>12755</td>
					<td>69239</td>
					<td>18.42%</td>
				</tr>
			
				<tr>
					<td>淘宝</td>
					<td>3428</td>
					<td>570006</td>
					<td>0.60%</td>
				</tr>
			
				<tr>
					<td>北京移动</td>
					<td>2306</td>
					<td>28510</td>
					<td>8.09%</td>
				</tr>
			
				<tr>
					<td>北京联通</td>
					<td>0</td>
					<td>0</td>
					<td>%</td>
				</tr>
			
				<tr>
					<td>北京平安</td>
					<td>72</td>
					<td>779</td>
					<td>9.24%</td>
				</tr>
			
				<tr>
					<td>测试</td>
					<td>12</td>
					<td>397</td>
					<td>3.02%</td>
				</tr>
			
				<tr>
					<td>官网</td>
					<td>144</td>
					<td>583</td>
					<td>24.70%</td>
				</tr>
			
				<tr>
					<td>深圳平安</td>
					<td>9968</td>
					<td>94671</td>
					<td>10.53%</td>
				</tr>
			
				<tr>
					<td>中国移动</td>
					<td>0</td>
					<td>11</td>
					<td>0.00%</td>
				</tr>
			
				<tr>
					<td>京东电销</td>
					<td>1649</td>
					<td>10352</td>
					<td>15.93%</td>
				</tr>
			
				<tr>
					<td>浙江移动</td>
					<td>441</td>
					<td>5223</td>
					<td>8.44%</td>
				</tr>
			
				<tr>
					<td>天猫通路</td>
					<td>104</td>
					<td>9948</td>
					<td>1.05%</td>
				</tr>
			
		
		</tbody>
	</table>

	
</body></html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		产品--满期出险率 - Powered By Enjoy3C</title>
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
	<link href="productList_data/treeTable.css" rel="stylesheet" type="text/css">
<script src="productList_data/jquery.js" type="text/javascript"></script>
	
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
	<script type="text/javascript">
		function page(n,s){
			$("#pageNo").val(n);
			$("#pageSize").val(s);
			$("#searchForm").submit();
	    	return false;
	    }
	   </script>

	</head>
	<body>
		
     <div id="loading" class="loading" style="display: none"></div> 
	<ul class="nav nav-tabs">
		<li class="active"><a href="http://114.247.140.53:8080/#/stats/outInsurance/productList">产品--满期出险率</a></li>
	</ul>
	<form id="searchForm" class="breadcrumb form-search" action="/#/stats/outInsurance/productList" method="post">
		<div style="margin-top: 8px;">
			<input id="pageNo" name="pageNo" value="1" type="hidden">
		    <input id="pageSize" name="pageSize" value="20" type="hidden">
			<label>统计日期：</label>
			<input name="endDate" maxlength="50" onclick="WdatePicker()" readonly="readonly" class="input-medium Wdate" value="2017-07-08" type="text">
			&nbsp;<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return search();" type="submit">
		</div>
	</form>
	


  











	


<script type="text/javascript">top.$.jBox.closeTip();</script>



	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
			    <th>产品名称</th>
			    <th>出险数</th>
			    <th>总数</th>
				<th>满期出险率</th>
			</tr>
		</thead>
		<tbody>
		
				<tr>
					<td>免费上门取修（2年延保）</td>
					<td>1</td>
					<td>1</td>
					<td>100.00%</td>
				</tr>
			
				<tr>
					<td>JD电脑2年延保</td>
					<td>3</td>
					<td>3</td>
					<td>100.00%</td>
				</tr>
			
				<tr>
					<td>电脑延长保修1年</td>
					<td>1</td>
					<td>1</td>
					<td>100.00%</td>
				</tr>
			
				<tr>
					<td>促销屏碎保1年版保1年半</td>
					<td>275</td>
					<td>312</td>
					<td>88.14%</td>
				</tr>
			
				<tr>
					<td>促销屏碎保6个月版保1年</td>
					<td>159</td>
					<td>191</td>
					<td>83.25%</td>
				</tr>
			
				<tr>
					<td>特惠手机屏碎保一年版保修一年半</td>
					<td>5</td>
					<td>7</td>
					<td>71.43%</td>
				</tr>
			
				<tr>
					<td>联享保屏碎保（趸交，1000元以下版）</td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td>
				</tr>
			
				<tr>
					<td>2年全保</td>
					<td>1</td>
					<td>3</td>
					<td>33.33%</td>
				</tr>
			
				<tr>
					<td>(官网手机)屏碎保护(6个月)</td>
					<td>56</td>
					<td>183</td>
					<td>30.60%</td>
				</tr>
			
				<tr>
					<td>防爆膜</td>
					<td>4</td>
					<td>14</td>
					<td>28.57%</td>
				</tr>
			
				<tr>
					<td>LXTB全国联保半年</td>
					<td>3</td>
					<td>13</td>
					<td>23.08%</td>
				</tr>
			
				<tr>
					<td>免费上门取修（2年故障意外全保）</td>
					<td>187</td>
					<td>972</td>
					<td>19.24%</td>
				</tr>
			
				<tr>
					<td>手机屏碎保1年</td>
					<td>3802</td>
					<td>20396</td>
					<td>18.64%</td>
				</tr>
			
				<tr>
					<td>(官网苹果手机)屏碎保护(6个月)</td>
					<td>19</td>
					<td>104</td>
					<td>18.27%</td>
				</tr>
			
				<tr>
					<td>LXTB屏碎保半年版</td>
					<td>3</td>
					<td>18</td>
					<td>16.67%</td>
				</tr>
			
				<tr>
					<td>屏碎保2.0（12个月）标准版</td>
					<td>1388</td>
					<td>9400</td>
					<td>14.77%</td>
				</tr>
			
				<tr>
					<td>(官网苹果手机)屏碎保护(12个月)</td>
					<td>16</td>
					<td>110</td>
					<td>14.55%</td>
				</tr>
			
				<tr>
					<td>免费上门取修（1年意外保）</td>
					<td>3208</td>
					<td>22665</td>
					<td>14.15%</td>
				</tr>
			
				<tr>
					<td>(官网手机)屏碎保护(12个月)</td>
					<td>5</td>
					<td>36</td>
					<td>13.89%</td>
				</tr>
			
				<tr>
					<td>手机屏碎保18个月送6个月</td>
					<td>364</td>
					<td>2688</td>
					<td>13.54%</td>
				</tr>
			
		
		</tbody>
	</table>
	<div class="pagination"><ul>
<li class="disabled"><a href="javascript:">« 上一页</a></li>
<li class="active"><a href="javascript:">1</a></li>
<li><a href="javascript:page(2,20);">2</a></li>
<li><a href="javascript:page(3,20);">3</a></li>
<li><a href="javascript:page(4,20);">4</a></li>
<li><a href="javascript:page(5,20);">5</a></li>
<li><a href="javascript:page(6,20);">6</a></li>
<li><a href="javascript:page(7,20);">7</a></li>
<li><a href="javascript:page(8,20);">8</a></li>
<li><a href="javascript:page(2,20);">下一页 »</a></li>
<li class="disabled controls"><a href="javascript:">当前 <input value="1" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(this.value,20);" onclick="this.select();" type="text"> / <input value="20" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(1,this.value);" onclick="this.select();" type="text"> 条，共 146 条</a></li><li>
</li></ul>
<div style="clear:both;"></div></div> 

	
</body></html>
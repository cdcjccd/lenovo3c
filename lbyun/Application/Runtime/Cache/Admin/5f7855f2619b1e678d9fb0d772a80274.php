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
	<link href="sellerList_data/treeTable.css" rel="stylesheet" type="text/css">
<script src="sellerList_data/jquery.js" type="text/javascript"></script>
	
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
		<li class="active"><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList">产品--满期出险率</a></li>
	</ul>
	<form id="searchForm" class="breadcrumb form-search" action="/#/stats/outInsurance/sellerList" method="post">
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
			    <th>销售商名称</th>
			    <th>出险数</th>
			    <th>总数</th>
				<th>满期出险率</th>
			</tr>
		</thead>
		<tbody>
		
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=126">佳木斯市朝阳信息技术服务有限公司鹤岗分站</a></td>
					<td>2</td>
					<td>2</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=141">锦州中联盛达技术服务有限公司阜新分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=144">锦州中联盛达技术服务有限公司盘锦分公司</a></td>
					<td>2</td>
					<td>2</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=151">呼和浩特市阳光宜友计算机技术服务有限公司乌兰察布分站                </a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=154">呼和浩特市联心计算机技术服务有限公司锡林浩特分站</a></td>
					<td>2</td>
					<td>2</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=156">包头亿诺信息服务有限公司乌海分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=165">阳光雨露信息技术服务（北京）有限公司太原服务中心离石分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=169">潍坊世纪阳光电子科技服务有限公司平度分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=176">烟台中天计算机有限公司荣城分站</a></td>
					<td>3</td>
					<td>3</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=184">临沂市万全计算机服务有限公司枣庄站</a></td>
					<td>2</td>
					<td>2</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=194">青岛瑞博德电子有限公司日照分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=213">安徽聚瑞信息科技有限公司巢湖分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=214">安徽聚瑞信息科技有限公司滁州分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=218">铜陵视窗计算机服务技术服务有限公司池州分站</a></td>
					<td>2</td>
					<td>2</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=227">福州计联电脑有限公司长乐分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=229">南平市联航办公设备有限公司福州分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=240">金华金色在线信息技术服务有限公司建德分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=270">乌鲁木齐市百辰电子技术服务有限公司克拉玛依分站</a></td>
					<td>1</td>
					<td>1</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=285">江油市金色阳光服务有限公司德阳分站</a></td>
					<td>7</td>
					<td>7</td>
					<td>100.00</td>
					
					
				  
				</tr>
			
				<tr>
					<td><a href="http://114.247.140.53:8080/#/stats/outInsurance/sellerList?parentId=296">重庆市万州区中立计算机有限公司永川分站</a></td>
					<td>2</td>
					<td>2</td>
					<td>100.00</td>
					
					
				  
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
<li class="disabled"><a href="javascript:">...</a></li>
<li><a href="javascript:page(28,20);">28</a></li>
<li><a href="javascript:page(2,20);">下一页 »</a></li>
<li class="disabled controls"><a href="javascript:">当前 <input value="1" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(this.value,20);" onclick="this.select();" type="text"> / <input value="20" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(1,this.value);" onclick="this.select();" type="text"> 条，共 552 条</a></li><li>
</li></ul>
<div style="clear:both;"></div></div> 
	
	<div class="form-actions">
			<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1);return false;" type="button">
		</div>

	
</body></html>
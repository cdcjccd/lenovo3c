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
	<link href="areaList_data/treeTable.css" rel="stylesheet" type="text/css">
<script src="areaList_data/jquery.js" type="text/javascript"></script>
	
	<style type="text/css">  
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
		th{
			color: #ffffff;
			background: rgb(68,142,205);
		}
</style>


	</head>
	<body>
		
     <div id="loading" class="loading" style="display: none"></div> 
	<ul class="nav nav-tabs">
		<li class="active"><a href="http://114.247.140.53:8080/#/stats/outInsurance/areaList">区域--满期出险率</a></li>
	</ul>
	<form id="searchForm" class="breadcrumb form-search" action="/#/stats/outInsurance/areaList" method="post">
		<div style="margin-top: 8px;">
			<label>统计日期：</label>
			<input name="endDate" maxlength="50" onclick="WdatePicker()" readonly="readonly" class="input-medium Wdate" value="2016-07-01" type="text">
			&nbsp;<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return search();" type="submit">
		</div>
	</form>
	


  











	


<script type="text/javascript">top.$.jBox.closeTip();</script>



	<table id="contentTable" class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
			    <th>区域名称</th>
			    <th>出险数</th>
			    <th>总数</th>
				<th>满期出险率</th>
			</tr>
		</thead>
		<tbody>
		
				<tr>
					<td>海南省</td>
					<td>81</td>
					<td>224</td>
					<td>36.16%</td>
				</tr>
			
				<tr>
					<td>重庆省</td>
					<td>151</td>
					<td>437</td>
					<td>34.55%</td>
				</tr>
			
				<tr>
					<td>宁夏回族自治区</td>
					<td>9</td>
					<td>27</td>
					<td>33.33%</td>
				</tr>
			
				<tr>
					<td>西藏自治区</td>
					<td>3</td>
					<td>9</td>
					<td>33.33%</td>
				</tr>
			
				<tr>
					<td>四川省</td>
					<td>296</td>
					<td>917</td>
					<td>32.28%</td>
				</tr>
			
				<tr>
					<td>内蒙古自治区</td>
					<td>39</td>
					<td>124</td>
					<td>31.45%</td>
				</tr>
			
				<tr>
					<td>吉林省</td>
					<td>84</td>
					<td>275</td>
					<td>30.55%</td>
				</tr>
			
				<tr>
					<td>山西省</td>
					<td>98</td>
					<td>326</td>
					<td>30.06%</td>
				</tr>
			
				<tr>
					<td>辽宁省</td>
					<td>229</td>
					<td>789</td>
					<td>29.02%</td>
				</tr>
			
				<tr>
					<td>安徽省</td>
					<td>166</td>
					<td>649</td>
					<td>25.58%</td>
				</tr>
			
				<tr>
					<td>陕西省</td>
					<td>167</td>
					<td>675</td>
					<td>24.74%</td>
				</tr>
			
				<tr>
					<td>河南省</td>
					<td>2442</td>
					<td>10089</td>
					<td>24.20%</td>
				</tr>
			
				<tr>
					<td>新疆维吾尔自治区</td>
					<td>43</td>
					<td>187</td>
					<td>22.99%</td>
				</tr>
			
				<tr>
					<td>河北省</td>
					<td>135</td>
					<td>614</td>
					<td>21.99%</td>
				</tr>
			
				<tr>
					<td>上海市</td>
					<td>120</td>
					<td>586</td>
					<td>20.48%</td>
				</tr>
			
				<tr>
					<td>山东省</td>
					<td>1524</td>
					<td>7569</td>
					<td>20.13%</td>
				</tr>
			
				<tr>
					<td>贵州省</td>
					<td>12</td>
					<td>62</td>
					<td>19.35%</td>
				</tr>
			
				<tr>
					<td>甘肃省</td>
					<td>301</td>
					<td>1626</td>
					<td>18.51%</td>
				</tr>
			
				<tr>
					<td>黑龙江省</td>
					<td>57</td>
					<td>319</td>
					<td>17.87%</td>
				</tr>
			
				<tr>
					<td>湖南省</td>
					<td>362</td>
					<td>2298</td>
					<td>15.75%</td>
				</tr>
			
				<tr>
					<td>湖北省</td>
					<td>650</td>
					<td>5555</td>
					<td>11.70%</td>
				</tr>
			
				<tr>
					<td>天津市</td>
					<td>95</td>
					<td>877</td>
					<td>10.83%</td>
				</tr>
			
				<tr>
					<td>福建省</td>
					<td>935</td>
					<td>8894</td>
					<td>10.51%</td>
				</tr>
			
				<tr>
					<td>浙江省</td>
					<td>204</td>
					<td>1985</td>
					<td>10.28%</td>
				</tr>
			
				<tr>
					<td>广东省</td>
					<td>4316</td>
					<td>44304</td>
					<td>9.74%</td>
				</tr>
			
				<tr>
					<td>青海省</td>
					<td>1</td>
					<td>11</td>
					<td>9.09%</td>
				</tr>
			
				<tr>
					<td>云南省</td>
					<td>9</td>
					<td>134</td>
					<td>6.72%</td>
				</tr>
			
				<tr>
					<td>北京市</td>
					<td>9383</td>
					<td>165798</td>
					<td>5.66%</td>
				</tr>
			
				<tr>
					<td>江苏省</td>
					<td>741</td>
					<td>14191</td>
					<td>5.22%</td>
				</tr>
			
				<tr>
					<td>江西省</td>
					<td>193</td>
					<td>5309</td>
					<td>3.64%</td>
				</tr>
			
				<tr>
					<td>广西壮族自治区</td>
					<td>119</td>
					<td>3643</td>
					<td>3.27%</td>
				</tr>
			
		
		</tbody>
	</table>

	
</body></html>
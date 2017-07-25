<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		机构管理 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<!--<meta name="author" content="http://ljz0721cx.iteye.com/">-->
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
	<link href="/lenovo3C/Public/admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
	<!-- <script src="/lenovo3C/Public/admin/static/userlist/jquery_002.js" type="text/javascript"></script> -->
	<!-- <script src="/lenovo3C/Public/admin/static/userlist/jquery_006.js" type="text/javascript"></script> -->
	<link href="/lenovo3C/Public/admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
	<!-- <script src="/lenovo3C/Public/admin/static/userlist/bootstrap.js" type="text/javascript"></script> -->
	<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<!--<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script>--><![endif]-->
	<!--<script src="/lenovo3C/Public/admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">-->
	<!-- <script src="/lenovo3C/Public/admin/static/userlist/jquery_003.js"></script> -->
	<!-- <script src="/lenovo3C/Public/admin/static/userlist/mustache.js" type="text/javascript"></script> -->
	<link href="/lenovo3C/Public/admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
	<!-- <script src="/lenovo3C/Public/admin/static/userlist/lenjoy.js" type="text/javascript"></script> -->

	<script src="/lenovo3C/Public/Admin/layer/jquery.js" type="text/javascript"></script>
	<!-- <script src="/lenovo3C/Public/Admin/layer/layer.js" type="text/javascript"></script> -->
	<!--  需要添加百度统计分析-->


		<!--  需要添加百度统计分析-->
		
	
	<meta name="decorator" content="default">
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
		
	<ul class="nav nav-tabs">
		<li><a href="#/lenjoy/admin/sys/office/commonList">商家列表</a></li>
		<li class="active"><a href="#/lenjoy/admin/sys/office/view?id=10129">机构查看</a></li>
	</ul><br>
	
	
		<table class="table table-bordered  zdy">
			<tbody><tr>
				<th> 上级机构:</th>
				<td>联想大中华区</td>
				<th>归属区域:</th>
				<td> 沈阳市</td>
			</tr>
			<tr>
				<th>销售人:</th>
				<td> </td>
				<th>机构名称:</th>
				<td>沈阳市沈河区友联兴业通讯器材商行</td>
			</tr>
			<tr>
				<th>渠道编号:</th>
				<td></td>
				<th> 机构类型:</th>
				<td>公司</td>
			</tr>
		
			<tr>
				<th>是否销售商:</th>
				<td>是</td>
				<th>机构级别:</th>
				<td>二级</td>
			</tr>
			<tr>
				<th>联系地址:</th>
				<td>沈阳市沈河区惠工街167号奉天银座C1208</td>
				<th>邮政编码:</th>
				<td></td>
			</tr>
			<tr>
				<th>负责人:</th>
				<td>卢壮</td>
				<th>电话:</th>
				<td>13998800123</td>
			</tr>
			<tr>
				<th>传真:</th>
				<td></td>
				<th>邮箱:</th>
				<td></td>
			</tr>
			
				<tr>
				<th>通路:</th>
				<td>m5</td>
				<th>备注:</th>
				<td></td>
			
			</tr>
		</tbody></table>
		
		<div style="font-size: 16px;font-family:'微软雅黑'">机构人员列表</div>
		<form id="searchForm" class="breadcrumb form-search" action="/lenjoy/admin/sys/office/view" method="post">
		<input id="pageNo" name="pageNo" value="1" type="hidden">
		<input id="pageSize" name="pageSize" value="20" type="hidden">
		<input id="orderBy" name="orderBy" value="" type="hidden">
		<input id="orderBy" name="id" value="10129" type="hidden">
		<div style="margin-top:8px;">
			<label>登录名：</label><input name="loginName" htmlescape="false" maxlength="50" class="input-medium">
			<label>姓&nbsp;&nbsp;&nbsp;名：</label><input name="name" htmlescape="false" maxlength="50" class="input-medium">
			
		
			
			&nbsp;<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return page();" type="submit">
		</div>
	</form> 
	


  











	


<script type="text/javascript">top.$.jBox.closeTip();</script>



	<table id="contentTable" class="table table-striped table-bordered table-condensed table-responsive">
		<thead>
			<tr>
				
				<th class="sort loginName">登录名</th>
				<th class="sort name" width="88px">姓名</th>
				<th>电话</th>
				<th width="88px">手机</th>
				<th>用户状态</th>
				<th>用户角色</th>
			</tr>
		</thead>
		<tbody>
		
			<tr>
				<td>13998800123</td>
				<td>卢壮</td>
				<td>13998800123</td>
				<td></td>
				<td>激活</td>
				<td>
				
				    二级（代销商）,
				
				    销售人员,
				
				    公司负责人,
				
				</td>
			</tr>
		
			<tr>
				<td>15041451234</td>
				<td>柏先生</td>
				<td></td>
				<td>15041451234</td>
				<td>激活</td>
				<td>
				
				    销售人员,
				
				</td>
			</tr>
		
			<tr>
				<td>13478132029</td>
				<td>于洪峰</td>
				<td></td>
				<td>13478132029</td>
				<td>激活</td>
				<td>
				
				    销售人员,
				
				</td>
			</tr>
		
			<tr>
				<td>15840419870</td>
				<td>兰浩</td>
				<td></td>
				<td>15840419870</td>
				<td>激活</td>
				<td>
				
				    销售人员,
				
				</td>
			</tr>
		
			<tr>
				<td>15040331000</td>
				<td>李龙静</td>
				<td></td>
				<td>15040331000</td>
				<td>激活</td>
				<td>
				
				    销售人员,
				
				</td>
			</tr>
		
			<tr>
				<td>18640005777</td>
				<td>宝岩</td>
				<td></td>
				<td>18640005777</td>
				<td>激活</td>
				<td>
				
				    销售人员,
				
				</td>
			</tr>
		
			<tr>
				<td>13358864111</td>
				<td>范冰冰</td>
				<td></td>
				<td>13358864111</td>
				<td>激活</td>
				<td>
				
				    销售人员,
				
				</td>
			</tr>
		
			<tr>
				<td>13889155678</td>
				<td>毕万龙</td>
				<td></td>
				<td>13889155678</td>
				<td>激活</td>
				<td>
				
				    销售人员,
				
				</td>
			</tr>
		
		</tbody>
	</table>
	<div class="pagination"><ul>
<li class="disabled"><a href="javascript:">« 上一页</a></li>
<li class="active"><a href="javascript:">1</a></li>
<li class="disabled"><a href="javascript:">下一页 »</a></li>
<li class="disabled controls"><a href="javascript:">当前 <input value="1" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(this.value,20);" onclick="this.select();" type="text"> / <input value="20" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(1,this.value);" onclick="this.select();" type="text"> 条，共 8 条</a></li><li>
</li></ul>
<div style="clear:both;"></div></div>
		
		
		<div class="form-actions">
			<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1)" type="button">
		</div>
	

	
</body></html>
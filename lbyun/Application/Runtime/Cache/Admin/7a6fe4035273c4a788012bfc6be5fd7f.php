<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		所有订单统计 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>-->
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>-->
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>-->
	<link href="/lbyun/lbyun/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet" />
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>-->
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_004.js" type="text/javascript"></script>-->
	<link href="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
	<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
	<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script>-->
	<!--<link href="/lbyun/lbyun/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css" />-->
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_003.js"></script>-->
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>-->
	<link href="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

	<script src="/lbyun/lbyun/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>

		<!--  需要添加百度统计分析-->
		

<meta name="decorator" content="default">


	</head>
	<body>
		
	<div id="warning" style="display: none" class="alert alert-warning" aria-hidden="true">
		<a class="closed close" href="#">×</a> <strong>提示！</strong>非保险期的订单不能出险!
	</div>

	<form id="searchForm" class="breadcrumb form-search" action="#/business/export/accidentInfo" method="post">
		<input id="pageNo" name="pageNo" value="" type="hidden">
		<input id="pageSize" name="pageSize" value="" type="hidden">
		<input id="orderBy" name="orderBy" value="" type="hidden">
		<input id="orderType" name="orderType" value="2" type="hidden">
		<input id="refresh" name="refresh" value="batch" type="hidden">
		<div>
			<label>时间段销售：</label>
			<input id="d12" name="startTime" onclick="WdatePicker()" placeholder="开始" class="required Wdate span2" maxlength="50" type="text">-
			<input id="d13" name="endTime" onclick="WdatePicker()" placeholder="结束时间" class="required Wdate span2" maxlength="50" type="text">
			&nbsp;&nbsp;<div class="btn-group">
			  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			        数据展示选择<span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu">
			   <li><a href="javascript:" class="show_select" title="batch">显示批量数据</a></li>
			   <li><a href="javascript:" class="show_select" title="only">显示其他数据</a></li>
			  </ul>
			</div>
			&nbsp;&nbsp;<input id="btnSubmit" class="btn btn-primary" value="查询" onclick="return page();" type="submit">

			&nbsp;&nbsp;<input id="btnSubmit2" class="btn btn-info submitbutton" value="导出销售数据"  type="button"><!--onclick="return exportSaleOrder();"-->

		</div>
	</form>
	<script type="text/javascript">
		$(function(){
			$("a.show_select").click(function(){
				$(".order_show").hide();
				$("#refresh").val($(this).attr("title"));
				if("batch"==$(this).attr("title")){
					$("#batch").show();
				}
				if("only"==$(this).attr("title")){
					$("#only").show();
				}
			})
		})

		$('#btnSubmit2').click(function(){
            window.location.href = "<?php echo U('Admin/SaleAnalyze/saleExport');?>?export=export";
		    $(this).attr({
				'value' : '休息一下...',
				'disabled' : 'disabled'
			});
            setTimeout(function(){
                $('#btnSubmit2').removeAttr('disabled')
                $('#btnSubmit2').val('导出销售数据')
            },5000);

		})

	</script>


  











	


<!--<script type="text/javascript">top.$.jBox.closeTip();</script>-->



	<div id="batch" class="order_show" style="display:">
		<table class="table table-striped table-bordered table-condensed">
			<caption><h4>批量数据：共396588条</h4></caption>
			<thead>
			  <tr>
			    <th>订单号</th>
			    <th>创建时间</th>
			    <th>购买机构</th>
			    <th>购买数量</th>
			  </tr>
			</thead>
		 	<tbody>
		 		
					<tr class="info">
					    <td>201406251403670655348</td>
					    <td>2014-06-25</td>
					    <td>大同市城区晋联科技有限责任公司临汾分站</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406251403689243763</td>
					    <td>2014-06-25</td>
					    <td>西安亿诺信息技术服务有限公司</td>
					    <td>500</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406251403690377854</td>
					    <td>2014-06-25</td>
					    <td>洛阳永联信息技术有限公司</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406261403750124086</td>
					    <td>2014-06-26</td>
					    <td>阳光雨露信息技术服务（北京）有限公司杭州服务部</td>
					    <td>107</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406261403750657302</td>
					    <td>2014-06-26</td>
					    <td>阳光雨露信息技术服务(北京)有限公司郑州服务部许昌分站</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406261403751615651</td>
					    <td>2014-06-26</td>
					    <td>阳光雨露信息技术服务（北京）有限公司周口服务部</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406261403753766608</td>
					    <td>2014-06-26</td>
					    <td>北京源晨动力技术有限公司深圳分公司</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406261403758214881</td>
					    <td>2014-06-26</td>
					    <td>上海申铁信息工程有限公司杭州分公司</td>
					    <td>200</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406261403759035746</td>
					    <td>2014-06-26</td>
					    <td>泉州达奇电脑有限公司</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406261403770656968</td>
					    <td>2014-06-26</td>
					    <td>天津阳光世纪信息技术服务有限公司唐山分公司</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406261403773472861</td>
					    <td>2014-06-26</td>
					    <td>宁波腾达之星信息技术有限公司</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406271403835068690</td>
					    <td>2014-06-27</td>
					    <td>长春市朝阳信息技术服务有限公司</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406271403851051156</td>
					    <td>2014-06-27</td>
					    <td>济宁先锋信息服务有限责任公司</td>
					    <td>1000</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406271403853909757</td>
					    <td>2014-06-27</td>
					    <td>阳光雨露信息技术服务（北京）有限公司芜湖服务部</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406301404098650375</td>
					    <td>2014-06-30</td>
					    <td>阳光雨露信息技术服务（北京）有限公司周口服务部</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201406301404106707577</td>
					    <td>2014-06-30</td>
					    <td>天津市雅铁科贸有限公司</td>
					    <td>500</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201407021404278828743</td>
					    <td>2014-07-02</td>
					    <td>东莞市海德计算机科技有限公司虎门分站</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201407021404279139272</td>
					    <td>2014-07-02</td>
					    <td>济南万全信息服务有限公司</td>
					    <td>200</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201407021404289321236</td>
					    <td>2014-07-02</td>
					    <td>开封市嘉诚计算机网络有限公司</td>
					    <td>500</td>
			 	 	</tr>
		 	 	
					<tr class="info">
					    <td>201407031404386302328</td>
					    <td>2014-07-03</td>
					    <td>阳光雨露信息技术服务（北京）有限公司周口服务部</td>
					    <td>100</td>
			 	 	</tr>
		 	 	
			</tbody>
		</table>
		<div class="pagination">

			<!--分页-->
<div style="clear:both;"></div></div>
	</div>
	
	<div id="only" class="order_show" style="display:">
		<table class="table table-striped table-bordered table-condensed">
		<caption><h4>非批量数据：共1855514条</h4></caption>
			<thead>
			  <tr>
			    <th>订单号</th>
			    <th>创建时间</th>
			    <th>订单来源</th>
			    <th>订单状态</th>
			  </tr>
			</thead>
		  	<tbody>
				
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406041401845265952</td>
					    <td>2014-06-04</td> 
					    <td>联想大中华区</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406061402039218686</td>
					    <td>2014-06-06</td> 
					    <td>联想大中华区</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406061402045060610</td>
					    <td>2014-06-06</td> 
					    <td>雨思联新（北京）科技发展有限责任公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406071402103849894</td>
					    <td>2014-06-07</td> 
					    <td>银川银诺信息技术服务有限公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406071402104010528</td>
					    <td>2014-06-07</td> 
					    <td>北京源晨动力技术服务有限公司上海分公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406071402104705380</td>
					    <td>2014-06-07</td> 
					    <td>北京源晨动力技术服务有限公司上海分公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406071402122026716</td>
					    <td>2014-06-07</td> 
					    <td>湖南国迈</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							error
							
							
						
					">
					    <td>201406071402126059220</td>
					    <td>2014-06-07</td> 
					    <td>银川银诺信息技术服务有限公司</td>
					    <td>已出险</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406071402126221955</td>
					    <td>2014-06-07</td> 
					    <td>金华金色在线信息技术服务有限公司杭州站</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406071402130246062</td>
					    <td>2014-06-07</td> 
					    <td>阳光雨露信息技术服务（北京）有限公司上海服务二部</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406071402147556211</td>
					    <td>2014-06-07</td> 
					    <td>雨思联新（北京）科技发展有限责任公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							error
							
							
						
					">
					    <td>201406081402183478304</td>
					    <td>2014-06-08</td> 
					    <td>银川银诺信息技术服务有限公司</td>
					    <td>已出险</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406081402183876360</td>
					    <td>2014-06-08</td> 
					    <td>银川银诺信息技术服务有限公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406081402184792568</td>
					    <td>2014-06-08</td> 
					    <td>北京普华基业科技发展有限公司青岛服务部</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406081402185176823</td>
					    <td>2014-06-08</td> 
					    <td>临沂潍联计算机有限公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406081402185593082</td>
					    <td>2014-06-08</td> 
					    <td>廊坊市雨思计算机服务有限公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406081402185842814</td>
					    <td>2014-06-08</td> 
					    <td>烟台中天计算机有限公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406081402186322295</td>
					    <td>2014-06-08</td> 
					    <td>秦皇岛雨思电子科技发展有限公司</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406081402186805409</td>
					    <td>2014-06-08</td> 
					    <td>阳光雨露信息技术服务（北京）有限公司上海服务三部</td>
					    <td>已失效</td>
			 	 	</tr>
		 	 	
					<tr class="
						
							
							
							
							
						
					">
					    <td>201406081402187203131</td>
					    <td>2014-06-08</td> 
					    <td>安徽聚瑞</td>
					    <td>已失效</td>
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
<li><a href="javascript:page(92776,20);">92776</a></li>
<li><a href="javascript:page(2,20);">下一页 »</a></li>
<li class="disabled controls"><a href="javascript:">当前 <input value="1" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(this.value,20);" onclick="this.select();" type="text"> / <input value="20" onkeypress="var e=window.event||this;var c=e.keyCode||e.which;if(c==13)page(1,this.value);" onclick="this.select();" type="text"> 条，共 1855514 条</a></li><li>
</li></ul>
<div style="clear:both;"></div></div>
	</div>
	

	
</body></html>
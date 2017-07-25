<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head><!-- 
	<base href=""> -->
	<!-- 下拉框 -->
	<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/chosen.css" />
	<!-- jsp文件头和头部 -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>联保云</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/bootstrap.css" />
		<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/font-awesome.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace-fonts.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace-ie.css" />
		<![endif]-->
		<!-- inline styles related to this page -->
		<!-- ace settings handler -->
		<script src="/yjc/lby/Public/Admin/static/ace/js/ace-extra.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		<!--[if lte IE 8]>
		<script src="/yjc/lby/Public/Admin/static/ace/js/html5shiv.js"></script>
		<script src="/yjc/lby/Public/Admin/static/ace/js/respond.js"></script>
		<![endif]-->

	<!-- 日期框 -->
	<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/datepicker.css" />
	<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/login/css/style_01.css" />
	<script type="text/javascript">   function initTYPE_ID2(TYPE_ID2) {  switch (document.Form["TYPE_ID"].value) {  
		case "智能硬件" : var TYPE_ID2Options = new Array( "请选择","智能手机","智能手表","智能手环","智能插座","智能音箱","智能家具","智能玩具","智能门锁","智能旅行箱","智能牙刷","智能机器人","无人机","智能平衡车","智能滑板车","智能电动车","智能自行车","VR眼镜"); break; 
		case "3C数码" : var TYPE_ID2Options = new Array( "请选择", "电脑","数码相机","数码摄像机","音箱","电脑配件","办公设备"); break; 
		case "家用电器" : var TYPE_ID2Options = new Array( "请选择", "冰箱", "洗衣机","空调","抽油烟机","热水器","灶具","电饭锅", "微波炉","吸尘器","空气炸锅","榨汁机","电风扇","吹风机","加湿器","消毒柜", "洗碗机","净水器","豆浆机","电热水壶","电压力","电磁炉","养生壶","饮水机","烤箱","面包机","咖啡机","空气净化器","插座","插线板"); break;
		case "汽车" : var TYPE_ID2Options = new Array( "请选择", "燃油汽车", "电动汽车","混合动力汽车"); break;
		default: var TYPE_ID2Options = new Array("请选择", ""); break; } document.Form["TYPE_ID2"].options.length = 0; for(var i = 0; i < TYPE_ID2Options.length; i++) 
		{ document.Form["TYPE_ID2"].options[i]=new Option(TYPE_ID2Options[i],TYPE_ID2Options[i+1]); if (document.Form["TYPE_ID2"].options[i].value==TYPE_ID2)
		{ document.Form["TYPE_ID2"].selectedIndex = i; } } } function creatTYPE_ID(TYPE_ID)
		{ var TYPE_ID = new Array( "智能硬件","3C数码", "家用电器","汽车"); document.Form["TYPE_ID"].options[0]=new Option("请选择",""); for(var i = 0; i < TYPE_ID.length; i++) 
		{ document.Form["TYPE_ID"].options[i+1]=new Option(TYPE_ID[i],TYPE_ID[i]); if (document.Form["TYPE_ID"].options[i+1].value==TYPE_ID)
		{ document.Form["TYPE_ID"].selectedIndex = i+1; } } }
</script>
		
</head>
<body class="no-skin">
<style>
		.valid_message{
			color:red;
			padding-left：10px;
		}
	</style>
<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
	<!-- /section:basics/sidebar -->
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
					
					<form action="<?php echo U('Admin/Device/addDevice');?>" name="Form" id="Form" method="post">
						<input type="hidden" name="DEVICE_ID" id="DEVICE_ID" value=""/>
						<div id="zhongxin" style="padding-top: 13px;">
						
						<div class="zhuce" style="margin:0;">
							<table class="kehuzhuce" width="100%" height="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td align="left" valign="">
									    <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" class="checkdevice" id="table_report">
										<!-- <table id="table_report" class="table table-striped table-bordered table-hover"> -->
											<tr>
												<td style="width:75px;text-align: right;padding-top: 13px;">产品分类：</td>
												<td>
													<select onchange="initTYPE_ID2();" name="TYPE_ID" id="TYPE_ID">         
													   <SCRIPT>creatTYPE_ID();</SCRIPT>  
													<select>
													<select name="TYPE_ID2" id="TYPE_ID2">        
														<option value="">请选择</option>  
													<select>
												</td>
											</tr>
											<tr>
												<td align="right">产品发布人：</td>
												  <td>
												     <select id="COMPANYINFO_ID" name="ATTACH"style="width:20%;">
												       <option id="xz" value="">==请选择公司==</option>
												       <option id="" value="个人">个人</option>
												       <option id="" value="暂不选择">暂不选择</option>
												     </select>
												     <a href="<?php echo U('Admin/Company/Company_Info_Add');?>"><input type="button" value="添加公司" class="tianjia" style="width:100px;"/></a>
												 </td>
											</tr>
											
											<tr>
												<td align="right">产品名称：</td>
												<td><input type="text" name="DEVICE_NAME" id="DEVICE_NAME" value="" maxlength="255" placeholder="这里输入设备名称" title="设备名称" /></td>
											</tr>
											<tr>
												<td align="right">产品品牌：</td>
												<td><input type="text" name="BRAND" id="BRAND" value="" maxlength="255" placeholder="这里输入品牌" title="品牌" /></td>
											</tr>
											<tr>
												<td align="right">媒体价格：</td>
												<td><input type="text" name="MEDIA_PRICE" id="MEDIA_PRICE" value="" maxlength="255" placeholder="这里输入硬件的媒体价" title="硬件的媒体价"/></td>
											</tr>
											<tr>
												<td align="right">产品描述：</td>
												<td><input type="text" name="PRODUCT_DESCRIPTION" id="PRODUCT_DESCRIPTION" value="" maxlength="255" placeholder="这里输入产品描述" title="产品描述"/></td>
											</tr>
											<tr>
												<td align="right">产品服务热线：</td>
												<td><input type="text" name="HOTLINE" id="HOTLINE" value=""  placeholder="这里输入产品服务热线" title="产品的服务热线"/></td>
											</tr>
											
											<tr>
												<td align="right">上市时间：</td>
												<td><input class="span10 date-picker" name="SHIP_DATE" id="SHIP_DATE" value="" type="text" data-date-format="yyyy-mm-dd" readonly="readonly" placeholder="出厂时间" title="出厂时间" /></td>
											</tr>
											<tr>
												<td align="right">标准保修期：</td>
												<td><input class="required" data-tip="&nbsp;以年为单位"  data-valid="isNonEmpty||isEmail" data-error="&nbsp;标准保修期不能为空" type="number" name="STANDARD_TIME" id="STANDARD_TIME" value="" maxlength="255" placeholder="这里输入标准保障时间" title="标准保障时间"/></td>
											</tr>
											
											<tr>
												<td></td>
												<td align="left">
													<a class="btn btn-mini btn-primary" id="addsave" onclick="save();">保存</a>
													<a class="btn btn-mini btn-danger" onclick="top.Dialog.close();">取消</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						</div>
						<div id="zhongxin2" class="center" style="display:none">
							<br/><br/><br/><br/>
							<br/>
							<h4 class="lighter block green">生成成功,并为您生成了<span id="span"></span>的产品服务卡,请您扫码查看</h4>
							<br/>
							<img src="" id="codeimg"/><br/><br/><br/>
							<h4 class="lighter block green">您看将此二维码印制在产品或说明书中</h4>
						</div>
					</form>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.page-content -->
		</div>
	</div>
	<!-- /.main-content -->
</div>
<!-- /.main-container -->

	<!-- input提示 -->
	<script src="/yjc/lby/Public/Admin/static/login/js/jquery-1.11.1.js"></script>
	<script src="/yjc/lby/Public/Admin/static/login/js/jquery-validate.js"></script>
	<!-- input提示 -->
	<!-- 页面底部js¨ -->
			
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery1x.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="/yjc/lby/Public/Admin/static/ace/js/bootstrap.js"></script>
	<!-- 下拉框 -->
	<script src="/yjc/lby/Public/Admin/static/ace/js/chosen.jquery.js"></script>
	<!-- 日期框 -->
	<script src="/yjc/lby/Public/Admin/static/ace/js/date-time/bootstrap-datepicker.js"></script>
	<!--提示框-->
	<!-- input提示 -->
		<script type="text/javascript">

		  $('form').validate({
		
		    onFocus: function() {
		
		      this.parent().addClass('active');
		
		      return false;
		
		    },
		
		    onBlur: function() {
		
		      var $parent = this.parent();
		
		      var _status = parseInt(this.attr('data-status'));
		
		      $parent.removeClass('active');
		
		      if (!_status) {
		
		        $parent.addClass('error');
		
		      }
		
		      return false;
		
		    }
		
		  });
		
		
		
		  $('form').on('submit', function(event) {
		
		    event.preventDefault();
		
		    $(this).validate('submitValidate'); //return boolean;
		
		  });
		
		  </script>
<!-- input提示 -->
	<script type="text/javascript" src="/yjc/lby/Public/Admin/static/js/jquery.tips.js"></script>
		<script type="text/javascript">
		// $(top.hangge());
		var deviceid; //装硬件id的
		
		 $(document).ready(function(){
			 attachselect();
			 
		 });
		
		//是硬件的下拉
		function attachselect(){
			$.ajax({
				type: "POST",
				url: 'companyinfo/selectBycompany.do',
		    	data: {USER_ID:$("#USER_ID").val()},
				dataType:'json',
				cache: false,
				success: function(data){
					
					if (data.result) {
						var rows=data.list;
						console.log(rows);
						$.each(rows,function(i,index){
							
							$("#xz").after("<option value="+index.COMPANY_NAME+">"+index.COMPANY_NAME+"</option>")
							
						})
					}
					
				}
			
		   })
		}
		
		//保存
		function save(){
			$("#addsave").attr("disabled","true");
			
			$.ajax({
				type: "POST",
				url: '<?php echo U('Admin/Device/addDevice');?>',
		    	data: {TYPE_ID:$("#TYPE_ID").val(),DEVICE_NAME:$("#DEVICE_NAME").val(),
		    		MEDIA_PRICE:$("#MEDIA_PRICE").val(),BRAND:$("#BRAND").val(),
		    		DESCRIPTION:$("#DESCRIPTION").val(),SHIP_DATE:$("#SHIP_DATE").val(),
		    		PRODUCT_DESCRIPTION:$("#PRODUCT_DESCRIPTION").val(),TYPE_ID2:$("#TYPE_ID2").val(),STANDARD_TIME:$("#STANDARD_TIME").val(),
		    		HOTLINE:$("#HOTLINE").val(),ATTACH:$("#COMPANYINFO_ID").val()     
		    	   },
		    		
				dataType:'json',
				cache: false,
				success: function(data){
					
					if (data.result=='ok') {
						alert('添加成功');
						window.location.href = "<?php echo U('Admin/Device/device');?>";
						 // deviceid=data.DEVICE_ID;
						 // devicenum=data.DEVICE_NUM;
						
						 // $.ajax({
							// 	type: "POST",
							// 	url: '{}',
						 //    	data:{DEVICE_ID:deviceid,DEVICE_NUM:devicenum},
							// 	dataType:'json',
							// 	cache: false,
							// 	success: function(data){
									
									
							// 		if (data.result=='success') {
							// 			$("#span").html($("#DEVICE_NAME").val())
							// 			var path=data.encoderImgId;
							// 			$("#codeimg").attr('src','uploadFiles/twoDimensionCode/'+path);    
							// 			$("#zhongxin").hide();
							// 			$("#zhongxin2").show();
										
							// 		}
									
							// 	}
							// })
						
					}
					
				}
			})
			
			
			
			
			// 是请求到硬件详情页面
			function devicedetil(){
				
				$.ajax({
					type: "POST",
					url: 'device/save.do?DEVICE_ID'+deviceid,
			    	data:{},
					dataType:'json',
					cache: false,
					success: function(data){
						
					}
				})
				
			}
			
			// $("#Form").submit();
			
			
		}
		
		$(function() {
			//日期框
			$('.date-picker').datepicker({autoclose: true,todayHighlight: true});
		});
		</script>
</body>
</html>
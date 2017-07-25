<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
	<base href="http://www.lby.com/">
	<!-- 下拉框 -->
	<link rel="stylesheet" href="/Public/Admin/static/ace/css/chosen.css" />
	<!-- jsp文件头和头部 -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>联保云</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/bootstrap.css" />
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/font-awesome.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-fonts.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/Admin/static/ace/css/ace-ie.css" />
		<![endif]-->
		<!-- inline styles related to this page -->
		<!-- ace settings handler -->
		<script src="/Public/Admin/static/ace/js/ace-extra.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		<!--[if lte IE 8]>
		<script src="/Public/Admin/static/ace/js/html5shiv.js"></script>
		<script src="/Public/Admin/static/ace/js/respond.js"></script>
		<![endif]-->

	<!-- 日期框 -->
	<link rel="stylesheet" href="/Public/Admin/static/ace/css/datepicker.css" />
	<link rel="stylesheet" href="/Public/Admin/static/login/css/style_01.css" />
</head>
<body class="no-skin">
<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
	<!-- /section:basics/sidebar -->
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
					
					<form action="<?php echo U('Admin/Company/edit').'?companyinfo_id='.$companyinfo_id;?>" name="Form" id="Form" method="post" enctype="multipart/form-data">
						<input type="hidden" name="COMPANYINFO_ID" id="COMPANYINFO_ID" value=""/>
						<input type="hidden" name="USER_ID" id="USER_ID" value=""/>
						<div id="zhongxin" style="padding-top: 13px;">
						<div class="zhuce" style="margin:0;">
							<table class="kehuzhuce" width="100%" height="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td align="left" valign="">
									    <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" class="checkdevice" id="table_report">
											<tr>
												<td align="right">公司名称：</td>
												<td><input type="text" name="COMPANY_NAME" id="COMPANY_NAME" value="" maxlength="255" placeholder="<?php echo ($companyinfo["company_name"]); ?>" title="公司名称" /></td>
											</tr>
											<tr>
												<td align="right">营业执照号：</td>
												<td><input type="text" name="CERT" id="CERT" value="" maxlength="255" placeholder="<?php echo ($companyinfo["cert"]); ?>" title="营业执照号"/></td>
											</tr>
											<tr>
												<td align="right">营业执照图片：</td>
												
												   <td>
												     <input type="file" name="cert_url[]" id="CERT_URL" value="" maxlength="255" placeholder="这里输入营业执照图片路径" title="营业执照图片路径"/>
												     <input type="file" name="cert_url[]" id="CERT_URL" value="" maxlength="255" placeholder="这里输入营业执照图片路径" title="营业执照图片路径"/>
												     <input type="file" name="cert_url[]" id="CERT_URL" value="" maxlength="255" placeholder="这里输入营业执照图片路径" title="营业执照图片路径"/>
													 <span id="spanuser" style="width:30%;">请上传营业执照清晰彩色原件扫描件或数码照在有效期内且年检章
													 齐全（当年成立的可无年检章）由中国大陆工商局或市场监督管理局颁发
									 				支持.jpg .jpeg .png 格式照片，大小不超过5M。</span>
												     <!-- <div class="col-md-12">
													 <div class="form-group">
													   <label class="col-sm-3 control-label no-padding-right" for="-NaN">文件域：</label>
															 <div id="userdiv" style="display: none">
															    
															   </div>
														  <div class="col-sm-9">
														   <input type="button" id="tp" name="tp" value="上传图片" onclick="picturecom();" />
														  </div>
													   </div>
													  </div> -->
													</td>
												</td>
											
											</tr>
											<tr>
												<td align="right">公司类型：</td>
												<td>
												   <select name="COMPANY_TYPE" id="company_type">
														  <option value=''>==请选择==</option>
														  <option value='智能硬件厂商'>智能硬件厂商</option>
														  <option value='家电厂商'>家电厂商</option>
														  <option value='汽车厂商'>汽车厂商</option>
														  <option value='经销商、代理商'>经销商、代理商</option>
														  <option value='线上电商、店铺'>线上电商、店铺</option>
														  <option value='线下连锁卖场、店铺'>线下连锁卖场、店铺</option>
														  <option value='售后服务公司'>售后服务公司</option>
														  <option value='其他公司'>其他公司</option>
														</select>
				                                 </td>
											</tr>
											<tr>
												<td align="right">公司街道地址：</td>
												<td><input type="text" name="STREET_ADDRESS" id="STREET_ADDRESS" value="" maxlength="255" placeholder="<?php echo ($companyinfo["street_address"]); ?>" title="STREET_ADDRESS" /></td>
											</tr>
											<tr>
												<td align="right">公司所在地区：</td>
												<td><input type="text" name="AREA" id="AREA" value="" maxlength="255" placeholder="<?php echo ($companyinfo["area"]); ?>" title="公司所在地区"/></td>
											</tr>
											<tr>
												<td align="right">公司电话：</td>
												<td><input type="text" name="COMPANY_TEL" id="COMPANY_TEL" value="" maxlength="255" placeholder="<?php echo ($companyinfo["company_tel"]); ?>" title="公司电话"/></td>
											</tr>
											<tr>
												<td align="right">公司网址：</td>
												<td><input type="text" name="COMPANY_URL" id="COMPANY_URL" value="" maxlength="255" placeholder="<?php echo ($companyinfo["company_url"]); ?>" title="公司网址"/></td>
											</tr>
											<tr>
												<td></td>
												<td align="left">
													<a class="btn btn-mini btn-primary" onclick="save();">保存</a>
													<a class="btn btn-mini btn-danger" href="<?php echo U('Admin/Company/Company_Info_List');?>">取消</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						</div>
						<div id="zhongxin2" class="center" style="display:none"><br/><br/><br/><br/><br/><img src="/Public/Admin/static/images/jiazai.gif" /><br/><h4 class="lighter block green">提交中...</h4></div>
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


	<!-- 页面底部js¨ -->
			
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='http://www.lbyun.com:80//Public/Admin/static/ace/js/jquery1x.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<!-- 下拉框 -->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Admin/static/ace/js/chosen.jquery.js"></script>
		<!--提示框-->
		<script type="text/javascript" src="/Public/Admin/static/js/jquery.tips.js"></script>
		<script src="/Public/Admin/static/ace/js/bootstrap.js"></script>
	
	<!-- 日期框 -->
	<script src="/Public/Admin/static/ace/js/date-time/bootstrap-datepicker.js"></script>
	
<script type="text/javascript">
	
		var psm=[];
		//保存
		function save(){
			var ppic=$("#CERT_URL").val();
			psm=ppic.split(",");
			
			
			if($("#COMPANY_NAME").val()==""){
				$("#COMPANY_NAME").tips({
					side:3,
		            msg:'请输入公司名称',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#COMPANY_NAME").focus();
			return false;
			}
			
			if($("#CERT").val()==""){
				$("#CERT").tips({
					side:3,
		            msg:'请输入营业执照号',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#CERT").focus();
			return false;
			}
			if($("#CERT_URL").val()==""){
				$("#CERT_URL").tips({
					side:3,
		            msg:'请输上传公司营业执照扫描件',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#CERT_URL").focus();
			return false;
			}else if(psm.length>3){
				$("#CERT_URL").tips({
					side:3,
		            msg:'最多只能上传3张图片',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#CERT_URL").focus();
			return false;
			}
			
			if($("#COMPANY_TYPE").val()==""){
				$("#COMPANY_TYPE").tips({
					side:3,
		            msg:'请输入公司类型【厂商，经销商, 店铺】',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#COMPANY_TYPE").focus();
			return false;
			}
			if($("#STREET_ADDRESS").val()==""){
				$("#STREET_ADDRESS").tips({
					side:3,
		            msg:'请输入公司的街道地址',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#STREET_ADDRESS").focus();
			return false;
			}
			
			if($("#AREA").val()==""){
				$("#AREA").tips({
					side:3,
		            msg:'请输入公司所在地区',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#AREA").focus();
			return false;
			}

			if($("#COMPANY_TEL").val()==""){
				$("#COMPANY_TEL").tips({
					side:3,
		            msg:'请输入公司电话',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#COMPANY_TEL").focus();
			return false;
			}
			if($("#COMPANY_URL").val()==""){
				$("#COMPANY_URL").tips({
					side:3,
		            msg:'请输入公司网址',
		            bg:'#AE81FF',
		            time:2
		        });
				$("#COMPANY_URL").focus();
			return false;
			}
			
			$("#Form").submit();
			$("#zhongxin").hide();
			$("#zhongxin2").show();
		}
		
		$(function() {
			//日期框
			$('.date-picker').datepicker({autoclose: true,todayHighlight: true});
		});
		</script>
</body>
</html>
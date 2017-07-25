<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
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
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries
		[if lte IE 8]> -->
		<script src="/yjc/lby/Public/Admin/static/ace/js/html5shiv.js"></script>
		<script src="/yjc/lby/Public/Admin/static/ace/js/respond.js"></script>
		<!--<![endif]-->

<!-- 日期框 -->
<link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/datepicker.css" />
<!-- <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/less/ace.css" /> -->
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
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">我公司的信息</a>
							</li>
							<li class="active  avtive_bold">型号管理</li>
						</ul>	
						<!-- 检索  -->
						<form action="<?php echo U('Model/model_add');?>" method="post" name="Form" id="Form">
						<table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
							<tr>
								
                                <td style="padding-right:16px;">类型:</td>
								<!-- 类型 -->
								<td style="padding-right:10px;">
								 	<select class="chosen-select form-control" name="brand_id" id="id" data-placeholder="请选择" style="vertical-align:top;width: 120px;">
									<option value="0">----请选择----</option>

					           <?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_id']); ?>"><?php echo ($val['brand_name']); ?></option><?php endforeach; endif; ?>

								  	</select>
								</td>
                            <!--设备-->
                                <td style="padding-right:16px;">设备型号:</td>
								<td>
									<div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="这里输入关键词" class="nav-search-input" id="nav-search-input" autocomplete="off" name="brand_keywords" value="<?php echo ($_POST['brand_keywords']); ?>" placeholder="这里输入关键词"/>
											<i class="ace-icon fa fa-search nav-search-icon"></i>
										</span>
									</div>
								</td>
							<!-- 品牌 -->
							<!-- <td style="padding-right:16px;">品牌:</td>
								<td>
									<div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="这里输入关键词" class="nav-search-input" id="nav-search-input" autocomplete="off" name="brand_keywords" value="<?php echo ($_POST['brand_keywords']); ?>" placeholder="这里输入关键词"/>
											<i class="ace-icon fa fa-search nav-search-icon"></i>
										</span>
									</div>
								</td> -->
								<td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();"  title="检索"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td>
								<!-- <td><a class="btn btn-light btn-xs" onclick="toExcel();" title="导出到EXCEL"><i id="nav-search-icon" class="ace-icon fa fa-download bigger-110 nav-search-icon white"></i></a></td> -->
							</tr>
						</table>
						<!-- 检索  -->
					
						<table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">	
							<thead>
								<tr>
									<th class="center" style="width:35px;">
									<label class="pos-rel">
									<input type="checkbox"  onclick='selectAll()' class="ace" id="zcheckbox" />
									<span class="lbl"></span>
								    </label>
									</th>
									<!-- <th class="center">自增品牌</th> -->
									<th class="center">设备品牌</th>
									<th class="center">型号名称</th>
									<th class="center">型号ID</th>
									<th class="center">基本价格</th>
									<th class="center">型号描述</th>
									<th class="center">状态</th>
								</tr>
							</thead>
													
							<tbody>
							<!-- 开始循环 -->	
							
								
									<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
											<td class='center'>
												<label class="pos-rel">
													<input type='checkbox' name='checkboxes[]' value="<?php echo ($vo["brand_id"]); ?>" class="ace" />
													<span class="lbl"></span>
												</label>
											</td>

                                             
											<td class='center'><?php echo ($vo["brand_name"]); ?></td>
											<td class='center'><?php echo ($vo["model_name"]); ?></td>
											<td class='center'><?php echo ($vo["brand_id"]); ?></td>
											<td class='center'><?php echo ($vo["model_price"]); ?></td>
											<td class='center'><?php echo ($vo["model_describe"]); ?></td>
											<td class='center'>
											   <?php if($vo['brand_state'] == '0'): echo "<font color='red'>"."删除"."</font>";?>
											 	<?php elseif($vo['brand_state'] == '1'): ?>
                                               	<?php  echo "<font color='green'>"."正常"."</font>"; endif; ?>
											</td>

											</td>
										</tr><?php endforeach; endif; ?>
							<!-- 循环结束 -->
							</tbody>
						</table>
						<div class="page-header position-relative">
							   <?php echo ($page); ?>
						</div>
						<table style="width:100%;">
							<tr>
								
								<td style="vertical-align:top;"><div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">	
                                 </div></td>
							</tr>
						</table>
						
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

		<!-- 返回顶部 -->
		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>

	</div>
	<!-- /.main-container -->

	<!-- basic scripts -->
	<!-- 页面底部js¨ -->
			
		<!--[if !IE]> -->
		<!-- <script type="text/javascript">
			window.jQuery || document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
		</script> -->
		<!-- <![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='http://www.lbyun.com:80//yjc/lby/Public/Admin/static/ace/js/jquery1x.js'>"+"<"+"/script>");

		</script>
		<![endif]-->
		<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.js'></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<!-- <script src="/yjc/lby/Public/Admin/static/ace/js/bootstrap.js"></script> -->
	<!-- 删除时确认窗口 -->
	<script src="/yjc/lby/Public/Admin/static/ace/js/bootbox.js"></script>
	<!-- ace scripts -->
	<script src="/yjc/lby/Public/Admin/static/ace/js/ace/ace.js"></script>
	<!-- 下拉框 -->
	<script src="/yjc/lby/Public/Admin/static/ace/js/chosen.jquery.js"></script>
	<!-- 日期框 -->
	<script src="/yjc/lby/Public/Admin/static/ace/js/date-time/bootstrap-datepicker.js"></script>
	<!--提示框-->
		<!--layer弹出图层-->
	
	<script src="/yjc/lby/Public/Admin/static/module_option/js/layer.js"></script>
<!--layer弹出图层-->
	<script type="text/javascript" src="/yjc/lby/Public/Admin/static/js/jquery.tips.js"></script>
	<script type="text/javascript">

        // 一键选中
        function selectAll(){
           var check=document.getElementsByName('checkboxes[]');
          for(var i=0; i<check.length;i++){

          if(check[i].checked==true){

            check[i].checked=false;

          }else{
            check[i].checked=true;
          }  
        }
        }

		// $(top.hangge());//关闭加载状态
		//检索
		function tosearch(){
			$("#Form").submit();
		}
		$(function() {
		
			//日期框
			$('.date-picker').datepicker({
				autoclose: true,
				todayHighlight: true
			});
			
			//下拉框
			if(!ace.vars['touch']) {
				$('.chosen-select').chosen({allow_single_deselect:true}); 
				$(window)
				.off('resize.chosen')
				.on('resize.chosen', function() {
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					});
				}).trigger('resize.chosen');
				$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
					if(event_name != 'sidebar_collapsed') return;
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					});
				});
				$('#chosen-multiple-style .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			}
			
			
			//复选框全选控制
			var active_class = 'active';
			$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
				// var th_checked = this.checked;//checkbox inside "TH" table header
				// $(this).closest('table').find('tbody > tr').each(function(){
				// 	var row = this;
				// 	if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
				// 	else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
				// });
				// var checkbox = $('.ace')
				alert('jqu');
			});
		});
		//新增
		function add(){
			
		}
		
		function success_com(){
			
		}


		
		//修改
		function edit(Id){

			var url = "<?php echo U('Admin/Company/edit');?>?companyinfo_id="+Id;

			window.location.href= url;

		}
		
		//批量操作
		function makeAll(msg){
			
		};
		
		//导出excel
		/*function toExcel(){
			window.location.href='http://www.lbyun.com:80/companyinfo/excel.do';
		}*/
	</script>


</body>
</html>
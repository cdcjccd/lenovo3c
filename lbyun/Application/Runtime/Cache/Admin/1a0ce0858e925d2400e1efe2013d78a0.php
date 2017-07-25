<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<!-- 下拉框 -->
<link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/chosen.css" />
<!-- jsp文件头和头部 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>联保云</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/bootstrap.css" />
		<link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/font-awesome.css" />
		<link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/ace-fonts.css" />
		<link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<script src="/lbyun/lbyun/Public/Admin/static/ace/js/ace-extra.js"></script>
		<script src="/lbyun/lbyun/Public/Admin/static/ace/js/html5shiv.js"></script>
		<script src="/lbyun/lbyun/Public/Admin/static/ace/js/respond.js"></script>
</head>
<body class="no-skin">
	<div class="main-container" id="main-container">
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
							<li class="active  avtive_bold">品牌管理</li>
						</ul>	
						<!-- 检索  -->
						<form action="<?php echo U('Background/brand_show');?>" method="post" name="Form" id="Form">
						<table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
							<tr>
                                <td style="padding-right:16px;">品牌类型:</td>
								<!-- 类型 -->
								<td style="padding-right:10px;">
								 	<select class="chosen-select form-control" name="parent_id" id="id" data-placeholder="请选择" style="vertical-align:top;width: 120px;">
									           <option value="0">----请选择----</option>
					                       <?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_id']); ?>"><?php echo ($val['brand_name']); ?></option>
				                              <?php if(is_array($val['child'])): foreach($val['child'] as $key=>$vo): ?><option value="<?php echo ($vo['brand_id']); ?>" <?php if($dsa_key['parent_id']==$vo['brand_id']) echo selected; ?>><?php echo str_repeat("&nbsp;",3); echo ($vo['brand_name']); ?></option><?php endforeach; endif; endforeach; endif; ?>
								  	</select>
								</td>
                                
                                <td style="padding-right:16px;">品牌名:</td>
								<td>
									<div class="nav-search">
									   <span class="input-icon">
										 <input type="text" placeholder="这里输入关键词" class="nav-search-input" id="nav-search-input" autocomplete="off" name="brand_keywords" value="<?php echo ($dsa_key['brand_keywords']); ?>" placeholder="这里输入关键词"/>
											<i class="ace-icon fa fa-search nav-search-icon"></i>
									  </span>
									</div>
								</td>
								<td style="padding-right:30px;">
									<a href="<?php echo U('Background/brand_add');?>"><input id="btnSubmit" class="btn btn-primary" value="品牌添加" onclick="return search();" type="button"></a>
								</td>
								<td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();"  title="检索"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td>
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
									<th class="center">品牌类型</th>
									<!-- <th class="center">品牌名</th> -->
									<!-- <th class="center">品牌ID</th> -->
									<th class="center">品牌描述</th>
									<th class="center">是否绑定</th>
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

											<td class='center'>
												<?php echo ($vo['brand_name']); ?>
											</td>
											<!-- <td class='center'><?php echo ($vo["brand_id"]); ?></td> -->
											<!-- <td class='center'><?php echo ($vo["parent_id"]); ?></td> -->
											<td class='center'><?php echo ($vo["brand_describe"]); ?></td>
											<td class='center'>为空</td>
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
						<table style="width:100%;">
							<tr>
								<td style="vertical-align:top;">
								</td>
								<td style="vertical-align:top;"><div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">
								<?php echo ($page); ?>

                              </div>
                             </td>
							</tr>
						  </table>
						</div>
					</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div>
	<script type="text/javascript" src="/lbyun/lbyun/Public/Admin/static/js/jquery.tips.js"></script>
	<script type="text/javascript">
	
        window.jQuery || document.write("<script src='/lbyun/lbyun/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
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
		//检索
		function tosearch(){
			$("#Form").submit();
		}
	</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<!-- <base href="http://www.lbyun.com:80/"> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title></title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="/Public/Admin/static/ace/css/bootstrap.min.css" />
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
<!-- webuploader上传插件css -->
<link rel="stylesheet" type="text/css" href="/Public/Admin/plugins/webuploader/webuploader.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/plugins/webuploader/style.css" />
</head>
<body class="no-skin">
	<div class="main-container" id="main-container">
		<div class="main-content">
			<div class="main-content-inner">
		    <div id="wrapper">
		        <div id="container">
		            <!--头部，相册选择和格式选择-->
		            <div id="uploader">
		                <div class="queueList">
		                    <div id="dndArea" class="placeholder">
		                        <div id="filePicker"></div>
		                        <p>或将照片拖到这里，单次最多可选3张</p>
		                    </div>
		                </div>
		                <div class="statusBar" style="display:none;">
		                    <div class="progress">
		                        <span class="text">0%</span>
		                        <span class="percentage"></span>
		                    </div><div class="info"></div>
		                    <div class="btns">
		                        <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
			</div>
		</div>
		<input type="hidden" id="path" name="path"/>
	</div>
	
	<!-- basic scripts -->
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
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Admin/static/ace/js/bootstrap.js"></script>
	<!-- ace scripts -->
	<script src="/Public/Admin/static/ace/js/ace/ace.js"></script>
	<!-- webuploader上传插件js -->
   	<!-- <script type="text/javascript" src="/Public/Admin/plugins/webuploader/webuploader.js"></script>
   	<script type="text/javascript" src="/Public/Admin/plugins/webuploader/upload.js"></script> -->
	<!-- <script type="text/javascript">
		$(top.hangge());
		var picpath=[] ;
  //$("#uploader").append("<input name=\"picpath\" value=\""+picpath+"\" type=\"hidden\"/>") 
		
			
		
	</script> -->
</body>
</html>
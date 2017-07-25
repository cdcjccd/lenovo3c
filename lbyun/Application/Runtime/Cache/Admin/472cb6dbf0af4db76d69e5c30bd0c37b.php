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
  <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/bootstrap.css" /> 
  <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/font-awesome.css" /> 
  <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace-fonts.css" /> 
  <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" /> 
  <script src="/yjc/lby/Public/Admin/static/ace/js/ace-extra.js"></script> 
  <script src="/yjc/lby/Public/Admin/static/ace/js/html5shiv.js"></script> 
  <script src="/yjc/lby/Public/Admin/static/ace/js/respond.js"></script> 
  <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/datepicker.css" /> 
 </head> 
 <body class="no-skin"> 
  <div class="main-container" id="main-container"> 
   <div class="main-content"> 
    <div class="main-content-inner"> 
     <div class="page-content"> 
      <div class="row"> 
       <div class="col-xs-12"> 
        <ul class="breadcrumb"> 
         <li class="active  avtive_bold"><a href="<?php echo U('Import/index');?>">待绑定订单列表</a></li> 
         <li class="active  avtive_bold"><a href="<?php echo U('Import/time_list');?>">通用导入数据</a></li> 
         <li class="active  avtive_bold">导入记录</li> 
        </ul> 
        <form action="companyinfo/list.do" method="post" name="Form" id="Form"> 
         <table border="0" cellspacing="0" cellpading="0" class="table-nav-search"> 
          <tbody>
           <tr> 
            <td> 
             <div class="nav-search"> 
              <span class="input-icon"> 序列号: </span> <input type="text" placeholder="这里输入订单号" class="nav-search-input" id="nav-search-input" autocomplete="off" name="keywords" value="" />
             </div> </td> 
            <td> <span>导入时间:</span> <input class="span10 date-picker start-date" name="lastStart" id="lastStart" value="" type="text" data-date-format="yyyy-mm-dd" readonly="readonly" placeholder="输入日期" title="" /> </td> 
           </tr> 
          </tbody>
         </table> 
         <!-- 检索  --> 
         <?php if(is_array($list)): foreach($list as $key=>$vo): endforeach; endif; ?>
         <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;"> 
          <thead> 
           <tr> 
            <th class="center">导入序列号</th> 
            <th class="center">导入日期</th> 
            <th class="center">导入记录数</th> 
            <th class="center">导入通路</th> 
            <th class="center">是否入库</th> 
            <th class="center">是否有唯一识别</th> 
           </tr> 
          </thead> 
          <tbody> 
           <!-- 开始循环 --> 
           <tr> 
            <td class="center"></td> 
            <td class="center"></td> 
            <td class="center"></td> 
            <td class="center"></td> 
            <td class="center"></td> 
            <td class="center"></td> 
           </tr>  
           <!-- 循环结束 --> 
          </tbody> 
         </table> 
         <div class="page-header position-relative"> 
          <table style="width:100%;"> 
           <tbody>
            <tr> 
             <td style="vertical-align:top;"> </td> 
             <td style="vertical-align:top;">
              <div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;"> 
               <?php echo ($show); ?> 
              </div>
            </td> 
            </tr> 
           </tbody>
          </table> 
         </div> 
        </form> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i> </a> 
  </div> 

    <script type="text/javascript">
			window.jQuery || document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
		</script> 

    <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script> 
  <script src="/yjc/lby/Public/Admin/static/ace/js/bootbox.js"></script> 
  <script src="/yjc/lby/Public/Admin/static/ace/js/ace/ace.js"></script> 
  <script src="/yjc/lby/Public/Admin/static/ace/js/chosen.jquery.js"></script> 
  <script src="/yjc/lby/Public/Admin/static/ace/js/date-time/bootstrap-datepicker.js"></script> 
  <script src="/yjc/lby/Public/Admin/static/module_option/js/layer.js"></script> 
  <script type="text/javascript" src="/yjc/lby/Public/Admin/static/js/jquery.tips.js"></script> 
  <script type="text/javascript">
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
			
	</script>  
 </body>
</html>
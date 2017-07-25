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
 </head> 
 <body class="no-skin"> 
  <div class="main-container" id="main-container"> 
   <div class="main-content"> 
    <div class="main-content-inner"> 
     <div class="page-content"> 
      <div class="row"> 
       <div class="col-xs-12"> 
        <ul class="breadcrumb"> 
         <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="#">首页</a> </li> 
         <li> <a href="#">公司信息</a> </li> 
         <li class="active  avtive_bold">批次号查询</li> 
        </ul> 
        <!-- 检索  --> 
        <form action="<?php echo U('Blot/index_add');?>" method="post" name="Form" id="Form"> 
         <table border="0" cellspacing="0" cellpading="0" class="table-nav-search"> 
          <tbody>
           <tr> 
            <td> 
             <div class="nav-search"> 
               <td style="padding-right:16px;">批次号:</td>
               <td class="input-icon"> 
                <input type="text" placeholder="这里输入批次号" class="nav-search-input" id="nav-search-input" autocomplete="off" name="" value="" /> 
              </td> 
             </div> 
            </td> 
            
            <td style="padding-right:16px;">通路渠道</td>
            <td class="input-icon"> 
              <select class="chosen-select form-control" name="name" id="id" data-placeholder="请选择" style="vertical-align:top;width: 120px;"> 
                <option value="0">==请选择==</option>  
                <?php if(is_array($tonglu)): foreach($tonglu as $key=>$val): ?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; ?>
              </select> 
            </td> 

            <td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();" title="检索"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td> 
           </tr> 
          </tbody>
         </table> 
         <!-- 检索 --> 
         <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;"> 
          <thead> 
           <tr> 
            <th class="center">通路</th> 
            <th class="center">商家ID</th> 
            <th class="center">销售商名称</th> 
            <th class="center">购买人</th> 
            <th class="center">批次号</th> 
            <th class="center">总数</th> 
            <th class="center">激活数</th> 
            <th class="center">激活率</th> 
            <th class="center">冻结数</th> 
            <th class="center">出险数</th> 
            <th class="center">出险率</th> 
           </tr> 
          </thead> 
          <tbody> 
          <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr> 
            <td class="center"><?php echo ($vo["name"]); ?></td> 
            <td class="center"><?php echo ($vo["id"]); ?></td> 
            <td class="center"><?php echo ($vo["busname"]); ?></td> 
            <td class="center"><?php echo ($vo["act_username"]); ?></td> 
            <td class="center"><?php echo ($vo["act_danhao"]); ?></td> 
            <td class="center">100</td>
            <td class="center"><?php echo ($vo["count(act_enable)"]); ?></td>
            <td class="center">
                <?php echo ($vo["count(act_enable)"]); ?>.0%
            </td>  
            <td class="center"><?php echo ($vo["count(fonst)"]); ?></td>
            <td class="center"></td>
            <td class="center"></td><?php endforeach; endif; ?>
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
                <?php echo ($page); ?> 
              </div> </td> 
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
   <!-- 返回顶部 --> 
   <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i> </a> 
  </div> 
  <script src="/yjc/lby/Public/Admin/static/module_option/js/layer.js"></script> 
  <script type="text/javascript">
        window.jQuery || document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
	</script> 
  <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
	</script> 
  <script type="text/javascript">
		function tosearch(){
		
			$("#Form").submit();
		}

			
	</script>  
 </body>
</html>
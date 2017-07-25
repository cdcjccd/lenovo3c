<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
        <title>
        在线用户管理 - Powered By Enjoy3C</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
<link href="/lbyun/lbyun/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/j/lbyun/lbyun/Public/Admin/static/userlist/query_006.js" type="text/javascript"></script>
<link href="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_003.js"></script>
<script src="/lbyun/lbyun/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
<link href="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
<script src="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
    <meta name="decorator" content="default">
    </head>
    <body>   
    <ul class="nav nav-tabs">
        <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/account/form?id=">修改产品
        </a></li>
    </ul><br>
    <form id="inputForm" class="form-horizontal" action="<?php echo U('Extension/upda_save');?>" method="post" novalidate="novalidate">
            <input type="hidden"  name="product_id"       value="<?php echo ($ss['product_id']); ?>" />
        <div class="control-group">
            <label class="control-label">产品名称:</label>
            <div class="controls">
               <input id="loginMobile" name="product_name" value="<?php echo ($ss['product_name']); ?>" class="required" maxlength="23" aria-required="true" type="text">                  
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">SKU:</label>
            <div class="controls">
               <input  name="product_sku" value="<?php echo ($ss['product_sku']); ?>" class="required" maxlength="11" aria-required="true" type="text">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">产品价格:</label>
            <div class="controls">
               <input  name="product_price" value="<?php echo ($ss['product_price']); ?>" class="required" maxlength="11" aria-required="true" type="text">
            </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">备注:</label>
           <div class="controls">

             <textarea name="product_describe"  cols="40" rows="3" class="required" > 
                 <?php echo ($ss['product_describe']); ?>  
               </textarea>                 
            </div>
        </div>
        <div class="form-actions">
          <input  class="btn btn-primary" value="提交" onclick="return search();" type="submit">
           <a href="<?php echo U('Extension/index');?>"><input id="btnSubmit" class="btn btn-primary" value="返回" onclick="return search();" type="button"></a>
        </div>
       </form>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
        <title>
        在线用户管理 - Powered By Enjoy3C</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
<script src="/yjc/lby/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
<script src="/yjc/lby/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
<script src="/yjc/lby/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
<script src="/yjc/lby/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
<link href="/yjc/lby/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
<script src="/yjc/lby/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
<script src="/yjc/lby/Public/Admin/static/userlist/j/yjc/lby/Public/Admin/static/userlist/query_006.js" type="text/javascript"></script>
<link href="/yjc/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
<script src="/yjc/lby/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
<script src="/yjc/lby/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">
<script src="/yjc/lby/Public/Admin/static/userlist/jquery_003.js"></script>
<script src="/yjc/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
<link href="/yjc/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
<script src="/yjc/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
           
    <meta name="decorator" content="default">
    </head>
    <body>
    <ul class="nav nav-tabs">
        <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/account/form?id=">批量激活订单
        </a></li>
    </ul><br>

    <form id="inputForm" class="form-horizontal" enctype="multipart/form-data"  action="<?php echo U('Batch/impUser');?>" method="post" novalidate="novalidate">
        <input id="id" name="id" value="" type="hidden">
        
<script type="text/javascript">top.$.jBox.closeTip();</script>
          
 <!-- 分类循坏 -->
        <div class="control-group">
            <label class="control-label">品牌类型:</label>
            <div class="controls">
                <select id="province" name="active_bid" onchange="findCity(this)">
                    <option value="0" selected="selected">==请选择==</option>
                   <?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_name']); ?>"><?php echo ($val['brand_name']); ?></option>
                     <?php if(is_array($val['child'])): foreach($val['child'] as $key=>$vo): ?><option value="<?php echo ($vo['brand_name']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($vo['brand_name']); ?></option><?php endforeach; endif; endforeach; endif; ?> 
                </select>
            </div>
        </div>
<!-- 
          <div class="control-group">
            <label class="control-label">选择型号:</label>
            <div class="controls">
                   <select id="list" name="action_mid" onchange="findCity(this)">
                    <option value="0">==请选择==</option>
                     <?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo['product_id']); ?>"><?php echo ($vo['product_name']); ?></option><?php endforeach; endif; ?> 
                </select>    
            </div>
        </div> -->
         
        <div class="control-group">
            <label class="control-label">导入数量:</label>
            <div class="controls">
               <input id="loginMobile" name="action_count" class="required" placeholder="请输入50-1000的整数" maxlength="11" aria-required="true" type="text">            
            </div>
        </div>

     <!--    <div class="control-group">
            <label class="control-label">运营商订单:</label>
            <div class="controls">
               <input id="loginMobile" name="order_id" value="1" class="required" maxlength="11" aria-required="true" type="radio"> 是
                 <input id="loginMobile" name="order_id" value="0" class="required" maxlength="11" aria-required="true" type="radio">   否              
            </div>
        </div> -->
        
        <div class="control-group">
            <label class="control-label">选择导入文件:</label>
            <div class="controls">

              <input name="action_file" id="inputfile" class="required" accept=".xls,application/vnd.ms-excel" aria-required="true" type="file"> 
				<a href="<?php echo U('Batch/expUser');?>"><button class="btn btn-info btn-mini" data-loading-text="loading..." id="templetId" type="button">获得模板</button></a>
            </div>
        <div class="control-group">
			<fieldset>
				<legend>导入须知</legend>
				<div class="span8 offset1">
					<li>1、导入数据之前点击下载相应模版。</li>
					<li>2、依据模版填写信息。</li>
					<li>3、上传excel文件中单元格格式必须为文本（包括时间格式）。</li>
					<li>4、上传文件中间不能出现全为空白列的行，如果出现按数据结束处理。</li>
					<li>5、上传数据要求唯一，与数据库已有码也不能冲突。</li>
					<li>6、上传的品牌型号必须是同一个品牌型号。</li>
					<li>7、<font color="red">请导入的数据在50条到1000条之间</font></li>
				</div>
			</fieldset>
        <div class="form-actions"> 
          <input id="btnSubmit" class="btn btn-primary" value="提交" onclick="return search();" type="submit">
          <a href="<?php echo U();?>"><input id="btnSubmit" class="btn btn-primary" value="返回" onclick="return search();" type="button"></a>
    </form>
</body>
</html>
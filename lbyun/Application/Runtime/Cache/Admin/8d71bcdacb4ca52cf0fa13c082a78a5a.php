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
<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
<script src="/yjc/lby/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="WdatePicker.css" rel="stylesheet" type="text/css">
<script src="/yjc/lby/Public/Admin/static/userlist/jquery_003.js"></script>
<script src="/yjc/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
<link href="/yjc/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
<script src="/yjc/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>


<!--  需要添加百度统计分析-->
        
    
    <meta name="decorator" content="default">
    <script type="text/javascript">
    function findCity(me){
        $.getJSON("/lenjoy/admin/sys/area/getAreas",{"parentId":me.value}, function(areas){
            $("#city").empty().append("<option value=''>----请选择----</option>");
            $.each(areas, function(i,item){
                $("#city").append("<option value='"+item[0]+"'>"+item[1]+"</option>");
             });
        }); 
    }
       
    </script>

    </head>
    <body>
        
    <ul class="nav nav-tabs">
        <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/account/form?id=">SKU模板
        </a></li>
    </ul><br>

    <form id="inputForm" class="form-horizontal" enctype="multipart/form-data"  action="<?php echo U('Lead/impUser');?>" method="POST">
        
 <!-- 分类循坏 -->
        <div class="control-group">
            <label class="control-label">品牌类型:</label>
            <div class="controls">
              <select  name="parent_id">
                    <option value="0">==请选择==</option>
            <?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_id']); ?>"><?php echo str_repeat("&nbsp;",4); echo ($val['brand_name']); ?></option><?php endforeach; endif; ?> 
             </select>
            </div>
        </div>


        <div class="control-group">
            <label class="control-label">产品类型:</label>
            <div class="controls">
                <select id="province" name="product_id">
                    <option value="0">==请选择==</option>
                     <?php if(is_array($product)): foreach($product as $key=>$vo): ?><option value="<?php echo ($vo['product_id']); ?>"><?php echo ($vo['product_name']); ?></option><?php endforeach; endif; ?> 
                </select>
            </div>
        </div>
        
   
      <div class="control-group">
            <label class="control-label">选择导入文件:</label>
            <div class="controls">
              <input id="skuFile" name="hou_file" class="required" accept=".xls,application/vnd.ms-excel" aria-required="true" type="file">
            <a href="<?php echo U('Nva/expUser');?>"> <button id="templetId" class="btn btn-info" data-loading-text="loading..." type="button">获得模板</button></a>
              <input type="hidden" name="table" value="tablename"/> 
      <!--   <td style="padding-right:30px;"><input  class="btn btn-primary" value="获得模板"  type="button"></td>              --> 
            </div>
        </div>

      <div class="control-group">
      <label class="control-label">导入说明:</label>
      <div class="span10">
        <lu>1、请核对您的xls文件是不是在Sheet1</lu><br>
        <lu>2、请按模板填写对应的信息</lu><br>
        <lu>3、导入信息时，请确保导入的为上边选择的唯一对应产品，不支持多种产品同时导入的情况</lu>
      </div>
    </div>
         
         <div class="control-group">
            <label class="control-label">备注:</label>
            <div class="controls">
                 <textarea name="" id="" cols="100" rows="3"></textarea>
            </div>
        </div>
         
        <div class="form-actions">
           
          <input id="btnSubmit" class="btn btn-primary" value="提交"  type="submit">
       
        </div>
    </form>

    
</body>
</html>
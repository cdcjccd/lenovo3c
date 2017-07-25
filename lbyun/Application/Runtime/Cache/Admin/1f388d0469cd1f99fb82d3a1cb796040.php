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
        <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/account/form?id=">订单添加
        </a></li>
    </ul><br>

    <form id="inputForm" class="form-horizontal" action="<?php echo U('Market/market_add');?>" method="post" novalidate="novalidate">
        <input id="id" name="id" value="" type="hidden">
        
<script type="text/javascript">top.$.jBox.closeTip();</script>


         <div class="control-group">
            <label class="control-label">产品类型:</label>
            <div class="controls">
                <select id="province" name="brand_name" onchange="findCity(this)">
                    <option value="0">==请选择==</option>
                      <?php if(is_array($brand)): foreach($brand as $key=>$vl): ?><option value="<?php echo ($vl['brand_name']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($vl['brand_name']); ?></option>
                        <?php if(is_array($vl['child'])): foreach($vl['child'] as $key=>$val): ?><option value="<?php echo ($val['brand_name']); ?>"><?php echo str_repeat("&nbsp;",6); echo ($val['brand_name']); ?></option><?php endforeach; endif; endforeach; endif; ?>
                </select>
            </div>
        </div>
 <!-- 分类循坏 -->
        <div class="control-group">
            <label class="control-label">产品类型:</label>
            <div class="controls">
                <select id="province" name="product_types" onchange="findCity(this)">
                    <option value="0">==请选择==</option>
                      <?php if(is_array($nip)): foreach($nip as $key=>$vo): ?><option value="<?php echo ($vo['product_type']); ?>"><?php echo ($vo['product_type']); ?></option><?php endforeach; endif; ?>
                </select>
            </div>
        </div>
         <div class="control-group">
            <label class="control-label">产品名称:</label>
            <div class="controls">
                <select id="province" name="product_name" onchange="findCity(this)">
                  <option value="0">==请选择==</option>
                  <?php if(is_array($vip)): foreach($vip as $key=>$val): ?><option value="<?php echo ($val['product_name']); ?>"><?php echo ($val['product_name']); ?></option><?php endforeach; endif; ?>
                </select>         
            </div>
        </div>

          <div class="control-group">
            <label class="control-label">卡类型:</label>
            <div class="controls">
               <input type="radio" name="order_card_type" value="1">实体卡
               <input type="radio" name="order_card_type" value="0">虚体卡
            </div>
        </div>

     

        <div class="control-group">
            <label class="control-label">购买方式:</label>
            <div class="controls">
               <input type="radio" name="order_buy" value="1">激活码购买
               <input type="radio" name="order_buy" value="0">货到付款
            </div>
        </div>
   

        <div class="control-group">
            <label class="control-label">手机号码:</label>
            <div class="controls">
               <input id="loginMobile" name="order_phone" class="required" maxlength="11" aria-required="true" type="text">                  
            </div>
        </div>

         <div class="control-group">
            <label class="control-label">购买数量:</label>
            <div class="controls">
               <input id="loginMobile" name="order_count" class="required" maxlength="11" aria-required="true" type="text">                  
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">预付款:</label>
            <div class="controls">
               <input id="loginMobile" name="order_advance" class="required" maxlength="11" aria-required="true" type="text">                  
            </div>
        </div>
           
        <div class="control-group">
            <label class="control-label">收取状态:</label>
            <div class="controls">
               <input id="loginMobile" name="order_state" value="0" class="required" maxlength="11" aria-required="true" type="radio">已发货
                 <input id="loginMobile" name="order_state" value="1" class="required" maxlength="11" aria-required="true" type="radio">   发货中  
                 <input id="loginMobile" name="order_state" value="2" class="required" maxlength="11" aria-required="true" type="radio">已收货          
            </div>
        </div>


        <div class="form-actions">
          <input id="btnSubmit" class="btn btn-primary" value="提交" onclick="return search();" type="submit">
          <a href="<?php echo U('Market/index');?>"><input id="btnSubmit" class="btn btn-primary" value="返回" onclick="return search();" type="button"></a>
       </div>

</form>
</body>
</html>
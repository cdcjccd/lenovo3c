<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;">
<head>
    <title>
        即将审核的订单 - Powered By Enjoy3C</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="author" content="http://ljz0721cx.iteye.com/" />
    <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10" />
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet" />
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_004.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
    <script src="/yjc/lby/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css" />
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_003.js"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />
    <script src="/yjc/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

</head>
<body>
<div>
    <table class="table table-bordered  zdy">
        <tbody>
        <tr>
            <th colspan="4" style="color:#0088cc">订单信息</th>
        </tr>
        <tr>
            <th> 订单号:</th>
            <td><?php echo ($king["audit_order"]); ?></td>
            <th>订单类型:</th>
            <td></td>
        </tr>
        <tr>
            <th>购买产品:</th>
            <td><?php echo ($king["product_name"]); ?></td>
            <th>购买时间:</th>
            <td><?php echo ($king["audit_time"]); ?></td>
        </tr>
        <tr>
            <th>手机号:</th>
            <td>17701319068</td>
            <th> 购买类目:</th>
            <td> </td>
        </tr>
        <tr>
            <th colspan="4" style="color:#0088cc">设备信息</th>
        </tr>
        <tr>
            <th>购买品牌:</th>
            <td><?php echo ($king["brand_name"]); ?></td>
            <th>购买型号:</th>
            <td><?php echo ($king["model_name"]); ?></td>
        </tr>
        <tr>
            <th>S/N号:</th>
            <td colspan="3"></td>
        </tr>
        <tr>
            <th colspan="4" style="color:#0088cc">激活门店</th>
        </tr>
        <tr>
            <th>激活人:</th>
            <td></td>
            <th>激活门店:</th>
            <td><?php echo ($king["busname"]); ?></td>
        </tr>
        <tr>
            <th>激活人电话:</th>
            <td></td>
            <th>激活人所在通路:</th>
            <td><?php echo ($king["name"]); ?></td>
        </tr>
        </tbody>
    </table>
    <table id="contentTable" class="table table-striped table-bordered table-condensed">
        <thead>
        <tr>
            <th>提交时间</th>
            <th>审核时间</th>
            <th>审核结果</th>
            <th>审核描述</th>
            <th>审核图片</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div>
        <img id="mlen_image" alt="" />
    </div>
    <script type="text/javascript">
        $(function(){
            $(".green_monster").toggle(function(){
                $("#mlen_image").parent().show();
                $("#mlen_image").attr("src",$(this).data('url'));
            },function(){
                $("#mlen_image").removeAttr("src").parent().hide();
            });
        });
    </script>
</div>
<div class="form-actions">
    
  <input id="btnCancel" class="btn" value="返回该订单列表" onclick="history.go(-1);return false;" type="button"/>

</div>
</body>
</html>
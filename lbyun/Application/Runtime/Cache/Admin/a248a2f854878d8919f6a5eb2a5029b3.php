<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;">
<head>
    <title>
        批改已激活订单 - Powered By Enjoy3C</title>
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
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_006.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
    <script src="/yjc/lby/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
    <script src="/yjc/lby/Public/Admin/static/userlist/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css" />
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_003.js"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />
    <script src="/yjc/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
    <!--  需要添加百度统计分析-->
    <meta name="decorator" content="default" />
    
</head>
<body>
<ul class="nav nav-tabs">
    <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/userActivateOrder/form?id=2078197">批改已激活订单</a></li>
</ul>
<br/>

    <script type="text/javascript">top.$.jBox.closeTip();</script>
    <div>
  <form id="inputForm" class="form-horizontal" action="<?php echo U('Activated/activa_modified');?>" method="post" novalidate="novalidate">
       <table class="table table-bordered  zdy">
            <tbody>
            <tr>
                <th colspan="4" style="color: #0088cc">订单信息</th>
            </tr>
            <tr>
                <th>订单号:</th>
                <td><?php echo ($list["audit_order"]); ?></td>
                <th>产品:</th>
                <td><?php echo ($list["product_name"]); ?></td>
            </tr>
            <tr>
                <th>产品类别:</th>
                <td><?php echo ($list["product_type"]); ?></td>
                <th>服务协议:</th>
                <td><a href="<?php echo U('Lnstru/list_clause');?>" target="_blank">服务协议</a></td>
            </tr>
            <tr>
                <th>创建时间:</th>
                <td><?php echo ($list["audit_time"]); ?></td>
                <th>保期:</th>
                <td>
                    <?php if($list['product_life'] == '0'): echo "<font color='blue'>"."三月"."</font>";?>
                    <?php elseif($list['product_life'] == '1'): ?>
                    <?php  echo "<font color='blue'>"."一年"."</font>";?>
                    <?php elseif($list['product_life'] == '2'): ?>
                    <?php  echo "<font color='blue'>"."三年"."</font>"; endif; ?>
                </td>
            </tr>
            <tr>
                <th>生效时间:</th>
                <td><strong><?php echo ($list["audit_take_time"]); ?></strong></td>
                <th>结束时间:</th>
                <td><strong><?php echo ($list["audit_out_time"]); ?></strong></td>
            </tr>
            <tr>
                <th>订单状态:</th>
                <td> <span class="label label-success"> </span> </td>
                <th>订单类型:</th>
                <td>
                    <?php if($list['audit_order_source'] == '0'): echo "<font color='green'>"."单个"."</font>";?>
                        <?php elseif($list['audit_order_source'] == '1'): ?>
                        <?php  echo "<font color='green'>"."批量"."</font>";?>
                        <?php elseif($list['audit_order_source'] == '2'): ?>
                        <?php  echo "<font color='green'>"."绑定"."</font>"; endif; ?>
                </td>
            </tr>
         
            <tr>
                <th>申请修改类型：</th>
                <td colspan="3">
                    <select name="apply_type">
                        <option value="0">==请选择==</option>
                        <option value="1">退保</option>
                        <option value="2">换机</option>
                        <option value="3">批改</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4">申请原因:<textarea rows="4" cols="100" name="apply_test"></textarea></td>
            </tr>
            <!-- 隐藏ID -->
            <input type="hidden" name="audit_id" value="<?php echo ($list['audit_id']); ?>">
            </tbody>
        </table> 
    </div>
    <div class="form-actions">
         <input class="btn btn-primary" value="提交" type="submit" />
         <input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1);return false;" type="button" />
    </div>
</form>
</body>
</html>
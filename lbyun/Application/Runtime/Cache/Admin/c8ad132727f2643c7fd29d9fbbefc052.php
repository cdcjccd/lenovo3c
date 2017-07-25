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
    <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/account/form?id=">天猫合同单
    </a></li>
</ul><br>

<form id="inputForm" class="form-horizontal" action="<?php echo U('Tian/tian_add');?>" method="post" novalidate="novalidate">
    <input id="id" name="id" value="" type="hidden">
    <script type="text/javascript">top.$.jBox.closeTip();</script>

    <div class="control-group">
        <label class="control-label">商家名称:</label>
        <div class="controls">
            <select id="province" name="tian_busname" >
                <option value="0">==请选择==</option>
                <?php if(is_array($hing)): foreach($hing as $key=>$lop): ?><option value="<?php echo ($lop['id']); ?>"><?php echo str_repeat("&nbsp;",6); echo ($lop['busname']); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">品牌类型:</label>
        <div class="controls">
            <select id="province" name="brand_name" onchange="findCity(this)">
                <option value="0">==请选择==</option>
                <?php if(is_array($brand)): foreach($brand as $key=>$vl): ?><option value="<?php echo ($vl['brand_name']); ?>"><?php echo str_repeat("&nbsp;",2); echo ($vl['brand_name']); ?></option>
                    <?php if(is_array($vl['child'])): foreach($vl['child'] as $key=>$val): ?><option value="<?php echo ($val['brand_name']); ?>"><?php echo str_repeat("&nbsp;",6); echo ($val['brand_name']); ?></option><?php endforeach; endif; endforeach; endif; ?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">型号名称:</label>
        <div class="controls">
            <select id="province" name="model_name" onchange="findCity(this)">
                <option value="0">==请选择==</option>
                <?php if(is_array($good)): foreach($good as $key=>$ki): ?><option value="<?php echo ($ki['model_name']); ?>"><?php echo str_repeat("&nbsp;",6); echo ($ki['model_name']); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>

    <!-- 分类循坏 -->
    <div class="control-group">
        <label class="control-label">产品类型:</label>
        <div class="controls">
            <select id="province" name="product_types" onchange="findCity(this)">
                <option value="0">==请选择==</option>
                <?php if(is_array($nip)): foreach($nip as $key=>$vo): ?><option value="<?php echo ($vo['product_id']); ?>"><?php echo str_repeat("&nbsp;",6); echo ($vo['product_type']); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">产品名称:</label>
        <div class="controls">
            <select id="province" name="product_names" onchange="findCity(this)">
                <option value="0">==请选择==</option>
                <?php if(is_array($vip)): foreach($vip as $key=>$val): ?><option value="<?php echo ($val['product_id']); ?>"><?php echo ($val['product_name']); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">履约方式:</label>
        <div class="controls">
            <input type="radio" name="tian_way" value="0">未履约
            <input type="radio" name="tian_way" value="1">已履约
        </div>
    </div>

    <div class="form-actions">
        <input id="btnSubmit" class="btn btn-primary" value="提交" onclick="return search();" type="submit">
        <a href="<?php echo U('Tian/tian_list');?>"><input id="btnSubmit" class="btn btn-primary" value="返回" onclick="return search();" type="button"></a>
    </div>
</form>
</body>
</html>
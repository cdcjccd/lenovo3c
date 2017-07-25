<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
    <title>
        角色管理 - Powered By Enjoy3C</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="author" content="http://ljz0721cx.iteye.com/">
    <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
    <script src="/lby/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
    <script src="/lby/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
    <script src="/lby/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
    <script src="/lby/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
    <link href="/lby/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
    <script src="/lby/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
    <script src="/lby/Public/Admin/static/userlist/jquery_006.js" type="text/javascript"></script>
    <link href="/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="/lby/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
    <!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
    <!-- <script src="/lby/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="/lby/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css"> -->
    <script src="/lby/Public/Admin/static/userlist/jquery_003.js"></script>
    <script src="/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
    <link href="/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
    <script src="/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>


    <!--  需要添加百度统计分析-->


    <meta name="decorator" content="default">
    <!--<link href="form_data/zTreeStyle.css" rel="stylesheet" type="text/css">-->
    <!--<script src="form_data/jquery_002.js" type="text/javascript"></script>-->
    <!--<script src="form_data/jquery.js" type="text/javascript"></script>-->


</head>
<body>

<ul class="nav nav-tabs">
    <li><a href="<?php echo U('Admin/Role/roleList');?>">角色列表</a></li>
    <li class="active"><a href="#">角色
        查看</a></li>
</ul>
<br>
<form id="inputForm" class="form-horizontal" action="" method="post" novalidate="novalidate">
    <input id="id" name="id" value="25" type="hidden">



    <!--<script type="text/javascript">top.$.jBox.closeTip();</script>-->



    <div class="control-group">
        <label class="control-label">归属机构:</label>
        <div class="controls">





            <div class="input-append">
                <input id="officeId" name="office.id" class="required" value="2" aria-required="true" type="hidden">
                <input id="officeName" name="office.name" readonly="readonly" value="联想大中华区" maxlength="50" class="required" style="" aria-required="true" type="text"><a id="officeButton" href="javascript:" class="btn " style="_padding-top:6px;">&nbsp;<i class="icon-search"></i>&nbsp;</a>&nbsp;&nbsp;
            </div>



        </div>
    </div>
    <div class="control-group">
        <label class="control-label">角色名称:</label>
        <div class="controls">
            <input id="oldName" name="oldName" value="一级核赔人员" type="hidden">
            <input id="name" name="name" class="required valid" value="一级核赔人员" maxlength="50" aria-required="true" aria-invalid="false" type="text">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">英文名称:</label>
        <div class="controls">
            <input id="enName" name="enName" class="required" value="nuclear1Person" maxlength="50" aria-required="true" type="text">
            <span class="help-inline">用户组ID 如sysManager</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">角色类型:</label>
        <div class="controls">
            <input id="roleType" name="roleType" class="required" value="oa-user-role" maxlength="50" aria-required="true" type="text">
            <span class="help-inline" title="用户组类型（security-role：管理员、assignment：可进行任务分配、user：普通用户）">
					用户组类型（security-role：管理员、assignment：可进行任务分配、user：普通用户）</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">数据范围:</label>
        <div class="controls">
            <select id="dataScope" name="dataScope">
                <option value="1" selected="selected">所有数据</option><option value="2">所在公司及以下数据</option><option value="3"><所在公司数据></所在公司数据></option><option value="4">所在部门及以下数据</option><option value="5">所在部门数据</option><option value="8"> 仅本人数据</option><option value="9">按明细设置</option>
            </select>
            <span class="help-inline">特殊情况下，设置为“按明细设置”，可进行跨机构授权</span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">角色授权:</label>
       
    </div>
    <div class="form-actions">

        <input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1)" type="button">
    </div>
</form>


</body></html>
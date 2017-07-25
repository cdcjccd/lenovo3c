<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- jsp文件头和头部 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>联保云</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/bootstrap.css" />
    <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/font-awesome.css" />
    <!-- page specific plugin styles -->
    <!-- text fonts -->
    <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace-fonts.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace-part2.css" class="ace-main-stylesheet" />
    <![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace-ie.css" />
    <![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->
    <script src="/yjc/lby/Public/Admin/static/ace/js/ace-extra.js"></script>
    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries
    [if lte IE 8]> -->
    <script src="/yjc/lby/Public/Admin/static/ace/js/html5shiv.js"></script>
    <script src="/yjc/lby/Public/Admin/static/ace/js/respond.js"></script>
    <!--<![endif]-->

    <!-- 日期框 -->
    <link href="/yjc/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="/yjc/lby/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>


</head>
<body class="no-skin">
<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">公司信息</a>
                            </li>
                            <li class="active  avtive_bold"><a href="<?php echo U('Work/work_list');?>">待处理服务工单</a></li>
                            <li class="active  avtive_bold"><a href="<?php echo U('Work/over_list');?>">超时工单</a>></li>
                            <li class="active  avtive_bold">已完成服务工单</li>
                        </ul>
                        <!-- 检索  -->
                        <form action="<?php echo U('Work/finish_list');?>" method="post" name="Form" id="Form">
                            <table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
                                <tr>
                                    <td style="padding-right:10px;">工单号:</td>
                                    <td>
                                        <div class="nav-search">
                                        <span class="input-icon">
                                            <input type="text" placeholder="工单号" class="nav-search-input" id="nav-search-input" autocomplete="off" name="tian_order" value="<?php echo ($asd['tian_order']); ?>" />
                                        </span>
                                        </div>
                                    </td>
                                    <td style="padding-right:10px;">用户姓名:</td>
                                    <td>
                                        <div class="nav-search">
                                        <span class="input-icon">
                                            <input type="text" placeholder="用户姓名" class="nav-search-input" id="nav-search-input" autocomplete="off" name="tian_user" value="<?php echo ($asd['tian_user']); ?>" />
                                        </span>
                                        </div>
                                    </td>
                                    <td style="padding-right:10px;">手机号:</td>
                                    <td>
                                        <div class="nav-search">
                                        <span class="input-icon">
                                            <input type="text" placeholder="手机号" class="nav-search-input" id="nav-search-input" autocomplete="off" name="tian_phone" value="<?php echo ($asd['tian_phone']); ?>" />
                                        </span>
                                        </div>
                                    </td>
                                    <td style="padding-right:10px;">开始时间:</td>
                                    <td>
                                        <div class="nav-search">
                                        <span class="input-icon">
                                        <input type="text"  class="nav-search-input required Wdate span2" maxlength="50" onClick="WdatePicker()" name="tian_time" value="<?php echo ($asd['tian_time']); ?>">
                                        <input type="text"  class="nav-search-input required Wdate span2" maxlength="50" onClick="WdatePicker()" name="tian_come_time" value="<?php echo ($asd['tian_come_time']); ?>">
                                        </span>
                                        </div>
                                    </td>
                                    <td style="padding-right:10px;">
                                        <a class="btn btn-light btn-xs" onclick="tosearch();"  title="检索">
                                            <i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <!-- 检索  -->
                            <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">
                                <thead>
                                <tr>
                                    <th class="center" style="width:35px;">
                                        <label class="pos-rel"><input type="checkbox" class="ace" id="zcheckbox"/><span class="lbl"></span></label>
                                    </th>
                                    <th class="center">工单ID</th>
                                    <th class="center">姓名</th>
                                    <th class="center">电话</th>
                                    <th class="center">状态</th>
                                    <th class="center">申请时间</th>
                                    <th class="center">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- 开始循环 -->
                                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                        <td class='center'>
                                            <label class="pos-rel"><input type='checkbox' name='ids' value="<?php echo ($vo["companyinfo_id"]); ?>" class="ace" /><span class="lbl"></span></label>
                                        </td>
                                        <td class='center'><?php echo ($vo["tian_id"]); ?></td>
                                        <td class='center'><?php echo ($vo["tian_user"]); ?></td>
                                        <td class='center'><?php echo ($vo["tian_phone"]); ?></td>
                                        <td class='center'>
                                            <?php if($vo['tian_way'] == '0'): echo "<font color='red'>"."未履约"."</font>";?>
                                                <?php elseif($vo['tian_way'] == '1'): ?>
                                                <?php  echo "<font color='green'>"."已履约"."</font>"; endif; ?>
                                        </td>
                                        <td class='center'><?php echo ($vo["tian_time"]); ?></td>
                                        <td class='center'>
                                        <a href="<?php echo U('Work/tarsh');?>?t_id=<?php echo ($vo['tian_id']); ?>">查看详细</a>
                                        </td>
                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a style="cursor:pointer;" onclick="edit('<?php echo ($vo["companyinfo_id"]); ?>');" class="tooltip-success" data-rel="tooltip" title="修改">
                                                               <span class="green">
                                                                 <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                               </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                                <!-- 循环结束 -->
                                </tbody>
                            </table>
                            <div class="page-header position-relative">
                                <table style="width:100%;">
                                    <tr>
                                        <td style="vertical-align:top;">
                                        </td>
                                        <td style="vertical-align:top;"><div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">
                                            <?php echo ($page); ?>
                                        </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.page-content -->
        </div>
    </div>
</div>


<!-- ace scripts -->
<script src="/yjc/lby/Public/Admin/static/ace/js/ace/ace.js"></script>
<!--layer弹出图层-->
<script type="text/javascript" src="/yjc/lby/Public/Admin/static/js/jquery.tips.js"></script>


<script type="text/javascript">
    window.jQuery || document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
    $(top.hangge());//关闭加载状态
    function tosearch(){
        $("#Form").submit();
    }


</script>

</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- 下拉框 -->
    <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/chosen.css" />
    <!-- jsp文件头和头部 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>联保云</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/bootstrap.css" />
    <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/font-awesome.css" />
    <!-- page specific plugin styles -->
    <!-- text fonts -->
    <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/ace-fonts.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

    <script src="/lbyun/lbyun/Public/Admin/static/ace/js/ace-extra.js"></script>
    <script src="/lbyun/lbyun/Public/Admin/static/ace/js/html5shiv.js"></script>
    <script src="/lbyun/lbyun/Public/Admin/static/ace/js/respond.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="/lbyun/lbyun/Public/Admin/dati/js/jquery-1.11.0.min.js"></script>
    <!--<link type="text/css" rel="stylesheet" href="/lbyun/lbyun/Public/Admin/times/css/admin.css" />-->
    <link rel="stylesheet" type="text/css" href="/lbyun/lbyun/Public/Admin/dati/css/jquery-ui.css" />
    <script type="text/javascript" src="/lbyun/lbyun/Public/Admin/dati/js/jquery-ui-1.10.4.custom.min.js"></script>
    <script type="text/javascript" src="/lbyun/lbyun/Public/Admin/dati/js/jquery.ui.datepicker-zh-CN.js"></script>
    <script type="text/javascript" src="/lbyun/lbyun/Public/Admin/dati/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="/lbyun/lbyun/Public/Admin/dati/js/jquery-ui-timepicker-zh-CN.js"></script>
    <style type="text/css">
        .ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
        .ui-timepicker-div dl { text-align: left; }
        .ui-timepicker-div dl dt { float: left; clear:left; padding: 0 0 0 5px; }
        .ui-timepicker-div dl dd { margin: 0 10px 10px 45%; }
        .ui-timepicker-div td { font-size: 90%; }
        .ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
        .ui-timepicker-rtl{ direction: rtl; }
        .ui-timepicker-rtl dl { text-align: right; padding: 0 5px 0 0; }
        .ui-timepicker-rtl dl dt{ float: right; clear: right; }
        .ui-timepicker-rtl dl dd { margin: 0 45% 10px 10px; }
    </style>


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
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">首页</a>
                            </li>

                            <li>
                                <a href="#">我公司的信息</a>
                            </li>
                            <li class="active  avtive_bold">品牌管理</li>
                        </ul>
                        <!-- 检索 -->
                        <form action="<?php echo U('Tian/tian_list');?>" method="post" name="Form" id="Form">
                            <table border="0" cellspacing="0" cellpading="0" class="table-nav-search">
                                <tr>
                                    <td style="padding-right:16px;">用户姓名:</td>
                                    <td>
                                        <div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="这里输入关键词" class="nav-search-input" id="nav-search-input" autocomplete="off" name="tian_user" value="<?php echo ($asd['tian_user']); ?>" placeholder="这里输入关键词"/>
										</span>
                                        </div>
                                    </td>

                                    <td style="padding-right:10px;">手机号码:</td>
                                    <td>
                                        <div class="nav-search">
										<span class="input-icon">
											<input type="text" placeholder="手机号码" class="nav-search-input" id="nav-search-input" autocomplete="off" name="tian_phone" value="<?php echo ($asd['tian_phone']); ?>" />
										</span>
                                        </div>
                                    </td>

                                    <td style="padding-right:0px;">注册时间段 :</td>
                                    <td>
                                        <span class="input-icon">
                                            <input class="span10 date-picker start-date" name="tian_time" data-date-format="yyyy-mm-dd" readonly="readonly" placeholder="开始时间" value="<?php echo ($asd['tian_time']); ?>" type="text" >
                                        </span>
                                     </td>

                                    <td>
                                        <span class="input-icon">
                                            <input class="span10 date-picker start-date" name="tian_come_time" data-date-format="yyyy-mm-dd" readonly="readonly" placeholder="结束日期" value="<?php echo ($asd['tian_come_time']); ?>" type="text" />
                                        </span>
                                    </td>

                                    <td style="padding-right:30px;">
                                        <a href="<?php echo U('Tian/tian_add');?>"><input id="btnSubmit" class="btn btn-primary" value="订单生成" onclick="return search();" type="button"></a>
                                    </td>
                                    <td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();"  title="检索"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td>
                                </tr>
                            </table>
                            <script type="text/javascript">
                                $( "input[name='tian_time'],input[name='tian_come_time']" ).datetimepicker();
                            </script>
                            <!-- 检索  -->
                            <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">
                                <thead>
                                <tr>
                                    <th class="center" style="width:35px;">
                                        <label class="pos-rel">
                                            <input type="checkbox"  onclick='selectAll()' class="ace" id="zcheckbox" />
                                            <span class="lbl"></span>
                                        </label>
                                    </th>

                                    <th class="center">用户姓名</th>
                                    <th class="center">手机号</th>
                                    <th class="center">交易订单号</th>
                                    <th class="center">服务名称</th>
                                    <th class="center">购买时间</th>
                                    <th class="center">履约方式</th>
                                    <th class="center">操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                <!-- 开始循环 -->
                                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                        <td class='center'>
                                            <label class="pos-rel">
                                                <input type='checkbox' name='checkboxes[]' value="<?php echo ($vo["brand_id"]); ?>" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td>
                                        <td class='center'>
                                            <?php echo ($vo['tian_user']); ?>
                                        </td>
                                        <td class='center'><?php echo ($vo["tian_phone"]); ?></td>
                                        <td class='center'><?php echo ($vo["tian_order"]); ?></td>
                                        <td class='center'><?php echo ($vo["product_name"]); ?></td>
                                        <td class='center'><?php echo ($vo["tian_time"]); ?></td>
                                        <td class='center'>
                                            <?php if($vo['tian_way'] == '0'): echo "<font color='red'>"."未履约"."</font>";?>
                                                <?php elseif($vo['tian_way'] == '1'): ?>
                                                <?php  echo "<font color='green'>"."已履约"."</font>"; endif; ?>
                                        </td>
                                        <td class='center'>
                                            <a href="<?php echo U('Tian/tian_details');?>?t_id=<?php echo ($vo['tian_id']); ?>">查看详细
                                            </a></td>
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
                                            <script type="text/javascript">
                                            </script>
                                        </div></td>
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
    <!-- /.main-content -->

    <!-- 返回顶部 -->
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>

</div>


<script src='/lbyun/lbyun/Public/Admin/static/ace/js/jquery.js'></script>
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/lbyun/lbyun/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>

<!--layer弹出图层-->

<script src="/lbyun/lbyun/Public/Admin/static/module_option/js/layer.js"></script>
<!--layer弹出图层-->
<script type="text/javascript" src="/lbyun/lbyun/Public/Admin/static/js/jquery.tips.js"></script>
<script type="text/javascript">

    // 一键选中
    function selectAll(){
        var check=document.getElementsByName('checkboxes[]');
        for(var i=0; i<check.length;i++){

            if(check[i].checked==true){

                check[i].checked=false;

            }else{
                check[i].checked=true;
            }
        }
    }

       $(top.hangge());//关闭加载状态
    //检索
    function tosearch(){
        $("#Form").submit();
    }
    
</script>
</body>
</html>
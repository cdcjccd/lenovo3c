<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<!-- jsp文件头和头部 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>联保云</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/bootstrap.css" />
        <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/font-awesome.css" />
        <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace-fonts.css" />
        <link rel="stylesheet" href="/yjc/lby/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
        <script src="/yjc/lby/Public/Admin/static/ace/js/ace-extra.js"></script>
        <script src="/yjc/lby/Public/Admin/static/ace/js/html5shiv.js"></script>
        <script src="/yjc/lby/Public/Admin/static/ace/js/respond.js"></script>
<!--添加CSS 样式-->
        <script src="/yjc/lby/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
        <script src="/yjc/lby/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
        <script src="/yjc/lby/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
        <script src="/yjc/lby/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
        <link href="/yjc/lby/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
        <script src="/yjc/lby/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
        <script src="/yjc/lby/Public/Admin/static/userlist/j/yjc/lby/Public/Admin/static/userlist/query_006.js" type="text/javascript"></script>
        <link href="/yjc/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
        <script src="/yjc/lby/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
        <script src="/yjc/lby/Public/Admin/static/userlist/jquery_003.js"></script>
        <script src="/yjc/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
        <link href="/yjc/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
        <script src="/yjc/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
</head>
<body class="no-skin">
    <div class="main-container" id="main-container">
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
                            <li class="active  avtive_bold">审核订单列表</li>
                        </ul>                          
                        <!-- 检索  -->
                        <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">    
                            <thead>
                                <tr>
                                    <th class="center">提交时间</th>
                                    <th class="center">审核时间</th>
                                    <th class="center">审核结果</th>
                                    <th class="center">审核描述</th>
                                    <th class="center">审核图片</th>
                                </tr>
                            </thead>                  
                            <tbody>
                            <!-- 开始循环 -->   
                                        <tr>   
                                    
                                        <td class='center'><?php echo ($vo["audit_time"]); ?></td>  
                                        <td class='center'><?php echo ($vo["audit_come_time"]); ?></td>
                                         <td class='center'> 
                                            <?php if($vo['audit_decision'] == '0'): echo "<font color='green'>"."待审核"."</font>";?>
                                                <?php elseif($vo['audit_decision'] == '1'): ?>
                                                <?php  echo "<font color='red'>"."审核成功"."</font>";?>
                                                <?php elseif($vo['audit_decision'] == '2'): ?>
                                                <?php  echo "<font color='green'>"."审核待定"."</font>";?>
                                                 <?php elseif($vo['audit_decision'] == '3'): ?>
                                                <?php  echo "<font color='green'>"."拒保"."</font>"; endif; ?>
                                          </td>
                                    <td class='center'><?php echo ($vo["audit_test"]); ?></td>
                                      <td class='center'>
                                         <input type="button"  id="show"  value="图片">
                                      </td>
                                        </td>
                                    </tr>
                            <!-- 循环结束 -->
                            </tbody>
                        </table>
                     </div>
                        <form id="inputForm" class="form-horizontal"   novalidate="novalidate">

                           <div id='pic' style="display:none">
                               <img src="http://localhost/yjc/lby/<?php echo ($vo['audit_file']); ?>" style="width:900px; height:1200px">
                            </div>
                            

                            <div class="control-group">
                                    <input type="hidden" name="audit_life" value="<?php echo ($vo["product"]["life"]); ?>">
                                <label class="control-label">购买人姓名:</label>
                                <div class="controls">
                                    <input id="loginMobile" name="audit_name" value="<?php echo ($vo['audit_name']); ?>"  type="text">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">唯一识别码:</label>
                                <div class="controls">
                                    <input type="text" name="audit_serial_number" value="<?php echo ($vo['audit_serial_number']); ?>">手机设备填写IMEI号码,用电脑px设备填写SN
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">证件类型:</label>
                                <div class="controls">
                                    <select name="audit_card_name" >
                                        <option value="0">==请选择==</option>
                                        <option value="1"><?php echo str_repeat("&nbsp;",3); ?>身份证</option>
                                        <option value="2"><?php echo str_repeat("&nbsp;",3); ?>军官证</option>
                                        <option value="3"><?php echo str_repeat("&nbsp;",3); ?>驾驶证</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">证件号码:</label>
                                <div class="controls">
                                    <input type="text" name="audit_ids" value="<?php echo ($vo['audit_ids']); ?>">
                                </div>
                            </div>
                            <!-- 分类循坏 -->
                            <div class="control-group">
                                <label class="control-label">购买品牌:</label>
                                <div class="controls">
                                    <select id="province" name="audit_brand" onchange="findCity(this)">
                                        <option value="0" selected="selected">==请选择==</option>
                                        <?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_id']); ?>"><?php echo ($val['brand_name']); ?></option>
                                            <?php if(is_array($val['child'])): foreach($val['child'] as $key=>$vol): ?><option value="<?php echo ($vol['brand_id']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($vol['brand_name']); ?></option><?php endforeach; endif; endforeach; endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">购买型号:</label>
                                <div class="controls">
                                    <select name="audit_model">
                                        <option value="0">==请选择==</option>
                                        <?php if(is_array($like)): foreach($like as $key=>$vog): ?><option value="<?php echo ($vog['brand_id']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($vog['model_name']); ?></option><?php endforeach; endif; ?>
                                    </select>
                                </div>
                            </div>
                        </form>
             <form id="inputForm" class="form-horizontal" action="<?php echo U('Audit/order_upde');?>" method="post" enctype="multipart/form-data" novalidate="novalidate">
                           <div class="control-group">
                                <label class="control-label">是否特赦通过:</label>
                                <div class="controls">
                                    <input type="text" name="audit_pardon"  placeholder="如果为特赦通过:请说明">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">核保内部记录:</label>
                                <div class="controls">
                                    <input type="text" name="audit_test"  placeholder="请填写核保内部记录!">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">是否通过审核:</label>
                                <div class="controls">
                                    <input type="radio" name="audit_decision" value="0">否
                                    <input type="radio" name="audit_decision" value="1">是
                                    <input type="radio" name="audit_decision" value="2">审核待定
                                    <input type="radio" name="audit_decision" value="3">拒保
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                 <font color="red"> 注意:如果没有通过审核原信息将不会变更</font>
                                </div>
                            </div>
                            <div class="form-actions">

                            <input id="btnSubmit" class="btn btn-primary" value="审核订单" onclick="return search();" type="submit">
                            <input type="hidden" name="audit_id" value="<?php echo ($vo['audit_id']); ?>">

                            <a href="<?php echo U('Audit/authstr_list');?>"><input id="btnSubmit" class="btn btn-primary" value="返回" onclick="return search();" type="button">
                            </a>
                            </div>
                 </form>
            </div>
        </div>
        <!-- 返回顶部 -->
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div>

<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.js'></script>
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/yjc/lby/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
   //检索
   function tosearch(){
       $("#Form").submit();
   }
   $('#show').click(function(){$('#pic').toggle()})
</script>
</body>
</html>
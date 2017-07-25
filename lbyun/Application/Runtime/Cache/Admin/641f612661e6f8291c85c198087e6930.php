<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;">
<head>
    <title>
        详情页 - Powered By lbyun</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="author" content="http://ljz0721cx.iteye.com/" />
    <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10" />
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
    <link href="/lbyun/lbyun/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet" />
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_006.js" type="text/javascript"></script>
    <link href="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script>
    <link href="/lbyun/lbyun/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css" />
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_003.js"></script>
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
    <link href="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />
    <script src="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
</head>
<body>
<ul class="nav nav-tabs">
    <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/userActivateOrder/form?id=2024534">订单详情查看</a></li>
</ul>
<br />
<form id="inputForm" class="form-horizontal" action="/lenjoy/admin/business/userActivateOrder/save" method="post">
    <input id="id" name="id" value="2024534" type="hidden" />
    <script type="text/javascript">top.$.jBox.closeTip();</script>
    <div>
        <table class="table table-bordered  zdy">
            <tbody>
            <tr>
                <th colspan="4" style="color: #0088cc">订单信息</th>
            </tr>
            <tr>
                <th>订单号:</th>
                <td><?php echo ($list['audit_order']); ?></td>
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
                <th> 
                <!-- 时间的判断  -->
                  
                </th>
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
                <th>出险时间:</th>
                <td><?php echo ($list["audit_out_time"]); ?></td>
                <th>第三方订单号</th>
                <td></td>
            </tr>
            <tr>
                <th>购买方式:</th>
                <td>
                    <?php if($list['audit_way'] == '0'): echo "<font color='green'>"."实体卡"."</font>";?>
                        <?php elseif($list['audit_way'] == '1'): ?>
                        <?php  echo "<font color='green'>"."虚体卡"."</font>"; endif; ?>
                </td>
                <th>媒体价格:</th>
                <td><?php echo ($list["product_price"]); ?>元</td>
            </tr>
            <tr>
                <th>服务sku:</th>
                <td><?php echo ($list["product_sku"]); ?></td>
            </tr>
            <tr>
                <th colspan="4" style="color: #0088cc">用户信息</th>
            </tr>
            <tr>
                <th>购买人姓名:</th>
                <td><?php echo ($list["audit_name"]); ?></td>
                <th>手机号:</th>
                <td><?php echo ($list["audit_phone"]); ?></td>
            </tr>
            <tr>
                <th>证件类型:</th>
                <td>
                    <?php if($list['audit_come_name'] == '0'): echo "<font color='green'>"."身份证"."</font>";?>
                        <?php elseif($list['audit_order_source'] == '1'): ?>
                        <?php  echo "<font color='green'>"."军官证"."</font>";?>
                        <?php elseif($list['audit_order_source'] == '2'): ?>
                        <?php  echo "<font color='green'>"."驾驶证"."</font>"; endif; ?>
                </td>
                <th>证件号</th>
                <td><?php echo ($list["audit_ids"]); ?></td>
            </tr>
            <tr>
                <th colspan="4" style="color: #0088cc">设备信息</th>
            </tr>
            <tr>
                <th>销售人员:</th>
                <td><?php echo ($list["busname"]); ?></td>
                <th>S/N号:</th>
                <td><?php echo ($list["audit_serial_number"]); ?></td>
            </tr>
            <tr>
                <th>品牌:</th>
                <td><?php echo ($list["brand_name"]); ?></td>
                <th>型号:</th>
                <td><?php echo ($list["model_name"]); ?></td>
            </tr>
            <tr>
                <th>主商品sku:</th>
                <td><?php echo ($list["product_sku"]); ?></td>
                <th>主商品名:</th>
                <td><?php echo ($list["brand_describe"]); ?></td>
            </tr>
            <tr>
                <th colspan="4" style="color: #0088cc">销售信息</th>
            </tr>
            <tr>
                <th>商户ID:</th>
                <td><?php echo ($list["id"]); ?></td>
                <th>销售商机构名称:</th>
                <td><?php echo ($list["busname"]); ?></td>
            </tr>
          
            <tr>
                <th>负责人姓名:</th>
                <td></td>
                <th>负责人电话:</th>
                <td></td>
            </tr>
            <tr>
                <th>销售商地址:</th>
                <td><?php echo ($list["area"]); ?></td>
                <th>销售商通路:</th>
                <td><?php echo ($list["name"]); ?></td>
            </tr>
            <tr>
                <th colspan="4" style="color: #0088cc">激活信息</th>
            </tr>
            <tr>
                <th>激活人:</th>
                <td></td>
                <th>激活人电话:</th>
                <td></td>
            </tr>
            <tr>
                <th>激活商家:</th>
                <td></td>
                <th>激活商家负责人:</th>
                <td></td>
            </tr>
            <tr>
                <th>激活商家地址:</th>
                <td></td>
                <th>激活机构电话:</th>
                <td></td>
            </tr>
            <tr>
                <th>激活门店ID:</th>
                <td></td>
                <th>激活门店名称:</th>
                <td></td>
            </tr>
           <!--  <tr>
                <th>激活码:</th>
                <td colspan="3"></td>
            </tr> -->
            <tr>
                <th colspan="4" style="color: #0088cc">审核信息</th>
            </tr>
            <tr>
                <th>审核状态:</th>
                <td>
                     <?php if($list['audit_decision'] == '0'): echo "待审核";?>
                     <?php elseif($list['audit_decision'] == '1'): ?>
                       <?php  echo "审核完成";?>
                     <?php elseif($list['audit_decision'] == '2'): ?>
                       <?php  echo "审核待定";?>
                     <?php elseif($list['audit_decision'] == '3'): ?>
                       <?php  echo "拒保"; endif; ?>
                </td>
                <th>审核结果:</th>
                <td> 
                  <?php if($list['audit_decision'] == '0'): echo "待审核";?>
                     <?php elseif($list['audit_decision'] == '1'): ?>
                       <?php  echo "审核通过";?>
                     <?php elseif($list['audit_decision'] == '2'): ?>
                       <?php  echo "审核待定";?>
                     <?php elseif($list['audit_decision'] == '3'): ?>
                       <?php  echo "拒保"; endif; ?>
                 </td>
            </tr>
            </tbody>
        </table>
        <table id="contentTable" class="table table-striped table-bordered table-condensed">
            <thead>
            <tr>
                <th>审核人ID</th>
                <th>审核人姓名</th>
                <th>审核时间</th>
                <th>审核结果</th>
                <th>审核描述</th>
                <th>审核图片</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td><?php echo ($list["check_user"]); ?></td>
                <td><?php echo ($list["check_name"]); ?></td>
                <td><?php echo ($list["audit_come_time"]); ?></td>
                <td>
                    <?php if($list['audit_decision'] == '0'): echo "待审核";?>
                    <?php elseif($list['audit_decision'] == '1'): ?>
                       <?php  echo "审核通过";?>
                    <?php elseif($list['audit_decision'] == '2'): ?>
                       <?php  echo "审核待定";?>
                    <?php elseif($list['audit_decision'] == '3'): ?>
                       <?php  echo "拒保"; endif; ?>
                </td>
                <!-- <input type="button" id='show' value="查看图片"> -->
                <td><?php echo ($list["audit_test"]); ?></td>
                <td> 
                    <a data-url="http://localhost/yjc/lby/<?php echo ($list['audit_file']); ?>" class="green_monster btn btn-mini">图片1</a> 
                   
                </td>
            </tr>
            </tbody>
        </table>
        <div>
            <img id="mlen_image" alt="" />
        </div>
        <script type="text/javascript">
            // $('#show').click(function(){$('#pic').toggle(2000)})

            $(function() {
                $(".green_monster").toggle(function() {
                    var me = $(this);
                    $("#mlen_image").parent().show();
                    $("#mlen_image").attr("src", me.data('url'));
                     $("#mlen_image").mlens({
                     imgSrc: me.data('url'),
                     lensShape: "circle",
                     lensSize: 180,
                     borderSize: 0,
                     borderColor: "#fff",
                     zoomLevel:2
                     });  
                }, function() {
                    $("#mlen_image").removeAttr("src").parent().hide();
                });
            });
        </script>
    </div>
    <div class="form-actions">
        <input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1);return false;" type="button" />
    </div>
</form>
</body>
</html>
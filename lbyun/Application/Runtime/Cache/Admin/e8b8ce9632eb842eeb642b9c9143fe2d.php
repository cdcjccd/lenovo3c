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
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_003.js"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
    <script src="/yjc/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
</head>
<body>

<ul class="nav nav-tabs">
    <li class="active"><a href="http://114.247.140.53:8080/lenjoy/admin/business/account/form?id=">
    </a></li>
</ul><br>

<form id="inputForm" class="form-horizontal" action="<?php echo U('Audit/order_inser');?>" method="post" enctype="multipart/form-data" novalidate="novalidate">

    <script type="text/javascript">top.$.jBox.closeTip();</script>
    
    <div class="control-group">
        <label class="control-label">通路渠道:</label>
        <div class="controls">
            <select name="audit_tong" >
                <option value="0">==请选择==</option> 
                <?php if(is_array($king)): foreach($king as $key=>$opo): ?><option value="<?php echo ($opo["id"]); ?>"><?php echo str_repeat("&nbsp;",3); echo ($opo["name"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">商家名称:</label>
        <div class="controls">
            <select id="audit_shops_name" name="audit_shops_name">
                <?php if(is_array($ping)): foreach($ping as $key=>$smp): ?><option value="<?php echo ($smp['id']); ?>"><?php echo ($smp['busname']); ?></option>
                    <?php if(is_array($smp['child'])): foreach($smp['child'] as $key=>$mib): ?><option value="<?php echo ($mib['id']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($mib['busname']); ?></option><?php endforeach; endif; ?>><?php endforeach; endif; ?>
            </select>
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
            <input type="text" name="audit_ids" >
        </div>
    </div>

    <!-- 分类循坏 -->
    <div class="control-group">
        <label class="control-label">购买品牌:</label>
         <div class="controls">
          <select id="province" name="audit_brand" onchange="findCity(this)">
                        <option value="0" selected="selected">==请选择==</option>
                    <?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_id']); ?>"><?php echo ($val['brand_name']); ?></option>
                    <?php if(is_array($val['child'])): foreach($val['child'] as $key=>$vo): ?><option value="<?php echo ($vo['brand_id']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($vo['brand_name']); ?></option><?php endforeach; endif; endforeach; endif; ?>
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

    <div class="control-group">
        <label class="control-label">产品名称:</label>
        <div class="controls">
            <select name="audit_product">
                <option value="0">==请选择==</option>
                <?php if(is_array($ling)): foreach($ling as $key=>$gib): ?><option value="<?php echo ($gib['product_id']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($gib['product_name']); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">购买方式:</label>
        <div class="controls">
            <select name="audit_way">
                <option value="0">==请选择==</option>
                <option value="1"><?php echo str_repeat("&nbsp;",3); ?>激活码购买</option>
                <option value="2"><?php echo str_repeat("&nbsp;",3); ?>非激活码购买</option>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">订单来源:</label>
        <div class="controls">
            <select name="audit_order_source">
                <option value="">==请选择==</option>
                <option value="0"><?php echo str_repeat("&nbsp;",3); ?>单个</option>
                <option value="1"><?php echo str_repeat("&nbsp;",3); ?>批量</option>
                <option value="2"><?php echo str_repeat("&nbsp;",3); ?>绑定</option>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">审核图片:</label>
        <div class="controls">
            <input type="file"  name="audit_file">
        </div>
    </div>
    <!-- <td align="right">营业执照图片：</td> 
                  <td> 
                    <input type="file" name="cert_url[]" id="CERT_URL" value="" maxlength="255" placeholder="这里输入营业执照图片路径" title="营业执照图片路径" /> 
                    <input type="file" name="cert_url[]" id="CERT_URL" value="" maxlength="255" placeholder="这里输入营业执照图片路径" title="营业执照图片路径" /> 
                    <input type="file" name="cert_url[]" id="CERT_URL" value="" maxlength="255" placeholder="这里输入营业执照图片路径" title="营业执照图片路径" /> 
                    <span id="spanuser" style="width:30%;">请上传营业执照清晰彩色原件扫描件或数支持.jpg .jpeg .png 格式照片，大小不超过5M。
                    </span> 
                  </td>   -->

    <div class="form-actions">

        <input id="btnSubmit" class="btn btn-primary" value="提交" onclick="return search();" type="submit">
        <a href="<?php echo U('Audit/authstr_list');?>"><input id="btnSubmit" class="btn btn-primary" value="返回" onclick="return search();" type="button"></a>

</form>
</body>
 <script type="text/javascript">
    
        var psm=[];
        //保存
        function save(){
            var ppic=$("#CERT_URL").val();
            psm=ppic.split(",");
    </script>
</html>
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
        <label class="control-label">所在省份:</label>
        <div class="controls">
            <select name="province" id="province" onchange="getCity()" >
                
            </select>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label">所在地方:</label>
        <div class="controls">
            <select name="city" id="city" >
                 <option>==请选择城市==</option>
            </select>
        </div>
    </div>


    <div class="control-group">
        <label class="control-label">详细地址:</label>
        <div class="controls">
           <input type="text" name="act_address">
        </div>
    </div>
    
     <div class="control-group">
        <label class="control-label">购买渠道:</label>
        <div class="controls">
             <select name="act_channel" id="fwdh" onchange="qita()">
                      <option>==请选择==</option>
                      <option>其他(无服务单号)</option>
                      <option>安心保(有服务号)</option> 
             </select>
        </div>
    </div>

    <!-- 分类循坏 -->
    <div class="control-group">
        <label class="control-label">商品品牌:</label>
         <div class="controls">
          <select id="province" name="act_brand" onchange="findCity(this)">
                        <option value="0" selected="selected">==请选择==</option>
                    <?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_id']); ?>"><?php echo ($val['brand_name']); ?></option>
                    <?php if(is_array($val['child'])): foreach($val['child'] as $key=>$vo): ?><option value="<?php echo ($vo['brand_id']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($vo['brand_name']); ?></option><?php endforeach; endif; endforeach; endif; ?>
          </select>
        </div>
     </div>

    <div class="control-group">
        <label class="control-label">商品型号:</label>
        <div class="controls">
            <select name="act_model">
                <option value="0">==请选择==</option>
                <?php if(is_array($like)): foreach($like as $key=>$vog): ?><option value="<?php echo ($vog['brand_id']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($vog['model_name']); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>
    
     <div class="control-group">
        <label class="control-label">商品品牌一级:</label>
        <div class="controls">
            <select name="audit_product" id="sppl" onchange="sppll()" name="act_category">
                <option value="0">==请选择==</option>
                <?php if(is_array($ling)): foreach($ling as $key=>$gib): ?><option value="<?php echo ($gib['product_id']); ?>"><?php echo str_repeat("&nbsp;",3); echo ($gib['product_name']); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>
    
   <!--      <tr class="borderbottom szw">
                    <td>分段类目</td>
                    <td>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>中式</option>
                            <option>侧吸式</option>
                            <option>欧式</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>挂机1P</option>
                            <option>挂机1.5P及以上</option>
                            <option>挂机2P</option>
                            <option>挂机3P</option>
                            <option>中式</option>
                            <option>侧吸式</option>
                            <option>欧式</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>40L以下（小厨宝）</option>
                            <option>40L-50L</option>
                            <option>51L-60L</option>
                            <option>61L-80L</option>
                            <option>80L以上</option>
                            <option>中式</option>
                            <option>侧吸式</option>
                            <option>欧式</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>即热式电热水器全部</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>32英寸及以下</option>
                            <option>39-43英寸</option>
                            <option>46-58英寸</option>
                            <option>60英寸及以上</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>脱水机</option>
                            <option>双缸洗衣机/单缸/迷你洗衣机</option>
                            <option>波轮洗衣机</option>
                            <option>干衣机</option>
                            <option>滚筒洗衣机</option>
                            <option>洗干一体机</option>
                            <option>中式</option>
                            <option>侧吸式</option>
                            <option>欧式</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>10L以下</option>
                            <option>11-11L</option>
                            <option>12-13L</option>
                            <option>14-16L</option>
                            <option>16L以上</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>燃气灶全部</option>
                        </select>
                        <select class="leimu" name="act_leimu">
                            <option>--请选择--</option>
                            <option>单门</option>
                            <option>双门</option>
                            <option>三门</option>
                            <option>对开门/多门</option>
                        </select>
                    </td>
                </tr> -->

    <div class="control-group">
        <label class="control-label">延保年限:</label>
        <div class="controls">
            <select name="act_limit">
                <option value="0">三月</option>
                <option value="1">一年</option>
                <option value="2">两年</option>
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
        <label class="control-label">购机发票/机器整机照片/型号照片:</label>
        <div class="controls">
            <input type="file"  name="act_file" class="filepath">
             <span class="close">关闭</span>
             <img src="/yjc/lby/Public/Admin/zhuce/img/btn.png" class="img1" />
             <img src="" class="img2" name="imgxinghao"/>
        </div>
    </div>
 

    <div class="form-actions">

        <input id="btnSubmit" class="btn btn-primary" value="提交" onclick="return search();" type="submit">
       

</form>
</body>
 <script type="text/javascript">
    
                $(function() {
                $(".filepath").on("change",function() {
                    //alert($('.imgbox').length);
                    var srcs = getObjectURL(this.files[0]);   //获取路径
                    $(this).nextAll(".img1").hide();   //this指的是input
                    $(this).nextAll(".img2").show();  //fireBUg查看第二次换图片不起做用
                    $(this).nextAll('.close').show();   //this指的是input
                    $(this).nextAll(".img2").attr("src",srcs);    //this指的是input
                    $(".close").on("click",function() {
                         $(this).hide();     //this指的是span
                         $(this).nextAll(".img2").hide();
                         $(this).nextAll(".img1").show(); 
                    })
                })
            })

         function getObjectURL(file) {
                        var url = null;
                        if (window.createObjectURL != undefined) {
                            url = window.createObjectURL(file)
                        } else if (window.URL != undefined) {
                            url = window.URL.createObjectURL(file)
                        } else if (window.webkitURL != undefined) {
                            url = window.webkitURL.createObjectURL(file)
                        }
                        return url
                    };

           $(function() {
                $(".filepath1").on("change",function() {
                    //alert($('.imgbox1').length);
                    var srcs = getObjectURL(this.files[0]);   //获取路径
                    alert(srcs);
                    //this指的是input
                    /* $(this).nextAll(".img22").attr("src",srcs);    //this指的是input
                    $(this).nextAll(".img22").show();  //fireBUg查看第二次换图片不起做用*/
                    var htmlImg='<div class="imgbox1">'+
                              '<div class="imgnum1">'+
                              '<input type="file" class="filepath1" />'+
                              '<span class="close1">X</span>'+
                              '<img src="btn.png" class="img11" />'+
                              '<img src="'+srcs+'" class="img22" />'+
                              '</div>'+
                              '</div>';
                    
                    $(this).parent().parent().before(htmlImg);
                    $(this).parent().parent().prev().find(".img11").hide();   //this指的是input
                    $(this).parent().parent().prev().find('.close1').show(); 
                    
                    $(".close1").on("click",function() {
                         $(this).hide();     //this指的是span
                         $(this).nextAll(".img22").hide();
                         $(this).nextAll(".img11").show(); 
                         if($('.imgbox1').length>1){
                            $(this).parent().parent().remove();
                         }
                         
                    })
                })
            })
           
    </script>
</html>
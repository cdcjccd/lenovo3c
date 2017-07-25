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
  <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries
		[if lte IE 8]> -->
  <script src="/lbyun/lbyun/Public/Admin/static/ace/js/html5shiv.js"></script>
  <script src="/lbyun/lbyun/Public/Admin/static/ace/js/respond.js"></script>
  <!--<![endif]-->
  <!-- 日期框 -->
     <link href="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
     <script src="/lbyun/lbyun/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>
     <style>
         input{
             width:150px;
             height:30px;
            }
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
         <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="#">首页</a> </li>
         <li> <a href="#">我公司的信息</a> </li>
         <li class="active  avtive_bold">已激活列表</li>
        </ul>
        <!-- 检索  -->
        <form action="<?php echo U('Activated/activated_acl');?>" method="post" name="Form" id="Form">
         <!--<table border="0" cellspacing="0" cellpading="0" class="table-nav-search">-->
          <tbody>
          <br>
          <div>
              <label>品牌类型:</label>
              <select id="productType" name="audit_brand" class="required input-medium" >
                  <option value="">==请选择==</option>
                  <?php if(is_array($brand)): foreach($brand as $key=>$val): ?><option value="<?php echo ($val['brand_id']); ?>" ><?php echo ($val['brand_name']); ?></option>
                      <?php if(is_array($val['child'])): foreach($val['child'] as $key=>$vo): ?><option value="<?php echo ($vo["brand_id"]); ?>"<?php if($dsa_key['audit_brand']==$vo['brand_id']) echo selected; ?>><?php echo str_repeat("&nbsp;",3); echo ($vo["brand_name"]); ?></option><?php endforeach; endif; endforeach; endif; ?>
              </select>
              <label>卡类型:</label>
              <select id="productType" name="audit_way" class="required input-medium" >
                  <option value="">==请选择==</option>
                  <option value="0">实体卡</option>
                  <option value="1">虚体卡</option>
              </select>

              <label>产品类型:</label>
              <select id="productType" name="audit_product" class="required input-medium" >
                  <option value="" selected="selected">==请选择==</option>
                  <?php if(is_array($chanpin)): foreach($chanpin as $key=>$ling): ?><option value="<?php echo ($ling["product_id"]); ?>" <?php if($dsa_key['audit_product']==$ling['product_id']) echo selected; ?>><?php echo ($ling["product_name"]); ?></option><?php endforeach; endif; ?>
              </select>
              <label>下单时间:</label>
              <input type="text"  class="required Wdate span2 input-medium" maxlength="50" onClick="WdatePicker()" name="audit_time">

              <label>第三方订单号:</label>
              <input type="text"   name="brand_keywords" value="<?php echo ($dsa_key['brand_keywords']); ?>" />
          </div>
          <br>
          <tr>
             <td>订单号:</td>
               <td>
                   <input type="text"  class="nav-search-input" id="nav-search-input" autocomplete="off" name="audit_order" value="<?php echo ($dsa_key['audit_order']); ?>" />
               </td>
             <td>IMEL号:</td>
               <td>
                   <input type="text"  class="nav-search-input" id="nav-search-input" autocomplete="off" name="audit_serial_number" value="<?php echo ($dsa_key['audit_serial_number']); ?>" />
               </td>

               <td>手机号:</td>
               <td>
                   <input type="text" class="nav-search-input" id="nav-search-input" autocomplete="off" name="audit_phone" value="<?php echo ($dsa_key['audit_phone']); ?>" />
               </td>

               <td>用户姓名:</td>
               <td>
                   <input type="text"  class="nav-search-input" id="nav-search-input" autocomplete="off" name="audit_name" value="<?php echo ($dsa_key['audit_name']); ?>" />
               </td>

               <td>激活码:</td>
               <td>
                   <input type="text"  class="nav-search-input" id="nav-search-input" autocomplete="off" name="" value="<?php echo ($dsa_key['']); ?>" />
               </td>
               <td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();" title="检索"><i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a></td>
             </tr>
          </tbody>
         </table>
         <!-- 检索  -->
         <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;">
          <thead>

           <tr>
            <th class="center">订单号</th>
            <th class="center">产品</th>
            <th class="center">用户姓名</th>
            <th class="center">用户电话</th>
            <th class="center">IMEL号</th>
            <th class="center">订单来源</th>
            <th class="center">审核状态</th>
            <th class="center">订单状态</th>
            <th class="center">下单时间</th>
            <th class="center">操作</th>
           </tr>

          </thead>
          <tbody>
           <!-- 开始循环 -->
           <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
            <td class="center"><?php echo ($vo["audit_order"]); ?></td>
            <td class="center"><?php echo ($vo["product_name"]); ?></td>
            <td class="center"><?php echo ($vo["audit_name"]); ?></td>
            <td class="center"><?php echo ($vo['audit_phone']); ?></td>
            <td class="center"><?php echo ($vo["audit_serial_number"]); ?></td>
            <td class="center">
                <?php if($vo['audit_order_source'] == '0'): echo "<font color='green'>"."单个"."</font>";?>
                    <?php elseif($vo['audit_order_source'] == '1'): ?>
                    <?php  echo "<font color='green'>"."批量"."</font>";?>
                    <?php elseif($vo['audit_order_source'] == '2'): ?>
                    <?php  echo "<font color='green'>"."绑定"."</font>"; endif; ?>
            </td>
            <td class="center">
                <?php if($vo['audit_decision'] == '0'): echo "<font color='green'>"."待审核"."</font>";?>
                    <?php elseif($vo['audit_decision'] == '1'): ?>
                    <?php  echo "<font color='red'>"."审核通过"."</font>";?>
                    <?php elseif($vo['audit_decision'] == '2'): ?>
                    <?php  echo "<font color='green'>"."审核待定"."</font>";?>
                    <?php elseif($vo['audit_decision'] == '3'): ?>
                    <?php  echo "<font color='green'>"."拒保"."</font>"; endif; ?>
            </td>
            <td class="center">{}</td>
            <td class="center"><?php echo ($vo["audit_time"]); ?></td>
               <td class="center">
                   <a href="<?php echo U('Activated/activa_list');?>?x_id=<?php echo ($vo['audit_id']); ?>">查看详情</a>
                   <a href="<?php echo U('Activated/activa_upda');?>?b_id=<?php echo ($vo['audit_id']); ?>">申请修改</a>
               </td>
           </tr>
           <!-- 循环结束 --><?php endforeach; endif; ?>
          </tbody>
         </table>
         <div class="page-header position-relative">
          <table style="width:100%;">
           <tbody>
            <tr>
             <td style="vertical-align:top;"> </td>
             <td style="vertical-align:top;">
              <div class="pagination" style="float: right;padding-top: 0px;margin-top: 0px;">
               <?php echo ($page); ?>
              </div></td>
            </tr>
           </tbody>
          </table>
         </div>
        </form>
       </div>
      </div>
     </div>
    </div>
   </div>
   <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i> </a>
  </div>
  <script type="text/javascript">
			window.jQuery || document.write("<script src='/lbyun/lbyun/Public/Admin/static/ace/js/jquery.js'>"+"<"+"/script>");
		</script>
  <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/lbyun/lbyun/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>

  <script type="text/javascript">
		//检索
		function tosearch(){
			$("#Form").submit();
		}
	</script>
 </body>
</html>
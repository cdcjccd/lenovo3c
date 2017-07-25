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
  <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/bootstrap.css" /> 
  <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/font-awesome.css" /> 
  <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/ace-fonts.css" /> 
  <link rel="stylesheet" href="/lbyun/lbyun/Public/Admin/static/ace/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" /> 
  <script src="/lbyun/lbyun/Public/Admin/static/ace/js/ace-extra.js"></script> 
  <script src="/lbyun/lbyun/Public/Admin/static/ace/js/html5shiv.js"></script> 
  <script src="/lbyun/lbyun/Public/Admin/static/ace/js/respond.js"></script> 
  <!-- 日期框 --> 
  <link href="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" /> 
  <script src="/lbyun/lbyun/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script> 
 </head> 
 <body class="no-skin"> 
  <div class="main-container" id="main-container"> 
   <div class="main-content"> 
    <div class="main-content-inner"> 
     <div class="page-content"> 
      <div class="row"> 
       <div class="col-xs-12"> 
        <ul class="breadcrumb"> 
         <li class="active  avtive_bold"><a href="<?php echo U('Audit/authstr_list');?>">待审核订单列表</a></li> 
         <li class="active  avtive_bold">审核未通过订单</li> 
         <li class="active  avtive_bold"><a href="<?php echo U('Audit/order_via');?>">审核通过订单表</a></li> 
        </ul> 
        <!-- 检索  --> 
        <form action="<?php echo U('Audit/order_via');?>" method="post" name="Form" id="Form"> 
         <table border="0" cellspacing="0" cellpading="0" class="table-nav-search"> 
          <tbody>
           <tr> 
            <td style="padding-right:10px;">下单时间:</td> 
            <td> 
             <div class="nav-search"> 
              <span class="input-icon"> <input type="text" placeholder="下单时间" class="nav-search-input required Wdate span2" maxlength="50" onclick="WdatePicker()" name="audit_time" value="<?php echo ($asd['audit_time']); ?>" /> </span> 
             </div> </td> 
            <td style="padding-right:16px;">工单号:</td> 
            <td> 
             <div class="nav-search"> 
              <span class="input-icon"> <input type="text" placeholder="工单号,手机号,序列号" class="nav-search-input" id="nav-search-input" autocomplete="off" name="audit_serial_number" value="<?php echo ($asd['audit_serial_number']); ?>" /> </span> 
             </div> </td> 
            <td style="padding-right:10px;"><a class="btn btn-light btn-xs" onclick="tosearch();" title="检索"> <i id="nav-search-icon" class="ace-icon fa fa-search bigger-110 nav-search-icon white"></i></a> 
             </td> 
           </tr> 
          </tbody>
         </table> 
         <!-- 检索  --> 
         <?php if(is_array($list)): foreach($list as $key=>$vo): endforeach; endif; ?>
         <table id="simple-table" class="table table-striped table-bordered table-hover" style="margin-top:5px;"> 
          <thead> 
           <tr> 
            <th class="center">商家ID</th> 
            <th class="center">商家名称</th> 
            <th class="center">订单号</th> 
            <th class="center">IMEL号</th> 
            <th class="center">购买人</th> 
            <th class="center">订单来源</th> 
            <th class="center">订单状态</th>
            <th class="center">审核描述</th> 
            <th class="center">下单时间</th> 
           </tr> 
          </thead> 
          <tbody> 
           <!-- 开始循环 -->
           <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr> 
            <td class="center"><?php echo ($vo["audit_id"]); ?></td> 
            <td class="center"><?php echo ($vo["busname"]); ?></td> 
            <td class="center"><?php echo ($vo["audit_order"]); ?></td> 
            <td class="center"><?php echo ($vo["audit_serial_number"]); ?></td> 
            <td class="center"><?php echo ($vo["audit_name"]); ?></td> 
            <td class="center"> 
             <?php if($vo['audit_order_source'] == '0'): echo "<font color='green'>"."单个"."</font>";?>
              <?php elseif($vo['audit_order_source'] == '1'): ?> 
                    <?php  echo "<font color='green'>"."批量"."</font>";?>
              <?php elseif($vo['audit_order_source'] == '2'): ?> 
                    <?php  echo "<font color='green'>"."绑定"."</font>"; endif; ?> 
           </td> 

           <td class='center'> 
            <?php if($vo['audit_decision'] == '0'): echo "<font color='green'>"."待审核"."</font>";?>
            <?php elseif($vo['audit_decision'] == '1'): ?>
               <?php  echo "<font color='red'>"."审核成功"."</font>";?>
            <?php elseif($vo['audit_decision'] == '2'): ?>
               <?php  echo "<font color='green'>"."审核待定"."</font>";?>
            <?php elseif($vo['audit_decision'] == '3'): ?>
               <?php  echo "<font color='green'>"."拒保"."</font>"; endif; ?>
            </td>
            <td class="center"></td> 
            <td class="center"><?php echo ($vo["audit_time"]); ?></td> 
           </tr><?php endforeach; endif; ?>
           <!-- 循环结束 --> 
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
              </div> </td> 
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
  <script src="/lbyun/lbyun/Public/Admin/static/ace/js/jquery.js"></script> 
  <script type="text/javascript">
     if('ontouchstart' in document.documentElement) document.write("<script src='/lbyun/lbyun/Public/Admin/static/ace/js/jquery.mobile.custom.js'>"+"<"+"/script>");

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
        //检索
        function tosearch(){
            $("#Form").submit();
        }
</script>  
 </body>
</html>
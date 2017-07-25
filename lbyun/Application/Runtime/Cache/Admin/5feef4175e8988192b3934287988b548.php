<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		在线用户管理 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
<script src="/lenovo3C/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
<script src="/lenovo3C/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
<script src="/lenovo3C/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
<script src="/lenovo3C/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
<link href="/lenovo3C/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
<script src="/lenovo3C/Public/Admin/static/userlist/jquery_002.js" type="text/javascript"></script>
<script src="/lenovo3C/Public/Admin/static/userlist/jquery_006.js" type="text/javascript"></script>
<link href="/lenovo3C/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
<script src="/lenovo3C/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
<!-- <script src="/lenovo3C/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script><link href="/lenovo3C/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css"> -->
<script src="/lenovo3C/Public/Admin/static/userlist/jquery_003.js"></script>
<script src="/lenovo3C/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
<link href="/lenovo3C/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
<script src="/lenovo3C/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

<!-- jq插件三级联动 -->
<!--<script language="javascript" src="/lenovo3C/Public/Admin/static/userlist/pcasunzip.js" charset="gb2312"></script>-->

		<!--  需要添加百度统计分析-->

	<meta name="decorator" content="default">
	<!-- <script type="text/javascript">
	function findCity(me){
	 	$.getJSON("/lenjoy/Admin/sys/area/getAreas",{"parentId":me.value}, function(areas){
			$("#city").empty().append("<option value=''>----请选择----</option>");
			$.each(areas, function(i,item){
				$("#city").append("<option value='"+item[0]+"'>"+item[1]+"</option>");
			 });
		});
	}
		$(document).ready(function() {
			$("#inputForm").validate({
				rules: {
					realName:{realName:true},
			 		identityCard:{card:true},
					loginMobile: {
						  mobile:true,
						  remote:{
				               type:"GET",
				               url:"/lenjoy/Admin/business/account/checkIsExistLoginMobile",
				               data:{
				            	   mobile:function(){
				            		   var mobile=$("#loginMobile").val().replace(/\s/g, "");
				            		   $("#loginMobile").val(mobile);
				            		   return mobile;}
				               }
						  }
					},
					loginEmail: {
						  email:true,
						  remote:{
				               type:"GET",
				               url:"/lenjoy/Admin/business/account/checkIsExistLoginEmail",
				               data:{
				            	   email:function(){
				            		   var email=$("#loginEmail").val().replace(/\s/g, "");
				            		   $("#loginEmail").val(email);
				            		   return email;}
				               }
						  }
					},
					account: {
						  remote:{
				               type:"GET",
				               url:"/lenjoy/Admin/business/account/checkIsExistAccount",
				               data:{
				            	   account:function(){
				            		   var account=$("#account").val().replace(/\s/g, "");
				            		   $("#account").val(account);
				            		   return account;}
				               }
						  }
					}
				},
				messages: {
					 loginMobile: {remote: "该手机号已被注册"},
					 loginEmail: {remote: "该邮箱已被注册"},
					 account: {remote: "该用户名已存在"}
				},
				submitHandler: function(form){
					loading('正在提交，请稍等...');
					form.submit();
				},
				errorContainer: "#messageBox",
				errorPlacement: function(error, element) {
					$("#messageBox").text("输入有误，请先更正。");
					if (element.is(":checkbox")||element.is(":radio")||element.parent().is(".input-append")){
						error.appendTo(element.parent().parent());
					} else {
						error.insertAfter(element);
					}
				}
			});

		});
	</script> -->

	</head>
	<body>

	<ul class="nav nav-tabs">
		<li><a href="<?php echo U('Admin/User/userList');?>">用户列表</a></li>
		<li class="active"><a href="#">用户
		</a></li>
	</ul><br>
	<form id="inputForm" class="form-horizontal"  action="<?php echo U('User/userAdd');?>" method="post" novalidate="novalidate">
		<input id="id" name="id" value="" type="hidden">

<!-- <script type="text/javascript">
function getValue(){
var getpro=document.getElementById("province").value;
var getcity=document.getElementById("city").value;
var getarea=document.getElementById("area").value;
alert(getpro+" "+getcity+" "+getarea);
 }
</script>

<script language="javascript" defer>
new PCAS("userProvince","userCity","userArea","山东省","济南市","济南市");
</script> -->

<!-- <script type="text/javascript">top.$.jBox.closeTip();</script> -->

		<div class="control-group">
			<label class="control-label">手机号:</label>
			<div class="controls">
               <input id="loginMobile" name="userMobile" class="required" maxlength="11" aria-required="true" type="text">
               <span id='phone'></span>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">用户名:</label>
			<div class="controls">
				<input id="account" name="userNickName" maxlength="50" type="text">
				<span id='phone'></span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">邮箱:</label>
			<div class="controls">
				<input id="loginEmail" name="userEmail" type="email">
				<span id='email'></span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">身份证号:</label>
			<div class="controls">
				<input id="identityCard" name="userIdCard" maxlength="200" type="text">
				<span id='idcard'></span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">真实姓名:</label>
			<div class="controls">
				<input id="realName" name="userRealName" maxlength="200" type="text">
				<span id='name'></span>
			</div>
		</div>

		<script>



			//判断输入电话是否合法
			//异步判断电话是否已被注册
			$('#loginMobile').blur(function(){
				var val = $(this).val()
				var phone = /^1[34578]\d{9}$/;
				if (val != '') {

					if ( !phone.test( val )) {
					$('#phone').html("<font color='red'>*格式不对</font>")
					return false
					}else{
							$.ajax({
							url: "<?php echo U('Admin/Ucheck/checkUserMobile');?>?mobile=" + val,
							success: function(res){

								if (res == '6') {
									$('#phone').html("<font color='red'>*电话已在列表中</font>")
								}else{
									$('#phone').empty()
								}
							}
						})
					}
				}

			})

	         $('input[name=userEmail]').blur(function(){
	        	var patt = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
	            if (!patt.test($(this).val() )) {
	                $('#email').html("<font color='red'>*格式不对</font>")
	                return false;
	            }else{
					$('#email').html("<font color='green'>^_^</font>")
				}
	        })

	        $('input[name=userIdCard]').blur(function(){
	        	var patt = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
	            if (!patt.test($(this).val() )) {
	                $('#idcard').html("<font color='red'>*格式不对</font>")
	                return false;
	            }else{
					$('#idcard').html("<font color='green'>^_^</font>")
				}
	        })

	        $('input[name=userRealName]').blur(function(){
	        	var patt = /^[\u4E00-\u9FA5]{1,4}$/;
	            if (!patt.test($(this).val() )) {
	                $('#name').html("<font color='red'>*格式不对</font>")
	                return false;
	            }else{
					$('#name').html("<font color='green'>^_^</font>")
				}
	        })





        </script>



		<div class="control-group">
			<label class="control-label">性别:</label>
			<div class="controls">
				<input name="userSex" value="1" type="radio">男
	            <input name="userSex" value="0" type="radio">女
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">省份:</label>
			<div class="controls">
				<select name="userProvince" id="province" onchange="getCity()"aria-invalid="false" class="valid">

				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">城市:</label>
			    <div class="controls">
					<select name="userCity" id="city"></select>
				</div>
		</div>
		<!--<div class="control-group">-->
			<!--<label class="control-label">辖区:</label>-->
			    <!--<div class="controls">-->
					<!--<select name="userArea" id="area"></select>-->
				<!--</div>-->
		<!--</div>-->
		<div class="form-actions">

			<input id="btnCancel" class="btn" value="提交"  type="submit"><label for="">没有提交</label>
			<input id="btnCancel" class="btn" value="返 回" onclick="history.go(-1);return false;" type="button">


		</div>
	</form>

 <!--jq插件三级联动-->


	<script>
		/*城市省份*/

        $(document).ready(function(){
            $(".ppxh").hide();
            $(".leimu").hide();
            var old=$("#province").html();
            //alert(old);
            var province=["--请选择--","北京市", "天津市", "河北省", "河南省", "山西省", "山东省", "内蒙古自治区", "辽宁省", "吉林省", "黑龙江省", "上海市", "江苏省", "浙江省", "福建省", "江西省", "安徽省", "湖北省", "湖南省", "广东省", "广西壮族自治区", "海南省", "重庆市", "四川省", "贵州省", "云南省", "西藏自治区", "陕西省", "甘肃省", "青海省", "宁夏回族自治区", "新疆维吾尔自治区", "台湾省", "香港特别行政区", "澳门特别行政区"];
            var pro=""
            for(var i=0;i<province.length;i++){
                pro+="<option>" + province[i] + "</option>"
            }
            $("#province").html(old + pro);

        })
	</script>
	<script>
		/*选择地市*/
        var arr = new  Array();
        arr[0 ]="--请选择--"
        arr[1 ]="市辖区,市辖县"
        arr[2 ]="市辖区,市辖县"
        arr[3 ]="石家庄市, 唐山市, 秦皇岛市, 邯郸市, 邢台市, 保定市, 张家口市, 承德市, 沧州市, 廊坊市, 衡水市, 省直辖县级行政单位"
        arr[4 ]="郑州市, 开封市, 洛阳市, 平顶山市, 安阳市, 鹤壁市, 新乡市, 焦作市, 濮阳市, 许昌市, 漯河市, 三门峡市, 商丘市, 周口市, 驻马店市, 南阳市, 信阳市, 省直辖县级行政单位"
        arr[5 ]="太原市, 大同市, 阳泉市, 长治市, 晋城市, 朔州市, 晋中市, 运城市, 忻州市, 临汾市, 吕梁市"
        arr[6 ]="济南市, 青岛市, 淄博市, 枣庄市, 东营市, 烟台市, 潍坊市, 济宁市, 泰安市, 威海市, 日照市, 滨州市, 德州市, 聊城市, 临沂市, 菏泽市, 莱芜市"
        arr[7 ]="呼和浩特市, 包头市, 乌海市, 赤峰市, 通辽市, 鄂尔多斯市, 呼伦贝尔市, 巴彦淖尔市, 乌兰察布市, 兴安盟, 锡林郭勒盟, 阿拉善盟"
        arr[8 ]="沈阳市, 大连市, 鞍山市, 抚顺市, 本溪市, 丹东市, 锦州市, 营口市, 阜新市, 辽阳市, 盘锦市, 铁岭市, 朝阳市, 葫芦岛市, 省直辖县级行政单位"
        arr[9 ]="长春市, 吉林市, 四平市, 辽源市, 通化市, 白山市, 白城市, 松原市, 延边朝鲜族自治州, 长白山保护开发区, 省直辖县级行政单位"
        arr[10 ]="哈尔滨市, 齐齐哈尔市,鸡西市,鹤岗市,双鸭山市,大庆市,伊春市,佳木斯市, 七台河市, 牡丹江市, 黑河市, 绥化市, 大兴安岭地区, 省直辖县级行政单位"
        arr[11 ]="市辖区, 市辖县"
        arr[12 ]="南京市,无锡市,徐州市, 常州市, 苏州市,南通市,连云港市, 淮安市, 盐城市, 扬州市, 镇江市, 泰州市, 宿迁市, 省直辖县级行政单位"
        arr[13 ]="杭州市, 宁波市, 温州市, 绍兴市, 湖州市, 嘉兴市, 金华市, 衢州市, 台州市, 丽水市, 舟山市, 省直辖县级行政单位"
        arr[14 ]="福州市,厦门市,莆田市,泉州市,漳州市,龙岩市,三明市,南平市,宁德市"
        arr[15 ]="南昌市,赣州市,宜春市,吉安市,上饶市,抚州市, 九江市, 景德镇市, 萍乡市, 新余市, 鹰潭市, 省直辖县级行政单位"
        arr[16 ]="合肥市, 芜湖市, 蚌埠市, 淮南市, 马鞍山市, 淮北市, 铜陵市, 安庆市, 黄山市, 阜阳市, 宿州市, 滁州市, 六安市, 宣城市, 池州市, 亳州市, 省直辖县级行政单位"
        arr[17 ]="武汉市,宜昌市,荆州市,襄樊市,黄石市,荆门市,黄冈市,十堰市,恩施市,潜江市,天门市,仙桃市,随州市,咸宁市,孝感市,鄂州市"
        arr[18 ]="长沙市,常德市,株洲市,湘潭市,衡阳市,岳阳市,邵阳市,益阳市,娄底市,怀化市,郴州市,永州市,湘西市,张家界市"
        arr[19 ]="广州市,深圳市,珠海市,汕头市,东莞市,中山市,佛山市,韶关市,江门市,湛江市,茂名市,肇庆市,惠州市,梅州市,汕尾市,河源市,阳江市,清远市,潮州市,揭阳市,云浮市"
        arr[20 ]="南宁市,柳州市,桂林市,梧州市,北海市,防城港市,钦州市,贵港市,玉林市,南宁地区,柳州地区,贺州市,百色市,河池市"
        arr[21 ]="海口市,三亚市,三沙市,儋州市,省直辖县级行政单位"
        arr[22 ]="市辖区,市辖县"
        arr[23 ]="成都市,绵阳市,德阳市,自贡市,攀枝花市,广元市,内江市,乐山市,南充市,宜宾市,广安市,达川市,雅安市,眉山市,甘孜市,凉山市,泸州市"
        arr[24 ]="贵阳市,六盘水市,遵义市,安顺市,铜仁市,黔西南市,毕节市,黔东南市,黔南市"
        arr[25 ]="昆明市,大理市,曲靖市,玉溪市,昭通市,楚雄市,红河市,文山市,思茅市,西双版纳市,保山市,德宏市,丽江市,怒江市,迪庆市,临沧市"
        arr[26 ]="拉萨市,日喀则市,山南市,林芝市,昌都市,阿里市,那曲市"
        arr[27 ]="西安,宝鸡,咸阳,铜川,渭南,延安,榆林,汉中,安康,商洛"
        arr[28 ]="兰州,嘉峪关,金昌,白银,天水,酒泉,张掖,武威,定西,陇南,平凉,庆阳,临夏,甘南"
        arr[29 ]="西宁,海东,海南,海北,黄南,玉树,果洛,海西"
        arr[30 ]="银川,石嘴山,吴忠,固原"

        arr[31 ]="乌鲁木齐,石河子,克拉玛依,伊犁,巴音郭勒,昌吉,克孜勒苏柯尔克孜,博 尔塔拉,吐鲁番,哈密,喀什,和田,阿克苏"
        arr[32 ]="台北,高雄,台中,台南,屏东,南投,云林,新竹,彰化,苗栗,嘉义,花莲,桃园,宜兰,基隆,台东,金门,马祖,澎湖"
        arr[33 ]="香港"
        arr[34 ]="澳门"


        function init()//打开页面的同时调用INIT()函数
        {
            var city = document.getElementById("city");
            var cityArr = arr[0].split(",");//split() 方法用于把一个字符串分割成字符串数组。
            for(var i=0;i<cityArr.length;i++)
            {
                city[i]=new Option(cityArr[i],cityArr[i]);
            }
        }

        function getCity()
        {
            var pro = document.getElementById("province");
            var city = document.getElementById("city");
            var index = pro.selectedIndex;
            //alert(index)//获得索引值
            var cityArr = arr[index].split(",");

            city.length = 0;
            //将城市数组中的值填充到城市下拉框中
            for(var i=0;i<cityArr.length;i++)
            {
                city[i]=new Option(cityArr[i],cityArr[i]);
            }
        }
	</script>

        </body></html>
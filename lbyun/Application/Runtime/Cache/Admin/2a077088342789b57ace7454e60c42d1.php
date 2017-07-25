<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;">
<head>
	<title>
		通路销售统计 - Powered By Enjoy3C</title>
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
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_004.js" type="text/javascript"></script>-->
	<link href="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>
	<!--[if lte IE 6]><link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />
	<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->
	<!--<script src="/lbyun/lbyun/Public/Admin/static/userlist/WdatePicker.js" type="text/javascript"></script>-->
	<!--<link href="/lbyun/lbyun/Public/Admin/static/userlist/WdatePicker.css" rel="stylesheet" type="text/css" />-->
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/jquery_003.js"></script>
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
	<link href="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
	<!--  需要添加百度统计分析-->
	<meta name="decorator" content="default" />

	<!--<link rel="stylesheet" href="style.css" type="text/css">-->
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>
	<!--<script src="/lbyun/lbyun/Public/Admin/amcharts/amcharts.js" type="text/javascript"></script>-->
	<!--<script src="/lbyun/lbyun/Public/Admin/amcharts/pie.js" type="text/javascript"></script>-->

	<script src="/lbyun/lbyun/Public/Admin/static/userlist/echarts/echarts.js"></script>
	<script src="/lbyun/lbyun/Public/Admin/static/userlist/echarts/china.js"></script>

	<!--<script data-require-id="echarts/chart/pie" src="/lbyun/lbyun/Public/Admin/static/userlist/pie.js" async=""></script><script data-require-id="echarts/chart/bar" src="/lbyun/lbyun/Public/Admin/static/userlist/bar.js" async=""></script><script data-require-id="echarts/chart/funnel" src="/lbyun/lbyun/Public/Admin/static/userlist/funnel.js" async=""></script><script data-require-id="echarts/chart/line" src="/lbyun/lbyun/Public/Admin/static/userlist/line.js" async=""></script></head>-->
</head>


<body>
<div class="container-fluid">
	<ul class="nav nav-tabs">
		<li class="active"><a href="">区域分析</a></li>
	</ul>
	<div id="warning" style="display: none" class="alert alert-warning" aria-hidden="true">
		<a class="closed close" href="#">&times;</a>
		<strong>提示！</strong>开始时间和结束时间都必须选择,只允许查询时间间隔不超过30天的数据!
	</div>

	<form id="searchForm" class="breadcrumb form-search" action="#" method="post">
		<div>
			<label>开始时间：</label>
			<input type="text" id="startDate" name="startDate" class="required Wdate span2" maxlength="50" onClick="WdatePicker()">
			<!--<input id="startDate" name="startDate" onclick="WdatePicker()" placeholder="开始时间" class="required Wdate span2" maxlength="50" type="text" />-->
			<label>结束时间：</label>
			<input type="text" id="endDate" name="endDate" class="required Wdate span2" maxlength="50" onClick="WdatePicker()">&nbsp;&nbsp;&nbsp;

			<!--<input id="endDate" name="endDate" onclick="WdatePicker()" placeholder="结束时间" class="required Wdate span2" maxlength="50" type="text" /> &nbsp;-->
			<input id="btnSubmit" class="btn btn-primary" value="查询"  onclick="reSearch();return false;" type="submit" />
			<!--<input type="button" value="tijiao" id="haha">-->
			<!--<testarea id="test"></testarea>-->
		</div>
	</form>

	<input id="day" name="day" value="7" type="hidden" />
	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li>销售区域占比分析</li>
			</ul>
			<div style="width: 100%; float: left;">
				<!-- <input type="button" id='te'  class='btn' name="" value="最近两天"> -->
				<a href="#" class='btn' id="se7" >最近7天</a>&nbsp;&nbsp;
				<a href="#" class='btn' id="se30" >最近30天</a>
			</div>

			<!--<div id="chartdiv" style="width: 700px; height: 500px; float: left;">-->
			<div id="area" style="width: 850px; height: 650px; float: left; margin-top: 10px;">

			</div>
			<div class="row-fluid" >

				<div class="span4" style="float: right;">
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>通路</th>
							<th>销量</th>
						</tr>
						</thead>
						<tbody id="salename">
						<tr>
							<td>京东</td>
							<td>4372</td>
						</tr>
						<tr>
							<td>深圳平安</td>
							<td>153</td>
						</tr>
						<tr>
							<td>天猫通路</td>
							<td>0</td>
						</tr>
						<tr>
							<td>浙江移动</td>
							<td>0</td>
						</tr>
						<tr>
							<td>京东电销</td>
							<td>0</td>
						</tr>
						<tr>
							<td>中国移动</td>
							<td>0</td>
						</tr>
						<tr>
							<td>电销及银行通路</td>
							<td>0</td>
						</tr>
						<tr>
							<td>官网</td>
							<td>0</td>
						</tr>
						<tr>
							<td>测试</td>
							<td>0</td>
						</tr>
						<tr>
							<td>北京平安</td>
							<td>0</td>
						</tr>
						<tr>
							<td>北京联通</td>
							<td>0</td>
						</tr>
						<tr>
							<td>北京移动</td>
							<td>0</td>
						</tr>
						<tr>
							<td>淘宝</td>
							<td>0</td>
						</tr>
						<tr>
							<td>m3</td>
							<td>0</td>
						</tr>
						<tr>
							<td>苏宁</td>
							<td>0</td>
						</tr>
						<tr>
							<td>m5</td>
							<td>0</td>
						</tr>
						<tr>
							<td>京东集采</td>
							<td>0</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="row-fluid">-->
		<!--<div class="span12">-->
			<!--<ul class="breadcrumb">-->
				<!--<li>销售区域趋势分析</li>-->
			<!--</ul>-->
			<!--<div class="row-fluid">-->
				<!--<div class="span4">-->
					<!--<div style="width: 100%; float: left;">-->
						<!--&lt;!&ndash; <input type="button" id='te'  class='btn' name="" value="最近两天"> &ndash;&gt;-->
						<!--<a href="#" class='btn' id="line7" >最近7天</a>&nbsp;&nbsp;-->
						<!--<a href="#" class='btn' id="line30" >最近30天</a>-->
					<!--</div>-->
				<!--</div>-->
				<!--<div class="span4"></div>-->
				<!--<div class="span4">-->
					<!--<div>-->
						<!--<input class="input-medium" checked="checked" id="allname" type="checkbox" />全部通路&nbsp;&nbsp;&nbsp;&nbsp;-->
						<!--<select class="input-medium" id="nameName" name="roteName"> <option value="" selected="selected">请选择通路</option> <option value="1">京东</option><option value="2">m5</option><option value="3">苏宁</option><option value="4">m3</option><option value="5">淘宝</option><option value="6">北京移动</option><option value="7">北京联通</option><option value="8">北京平安</option><option value="9">测试</option><option value="10">官网</option><option value="11">电销及银行通路</option><option value="12">深圳平安</option><option value="13">中国移动</option><option value="14">京东电销</option><option value="15">浙江移动</option><option value="16">天猫通路</option><option value="17">京东集采</option></select>-->
					<!--</div>-->
				<!--</div>-->
			<!--</div>-->
			<!--<div class="row-fluid">-->
				<!--&lt;!&ndash;<div id="mainbar" style="height: 300px; -moz-user-select: none; background-color: transparent;" _echarts_instance_="1497941075063">&ndash;&gt;-->
				<!--<div id="mainbar" style="width: 800px; height: 500px; margin-top: 10px;">-->

				<!--&lt;!&ndash;<div style="position: relative; overflow: hidden; width: 1863px; height: 300px;">&ndash;&gt;-->
						<!--&lt;!&ndash;<div style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" data-zr-dom-id="bg"></div>&ndash;&gt;-->
						<!--&lt;!&ndash;<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="0"></canvas>&ndash;&gt;-->
						<!--&lt;!&ndash;<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="1"></canvas>&ndash;&gt;-->
						<!--&lt;!&ndash;<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="_zrender_hover_"></canvas>&ndash;&gt;-->
					<!--&lt;!&ndash;</div>&ndash;&gt;-->
				<!--</div>-->
			<!--</div>-->
			<!--<div class="row-fluid">-->
				<!--<table class="table table-bordered">-->
					<!--<thead id="trendAnalysisTitle">-->
					<!--<tr></tr>-->
					<!--<tr>-->
						<!--<td>时间</td>-->
						<!--<td>京东</td>-->
						<!--<td>m5</td>-->
						<!--<td>苏宁</td>-->
						<!--<td>m3</td>-->
						<!--<td>淘宝</td>-->
						<!--<td>北京移动</td>-->
						<!--<td>北京联通</td>-->
						<!--<td>北京平安</td>-->
						<!--<td>测试</td>-->
						<!--<td>官网</td>-->
						<!--<td>电销及银行通路</td>-->
						<!--<td>深圳平安</td>-->
						<!--<td>中国移动</td>-->
						<!--<td>京东电销</td>-->
						<!--<td>浙江移动</td>-->
						<!--<td>天猫通路</td>-->
						<!--<td>京东集采</td>-->
						<!--<td>总计</td>-->
					<!--</tr>-->
					<!--</thead>-->
					<!--<tbody id="trendAnalysisData">-->
					<!--<tr></tr>-->
					<!--<tr>-->
						<!--<td>2017-06-14</td>-->
						<!--<td>4372</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>23</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>4395</td>-->
					<!--</tr>-->
					<!--<tr></tr>-->
					<!--<tr>-->
						<!--<td>2017-06-15</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>22</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>22</td>-->
					<!--</tr>-->
					<!--<tr></tr>-->
					<!--<tr>-->
						<!--<td>2017-06-16</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>42</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>42</td>-->
					<!--</tr>-->
					<!--<tr></tr>-->
					<!--<tr>-->
						<!--<td>2017-06-17</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>28</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>28</td>-->
					<!--</tr>-->
					<!--<tr></tr>-->
					<!--<tr>-->
						<!--<td>2017-06-18</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>30</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>30</td>-->
					<!--</tr>-->
					<!--<tr></tr>-->
					<!--<tr>-->
						<!--<td>2017-06-19</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>8</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>8</td>-->
					<!--</tr>-->
					<!--<tr></tr>-->
					<!--<tr>-->
						<!--<td>2017-06-20</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
						<!--<td>0</td>-->
					<!--</tr>-->
					<!--</tbody>-->
				<!--</table>-->
			<!--</div>-->
		<!--</div>-->
	<!--</div>-->
</div>
<script type="text/javascript">

    /**
     *  按日期查询
     */
    function reSearch(){
        var startDate = new Date($('#startDate').val());
        var endDate = new Date($('#endDate').val());
		var time = (endDate.getTime() - startDate.getTime()) / 86400;
//		alert(time)
//		alert(day)
		if ( time < 8000 ) {
		    alert('查询最少七天以上');
		}else {
            var day = $('#startDate').val() + ' 至 ' + $('#endDate').val();
            $('.required').val('');
            $('.btn').removeAttr('disabled')
            $.ajax({
                type: 'post',
                url: "<?php echo U('Admin/SaleAnalyze/area');?>",
                data: $('#searchForm').serialize(),
                success: function(res){
//                alert( res );
//                alert(1)
//                    var name = new Array();
//                    for ( var i = 0 ; i < res.data.length ; i++) {
//                        name[i] = res.data[i].name;
//                    }
//                alert( res.data );
                    area (res , day);
                }
            })
		}

    }


    /**
	 *  默认显示 7天数据
	 */
	$(document).ready(function(){
		$('#se7').attr({
			'disabled':'disabled'
		})
		var day = 7 + '天';
	    var url = "<?php echo U('Admin/SaleAnalyze/area');?>?day=" + '7';
        area_ajax(url , day);
	});

	/**
	 *  7天显示数据
	 */
    $('#se7').click(function(){
        $(this).attr({
            'disabled':'disabled'
        })
        $('#se30').removeAttr('disabled')
        var day = 7 + '天';
        var url = "<?php echo U('Admin/SaleAnalyze/area');?>?day=" + '7'
        area_ajax(url,day);
    })

	/**
	 *	30天数据
	 */
	$('#se30').click(function(){
        $(this).attr({
            'disabled':'disabled'
        })
	    $('#se7').removeAttr('disabled')
        var day = 30 + '天';
        var url = "<?php echo U('Admin/SaleAnalyze/area');?>?day=" + '30'
        area_ajax(url,day);
	})

	/**
	 *  ajax方法 ,带条件查询数据
	 */
 	function area_ajax(url , day){
        $.ajax({
            url: url,
            success: function(data){
//                var arr = new Array()
//                var name = new Array()
//                for( var i = 0 ; i < xhr.length ; i++ ){
//                    arr[i] = { "name":xhr[i].name , "value":xhr[i].value}
//                    name[i] = xhr[i].name
//                }
                area(data , day)
//				columnar(name)
            }
        })
	}


    function area(data , day) {
        var obj = document.getElementById('area')
        var chart = echarts.init(obj);
//        chart.setOption({
//            series: [{
//                type: 'map',
//                map: 'china'
//            }]
//        });
        option = {
            title: {
                text: '销量区域分析' + day,
                subtext: '',
                left: 'center'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left',
                data: ['销量']
            },
            visualMap: {
                min: 0,
                max: 1500 ,
                left: 'left',
                top: 'bottom',
                text: ['高', '低'],           // 文本，默认为数值文本
                calculable: true
            },
            toolbox: {
                show: true,
                orient: 'vertical',
                left: 'right',
                top: 'center',
                feature: {
                    dataView: {readOnly: false},
                    restore: {},
                    saveAsImage: {}
                }
            },
            series: [
                {
                    name: '销量',
                    type: 'map',
                    map: 'china',
                    roam: false,
                    label: {
                        normal: {
                            show: true
                        },
                        emphasis: {
                            show: true
                        }
                    },
					data: data
//                    data: [
//                        {name: '北京', value: randomData()},
//                        {name: '天津', value: randomData()},
//                        {name: '上海', value: randomData()},
//                        {name: '重庆', value: randomData()},
//                        {name: '河北', value: randomData()},
//                        {name: '河南', value: randomData()},
//                        {name: '云南', value: randomData()},
//                        {name: '辽宁', value: randomData()},
//                        {name: '黑龙江', value: randomData()},
//                        {name: '湖南', value: randomData()},
//                        {name: '安徽', value: randomData()},
//                        {name: '山东', value: randomData()},
//                        {name: '新疆', value: randomData()},
//                        {name: '江苏', value: randomData()},
//                        {name: '浙江', value: randomData()},
//                        {name: '江西', value: randomData()},
//                        {name: '湖北', value: randomData()},
//                        {name: '广西', value: randomData()},
//                        {name: '甘肃', value: randomData()},
//                        {name: '山西', value: randomData()},
//                        {name: '内蒙古', value: randomData()},
//                        {name: '陕西', value: randomData()},
//                        {name: '吉林', value: randomData()},
//                        {name: '福建', value: randomData()},
//                        {name: '贵州', value: randomData()},
//                        {name: '广东', value: randomData()},
//                        {name: '青海', value: randomData()},
//                        {name: '西藏', value: randomData()},
//                        {name: '四川', value: randomData()},
//                        {name: '宁夏', value: randomData()},
//                        {name: '海南', value: randomData()},
//                        {name: '台湾', value: randomData()},
//                        {name: '香港', value: randomData()},
//                        {name: '澳门', value: randomData()}
//                    ]
                }
            ]
        };
        chart.setOption(option);
    }
//area();
</script>
</body>
</html>
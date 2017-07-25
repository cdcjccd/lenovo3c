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
	<!--<script data-require-id="echarts/chart/pie" src="/lbyun/lbyun/Public/Admin/static/userlist/pie.js" async=""></script><script data-require-id="echarts/chart/bar" src="/lbyun/lbyun/Public/Admin/static/userlist/bar.js" async=""></script><script data-require-id="echarts/chart/funnel" src="/lbyun/lbyun/Public/Admin/static/userlist/funnel.js" async=""></script><script data-require-id="echarts/chart/line" src="/lbyun/lbyun/Public/Admin/static/userlist/line.js" async=""></script></head>-->
</head>


<body>
<div class="container-fluid">
	<ul class="nav nav-tabs">
		<li class="active"><a href="">商家分析</a></li>
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
				<li>销售商家占比分析</li>
			</ul>
			<div style="width: 100%; float: left;">
				<!-- <input type="button" id='te'  class='btn' name="" value="最近两天"> -->
				<a href="#" class='btn' id="se7" >最近7天</a>&nbsp;&nbsp;
				<a href="#" class='btn' id="se30" >最近30天</a>
			</div>

			<!--<div id="chartdiv" style="width: 700px; height: 500px; float: left;">-->
			<div id="test" style="width: 650px; height: 500px; float: left; margin-top: 10px;">

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
	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li>销售通路趋势分析</li>
			</ul>
			<div class="row-fluid">
				<div class="span4">
					<div style="width: 100%; float: left;">
						<!-- <input type="button" id='te'  class='btn' name="" value="最近两天"> -->
						<a href="#" class='btn' id="line7" >最近7天</a>&nbsp;&nbsp;
						<a href="#" class='btn' id="line30" >最近30天</a>
					</div>
				</div>
				<div class="span4"></div>
				<div class="span4">
					<div>
						<input class="input-medium" checked="checked" id="allname" type="checkbox" />全部通路&nbsp;&nbsp;&nbsp;&nbsp;
						<select class="input-medium" id="nameName" name="roteName"> <option value="" selected="selected">请选择通路</option> <option value="1">京东</option><option value="2">m5</option><option value="3">苏宁</option><option value="4">m3</option><option value="5">淘宝</option><option value="6">北京移动</option><option value="7">北京联通</option><option value="8">北京平安</option><option value="9">测试</option><option value="10">官网</option><option value="11">电销及银行通路</option><option value="12">深圳平安</option><option value="13">中国移动</option><option value="14">京东电销</option><option value="15">浙江移动</option><option value="16">天猫通路</option><option value="17">京东集采</option></select>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<!--<div id="mainbar" style="height: 300px; -moz-user-select: none; background-color: transparent;" _echarts_instance_="1497941075063">-->
				<div id="mainbar" style="width: 800px; height: 500px; margin-top: 10px;">

				<!--<div style="position: relative; overflow: hidden; width: 1863px; height: 300px;">-->
						<!--<div style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" data-zr-dom-id="bg"></div>-->
						<!--<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="0"></canvas>-->
						<!--<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="1"></canvas>-->
						<!--<canvas style="position: absolute; left: 0px; top: 0px; width: 1863px; height: 300px; -moz-user-select: none;" width="1863" height="300" data-zr-dom-id="_zrender_hover_"></canvas>-->
					<!--</div>-->
				</div>
			</div>
			<div class="row-fluid">
				<table class="table table-bordered">
					<thead id="trendAnalysisTitle">
					<tr></tr>
					<tr>
						<td>时间</td>
						<td>京东</td>
						<td>m5</td>
						<td>苏宁</td>
						<td>m3</td>
						<td>淘宝</td>
						<td>北京移动</td>
						<td>北京联通</td>
						<td>北京平安</td>
						<td>测试</td>
						<td>官网</td>
						<td>电销及银行通路</td>
						<td>深圳平安</td>
						<td>中国移动</td>
						<td>京东电销</td>
						<td>浙江移动</td>
						<td>天猫通路</td>
						<td>京东集采</td>
						<td>总计</td>
					</tr>
					</thead>
					<tbody id="trendAnalysisData">
					<tr></tr>
					<tr>
						<td>2017-06-14</td>
						<td>4372</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>23</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>4395</td>
					</tr>
					<tr></tr>
					<tr>
						<td>2017-06-15</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>22</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>22</td>
					</tr>
					<tr></tr>
					<tr>
						<td>2017-06-16</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>42</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>42</td>
					</tr>
					<tr></tr>
					<tr>
						<td>2017-06-17</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>28</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>28</td>
					</tr>
					<tr></tr>
					<tr>
						<td>2017-06-18</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>30</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>30</td>
					</tr>
					<tr></tr>
					<tr>
						<td>2017-06-19</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>8</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>8</td>
					</tr>
					<tr></tr>
					<tr>
						<td>2017-06-20</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
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
                url: "<?php echo U('Admin/SaleAnalyze/route');?>",
                data: $('#searchForm').serialize(),
                success: function(res){
//                alert( res );
//                alert(1)
                    var name = new Array();
                    for ( var i = 0 ; i < res.data.length ; i++) {
                        name[i] = res.data[i].name;
                    }
//                alert( res.data );
                    pie (res.data , name , day);
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
	    var url = "<?php echo U('Admin/SaleAnalyze/route');?>?day=" + '7';
        pie_ajax(url,day);
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
        var url = "<?php echo U('Admin/SaleAnalyze/route');?>?day=" + '7'
        pie_ajax(url,day);
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
        var url = "<?php echo U('Admin/SaleAnalyze/route');?>?day=" + '30'
        pie_ajax(url,day);
	})

	/**
	 *  ajax方法 ,带条件查询数据
	 */
 	function pie_ajax(url,day){
        $.ajax({
            url: url,

            success: function(xhr){
//                var arr = new Array()
                var name = new Array()
                for( var i = 0 ; i < xhr.length ; i++ ){
//                    arr[i] = { "name":xhr[i].name , "value":xhr[i].value}
                    name[i] = xhr[i].name
                }
                pie(xhr,name,day)
//				columnar(name)
            }
        })
	}

    /**
	 * pie 图显示
     * @param xhr  后台数据
     * @param name	后天数据名称
     */
	function pie(xhr,name,day){
        var obj = document.getElementById('test')

        var myChart = echarts.init(obj);

        option = {
            title : {
                text: '销售商家分析' + day ,
                subtext: '纯属虚构',
                x:'center'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                left: 'left',
				data: name
//                data: ['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
            },
            series : [
                {
                    name: '访问来源',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '60%'],
					data: xhr,
//                    data:[
//                        {value:335, name:'直接访问'},
//                        {value:310, name:'邮件营销'},
//                        {value:234, name:'联盟广告'},
//                        {value:135, name:'视频广告'},
//                        {value:1548, name:'搜索引擎'}
//                    ],
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        myChart.setOption(option);
	}


    /**
	 *  柱状图
     */
	function columnar(name){
		var div= document.getElementById('mainbar')
		var myChart = echarts.init(div);
        myChart.title = '堆叠条形图';

        info = {
            tooltip : {
                trigger: 'axis',
                axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                    type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                }
            },
            legend: {
                data: ['直接访问', '邮件营销','联盟广告','视频广告','搜索引擎']
//				data: name
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis:  {
                type: 'value'
            },
            yAxis: {
                type: 'category',
                data: ['周一','周二','周三','周四','周五','周六','周日']
            },
            series: [
                {
                    name: '直接访问',
                    type: 'bar',
                    stack: '总量',
                    label: {
                        normal: {
                            show: true,
                            position: 'insideRight'
                        }
                    },
                    data: [320, 302, 301, 334, 390, 330, 320]
                },
                {
                    name: '邮件营销',
                    type: 'bar',
                    stack: '总量',
                    label: {
                        normal: {
                            show: true,
                            position: 'insideRight'
                        }
                    },
                    data: [120, 132, 101, 134, 90, 230, 210]
                },
                {
                    name: '联盟广告',
                    type: 'bar',
                    stack: '总量',
                    label: {
                        normal: {
                            show: true,
                            position: 'insideRight'
                        }
                    },
                    data: [220, 182, 191, 234, 290, 330, 310]
                },
                {
                    name: '视频广告',
                    type: 'bar',
                    stack: '总量',
                    label: {
                        normal: {
                            show: true,
                            position: 'insideRight'
                        }
                    },
                    data: [150, 212, 201, 154, 190, 330, 410]
                },
                {
                    name: '搜索引擎',
                    type: 'bar',
                    stack: '总量',
                    label: {
                        normal: {
                            show: true,
                            position: 'insideRight'
                        }
                    },
                    data: [820, 832, 901, 934, 1290, 1330, 1320]
                }
            ]
        };
        myChart.setOption(info);
    }
    columnar(name)
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;"><head>
		<title>
		审核统计 - Powered By Enjoy3C</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="author" content="http://ljz0721cx.iteye.com/">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
	<script src="/lenovo3C/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>

	<link href="/lenovo3C/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet" />
	<!--<script src="/lenovo3C/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>-->
	<!--[if lte IE 6]><!--<link href="/lenjoy/static/bootstrap/bsie/css/bootstrap-ie6.min.css" type="text/css" rel="stylesheet" />-->
	<script src="/lenjoy/static/bootstrap/bsie/js/bootstrap-ie.min.js" type="text/javascript"></script><![endif]-->

	<!--<link href="/lenovo3C/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet" />-->
	<script src="/lenovo3C/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>

	<script src="/lenovo3C/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>



		<!--  需要添加百度统计分析-->
	<script src="/lenovo3C/Public/Admin/static/userlist/echarts/echarts.js"></script>

<meta name="decorator" content="default">
	<style>
		th{
			color: #ffffff;
			background: rgb(68,142,205);
		}
	</style>
	<!--<script data-require-id="echarts/chart/pie" src="auditStatsIndex_data/pie.js" async=""></script><script data-require-id="echarts/chart/bar" src="auditStatsIndex_data/bar.js" async=""></script><script data-require-id="echarts/chart/funnel" src="auditStatsIndex_data/funnel.js" async=""></script><script data-require-id="echarts/chart/line" src="auditStatsIndex_data/line.js" async=""></script></head>-->
	<body>
		
	<div class="container-fluid">
		<ul class="nav nav-tabs">
			<li class="active"><a href="">审核统计</a></li>
		</ul>
		<div class="row-fluid">
			<div class="span12">
				<ul class="breadcrumb">
					<li>整体状态： 
							
							
							
							
								<h3 class="text-warning">差等</h3>
							
						

					</li>
				</ul>
				<div class="row-fluid">
					<div class="span6">
						<div id="mainpie" style="height: 300px; margin-top: 10px; -moz-user-select: none; cursor: default; background-color: rgba(0, 0, 0, 0);" _echarts_instance_="1499498682361"><div style="position: relative; overflow: hidden; width: 739px; height: 300px;"><div style="position: absolute; left: 0px; top: 0px; width: 739px; height: 300px; -moz-user-select: none;" data-zr-dom-id="bg"></div><canvas style="position: absolute; left: 0px; top: 0px; width: 739px; height: 300px; -moz-user-select: none;" width="806" height="327" data-zr-dom-id="0"></canvas><canvas style="position: absolute; left: 0px; top: 0px; width: 739px; height: 300px; -moz-user-select: none;" width="806" height="327" data-zr-dom-id="1"></canvas><canvas style="position: absolute; left: 0px; top: 0px; width: 739px; height: 300px; -moz-user-select: none;" width="806" height="327" data-zr-dom-id="_zrender_hover_"></canvas></div></div>
					</div>
					<div class="span6">
						<p>本月总计审核数量：348</p>
						<input name="auditNumber" value="348" id="auditNumber" type="hidden">
						<p>
							平均审核时间：
							
								
								
								
									</p><h3 class="text-warning">4时4分13秒</h3>
								
							
						<p></p>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>审核时间</th>
									<th>订单数量</th>
									<th>占比</th>
								</tr>
							</thead>
							<tbody id="auditAvgList"><tr><td>&lt; 5分钟</td><td>26</td><td>0.07471264367816093</td></tr><tr><td>&lt; 10分钟</td><td>26</td><td>0.07471264367816093</td></tr><tr><td>&lt; 30分钟</td><td>60</td><td>0.1724137931034483</td></tr><tr><td>&gt; 30分钟</td><td>164</td><td>0.47126436781609193</td></tr></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<ul class="breadcrumb">
					<li>平均审核时间日趋势图</li>
				</ul>
				<div class="row-fluid">
					<div id="mainbar" style="height: 300px; -moz-user-select: none; background-color: rgba(0, 0, 0, 0); cursor: default;" _echarts_instance_="1499498682362"><div style="position: relative; overflow: hidden; width: 1510px; height: 300px;"><div style="position: absolute; left: 0px; top: 0px; width: 1510px; height: 300px; -moz-user-select: none;" data-zr-dom-id="bg"></div><canvas style="position: absolute; left: 0px; top: 0px; width: 1510px; height: 300px; -moz-user-select: none;" width="1647" height="327" data-zr-dom-id="0"></canvas><canvas style="position: absolute; left: 0px; top: 0px; width: 1510px; height: 300px; -moz-user-select: none;" width="1647" height="327" data-zr-dom-id="1"></canvas><canvas style="position: absolute; left: 0px; top: 0px; width: 1510px; height: 300px; -moz-user-select: none;" width="1647" height="327" data-zr-dom-id="_zrender_hover_"></canvas></div></div>
				</div>
			</div>
		</div>
	</div>
	<!--<script src="auditStatsIndex_data/echarts.js" type="text/javascript"></script>-->

	<script type="text/javascript">

        /**
         *  默认显示 7天数据
         */
        $(document).ready(function(){
            $('#se7').attr({
                'disabled':'disabled'
            })
            var day = 7 + '天';
            var url1 = "<?php echo U('Admin/SaleAnalyze/route');?>?day=" + '7';
            pie_ajax(url1,day);
            var url2 = "<?php echo U('Admin/SaleAnalyze/columnar');?>";
            column_ajax(url2)
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
                    var name = new Array()
                    for( var i = 0 ; i < xhr.length ; i++ ){
//                    arr[i] = { "name":xhr[i].name , "value":xhr[i].value}
                        name[i] = xhr[i].name
                    }
                    pie(xhr,name,day)
                    pieHtml(xhr);
//				columnar(xhr.time)
                }
            })
        }

        function column_ajax (url) {
            $.ajax({
                url: url,
                dataType:'json',
                success: function(data){
//			    alert(data)
                    columnar(data.time)
                }
            })
        }
        /**
         * 	替换扇形图右侧数据
         */
        function pieHtml(info) {
            var str = '';
            for (var i=0 ; i < info.length ; i++) {
                str +=  "<tr><td>"+info[i].name+"</td><td>"+info[i].value+"</td></tr>";
            }
            $('#salename').html(str);
        }

        /**
         * pie 图显示
         * @param xhr  后台数据
         * @param name	后天数据名称
         */
        function pie(xhr,name,day){
            var obj = document.getElementById('mainpie')

            var myChart = echarts.init(obj);

            option = {
                title : {
//                    text: '通路分析' + day ,
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
        function columnar(xhr){
            var div= document.getElementById('mainbar')
            var myChart = echarts.init(div);
            myChart.title = '堆叠条形图';
//alert(xhr)
            option = {
                title: {
                    text: '',
                    subtext: '纯属虚构'
                },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data:['出险量']
//                data:['最高气温','最低气温']
                },
                toolbox: {
                    show: true,
                    feature: {
                        dataZoom: {
                            yAxisIndex: 'none'
                        },
                        dataView: {readOnly: false},
                        magicType: {type: ['line', 'bar']},
                        restore: {},
                        saveAsImage: {}
                    }
                },
                xAxis:  {
                    type: 'category',
                    boundaryGap: false,
                    data: ['周一','周二','周三','周四','周五','周六','周日']
                },
                yAxis: {
                    type: 'value',
                    axisLabel: {
                        formatter: '{value}'
//                    formatter: '{value} °C'
                    }
                },
                series: [
//                {
//                    name:'最高气温',
//                    type:'line',
//                    data:[11, 11, 15, 13, 12, 13, 10],
//                    markPoint: {
//                        data: [
//                            {type: 'max', name: '最大值'},
//                            {type: 'min', name: '最小值'}
//                        ]
//                    },
//                    markLine: {
//                        data: [
//                            {type: 'average', name: '平均值'}
//                        ]
//                    }
//                },
                    {
                        name:'出险量',
                        type:'line',
                        data:[100, 300, 222, 511, 332, 212, 320],
                        markPoint: {
                            data: [
                                {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
                            ]
                        },
                        markLine: {
                            data: [
                                {type: 'average', name: '平均值'},
                                [{
                                    symbol: 'none',
                                    x: '90%',
                                    yAxis: 'max'
                                }, {
                                    symbol: 'circle',
                                    label: {
                                        normal: {
                                            position: 'start',
                                            formatter: '最大值'
                                        }
                                    },
                                    type: 'max',
                                    name: '最高点'
                                }]
                            ]
                        }
                    }
                ]
            };
            myChart.setOption(option);
        }
        //    columnar()
	</script>

	
</body></html>
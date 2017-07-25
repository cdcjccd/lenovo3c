<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:auto;">
<head>
    <title>
        产品销售统计</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-store"><meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="author" content="http://ljz0721cx.iteye.com/">
    <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9,IE=10">
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-1.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_005.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-ui-1.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery-migrate-1.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/jquery.css" type="text/css" rel="stylesheet">
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_006.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="/yjc/lby/Public/Admin/static/userlist/bootstrap.js" type="text/javascript"></script>

    <script src="/yjc/lby/Public/Admin/static/userlist/jquery_002.js"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/mustache.js" type="text/javascript"></script>
    <link href="/yjc/lby/Public/Admin/static/userlist/lenjoy.css" type="text/css" rel="stylesheet">
    <script src="/yjc/lby/Public/Admin/static/userlist/lenjoy.js" type="text/javascript"></script>
    <script src="/yjc/lby/Public/Admin/static/userlist/My97DatePicker/WdatePicker.js"></script>

 
    <meta name="decorator" content="default">

        <!--<![endif]-->
        <script type="text/javascript" src="/yjc/lby/Public/Admin/dati/js/jquery-1.11.0.min.js"></script>

      

       
       <!--圆饼插件 -->
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="/yjc/lby/Public/Admin/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/yjc/lby/Public/Admin/amcharts/pie.js" type="text/javascript"></script>
        
        <!-- 趋势图 -->
        <script src="/yjc/lby/Public/Admin/amcharts/jquery.flot.js" type="text/javascript"></script>
        <script src="/yjc/lby/Public/Admin/amcharts/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="/yjc/lby/Public/Admin/amcharts/jquery.flot.stack.js" type="text/javascript"></script>
   


  
</head>
<body>
<div class="container-fluid">
    <ul class="nav nav-tabs">
        <li class="active"><a href="">产品分析</a></li>
    </ul>
    <div id="warning" style="display: none" class="alert alert-warning" aria-hidden="true">
        <a class="closed close" href="#">×</a> <strong>提示！</strong>开始时间和结束时间都必须选择,只允许查询时间间隔不超过30天的数据!
    </div>



    <form id="searchForm" class="breadcrumb form-search" action="#" method="post">

        <div>
            <label>开始时间：</label>
           <input type="text"  class="required Wdate span2" maxlength="50" onClick="WdatePicker()" name="create_time">

            <label>结束时间：</label>
            <input type="text"  class="required Wdate span2" maxlength="50" onClick="WdatePicker()" name="end_time">
            <input id="btnSubmit" class="btn btn-primary" value="查询" onclick="reSearch();return false;" type="submit">
        </div>
    </form>
   
    <input id="day" name="day" value="7" type="hidden">
    <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
                <li>销售产品占比分析</li>
            </ul>
            
            <div>
                <a href="javascript:void(0)" class="btn disabled" id="ratio7" onclick="showSaleProductRatioAnalysisPie('7')">最近7天</a>&nbsp;&nbsp;
                <a href="javascript:void(0)" class="btn" id="ratio30" onclick="showSaleProductRatioAnalysisPie('30')">最近30天</a>
            </div>
            <div class="row-fluid">
                <div class="span8">

                    <div id="chartdiv" style="width: 1000px; height: 400px;"></div>
                        
                </div>
                <div class="span4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>产品</th>
                            <th>销量</th>
                        </tr>
                        </thead>
                        <tbody id="saleProduct">
                          <?php if(is_array($qing)): foreach($qing as $key=>$ling): ?><tr>
                                <td><?php echo ($ling['product_name']); ?></td>
                                <td>4039</td></tr><tr>
                            </tr><?php endforeach; endif; ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   

    <div class="row-fluid">
        <div class="span12">

            <ul class="breadcrumb">
                <li>销售产品趋势分析</li>
            </ul>

            <div class="row-fluid">
                <div class="span4">
                    <div>
                        &nbsp;&nbsp; <a href="javascript:void(0)" class="btn disabled" id="trend7" onclick="showSaleProductTreadAnalysisBar('7');return false">最近7天</a>&nbsp;&nbsp;
                        <a href="javascript:void(0)" class="btn" id="trend30" onclick="showSaleProductTreadAnalysisBar('30');return false">最近30天</a>
                    </div>

                     <div class="span4">
                        <div id="statsChart"  style="width:1200px; height: 300px;"></div>
                     <!--    <div id="chartdivsq" ></div> -->
                     </div>
                </div>

           
                 <div class="span4">
                    <div>
                        <input class="input-medium" checked="checked" id="allProduct" type="checkbox">全部产品&nbsp;&nbsp;&nbsp;&nbsp;
                        <select class="input-medium"  name="product_name" >
                        <option value="" selected="selected">请选择产品</option>
                         <?php if(is_array($qing)): foreach($qing as $key=>$val): ?><option value="<?php echo ($val['product_name']); ?>"><?php echo ($val['product_name']); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>

            </div>
      
            <div class="row-fluid">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>产品</th>
                        <th>销量</th>
                    </tr>
                    </thead>
                    <tbody id="trendAnalysisData">
                        <?php if(is_array($market)): foreach($market as $key=>$ring): ?><tr>
                               <td><?php echo ($ring['end_time']); ?></td>
                               <td></td>
                           </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

      <script type="text/javascript">

           //  圆柱
            var chart;
            var legend;
            var chartData = [
                {
                    "countryas": "【联想乐享3c】平板电脑/MID意外保1年",
                    "valueds": 26
                },
                {
                    "countryas": "【联想乐享3c】手机意外保1年",
                    "valueds": 201
                },
                {
                    "countryas": "DIY上门验机安装服务",
                    "valueds": 65
                },
                {
                    "countryas": "家庭清洗服务",
                    "valueds": 39
                },
                {
                    "countryas": "<?php echo ($king['product_name']); ?>",
                    "valueds": 19
                },
                {
                    "countryas": "免费上门取修（1年延保）",
                    "valueds": 10
                },
                {
                    "countryas": "三星意外保一年",
                    "valueds": 20
                },
                {
                    "countryas": "格力空凋",
                    "valueds": 99
                }
            ];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "countryas";
                chart.valueField = "valueds";
                chart.outlineColor = "#f7fff3";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                chart.balloonText = "[[title]]<br><span style='font-size:10px'><b>[[valueds]]</b> ([[percents]]%)</span>";
                // this makes the chart 3D
                chart.depth3D = 15;
                chart.angle = 30;
                // WRITE
                chart.write("chartdiv");
            });


            // 趋势图
        var visits = [[1, 150], [2, 30], [3, 59], [4, 23],[5, 5],[6, 65],[7, 61]];
        
        var plot = $.plot($("#statsChart"),
            [ { data: visits, label: "Signups"},
             ], {
                series: {
                    lines: { show: true,
                            lineWidth: 1,
                            fill: true, 
                            fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.09 } ] }
                         },
                    points: { show: true, 
                             lineWidth: 2,
                             radius: 3
                         },
                    shadowSize: 0,
                    stack: false
                },
                grid: { hoverable: true, 
                       clickable: true, 
                       tickColor: "#f9f9f9",
                       borderWidth: 0
                    },
                legend: {
                        // show: false
                        labelBoxBorderColor: "#fff"
                    },  
                colors: ["#a7b5c5", "#30a0eb"],
                xaxis: {
                    ticks: [[1, "<?php echo ($king[0]); ?>"], [2, "<?php echo ($king[1]); ?>"], [3, "<?php echo ($king[2]); ?>"], [4,"<?php echo ($king[3]); ?>"], [5,"<?php echo ($king[4]); ?>"], [6,"<?php echo ($king[5]); ?>"],
                           [7,"<?php echo ($king[6]); ?>"]],
                    font: {
                        size: 12,
                        family: "Open Sans, Arial",
                        variant: "small-caps",
                        color: "#9da3a9"
                    }
                },
                yaxis: {
                    ticks:3, 
                    tickDecimals: 0,
                    font: {size:12, color: "#9da3a9"}
                }
             });
        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y - 30,
                left: x - 50,
                color: "#fff",
                padding: '2px 5px',
                'border-radius': '6px',
                'background-color': '#000',
                opacity: 0.80
            }).appendTo("body").fadeIn(200);
        }
        var previousPoint = null;
        $("#statsChart").bind("plothover", function (event, pos, item) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(0),
                        y = item.datapoint[1].toFixed(0);
                    var month = item.series.xaxis.ticks[item.dataIndex].label;
                    showTooltip(item.pageX, item.pageY,
                                item.series.label + " of " + y);
                }
            }
            else{
                $("#tooltip").remove();
                previousPoint = null;
            }
        });
        </script>
</html>
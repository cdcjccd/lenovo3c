<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="/lenovo3C/Public/Admin/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/lenovo3C/Public/Admin/amcharts/pie.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            var chart;
            var legend;

            var chartData = [
                {
                    "country": "京东",
                    "value": 260
                },
                {
                    "country": "天猫",
                    "value": 90
                },
                {
                    "country": "淘宝",
                    "value": 65
                },
                {
                    "country": "苏宁",
                    "value": 39
                },
                {
                    "country": "网易",
                    "value": 19
                },
                {
                    "country": "亚马逊",
                    "value": 10
                },
                {
                    "country": "唯品会",
                    "value": 20
                },
                {
                    "country": "呵呵",
                    "value": 99
                }
            ];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "value";
                chart.outlineColor = "#f7fff3";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                // this makes the chart 3D
                chart.depth3D = 15;
                chart.angle = 30;

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    </head>
    
    <body>
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
    </body>

</html>
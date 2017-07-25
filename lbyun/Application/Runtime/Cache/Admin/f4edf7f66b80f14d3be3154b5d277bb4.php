<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>圆饼图</title>
    <link rel="stylesheet" href="/yjc/lby/PublicAdmin/amcharts/style.css" type="text/css">
    <script src="/yjc/lby/PublicAdmin/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="/yjc/lby/PublicAdmin/amcharts/pie.js" type="text/javascript"></script>

    <script type="text/javascript">
        var chart;
        var legend;

        var chartData = [
            {
                "country": "Lithuania",
                "value": 260
            },
            {
                "country": "Ireland",
                "value": 201
            },
            {
                "country": "Germany",
                "value": 65
            },
            {
                "country": "Australia",
                "value": 39
            },
            {
                "country": "UK",
                "value": 19
            },
            {
                "country": "Latvia",
                "value": 10
            },
            {
                "country": "test",
                "value": 20
            },
            {
                "country": "123",
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
<div id="chartdiv" style="width: 1013px; height: 400px;"></div>
</body>

</html>
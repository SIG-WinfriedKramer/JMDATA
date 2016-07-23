<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="no">
    <link rel="shortcut icon" href="images/logo.jpg">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries--><!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/hm.js?4bad1df23f079e0d12bdbef5e65b072f"></script>
    <script type="text/javascript" src="js/pace.min.js"></script>
    <script type="text/javascript">try {
        window.AG_onLoad = function (func) {
            if (window.addEventListener) {
                window.addEventListener('DOMContentLoaded', func);
            }
        };
        window.AG_removeElementById = function (id) {
            var element = document.getElementById(id);
            if (element && element.parentNode) {
                element.parentNode.removeChild(element);
            }
        };
        window.AG_removeElementBySelector = function (selector) {
            if (!document.querySelectorAll) {
                return;
            }
            var nodes = document.querySelectorAll(selector);
            if (nodes) {
                for (var i = 0; i < nodes.length; i++) {
                    if (nodes[i] && nodes[i].parentNode) {
                        nodes[i].parentNode.removeChild(nodes[i]);
                    }
                }
            }
        };
        window.AG_each = function (selector, fn) {
            if (!document.querySelectorAll) return;
            var elements = document.querySelectorAll(selector);
            for (var i = 0; i < elements.length; i++) {
                fn(elements[i]);
            }
            ;
        };
        var AG_removeParent = function (el, fn) {
            while (el && el.parentNode) {
                if (fn(el)) {
                    el.parentNode.removeChild(el);
                    return;
                }
                el = el.parentNode;
            }
        };
    } catch (ex) {
        console.error('Error executing AG js: ' + ex);
    }</script>
    <style type="text/css">div[id="bdyx_float_rb"] {
        display: none !important;
    }</style>
    <style>@font-face {
        font-family: "noto-thin";
        src: local("Microsoft Yahei");
    }

    @font-face {
        font-family: "noto-light";
        src: local("Microsoft Yahei");
    }</style>
    <script id="font-hack" type="text/javascript">if (/windows/i.test(navigator.userAgent)) {
        var el = document.createElement('style');
        el.innerHTML = ''
                + '@font-face {font-family:"noto-thin";src:local("Microsoft Yahei");}'
                + '@font-face {font-family:"noto-light";src:local("Microsoft Yahei");}';
        document.head.insertBefore(el, document.getElementById('font-hack'));
    }
    </script>
    <title>ECharts Examples</title>
    <link rel="stylesheet" href="css/perfect-scrollbar.min.css">
    <!--这个js文件生成的快速索引不能够正常显示有大量的乱码-->
    <!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
    <style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
    .en-markup-crop-options {
        top: 18px !important;
        left: 50% !important;
        margin-left: -100px !important;
        width: 200px !important;
        border: 2px rgba(255, 255, 255, .38) solid !important;
        border-radius: 4px !important;
    }

    .en-markup-crop-options div div:first-of-type {
        margin-left: 0px !important;
    }
    </style>
    <!--<link type="text/css" rel="stylesheet"-->
    <!--href="chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/css/searchhelper.css">-->
</head>
<!--[if lte IE 8]>
<body class="lower-ie">
<![endif]-->
<!--[if (gt IE 8)|!(IE)]>
<body class="undefined"></body><![endif]-->
<body class=" pace-done">
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99"
         style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>
<!--<div id="lowie-main"><img src="./images/forie.png" alt="ie tip"></div>-->
<div id="main">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false" class="navbar-toggle collapsed"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="" class="navbar-brand"><img src="images/logo.jpg"
                                                     alt="echarts logo"
                                                     class="navbar-logo"></a></div>
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li id="nav-index"><a href="index1.html">首页</a></li>
                    <li id="nav-doc" class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">文档<b
                            class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index1.html">教程</a></li>
                            <li><a href="index1.html">API</a></li>
                            <li><a href="index1.html">配置项手册</a></li>
                            <li><a href="index1.html">Changelog</a></li>
                        </ul>
                    </li>
                    <li id="nav-examples" class="active"><a href="index1.html">实例</a></li>
                    <li id="nav-download" class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">下载<b
                            class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index1.html">下载</a></li>
                            <li><a href="index1.html">在线构建</a></li>
                            <li><a href="index1.html">地图</a></li>
                            <li><a href="index1.html">主题下载</a></li>
                            <li><a href="index1.html">主题构建</a></li>
                        </ul>
                    </li>
                    <li id="nav-github"><a href="https://github.com/ecomfe/echarts" target="_blank">GitHub</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="nav-mask" style="display: none;"></div>
    <div id="nav-layer" class="ps-container ps-active-y" data-ps-id="0f9bb302-584e-7860-d638-8d9000850076"
         style="display: none; top: 51px;">
        <ul class="chart-list">
            <li><a href="demo.html#bubble-gradient"><img
                    src="images/scatter/bubble-gradient.png"></a></li>
            <li><a href="demo.html#effectScatter-bmap"><img
                    src="images/scatter/effectScatter-bmap.png"></a></li>
            <li><a href="demo.html#effectScatter-map"><img
                    src="images/scatter/effectScatter-map.png"></a></li>
            <li><a href="demo.html#map-parallel-prices"><img
                    src="images/scatter/map-parallel-prices.png"></a></li>
            <li><a href="demo.html#scatter-anscombe-quartet"><img
                    src="images/scatter/scatter-anscombe-quartet.png"></a></li>
            <li><a href="demo.html#scatter-aqi-color"><img
                    src="images/scatter/scatter-aqi-color.png"></a></li>
            <li><a href="demo.html#scatter-large"><img
                    src="images/scatter/scatter-large.png"></a></li>
            <li><a href="demo.html#scatter-life-expectancy-timeline"><img
                    src="images/scatter/scatter-life-expectancy-timeline.png"></a></li>
            <li><a href="demo.html#scatter-map-brush"><img
                    src="images/scatter/scatter-map-brush.png"></a></li>
            <li><a href="demo.html#scatter-map"><img src="images/scatter/scatter-map.png"></a>
            </li>
            <li><a href="demo.html#scatter-nutrients"><img
                    src="images/scatter/scatter-nutrients.png"></a></li>
            <li><a href="demo.html#scatter-painter-choice"><img
                    src="images/scatter/scatter-painter-choice.png"></a></li>
            <li><a href="demo.html#scatter-polar-punchCard"><img
                    src="images/scatter/scatter-polar-punchCard.png"></a></li>
            <li><a href="demo.html#scatter-punchCard"><img
                    src="images/scatter/scatter-punchCard.png"></a></li>
            <li><a href="demo.html#scatter-single-axis"><img
                    src="images/scatter/scatter-single-axis.png"></a></li>
            <li><a href="demo.html#scatter-weibo"><img
                    src="images/scatter/scatter-weibo.png"></a></li>
            <li><a href="demo.html#scatter-weight"><img
                    src="images/scatter/scatter-weight.png"></a></li>
            <li><a href="demo.html#scatter-world-population"><img
                    src="images/scatter/scatter-world-population.png"></a></li>
        </ul>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 1px;">
            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 2px; right: 3px; height: 350px;">
            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 120px;"></div>
        </div>
    </div>
    <div id="left-chart-nav" class="ps-container ps-active-y" data-ps-id="a2a98f50-e0aa-d83d-f321-ad8c912ed804">
        <ul>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-scatter" href="#chart-type-scatter">
                <div class="chart-icon"></div>
                <div class="chart-name">散点图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-line" href="#chart-type-line">
                <div class="chart-icon"></div>
                <div class="chart-name">折线图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-bar" href="#chart-type-bar">
                <div class="chart-icon"></div>
                <div class="chart-name">柱状图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-map" href="#chart-type-map">
                <div class="chart-icon"></div>
                <div class="chart-name">地图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-pie" href="#chart-type-pie">
                <div class="chart-icon"></div>
                <div class="chart-name">饼图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-radar" href="#chart-type-radar">
                <div class="chart-icon"></div>
                <div class="chart-name">雷达图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-candlestick" href="#chart-type-candlestick">
                <div class="chart-icon"></div>
                <div class="chart-name">k线图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-boxplot" href="#chart-type-boxplot">
                <div class="chart-icon"></div>
                <div class="chart-name">箱线图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-heatmap" href="#chart-type-heatmap">
                <div class="chart-icon"></div>
                <div class="chart-name">热力图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-graph" href="#chart-type-graph">
                <div class="chart-icon"></div>
                <div class="chart-name">关系图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-treemap" href="#chart-type-treemap">
                <div class="chart-icon"></div>
                <div class="chart-name">矩形树图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-parallel" href="#chart-type-parallel">
                <div class="chart-icon"></div>
                <div class="chart-name">平行坐标</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-sankey" href="#chart-type-sankey">
                <div class="chart-icon"></div>
                <div class="chart-name">桑基图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-funnel" href="#chart-type-funnel">
                <div class="chart-icon"></div>
                <div class="chart-name">漏斗图</div>
            </a></li>
            <li class=""><a class="left-chart-nav-link" id="left-chart-nav-gauge" href="#chart-type-gauge">
                <div class="chart-icon"></div>
                <div class="chart-name">仪表盘</div>
            </a></li>
        </ul>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 617px; right: 3px;">
            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 469px;"></div>
        </div>
    </div>
    <div id="explore-container">
        <div class="chart-list-panel"><h3 class="chart-type-head" id="chart-type-scatter">散点图</h3>
            <div class="row" id="chart-row-scatter">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bubble-gradient"><h4 class="chart-title">
                        气泡图</h4><img class="chart-area"
                                     data-original="imags/scatter/bubble-gradient.png"
                                     src="images/scatter/bubble-gradient.png"
                                     style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#effectScatter-bmap"><h4
                            class="chart-title">全国主要城市空气质量 - 百度地图</h4><img class="chart-area"
                                                                           data-original="http://echarts.baidu.com/gallery/data/thumb/effectScatter-bmap.png"
                                                                           src="images/scatter/effectScatter-bmap.png"
                                                                           style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#effectScatter-map"><h4 class="chart-title">
                        全国主要城市空气质量</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/effectScatter-map.png"
                                            src="images/scatter/effectScatter-map.png"
                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#map-parallel-prices"><h4
                            class="chart-title">Prices and Earnings 2012</h4><img class="chart-area"
                                                                                  data-original="http://echarts.baidu.com/gallery/data/thumb/map-parallel-prices.png"
                                                                                  src="images/scatter/map-parallel-prices.png"
                                                                                  style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-anscombe-quartet"><h4
                            class="chart-title">Anscombe's quartet</h4><img class="chart-area"
                                                                            data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-anscombe-quartet.png"
                                                                            src="images/scatter/scatter-anscombe-quartet.png"
                                                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-aqi-color"><h4 class="chart-title">
                        Scatter Aqi Color</h4><img class="chart-area"
                                                   data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-aqi-color.png"
                                                   src="images/scatter/scatter-aqi-color.png"
                                                   style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-large"><h4 class="chart-title">
                        大规模散点图</h4><img class="chart-area"
                                        data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-large.png"
                                        src="images/scatter/scatter-large.png"
                                        style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-life-expectancy-timeline"><h4
                            class="chart-title">各国人均寿命与GDP关系演变</h4><img class="chart-area"
                                                                        data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-life-expectancy-timeline.png"
                                                                        src="images/scatter/scatter-life-expectancy-timeline.png"
                                                                        style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-map-brush"><h4 class="chart-title">
                        Scatter Map Brush</h4><img class="chart-area"
                                                   data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-map-brush.png"
                                                   src="images/scatter/scatter-map-brush.png"
                                                   style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-map"><h4 class="chart-title">
                        全国主要城市空气质量</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-map.png"
                                            src="images/scatter/scatter-map.png"
                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-nutrients"><h4 class="chart-title">
                        Scatter Nutrients</h4><img class="chart-area"
                                                   data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-nutrients.png"
                                                   src="images/scatter/scatter-nutrients.png"
                                                   style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-painter-choice"><h4
                            class="chart-title">Master Painter Color Choices Throughout History</h4><img
                            class="chart-area"
                            data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-painter-choice.png"
                            src="images/scatter/scatter-painter-choice.png"
                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-polar-punchCard"><h4
                            class="chart-title">Punch Card of Github</h4><img class="chart-area"
                                                                              data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-polar-punchCard.png"
                                                                              src="images/scatter/scatter-polar-punchCard.png"
                                                                              style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-punchCard"><h4 class="chart-title">
                        Punch Card of Github</h4><img class="chart-area"
                                                      data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-punchCard.png"
                                                      src="images/scatter/scatter-punchCard.png"
                                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-single-axis"><h4
                            class="chart-title">单轴散点图</h4><img class="chart-area"
                                                               data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-single-axis.png"
                                                               src="images/scatter/scatter-single-axis.png"
                                                               style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-weibo"><h4 class="chart-title">
                        微博签到数据点亮中国</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-weibo.png"
                                            src="images/scatter/scatter-weibo.png"
                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-weight"><h4 class="chart-title">
                        男性女性身高体重分布</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-weight.png"
                                            src="images/scatter/scatter-weight.png"
                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-world-population"><h4
                            class="chart-title">World Population (2011)</h4><img class="chart-area"
                                                                                 data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-world-population.png"
                                                                                 src="images/scatter/scatter-world-population.png"
                                                                                 style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-line">折线图</h3>
            <div class="row" id="chart-row-line">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#area-rainfall"><h4 class="chart-title">
                        雨量流量关系图</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/area-rainfall.png"
                                         src="images/lineChart/area-rainfall.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#area-simple"><h4 class="chart-title">
                        大数据量面积图</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/area-simple.png"
                                         src="images/lineChart/area-simple.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#area-stack"><h4 class="chart-title">
                        堆叠区域图</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/area-stack.png"
                                       src="images/lineChart/area-stack.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#confidence-band"><h4 class="chart-title">
                        Confidence Band</h4><img class="chart-area"
                                                 data-original="http://echarts.baidu.com/gallery/data/thumb/confidence-band.png"
                                                 src="images/lineChart/confidence-band.png"
                                                 style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#dynamic-data2"><h4 class="chart-title">动态数据
                        + 时间坐标轴</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/dynamic-data2.png"
                                         src="images/lineChart/dynamic-data2.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#grid-multiple"><h4 class="chart-title">
                        雨量流量关系图</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/grid-multiple.png"
                                         src="images/lineChart/grid-multiple.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-aqi"><h4 class="chart-title">Beijing
                        AQI</h4><img class="chart-area"
                                     data-original="http://echarts.baidu.com/gallery/data/thumb/line-aqi.png"
                                     src="images/lineChart/line-aqi.png"
                                     style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-easing"><h4 class="chart-title">Line
                        Easing</h4><img class="chart-area"
                                        data-original="http://echarts.baidu.com/gallery/data/thumb/line-easing.png"
                                        src="images/lineChart/line-easing.png"
                                        style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-log"><h4 class="chart-title">
                        对数轴示例</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/line-log.png"
                                       src="images/lineChart/line-log.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-marker"><h4 class="chart-title">
                        未来一周气温变化</h4><img class="chart-area"
                                          data-original="http://echarts.baidu.com/gallery/data/thumb/line-marker.png"
                                          src="images/lineChart/line-marker.png"
                                          style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-polar"><h4 class="chart-title">
                        极坐标双数值轴</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/line-polar.png"
                                         src="images/lineChart/line-polar.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-polar2"><h4 class="chart-title">
                        极坐标双数值轴</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/line-polar2.png"
                                         src="images/lineChart/line-polar2.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-sections"><h4 class="chart-title">
                        一天用电量分布</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/line-sections.png"
                                         src="images/lineChart/line-sections.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-stack"><h4 class="chart-title">
                        折线图堆叠</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/line-stack.png"
                                       src="images/lineChart/line-stack.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-step"><h4 class="chart-title">Step
                        Line</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/line-step.png"
                                      src="images/lineChart/line-stack.png"
                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#line-y-category"><h4 class="chart-title">
                        Line Y Category</h4><img class="chart-area"
                                                 data-original="http://echarts.baidu.com/gallery/data/thumb/line-y-category.png"
                                                 src="images/lineChart/line-y-category.png"
                                                 style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-bar">柱状图</h3>
            <div class="row" id="chart-row-bar">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-animation-delay"><h4
                            class="chart-title">柱状图动画延迟</h4><img class="chart-area"
                                                                 data-original="http://echarts.baidu.com/gallery/data/thumb/bar-animation-delay.png"
                                                                 src="images/histogram/bar-animation-delay.png"
                                                                 style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-brush"><h4 class="chart-title">
                        柱状图框选</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/bar-brush.png"
                                       src="images/histogram/bar-brush.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-negative"><h4 class="chart-title">
                        正负条形图</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/bar-negative.png"
                                       src="images/histogram/bar-negative.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-negative2"><h4 class="chart-title">
                        交错正负轴标签</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/bar-negative2.png"
                                         src="images/histogram/bar-negative2.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-stack"><h4 class="chart-title">
                        堆叠柱状图</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/bar-stack.png"
                                       src="images/histogram/bar-stack.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="second.php" target="_blank"><h4 class="chart-title">
                        坐标轴刻度与标签对齐</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/bar-tick-align.png"
                                            src="images/histogram/bar-tick-align.png"
                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-waterfall"><h4 class="chart-title">
                        深圳月最低生活费组成（单位:元）</h4><img class="chart-area"
                                                  data-original="http://echarts.baidu.com/gallery/data/thumb/bar-waterfall.png"
                                                  src="images/histogram/bar-waterfall.png"
                                                  style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-waterfall2"><h4 class="chart-title">
                        阶梯瀑布图</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/bar-waterfall2.png"
                                       src="images/histogram/bar-waterfall2.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-y-category-stack"><h4
                            class="chart-title">堆叠条形图</h4><img class="chart-area"
                                                               data-original="http://echarts.baidu.com/gallery/data/thumb/bar-y-category-stack.png"
                                                               src="images/histogram/bar-y-category-stack.png"
                                                               style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar-y-category"><h4 class="chart-title">
                        世界人口总量 - 条形图</h4><img class="chart-area"
                                              data-original="http://echarts.baidu.com/gallery/data/thumb/bar-y-category.png"
                                              src="images/histogram/bar-y-category.png"
                                              style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#bar1"><h4 class="chart-title">
                        某地区蒸发量和降水量</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/bar1.png"
                                            src="images/histogram/bar1.png"
                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#dynamic-data"><h4 class="chart-title">
                        动态数据</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/dynamic-data.png"
                                      src="images/histogram/dynamic-data.png"
                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#mix-line-bar"><h4 class="chart-title">
                        折柱混合</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/mix-line-bar.png"
                                      src="images/histogram/mix-line-bar.png"
                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#mix-timeline-finance"><h4
                            class="chart-title">2002全国宏观经济指标</h4><img class="chart-area"
                                                                      data-original="http://echarts.baidu.com/gallery/data/thumb/mix-timeline-finance.png"
                                                                      src="images/histogram/mix-timeline-finance.png"
                                                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#mix-zoom-on-value"><h4 class="chart-title">
                        Mix Zoom On Value</h4><img class="chart-area"
                                                   data-original="http://echarts.baidu.com/gallery/data/thumb/mix-zoom-on-value.png"
                                                   src="images/histogram/mix-zoom-on-value.png"
                                                   style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#multiple-y-axis"><h4 class="chart-title">多
                        Y 轴示例</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/multiple-y-axis.png"
                                       src="images/histogram/multiple-y-axis.png"
                                       style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-map">地图</h3>
            <div class="row" id="chart-row-map">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#geo-lines"><h4 class="chart-title">
                        模拟迁徙</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/geo-lines.png"
                                      src="images/atlas/geo-lines.png"
                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#lines-airline"><h4 class="chart-title">65k+
                        飞机航线</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/lines-airline.png"
                                      src="images/atlas/lines-airline.png"
                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#lines-bmap-bus"><h4 class="chart-title">
                        北京公交路线 - 百度地图</h4><img class="chart-area"
                                               data-original="http://echarts.baidu.com/gallery/data/thumb/lines-bmap-bus.png"
                                               src="images/atlas/lines-bmap-bus.png"
                                               style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#lines-bmap-effect"><h4 class="chart-title">
                        北京公交路线 - 线特效</h4><img class="chart-area"
                                              data-original="http://echarts.baidu.com/gallery/data/thumb/lines-bmap-effect.png"
                                              src="images/atlas/lines-bmap-effect.png"
                                              style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#lines-bmap"><h4 class="chart-title">
                        杭州热门步行路线 - 百度地图</h4><img class="chart-area"
                                                 data-original="http://echarts.baidu.com/gallery/data/thumb/lines-bmap.png"
                                                 src="images/atlas/lines-bmap.png"
                                                 style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#map-china-dataRange"><h4
                            class="chart-title">iphone销量</h4><img class="chart-area"
                                                                  data-original="http://echarts.baidu.com/gallery/data/thumb/map-china-dataRange.png"
                                                                  src="images/atlas/map-china-dataRange.png"
                                                                  style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#map-china"><h4 class="chart-title">Map
                        China</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/map-china.png"
                                       src="images/atlas/map-china.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#map-HK"><h4 class="chart-title">香港18区人口密度
                        （2011）</h4><img class="chart-area"
                                        data-original="http://echarts.baidu.com/gallery/data/thumb/map-HK.png"
                                        src="images/atlas/map-HK.png"
                                        style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#map-locate"><h4 class="chart-title">Map
                        Locate</h4><img class="chart-area"
                                        data-original="http://echarts.baidu.com/gallery/data/thumb/map-locate.png"
                                        src="images/atlas/map-locate.png"
                                        style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#map-province"><h4 class="chart-title">34
                        省切换查看</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/map-province.png"
                                       src="images/atlas/map-province.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#map-usa"><h4 class="chart-title">USA
                        Population Estimates (2012)</h4><img class="chart-area"
                                                             data-original="http://echarts.baidu.com/gallery/data/thumb/map-usa.png"
                                                             src="images/atlas/map-usa.png"
                                                             style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#map-world-dataRange"><h4
                            class="chart-title">World Population (2010)</h4><img class="chart-area"
                                                                                 data-original="http://echarts.baidu.com/gallery/data/thumb/map-world-dataRange.png"
                                                                                 src="images/atlas/map-world-dataRange.png"
                                                                                 style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-pie">饼图</h3>
            <div class="row" id="chart-row-pie">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#pie-custom"><h4 class="chart-title">
                        Customized Pie</h4><img class="chart-area"
                                                data-original="http://echarts.baidu.com/gallery/data/thumb/pie-custom.png"
                                                src="images/else/pie-custom.png"
                                                style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#pie-doughnut"><h4 class="chart-title">
                        环形图</h4><img class="chart-area"
                                     data-original="http://echarts.baidu.com/gallery/data/thumb/pie-doughnut.png"
                                     src="images/else/pie-doughnut.png"
                                     style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#pie-nest"><h4 class="chart-title">
                        嵌套环形图</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/pie-nest.png"
                                       src="images/else/pie-nest.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#pie-pattern"><h4 class="chart-title">
                        饼图纹理</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/pie-pattern.png"
                                      src="images/else/pie-pattern.png"
                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#pie-roseType"><h4 class="chart-title">
                        南丁格尔玫瑰图</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/pie-roseType.png"
                                         src="images/else/pie-roseType.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#pie-simple"><h4 class="chart-title">
                        某站点用户访问来源</h4><img class="chart-area"
                                           data-original="http://echarts.baidu.com/gallery/data/thumb/pie-simple.png"
                                           src="images/else/pie-simple.png"
                                           style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-radar">雷达图</h3>
            <div class="row" id="chart-row-radar">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#radar-aqi"><h4 class="chart-title">AQI -
                        雷达图</h4><img class="chart-area"
                                     data-original="http://echarts.baidu.com/gallery/data/thumb/radar-aqi.png"
                                     src="images/else/radar-aqi.png"
                                     style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#radar-custom"><h4 class="chart-title">
                        自定义雷达图</h4><img class="chart-area"
                                        data-original="http://echarts.baidu.com/gallery/data/thumb/radar-custom.png"
                                        src="images/else/radar-custom.png"
                                        style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#radar-multiple"><h4 class="chart-title">
                        多雷达图</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/radar-multiple.png"
                                      src="images/else/radar-multiple.png"
                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#radar"><h4 class="chart-title">基础雷达图</h4>
                        <img class="chart-area" data-original="http://echarts.baidu.com/gallery/data/thumb/radar.png"
                             src="images/else/radar.png" style="display: inline;"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#radar2"><h4 class="chart-title">
                        浏览器占比变化</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/radar2.png"
                                         src="images/else/radar2.png"
                                         style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-candlestick">k线图</h3>
            <div class="row" id="chart-row-candlestick">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#candlestick-brush"><h4 class="chart-title">
                        Candlestick Brush</h4><img class="chart-area"
                                                   data-original="http://echarts.baidu.com/gallery/data/thumb/candlestick-brush.png"
                                                   src="images/else/candlestick-brush.png"
                                                   style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#candlestick-sh-2015"><h4
                            class="chart-title">2015 年上证指数</h4><img class="chart-area"
                                                                    data-original="http://echarts.baidu.com/gallery/data/thumb/candlestick-sh-2015.png"
                                                                    src="images/else/candlestick-sh-2015.png"
                                                                    style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#candlestick-sh"><h4 class="chart-title">
                        上证指数</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/candlestick-sh.png"
                                      src="images/else/candlestick-sh.png"
                                      style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-boxplot">箱线图</h3>
            <div class="row" id="chart-row-boxplot">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#boxplot-light-velocity"><h4
                            class="chart-title">Boxplot Light Velocity</h4><img class="chart-area"
                                                                                data-original="http://echarts.baidu.com/gallery/data/thumb/boxplot-light-velocity.png"
                                                                                src="images/else/boxplot-light-velocity.png"
                                                                                style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#boxplot-light-velocity2"><h4
                            class="chart-title">Boxplot Light Velocity2</h4><img class="chart-area"
                                                                                 data-original="http://echarts.baidu.com/gallery/data/thumb/boxplot-light-velocity2.png"
                                                                                 src="images/else/boxplot-light-velocity2.png"
                                                                                 style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#boxplot-multi"><h4 class="chart-title">
                        Multiple Categories</h4><img class="chart-area"
                                                     data-original="http://echarts.baidu.com/gallery/data/thumb/boxplot-multi.png"
                                                     src="images/else/boxplot-multi.png"
                                                     style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-heatmap">热力图</h3>
            <div class="row" id="chart-row-heatmap">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#heatmap-bmap"><h4 class="chart-title">
                        热力图与百度地图扩展</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/heatmap-bmap.png"
                                            src="images/else/heatmap-bmap.png"
                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#heatmap-cartesian"><h4 class="chart-title">
                        笛卡尔坐标系上的热力图</h4><img class="chart-area"
                                             data-original="http://echarts.baidu.com/gallery/data/thumb/heatmap-cartesian.png"
                                             src="images/else/heatmap-cartesian.png"
                                             style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#heatmap-large-piecewise"><h4
                            class="chart-title">热力图 - 颜色的离散映射</h4><img class="chart-area"
                                                                       data-original="http://echarts.baidu.com/gallery/data/thumb/heatmap-large-piecewise.png"
                                                                       src="images/else/heatmap-large-piecewise.png"
                                                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#heatmap-large"><h4 class="chart-title">热力图
                        - 2w 数据</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/heatmap-large.png"
                                         src="images/else/heatmap-large.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#heatmap-map"><h4 class="chart-title">
                        全国主要城市空气质量</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/heatmap-map.png"
                                            src="images/else/heatmap-map.png"
                                            style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-graph">关系图</h3>
            <div class="row" id="chart-row-graph">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph-circular-layout"><h4
                            class="chart-title">Les Miserables</h4><img class="chart-area"
                                                                        data-original="http://echarts.baidu.com/gallery/data/thumb/graph-circular-layout.png"
                                                                        src="images/else/graph-circular-layout.png"
                                                                        style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph-force"><h4 class="chart-title">
                        力引导布局</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/graph-force.png"
                                       src="images/else/graph-force.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph-force2"><h4 class="chart-title">
                        力引导布局</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/graph-force2.png"
                                       src="images/else/graph-force2.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph-grid"><h4 class="chart-title">
                        笛卡尔坐标系上的 Graph</h4><img class="chart-area"
                                                data-original="http://echarts.baidu.com/gallery/data/thumb/graph-grid.png"
                                                src="images/else/graph-grid.png"
                                                style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph-life-expectancy"><h4
                            class="chart-title">Graph Life Expectancy</h4><img class="chart-area"
                                                                               data-original="http://echarts.baidu.com/gallery/data/thumb/graph-life-expectancy.png"
                                                                               src="images/else/graph-life-expectancy.png"
                                                                               style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph-npm"><h4 class="chart-title">NPM
                        Dependencies</h4><img class="chart-area"
                                              data-original="http://echarts.baidu.com/gallery/data/thumb/graph-npm.png"
                                              src="images/else/graph-npm.png"
                                              style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph-simple"><h4 class="chart-title">Graph
                        简单示例</h4><img class="chart-area"
                                      data-original="http://echarts.baidu.com/gallery/data/thumb/graph-simple.png"
                                      src="images/else/graph-simple.png"
                                      style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph-webkit-dep"><h4 class="chart-title">
                        Graph Webkit Dep</h4><img class="chart-area"
                                                  data-original="http://echarts.baidu.com/gallery/data/thumb/graph-webkit-dep.png"
                                                  src="images/else/graph-webkit-dep.png"
                                                  style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#graph"><h4 class="chart-title">Les
                        Miserables</h4><img class="chart-area"
                                            data-original="http://echarts.baidu.com/gallery/data/thumb/graph.png"
                                            src="images/else/graph.png"
                                            style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-treemap">矩形树图</h3>
            <div class="row" id="chart-row-treemap">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#treemap-disk"><h4 class="chart-title">Disk
                        Usage</h4><img class="chart-area"
                                       data-original="http://echarts.baidu.com/gallery/data/thumb/treemap-disk.png"
                                       src="images/else/treemap-disk.png"
                                       style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#treemap-drill-down"><h4
                            class="chart-title">ECharts 配置项查询分布</h4><img class="chart-area"
                                                                         data-original="http://echarts.baidu.com/gallery/data/thumb/treemap-drill-down.png"
                                                                         src="images/else/treemap-drill-down.png"
                                                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#treemap-obama"><h4 class="chart-title">How
                        $3.7 Trillion is Spent</h4><img class="chart-area"
                                                        data-original="http://echarts.baidu.com/gallery/data/thumb/treemap-obama.png"
                                                        src="images/else/treemap-obama.png"
                                                        style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-parallel">平行坐标</h3>
            <div class="row" id="chart-row-parallel">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#parallel-aqi"><h4 class="chart-title">
                        Parallel Aqi</h4><img class="chart-area"
                                              data-original="http://echarts.baidu.com/gallery/data/thumb/parallel-aqi.png"
                                              src="images/else/parallel-aqi.png"
                                              style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#parallel-nutrients"><h4
                            class="chart-title">Parallel Nutrients</h4><img class="chart-area"
                                                                            data-original="http://echarts.baidu.com/gallery/data/thumb/parallel-nutrients.png"
                                                                            src="images/else/parallel-nutrients.png"
                                                                            style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#scatter-matrix"><h4 class="chart-title">
                        Scatter Matrix</h4><img class="chart-area"
                                                data-original="http://echarts.baidu.com/gallery/data/thumb/scatter-matrix.png"
                                                src="images/else/scatter-matrix.png"
                                                style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-sankey">桑基图</h3>
            <div class="row" id="chart-row-sankey">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#sankey-energy"><h4 class="chart-title">
                        Sankey Diagram</h4><img class="chart-area"
                                                data-original="http://echarts.baidu.com/gallery/data/thumb/sankey-energy.png"
                                                src="images/else/sankey-energy.png"
                                                style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#sankey-product"><h4 class="chart-title">
                        Sankey Diagram</h4><img class="chart-area"
                                                data-original="http://echarts.baidu.com/gallery/data/thumb/sankey-product.png"
                                                src="images/else/sankey-product.png"
                                                style="display: inline;"></a></div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-funnel">漏斗图</h3>
            <div class="row" id="chart-row-funnel">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#funnel-align"><h4 class="chart-title">
                        漏斗图(对比)</h4><img class="chart-area"
                                         data-original="http://echarts.baidu.com/gallery/data/thumb/funnel-align.png"
                                         src="images/else/funnel-align.png"
                                         style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#funnel-customize"><h4 class="chart-title">
                        漏斗图</h4><img class="chart-area"
                                     data-original="http://echarts.baidu.com/gallery/data/thumb/funnel-customize.png"
                                     src="images/else/funnel-customize.png"
                                     style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#funnel-mutiple"><h4 class="chart-title">
                        漏斗图</h4><img class="chart-area"
                                     data-original="http://echarts.baidu.com/gallery/data/thumb/funnel-mutiple.png"
                                     src="images/else/funnel-mutiple.png"
                                     style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#funnel"><h4 class="chart-title">漏斗图</h4>
                        <img class="chart-area" data-original="http://echarts.baidu.com/gallery/data/thumb/funnel.png"
                             src="images/else/funnel.png" style="display: inline;"></a>
                    </div>
                </div>
            </div>
            <h3 class="chart-type-head" id="chart-type-gauge">仪表盘</h3>
            <div class="row" id="chart-row-gauge">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#gauge-car-dark"><h4 class="chart-title">
                        Gauge Car Dark</h4><img class="chart-area"
                                                data-original="http://echarts.baidu.com/gallery/data/thumb/gauge-car-dark.png"
                                                src="images/else/gauge-car-dark.png"
                                                style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#gauge-car"><h4 class="chart-title">Gauge
                        Car</h4><img class="chart-area"
                                     data-original="http://echarts.baidu.com/gallery/data/thumb/gauge-car.png"
                                     src="images/else/gauge-car.png"
                                     style="display: inline;"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="chart"><a class="chart-link" href="demo.html#gauge"><h4 class="chart-title">Gauge</h4>
                        <img class="chart-area" data-original="http://echarts.baidu.com/gallery/data/thumb/gauge.png"
                             src="images/else/gauge.png" style="display: inline;"></a>
                    </div>
                </div>
            </div>
            <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
        </div>
    </div>
    <div style="display:none">点击查看详情</div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validator.js"></script>
<script type="text/javascript" src="js/waypoint.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar/0.6.8/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
<script type="text/javascript">var GALLERY_PATH = 'http://echarts.baidu.com/gallery/';
console.log(GALLERY_PATH);
var GALLERY_EDITOR_PATH = GALLERY_PATH + 'editor.html?c=';
var GALLERY_VIEW_PATH = GALLERY_PATH + 'view.html?c=';
var GALLERY_THUMB_PATH = GALLERY_PATH + 'data/thumb/';
//</script>
<script type="text/javascript" src="js/config.js"></script>
<script type="text/javascript" src="js/chart-list.js"></script>
<script type="text/javascript" src="js/examples-nav.js"></script>
<script type="text/javascript">document.getElementById('nav-examples').className = 'active';</script>
<script type="text/javascript" src="/js/hm.js"></script>
<!--<div style="position: static; width: 0px; height: 0px; border: none; padding: 0px; margin: 0px;">-->
<!--<div id="trans-tooltip">-->
<!--<div id="tip-left-top"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left-top.png&quot;);"></div>-->
<!--<div id="tip-top"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-top.png&quot;) repeat-x;"></div>-->
<!--<div id="tip-right-top"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right-top.png&quot;);"></div>-->
<!--<div id="tip-right"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right.png&quot;) repeat-y;"></div>-->
<!--<div id="tip-right-bottom"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right-bottom.png&quot;);"></div>-->
<!--<div id="tip-bottom"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-bottom.png&quot;) repeat-x;"></div>-->
<!--<div id="tip-left-bottom"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left-bottom.png&quot;);"></div>-->
<!--<div id="tip-left"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left.png&quot;);"></div>-->
<!--<div id="trans-content"></div>-->
<!--</div>-->
<!--<div id="tip-arrow-bottom"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-arrow-bottom.png&quot;);"></div>-->
<!--<div id="tip-arrow-top"-->
<!--style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-arrow-top.png&quot;);"></div>-->
<!--</div>-->
</body>
</html>

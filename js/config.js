/**
 * Created by wangchao on 2016/7/15.
 */
var EXAMPLES = [{id: "area-rainfall", title: "闆ㄩ噺娴侀噺鍏崇郴鍥�", type: "line"}, {
    id: "area-simple",
    title: "澶ф暟鎹噺闈㈢Н鍥�",
    type: "line"
}, {id: "area-stack", title: "鍫嗗彔鍖哄煙鍥�", type: "line"}, {
    id: "bar-animation-delay",
    title: "鏌辩姸鍥惧姩鐢诲欢杩�",
    type: "bar"
}, {id: "bar-brush", title: "鏌辩姸鍥炬閫�", type: "bar"}, {
    id: "bar-negative",
    title: "姝ｈ礋鏉″舰鍥�",
    type: "bar"
}, {id: "bar-negative2", title: "浜ら敊姝ｈ礋杞存爣绛�", type: "bar"}, {
    id: "bar-stack",
    title: "鍫嗗彔鏌辩姸鍥�",
    type: "bar"
}, {id: "bar-tick-align", title: "鍧愭爣杞村埢搴︿笌鏍囩瀵归綈", type: "bar"}, {
    id: "bar-waterfall",
    title: "娣卞湷鏈堟渶浣庣敓娲昏垂缁勬垚锛堝崟浣�:鍏冿級",
    type: "bar"
}, {id: "bar-waterfall2", title: "闃舵鐎戝竷鍥�", type: "bar"}, {
    id: "bar-y-category-stack",
    title: "鍫嗗彔鏉″舰鍥�",
    type: "bar"
}, {id: "bar-y-category", title: "涓栫晫浜哄彛鎬婚噺 - 鏉″舰鍥�", type: "bar"}, {
    id: "bar1",
    title: "鏌愬湴鍖鸿捀鍙戦噺鍜岄檷姘撮噺",
    type: "bar"
}, {id: "boxplot-light-velocity", title: "Boxplot Light Velocity", type: "boxplot"}, {
    id: "boxplot-light-velocity2",
    title: "Boxplot Light Velocity2",
    type: "boxplot"
}, {id: "boxplot-multi", title: "Multiple Categories", type: "boxplot"}, {
    id: "bubble-gradient",
    title: "姘旀场鍥�",
    type: "scatter"
}, {id: "candlestick-brush", title: "Candlestick Brush", type: "candlestick"}, {
    id: "candlestick-sh-2015",
    title: "2015 骞翠笂璇佹寚鏁�",
    type: "candlestick"
}, {id: "candlestick-sh", title: "涓婅瘉鎸囨暟", type: "candlestick"}, {
    id: "confidence-band",
    title: "Confidence Band",
    type: "line"
}, {id: "dynamic-data", title: "鍔ㄦ€佹暟鎹�", type: "bar"}, {
    id: "dynamic-data2",
    title: "鍔ㄦ€佹暟鎹� + 鏃堕棿鍧愭爣杞�",
    type: "line"
}, {id: "effectScatter-bmap", title: "鍏ㄥ浗涓昏鍩庡競绌烘皵璐ㄩ噺 - 鐧惧害鍦板浘", type: "scatter"}, {
    id: "effectScatter-map",
    title: "鍏ㄥ浗涓昏鍩庡競绌烘皵璐ㄩ噺",
    type: "scatter"
}, {id: "funnel-align", title: "婕忔枟鍥�(瀵规瘮)", type: "funnel"}, {
    id: "funnel-customize",
    title: "婕忔枟鍥�",
    type: "funnel"
}, {id: "funnel-mutiple", title: "婕忔枟鍥�", type: "funnel"}, {
    id: "funnel",
    title: "婕忔枟鍥�",
    type: "funnel"
}, {id: "gauge-car-dark", title: "Gauge Car Dark", type: "gauge"}, {
    id: "gauge-car",
    title: "Gauge Car",
    type: "gauge"
}, {id: "gauge", title: "Gauge", type: "gauge"}, {
    id: "geo-lines",
    title: "妯℃嫙杩佸緳",
    type: "map"
}, {id: "graph-circular-layout", title: "Les Miserables", type: "graph"}, {
    id: "graph-force",
    title: "鍔涘紩瀵煎竷灞€",
    type: "graph"
}, {id: "graph-force2", title: "鍔涘紩瀵煎竷灞€", type: "graph"}, {
    id: "graph-grid",
    title: "绗涘崱灏斿潗鏍囩郴涓婄殑 Graph",
    type: "graph"
}, {id: "graph-life-expectancy", title: "Graph Life Expectancy", type: "graph"}, {
    id: "graph-npm",
    title: "NPM Dependencies",
    type: "graph"
}, {id: "graph-simple", title: "Graph 绠€鍗曠ず渚�", type: "graph"}, {
    id: "graph-webkit-dep",
    title: "Graph Webkit Dep",
    type: "graph"
}, {id: "graph", title: "Les Miserables", type: "graph"}, {
    id: "grid-multiple",
    title: "闆ㄩ噺娴侀噺鍏崇郴鍥�",
    type: "line"
}, {id: "heatmap-bmap", title: "鐑姏鍥句笌鐧惧害鍦板浘鎵╁睍", type: "heatmap"}, {
    id: "heatmap-cartesian",
    title: "绗涘崱灏斿潗鏍囩郴涓婄殑鐑姏鍥�",
    type: "heatmap"
}, {id: "heatmap-large-piecewise", title: "鐑姏鍥� - 棰滆壊鐨勭鏁ｆ槧灏�", type: "heatmap"}, {
    id: "heatmap-large",
    title: "鐑姏鍥� - 2w 鏁版嵁",
    type: "heatmap"
}, {id: "heatmap-map", title: "鍏ㄥ浗涓昏鍩庡競绌烘皵璐ㄩ噺", type: "heatmap"}, {
    id: "line-aqi",
    title: "Beijing AQI",
    type: "line"
}, {id: "line-easing", title: "Line Easing", type: "line"}, {
    id: "line-log",
    title: "瀵规暟杞寸ず渚�",
    type: "line"
}, {id: "line-marker", title: "鏈潵涓€鍛ㄦ皵娓╁彉鍖�", type: "line"}, {
    id: "line-polar",
    title: "鏋佸潗鏍囧弻鏁板€艰酱",
    type: "line"
}, {id: "line-polar2", title: "鏋佸潗鏍囧弻鏁板€艰酱", type: "line"}, {
    id: "line-sections",
    title: "涓€澶╃敤鐢甸噺鍒嗗竷",
    type: "line"
}, {id: "line-stack", title: "鎶樼嚎鍥惧爢鍙�", type: "line"}, {
    id: "line-step",
    title: "Step Line",
    type: "line"
}, {id: "line-y-category", title: "Line Y Category", type: "line"}, {
    id: "lines-airline",
    title: "65k+ 椋炴満鑸嚎",
    type: "map"
}, {id: "lines-bmap-bus", title: "鍖椾含鍏氦璺嚎 - 鐧惧害鍦板浘", type: "map"}, {
    id: "lines-bmap-effect",
    title: "鍖椾含鍏氦璺嚎 - 绾跨壒鏁�",
    type: "map"
}, {id: "lines-bmap", title: "鏉窞鐑棬姝ヨ璺嚎 - 鐧惧害鍦板浘", type: "map"}, {
    id: "map-china-dataRange",
    title: "iphone閿€閲�",
    type: "map"
}, {id: "map-china", title: "Map China", type: "map"}, {
    id: "map-HK",
    title: "棣欐腐18鍖轰汉鍙ｅ瘑搴� 锛�2011锛�",
    type: "map"
}, {id: "map-locate", title: "Map Locate", type: "map"}, {
    id: "map-parallel-prices",
    title: "Prices and Earnings 2012",
    type: "scatter"
}, {id: "map-province", title: "34 鐪佸垏鎹㈡煡鐪�", type: "map"}, {
    id: "map-usa",
    title: "USA Population Estimates (2012)",
    type: "map"
}, {id: "map-world-dataRange", title: "World Population (2010)", type: "map"}, {
    id: "map-world",
    title: "Map World",
    type: "0"
}, {id: "mix-line-bar", title: "鎶樻煴娣峰悎", type: "bar"}, {
    id: "mix-timeline-finance",
    title: "2002鍏ㄥ浗瀹忚缁忔祹鎸囨爣",
    type: "bar"
}, {id: "mix-zoom-on-value", title: "Mix Zoom On Value", type: "bar"}, {
    id: "multiple-y-axis",
    title: "澶� Y 杞寸ず渚�",
    type: "bar"
}, {id: "parallel-aqi", title: "Parallel Aqi", type: "parallel"}, {
    id: "parallel-nutrients",
    title: "Parallel Nutrients",
    type: "parallel"
}, {id: "pie-custom", title: "Customized Pie", type: "pie"}, {
    id: "pie-doughnut",
    title: "鐜舰鍥�",
    type: "pie"
}, {id: "pie-nest", title: "宓屽鐜舰鍥�", type: "pie"}, {
    id: "pie-pattern",
    title: "楗煎浘绾圭悊",
    type: "pie"
}, {id: "pie-roseType", title: "鍗椾竵鏍煎皵鐜懓鍥�", type: "pie"}, {
    id: "pie-simple",
    title: "鏌愮珯鐐圭敤鎴疯闂潵婧�",
    type: "pie"
}, {id: "radar-aqi", title: "AQI - 闆疯揪鍥�", type: "radar"}, {
    id: "radar-custom",
    title: "鑷畾涔夐浄杈惧浘",
    type: "radar"
}, {id: "radar-multiple", title: "澶氶浄杈惧浘", type: "radar"}, {
    id: "radar",
    title: "鍩虹闆疯揪鍥�",
    type: "radar"
}, {id: "radar2", title: "娴忚鍣ㄥ崰姣斿彉鍖�", type: "radar"}, {
    id: "sankey-energy",
    title: "Sankey Diagram",
    type: "sankey"
}, {id: "sankey-product", title: "Sankey Diagram", type: "sankey"}, {
    id: "scatter-anscombe-quartet",
    title: "Anscombe&#39;s quartet",
    type: "scatter"
}, {id: "scatter-aqi-color", title: "Scatter Aqi Color", type: "scatter"}, {
    id: "scatter-large",
    title: "澶ц妯℃暎鐐瑰浘",
    type: "scatter"
}, {id: "scatter-life-expectancy-timeline", title: "鍚勫浗浜哄潎瀵垮懡涓嶨DP鍏崇郴婕斿彉", type: "scatter"}, {
    id: "scatter-map-brush",
    title: "Scatter Map Brush",
    type: "scatter"
}, {id: "scatter-map", title: "鍏ㄥ浗涓昏鍩庡競绌烘皵璐ㄩ噺", type: "scatter"}, {
    id: "scatter-matrix",
    title: "Scatter Matrix",
    type: "parallel"
}, {id: "scatter-nutrients", title: "Scatter Nutrients", type: "scatter"}, {
    id: "scatter-painter-choice",
    title: "Master Painter Color Choices Throughout History",
    type: "scatter"
}, {id: "scatter-polar-punchCard", title: "Punch Card of Github", type: "scatter"}, {
    id: "scatter-punchCard",
    title: "Punch Card of Github",
    type: "scatter"
}, {id: "scatter-single-axis", title: "鍗曡酱鏁ｇ偣鍥�", type: "scatter"}, {
    id: "scatter-weibo",
    title: "寰崥绛惧埌鏁版嵁鐐逛寒涓浗",
    type: "scatter"
}, {id: "scatter-weight", title: "鐢锋€уコ鎬ц韩楂樹綋閲嶅垎甯�", type: "scatter"}, {
    id: "scatter-world-population",
    title: "World Population (2011)",
    type: "scatter"
}, {id: "themeRiver-lastfm", title: "ThemeRiver Lastfm", type: "themeRiver"}, {
    id: "treemap-disk",
    title: "Disk Usage",
    type: "treemap"
}, {id: "treemap-drill-down", title: "ECharts 閰嶇疆椤规煡璇㈠垎甯�", type: "treemap"}, {
    id: "treemap-obama",
    title: "How $3.7 Trillion is Spent",
    type: "treemap"
}], CHART_TYPES = {
    scatter: "鏁ｇ偣鍥�",
    line: "鎶樼嚎鍥�",
    bar: "鏌辩姸鍥�",
    map: "鍦板浘",
    pie: "楗煎浘",
    radar: "闆疯揪鍥�",
    candlestick: "k绾垮浘",
    boxplot: "绠辩嚎鍥�",
    heatmap: "鐑姏鍥�",
    graph: "鍏崇郴鍥�",
    treemap: "鐭╁舰鏍戝浘",
    parallel: "骞宠鍧愭爣",
    sankey: "妗戝熀鍥�",
    funnel: "婕忔枟鍥�",
    gauge: "浠〃鐩�"
};

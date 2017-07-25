<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
	<script type="text/javascript" src="/yjc/lby/Public/Admin/static/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="/yjc/lby/Public/Admin/plugins/tab/js/framework.js"></script>
	<link href="/yjc/lby/Public/Admin/plugins/tab/css/import_basic.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" charset="utf-8" src="/yjc/lby/Public/Admin/plugins/tab/js/tab.js"></script>
	</head>
<body>
<div id="tab_menu"></div>
<div style="width:100%;">
	<div id="page" style="width:100%;height:100%;"></div>
</div>		
</body>
<script type="text/javascript">

function tabAddHandler(mid,mtitle,murl){
	tab.update({
		id :mid,
		title :mtitle,
		url :murl,
		isClosed :true
	});
	tab.add({
		id :mid,
		title :mtitle,
		url :murl,
		isClosed :true
	});

	tab.activate(mid);
}
 var tab;	
$( function() {
	 tab = new TabView( {
		containerId :'tab_menu',
		pageid :'page',
		cid :'tab1',
		position :"top"
	});
	tab.add( {
		id :'tab1_index1',
		title :"主页",
		url :"http://www.lby.com/index.php/Admin/Index/menu",
		isClosed :false
	});
	/**tab.add( {
		id :'tab1_index1',
		title :"主页",
		url :"/per/undoTask!gettwo",
		isClosed :false
	});
	**/
});

	function cmainFrameT(){
		var hmainT = document.getElementById("page");
		var bheightT = document.documentElement.clientHeight;
		hmainT .style.width = '100%';
		hmainT .style.height = (bheightT  - 41) + 'px';
	}
	cmainFrameT();
	window.onresize=function(){  
		cmainFrameT();
	};

</script>
</html>
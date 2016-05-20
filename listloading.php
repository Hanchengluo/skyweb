<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>skyweb</title>
<script src="skyweb/jquery.js"></script>
<script src="skyweb/skyweb.js"></script>
<link href="skyweb/skyweb.css" rel="stylesheet" type="text/css">
<link href="skyweb/skywap.css" rel="stylesheet" type="text/css">
<link href="iconfont/iconfont.css" rel="stylesheet" type="text/css">
 <link href="app.css" rel="stylesheet" type="text/css">
</head>

<body>

<div style="margin:0 auto; max-width:960px;">
	<div class="header">
	<a href="index.php" class="left-btn"><span><i class="iconfont icon-back"></i></span></a>
    <div class="title">动态加载</div>
</div>
	 
    <div class="data-list you" id="list"></div>		
    </div>
    <div class="pullup" id="loadmore" style="display:block">加载更多</div>
 <script src="skyweb/listload.js"></script>
 <script>
 	var i=0;
	var k=100;
	function loadmore(){
		var html="";
		for(var j=0;j<k;j++){
			i++;
			html=html+"<a href='listloading.php' class='item'>第"+i+"条</a>";
		}
		k=10;
		console.log(html);
		$("#list").append(html);
	}
	loadmore();
	listload.loadid="#loadmore";
	listload.showload(function(){
		loadmore();
	});
 
 </script>   
</body>
</html>
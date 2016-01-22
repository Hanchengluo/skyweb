<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>skyweb</title>
<script src="skyweb/jquery.js"></script>
<script src="skyweb/skyweb.js"></script>
<link href="skyweb/skyweb.css" rel="stylesheet" type="text/css">
<link href="iconfont/iconfont.css" rel="stylesheet" type="text/css">
 <link href="app.css" rel="stylesheet" type="text/css">
</head>

<body>
<div style="margin:0 auto; max-width:960px;">
	<div class="header">
 	<a href="/index.php" class="left-btn"><span><i class="iconfont icon-back"></i></span></a>
    <div class="title">SkyWebUI</div>
    <div class="right-btn"><a href="listloading.php">更多</a></div>
</div>
<div style="margin:0 auto; max-width:960px;">
	 
  <div class="row"> 
  	<!---排版--->
    <div class="skypanel">
      <div class="pd">
        <div class="hd skypanel-toggle">排版</div>
        <div class="skypanel-box">
          <div class="pd-5"><?php include "demo/base.html";?></div>
        </div>
      </div>
    </div>
    <!---btn--->
    <div class="skypanel">
      <div class="pd">
        <div class="hd skypanel-toggle">按钮</div>
        <div class="skypanel-box">
          <?php include "demo/btn.html";?>
        </div>
      </div>
    </div>
    <!---弹框---->
    <div class="skypanel">
      <div class="pd">
        <div class="hd skypanel-toggle">弹框</div>
        <div class="skypanel-box">
         <?php include "demo/alert.html";?>
        </div>
      </div>
    </div>
    <!----表单---->
    <div class="skypanel">
      <div class="pd">
        <div class="hd skypanel-toggle">表单</div>
        <div class="skypanel-box">
          <?php include "demo/form.html";?>
        </div>
      </div>
    </div>
    <!--列表 table-->
    <div class="skypanel">
      <div class="pd">
        <div class="hd skypanel-toggle">列表图文</div>
        <div class="skypanel-box ">
          <?php include "demo/table.html";?>
        </div>
      </div>
    </div>
    
    <!---Tabs---->
    <div class="skypanel">
    	<div class="pd">
        	<div class="skypanel-toggle  hd">Tabs</div>
            <div class="skypanel-box  ">
            		<?php include "demo/tabs.html";?>
            </div>
        </div>
    </div>
    
     <div class="skypanel">
    	<div class="pd">
        	<div class="skypanel-toggle hd">分类</div>
            <div class="skypanel-box">
            	
            	<?php include "demo/category.html";?>
            
            </div>
        </div>
    </div>
    
     
    
     
    
     <div class="skypanel">
    	<div class="pd">
        	<div class="skypanel-toggle hd">tab-select</div>
            <div class="skypanel-box">
            	<?php include "demo/tab-select.html";?>
            </div>
        </div>
    </div>
    
     <div class="skypanel">
    	<div class="pd">
        	<div class="skypanel-toggle hd">轮显</div>
            <div class="skypanel-box active">
            	<div class="row">
                 		<div class="col-3-1">
                    	<?php include "demo/cycle.html";?>
                   		</div>
                        <div class="col-3-1">
                    	<?php include "demo/swipe.html";?>
                   		</div>
                        <div class="col-3-1">
                    	<?php include "demo/FlexSlider.html";?>
                   		</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="skypanel">
    	<div class="pd">
        	<div class="skypanel-toggle hd">模板</div>
            <div class="skypanel-box">
            	<div class="data-list">
                	<a class="item" target="_blank" href="demo/page.html">首页</a>
                    <a class="item" target="_blank" href="demo/list.html">列表页</a>
                    <a class="item" target="_blank" href="demo/detail.html">详细页</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="skypanel">
    	<div class="pd">
        	<div class="skypanel-toggle hd"></div>
            <div class="skypanel-box"></div>
        </div>
    </div>
    <!------END-------->
    
  </div>
</div>
<div style="height:100px;"></div>
<script>
	
</script>
</body>
</html>

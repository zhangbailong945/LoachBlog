<?php 
header("Content-type:text/html;charset=utf-8"); 
$LoachBlog_Path=base_url()."communal/LoachBlog"; 
$Administrator_Path=base_url()."communal/Administrator";
$submit_Path=site_url();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>LoachBlog</title>
<link href="<?php echo $LoachBlog_Path; ?>/css/index.css" rel="stylesheet" type="text/css" media="screen"/>

<link href="<?php echo $Administrator_Path; ?>/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<script src="<?php echo $Administrator_Path; ?>/js/jquery-1.7.2.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.ui.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.theme.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.accordion.js" type="text/javascript"></script>


<script src="<?php echo $Administrator_Path; ?>/js/dwz.core.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.util.date.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.validate.method.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.barDrag.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.drag.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.tree.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.accordion.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.ui.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.theme.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.switchEnv.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.alertMsg.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.contextmenu.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.navTab.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.tab.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.resize.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.dialog.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.dialogDrag.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.sortDrag.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.cssTable.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.stable.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.taskBar.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.ajax.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.pagination.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.database.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.datepicker.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.effects.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.panel.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.checkbox.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.history.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.combox.js" type="text/javascript"></script>
<script src="<?php echo $Administrator_Path; ?>/js/dwz.print.js" type="text/javascript"></script>
</head>

<body>


		<!-- 导航开始 -->
			<div id="menu-wrap">
				<ul id="menu">
					<li><a href="<?php echo $submit_Path;?>/LoachBlog/LoachBlog/index" target="_blannk">首 页</a></li>
					<li>
					<a href="">关于我</a>
					</li>
					<li>
					<a href="">心灵鸡汤</a>
					</li>
					<li>
					<a href="">程序人生</a>
					</li>
					<li>
					<a href="">分享</a>
					</li>
					<li>
					<a href="">小卖部</a>
					</li>
					<li>
					<a href="">留言板</a>
					</li>
				</ul>
			</div>
		<!-- 导航结束 -->
		   <div id="container1" style="border:1px solid red;height:auto;">
			    <div id="blog_left" style="border:1px solid blue;width:69%;height:200px;float:left;">
			    
			    </div>
			    <div id="blog_right" style="border:1px solid red;width:29%;min-height:200px;float:right;">
			    
			    </div>
			    <div id="blog_left" style="border:1px solid blue;width:69%;min-height:200px;float:left;">
			    
			    </div>
			    <div id="blog_right" style="border:1px solid red;width:29%;min-height:200px;float:right;">
			    
			    </div>
			     <div id="blog_left" style="border:1px solid blue;width:69%;min-height:200px;float:left;">
			    
			    </div>
			    <div id="blog_right" style="border:1px solid red;width:29%;min-height:200px;float:right;">
			    
			    </div>
			     <div id="blog_left" style="border:1px solid blue;width:69%;min-height:200px;float:left;">
			    
			    </div>
			    <div id="blog_right" style="border:1px solid red;width:29%;min-height:200px;float:right;">
			    
			    </div>
			     <div id="blog_left" style="border:1px solid blue;width:69%;min-height:200px;float:left;">
			    
			    </div>
			    <div id="blog_right" style="border:1px solid red;width:29%;min-height:200px;float:right;">
			    
			    </div>
		   </div>	
		   	
		<!-- 版权开始 -->  
		<div id="footer">
		Copyright &copy; 2016 <a href="#" target="dialog">zhangbailong@outlook.com</a>
		</div>
		<!-- 版权结束 --> 

<!-- 内容结束 -->
<script src="<?php echo $LoachBlog_Path;?>/js/jquery-1.8.3.min.js"></script>
<script>
$(function() {
	if ($.browser.msie && $.browser.version.substr(0,1) < 7){
	$('li').has('ul').mouseover(function(){
		$(this).children('ul').css('visibility','visible');
		}).mouseout(function(){
		$(this).children('ul').css('visibility','hidden');
		});
	}

	/* Mobile */
	$('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');
	$("#menu-trigger").on('click', function(){
		$("#menu").slideToggle();
	});

	// iPad
	var isiPad = navigator.userAgent.match(/iPad/i) != null;
	if (isiPad) $('#menu ul').addClass('no-transition');
});

</script>


</body>
</html>

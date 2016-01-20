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
<script src="<?php echo $LoachBlog_Path; ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<link href="<?php echo $LoachBlog_Path; ?>/css/jquery-ui.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $LoachBlog_Path; ?>/css/jquery-ui.structure.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $LoachBlog_Path; ?>/css/jquery-ui.theme.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="<?php echo $LoachBlog_Path; ?>/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path; ?>/js/tagscloud.js" type="text/javascript"></script>
<style type="text/css">


</style>

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
		   <!-- 个性宣言和日历 开始 -->
		   <div id="styledate" style="border:1px solid red;height:auto;">
		        <!-- 个性宣言 图片 -->
			    <div id="blog_left" style="border:1px solid blue;width:70%;height:244px;float:left;margin-top:10px;">
			    
			    </div>
			    <!-- 日历 -->
			    <div id="blog_right" style="border:1px solid red;width:29%;min-height:200px;float:right;margin-top:10px;">
			       <div id="datepicker" width="210px" height="205">
			       
			       </div>
			    </div>
			    
		   </div>
		   
		   <!-- 个性宣言和日历 结束 -->		    
		    <div id="blogtag" style="border:1px solid red;height:auto;margin-top:10px;">
		        <!-- blog 内容 -->
			    <div id="blog_hot" style="border:1px solid blue;width:70%;height:960px;float:left;margin-top:10px;">
			     blog 内容
			    </div>
			     <!-- blog标签 -->
			    <div id="tagscloud" style="border:1px solid red;width:29%;min-height:200px;float:right;margin-top:10px;">
		            <div id="tagscloud">
							<a href="http://www.jq-school.com/Article.aspx?kid=1" class="tagc1" title="星级评分">星级评分(2)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=2" class="tagc2" title="层特效">层特效(34)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=3" class="tagc5" title="关键字">关键字(8)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=4" class="tagc2" title="拖拽">拖拽(5)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=5" class="tagc2" title="分页插件">分页插件(6)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=6" class="tagc1" title="时间插件">时间插件(9)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=7" class="tagc2" title="弹出层">弹出层(60)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=8" class="tagc5" title="数据统计">数据统计(2)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=9" class="tagc2" title="HTML5">HTML5(12)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=10" class="tagc2" title="置顶特效">置顶特效(5)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=11" class="tagc5" title="选项卡">选项卡(23)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=12" class="tagc2" title="导航菜单">导航菜单(31)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=13" class="tagc1" title="原创作品">原创作品(3)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=14" class="tagc2" title="动画插件">动画插件(15)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=15" class="tagc5" title="实用特效">实用特效(47)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=16" class="tagc2" title="table插件">table插件(1)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=17" class="tagc2" title="文字特效">文字特效(20)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=18" class="tagc5" title="图片特效">图片特效(61)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=19" class="tagc1" title="在线客服">在线客服(4)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=20" class="tagc2" title="瀑布流">瀑布流(10)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=21" class="tagc5" title="网友蘑菇">网友蘑菇(0)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=22" class="tagc2" title="网友嘿嘿">网友嘿嘿(3)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=23" class="tagc2" title="前端工具">前端工具(4)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=24" class="tagc2" title="网友Adam">网友Adam(15)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=25" class="tagc1" title="三级联动">三级联动(21)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=26" class="tagc2" title="颜色插件">颜色插件(4)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=27" class="tagc5" title="向导特效">向导特效(2)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=28" class="tagc2" title="自动补全">自动补全(5)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=29" class="tagc1" title="滚动特效">滚动特效(22)</a>
							<a href="http://www.jq-school.com/Article.aspx?kid=30" class="tagc5" title="提示插件">提示插件(24)</a>
                     </div>
			    </div>
			     <!-- 关注我 -->
			    <div id="blog_me" style="border:1px solid red;width:29%;min-height:200px;float:right;margin-top:10px;">
                                           关注我
			    </div>
			     <!-- 扫二维码   -->
			    <div id="blog_qcode" style="border:1px solid red;width:29%;min-height:200px;float:right;margin-top:10px;">
                                           扫二维码   
			    </div>
			    <!-- 友情链接   -->
			    <div id="blog_link" style="border:1px solid red;width:29%;min-height:200px;float:right;margin-top:10px;">
                                            友情链接
			    </div>
			    
		   </div>
		   
		<!-- 版权开始 -->  

		<!-- 版权结束 --> 

<!-- 内容结束 -->

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
	$("#datepicker").datepicker({
		 dateFormat: 'yy-mm-dd',//日期格式 
		changeMonth:true,
		changeYear:true,　
		});
		 $("#datepicker").css('font-size','0.9em') //改变大小
});

</script>


</body>
</html>

<?php
header("Content-type:text/html;charset=utf-8"); 
$hui_Path=base_url()."communal/h-ui/"; 
$LoachBlog_Path=base_url()."communal/LoachBlog"; 
$submit_Path=site_url();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/html5.js"></script>
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/respond.min.js"></script>
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/PIE_IE678.js"></script>
<![endif]-->
<link href="<?php echo $LoachBlog_Path;?>/css/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $hui_Path;?>static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $hui_Path;?>lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $hui_Path;?>lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $hui_Path;?>static/h-ui/skin/default/skin.css" id="skin" />

<link rel="stylesheet" type="text/css" href="<?php echo $hui_Path;?>static/h-ui/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title>loachblog个人笔记"</title>
<meta name="keywords" content="loachblog个人笔记">
<meta name="description" content="loachblog个人笔记，zhangbailong945的个人笔记">
<style type="text/css">
div#container{width:100%;margin-top:20px;margin-left:20px;margin-right:20px;}
.nav{float:left;}
div#header {background-color:#99bbbb;float:left;width:100%;}
div#menu {background-color:#ffff99; height:100%; width:20%; min-width:100px;float:left;}
div#content {background-color:#EEEEEE; height:100%; width:79%;min-width:400px; float:left;}
h1 {margin-bottom:0;}
h2 {margin-bottom:0; font-size:14px;}
ul {margin:0;}
li {list-style:none;}
#footer{width:100%;bottom:0px;left:0px;background-color:#99bbbb;clear:both;text-align:center;}
.toTop{position:fixed;bottom:10px;right:20px; z-index:999;display:none; font-size:16px;cursor: pointer;overflow:hidden;visibility:visible; background-color:#fff;border: 1px solid #d9d9d9;color: #9c9c9c;font-size: 16px;width: 38px;height: 38px;line-height: 38px;text-align: center; text-decoration:none;_position:absolute;_top:expression(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight);}
.toTop:hover{ color:red; text-decoration:none; background-color:#999}

.Huifold .item{ position:relative}
.Huifold .item h4{margin:0;font-weight:bold;position:relative;border-top: 1px solid #fff;font-size:15px;line-height:22px;padding:7px 10px;background-color:#eee;cursor:pointer;padding-right:30px}
.Huifold .item h4 b{position:absolute;display: block; cursor:pointer;right:10px;top:7px;width:16px;height:16px; text-align:center; color:#666}
.Huifold .item .info{display:none;padding:10px;background-color:#fff;}
</style>
</head>
<body>

<!-- 不动菜单开始 -->
<header class="navbar-wrapper">
	<div class="navbar navbar-black navbar-fixed-top">
		<div class="container cl">
			<a class="logo navbar-logo hidden-xs" href="/aboutHui.shtml"><b>L</b>oach<b>B</b>log</a>
			<a class="logo navbar-logo-m visible-xs" href="/aboutHui.shtml">H-ui</a>
			<span class="logo navbar-slogan hidden-xs">个人 &middot;笔记</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav nav-collapse" role="navigation" id="Hui-navbar">
				<ul class="cl">
					<li class="current"><a href="/">首页</a></li>
					<li><a href="#">核心</a></li>
					<li><a href="#">扩展</a></li>
					<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A">一级导航 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">二级导航</a></li>
							<li><a href="#">二级导航<i class="arrow Hui-iconfont">&#xe6d7;</i></a>
								<ul class="menu">
									<li><a href="javascript:;">三级菜单<i class="arrow Hui-iconfont">&#xe6d7;</i></a>
										<ul class="menu">
											<li><a href="javascript:;">四级菜单</a></li>
											<li><a href="javascript:;">四级菜单</a></li>
											<li><a href="javascript:;">四级菜单</a></li>
										</ul>
									</li>
									<li><a href="#">三级导航</a></li>
								</ul>
							</li>
							<li><a href="#">二级导航</a></li>
							<li class="disabled"><a href="javascript:;">二级菜单</a></li>
						</ul>
					</li>
					<li><a href="#">联系我们</a></li>
				</ul>
			</nav>
			<nav class="navbar-userbar hidden-xs">
				
			</nav>
		</div>
	</div>
</header>

<div id="container">
<!-- 不动菜单结束 -->
<div id="header">
<!-- 导航开始 -->
<nav class="breadcrumb">
	<div class="nav">
		<i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a><span class="c-gray en">&gt;</span><a href="#">组件</a><span class="c-gray en">&gt;</span><span class="c-gray">当前页面</span>
	</div>
</nav>
</div>
<!-- 导航结束 -->


<div id="content" class="panel panel-default">
   <div class="panel-header">热门笔记</div>
   <div class="panel-body" id="panel-body">
   </div>
</div>

<div id="menu">
<ul id="Huifold1" class="Huifold">
  <li class="item">
    <h4>热门云标签<b>+</b></h4>
    <div class="info">
      <div id="tagscloud">
			<a href="http://zhangbailng.com" class="tagc1" title="星级评分">星级评分(2)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="层特效">层特效(34)</a>
			<a href="http://zhangbailng.com" class="tagc5" title="关键字">关键字(8)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="拖拽">拖拽(5)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="分页插件">分页插件(6)</a>
			<a href="http://zhangbailng.com" class="tagc1" title="时间插件">时间插件(9)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="弹出层">弹出层(60)</a>
			<a href="http://zhangbailng.com" class="tagc5" title="数据统计">数据统计(2)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="HTML5">HTML5(12)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="置顶特效">置顶特效(5)</a>
			<a href="http://zhangbailng.com" class="tagc5" title="选项卡">选项卡(23)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="导航菜单">导航菜单(31)</a>
			<a href="http://zhangbailng.com" class="tagc1" title="原创作品">原创作品(3)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="动画插件">动画插件(15)</a>
			<a href="http://zhangbailng.com" class="tagc5" title="实用特效">实用特效(47)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="table插件">table插件(1)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="文字特效">文字特效(20)</a>
			<a href="http://zhangbailng.com" class="tagc5" title="图片特效">图片特效(61)</a>
			<a href="http://zhangbailng.com" class="tagc1" title="在线客服">在线客服(4)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="瀑布流">瀑布流(10)</a>
			<a href="http://zhangbailng.com" class="tagc5" title="网友蘑菇">网友蘑菇(0)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="网友嘿嘿">网友嘿嘿(3)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="网友嘿嘿">网友嘿嘿(3)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="网友嘿嘿">网友嘿嘿(3)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="网友嘿嘿">网友嘿嘿(3)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="网友嘿嘿">网友嘿嘿(3)</a>
			<a href="http://zhangbailng.com" class="tagc2" title="网友嘿嘿">网友嘿嘿(3)</a>
       </div>
    </div>
  </li>
  <li class="item">
    <h4>微信扫一扫<b>+</b></h4>
    <div class="info"><img src="pic/2.png" ></div>
  </li>
  <li class="item">
    <h4>其他<b>+</b></h4>
    <div class="info"><img src="pic/1.png" ></div>
  </li>
</ul>
</div>

<div id="footer">
<!-- 底部  开始 -->
<footer class="footer mt-20">
	<div class="container">
		<nav class="footer-nav">
			<a target="_blank" href="http://zhangbailong.com">Loach</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">首页</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">顶部</a>
		</nav>
		<p>Copyright &copy;2016-2017 zhangbailong.com All Rights Reserved. <br>
		<a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">粤ICP备16026304号</a><br>
		分享生活，分享快乐，分享品质！<br>
		用心做站，做不一样的站</p>
		<nav class="footer-nav">
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
			<span class="pipe">|</span>
			<a target="_blank" href="http://zhangbailong.com">友情链接</a>
		</nav>
	</div>
</footer>
<!-- 底部  结束 -->
</div>

<script type="text/javascript" src="<?php echo $hui_Path;?>lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/bootstrap-Switch/bootstrapSwitch.js"></script> 
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="<?php echo $hui_Path;?>lib/Validform/5.3.2/passwordStrength-min.js"></script>
<script type="text/javascript" src="<?php echo $hui_Path;?>static/h-ui/js/H-ui.js"></script>
<script src="<?php echo $LoachBlog_Path; ?>/js/tagscloud.js" type="text/javascript"></script>
<script>
var navigation = responsiveNav("Hui-navbar", {customToggle: ".nav-toggle"});

$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$("#demoform").Validform({
		tiptype:2
	});
});


$(function ()
{ 
	
getBlogs();
$.Huifold("#Huifold1 .item h4","#Huifold1 .item .info","fast",1,"click");
$(window).on("scroll",$backToTopFun);$backToTopFun();
    
 });

function getBlogs()
{
	$.ajax({
	    type: 'POST',
	    async: true,
	    url:"<?php echo site_url()."/LoachBlog/LoachBlog/getBlogs";?>",
	    dataType: "json",
	    success: function(data)
	    {
	    	
	    	if(data)
              {                 	    		     	           
                  var html = '';
                  for (var i = 0; i <data['datalist'].length; i++) {
                      html += '<div class="blog_div">';
                      html += '<div class="blog_title_div">';
                      html += '<b><a href="#">'+data["datalist"][i].article_title+'</a></b>';
                      html += '</div>';
                      html += '<div class="blog_img_div">';
                      html += '<img src="<?php echo $LoachBlog_Path;?>/images/houzi.jpg" alt="图标" />';
                      html += '</div>';
                      html += '<div class="blog_intrduction_div">';
                      html += '<div class="blog_content_div">';
                      html += '<p>&nbsp;&nbsp;'+data["datalist"][i].article_introduction+'</p>';
                      html += '</div>';
                      html += '<div class="blog_read_div">';
                      html += '<div class="blog_readmore_div">';
                      html += '<center><a href="#" onclick="lookArticle('+data["datalist"][i].article_id+');">阅读全文>></a></center>';
                      html += '</div>';
                      html += '</div>';
                      html += '</div>';
                      html += '<div class="blog_author_div">';
                      html += '<div class="blog_author_details_div">&nbsp;&nbsp;&nbsp;&nbsp;时间:2016-02-01&nbsp;&nbsp;&nbsp;&nbsp;作者:loach&nbsp;&nbsp;&nbsp;&nbsp;个人笔记:[程序员]&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                      html += '</div>';
                      html += '</div>';
                  }
                  html +='<div sytle="margin-bottom:1px;float:right;border:1px solid red;height:30px;width:100%;line-height:30px;"><center><a href="javascript:void(0);" onclick="getMore();">加载更多博文</a></center></div>';
                  $("#panel-body").append(html); 
                                          
	          }
              else
              {	            	  
            	  alert(data);
	          }
	   }
	});
}

function lookArticle(id)
{
    
   $.ajax({
          type:'POST',
          async: true,
          url:"<?php echo site_url()."/LoachBlog/LoachBlog/getBlogById";?>",
  	      dataType: "json",
  	      data:{id:id},
  	      success:function(data)
  	      {
  	    	$("#panel-body").html('');
             var html='';
             if(data)
             {
                 html += '<div id="blog_content_id" class="blog_content_id" style="border:1px solid red;height:auto;">';
                 html += '<div class="blog_title_id" style="border:1px solid green;line-height: 29px;height:29px;">';
                 html += '<b><a href="#">'+data.article_title+'</a></b>';
                 html += '</div>';
                 html += '<div class="blog_article_content_id" style="border:1px solid yellow;height:auto;">';
                 html += ''+data.article_content+'';
                 html += '</div>';
                 html += '<div class="blog_author_div">';
                 html += '<div class="blog_author_details_div">&nbsp;&nbsp;&nbsp;&nbsp;浏览（1）&nbsp;&nbsp;&nbsp;&nbsp;时间:2016-02-01&nbsp;&nbsp;&nbsp;&nbsp;作者:loach&nbsp;&nbsp;&nbsp;&nbsp;个人博客:[程序员]&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                 html += '</div>';
                 html += '</div>';
                 $("#panel-body").append(html);
             }
      	  }
  	                  	    
          
       });
}

            
</script>
</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2015-8-4 -->

<?php 
header("Content-type:text/html;charset=utf-8"); 
$LoachBlog_Path=base_url()."communal/LoachBlog"; 
$Administrator_Path=base_url()."communal/Administrator";
$submit_Path=site_url();

?>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>Loach个人博客</title>     
<meta name="keywords" content="Loach个人博客">  
<link href="<?php echo $LoachBlog_Path;?>/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css">
<link href="<?php echo $LoachBlog_Path;?>/css/index.css" rel="stylesheet" type="text/css">
<script src="<?php echo $LoachBlog_Path;?>/js/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/core/base.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerLayout.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerDateEditor.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerPanel.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerMenu.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerMenuBar.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerToolBar.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path; ?>/js/tagscloud.js" type="text/javascript"></script>
<style type="text/css">
        body{ padding:20px; margin:0;}
        #panel1-1,#panel1-2,#panel1-3{margin:4px;}
</style>

</head>
<body>
 
  


    <div id="layout">
        <div position="top">
                <div id="topmenu" class="l-menubar" ligeruiid="topmenu">
                <div class="l-menubar-item l-panel-btn">
                 <input type="button" value="哈哈">              
                </div>
                <div class="l-menubar-item l-panel-btn">
                <span>导出</span>
                </div>
                </div>       
        </div>
        
        <!-- 博文内容 -->
        <div position="center" title="热门博文">
          <!-- 单篇博文简介 -->
          <div style="border:1px solid red;width:auto;height:202px;margin:2px;">
           <div style="line-height: 29px;border:1px solid green;width:auto;height:29px;clear:both;">
            <b><a href="#">第一篇 博文 我的程序世界</a></b>
           </div>
           <div style="width:130px;height:130px;float:left;">
             <img style="width:130px;height:130px;" src="" alt="图标" />
           </div>
           <div style="height:130px;margin-left:132px;">
                <div style="height:70px;margin:10px;">
                   <p>
                      &nbsp;&nbsp;博文 我的程序世界博文 我的程序世界博文 我的程序世界博文 我的程序世界博文 我的程序世界博文 我的程序世界
                   </p>
                </div>
                
                <div style="height:29px;margin:10;">
                  <div style="background:#fd8a61;float:right;width:85px;height:29px;line-height:29px;color: #fff;">
                     <center><a href="#">阅读全文》》</a></center>
                  </div>
                </div>
           </div>
           <div style="background:#f6f6f6;color: #838383;line-height:29px;border:1px solid green;width:auto;height:29px;clear:both;">
                               <div style="float:right;">&nbsp;&nbsp;&nbsp;&nbsp;时间:2016-02-01&nbsp;&nbsp;&nbsp;&nbsp;作者:loach&nbsp;&nbsp;&nbsp;&nbsp;个人博客:[程序员]&nbsp;&nbsp;&nbsp;&nbsp;</div>
           </div>
          
          </div>
          <!-- 单篇博文简介 -->
          
        </div>
        <!-- 博文内容 -->
        
        <!--  右边 插件 开始-->
        <div position="right"> 
        
	        <div id="panel1">
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
	        <div id="panel2">
	            
	        </div>
	        <div id="panel3">
	            
	        </div>
	            
                     
        </div>
        <!--  右边 插件 结束-->
        
        <!-- 底部 开始 -->
        <div position="bottom">
        111
        </div>    
	    <!-- 底部 开始 -->
	    </div>
<script type="text/javascript"> 


            $(function ()
            { 
                $("#layout").ligerLayout({rightWidth:310});
                $("#panel1").ligerPanel({title:'热门云标签',showToggler:true,width:300});
                $("#datetime").ligerDateEditor({absolute:false,showTime:true});
                $("#panel2").ligerPanel({title:'关注我',showToggler:true,width:300});
                $("#panel3").ligerPanel({title:'友情链接',showToggler:true,width:300});
            });

                        
</script> 
</body>  
</html>
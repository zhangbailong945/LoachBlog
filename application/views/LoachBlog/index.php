<?php 
header("Content-type:text/html;charset=utf-8"); 
$LoachBlog_Path=base_url()."communal/LoachBlog"; 
$Administrator_Path=base_url()."communal/Administrator";
$submit_Path=site_url();

?>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>布局控件</title>     
<meta name="keywords" content="免费控件,免费UI控件,免费开源UI,免费开源UI控件,免费开源UI框架,layout,布局控件">  
<link href="<?php echo $LoachBlog_Path;?>/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css">
<script src="<?php echo $LoachBlog_Path;?>/js/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/core/base.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerLayout.js" type="text/javascript"></script>
<style type="text/css">
        body{ padding:20px; margin:0;}
</style>

</head>
<body>
 


    <div id="layout">
        <div position="top">
                
        </div>
        <!-- 博文内容 -->
        <div position="center" title="热门博文">
          blog
        </div>
        <!-- 博文内容 -->
        <!--  -->
        <div position="right"> 
           <div id="panel1-1" style="float: left; width: 400px;" class="l-panel" ligeruiid="panel1-1">
	           <div class="l-panel-header">
	                <span>标题</span>
		           <div class="icons">
		           <a class="l-panel-icon l-panel-header-toggle" title="收起">
		           </a>
		           </div>
	           </div>
	           <div class="l-panel-content" style="height: 275px;">
	           <div>232454</div>
	           </div>
           </div>

        <div position="bottom">
        
        </div>
    </div>
<script type="text/javascript"> 
            $(function ()
            { 
                $("#layout").ligerLayout({rightWidth:300});
                $("#panel1-1").ligerPanel({
                    title: '标题',
                });
            });
             
</script> 
</body>  
</html>
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
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerDateEditor.js" type="text/javascript"></script>
<script src="<?php echo $LoachBlog_Path;?>/ligerUI/js/plugins/ligerPanel.js" type="text/javascript"></script>
<style type="text/css">
        body{ padding:20px; margin:0;}
        #panel1-1,#panel1-2,#panel1-3{margin:4px;}
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
        
        <!--  右边 插件 开始-->
        <div position="right"> 
        
	        <div id="panel1">
	           <input type="text" id="datetime" />
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
                $("#panel1").ligerPanel({title:'测试',showToggler:true,width:300});
                $("#datetime").ligerDateEditor({absolute:false,showTime:true});
                $("#panel2").ligerPanel({title:'测试',showToggler:true,width:300});
                $("#panel3").ligerPanel({title:'测试',showToggler:true,width:300});
            });
             
</script> 
</body>  
</html>
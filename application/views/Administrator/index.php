<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php  
header("Content-type:text/html;charset=utf-8"); 
$themes_Path=base_url()."communal/administrator"; 
$submit_Path=site_url();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoachBlog博客后台管理中心</title>

<link href="<?php echo $themes_Path; ?>/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $themes_Path; ?>/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $themes_Path; ?>/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<!--[if IE]>
<link href="<?php echo $themes_Path; ?>/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->

<!--[if lte IE 9]>
<script src="<?php echo $themes_Path; ?>/js/speedup.js" type="text/javascript"></script>
<![endif]-->

<script src="<?php echo $themes_Path; ?>/js/jquery-1.7.2.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/jquery.bgiframe.js" type="text/javascript"></script>

<script src="<?php echo $themes_Path; ?>/js/dwz.core.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.util.date.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.validate.method.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.regional.zh.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.barDrag.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.drag.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.tree.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.accordion.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.ui.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.theme.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.switchEnv.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.alertMsg.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.contextmenu.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.navTab.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.tab.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.resize.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.dialog.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.dialogDrag.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.sortDrag.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.cssTable.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.stable.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.taskBar.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.ajax.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.pagination.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.database.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.datepicker.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.effects.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.panel.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.checkbox.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.history.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.combox.js" type="text/javascript"></script>
<script src="<?php echo $themes_Path; ?>/js/dwz.print.js" type="text/javascript"></script>
<!--
<script src="bin/dwz.min.js" type="text/javascript"></script>
-->
<script src="<?php echo $themes_Path; ?>/js/dwz.regional.zh.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	DWZ.init("<?php echo $themes_Path; ?>/dwz.frag.xml", {
		loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"login.html",	// 跳到登录页面
		statusCode:{ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"themes"}); // themeBase 相对于index页面的主题base路径
		}
	});


	
	
});

/*判断输入框是否为空！*/
function checkEmpty(str)
{
    var flag=false;
    if(str=='undefined'||str==''||str==null)
    {
       flag=false;
    }
    else
    {
       flag=true;
    }
    return flag;
}

</script>
</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="http://j-ui.com">标志</a>
				<ul class="nav">
					<li style="color:#ddd">你好：<font color="blank"><?php echo $_SESSION['username'];?></font></li>
					<li><a href="#" target="_blank">修改密码</a></li>
					<li><a href="<?php echo $submit_Path; ?>/administrator/Login/loginout">退出</a></li>
				</ul>
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<!--<li theme="red"><div>红色</div></li>-->
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>

			<!-- navMenu -->
			
		</div>
		<!-- 导航栏的开始 -->
		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

				<div class="accordion" fillSpace="sidebar">
					<!-- 滑动菜单开始-->
					<div class="accordionHeader">
						<h2><span>Folder</span>用户管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree">
							<li><a href="<?php echo $submit_Path; ?>/administrator/Administrator/user_list" target="navTab" rel=userlist title="用户列表">浏览用户</a></li>
						</ul>
					</div>
					<!-- 滑动菜单结束 -->
					
					<div class="accordionHeader">
						<h2><span>Folder</span>组件的展示</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<li><a href="w_panel.html" target="navTab" rel="showPanel">面板</a></li>
							<li><a href="w_tabs.html" target="navTab" rel="dlg_page2">选项卡</a></li>
							<li><a href="w_tree.html" target="navTab" rel="showTree">树形菜单</a>
								<ul>
									<li><a href="">子菜单1</a></li>
									<li><a href="">子菜单2</a></li>
								</ul>
							</li>
							<li><a href="w_myform.html" target="navTab" rel="showform">编辑器/日历</a></li>
						</ul>
					</div>

					<div class="accordionHeader">
						<h2><span>Folder</span>流程演示</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree">
							<li><a href="newPage1.html" target="dialog" rel="dlg_page">列表</a></li>
							<li><a href="newPage1.html" target="dialog" rel="dlg_page2">列表</a></li>
						</ul>
					</div>
				
				</div>
			</div>
		</div>
		<!-- 导航栏的结束 -->
		
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
					<ul class="tabsMoreList">
					<li><a href="javascript:;">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<div class="alertInfo">
								<h2><a href="#">系统信息</a></h2>
								<a href="#" ><?php echo $systeminfo['system_os'] ?></a>
							</div>
							<div class="right">
								<p><a href="#" style="line-height:19px">运行环境：<?php echo $systeminfo['environment'] ?></a></p>
								<p><a href="#" style="line-height:19px">MYSQL版本：<?php echo $systeminfo['mysqlver'] ?></a></p>
							</div>
							<p><span>浏览器</span></p>
							<p><a href="#"><?php echo $systeminfo['browser'][0] . "&nbsp;" . $systeminfo['browser'][1] ?></a></p>
							
						</div>
						
						<div class="accountInfo">
						  <div class="alertInfo">
								<h2><a href="#">其他</a></h2>
								<a href="#" ></a>
							</div>
					    </div>	
					    
					    <div class="accountInfo">
						  <div class="alertInfo">
								<h2><a href="#">其他</a></h2>
								<a href="#" ></a>
							</div>
					    </div>		
					    
					    <div class="accountInfo">
						  <div class="alertInfo">
								<h2><a href="#">其他</a></h2>
								<a href="#" ></a>
							</div>
					    </div>		
					    
					    <div class="accountInfo">
						  <div class="alertInfo">
								<h2><a href="#">其他</a></h2>
								<a href="#" ></a>
							</div>
					    </div>	
					    
					    <div class="accountInfo">
						  <div class="alertInfo">
								<h2><a href="#">其他</a></h2>
								<a href="#" ></a>
							</div>
					    </div>		
					    
					    <div class="accountInfo">
						  <div class="alertInfo">
								<h2><a href="#">其他</a></h2>
								<a href="#" ></a>
							</div>
					    </div>		
					    
					    <div class="accountInfo">
						  <div class="alertInfo">
								<h2><a href="#">其他</a></h2>
								<a href="#" ></a>
							</div>
					    </div>										
					</div>
				</div>
				
				
			</div>
		</div>

	</div>

	<div id="footer">Copyright &copy; 2010 <a href="demo_page2.html" target="dialog">zhangbailong@outlook.com</a></div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php  
header("Content-type:text/html;charset=utf-8"); 
$themes_Path=base_url()."communal/administrator"; 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LoachBlog博客后台登录</title>
<link href="<?php echo $themes_Path; ?>/themes/css/login.css" rel="stylesheet" type="text/css" />

<script src="<?php echo $themes_Path; ?>/js/jquery-1.7.2.js" type="text/javascript"></script>

</head>

<body>
	<div id="login">
		<div id="login_header">
			<h1 class="login_logo">
				<a href="http://demo.dwzjs.com"><img src="<?php echo $themes_Path; ?>/themes/default/images/login_logo.gif" /></a>
			</h1>
			<div class="login_headerContent">
				<div class="navList">
					<ul>
						<li><a href="#">设为首页</a></li>
						<li><a href="#">反馈</a></li>
						<li><a href="#" target="_blank">帮助</a></li>
					</ul>
				</div>
				<h2 class="login_title"><img src="<?php echo $themes_Path; ?>/themes/default/images/login_title.png" /></h2>
			</div>
		</div>
		<div id="login_content">
			<div class="loginForm">
				<?php echo form_open('administrator/Login/login', 'id="loginform" onsubmit="return dosubmit();"'); ?>
					<p>
						<label>用户名：</label>
						<input type="text" name="username" id="username" size="20" class="login_input" placeholder="请输入用户名" />
					</p>
					<p>
						<label>密码：</label>
						<input type="password" name="userpassword" id="userpassword" size="20" class="login_input" placeholder="请输入密码" />
					</p>
					<p>
						<label>验证码：</label>
						<input type="text" id="authcode_input" class="code" type="text" size="5"  name="authcode_input" id value="<?php echo set_value('authcode_input'); ?>" onblur="ajaxauth();" placeholder="请输入验证码" />
						<a href="javascript:void(0)"><img id="authcode"src="<?php echo site_url().'/administrator/imgauthcode/show';?>" onclick="refresh('/administrator/imgauthcode/show')"/></a>
					</p>
					<div class="login_bar">
						<input class="sub" type="submit" value=" "/>
					</div>
					<p>
					<center><span id="message_sp"></span></center>
					</p>
				</form>
			</div>
			<div class="login_banner"><img src="<?php echo $themes_Path; ?>/themes/default/images/login_banner.jpg" /></div>
			<div class="login_main">
				<ul class="helpList">
					<li><a href="#">下载LoachBlog个人博客系统？</a></li>
					<li><a href="#">如何安装LoachBlog？</a></li>
					<li><a href="#">忘记密码怎么办？</a></li>
					<li><a href="#">为什么登录失败？</a></li>
				</ul>
				<div class="login_inner">
					<p>您可以LoachBlog迅速的搭建个人博客。</p>
					<p>您还可以使用LoachBlog构建自己的个人网上商店。</p>
					<p>LoachBlog超乎你的想象......</p>
				</div>
			</div>
		</div>
		<div id="login_footer">
			Copyright &copy; zhangbailong945@outlook.com , All Rights Reserved.
		</div>
	</div>
	<script type="text/javascript">

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

    /*刷新验证码*/
    function refresh()
    {
    var url='<?php echo site_url()."/administrator/imgauthcode/show/";?>'+Math.random();
    $('#authcode').attr('src', url);
    }

    /*用户名检查*/
    function check_username()
    {
        var flag=false;
    	var username = $('#username').val();
    	if(checkEmpty(username)==false)
    	{ 
        	$('#message_sp').html("<font color='red'>用户名不能为空！</font>");
        }
    	else
    	{
        	$.ajax({
        	    type: 'POST',
        	    async: false,
        	    url:"<?php echo site_url()."/administrator/Login/username_check/";?>"+username,
        	    dataType: "json",
        	    success: function(data)
        	    {

        	    	if(data)
		              {
			                  flag=true; 
		            	  $('#message_sp').html('');                   
			           }
		              else
		              {
		            	  flag=false;			            	  
		            	  $('#message_sp').html("<font color='red'>用户名不存在！</font>");
			          }
        	   }
        	});
    	}

        return flag;
    }
    
    /*用户名检查*/
    function check_userpassword()
    {
        var flag=false;
    	var userpassword = $('#userpassword').val();	
    	if(checkEmpty(userpassword)==false)
    	{
    		$('#message_sp').html("<font color='red'>密码不能为空！</font>");
        }
    	else
    	{
        	$.ajax({
        	    type: 'POST',
        	    async: false,
        	    url:"<?php echo site_url()."/administrator/Login/userpassword_check/";?>"+userpassword,
        	    dataType: "json",
        	    success: function(data)
        	    {

        	    	if(data)
		              {
        	    		flag=true; 
        	    		 $('#message_sp').html('');            
			           }
		              else
		              {
		            	  flag=false;			            	  
		            	  $('#message_sp').html("<font color='red'>密码不正确！</font>");
		              }
        	   }
        	});
    	}
        return flag;
    }
    
    

    /*验证码检查*/
    function ajaxauth()
    {
        var flag=false;
    	var authcode = $('#authcode_input').val();	
    	if(checkEmpty(authcode)==false)
    	{
    		$('#message_sp').html("<font color='red'>验证码不能为空！</font>");
        }
    	else
    	{
        	$.ajax({
        	    type: 'POST',
        	    async: false,
        	    url:"<?php echo site_url()."/administrator/imgauthcode/check/";?>"+authcode,
        	    dataType: "json",
        	    success: function(data)
        	    {

        	    	if(data)
		              {
			              flag=true; 
		            	  $('#message_sp').html('');                   
			           }
		              else
		              {
		            	  flag=false;			            	  
		            	  $('#message_sp').html("<font color='red'>验证码不正确！</font>");
			          }
        	   }
        	});
    	}
        return flag;
    }
    
    /*登录之前验证*/
    function dosubmit()
    {
        var flag=false;
        if(check_username()&&check_userpassword()&&ajaxauth())
          {
        	flag=true;
          }
        else
          {
        	flag=false;                      
          }

       return flag;
    }
	</script>
</body>
</html>
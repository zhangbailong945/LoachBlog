<!DOCTYPE html>
<?php 
header("Content-type:text/html;charset=utf-8");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://localhost/LoachBlog/communal/Administrator/images/favicon.ico">

    <title>LoachBlog后台管理登录</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/LoachBlog/communal/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/LoachBlog/communal/Administrator/css/signin.css" rel="stylesheet">
    <link href="http://localhost/LoachBlog/communal/Administrator/themes/default/easyui.css" rel="stylesheet">
    <link href="http://localhost/LoachBlog/communal/Administrator/themes/icon.css" rel="stylesheet">
  </head>

  <body>
   <div class="main_div">
   
        <!-- 登录框 -->
	    <div class="container">      
	      <?php echo form_open('administrator/Login/login', 'class="form-signin" id="loginform" onsubmit="return dosubmit();"'); ?>
	      <form class="form-signin">
	        <h2 class="form-signin-heading" style="color:white"><b>登录</b></h2>
	        <input type="text" name="username" id="username"  value="<?php echo set_value('username'); ?>" onblur="check_username();" class="form-control"  placeholder="请输入管理员账号">
	        <input type="password" name="userpassword" id="userpassword" value="<?php echo set_value('userpassword'); ?>" onblur="check_userpassword();" class="form-control" placeholder="请输入管理员密码">
	        <label class="authcode_lab">
	        <input type="text" id="authcode_input" class="authcode_input" name="authcode_input" id value="<?php echo set_value('authcode_input'); ?>" onblur="ajaxauth();" placeholder="请输入验证码">&nbsp;&nbsp;<a href="javascript:void(0)"><img id="authcode"src="<?php echo site_url().'/administrator/imgauthcode/show';?>" onclick="refresh('/administrator/imgauthcode/show')"/></a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="refresh()">看不清？</a>
	        </label>
	        <!--  
	        <center>
	        <label class="checkbox">
	          <input type="checkbox"  value="remember-me" ><font style="color:white">记住密码</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" style="color:white" value="forget"><font style="color:white">忘记密码</font>
	        </label>
	        </center>
	        -->
	        <button class="btn btn-lg btn-primary btn-block" style="color:white" type="submit">登  录</button>
	      </form>
	    </div>
	    
	    <!-- 错误信息框 
	    <div class="error_div" id="error_div">
	    </div>
	    -->
    </div>
    
    <!--雪花落脚点 -->
    <div class="drop">
    </div>

    <!-- 引入脚本 -->
     <script src="http://localhost/LoachBlog/communal/bootstrap/js/bootstrap.min.js"></script>
     <script src="http://localhost/LoachBlog/communal/administrator/js/jquery-1.4.4.min.js"></script>
     <script src="http://localhost/LoachBlog/communal/administrator/js/jquery.easyui.min.js"></script>
     <script src="http://localhost/LoachBlog/communal/Administrator/js/christmassnow.js"></script>
     <script>
            /*雪花飘飘*/
            $(document).ready(function() {
                $('body').christmassnow({
                    snowflaketype: 1, // 一共有25种雪花的形状可以选择，大家可以试试从1-25都换了看看效果
                    snowflakesize: 1, // 1为随机大小，2为统一自定义大小，建议1，毕竟雪花不是统一一个大小的吧
                    snowflakedirection: 1, // 1意味着没有风（上下），2是随机的，3左右、4左右
                    snownumberofflakes: 4, //雪花数量
                    snowflakespeed: 10, // 默认是10 掉落速度越大 就掉的越快
                    flakeheightandwidth: 15 // 如果选项flakesize的值是2，flakeheightandwidth值应该是16×16像素。
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
                	 $.messager.show({
	          				title:'登录提示：',
	          				msg:'<font color="red">账号不能为空！</font>',
	          				showType:'slide',
	          				timeout:2000,
	          				width:188,
	          				height:88,
	          				
	          			});
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
				            	  $('#error_div').html('');                   
					           }
				              else
				              {
				            	  flag=false;			            	  
				            	  $.messager.show({
				          				title:'登录提示：',
				          				msg:'<font color="red">账号不存在！</font>',
				          				showType:'slide',
				          				timeout:2000,
				          				width:188,
				          				height:88,
				          				
				          			});
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
            		$.messager.show({
          				title:'登录提示：',
          				msg:'<font color="red">密码不能为空！</font>',
          				showType:'slide',
          				timeout:2000,
          				width:188,
          				height:88,
          				
          			});
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
					           }
				              else
				              {
				            	  flag=false;			            	  
				            	  $.messager.show({
				          				title:'登录提示：',
				          				msg:'<font color="red">密码输入有误！</font>',
				          				showType:'slide',
				          				timeout:2000,
				          				width:188,
				          				height:88,
				          				
				          			});
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
            		$.messager.show({
          				title:'登录提示：',
          				msg:'<font color="red">验证码不能为空！</font>',
          				showType:'slide',
          				timeout:2000,
          				width:188,
          				height:88,
          				
          			});
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
				            	  $('#error_div').html('');                   
					           }
				              else
				              {
				            	  flag=false;			            	  
				            	  $.messager.show({
				          				title:'登录提示：',
				          				msg:'<font color="red">验证码输入有误！</font>',
				          				showType:'slide',
				          				timeout:2000,
				          				width:188,
				          				height:88,
				          				
				          			});
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

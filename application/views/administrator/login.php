<!DOCTYPE html>
<html>
  <head>
    <title>LoachBlog 后台管理中心</title>
    <!-- Bootstrap -->
    <link href="http://localhost/LoachBlog/communal/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="http://localhost/LoachBlog/communal/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="http://localhost/LoachBlog/communal/Administrator/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://localhost/LoachBlog/communal/Administrator/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  </head>
  <body id="login">

    
    
    <div class="container">
      <?php echo validation_errors(); ?>

<?php echo form_open('administrator/Login/login', 'class="form-signin" id="loginform"'); ?>
      <form class="form-signin">
        <h2 class="form-signin-heading" style="color:white"><b>登录</b></h2>
        <input type="text" name="username"  value="<?php echo set_value('username'); ?>" class="input-block-level" placeholder="请输入管理员账号">
        <input type="password" name="userpassword" value="<?php echo set_value('userpassword'); ?>" class="input-block-level" placeholder="请输入管理员密码">
        <label class="checkbox">
          <center><input type="checkbox"  value="remember-me" ><font style="color:white">记住密码</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" style="color:white" value="forget"><font style="color:white">忘记密码</font></center>
        </label>
        <button class="btn btn-large btn-primary" style="color:white" type="submit">登  录</button>
      </form>

    </div> <!-- /container -->
    <div class="drop">
        </div>
    <script src="http://localhost/LoachBlog/communal/Administrator/vendors/jquery-1.9.1.min.js"></script>
    <script src="http://localhost/LoachBlog/communal/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/LoachBlog/communal/Administrator/vendors/christmassnow.js"></script>
    <script>
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
        </script>
        <style type="text/css">
            body{
				 overflow-x:hidden;
                width:100%;
                height:100%;
                background:url('http://localhost/LoachBlog/communal/Administrator/images/background.jpg') no-repeat;
            }
        </style>
  </body>
</html>
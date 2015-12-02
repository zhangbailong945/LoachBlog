    <link href="http://localhost/LoachBlog/communal/LoachBlog/css/login.css" rel="stylesheet" media="screen">
    <div class="container">

      <form class="form-signin">
        <span class="label label-warning"><?php echo $message; ?></span>
        <label for="inputEmail" class="sr-only">邮箱地址</label>
        <input type="email" name="username" id="inputEmail" class="form-control" placeholder="请输入邮箱地址" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="请输入密码" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">记住密码
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
      </form>

    </div> <!-- /container -->


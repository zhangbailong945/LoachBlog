<?php

  /**
   * 登录控制层
   * 功能：前台登录管理
   * @author Long
   */
  class Login_Controller extends CI_Controller
  {
  	
  	public function __construct()
    {

        parent::__construct();

        /*判断是否登录，判断当前URL是否是auth/login*/

        if ( ! $this->tank_auth->is_logged_in()

                && ( $this->router->fetch_class() != 'auth' && $this->router->fetch_method() != 'login'))

        {

            $redirect = $this->uri->uri_string();

         

            if ( $_SERVER['QUERY_STRING'])

            {

                $redirect .= '?' . $_SERVER['QUERY_STRING'];

            }

            /*跳转到用户登陆页面，指定Login后跳转的URL*/

            redirect('auth/login?redirect='.$redirect);

        }   

    }
  	
  	
  }
  
?>
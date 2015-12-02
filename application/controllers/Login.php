<?php

  /**
   * 登录控制层
   * 功能：前台登录管理
   * @author Long
   */
  class Login extends CI_Controller{
  	
  	/**
  	 * 功能：登录验证
  	 */
    public function index()
    {
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->helper('url');
		if($username == 'admin@admin' && $password == 'buzhidao'){
			$title['title'] = "菜单页面";
    		$this->load->view('templates/header',$title);
			$this->load->view('LoachBlog/index');
			$this->load->view('templates/footer');
		}else{
			$title['title'] = "登录页面";
			$title['message']="邮箱地址或密码有误！";
    		$this->load->view('templates/header',$title);
			$this->load->view('LoachBlog/login',$title);
			$this->load->view('templates/footer');
		}    	
    }
  	
  }
  
?>
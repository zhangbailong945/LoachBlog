<?php

class Login extends CI_Controller
{
	
	/**
	 * 继续父类控制器
	 * Enter description here ...
	 */
	 public function __construct()
	 {
	    parent::__construct();
	    $this->load->helper (array('form','url'));
	    $this->load->library('session');
	 }
	 
     public function index()
     {
       $this->load->view('administrator/login');
     }
	 	 
	 /**
	  * 登录
	  * Enter description here ...
	  */
     public function login()
     {
     	$this->load->helper('form');
        $this->load->library('form_validation');     	
		$this->form_validation->set_rules('username',"管理员账号",'required');
		$this->form_validation->set_rules('userpassword',"管理员密码",'required');
		$bool =  $this->form_validation->run();
		if($bool==FALSE)
		{
		  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          $this->load->view('administrator/login');
		}
		else 
		{
            $this->load->view('administrator/administrator.html');
		}
     }
     
         
     
}


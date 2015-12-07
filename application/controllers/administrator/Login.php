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
     	
     	$this->form_validation->set_error_delimiters('<center><div class="alert alert-danger" style="width:300px;height:40px;" role="alert">', '</div></center>');
        $this->form_validation->set_rules('username_check', 'username_check', 'callback_username_check'); 
        $this->form_validation->set_rules('userpassword_check', 'userpassword_check', 'callback_userpassword_check');     	
		$this->form_validation->set_rules('username',"管理员账号",'required');
		$this->form_validation->set_rules('userpassword',"管理员密码",'required');
		$bool =  $this->form_validation->run();
		if($bool==FALSE)
		{
		  
          $this->load->view('administrator/login');
		}
		else 
		{
			$this->load->model('administrator/Musers');
            $flag=$this->Musers->user_login($this->input->post('username'),$this->input->post('userpassword'));
            if($flag==true)
            {
               $this->load->view('administrator/administrator.html');
            }
            else
            {
               $this->form_validation->set_message('username_check', '用户名不存在');
               redirect('administrator/login');
            }
		}
     }
     
     /**
       * 后台账号验证控制层
       *@param 管理员账号
       *@return Boolean
       */
     public function username_check()
     {

    	$this->load->model('administrator/Musers');
        $flag=$this->Musers->user_check($this->input->post('username'));                   
        if ($flag ==true)
        {

            return TRUE;
        }
        else
        {
        	$this->form_validation->set_message('username_check', '管理员账号不存在！');       
            return FALSE;
        }
     }
     
     /**
       * 后台密码验证控制器层
       *@param 管理员密码
       *@return Boolean
       */
     public function userpassword_check()
     {

    	$this->load->model('administrator/Musers');
        $flag=$this->Musers->password_check($this->input->post('userpassword'));                   
        if ($flag ==true)
        {

            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('userpassword_check', '管理员密码错误！');       
            return FALSE;
        }
     }
    
    
    
    
     
     
         
     
}


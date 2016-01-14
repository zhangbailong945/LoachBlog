<?php

class Administrator extends CI_Controller
{
	 public $systeminfo;
     public function __construct()
     {
        parent::__construct();
        $this->systeminfo();
        $this->load->database();
     }
     
/**
     * 获取系统参数
     */
    public function systeminfo() {
        $this->load->library('systeminfo');
        $this->systeminfo = array(
            'system_os' => $this->systeminfo->getOS(),
            'environment' => $this->systeminfo->server_software(),
            'phpapi' => $this->systeminfo->phphander(),
            'mysqlver' => $this->systeminfo->mysql_version('localhost',$this->db->username,$this->db->password),
            'browser' => $this->systeminfo->getBrowser(),
            'filelimit' => $this->systeminfo->post_max_size(),
            'execlimit' => $this->systeminfo->max_exec_time(),
        );
    }
    
    
     public function userpassword_update()
     {
           $this->load->model('administrator/Musers');
            $flag=$this->Musers->update_user($_SESSION['id'],$this->uri->segment(4));
            if($flag==true)
            {
                echo 'true';
            }
            else
            {
                echo 'false';
            }
     }
     
     public function index()
     {
     	  
          if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
          {
		      $this->load->library('systeminfo');
		      $data['systeminfo'] = $this->systeminfo;
              $this->load->view('administrator/index',$data);
          }
          else 
          {
              redirect('administrator/Login/login');
          }      
     }
     
     public function user_list()
     {
        $this->load->model('administrator/Musers');
        //$list=$this->Musers->get_users();
        $this->load->view('administrator/userlist');
     }
     
     
}
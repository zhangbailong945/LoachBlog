<?php

class Administrator extends CI_Controller
{
     public function __construct()
     {
        parent::__construct();
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
              $this->load->view('administrator/index');
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
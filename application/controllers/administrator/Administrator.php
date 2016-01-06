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
     
     public function users_view()
     {
       $this->load->model('administrator/users');
     }
     
     
}
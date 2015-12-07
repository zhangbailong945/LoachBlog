<?php
  class Musers extends  CI_Model
  {
  	
      public function __construct()
      {
        $this->load->database();
      }
      
      /**
       * 用户登录
       * Enter description here ...
       * @param unknown_type $username
       * @param unknown_type $userpassword
       */
      public function user_login($username,$userpassword)
      {
         $flag=false;
         $this->db->where('username',$username);
         $this->db->where('userpassword',$userpassword);
         $query=$this->db->get('users');
         if($query->num_rows()>0)
         {
            $flag=true;
         }
         else 
         {
            $flag=false;
         }
         
         return $flag;
         
      }
      
      /**
       * 后台账号验证模型层
       *@param 管理员账号
       *@return Boolean
       */
      public function user_check($username)
      {
         $flag=false;
         $this->db->where('username',$username);
         $query=$this->db->get('users');
         if($query->num_rows()>0)
         {
            $flag=true;
         }
         else 
         {
            $flag=false;
         }
         
         return $flag;
      }
      
      /**
       * 后台密码验证模型层
       *@param 管理员密码
       *@return Boolean
       */
      public function password_check($userpassword)
      {
         $flag=false;
         $this->db->where('userpassword',$userpassword);
         $query=$this->db->get('users');
         if($query->num_rows()>0)
         {
            $flag=true;
         }
         else 
         {
            $flag=false;
         }
         
         return $flag;
      }
      
  }
<?php

class Administrator extends CI_Controller
{
	 public $systeminfo;
	 private $where = array();
     private $limit = array();
     private $fields = array('id,username,userpassword,useremail,userip');
	 
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
     
    /**
     * 用户列表
     */
    public function user_list() {
        $this->load->library('tablecount'); //导入数据库表自定义类
        $total_data = $this->tablecount->get_tablecount('users', $this->where); //总条数
        $pageNum = isset($_POST['pageNum']) ? $_POST['pageNum'] : 1;
        $pageinfo = page($total_data, $pageNum); //计算分页总数和分页条件
        //var_dump($pageinfo);
        $this->load->library('tablelist'); //导入数据库表自定义类
        $this->limit = $pageinfo['limit'];
        $data = $pageinfo['pageinfo'];
        $data['datalist'] = $this->tablelist->get_tablelist('users', $this->where, $this->fields = array(), array(), $this->limit);
        $this->load->view('administrator/userlist', $data);
    }
     
     
}
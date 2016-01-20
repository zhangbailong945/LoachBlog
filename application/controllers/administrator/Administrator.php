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
        $keyword=$this->input->post('keyword');
        if(!empty($keyword))
        {
        	$this->where['username']=$keyword;
        }
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
    
    /**
     * 添加用户试图
     * Enter description here ...
     */
    public function useradd_view()
    {
          $this->load->view('administrator/useradd');
    }
    
    /**
     * 添加用户控制器
     */
    public function useradd_Controller()
    {
      
         $data=array('username'=>$this->input->post('username'),'userpassword'=>$this->input->post('userpassword'),'useremail'=>$this->input->post('useremail'),'userip'=>'192.168.0.1');
         $this->load->library('tableinsert');
         if($this->tableinsert->insert_table('users',$data)>0)
         {
            $this->return['statusCode'] = '200';
                $this->return['message'] = '操作成功';
                $this->return['navTabId'] = 'userlist';
                $this->return['callbackType']='closeCurrent';
                $this->return['forwardUrl'] = site_url().'/administrator/administrator/user_list';
         }
         else
         {
                $this->return['statusCode'] = '300';
                $this->return['message'] = '操作失败';
         }
         
         echo json_encode($this->return);
    }
    
    /**
     * 删除用户信息
     * Enter description here ...
     * @param $id 用户编号
     */
    public function userdelete_Controller($id)
    {
        $this->where = array('id' => dowith_sql(daddslashes(html_escape(strip_tags($id)))));
        $this->load->library('tabledel'); //导入数据库表自定义类
        if ($this->tabledel->del('users', $this->where) > 0) {
            $this->return['statusCode'] = '200';
            $this->return['message'] = '操作成功';
            $this->return['navTabId'] = 'showUsers';
            $this->return['callbackType'] = '';

        } else {
            $this->return['statusCode'] = '300';
            $this->return['message'] = '操作失败';
            $this->return['callbackType'] = '';
        }
        echo json_encode($this->return);
    }
     
     
}
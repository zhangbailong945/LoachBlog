<?php


/**
 * 文章控制器层
 */

class Article extends CI_Controller
{
     private $where = array();  /*条件*/
     private $limit = array();  /*分页*/
     
      function __construct(){
          parent::__construct();
          $this->load->database();
      }
      
     public function article_list()
     {
     	  
          if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
          {
              $this->load->library('tablecount'); //导入数据库表自定义类
		        $keyword=$this->input->post('keyword');
		        if(!empty($keyword))
		        {
		        	$this->where['article_title']=$keyword;
		        }
		        $total_data = $this->tablecount->get_tablecount('article', $this->where); //总条数
		        $pageNum = isset($_POST['pageNum']) ? $_POST['pageNum'] : 1;
		        $pageinfo = page($total_data, $pageNum); //计算分页总数和分页条件
		        //var_dump($pageinfo);
		        $this->load->library('tablelist'); //导入数据库表自定义类
		        $this->limit = $pageinfo['limit'];
		        $data = $pageinfo['pageinfo'];
		        $data['datalist'] = $this->tablelist->get_tablelist('article', $this->where, $this->fields = array(), array(), $this->limit);
		        $this->load->view('administrator/articlelist', $data);
          }
          else 
          {
              redirect('administrator/Login/login');
          }      
     }
     
     /*文章类型视图*/
     public function articleadd_view()
     {
     	if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
          {
          	$this->load->view('administrator/articleadd');
          }
          else
          {
            redirect('administrator/Login/login');
          }
     }
     /**
      * 添加文章类型
      * Enter description here ...
      */
     public function articleadd_Controller()
     {  
     	 $article_posttime=strtotime("now");
         $data=array(
         'article_author_id'=>$_SESSION['id'],
         'article_title'=>$this->input->post('article_title'),
         'article_type_id'=>$this->input->post('article_type_id'),
         'article_introduction'=>$this->input->post('article_introduction'),
         'article_content'=>$this->input->post('article_content'),
         'article_posttime'=>$article_posttime,
         'article_comment_nums'=>0,
         'article_view_nums'=>0,
         'article_tags'=>'php',
         'article_status'=>0         
         );
         
         $this->load->library('tableinsert');
         if($this->tableinsert->insert_table('article',$data)>0)
         {
                $this->return['statusCode'] = '200';
                $this->return['message'] = '操作成功';
                $this->return['navTabId'] = 'article';
                $this->return['callbackType']='closeCurrent';
                $this->return['forwardUrl'] = site_url().'/administrator/Article/article_list';
         }
         else
         {
                $this->return['statusCode'] = '300';
                $this->return['message'] = '操作失败';
         }
         
         
         echo json_encode($this->return);
     }
     
	 public function articledelete_Controller($id)
	    {
	        $this->where = array('article_type_id' => dowith_sql(daddslashes(html_escape(strip_tags($id)))));
	        $this->load->library('tabledel'); //导入数据库表自定义类
	        if ($this->tabledel->del('article_type', $this->where) > 0) {
	            $this->return['statusCode'] = '200';
	            $this->return['message'] = '操作成功';
	            $this->return['navTabId'] = 'articletype';
	            $this->return['callbackType'] = '';
	
	        } else {
	            $this->return['statusCode'] = '300';
	            $this->return['message'] = '操作失败';
	            $this->return['callbackType'] = '';
	        }
	        echo json_encode($this->return);
	    }
	    
	    
	      public function useradd_Controller()
	      {
	      
	         $data=array('username'=>$this->input->post('username'),'userpassword'=>$this->input->post('userpassword'),'useremail'=>$this->input->post('useremail'),'userip'=>'192.168.0.1');
	         $this->load->library('tableinsert');
	         if($this->tableinsert->insert_table('users',$data)>0)
	         {
	            $this->return['statusCode'] = '200';
	                $this->return['message'] = '操作成功';
	                $this->return['navTabId'] = 'article';
	                $this->return['callbackType']='closeCurrent';
	                $this->return['forwardUrl'] = site_url().'/administrator/article/article_list';
	         }
	         else
	         {
	                $this->return['statusCode'] = '300';
	                $this->return['message'] = '操作失败';
	         }
	         
	         echo json_encode($this->return);
	      }
      
      

}
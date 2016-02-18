<?php


/**
 * 文章类型控制器层
 */

class ArticleType extends CI_Controller{

	 private $where = array();  /*条件*/
     private $limit = array();  /*分页*/
     
      function __construct(){
          parent::__construct();
          $this->load->database();
      }
      
     public function articletype_list()
     {
     	  
          if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
          {
              $this->load->library('tablecount'); //导入数据库表自定义类
		        $keyword=$this->input->post('keyword');
		        if(!empty($keyword))
		        {
		        	$this->where['article_type_name']=$keyword;
		        }
		        $total_data = $this->tablecount->get_tablecount('article_type', $this->where); //总条数
		        $pageNum = isset($_POST['pageNum']) ? $_POST['pageNum'] : 1;
		        $pageinfo = page($total_data, $pageNum); //计算分页总数和分页条件
		        //var_dump($pageinfo);
		        $this->load->library('tablelist'); //导入数据库表自定义类
		        $this->limit = $pageinfo['limit'];
		        $data = $pageinfo['pageinfo'];
		        $data['datalist'] = $this->tablelist->get_tablelist('article_type', $this->where, $this->fields = array(), array(), $this->limit);
		        $this->load->view('administrator/articletypelist', $data);
          }
          else 
          {
              redirect('administrator/Login/login');
          }      
     }
     
     /*文章类型视图*/
     public function articletypeadd_view()
     {
     	if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
          {
          	$this->load->view('administrator/articletypeadd');
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
     public function articletypeadd_Controller()
     {  
         $data=array('article_type_name'=>$this->input->post('article_type_name'),'article_type_description'=>$this->input->post('article_type_description'));
         $this->load->library('tableinsert');
         if($this->tableinsert->insert_table('article_type',$data)>0)
         {
            $this->return['statusCode'] = '200';
                $this->return['message'] = '操作成功';
                $this->return['navTabId'] = 'articletype';
                $this->return['callbackType']='closeCurrent';
                $this->return['forwardUrl'] = site_url().'/administrator/ArticleType/articletype_list';
         }
         else
         {
                $this->return['statusCode'] = '300';
                $this->return['message'] = '操作失败';
         }
         
         echo json_encode($this->return);
     }
     
	 public function articletypedelete_Controller($id)
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
	    
	    /**
	     * 获取文章类型集合
	     * Enter description here ...
	     */
	    public function getArticleType_data()
	    {
	        $this->load->model('administrator/ArticleType_Model');
	        $data=$this->ArticleType_Model->getArticleTypeData();
	        echo json_encode($data);
	    }

}
<?php
class LoachBlog extends CI_Controller
{
	private $where = array();
    private $limit = array();
    function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }
    
    /***
     * 显示LoachBlog主页
     */
    function index()
    {
    	$this->load->view('LoachBlog/index');
    }
    
    function getBlogs()
    {
    	$this->load->library('tablecount'); //导入数据库表自定义类
        $keyword=$this->input->post('keyword');
        $total_data = $this->tablecount->get_tablecount('article', $this->where); //总条数
        $pageNum = isset($_POST['pageNum']) ? $_POST['pageNum'] : 1;
        $pageinfo = page($total_data, $pageNum); //计算分页总数和分页条件
        //var_dump($pageinfo);
        $this->load->library('tablelist'); //导入数据库表自定义类
        $this->limit = $pageinfo['limit'];
        $data = $pageinfo['pageinfo'];
        $data['datalist'] = $this->tablelist->get_tablelist('article', $this->where, $this->fields = array(), array(), $this->limit);
        echo json_encode($data);
    }
    
    function getBlogById()
    {
    	$id=$this->input->post('id');
    	$this->load->model('loachblog/Article_Model');
    	$data=$this->Article_Model->getArticleById($id);
    	echo json_encode($data);
    }
        

}


?>
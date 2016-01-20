<?php
class LoachBlog extends CI_Controller
{
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
    
    

}


?>
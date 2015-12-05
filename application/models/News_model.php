<?php

   class News_model extends CI_Model
   {
   	   //构造杉树加载数据库类
   	   public function __construct()
   	   {
   	   	  $this->load->database();
   	   }
   	   
   	   /**
   	    * 功能：获取新闻总条数
   	    * 参数：$slug参数，重载
   	    * 返回：false，返新闻。true返回新闻总署。
   	    */
   	   public function get_news($slug=false)
   	   {
   	   	  if($slug==false)
   	   	  {
   	   	  	$query=$this->db->get('news');
   	   	  	return $query->result_array();
   	   	  }
   	   	  
   	   	  $query=$this->db->get_where('news',array('slug'=>$slug));
   	   	  return $query->row_array();
   	   }
   	   
   	   
   	
   }

?>
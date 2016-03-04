<?php

class Article_Model extends CI_Model
{

	  function getArticleById($id)
	  {
         $data=array();	 
	     $this->db->where('article_id',$id);
         $query=$this->db->get('article');
         $row=$query->row();
	    if(isset($row))
		 {
		 	  $data['article_id']=$row->article_id;
	          $data['article_author_id']=$row->article_author_id;
	          $data['article_type_id']=$row->article_type_id;
	          $data['article_title']=$row->article_title;
	          $data['article_introduction']=$row->article_introduction;
	          $data['article_content']=$row->article_content;
	          $data['article_posttime']=$row->article_posttime;
	          $data['article_comment_nums']=$row->article_comment_nums;
	          $data['article_view_nums']=$row->article_view_nums;
	          $data['article_tags']=$row->article_tags;

		 }
         return $data;
	  }


}
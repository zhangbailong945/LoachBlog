<?php

/**
 * 文章类型模型层
 * Enter description here ...
 * @author Administrator
 *
 */
class ArticleType_Model extends CI_Model
{
	/**
	 * 获取文章类型集合
	 * Enter description here ...
	 */
	public function getArticleTypeData()
	{
         $data=array();	 
	     $query= $this->db->query("select * from article_type where 1=1");
		 foreach ($query->result_array() as $row)
		 {
			  $list=array();
	          $list['article_type_id']=$row['article_type_id'];
	          $list['article_type_name']=$row['article_type_name'];
              $data[]=$list;
		 }
         return $data;
	}
}
<?php 
header("Content-type:text/html;charset=utf-8"); 
$themes_Path=base_url()."communal/administrator"; 
$submit_Path=site_url();
?>
<form id="pagerForm" method="post" action="<?php echo site_url("administrator/ArticleType/articletype_list"); ?>">
    <input type="hidden" name="pageNum" value="<?php echo $total_page; ?>" />
    <input type="hidden" name="numPerPage" value="<?php echo $per_page_num; ?>" />
</form>

<div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" action="<?php echo site_url("administrator/ArticleType/articletype_list"); ?>" method="post">
	<div class="searchBar">
		
		<table class="searchContent">
			<tr>
				<td>
					关键字：<input type="text" name="keyword" /> [文章类型名称]
				</td>
			</tr>
		</table>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				<li><a class="button" href="demo_page6.html" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>
			</ul>
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="<?php echo $submit_Path; ?>/administrator/ArticleType/articletypeadd_view" height="300" width="800" target="dialog" rel="addUser"><span>添加</span></a></li>
			<li><a class="delete" href="<?php echo $submit_Path; ?>/administrator/ArticleType/articletypedelete_Controller/{article_type_id}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="demo_page4.html?uid={sid_user}" target="navTab"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="80">id</th>
				<th width="100">文章类型</th>
				<th width="60">类型描述</th>
				<th width="60">ip</th>
				<th width="120">Email</th>
			</tr>
		</thead>
		<tbody>
			     <?php foreach ($datalist as $val) { ?>
                <tr target="article_type_id" rel="<?php echo $val['article_type_id']; ?>">
                    <td><?php echo $val['article_type_id']; ?></td>
                    <td><?php echo $val['article_type_name']; ?></td>
                    <td><?php echo $val['article_type_description']; ?></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php } ?>		
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
		<!-- 
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			 -->
			<span>当前第<font color="blue"><?php echo $curr_page; ?></font>页，共<font color="blue"><?php echo $total_page; ?></font>页，有<font color="blue"><?php echo $total_data; ?></font>种文章类型。</span>
		</div>		
		        <div class="pagination" targetType="navTab" totalCount="<?php echo $total_data; ?>" numPerPage="<?php echo $per_page_num; ?>" pageNumShown="10" currentPage="<?php echo $curr_page; ?>"></div>

	</div>
</div>

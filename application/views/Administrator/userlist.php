<form id="pagerForm" method="post" action="demo_page1.html">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}" />
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="${model.numPerPage}" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
</form>


<div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" action="demo_page1.html" method="post">
	<div class="searchBar">
		
		<table class="searchContent">
			<tr>
				<td>
					关键字：<input type="text" name="keyword" /> [姓名、性别]
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
			<li><a class="add" href="useradd.html" height="300" width="800" target="dialog" rel="addUser"><span>添加</span></a></li>
			<li><a class="delete" href="dodel.html?uid={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="demo_page4.html?uid={sid_user}" target="navTab"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="20"><input type="checkbox" group="uid" class="checkboxCtrl"></th>
				<th width="80">序号</th>
				<th width="100">用户名</th>
				<th width="60">性别</th>
				<th width="60">年龄</th>
				<th width="120">Email</th>
				<th width="120">注册时间</th>
			</tr>
		</thead>
		<tbody>
			<tr target="sid_user" rel="1">
				<td><input name="uid" value="xxx" type="checkbox"></td>
				<td>1</td>
				<td>张三</td>
				<td>男</td>
				<td>30</td>
				<td>tao.zhang.tc@163.com</td>
				<td>2009-05-21</td>
			</tr>
			<tr target="sid_user" rel="2">
				<td><input name="uid" value="xxx" type="checkbox"></td>
				<td>2</td>
				<td>李四</td>
				<td>男</td>
				<td>30</td>
				<td>tao.zhang.tc@163.com</td>
				<td>2009-05-21</td>
			</tr>
			<tr target="sid_user" rel="3">
				<td><input name="uid" value="xxx" type="checkbox"></td>
				<td>2</td>
				<td>王五</td>
				<td>男</td>
				<td>30</td>
				<td>tao.zhang.tc@163.com</td>
				<td>2009-05-21</td>
			</tr>
			<tr target="sid_user" rel="2">
				<td><input name="uid" value="xxx" type="checkbox"></td>
				<td>22</td>
				<td>李四</td>
				<td>男</td>
				<td>30</td>
				<td>tao.zhang.tc@163.com</td>
				<td>2009-05-21</td>
			</tr>
			<tr target="sid_user" rel="3">
				<td><input name="uid" value="xxx" type="checkbox"></td>
				<td>2</td>
				<td>王五</td>
				<td>男</td>
				<td>30</td>
				<td>tao.zhang.tc@163.com</td>
				<td>2009-05-21</td>
			</tr>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>条，共20条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="120" numPerPage="10" pageNumShown="8" currentPage="5"></div>

	</div>
</div>

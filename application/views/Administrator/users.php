<?php 
header("Content-type:text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>jQuery EasyUI</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/LoachBlog/communal/Administrator/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/LoachBlog/communal/Administrator/themes/icon.css">
	<script type="text/javascript" src="http://localhost/loachblog/communal/administrator/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="http://localhost/loachblog/communal/administrator/js/jquery.easyui.min.js"></script>
	<script>
	$(function(){
		var pager = $('#dg').datagrid().datagrid('getPager');	// get the pager of datagrid
		pager.pagination({
			buttons:[{
				iconCls:'icon-search',
				handler:function(){
					alert('search');
				}
			},{
				iconCls:'icon-add',
				handler:function(){
					alert('add');
				}
			},{
				iconCls:'icon-edit',
				handler:function(){
					alert('edit');
				}
			}]
		});	

		ajax();
	});

	function ajax()
	{
		$.ajax({
    	    type: 'POST',
    	    async: false,
    	    url:"<?php echo site_url()."/administrator/administrator/user_list/";?>",
    	    dataType: "json",
    	    success: function(data)
    	    {

    	    	if(data)
	              {
		             alert(data);                 
		          }

    	    }
    	});	
    }
	</script>
</head>
<body>

	<table id="dg" title="Custom DataGrid Pager" style="width:700px;height:250px"
			data-options="rownumbers:true,singleSelect:true,pagination:true,url:'<?php echo site_url()."/administrator/administrator/user_list/";?>',method:'get'">
		<thead>
			<tr>
				<th data-options="field:'id',width:80">id</th>
				<th data-options="field:'username',width:100">username</th>
				<th data-options="field:'useremail',width:80,align:'right'">useremail</th>
				<th data-options="field:'userip',width:80,align:'right'">userip</th>
			</tr>
		</thead>
	</table>
	
	
</body>
</html>
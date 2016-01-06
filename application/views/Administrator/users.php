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
			$('#test').treegrid({
				title:'修改网页',
				iconCls:'icon-save',
				width:573,
				height:350,
				nowrap: false,
				rownumbers: true,
				animate:true,
				collapsible:true,
				url:'treegrid_data.json',
				idField:'id',
				treeField:'code',
				frozenColumns:[[
	                {title:'编码',field:'code',width:150,
		                formatter:function(value){
		                	return '<span style="color:red">'+value+'</span>';
		                }
	                }
				]],
				columns:[[
					{field:'name',title:'名称',width:120},
					{field:'role',title:'作用',width:120,rowspan:2},
					{field:'path',title:'路径',width:150,rowspan:2}
				]],
				onBeforeLoad:function(row,param){
					if (row){
						$(this).treegrid('options').url = 'treegrid_subdata.json';
					} else {
						$(this).treegrid('options').url = 'treegrid_data.json';
					}
				},
				onContextMenu: function(e,row){
					e.preventDefault();
					$(this).treegrid('unselectAll');
					$(this).treegrid('select', row.code);
					$('#mm').menu('show', {
						left: e.pageX,
						top: e.pageY
					});
				}
			});
		});

	
	</script>
</head>
<body>

	<table id="test"></table>
	
	<div id="mm" class="easyui-menu" style="width:600px;">
		<div onclick="append()">Append</div>
		<div onclick="remove()">Remove</div>
	</div>
</body>
</html>
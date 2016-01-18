<?php 
header("Content-type:text/html;charset=utf-8"); 
$themes_Path=base_url()."communal/administrator"; 
$submit_Path=site_url();

?>

<h2 class="contentTitle">添加用户信息</h2>


<div class="pageContent"  sytle="width:481px;">
	
	<form method="post" action="<?php echo $submit_Path; ?>/administrator/administrator/useradd_Controller" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogAjaxDone)">
		<div class="pageFormContent nowrap" layoutH="97">
			<dl>
				<dt>用户名：</dt>
				<dd>
					<input type="text" name="username" maxlength="20" class="required" />
				</dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd>
					<input type="text" name="userpassword" maxlength="20" class="required" />
				</dd>
			</dl>
			<dl>
				<dt>Email：</dt>
				<dd>
					<input type="text" name="useremail" maxlength="20" class="required email" />
				</dd>
			</dl>
			
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
	
</div>


<script type="text/javascript">
function customvalidXxx(element){
	if ($(element).val() == "xxx") return false;
	return true;
}
</script>

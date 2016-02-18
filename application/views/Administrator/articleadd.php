<?php 
header("Content-type:text/html;charset=utf-8"); 
$themes_Path=base_url()."communal/ueditor"; 
$submit_Path=site_url();

?>
<script type="text/javascript" charset="utf-8" src="<?php echo $themes_Path; ?>/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo $themes_Path; ?>/ueditor.all.min.js"> </script>

<h2 class="contentTitle">添加文章类型</h2>


<div class="pageContent"  sytle="width:481px;">
	
	<form method="post" action="<?php echo $submit_Path; ?>/administrator/ArticleType/articletypeadd_Controller" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogAjaxDone)">
		<div class="pageFormContent nowrap" layoutH="97">
			<dl>
				<dt>文章标题：</dt>
				<dd>
					<input type="text" name="article_type_name" maxlength="20" class="required" />
				</dd>
			</dl>
			<dl>
				<dt>文章类型：</dt>
				<dd>
					<select class="combox" id="articletype_combox" name="province" ref="w_combox_city" refUrl="demo/combox/city_{value}.html">

					</select>
				</dd>
			</dl>
			<dl>
				<dt>文章简介：</dt>
				<dd>
				<textarea class="editor" name="article_type_description" rows="4" cols="80"></textarea>
				</dd>
			</dl>
			<dl>
				<dt>文章内容：</dt>
				<dd>
				<script id="editor" type="text/plain" style="width:850px;height:200px;"></script>
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

var ue = UE.getEditor('editor');
$(function(){
   getArticleType();
});

function getArticleType()
{
	$.ajax({
	    type: 'POST',
	    async: false,
	    url:"<?php echo site_url()."/administrator/ArticleType/getArticleType_data/";?>",
	    dataType: "json",
	    success: function(data)
	    {
	    	$('#articletype_combox').html('');
	    	if(data)
              {
	              var html='';
                  for(var i=0;i<data.length;i++)
                  {
                       html+='<option value='+data[i].article_type_id+'>'+data[i].article_type_name+'</option>';
                  }
                  $('#articletype_combox').append(html);
	          }
              else
              {
            	  $('#articletype_combox').append('<option>暂无文章类型，请添加.</option>');
	          }
	   }
	});
}


</script>

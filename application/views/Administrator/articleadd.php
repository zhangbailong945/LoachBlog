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
					<input type="text" id="article_title" name="article_title" maxlength="20"  /><span id="article_title_check"></span>
				</dd>
			</dl>
			<dl>
				<dt>文章类型：</dt>
				<dd>
					<select class="combox" id="articletype_combox" name="article_type_id" ref="w_combox_city" refUrl="demo/combox/city_{value}.html">
                     <option value="0">请选择</option>
					</select>
					<span id="article_type_id_check"></span>
				</dd>
			</dl>
			<dl>
				<dt>文章简介：</dt>
				<dd>
				<textarea class="editor" id="article_introduction" name="article_introduction" rows="4" cols="80"></textarea><span id="article_introduction_check"></span>
				</dd>
			</dl>
			<dl>
				<dt>文章内容：</dt>
				<dd>
				<script id="editor" type="text/plain" style="width:850px;height:200px;"></script>
				<span id="article_content_check"></span>
				</dd>
			</dl>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="button" onclick="dosubmit();">提交</button></div></div></li>
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
	    	//$('#articletype_combox').html('');
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

//判断是否为空
function check_temp(str)
{
   if(typeof(str)!="undefined"&&str.length>0&&str!=null)
   {
      return true;
   }
   else
   {
      return false;
   }
}



/**
 * 判断文章标题
 */
function article_title_check()
{
   if(check_temp($('#article_title').val()))
   {
	   $('#article_title_check').html('&nbsp;&nbsp;<font color="green">ok!</font>');
       return true;
   }
   else
   {
	   $('#article_title_check').html('&nbsp;&nbsp;<font color="red">文章标题不能为空！</font>');
       return false;
   }
}

/**
 * 判断文章类型
 */
function article_type_id_check()
{
var va=parseInt($('#articletype_combox').val());
   if(va>0)
   {
	   $('#article_type_id_check').html('&nbsp;&nbsp;<font color="green">ok！</font>');
       return true;
   }
   else
   {
	   $('#article_type_id_check').html('&nbsp;&nbsp;<font color="red">请选择文章类型！</font>');
       return false;
   }
}

/**
 * 判断文章简介
 */
function article_introduction_check()
{
   if(check_temp($('#article_introduction').val()))
   {
	   $('#article_introduction_check').html('&nbsp;&nbsp;<font color="green">ok！</font>');
       return true;
   }
   else
   {
	   $('#article_introduction_check').html('&nbsp;&nbsp;<font color="red">文章简介不能为空！</font>');
       return false;
   }
}

/**
 * 判断文章内容
 */
function article_hasContent()
{
    if(ue.hasContents())
    {
    	$('#article_content_check').html('&nbsp;&nbsp;<font color="green">ok！</font>');
        return true;
    }
    else
    {
    	$('#article_content_check').html('&nbsp;&nbsp;<font color="red">文章简介不能为空！</font>');
         return false;
    }

}





function dosubmit()
{

	if(article_title_check()&&article_type_id_check()&&article_introduction_check()&&article_hasContent())
	{
	    var article_title=$('#article_title').val();
	    var article_type_id=$('#articletype_combox').val();
	    var article_introduction=$('#article_introduction').val();
	    var article_content=ue.getContent();
	    $.ajax({
    	    type: 'POST',
    	    async: false,
    	    url:"<?php echo site_url()."/administrator/Article/articleadd_Controller";?>",
    	    data:{article_title:article_title,article_type_id:article_type_id,article_introduction:article_introduction,article_content:article_content},
    	    dataType: "json",
    	    success: function(data)
    	    {

    	    	if(data.statusCode==DWZ.statusCode.ok)
        	      {
    	    		$.pdialog.closeCurrent();
                    location.href="<?php echo site_url()."/administrator/Article/article_list";?>";
		          }
	              else
	              {
	            	  navTab.closeCurrentTab();
		          }
    	   }
    	});
	}
    
}

</script>

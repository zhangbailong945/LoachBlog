<?php
/*这里是一个综合的微信封装类
 *回复用户各种类型的信息
 *2014-3-25 黄国金
*/
class class_weixin{
/*-----------------------------头部--------------------------------------*/
	/*这里是xml头部
	 * $fromUsername 发送方用户ID
	 * $toUsername   接收方用户ID
	 * $time         创建时间
	 * $MsgType      类型
	 */
	public function head($fromUsername,$toUsername,$time,$MsgType){
	  $con="<xml>
			<ToUserName><![CDATA[{$toUsername}]]></ToUserName>
			<FromUserName><![CDATA[{$fromUsername}]]></FromUserName>
			<CreateTime>{$time}</CreateTime>
			<MsgType><![CDATA[{$MsgType}]]></MsgType>";
	  return  $con;
	}
/*-----------------------------中间--------------------------------------*/
	/*这是回复用户的文本信息
	 *$MsgType 类型
	 *$Content 内容
	 *return   把封装好的xml格式的内容返回
	*/
	public function text($MsgType,$Content){
	    if($MsgType=='text'){//判断是否为文本信息
	      //把内容封装到xml中   {}的作用是主成一个语句块
	      $con="<Content><![CDATA[{$Content}]]></Content>";
	      return $con;
	    }else{
	      return '';
	    }
	}
	/**
	 *这里是图片回复信息
	 *$MsgType 类型
	 *$MediaId 通过上传多媒体文件，得到的id[图片的路径]
	 *return   把封装好的xml格式的内容返回
	 */
	public function image($MsgType,$MediaId){
		if($MsgType=='image'){//判断是否为图片
	      //把内容封装到xml中   {}的作用是主成一个语句块 
	      $con="<Image>
                <MediaId><![CDATA[{$MediaId}]]></MediaId>
                </Image>";
	      return $con;
	    }else{
	      return '';
	    }
	}
	/**
	 *这里是语音回复信息
	 *$MsgType 类型
	 *$MediaId 通过上传多媒体文件，得到的id[语音的路径]
	 *return   把封装好的xml格式的内容返回
	 */
	public function voice($MsgType,$MediaId){
		if($MsgType=='voice'){//判断是否为语音
	      //把内容封装到xml中   {}的作用是主成一个语句块 
	      $con="<Voice>
                <MediaId><![CDATA[{$MediaId}]]></MediaId>
                </Voice>";
	      return $con;
	    }else{
	      return '';
	    }
	}
	/**
	 * 这里是视频回复信息
	 *$MsgType 类型
	 *$MediaId 通过上传多媒体文件，得到的id[视频的路径]
	 *$title   视频消息的标题[非必须参数]
	 *Description 视频消息的描述[非必须参数]
	 *return   把封装好的xml格式的内容返回
	 */
	public function video($MsgType,$MediaId,$title,$description){
		if($MsgType=='video'){//判断是否为语音
	      //把内容封装到xml中   {}的作用是主成一个语句块 
	      $con="<Video>
				<MediaId><![CDATA[{$MediaId}]]></MediaId>
				<Title><![CDATA[{$title}]]></Title>
				<Description><![CDATA[{$description}]]></Description>
				</Video>";
	      return $con;
	    }else{
	      return '';
	    }
	}
	/**
	 *这里是音乐回复信息
	 *$MsgType 类型
	 *$MediaId 通过上传多媒体文件，得到的id[视频的路径]
	 *$title   视频消息的标题[非必须参数]
	 *Description 视频消息的描述[非必须参数]
	 *$MusicURL音乐链接[非必须参数]
	 *$HQMusicUrl 高质量音乐链接，WIFI环境优先使用该链接播放音乐[非必须参数]
	 *return   把封装好的xml格式的内容返回
	 */
	public function music($MsgType,$MediaId,$title,$description,$MusicURL,$HQMusicUrl){
		if($MsgType=='music'){//判断是否为音乐
	      //把内容封装到xml中   {}的作用是主成一个语句块 
	      $con="<Music>
				<Title><![CDATA[{$title}]]></Title>
				<Description><![CDATA[{$description}]]></Description>
				<MusicUrl><![CDATA[{$MusicURL}]]></MusicUrl>
				<HQMusicUrl><![CDATA[{$HQMusicUrl}]]></HQMusicUrl>
				<ThumbMediaId><![CDATA[{$MediaId}]]></ThumbMediaId>
				</Music>";
	      return $con;
	    }else{
	      return '';
	    }
	}
	/**
	 *这里是图文回复信息
	 *$MsgType 类型
	 *$value_arr array(标题,介绍,图片,超链接)
	 *$o_arr   array(条数,id)
	 *return   把封装好的xml格式的内容返回
	 *调用方法:
	 $arr[]=array("测试啦！","测试...","http://hgj123.gotoip55.com/image/3.jpg","http://baidu.com");
	 $arr[]=array("测试啦！","测试...","http://hgj123.gotoip55.com/image/2.jpg","http://baidu.com");
	 $arr[]=array("测试啦！","微测...","http://hgj123.gotoip55.com/image/1.gif","http://baidu.com");
	 $this->image_text("news",$arr,array(3,0));
	 *
	 */
	public function image_text($MsgType,$value_arr,$o_arr=array(0)){
		if($MsgType=='news'){//判断是否为图文
	      //把内容封装到xml中   {}的作用是主成一个语句块 
	      if($o_arr[0]>10){//判断循环次数是不是超过10 因为官方规定不能发itme中的次数超过10次
	        return '';
	      }
	      $con.="<ArticleCount>{$o_arr[0]}</ArticleCount>
	             <Articles>";
		 foreach($value_arr as $id=>$v){
		 if($id>=$o_arr[0]) break; else null; //判断数组数不超过设置数
	         $con.="<item>
					 <Title><![CDATA[{$v[0]}]]></Title> 
					 <Description><![CDATA[{$v[1]}]]></Description>
					 <PicUrl><![CDATA[{$v[2]}]]></PicUrl>
					 <Url><![CDATA[{$v[3]}]]></Url>
					</item>";}
		 $con.="</Articles>
     	        <FuncFlag>{$o_arr[1]}</FuncFlag>";  
         return $con;
	    }else{
	      return '';
	    }
	}

/*-----------------------------尾部--------------------------------------*/
   public function  bottom(){
       $con="</xml>";
       return $con;
   }
}
　　
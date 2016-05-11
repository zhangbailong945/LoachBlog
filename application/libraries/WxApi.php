<?php

class WxApi{

	public $token='longbaizhang';
	public $debug=TRUE;
	public $CI;
	
	public function __construct(){
		log_message('debug', "Weixinapi Class Initialized.");
		$this->CI=&get_instance();
		$this->valid();
	}
	
    /**
     * 
     *接入验证
     */
	public function valid()
    {
        $echoStr =$this->CI->input->get("echostr");
        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }

	/**
	 * 签名验证
	 * @throws Exception
	 */
    public function checkSignature()
	{
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature =$this->CI->input->get("signature");
        $timestamp =$this->CI->input->get("timestamp");
        $nonce =$this->CI->input->get("nonce");
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}


}
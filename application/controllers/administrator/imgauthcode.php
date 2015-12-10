<?php

class Imgauthcode extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('Authcode');
	}

	/**
	 * 显示图片
	 *
	 */
	function show()
	{
		$this->authcode->show();
	}

	/**
	 * js调用显示图片
	 *
	 */
	function show_script()
	{
		$this->authcode->showScript();
	}
	
	/**
	 * ajax验证
	 *
	 */
	function check()
	{
		if ($this->authcode->check($this->uri->segment(4))) {
			echo "true";
		} else {
			echo "false";
		}		
	}
}

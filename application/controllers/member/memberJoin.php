<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class memberJoin extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다  

	function memberJoin()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->model('member/membersJoin');
		$this->load->model('main/main_i');
		$this->load->model('sales/country_M');
		$this->load->helper('url');
		$this->load->helper('util_helper');
	}

	function index()
    {  
		$to = $_REQUEST['selnum'];
		$pw = $_REQUEST['password'];

		$insert['inserMem'] = $this->membersJoin->insertMem($to,$pw);
    }

	function searchMem()
    {  
		$mail = $_REQUEST['selnum'];
		$data['searchMem'] = $this->membersJoin->searchMember($mail);
		if(count($data['searchMem']) > 0)
		{
			print_r("fail");
		}
    }

	function loginMem()
    {  
		$mail = $_REQUEST['mail'];
		$password =  $_REQUEST['password'];
		$data['loginMem'] = $this->membersJoin->loginMember($mail,$password);
		if(count($data['loginMem']) == 1)
		{		
			print_r("success");
		}else{
			print_r("fail");
		}
    }

}
?>
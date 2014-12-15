<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class auth extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다  

	function auth()
	{
		parent::__construct();

		$this->CI =& get_instance();
		//$this->CI->load->config('auth', TRUE);
		$this->load->library('session'); 

		$this->load->database();
		$this->load->model('main/main_i');
		$this->load->model('member/membersJoin');
		$this->load->helper('url');
		$this->load->helper('util_helper');

		//$this -> load -> library('layout', 'layouts/layout_main');		
	}

	function index()
	{  		

		$data['country'] = $this->main_i->Country();
		$data['Travel'] = $this->main_i->Travel();
		$data['choice'] = $this->main_i->Admin_choice();

    	$this->load->view('include/header');
    	$this->load->view('main/contents' ,$data);
    	$this->load->view('include/footer');
	}

	/*회원 로그인페이지*/
	function Login_view()
	{
		$this->load->view('member/login');
	}

	/*회원가입페이지*/
	function member_join(){
		$this->load->view('member/member_join');
	}

	/*회원패스워드페이지*/
	function member_comfirm(){
		$this->load->view('member/member_confirm');
	}

	/*도시이동*/
	/*
	function city_search(){
		
		$data['country'] = $this->main_i->Country();

		$this->load->view('include/header');
		$this->load->view('contents/city',$data);
		$this->load->view('include/footer');
	}
	*/
	/*도시상세이동*/
	/*
	function Detailcity_search(){
		$this->load->view('include/header');
		$this->load->view('contents/detailCity');
		$this->load->view('include/footer');
	}
	*/
	//메일보내기
	function sendmail()
	{	
		$mode = $_REQUEST['selnum'];

		$date=date("Y-m-d H:i:s",time());
		$message="<a href='http://163.180.73.25/index.php/auth/member_comfirm?to=$mode' > 인증확인  </a>  admin@linkasia.co.kr<br>卓尼制作 : $date";
		
		$config['mailtype']  = "html";
		$config['charset']   = "utf-8";
		$config['protocol']  = "smtp";
		$config['smtp_host'] = "smtp.cafe24.com";
		$config['smtp_port'] = 587;
		$config['smtp_user'] = "admin@linkasia.co.kr";
		$config['smtp_pass'] = "1q2w3e4r";
		$config['smtp_timeout'] = 10;
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->clear();
		$this->email->from("admin@linkasia.co.kr", "Linkasia");
		$this->email->to($mode);
		$this->email->subject("test");//이메일 제목
		$this->email->message($message);

		$data = $this->email->send();
	}	
}

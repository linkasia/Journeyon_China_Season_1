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
		/*
		$mail = $_REQUEST['mail'];
		$password =  $_REQUEST['password'];
		if( $mail == "" || $password=="" ){

		}else{
			
		}
	
		$mail = "hhc@linkasia.co.kr";
		$password =  "1q2w3e4r";
		$this->login($mail,$password); 
				
		$login['user']=$this->membersJoin->loginMember($mail,$password);
*/
		//$this->login($mail,$password); 

		$data['country'] = $this->main_i->Country();
		$data['Travel'] = $this->main_i->Travel();
		$data['choice'] = $this->main_i->Admin_choice();

    	$this->load->view('include/header');
    	$this->load->view('main/contents' ,$data);
    	$this->load->view('include/footer');
	}

	function login() 
    {
        //폼 검증 라이브러리 로드 
		$this->load->library('form_validation'); 
		$this->load->helper('alert'); 

		//$mail = $_REQUEST['mail'];
		//$password =  $_REQUEST['password'];
		echo "->".$mail ;
		exit();
		//폼 검증할 필드와 규칙 사전 정의 
		$this->form_validation->set_rules('email','이메일', 'required|alpha_numeric'); 
		$this->form_validation->set_rules('password', '비밀번호','required'); 
        //echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
		if ( $this->form_validation->run() == TRUE ) 
		{
			$auth_data = array( 
				'email' => $this->input->post('email', TRUE), 
				'password' => $this->input->post('password', TRUE) 
			); 
			$result = $this->auth_m->login($auth_data); 
			if ( $result ) 
			{
				//세션 생성 
				$newdata = array( 
					'email' => $result->$mail, 
					'password' => $result->$password, 
					'logged_in' => TRUE 
                ); 
				$this->session->set_userdata($newdata); 
                //alert('Login Success', '/ci/board/lists/ci_board/page/1'); 
				exit; 
            } 
            else 
            { 
                //실패시 
				alert('Check your ID and Password', '/ci/board/lists/ci_board/page/1'); 
				exit; 
            } 
        } 
        else 
        {
			$data['country'] = $this->main_i->Country();
			$data['Travel'] = $this->main_i->Travel();
			$data['choice'] = $this->main_i->Admin_choice();

			$this->load->view('include/header');
			$this->load->view('main/contents' ,$data);
			$this->load->view('include/footer');
        } 
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

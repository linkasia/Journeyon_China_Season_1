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
		$this->load->model('sales/country_M');
		$this->load->helper('url');
		$this->load->helper('util_helper');

		//$this -> load -> library('layout', 'layouts/layout_main');
	}

	function index()
	{
		$data['country'] = $this->main_i->Country();
		$data['Travel'] = $this->main_i->Travel();
		$data['choice'] = $this->main_i->Admin_choice();
		$data['city'] = $this->main_i->cityList();

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
		$data['countryList'] = $this->main_i->country();
		$this->load->view('member/member_confirm',$data);
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
		$mail = $_REQUEST['selnum'];
		$mode = $_REQUEST['mode'];
		$random = $_REQUEST['ran'];
		$date=date("Y-m-d H:i:s",time());
		$message = "";
		$mailTitle = "";
		if($mode == "password"){
			$result = $this->membersJoin->searchEmail($mail);
			$password = $result->password;
			$mailTitle = "패스워드 확인";
			$message="password : $password  <br />관리자문의 : admin@linkasia.co.kr<br>卓尼制作 : $date";
		}else if($mode == "mailChange"){
			$mailTitle = "인증번호 전송";
			$message="인증번호 : $random  <br />관리자문의 : admin@linkasia.co.kr<br>卓尼制作 : $date";
			print_r($mail);
		}else{
			$mailTitle = "感谢您注册，请验证您的邮箱！";
			$message="<div style='width: 100%; padding: 20px; background-color: #f0f1f5; color: #666;'>";
			$message.="<div style='width: 800px; background-color: #fff; margin: 20px; border: 1px solid #f0f1f5; padding: 20px; font-size: 1.2em;'>";

			$message.="<h1 style='text-align:center;'>感谢您注册Journey on！</h1><br>";
			$message.="<p>您的登陆名为：<span style='color:navy';>$mail</span><br>	点击以下链接，开始创造旅游新文化吧！</p><br>";
			$message.="<a href='http://www.linkasia.co.kr/index.php/auth/member_comfirm?to=$mail' style='color:navy';>http://www.linkasia.co.kr/index.php/auth/member_comfirm?to=$mail</a><br><br><br><br>

					<p>如果以上链接无法访问，请将该网址复制并粘贴至新的浏览器窗口中。<br>如果你错误地收到了此电子邮件，你无需执行任何操作来取消帐号！此帐号将不会启动。</p>
					<hr style='border:none; color:red; background-color:red; height: 1px; width: 99%;'>
					<p>我是系统自动发送的邮件，请不要直接回复哦。</p>
				</div>";
			$message.="</div>";
		}



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
		$this->email->from("admin@linkasia.co.kr", "journeyon");
		$this->email->to($mail);
		$this->email->subject($mailTitle);//이메일 제목
		$this->email->message($message);

		$data = $this->email->send();
	}

	function chat_List(){
		$data['chatList'] = $this->country_M->ChatList($this->session->userdata['num']);
		$this->load->view('include/header');
		$this->load->view('contents/chatlist',$data);
		$this->load->view('include/footer');
	}
}

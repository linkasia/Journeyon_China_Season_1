<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class myPage_M extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다  

	function myPage_M()
	{
		parent::__construct();

		$this->CI =& get_instance();
		
		$this->load->library('session'); 

		$this->load->database();
		$this->load->model('main/main_i');
		$this->load->model('member/membersJoin');
		$this->load->helper('url');
		$this->load->helper('util_helper');
	}

	/*회원 로그인페이지*/
	function mypageIntro()
	{
		$this->load->view('include/header');
		$this->load->view('mypage/mypageMain');
		$this->load->view('include/footer');
	}

	/*profile*/
	function myprofile()
	{
		$this->load->view('mypage/myprofile');
	}

	
	function myChat()
	{
		$this->load->view('mypage/mypageChat');
	}

	function myAccount()
	{
		$this->load->view('mypage/mypageAccount');
	}

	function HostProduct()
	{
		$this->load->view('mypage/hostProduct');
	}

	function HostSales()
	{
		$this->load->view('mypage/hostSales');
	}

	function HostCancel()
	{
		$this->load->view('mypage/hostCancel');
	}

	function HostProfit()
	{
		$this->load->view('mypage/hostProfit');
	}

	function GuestCounsel()
	{
		$this->load->view('mypage/guestCounsel');
	}

	function Guestwish()
	{
		$this->load->view('mypage/guestwish');
	}

	function GuestBeen()
	{
		$this->load->view('mypage/guestBeen');
	}

	function GuestCancel()
	{
		$this->load->view('mypage/guestCancel');
	}

}

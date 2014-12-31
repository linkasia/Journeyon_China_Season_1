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
		$this->load->model('mypage/myModify');
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
/*	function myprofile()
	{
		$this->load->view('mypage/myprofile');
	}
*/
	function mypublic(){
		$this->load->view('include/header');
		$this->load->view('mypage/menu_public');
		$this->load->view('include/footer');
	}

	function myguide(){
		$this->load->view('include/header');
		$this->load->view('mypage/menu_guide');
		$this->load->view('include/footer');
	}

	function myaccountSetting(){
		$this->load->view('include/header');
		$this->load->view('mypage/menu_account');
		$this->load->view('include/footer');
	}

	function myguest(){
		$this->load->view('include/header');
		$this->load->view('mypage/menu_guest');
		$this->load->view('include/footer');
	}

	function myAccount(){
		$data['city'] = $this->main_i->cityList();
		$data['countryList'] = $this->main_i->country();
		$this->load->view('mypage/m_accountSetting1',$data);
	}

	function myPayment(){
		$this->load->view('mypage/m_accountSetting2');
	}

	function myV_Certicification(){
		$this->load->view('mypage/m_accountSetting3');
	}

	function myGuideAdmin(){
		$this->load->view('mypage/m_guide1');
	}

	function myItemAdmin(){
		$this->load->view('mypage/m_guide2');
	}

	function mySalesAdmin(){
		$this->load->view('mypage/m_guide3');
	}

	function myCancelAdmin(){
		$this->load->view('mypage/m_guide4');
	}

	function myGuideHome(){
		$this->load->view('mypage/m_guide0');
	}

	function mailChange(){
		$to = $_REQUEST['selnum'];
		$update['mailUpdate'] = $this->myModify->updateMail($to, $this->session->userdata['email']);
	}

	function changePassword(){
		$newPass = $_REQUEST['newPass'];
		$to = $this->session->userdata['email'];
		$update['passwordUpdate'] = $this->myModify->updatePassword($to, $newPass);
	}

}

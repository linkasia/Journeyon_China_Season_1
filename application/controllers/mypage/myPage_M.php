<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myPage_M extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다

	function myPage_M()
	{
		parent::__construct();

		$this->CI =& get_instance();

		$this->load->library('session');

		$this->load->database();
		$this->load->model('code/tb_code');
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

		$data['langList'] = $this->tb_code->langList();
		$data['learnList'] = $this->tb_code->learnList();
		$data['countryList'] = $this->main_i->Country();


		$this->load->view('include/header');
		$this->load->view('mypage/menu_public',$data);
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

	function changeCountry(){
		$countrySelectClass = $_REQUEST['countrySelectClass'];
		$code = $_REQUEST['code'];
		$to = $this->session->userdata['email'];
		$update['passwordUpdate'] = $this->myModify->updateCountry($to, $countrySelectClass,$code);
	}

	function profileModify(){
		$newdata = array(
			'user_num' =>$this->session->userdata['user_num'],
			'countrySelectClass' =>$_REQUEST['countrySelectClass'],
			'inputName' =>$_REQUEST['inputName'],
			'hiddenGerder' =>$_REQUEST['hiddenGerder'],
			'birth' =>$_REQUEST['birth'],
			'hiddenClass' =>$_REQUEST['hiddenClass'],
			'hiddenCode' =>$_REQUEST['hiddenCode'],
			'selectCtiy' =>$_REQUEST['selectCtiy'],
			'howlongCity' =>$_REQUEST['howlongCity'],
			'inputOccupation' =>$_REQUEST['inputOccupation'],
			'inputEducation' =>$_REQUEST['inputEducation'],
			'inputDetail' =>$_REQUEST['inputDetail'],
			'Language1' =>$_REQUEST['Language1'],
			'Language2' =>$_REQUEST['Language2'],
			'Language3' =>$_REQUEST['Language3'],
			'Language4' =>$_REQUEST['Language4'],
			'Language5' =>$_REQUEST['Language5'],
			'Language6' =>$_REQUEST['Language6'],
			'inputInteresting' =>$_REQUEST['inputInteresting'],
			'keyword1' =>$_REQUEST['keyword1'],
			'keyword2' =>$_REQUEST['keyword2'],
			'keyword3' =>$_REQUEST['keyword3']
		);

		$update['userUpdate'] = $this->myModify->updateUser($newdata);
	}
}

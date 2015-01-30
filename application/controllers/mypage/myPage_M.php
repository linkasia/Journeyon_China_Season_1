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
		$this->load->model('sales/country_M');
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

	function mypublic(){

		$data['langList'] = $this->tb_code->langList();
		$data['learnList'] = $this->tb_code->learnList();
		$data['countryList'] = $this->main_i->Country();

		$data['user'] = $this->myModify->myProfilePage($this->session->userdata['num']);

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
		$data['reservation'] = $this->myModify->mySellPage($this->session->userdata['num']);
		$this->load->view('mypage/m_guide3', $data);
	}

	function myCancelAdmin(){
		$this->load->view('mypage/m_guide4');
	}

	function myGuideHome(){
		$this->load->view('mypage/m_guide0');
	}

	function myGuestAdmin(){
		$data['bucketList'] =  $this->myModify->myBucketListPage($this->session->userdata['num']);
		$this->load->view('mypage/m_guest1' , $data);
	}

	function myGuestItemAdmin(){
		$data['reservation'] = $this->myModify->myReservationPage($this->session->userdata['num']);
		$data['mode']="";
		$this->load->view('mypage/m_guest2', $data);
	}

	function myGuestSalesAdmin(){

		$data['buyList'] = $this->myModify->myBuyListPage($this->session->userdata['num']);
		$this->load->view('mypage/m_guest3', $data);
	}

	function myGuestCancelAdmin(){
		$this->load->view('mypage/m_guest4');
	}

	function myBuyProduct(){
		$scontry = $_REQUEST['sClass'];
		$contry = $_REQUEST['code'];

		$data['slaesBuyList'] = $this->myModify->myBucketList($scontry, $contry, $this->session->userdata['num']);
		$this->load->view('mypage/productList', $data);
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
			'user_num' =>$this->session->userdata['num'],
			'inputName' =>$_REQUEST['inputName'],
			'hiddenGerder' =>$_REQUEST['hiddenGerder'],
			'birth' =>$_REQUEST['birth'],
			'hiddenClass' =>$_REQUEST['hiddenClass'],
			'hiddenCode' =>$_REQUEST['hiddenCode'],
			'countryNumber' =>$_REQUEST['countryNumber'],
			'phoneNumber'=>$_REQUEST['phoneNumber'],
			'selectCity' =>$_REQUEST['selectCity'],
			'howlongCity' =>$_REQUEST['howlongCity'],
			'inputOccupation' =>$_REQUEST['inputOccupation'],
			'textEducation' =>$_REQUEST['textEducation'],
			'inputJobDetail' =>$_REQUEST['inputJobDetail'],
			'Language1' =>$_REQUEST['Language1'],
			'Language2' =>$_REQUEST['Language2'],
			'Language3' =>$_REQUEST['Language3'],
			'Language4' =>$_REQUEST['Language4'],
			'Language5' =>$_REQUEST['Language5'],
			'Language6' =>$_REQUEST['Language6'],
			'inputInteresting' =>$_REQUEST['inputInteresting'],
			'keyword1' =>$_REQUEST['keyword1'],
			'keyword2' =>$_REQUEST['keyword2'],
			'keyword3' =>$_REQUEST['keyword3'],
			'publicQQ' =>$_REQUEST['publicQQ'],
			'publicWeixin'=>$_REQUEST['publicWeixin']
		);

		$update['userUpdate'] = $this->myModify->updateUser($newdata);
	}

	function salesPage(){
		$data['salesProduct'] =$this->myModify->mySalesList($this->session->userdata['num'],'0001');
		$this -> load ->view('/mypage/m_guide2_tab1', $data);
	}

	function registringPage(){
		$data['salesProduct'] =$this->myModify->mySalesList($this->session->userdata['num'],'0002');
		$this -> load ->view('/mypage/m_guide2_tab1', $data);
	}

	function stopPage(){
		$data['salesProduct'] =$this->myModify->mySalesList($this->session->userdata['num'],'0003');
		$this -> load ->view('/mypage/m_guide2_tab1', $data);
	}
}

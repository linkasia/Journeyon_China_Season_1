<?
class adminMenu extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다

	function adminMenu()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('code/tb_code');
		$this->load->model('main/main_i');
		$this->load->model('sales/country_M');
		$this->load->model('admin/adminProcess');
		$this->load->helper('url');
		$this->load->helper('util_helper');
	}

	/*관리자 토탈메뉴*/
	function mainTotalMenu(){
		$this->load->view('include/header');
		$this->load->view('admin/adminmenu');
		$this->load->view('include/footer');
	}

	/*관리자 메인메뉴*/
	function mainMenu(){
		$this->load->view('admin/01main');
	}

	/*관리자 회원정보*/
	function mainMember(){
		$data['member']=$this->adminProcess->memberList();
		//$data['userInfo']=$this->adminProcess->VList();
		$this->load->view('admin/02Member',$data);
	}

	/*관리자 상품정보*/
	function mainProduct(){
		$data['productList']=$this->adminProcess->productAppovList();
		$this->load->view('admin/03Product',$data);
	}

	/*관리자 예약정보*/
	function mainBook(){
		$data['bookList']=$this->adminProcess->bookList();
		$this->load->view('admin/04Book',$data);
	}


	/*관리자 공지*/
	function mainNotice(){
		$this->load->view('admin/05Notice');
	}

	/*관리자 공지2*/
	function mainBoard(){
		$this->load->view('admin/06Board');
	}

	/*멤버 팝업*/
	function memberVget(){
		$user_num = $_REQUEST['user_num'];
		$data['vInfo']= $this->adminProcess->appovList($user_num,'0001');
		$this -> load ->view('/admin/02member_modal1',$data);
	}

	/*멤버 팝업*/
	function memberPget(){
		$user_num = $_REQUEST['user_num'];
		$data['pInfo']= $this->adminProcess->appovList($user_num,'0002');
		$this -> load ->view('/admin/02member_modal2',$data);
	}

	/*멤버 팝업*/
	function memberPGget(){
		$user_num = $_REQUEST['user_num'];
		$data['pgInfo']= $this->adminProcess->appovList($user_num,'0003');
		$this -> load ->view('/admin/02member_modal3',$data);
	}

	/*V인증 승인*/
	function memberVgetAppove(){
		$user_num = $_REQUEST['user_num'];
		$appovekey = $_REQUEST['appovekey'];
		$banTextarea = $_REQUEST['banTextarea'];
		$update['updateCerticification'] = $this->adminProcess->updateVCerticification($user_num,$appovekey,'0001',$banTextarea);
		$update['updateUserVget'] = $this->adminProcess->updateUserVget($user_num,'0001');
	}

	/*V인증 반려*/
	function memberVgetUnAppove(){
		$user_num = $_REQUEST['user_num'];
		$appovekey = $_REQUEST['appovekey'];
		$banTextarea = $_REQUEST['banTextarea'];
		$update['updateCerticification'] = $this->adminProcess->updateVCerticification($user_num,$appovekey,'0004',$banTextarea);
		$update['updateUserVget'] = $this->adminProcess->updateUserVget($user_num,'0004');
	}

	/*g인증 승인*/
	function memberPgetAppove(){
		$user_num = $_REQUEST['user_num'];
		$appovekey = $_REQUEST['appovekey'];
		$banTextarea = $_REQUEST['banTextarea'];
		$update['updateCerticification'] = $this->adminProcess->updateVCerticification($user_num,$appovekey,'0001',$banTextarea);
		$update['updateUserVget'] = $this->adminProcess->updateUserPget($user_num,'0001');
	}

	/*g인증 반려*/
	function memberPgetUnAppove(){
		$user_num = $_REQUEST['user_num'];
		$appovekey = $_REQUEST['appovekey'];
		$banTextarea = $_REQUEST['banTextarea'];
		$update['updateCerticification'] = $this->adminProcess->updateVCerticification($user_num,$appovekey,'0004',$banTextarea);
		$update['updateUserVget'] = $this->adminProcess->updateUserPget($user_num,'0004');
	}

	/*PG인증 승인*/
	function memberPggetAppove(){
		$user_num = $_REQUEST['user_num'];
		$appovekey = $_REQUEST['appovekey'];
		$banTextarea = $_REQUEST['banTextarea'];
		$update['updateCerticification'] = $this->adminProcess->updateVCerticification($user_num,$appovekey,'0001',$banTextarea);
		$update['updateUserVget'] = $this->adminProcess->updateUserPgget($user_num,'0001');
	}

	/*PG인증 반려*/
	function memberPggetUnAppove(){
		$user_num = $_REQUEST['user_num'];
		$appovekey = $_REQUEST['appovekey'];
		$banTextarea = $_REQUEST['banTextarea'];
		$update['updateCerticification'] = $this->adminProcess->updateVCerticification($user_num,$appovekey,'0004',$banTextarea);
		$update['updateUserVget'] = $this->adminProcess->updateUserPgget($user_num,'0004');
	}

	/*상품승인*/
	function productAppove(){
		//$user_num = $_REQUEST['user_num'];
		$product_num = $_REQUEST['product_num'];

		$update['updateProduct'] = $this->adminProcess->productState($product_num,'0001');
	}

	/*상품반려*/
	function productUnAppove(){
		$user_num = $_REQUEST['user_num'];
		$product_num = $_REQUEST['product_num'];

		$update['updateProduct'] = $this->adminProcess->productState($product_num,'0005');
	}

	/*관리자 회원정보*/
	function adminNotice(){
		$this->load->view('include/header');
		$this->load->view('admin/adminNotice');
		$this->load->view('include/footer');
	}
}
?>
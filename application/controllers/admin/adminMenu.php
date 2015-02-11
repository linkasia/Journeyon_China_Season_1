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
		$data['member']=$data['countryCityList'] = $this->adminProcess->memberList();
		$this->load->view('admin/02Member',$data);
	}

	/*관리자 상품정보*/
	function mainProduct(){
		$this->load->view('admin/03Product');
	}

	/*관리자 예약정보*/
	function mainBook(){
		$this->load->view('admin/04Book');
	}


	/*관리자 공지*/
	function mainNotice(){
		$this->load->view('admin/05Notice');
	}

	/*관리자 공지2*/
	function mainBoard(){
		$this->load->view('admin/06Board');
	}

}
?>
<?
class companyinfo extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다

	function companyinfo()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('code/tb_code');
		$this->load->model('main/main_i');
		$this->load->model('sales/country_M');
		$this->load->helper('url');
		$this->load->helper('util_helper');
	}

	/*도시이동*/
	function companyMain(){
		$mode = $_REQUEST['list'];
		$data['mode'] = $mode;

		$this->load->view('include/header');
		$this->load->view('companyinfo/companymenu',$data);
		$this->load->view('include/footer');
	}


	/*도시상세이동*/
	function Detailcity_search(){
		$this->load->view('include/header');
		$this->load->view('contents/detailCity');
		$this->load->view('include/footer');
	}

	function companyAbout(){
		$this->load->view('companyinfo/01about');
	}

	function companyWhy(){
		$this->load->view('companyinfo/02why');
	}

	function companyRecruit(){
		$this->load->view('companyinfo/03recruit');
	}

	function companyOurteam(){
		$this->load->view('companyinfo/04ourteam');
	}

	function companyContact(){
		$this->load->view('companyinfo/05contact');
	}

	function companyPrivacy(){
		$this->load->view('companyinfo/06privacy');
	}



}
?>
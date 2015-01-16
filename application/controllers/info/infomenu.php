<?
class infomenu extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다

	function infomenu()
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
	function infoMain(){
		$this->load->view('include/header');
		$this->load->view('info/infomenu');
		$this->load->view('include/footer');

	}
}
?>
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
		$mode = $_REQUEST['list'];
		$data['mode'] = $mode;

		$this->load->view('include/header');
		$this->load->view('info/infomenu',$data);
		$this->load->view('include/footer');
	}

	function infoMicrotravel(){
		$this->load->view('info/01microtravel');
	}

	function infoHowhost(){
		$this->load->view('info/02howhost');
	}

	function infoHowTraveler(){
		$this->load->view('info/03howtraveler');
	}

	function infoPrivacy(){
		$this->load->view('info/04privacy');
	}

	function infoFaq(){
		$this->load->view('info/05faq');
	}

}
?>
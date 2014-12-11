<?
class country extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다  

	function country()
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
	function city_search(){
		
		$scontry = $_REQUEST['scountry'];
		$contry = $_REQUEST['countryList'];
		
		$data['country'] = $this->main_i->Country();
		$data['choiceCountry'] = $this->main_i->choiceCountry($scontry,$contry);
		
		$data['guideType'] = $this->tb_code->guideType();
		$data['guide'] = $this->tb_code->guide();
		$data['theme'] = $this->tb_code->theme();
		$data['recommend'] = $this->tb_code->recommend();
		$data['sexual'] = $this->tb_code->sexual();
		

		$this->load->view('include/header');
		$this->load->view('contents/city',$data);
		$this->load->view('include/footer');
	}

	/*도시상세이동*/
	function Detailcity_search(){

		$salesNum = $_REQUEST['salesNum'];
		$data['salesBasic']= $this->country_M->salesDetailCountry($salesNum);

		$this->load->view('include/header');
		$this->load->view('contents/detailCity',$data);
		$this->load->view('include/footer');
	}

	/*도시상세이동*/
	function countryList(){
		$scountry = $_REQUEST['scountry'];
		$countryList = $_REQUEST['countryList'];
		
		$data['salesCountry']= $this->country_M->salesCountry($scountry,$countryList);

		$this->load->view("/contents/right_contents",$data);
	}

	/*QnA로 이동*/
	function pageQna(){
		$this->load->view('include/header');
		$this->load->view('contents/Qna');
		$this->load->view('include/footer');
	}

	/*QnA로 이동*/
	function pageProfile(){
		$this->load->view('include/header');
		$this->load->view('contents/pageProfile');
		$this->load->view('include/footer');
	}

	/*도시변경*/
	function searchCountry(){
		$scountry = $_REQUEST['scountry'];
		$countryList = $_REQUEST['countryList'];

		$guideType = $_REQUEST['guideType'];
		$genderCode = $_REQUEST['genderCode'];
		$temCode = $_REQUEST['temCode'];
		$recommend = $_REQUEST['recommend'];
		$guide = $_REQUEST['guide'];
		
		if($guideType != ""){
			$guideType = substr($guideType,0,strlen($guideType)-1);
		}
		if($genderCode != ""){
			$genderCode = substr($genderCode,0,strlen($genderCode)-1);
		}
		if($temCode != ""){
			$temCode = substr($temCode,0,strlen($temCode)-1);
		}
		if($recommend != ""){
			$recommend = substr($recommend,0,strlen($recommend)-1);
		}
		if($guide != ""){
			$guide = substr($guide,0,strlen($guide)-1);
		}

		$data['salesCountry']= $this->country_M->salesCountrySort($scountry, $countryList, $guideType, $genderCode, $temCode ,$recommend ,$guide);

		$this->load->view("/contents/right_contents",$data);
		
	}
	
	/*상세페이지1*/
	function detailCity1(){
		$salesNum = $_REQUEST['salesNum'];
		$data['salesCity']= $this->country_M->salesDetailCity($salesNum);
		$this->load->view("/contents/salesCity1",$data);
	}

	/*상세페이지2*/
	function detailCity2(){
		$salesNum = $_REQUEST['salesNum'];
		$data['salesCityQnA']= $this->country_M->salesDetailCityQnA($salesNum);
		$this->load->view("/contents/salesCity2",$data);
	}

	/*상세페이지3*/
	function detailCity3(){
		$this->load->view("/contents/salesCity3");
	}
}
?>
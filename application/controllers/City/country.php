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
		$data['countryCityList'] = $this->country_M->cityList($scontry,$contry);

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

		$data['salesCountry']= $this->country_M->salesCountry($scountry,$countryList,null);

		$this->load->view("/contents/frm_city",$data);
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
		$selectCityList = $_REQUEST['selectCityList'];

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

		$data['salesCountry']= $this->country_M->salesCountrySort($scountry, $countryList, $guideType, $genderCode, $temCode ,$recommend ,$guide,$selectCityList);

		$this->load->view("/contents/frm_city",$data);

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
		$data['salesCityQnA2']= $this->country_M->salesDetailCityQnA2($salesNum);
		$this->load->view("/contents/salesCity2",$data);
	}

	/*상세페이지3*/
	function detailCity3(){
		$salesNum = $_REQUEST['salesNum'];
		$user = $_REQUEST['user'];

		$data['userInfo']= $this->country_M->detailUser($user);
		$data['userSales']= $this->country_M->userSales($user);

		$this->load->view("/contents/salesCity3",$data);
	}

	/*Question 입력*/
	function Question(){
		$salesNum = $_REQUEST['salesNum'];
		$content = $_REQUEST['content'];
		$userNum = $_REQUEST['userNum'];

		$insert['insertQuestion'] = $this->country_M->insertQuestion($salesNum,$content,$userNum);

		$data['salesCityQnA']= $this->country_M->salesDetailCityQnA($salesNum);
		$data['salesCityQnA2']= $this->country_M->salesDetailCityQnA2($salesNum);
		$this->load->view("/contents/salesCity2",$data);
	}

	/*Agency 입력*/
	function Agency(){
		$salesNum = $_REQUEST['salesNum'];
		$content = $_REQUEST['content'];
		$qna_num = $_REQUEST['qna_num'];
		$userNum = $this->session->userdata['num'];

		$insert['insertAgency'] = $this->country_M->insertAgency($salesNum, $content, $qna_num, $userNum);

		$data['salesCityQnA']= $this->country_M->salesDetailCityQnA($salesNum);
		$data['salesCityQnA2']= $this->country_M->salesDetailCityQnA2($salesNum);
		$this->load->view("/contents/salesCity2",$data);
	}


	/*상품 업로드 입력*/
	function productUpload(){

		$insert['insertproduct'] = $this->country_M->insertproduct($this->session->userdata['num']);
		$data['country'] = $this->main_i->Country();

		$this->load->view('include/header');
		$this->load->view('contents/productWrite',$data);
		$this->load->view('include/footer');
	}

	/*도시 콤보박스*/
	function changeCity(){
		$countrySelectClass = $_REQUEST['countrySelectClass'];
		$code = $_REQUEST['code'];

		$data['city'] = $this->main_i->choiceCityList($countrySelectClass, $code);
		$this->load->view('contents/comboCity',$data);
	}
}
?>
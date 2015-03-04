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
		if(@$this->session->userdata['logged_in'] == TRUE){
			$user_num = $this->session->userdata['num'];
			$data['bucketList']= $this->country_M->bucketLikeList($salesNum,$user_num);
		}else{
			$data['bucketList']= null;
		}

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

		//$data['ImageCity']= $this->country_M->salesImageCity($salesNum);

		$this->load->view("/contents/frm_city",$data);

	}

	/*상세페이지1*/
	function detailCity1(){
		$salesNum = $_REQUEST['salesNum'];
		//$data['mode'] = $_REQUEST['mode'];
		$data['salesCity']= $this->country_M->salesDetailCity($salesNum);
		$data['ImageCity']= $this->country_M->salesImageCity($salesNum);

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
		$data['ImageCity']= $this->country_M->salesImageCity($salesNum);

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


	/*상품 저장*/
	function productUpload(){
		$insert['insertproduct'] = $this->country_M->insertproduct($this->session->userdata['num']);
		$data['country'] = $this->main_i->Country();
		//내가 저장한 값을 가져오기 위한 쿼리
		$result = $this->country_M->maxProduct();
		$data['maxProduct'] = $result->product_num;

		$data['theme'] = $this->tb_code->theme();
		$data['recommend'] = $this->tb_code->recommend();

		//$data['recommend'] = $this->country_M->salesDetailCity();

		$this->load->view('include/header');
		$this->load->view('contents/productWrite',$data);
		$this->load->view('include/footer');
	}

	/*상품 업데이트*/
	function productUpdate(){
		$data['country'] = $this->main_i->Country();
		$data['theme'] = $this->tb_code->theme();
		$data['recommend'] = $this->tb_code->recommend();
		$data['maxProduct'] = $_REQUEST['maxProduct'];

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

	/*상품등록시 취소*/
	function deleteProduct(){
		$product_num = $_REQUEST['product_num'];
		$delete['insertproduct'] = $this->country_M->deleteProduct($product_num);
	}

	/*상품저장*/
	function updateProduct(){
		$product_num = $_REQUEST['product_num'];
		$productTitle = $_REQUEST['productTitle'];
		$productContents = $_REQUEST['productContents'];
		$onePrice = $_REQUEST['onePrice'];
		$timeSet = $_REQUEST['timeSet'];
		$meetPlace = $_REQUEST['meetPlace'];
		$include = $_REQUEST['include'];
		$notinclude = $_REQUEST['notinclude'];
		$etc = $_REQUEST['etc'];
		$theme1 = $_REQUEST['theme1'];
		$theme2 = $_REQUEST['theme2'];
		$theme3 = $_REQUEST['theme3'];
		$priceMember1 = $_REQUEST['priceMember1'];
		$priceMember2 = $_REQUEST['priceMember2'];
		$selectClassCountry = $_REQUEST['selectClassCountry'];
		$selectCodeCountry = $_REQUEST['selectCodeCountry'];
		$selectCity = $_REQUEST['selectCity'];

		$update['updateproduct'] = $this->country_M->updateProduct($product_num, $productTitle ,$productContents ,$onePrice ,$timeSet ,$meetPlace ,$include ,$notinclude ,$etc ,$theme1 ,$theme2 ,$theme3 ,$priceMember1 ,$priceMember2, $selectClassCountry, $selectCodeCountry, $selectCity);
	}

	/*이미지저장*/
	function imgUpload(){
		$product_num = $_REQUEST['hiddenProductNum'];
		$pictureCaption = $_REQUEST['pictureCaption'];
		$pictureTitle = $_REQUEST['pictureTitle'];
		$pictureSeq = $_REQUEST['hiddenId'];

		$save_dir = $_SERVER["DOCUMENT_ROOT"]."/application/productImages/".$product_num."/";

		if(is_uploaded_file($_FILES["file-upload"]["tmp_name"]))
		{
			if(!is_dir($save_dir)){
				umask(0);
				@mkdir($save_dir, 0777);
				chmod($save_dir, 0777);
			}
			$dest=$save_dir.$_FILES["file-upload"]["name"];
			$filePath="/application/productImages/".$product_num."/".$_FILES["file-upload"]["name"];
			if(!move_uploaded_file($_FILES["file-upload"]["tmp_name"],$dest)){
				die("file save fail");
			}
			$insert['insertProductImg'] = $this->country_M->insertImg($product_num,$pictureTitle,$pictureCaption,$pictureSeq ,$filePath);
			print_r($filePath);
		}
	}

	/*이미지 삭제*/
	function imgDelete(){
		$imgPath = $_REQUEST['imgPath'];
		$product_num = $_REQUEST['product_num'];
		$hiddenId = $_REQUEST['hiddenId'];

		@unlink($imgPath);

		$Delete['deleteProductImg'] = $this->country_M->deleteImg($product_num,$hiddenId);
	}

	/*채팅저장*/
	function insertChating(){
		$salesNum = $_REQUEST['hiddenProduct'];
		$contents = $_REQUEST['recheckTextarea'];
		$user_num = $this->session->userdata['num'];

		$result = $this->country_M->maxChatNum();
		$maxNum="";
		if($result->chat_num == null){
			$maxNum= 0;
		}else{
			$maxNum = $result->chat_num;
		}

		$insert['chatSend']= $this->country_M->chatSend($maxNum, $salesNum, $contents, $user_num );
		$data['salesCity']= $this->country_M->salesDetailCity($salesNum);
		$data['SendList']= $this->country_M->chatDetailList($result->chat_num);
		//$data['BookList']= $this->country_M->bookinglList($salesNum,$user_num);

		$this->load->view('include/header');
		$this->load->view("/contents/chating",$data);
		$this->load->view('include/footer');

	}

	/*채팅페이지 이동*/
	function startDetailChating(){
		$salesNum = $_REQUEST['num'];
		$key =  $_REQUEST['key'];

		$data['salesCity']= $this->country_M->salesDetailCity($salesNum);
		$data['SendList']= $this->country_M->chatDetailList($key);

		$this->load->view('include/header');
		$this->load->view("/contents/chating",$data);
		$this->load->view('include/footer');
	}

	/*채팅시작*/
	function startChating(){
		$salesNum = $_REQUEST['salesNum'];
		$user_num = $this->session->userdata['num'];

		$data['SendList']= $this->country_M->chatStartList( $salesNum, $user_num );

		//$data['salesCityQnA2']= $this->country_M->salesDetailCityQnA2($salesNum);

		$this->load->view('include/header');
		$this->load->view("/contents/chating",$data);
		$this->load->view('include/footer');
	}

	//채팅저장
	function insertMainChating(){
		$productNum = $_REQUEST['productNum'];
		$contents = $_REQUEST['contents'];
		$user_num = $this->session->userdata['num'];
		$chatNum = $_REQUEST['chatNum'];

		$insert['chatSend']= $this->country_M->chatSend($chatNum, $productNum, $contents, $user_num );

		$data['SendList']= $this->country_M->chatDetailList($chatNum);
		$data['salesCity']= $this->country_M->salesDetailCity($productNum);
		$this->load->view("/contents/chating",$data);
	}

	//채팅저장
	function insertSubChating(){
		$productNum = $_REQUEST['productNum'];
		$contents = $_REQUEST['contents'];
		$user_num = $this->session->userdata['num'];
		$chatNum = $_REQUEST['chatNum'];

		$insert['chatSend']= $this->country_M->chatSubSend($chatNum, $productNum, $contents, $user_num );
		$data['SendList']= $this->country_M->chatDetailList($chatNum);
		$data['salesCity']= $this->country_M->salesDetailCity($productNum);
		$this->load->view("/contents/chating",$data);
	}

	//채팅실시간 로딩
	function dpTimeChating(){
		$productNum = $_REQUEST['productNum'];
		$user_num = $this->session->userdata['num'];
		$chatNum = $_REQUEST['chatNum'];

		$data['SendList']= $this->country_M->chatDetailList($chatNum);
		$data['salesCity']= $this->country_M->salesDetailCity($productNum);
		$this->load->view("/contents/chating",$data);
	}


	//예약 날짜 저장
	function insertBookingDate(){
		$productNum = $_REQUEST['hiddenProduct'];
		$personNum = $_REQUEST['personInput'];
		$user_num = $this->session->userdata['num'];
		$sdate = $_REQUEST['sDate'];
		$edate = $_REQUEST['eDate'];
		$productUserNum = $_REQUEST['hiddenRegisterNum'];
		$personInput = $_REQUEST['personInput'];
		$countryCode = $_REQUEST['countryCode'];
		$phoneInput = $_REQUEST['phoneInput'];
		$producttextArea = $_REQUEST['producttextArea'];

		$result = $this->country_M->maxBookNum();
		$maxNum="";
		if($result->chat_num == null){
			$maxNum= 0;
		}else{
			$maxNum = $result->book_num;
		}

		$insert['bookInsert']= $this->country_M->insertBooking( $maxNum,$productNum, $personNum, $user_num, $sdate, $edate, $productUserNum, $personInput, $countryCode, $phoneInput, $producttextArea );
		$insert['bookedHis']= $this->country_M->insertBookedHis( $maxNum,$productNum, $personNum, $user_num, $sdate, $edate, $productUserNum, $personInput, $countryCode, $phoneInput, $producttextArea );
	}

	//예약 날짜 저장
	function updateBookingDate(){
		$productNum = $_REQUEST['productNum'];
		$user_num = $this->session->userdata['num'];

		$update['stateCode']= $this->country_M->updateBooking( $productNum, $user_num );
	}


	function detailBooking(){
		$productNum = $_REQUEST['productNum'];
		$data['sDate'] = $_REQUEST['sDate'];
		$data['eDate'] = $_REQUEST['eDate'];
		$data['loginUser'] = $this->session->userdata['num'];
		$data['salesCity']= $this->country_M->salesDetailCountry($productNum);
		$data['countryNum']= $this->tb_code->countryNumber();


		$this->load->view('include/header');
		$this->load->view("/contents/detailBook",$data);
		$this->load->view('include/footer');
	}

	//좋아요 저장
	function procuctLike(){
		$salesNum = $_REQUEST['salesNum'];
		$user_num = $this->session->userdata['num'];

		$update['like']= $this->country_M->insertLike( $salesNum, $user_num );
	}

	//좋아요 삭제
	function procuctLikeDown(){
		$salesNum = $_REQUEST['salesNum'];
		$user_num = $this->session->userdata['num'];

		$delete['like']= $this->country_M->deleteLike( $salesNum, $user_num );
	}

	//채팅삭제
	function deleteChat(){
		$delete['chat']= $this->country_M->deleteChat();
		$delete['chatReply']= $this->country_M->deleteReplyChat();
	}

	//상품미리보기
	function proviewSales(){
		$salesNum = $_REQUEST['salesNum'];

		$data['salesCity']= $this->country_M->salesDetailCity($salesNum);
		$data['ImageCity']= $this->country_M->salesImageCity($salesNum);

		$this->load->view('contents/preview',$data);
	}
}
?>
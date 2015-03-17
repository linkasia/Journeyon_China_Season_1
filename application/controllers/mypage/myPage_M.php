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
		$userNum = $_REQUEST['userNum'];

		$data['langList'] = $this->tb_code->langList();
		$data['learnList'] = $this->tb_code->learnList();
		$data['countryList'] = $this->main_i->Country();

		$data['user'] = $this->myModify->myProfilePage($userNum);

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
		$data['mode'] = "0";
		$this->load->view('include/header');
		$this->load->view('mypage/menu_account',$data);
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
		$data['certicification'] =  $this->myModify->myCerticificationState($this->session->userdata['num']);
		$this->load->view('mypage/m_accountSetting3',$data);
	}

	function myGuideAdmin(){
		$this->load->view('mypage/m_guide1');
	}

	function myItemAdmin(){
		$this->load->view('mypage/m_guide2');
	}

	function mySalesAdmin(){
		$update['stateCode'] = $this->myModify->updateBookView($this->session->userdata['num']);
		$data['reservation'] = $this->myModify->mySellPage($this->session->userdata['num']);
		$this->load->view('mypage/m_guide3', $data);
	}

	function myCancelAdmin(){
		$this->load->view('mypage/m_guide4');
	}

	function myGuideHome(){
		$this->load->view('mypage/m_guide0');
	}

	function myGuestHome(){
		$this->load->view('mypage/m_guest0');
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
		$hiddenPath = $_REQUEST['hiddenImagePath'];
		$hiddenMode = $_REQUEST['hiddenMode'];

		if(strlen($_REQUEST['inputJobDetail']) <= 15){
			print_r("inputJobDetail");
			return;
		}

		if(strlen($_REQUEST['inputInteresting']) <= 15){
			print_r("inputInteresting");
			return;
		}

		if(strripos($_REQUEST['publicWeixin'],"@") == null){
			print_r("publicWeixin");
			return;
		}else if(strripos($_REQUEST['publicWeixin'],".") == null){
			print_r("publicWeixin");
			return;
		}



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

		if($hiddenMode == "change"){
			$save_dir = $_SERVER["DOCUMENT_ROOT"]."/application/views/userImage/".$this->session->userdata['num']."/";
			if(is_uploaded_file($_FILES["inputImage"]["tmp_name"]))
			{
				if(!is_dir($save_dir)){
					umask(0);
					@mkdir($save_dir, 0777);
					chmod($save_dir, 0777);
				}

				$dest=$save_dir.$_FILES["inputImage"]["name"];
				$filePath="/application/views/userImage/".$this->session->userdata['num']."/".$_FILES["inputImage"]["name"];
				if(!move_uploaded_file($_FILES["inputImage"]["tmp_name"],$dest)){
					die("file save fail");
				}
				print_r($filePath);
				$update['userUpdate'] = $this->myModify->updateUser($newdata,$filePath);
			}
		}else{
			$update['userUpdate'] = $this->myModify->updateUser($newdata,$hiddenPath);
		}
	}

	function vCertification(){
		$user_num = $this->session->userdata['num'];
		$save_dir = $_SERVER["DOCUMENT_ROOT"]."/application/views/userImage/".$this->session->userdata['num']."/VCertification/";
		if(is_uploaded_file($_FILES["vCertification"]["tmp_name"]))
		{
			if(!is_dir($save_dir)){
				umask(0);
				@mkdir($save_dir, 0777);
				chmod($save_dir, 0777);
			}
			$fileDes = strripos($_FILES["vCertification"]["name"],'.');
			$fileName= substr($_FILES["vCertification"]["name"],$fileDes,4);

			$dest=$save_dir.time().$fileName;//$_FILES["vCertification"]["name"].time();
			//$filePath="/application/views/userImage/".$this->session->userdata['num']."/VCertification/".$_FILES["vCertification"]["name"];
			$filePath="/application/views/userImage/".$this->session->userdata['num']."/VCertification/".time().$fileName;;
			if(!move_uploaded_file($_FILES["vCertification"]["tmp_name"],$dest)){
				die("file save fail");
			}
			//print_r($filePath);
			$update['userUpdate'] = $this->myModify->updateUserCerticification($user_num);
			$insert['certicificationInsert'] = $this->myModify->insertCerticification($user_num,$filePath);
			$data['certicification'] =  $this->myModify->myCerticificationState($user_num);
			$data['mode'] = "2";
			$this->load->view('include/header');
			$this->load->view('mypage/menu_account',$data);
			$this->load->view('include/footer');
		}
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

	//예약취소
	function cancelBook(){
		$booknum = $_REQUEST['hiddenBookNum'];
		$cancelBookText = $_REQUEST['cancelBookText'];

		$update['BookCancelUpdate'] = $this->myModify->cancelBook($booknum,$cancelBookText);
		$update['BookCancelUpdateHis'] = $this->myModify->cancelBookHis($booknum);
	}

	//예약취소확인
	function cancelDetailBook(){
		$booknum = $_REQUEST['hiddenBookNum'];
		$data['bookDetail'] =$this->myModify->cancelBookDetail($booknum);
		$this -> load ->view('/mypage/cancelDetail', $data);
	}

	//상품정지
	function salesStop(){
		$productNum = $_REQUEST['productNum'];
		//print_r($procustNum);
		$update['salesStop'] = $this->myModify->productStop($productNum);
	}

	//상품삭제
	function salesDelete(){
		$productNum = $_REQUEST['productNum'];
		$result =  $this->myModify->comfirmDate($productNum);
		if($result->book_End_date > date("Y-m-d")){
			print_r("fail");
		}else{
			$update['salesStop'] = $this->myModify->productDelete($productNum);
		}
	}
}

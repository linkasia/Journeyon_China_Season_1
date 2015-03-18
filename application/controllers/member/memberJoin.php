<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class memberJoin extends CI_Controller { // controller 파일이름이 곧 class파일 이름이다

	function memberJoin()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('member/membersJoin');
		$this->load->model('main/main_i');
		$this->load->model('sales/country_M');
		$this->load->helper('url');
		$this->load->helper('util_helper');
	}

	function insertMember()
    {
		$to = $_REQUEST['selnum'];
		$pw = $_REQUEST['password'];
		$countrySelectClass = $_REQUEST["countrySelectClass"];

		$insert['inserMem'] = $this->membersJoin->insertMem($to,$pw, $countrySelectClass, $_REQUEST["code"]);
    }

	function searchMem()
    {
		$mail = $_REQUEST['selnum'];
		$data['searchMem'] = $this->membersJoin->searchMember($mail);
		if(count($data['searchMem']) > 0)
		{
			print_r("fail");
		}
    }

	function loginMem()
    {
		$mail = $_REQUEST['mail'];
		$password =  $_REQUEST['password'];
		$data['loginMem'] = $this->membersJoin->loginMember($mail,$password);
		if(count($data['loginMem']) == 1)
		{
			print_r("success");
		}else{
			print_r("fail");
		}
    }

	//로그인
	function login()
    {
		if($_POST)
		{
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];

			$result = $this->membersJoin->loginMember($email,$password);
			//echo "->".count($result);
			if($result)
			{
				$newdata = array(
						'num' =>$result->user_num,
						'email' => $result->email,
						'password' => $result->password,
						'messenger_qq' => $result->messenger_qq,
						'messenger_weixin' => $result->messenger_weixin,
						'phone_num_country' =>$result->phone_num_country,
						'phone_num_user' => $result->phone_num_user,
						'face_img_path' => $result->face_img_path,
						'country_nm' => $result->country_nm,
						'country_img' => $result->country_img,
						'Name_cn_en' => $result->Name_cn_en,
						'mother_area_code' =>$result->mother_area_code,
						'mother_country_code' => $result->mother_country_code,
						'mother_city_code' => $result->mother_city_code,
						'live_area_code' => $result->live_area_code,
						'live_country_code' =>$result->live_country_code,
						'live_city_code' => $result->live_city_code,
						'live_country_year' => $result->live_country_year,
						'birthday' => $result->birthday,
						'gender_code' => $result->gender_code,
						'job' => $result->job,
						'job_detail' => $result->job_detail,
						'v_get_code' =>$result->v_get_code,
						'g_get_code' => $result->g_get_code,
						'create_time' => $result->create_time,
						'logged_in' => TRUE
				);
				$this->session->set_userdata($newdata);
				//데이터 이동
				if($this->session->userdata['num']!=0){
					//echo "<script>alert('로그인 되었습니다.')</script>";
					print_r("succes");
/*
					$data['country'] = $this->main_i->Country();
					$data['Travel'] = $this->main_i->Travel();
					$data['choice'] = $this->main_i->Admin_choice();
					$data['city'] = $this->main_i->cityList();


					$this->load->view('include/header');
					$this->load->view('main/contents' ,$data);
					$this->load->view('include/footer');
*/
					//exit;
				}else{
					$this->session->sess_destroy();
					echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
					alert('승인된 아이디가 아닙니다!(관리자에게 문의하세요)','/index.php/auth');
					return false;
				}

			}
			else
			{
				print_r("fail");
			}
		}
		else
		{
			$data['country'] = $this->main_i->Country();
			$data['Travel'] = $this->main_i->Travel();
			$data['choice'] = $this->main_i->Admin_choice();
			$data['city'] = $this->main_i->cityList();

			$this->load->view('include/header');
			$this->load->view('main/contents' ,$data);
			$this->load->view('include/footer');
		}
    }

	//로그아웃
	function logout()
	{
		$this->session->sess_destroy();

		$data['country'] = $this->main_i->Country();
		$data['Travel'] = $this->main_i->Travel();
		$data['choice'] = $this->main_i->Admin_choice();
		$data['city'] = $this->main_i->cityList();

		$this->load->view('include/header');
		$this->load->view('main/contents' ,$data);
		$this->load->view('include/footer');
	}

	//페이스북 로그인
	function facebookLogin()
	{
		$this->load->view('member/facebooklogin' );
	}
}
?>
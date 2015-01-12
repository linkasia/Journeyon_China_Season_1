<?php
	class myModify extends CI_Model
	{
		function __construct()
		{
			parent::__construct();

			$this->load->helper('util_helper');
		}

		function updateMail($mail, $oldMail)
		{
			$sql ="UPDATE user SET email = '".$mail."'
							WHERE email = '".$oldMail."'";
			$query = $this->db->query($sql);
		}

		function updatePassword($mail, $password)
		{
			$sql ="UPDATE user SET password = '".$password."'
							WHERE email = '".$mail."'";
			$query = $this->db->query($sql);
		}

		function updateCountry($mail, $countrySelectClass,$code)
		{
			$sql ="UPDATE user SET mother_area_code = '".$countrySelectClass."',
																mother_country_code= '".$code."'
							WHERE email = '".$mail."'";
			$query = $this->db->query($sql);
		}

		function updateUser($dataList)
		{
			//print_r($this->inputDetail);

			$sql ="UPDATE USER
									SET
											messenger_qq = '' ,
											messenger_weixin = '' ,
											phone_num_country = '' ,
											phone_num_user = '' ,
											face_img_path = '' ,
											Name_cn_en = '' ,
											live_area_code = '' ,
											live_country_code = '' ,
											live_city_code = '' ,
											live_country_year = '' ,
											birthday = '' ,
											gender_code = '' ,
											job = '' ,
											job_detail = '' ,
											lang1_code = '' ,
											lang1_skill = '' ,
											lang2_code = '' ,
											lang2_skill = '' ,
											lang3_code = '' ,
											lang3_skill = '' ,
											special1_code = '' ,
											special2_code = '' ,
											special3_code = '' ,
											selfintroduce = '' ,
											interesting1 = '' ,
											interesting2 = '' ,
											v_get_code = '' ,
											g_get_code = ''
									WHERE user_num = '".$dataList['user_num']."' ";
			$query = $this->db->query($sql);

		}
	}
?>

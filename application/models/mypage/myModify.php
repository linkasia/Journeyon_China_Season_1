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
			$sql ="UPDATE USER
									SET
											messenger_qq = '".$dataList['publicQQ']."' ,
											messenger_weixin = '".$dataList['publicWeixin']."' ,
											phone_num_country = '".$dataList['countryNumber']."' ,
											phone_num_user = '".$dataList['phoneNumber']."' ,
											face_img_path = '' ,
											Name_cn_en = '".$dataList['inputName']."' ,
											live_area_code = '".$dataList['hiddenClass']."' ,
											live_country_code = '".$dataList['hiddenCode']."' ,
											live_city_code = '".$dataList['selectCity']."' ,
											live_country_year = '".$dataList['howlongCity']."' ,
											birthday = '".$dataList['birth']."' ,
											gender_code = '".$dataList['hiddenGerder']."' ,
											job = '".$dataList['inputOccupation']."' ,
											job_detail = '".$dataList['inputJobDetail']."' ,
											education='".$dataList['textEducation']."' ,
											lang1_code = '".$dataList['Language1']."' ,
											lang1_skill = '".$dataList['Language2']."' ,
											lang2_code = '".$dataList['Language3']."' ,
											lang2_skill = '".$dataList['Language4']."' ,
											lang3_code = '".$dataList['Language5']."' ,
											lang3_skill = '".$dataList['Language6']."' ,
											special1_code = '".$dataList['keyword1']."' ,
											special2_code = '".$dataList['keyword2']."' ,
											special3_code = '".$dataList['keyword3']."' ,
											selfintroduce = '' ,
											interesting1 = '".$dataList['inputInteresting']."' ,
											interesting2 = ''
									WHERE user_num = '".$dataList['user_num']."' ";
			$query = $this->db->query($sql);
		}

		function myProfilePage($num)
		{
			$sql ="SELECT *
					FROM user
					WHERE user_num = '".$num."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function myReservationPage($num)
		{
			$sql ="SELECT a.*,
											b.*,
											c.*,
											d.*,
											CASE WHEN fixed_fee = 0 THEN '未确认' ELSE fixed_fee END fixed_fee
							FROM user_order_product a
							LEFT JOIN product b ON a.product_num = b.product_num
							LEFT JOIN USER c ON b.user_num = c.user_num
							LEFT JOIN country_table d ON c.live_area_code = d.class AND c.live_country_code = d.code
							WHERE a.user_num = '".$num."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function myBuyListPage($num)
		{
			$sql ="SELECT COUNT(a.product_num) AS cnt,
											a.product_num,
											c.code_nm AS country_nm,
											c.ref1
							FROM user_order_product a
							LEFT JOIN product b ON a.product_num = b.product_num
							LEFT JOIN country_table c ON b.sortcountry = c.class AND b.country_code = c.code
							WHERE a.user_num = '".$num."'
							GROUP BY a.product_num, b.sortcountry, b.country_code";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}
	}
?>

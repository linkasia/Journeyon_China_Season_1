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

		function updateUser($dataList, $filePath)
		{
			$sql ="UPDATE USER
									SET
											messenger_qq = '".$dataList['publicQQ']."' ,
											messenger_weixin = '".$dataList['publicWeixin']."' ,
											phone_num_country = '".$dataList['countryNumber']."' ,
											phone_num_user = '".$dataList['phoneNumber']."' ,
											face_img_path = '".$filePath."' ,
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
									//print_r($sql);
			$query = $this->db->query($sql);
		}

		function myProfilePage($num)
		{
			$sql ="SELECT *,
											DATE_FORMAT(create_time,'%Y-%m-%d') AS joindate
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
							//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function mySellPage($num)
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
							WHERE a.product_user_num = '".$num."'";
							//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function myBuyListPage($num)
		{
			$sql ="SELECT COUNT(a.product_num) AS cnt,
											a.product_num,
											b.sortcountry,
											b.country_code,
											c.code_nm AS country_nm,
											c.ref1
							FROM user_order_product a
							LEFT JOIN product b ON a.product_num = b.product_num
							LEFT JOIN country_table c ON b.sortcountry = c.class AND b.country_code = c.code
							WHERE a.user_num = '".$num."'
							AND a.order_type_code = '0001'
							GROUP BY b.sortcountry, b.country_code";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function myBucketListPage($num)
		{
			$sql ="SELECT COUNT(a.product_num) AS cnt,
											a.product_num,
											b.sortcountry,
											b.country_code,
											c.code_nm AS country_nm,
											c.ref1
								FROM user_has_bucket_list a
								LEFT JOIN product b ON a.product_num = b.product_num
								LEFT JOIN country_table c ON b.sortcountry = c.class AND b.country_code = c.code
								WHERE a.user_num = '".$num."'
								GROUP BY b.sortcountry, b.country_code";
								//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function myBucketList($area, $country, $num)
		{
			$sql ="SELECT b.mother_area_code,
											b.mother_country_code,
											b.v_get_code,
											b.face_img_path,
											c.code_nm AS country_nm,
											c.ref1 AS countryimg,
											d.code_nm AS tem1,
											d.ref1 AS refrem1,
											e.code_nm AS tem2,
											e.ref1 AS refrem2,
											f.code_nm AS tem3,
											f.ref1 AS refrem3,
											g.code_nm AS recom1,
											g.ref1 AS refrecom1,
											h.code_nm AS recom2,
											h.ref1 AS refrecom2,
											a.*
							FROM product a
							LEFT JOIN USER b ON a.user_num=b.user_num
							LEFT JOIN country_table c ON b.mother_area_code=c.class AND b.mother_country_code = c.code
							LEFT JOIN code_table d ON a.theme_num1_code=d.code AND d.class = '0012'
							LEFT JOIN code_table e ON a.theme_num2_code=e.code AND e.class = '0012'
							LEFT JOIN code_table f ON a.theme_num3_code=f.code AND f.class = '0012'
							LEFT JOIN code_table g ON a.recommend1_code=g.code AND g.class = '0013'
							LEFT JOIN code_table h ON a.recommend2_code=h.code AND h.class = '0013'
							LEFT JOIN user_has_bucket_list i ON a.product_num = i.product_num
							WHERE a.sortcountry='".$area."'
							AND a.country_code='".$country."'
							AND i.user_num = '".$num."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function mySalesList($user_num, $state)
		{
			$sql ="SELECT u.*,
											z.img_path AS image
							FROM(
											SELECT b.mother_area_code,
															b.mother_country_code,
															b.v_get_code,
															b.face_img_path,
															c.code_nm AS country_nm,
															c.ref1 AS countryimg,
															d.code_nm AS tem1,
															d.ref1 AS refrem1,
															e.code_nm AS tem2,
															e.ref1 AS refrem2,
															f.code_nm AS tem3,
															f.ref1 AS refrem3,
															g.code_nm AS recom1,
															g.ref1 AS refrecom1,
															h.code_nm AS recom2,
															h.ref1 AS refrecom2,
															a.*,
															DATE_FORMAT(a.modified_date,'%Y.%m.%d') AS regdate,
															i.cnt,
															CASE WHEN a.product_state ='0001' THEN 'sales' WHEN a.product_state ='0002' THEN 'registring' ELSE 'stop' END state
											FROM product a
											LEFT JOIN USER b ON a.user_num=b.user_num
											LEFT JOIN country_table c ON b.mother_area_code=c.class AND b.mother_country_code = c.code
											LEFT JOIN code_table d ON a.theme_num1_code=d.code AND d.class = '0012'
											LEFT JOIN code_table e ON a.theme_num2_code=e.code AND e.class = '0012'
											LEFT JOIN code_table f ON a.theme_num3_code=f.code AND f.class = '0012'
											LEFT JOIN code_table g ON a.recommend1_code=g.code AND g.class = '0013'
											LEFT JOIN code_table h ON a.recommend2_code=h.code AND h.class = '0013'
											LEFT JOIN (SELECT COUNT(*) AS cnt, x.product_num
																	FROM product X
																	LEFT JOIN user_order_product z ON x.product_num = z.product_num
																	GROUP BY x.product_num
											) AS i ON a.product_num = i.product_num
											WHERE a.user_num = '".$user_num."'
											AND a.product_state = '".$state."'
										) AS u
										LEFT JOIN spot z ON u.product_num = z.product_num
										GROUP BY product_num";

			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function insertCerticification($user_num,$img_path)
		{
			$sql ="INSERT INTO certicification
													(certicification_seq,
													user_num,
													certicifi_type_code,
													certicifi_state_code,
													img_path,
													excuse,
													modify_date,
													creat_date
													)VALUES(
													0,
													'".$user_num."',
													'0005',
													'0001',
													'".$img_path."',
													'',
													SYSDATE(),
													SYSDATE()
													)";
			$query = $this->db->query($sql);
		}

		function myCerticificationState($num)
		{
			$sql ="SELECT *
							FROM certicification
							WHERE certicifi_type_code = '0006'
							AND certicifi_state_code = '0001'
							AND user_num = '".$num."'
							ORDER BY modify_date
							LIMIT 1";
							//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function cancelBook($booknum, $cancelBookText)
		{
			$sql ="UPDATE user_order_product
									SET order_type_code = '0005',
											cancel_text = '".$cancelBookText."',
											modified_date = SYSDATE()
							WHERE book_num = '".$booknum."'";
			//print_r($sql);
			$query = $this->db->query($sql);
		}

		function cancelBookHis($booknum)
		{
			$sql ="INSERT INTO booked_history
									SELECT book_num,
													product_num,
													product_user_num,
													user_num,
													contry_code,
													phon_num,
													'0005',
													book_Start_date,
													book_End_date,
													book_person,
													book_request,
													fixed_fee,
													complete_code,
													complain_text,
													cancel_text,
													deposited,
													deposited_date,
													modified_date,
													create_date
									FROM user_order_product
									WHERE book_num = '0000000054'
									ORDER BY modified_date DESC
									LIMIT 1";
			//print_r($sql);
			$query = $this->db->query($sql);
		}

		function productStop($productNum)
		{
			$sql ="UPDATE product
									SET product_state = '0003'
							WHERE product_num = '".$productNum."' ";
							//print_r($sql);
			$query = $this->db->query($sql);
		}

		function productDelete($productNum)
		{
			$sql ="UPDATE product
									SET product_state = '0004',
											useYn = 'N'
							WHERE product_num = '".$productNum."' ";
							//print_r($sql);
			$query = $this->db->query($sql);
		}

		function comfirmDate($productNum)
		{
			$sql ="SELECT MAX(DATE_FORMAT(book_End_date,'%Y-%m-%d')) AS book_End_date
							FROM user_order_product
							WHERE product_num = '".$productNum."'";
			$query = $this->db->query($sql);
			if($query->num_rows() > 0){
				return $query->row();
			}else{
				return FALSE;
			}
		}
	}
?>

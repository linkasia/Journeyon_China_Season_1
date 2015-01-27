<?php
	class country_M extends CI_Model
	{
		function __construct()
		{
			parent::__construct();

			$this->load->helper('util_helper');

		}

		//선택한 나라 상품
		function salesCountry($co,$ci,$city)
		{
			$cityChoice ="";

			if($city != null){
				$cityChoice = "AND city_code='".$city."'";
			}
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
							WHERE sortcountry='".$co."'
							AND country_code='".$ci."'
							".$cityChoice;


			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//선택한 나라 정렬
		function salesCountrySort($scountry, $countryList, $guideType, $genderCode, $temCode ,$recommend ,$guide,$selectCityList)
		{
			$sqlplus = "";

			if($guideType != ""){
				$sqlplus = "";
			}

			if($genderCode != ""){
				$sqlplus = "AND b.gender_code IN (".$genderCode.")";
			}

			if($temCode != ""){
				$sqlplus = "AND (theme_num1_code in (".$temCode.") OR theme_num2_code in (".$temCode.") OR theme_num3_code in (".$temCode.") )";
			}

			if($recommend != ""){
				$sqlplus = "AND (a.recommend1_code IN (".$recommend.") OR a.recommend2_code IN (".$recommend."))";
			}

			if($guide != ""){
				$sqlplus = "AND b.v_get_code IN (".$guide.")";
			}

			if($selectCityList != null){
				$sqlplus = "AND a.city_code  IN (".$selectCityList.")";
			}

			$sql ="SELECT b.mother_area_code,
								b.mother_country_code,
								b.v_get_code,
								b.face_img_path,
								b.gender_code,
								b.v_get_code,
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
				WHERE sortcountry='".$scountry."'
				AND country_code='".$countryList."'
				".$sqlplus."";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}


		//선택한 나라 상세 상품
		function salesDetailCountry($num)
		{
			$sql ="SELECT a.product_num,
											a.title,
											a.user_num,
											b.Name_cn_en,
											a.fat_price,
											a.theme_num1_code,
											f.code_nm AS theme_num1_nm,
											a.theme_num2_code,
											g.code_nm AS theme_num2_nm,
											a.theme_num3_code,
											h.code_nm AS theme_num3_nm,
											b.messenger_qq,
											b.messenger_weixin,
											b.face_img_path,
											DATE_FORMAT(SYSDATE(),'%Y')-DATE_FORMAT(b.birthday,'%Y') AS age,
											b.gender_code,
											i.code_nm AS gender_nm,
											c.code_nm AS country_nm,
											c.ref1 AS country_img,
											d.code_nm AS mother_city_nm,
											e.code_nm AS live_city_nm,
											b.live_country_year,
											b.lang1_code,
											j.code_nm AS lang1_nm,
											b.lang1_skill,
											m.code_nm AS lang1_skill_nm,
											b.lang2_code,
											k.code_nm AS lang2_nm,
											b.lang2_skill,
											n.code_nm AS lang2_skill_nm,
											b.lang3_code,
											l.code_nm AS lang3_nm,
											b.lang3_skill,
											o.code_nm AS lang3_skill_nm,
											b.job,
											b.job_detail,
											b.v_get_code,
											b.g_get_code,
											DATE_FORMAT(b.create_time,'%Y') AS YEAR,
											DATE_FORMAT(b.create_time,'%m') AS mon,
											DATE_FORMAT(b.create_time,'%d') AS DAY,
											p.img_path
							FROM product a
							LEFT JOIN USER b ON a.user_num = b.user_num
							LEFT JOIN country_table c ON b.mother_area_code = c.class AND b.mother_country_code=c.code
							LEFT JOIN city_table d ON b.mother_area_code = d.sclass AND b.mother_country_code=d.class AND b.mother_city_code = d.code
							LEFT JOIN city_table e ON b.live_area_code = e.sclass AND b.live_country_code=e.class AND b.live_city_code = e.code
							LEFT JOIN code_table f ON a.theme_num1_code=f.code AND f.class='0012'
							LEFT JOIN code_table g ON a.theme_num2_code=g.code AND g.class='0012'
							LEFT JOIN code_table h ON a.theme_num3_code=h.code AND h.class='0012'
							LEFT JOIN code_table i ON b.gender_code=i.code AND i.class='0002'
							LEFT JOIN code_table j ON b.lang1_code=j.code AND j.class='0015'
							LEFT JOIN code_table k ON b.lang2_code=k.code AND k.class='0015'
							LEFT JOIN code_table l ON b.lang3_code=l.code AND l.class='0015'
							LEFT JOIN code_table m ON b.lang1_skill=m.code AND m.class='0014'
							LEFT JOIN code_table n ON b.lang2_skill=n.code AND n.class='0014'
							LEFT JOIN code_table o ON b.lang3_skill=o.code AND o.class='0014'
							LEFT JOIN spot p ON a.product_num = p.product_num
							WHERE a.product_num='".$num."'
							LIMIT 1";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}


		//선택한 도시 상세 상품
		function salesDetailCity($num)
		{
			$sql ="SELECT *
							FROM product
							WHERE product_num='".$num."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//선택한 도시 상세 상품
		function salesImageCity($num)
		{
			$sql ="SELECT *
							FROM spot
							WHERE product_num='".$num."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//선택한 도시 상세 QnA
		function salesDetailCityQnA($num)
		{
			$sql ="SELECT a.qna_num,
											a.user_num,
											a.product_num,
											a.content,
											DATE_FORMAT(a.create_date,'%Y-%m-%d %H:%i') AS create_date,
											b.Name_cn_en,
											b.face_img_path,
											b.v_get_code,
											b.mother_area_code,
											b.mother_country_code,
											c.code_nm AS country_nm,
											c.ref1 AS country_flog,
											d.user_num
							FROM user_question_product a
							LEFT JOIN USER b ON a.user_num = b.user_num
							LEFT JOIN country_table c ON b. mother_area_code = c.class AND b.mother_country_code=c.code
							LEFT JOIN product d ON a.product_num = d.product_num
							WHERE a.product_num='".$num."'
							ORDER BY a.create_date ASC";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//선택한 도시 상세 QnA
		function salesDetailCityQnA2($num)
		{
			$sql ="SELECT a.qna_num,
											a.user_num,
											a.product_num,
											a.content,
											DATE_FORMAT(a.create_date,'%Y-%m-%d %H:%i') AS create_date,
											b.Name_cn_en,
											b.face_img_path,
											b.v_get_code,
											b.mother_area_code,
											b.mother_country_code,
											c.code_nm AS country_nm,
											c.ref1 AS country_flog
								FROM answer a
								LEFT JOIN USER b ON a.user_num = b.user_num
								LEFT JOIN country_table c ON b. mother_area_code = c.class AND b.mother_country_code=c.code
							WHERE a.product_num='".$num."'
							ORDER BY a.create_date ASC";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function insertQuestion($productNum,$content,$userNum)
		{
			$sql ="INSERT INTO user_question_product
						(qna_num,
						user_num,
						product_num,
						content,
						create_date
						)
						VALUES
						(0,
						'".$userNum."',
						'".$productNum."',
						'".$content."',
						SYSDATE()
						);";
			$query = $this->db->query($sql);
		}

		function insertAgency($productNum,$content,$qna_num,$userNum)
		{
			$sql ="INSERT INTO answer
						(qna_num,
						user_num,
						product_num,
						content,
						create_date
						)
						VALUES
						('".$qna_num."',
						'".$userNum."',
						'".$productNum."',
						'".$content."',
						SYSDATE()
						);";
			$query = $this->db->query($sql);
		}

		function detailUser($userNum)
		{
			$sql ="SELECT a.*,
											b.code_nm AS live_country,
											c.code_nm AS gender,
											DATE_FORMAT(SYSDATE(),'%Y')-DATE_FORMAT(a.birthday,'%Y') AS age,
											d.code_nm AS lang1,
											e.code_nm AS langSkill1,
											f.code_nm AS lang2,
											g.code_nm AS langSkill2,
											h.code_nm AS lang3,
											i.code_nm AS langSkill3,
											DATE_FORMAT(a.create_time,'%Y-%m-%d') AS create_day
							FROM USER a
							LEFT JOIN country_table b ON a.live_area_code = b.class AND a.live_country_code = b.code
							LEFT JOIN code_table c ON a.gender_code = c.code AND c.class='0002'
							LEFT JOIN code_table d ON a.lang1_code = d.code AND d.class='0015'
							LEFT JOIN code_table e ON a.lang1_skill = e.code AND e.class='0014'
							LEFT JOIN code_table f ON a.lang2_code = f.code AND f.class='0015'
							LEFT JOIN code_table g ON a.lang2_skill = g.code AND g.class='0014'
							LEFT JOIN code_table h ON a.lang3_code = h.code AND h.class='0015'
							LEFT JOIN code_table i ON a.lang3_skill = i.code AND i.class='0014'
							LEFT JOIN code_table j ON a.special1_code = j.code AND j.class='0011'
							LEFT JOIN code_table k ON a.special2_code = k.code AND k.class='0011'
							LEFT JOIN code_table l ON a.special3_code = l.code AND l.class='0011'
							WHERE a.user_num='".$userNum."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function userSales($userNum)
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
							WHERE b.user_num='".$userNum."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//도시 리스트
		function cityList($scontry,$contry)
		{
			$sql ="SELECT '0000' AS sclass,
											'0000' AS class,
											'0000' AS CODE,
											'-- all --' AS code_nm,
											'-- all --' AS code_decription,
											NULL AS ref1,
											NULL AS ref2,
											NULL AS ref3,
											NULL AS ref4,
											NULL AS ref5,
											NULL AS ref6,
											NULL AS ref7,
											NULL AS ref8,
											NULL AS ref9,
											NULL AS ref10,
											'Y' AS useYn,
											'N' AS viewYn
							UNION ALL
							SELECT *
							FROM city_table
							WHERE sclass = '".$scontry."'
							AND class = '".$contry."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function insertProduct($userNum)
		{
			$sql ="INSERT INTO product
													(`product_num`,
													`user_num`,
													`title`,
													`sortcountry`,
													`country_code`,
													`city_code`,
													`describe_contents`,
													`theme_num1_code`,
													`theme_num2_code`,
													`theme_num3_code`,
													`recommend1_code`,
													`recommend2_code`,
													`travel_time`,
													`meeting_place`,
													`latitude`,
													`longtitude`,
													`meeting_place_describe`,
													`fat_price`,
													`group_price`,
													`include`,
													`not_include`,
													`etc`,
													`s_get`,
													`useYn`,
													`adminYn`,
													`create_date`,
													`modified_date`
													)
													VALUES
													(0,
													'".$userNum."',
													'',
													'',
													'',
													'',
													'',
													'',
													'',
													'',
													'',
													'',
													'',
													'',
													0,
													0,
													'',
													0,
													0,
													'',
													'',
													'',
													'',
													'',
													'',
													SYSDATE(),
													SYSDATE());";
			$query = $this->db->query($sql);
		}

		function maxProduct()
		{
			$sql ="SELECT product_num
							FROM product
							ORDER BY product_num DESC
							LIMIT 1";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function updateProduct($product_num, $productTitle ,$productContents ,$onePrice ,$timeSet ,$meetPlace ,$include ,$notinclude ,$etc ,$theme1 ,$theme2 ,$theme3 ,$priceMember1 ,$priceMember2, $selectClassCountry, $selectCodeCountry, $selectCity)
		{
			$sql ="UPDATE product
									SET
										title = '".$productTitle."' ,
										sortcountry = '".$selectClassCountry."' ,
										country_code = '".$selectCodeCountry."' ,
										city_code = '".$selectCity."' ,
										describe_contents = '".$productContents."' ,
										theme_num1_code = '".$theme1."' ,
										theme_num2_code = '".$theme2."' ,
										theme_num3_code = '".$theme3."' ,
										recommend1_code = '".$priceMember1."' ,
										recommend2_code = '".$priceMember2."' ,
										travel_time = '".$timeSet."' ,
										meeting_place = '".$meetPlace."' ,
										meeting_place_describe = '".$meetPlace."' ,
										fat_price = '".$onePrice."' ,
										group_price = '".$onePrice."' ,
										include = '".$include."' ,
										not_include = '".$notinclude."' ,
										etc = '".$etc."' ,
										useYn = 'Y' ,
										adminYn = 'N' ,
										modified_date = SYSDATE()
										WHERE
										product_num = '".$product_num."' ";
			$query = $this->db->query($sql);
		}

		function insertImg($product_num,$pictureTitle,$pictureCaption,$filePath)
		{
			$sql ="INSERT INTO spot
						(product_num,
						product_seq,
						name_cn_en,
						img_path,
						content,
						create_time
						)
						VALUES
						('".$product_num."',
						0,
						'".$pictureTitle."',
						'".$filePath."',
						'".$pictureCaption."',
						SYSDATE())";
			$query = $this->db->query($sql);
		}

		function chatSend( $chat_num, $salesNum, $contents, $user_num)
		{
			$sql ="INSERT INTO chat
													(chat_num,
													user_num,
													product_num,
													content,
													create_time
													)VALUES(
													".$chat_num.",
													'".$user_num."',
													'".$salesNum."',
													'".$contents."',
													SYSDATE())";
			$query = $this->db->query($sql);
		}

		function chatSubSend( $chat_num, $salesNum, $contents, $user_num)
		{
			$sql ="INSERT INTO chat_reply
													(chat_num,
													user_num,
													product_num,
													content,
													create_time
													)VALUES(
													".$chat_num.",
													'".$user_num."',
													'".$salesNum."',
													'".$contents."',
													SYSDATE())";

			$query = $this->db->query($sql);
		}

		function maxChatNum()
		{
			$sql ="SELECT MAX(chat_num) + 1 AS chat_num
								FROM chat";
			$query = $this->db->query($sql);
			$query->num_rows();
			return $query->row();
		}

		function chatStartList( $salesNum, $user_num )
		{
			$sql ="SELECT a.*,
											b.face_img_path,
											b.Name_cn_en,
											b.v_get_code,
											c.code_nm,
											c.ref1
							FROM chat a
							LEFT JOIN USER b ON a.user_num = b.user_num
							LEFT JOIN country_table c ON b.mother_area_code = c.class AND b.mother_country_code = c.code
							WHERE a.product_num = '".$salesNum."'
							AND a.user_num = '".$user_num."'";
							//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function chatDetailList($chatNum)
		{
			$sql ="SELECT u.*
								FROM(SELECT a.*,
																b.face_img_path,
																b.Name_cn_en,
																b.v_get_code,
																c.code_nm,
																c.ref1
																FROM chat a
																LEFT JOIN USER b ON a.user_num = b.user_num
																LEFT JOIN country_table c ON b.mother_area_code = c.class AND b.mother_country_code = c.code
																WHERE a.chat_num = '".$chatNum."'
																UNION ALL
																SELECT d.*,
																e.face_img_path,
																e.Name_cn_en,
																e.v_get_code,
																f.code_nm,
																f.ref1
																FROM chat_reply d
																LEFT JOIN USER e ON d.user_num = e.user_num
																LEFT JOIN country_table f ON e.mother_area_code = f.class AND e.mother_country_code = f.code
																WHERE d.chat_num = '".$chatNum."'
												) AS u
								ORDER BY u.create_time ASC";
								//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function ChatList($userNum)
		{
			$sql ="SELECT *
							FROM(	SELECT *
												FROM (SELECT a.*,
																				b.face_img_path,
																				b.Name_cn_en,
																				b.v_get_code,
																				c.code_nm,
																				c.ref1
																	FROM chat a
																	LEFT JOIN USER b ON a.user_num = b.user_num
																	LEFT JOIN country_table c ON b.mother_area_code = c.class AND b.mother_country_code = c.code
																--	WHERE a.user_num ='".$userNum."'
																	ORDER BY a.create_time DESC
										) AS v
										UNION ALL
								SELECT *
								FROM(SELECT d.*,
															e.face_img_path,
															e.Name_cn_en,
															e.v_get_code,
															f.code_nm,
															f.ref1
											FROM chat_reply d
											LEFT JOIN USER e ON e.user_num = d.user_num
											LEFT JOIN country_table f ON e.mother_area_code = f.class AND e.mother_country_code = f.code
										--	WHERE d.user_num ='".$userNum."'
											ORDER BY d.create_time
										) AS k
							) AS u
							GROUP BY u.chat_num
							ORDER BY u.create_time DESC";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function insertBooking($productNum, $personNum, $date, $fee, $user_num, $productUserNum )
		{
			$sql ="INSERT INTO user_order_product
													(book_num,
													product_num,
													product_user_num,
													user_num,
													order_type_code,
													book_Start_date,
													book_End_date,
													book_person,
													fixed_fee,
													complete_code,
													complain_text,
													deposited,
													deposited_date,
													modified_date,
													create_date
													)
													VALUES
													(0,
													'".$productNum."',
													'".$productUserNum."',
													'".$user_num."',
													'0004',
													'". $sdate."',
													'". $edate."',
													'".$personNum."',
													'".$fee."',
													'',
													'',
													'',
													0,
													0,
													SYSDATE());";
													//print_r($sql);
			$query = $this->db->query($sql);
		}

		//선택한 도시 상세 상품
		function bookinglList($salesNum,$user_num)
		{
			$sql ="SELECT *
							FROM user_order_product
							WHERE product_num =".$salesNum."
							-- AND user_num ='".$user_num."'
							ORDER BY book_date";
							//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function updateBooking($productNum, $user_num)
		{
			$sql ="UPDATE user_order_product
								SET order_type_code = '0003' ,
										modified_date = SYSDATE()
							WHERE product_num = '".$productNum."'
							AND user_num = '".$user_num."'";
			//print_r($sql);
			$query = $this->db->query($sql);
		}

	}

?>
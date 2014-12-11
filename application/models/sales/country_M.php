<?php
	class country_M extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			
			$this->load->helper('util_helper');
			
		}
		
		//선택한 나라 상품
		function salesCountry($co,$ci)
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
								LEFT JOIN USER b ON a.user_num=b.num
								LEFT JOIN country_table c ON b.mother_area_code=c.class AND b.mother_country_code = c.code
								LEFT JOIN code_table d ON a.theme_num1_code=d.code AND d.class = '0012'
								LEFT JOIN code_table e ON a.theme_num2_code=e.code AND e.class = '0012'
								LEFT JOIN code_table f ON a.theme_num3_code=f.code AND f.class = '0012'
								LEFT JOIN code_table g ON a.recommend1_code=g.code AND g.class = '0013'
								LEFT JOIN code_table h ON a.recommend2_code=h.code AND h.class = '0013'
							WHERE sortcountry='".$co."'
							AND country_code='".$ci."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//선택한 나라 정렬
		function salesCountrySort($scountry, $countryList, $guideType, $genderCode, $temCode ,$recommend ,$guide)
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
					LEFT JOIN USER b ON a.user_num=b.num
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
			$sql ="SELECT a.num,
											a.user_num,
											a.fat_price,
											a.wishcount,
											a.theme_num1_code,
											f.code_nm AS theme_num1_nm,
											a.theme_num2_code,
											g.code_nm AS theme_num2_nm,
											a.theme_num3_code,
											h.code_nm AS theme_num3_nm,
											b.messenger_qq,
											b.messenger_weixin,
											b.face_img_path,
											b.age,
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
											DATE_FORMAT(b.create_time,'%d') AS DAY
								FROM product a
								LEFT JOIN USER b ON a.user_num = b.num
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
							WHERE a.num='".$num."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}


		//선택한 도시 상세 상품
		function salesDetailCity($num)
		{
			$sql ="SELECT *
							FROM product
							WHERE num='".$num."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//선택한 도시 상세 QnA
		function salesDetailCityQnA($num)
		{
			$sql ="SELECT a.num,
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
							FROM user_question_product a
							LEFT JOIN USER b ON a.user_num = b.num
							LEFT JOIN country_table c ON b. mother_area_code = c.class AND b.mother_country_code=c.code
							WHERE a.product_num='".$num."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}
	}

?>
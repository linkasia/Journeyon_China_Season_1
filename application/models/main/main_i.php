<?php
	class main_i extends CI_Model
	{
		function __construct()
		{
			parent::__construct();

			$this->load->helper('util_helper');

		}

		//전체나라
		function country()
		{
			$sql ="SELECT class,CODE,code_nm,ref1
								FROM country_table
								WHERE viewYn ='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//선택나라
		function choiceCountry($co,$ci)
		{
			$sql ="SELECT class,CODE,code_nm,ref1,ref2,ref3
								FROM country_table
								WHERE viewYn ='Y'
								AND class = '".$co."'
								AND CODE = '".$ci."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//도시
		function cityList()
		{
			$sql ="SELECT *
							FROM city_table
							WHERE viewYn='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//도시
		function choiceCityList($class ,$code)
		{
			$sql ="SELECT *
							FROM city_table
							WHERE sclass = '".$class."'
							AND class ='".$code."'
							AND useYn='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}


		//최근 올라온 3개의 도시
		function Travel(){

			$sql ="SELECT u.*,
											z.img_path as image
							FROM(
											SELECT b.email,
															b.face_img_path,
															b.Name_cn_en,
															c.code_nm,
															c.ref1,
															COUNT(d.product_num) AS likeCnt,
															a.*,
															COUNT(f.product_num) AS reviewCnt,
															e.ref1 AS monther_img
											FROM product a
											LEFT JOIN USER b ON a.user_num = b.user_num
											LEFT JOIN country_table c ON a.sortcountry = c.class AND a.country_code = c.code
											LEFT JOIN user_has_bucket_list d ON a.product_num = d.product_num
											LEFT JOIN country_table e ON b.mother_area_code = e.class AND b.mother_country_code = e.code
											LEFT JOIN review f ON a.product_num = f.product_num
											WHERE a.useYn='Y'
											AND a.product_state = '0001'
											GROUP BY a.product_num
											ORDER BY a.create_date DESC
											LIMIT 3
							) AS u
							LEFT JOIN spot z ON u.product_num = z.product_num
							GROUP BY product_num";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//관리자가 선택한 6개의 도시
		function Admin_choice(){

			$sql ="SELECT u.*,
											z.img_path as image
							FROM(
											SELECT b.email,
															b.face_img_path,
															b.Name_cn_en,
															c.code_nm,
															c.ref1,
															COUNT(d.product_num) AS likeCnt,
															a.*,
															COUNT(f.product_num) AS reviewCnt,
															e.ref1 AS monther_img
											FROM product a
											LEFT JOIN USER b ON a.user_num = b.user_num
											LEFT JOIN country_table c ON a.sortcountry = c.class AND a.country_code = c.code
											LEFT JOIN user_has_bucket_list d ON a.product_num = d.product_num
											LEFT JOIN country_table e ON b.mother_area_code = e.class AND b.mother_country_code = e.code
											LEFT JOIN review f ON a.product_num = f.product_num
											WHERE a.useYn='Y'
											AND a.adminYn='Y'
											AND a.product_state = '0001'
											GROUP BY a.product_num
											ORDER BY a.create_date DESC
											LIMIT 6
							) AS u
							LEFT JOIN spot z ON u.product_num = z.product_num
							GROUP BY product_num";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}
	}

?>
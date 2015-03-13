<?php
	class tb_code extends CI_Model
	{
		function __construct()
		{
			parent::__construct();

			$this->load->helper('util_helper');

		}

		//가이드구분
		function guideType()
		{
			$sql ="SELECT *
							FROM code_table
							WHERE class='0011'
							AND useYn='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//테마
		function theme(){

			$sql ="SELECT *
							FROM code_table
							WHERE class='0012'
							AND useYn='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//그룹
		function recommend(){

			$sql ="SELECT *
							FROM code_table
							WHERE class='0013'
							AND useYn='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//V인증 사용자
		function guide(){
			$sql ="SELECT *
							FROM code_table
							WHERE class='0010'
							AND CODE ='0001'
							AND useYn='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//성별
		function sexual(){
			$sql ="SELECT *
							FROM code_table
							WHERE class='0002'
							AND useYn='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//언어
		function langList(){
			$sql ="SELECT '0015' AS class,'' AS CODE,'--select--' AS code_nm,code_description, 'Y' AS useYn
								FROM code_table
								WHERE class = '0015'
								LIMIT 1
								UNION ALL
								SELECT class,CODE,code_nm,code_description,useYn
								FROM code_table
								WHERE class='0015'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//습특
		function learnList(){
			$sql ="SELECT '0014' AS class,'' AS CODE,'--select--' AS code_nm,code_description, 'Y' AS useYn
								FROM code_table
								WHERE class = '0014'
								LIMIT 1
								UNION ALL
								SELECT class,CODE,code_nm,code_description,useYn
								FROM code_table
								WHERE class='0014'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		//나라별 국가 번호
		function countryNumber()
		{
			$sql ="SELECT *
							FROM code_table
							WHERE class='0017'
							AND useYn='Y'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}
	}

?>
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
	}

?>
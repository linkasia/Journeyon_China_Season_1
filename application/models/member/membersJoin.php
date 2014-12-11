<?php
	class membersJoin extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			
			$this->load->helper('util_helper');
		}
		
		function insertMem($to,$pw)
		{
			$sql ="INSERT INTO user 
						(num, 
						email, 
						password, 
						messenger_qq, 
						messenger_weixin, 
						phone_num_country, 
						phone_num_user, 
						face_img_path, 
						Name_cn_en, 
						mother_area_code, 
						mother_country_code, 
						live_area_code, 
						live_country_code, 
						live_country_year, 
						birthday, 
						age, 
						gender_code, 
						job, 
						job_detail, 
						lang1_code, 
						lang1_skill, 
						lang2_code, 
						lang2_skill, 
						lang3_code, 
						lang3_skill, 
						special1_code, 
						special2_code, 
						special3_code, 
						v_get_code, 
						g_get_code, 
						create_time
						)
						VALUES
						(0,
						'".$to."', 
						'".$pw."', 
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
						'', 
						'', 
						'', 
						SYSDATE()
						);";
			$query = $this->db->query($sql);
		}


		function searchMember($mail)
		{
			$sql ="SELECT *
								FROM user
								WHERE email = '".$mail."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function loginMember($mail,$password)
		{
			$sql ="SELECT *
								FROM user
								WHERE email = '".$mail."'
								AND password = '".$password."'";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}
	}
?>

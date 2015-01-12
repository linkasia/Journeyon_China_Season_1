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

			$sql ="UPDATE user SET mother_area_code = '".$countrySelectClass."',
																mother_country_code= '".$code."'
							WHERE email = '".$mail."'";
			$query = $this->db->query($sql);

		}
	}
?>

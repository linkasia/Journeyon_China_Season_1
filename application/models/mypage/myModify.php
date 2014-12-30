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
			$sql ="UPDATE user SET email = ".$mail."
							WHERE email = ".$oldMai."";
			$query = $this->db->query($sql);
		}


	}
?>

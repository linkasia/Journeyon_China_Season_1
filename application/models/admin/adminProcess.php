<?
	class adminProcess extends CI_Model
	{
		function __construct()
		{
			parent::__construct();

			$this->load->helper('util_helper');
		}

		function memberList()
		{
			$sql ="SELECT a.*,
											COUNT(b.product_num) AS product_cnt,
											c.code_nm AS M_country,
											d.code_nm AS L_country,
											e.code_nm AS V_get,
											f.code_nm AS G_get,
											g.code_nm AS PG_get
							FROM USER a
							LEFT JOIN product b ON a.user_num = b.user_num
							LEFT JOIN country_table c ON a.mother_area_code = c.class AND a.mother_country_code = c.code
							LEFT JOIN country_table d ON a.live_area_code = d.class AND a.live_country_code = d.code
							LEFT JOIN code_table e ON a.v_get_code = e.code AND e.class = '0010'
							LEFT JOIN code_table f ON a.g_get_code = f.code AND f.class = '0010'
							LEFT JOIN code_table g ON a.pg_get_code = g.code AND g.class = '0010'
							WHERE a.v_get_code = '0005' OR a.g_get_code = '0005' OR a.pg_get_code = '0005'
							GROUP BY a.user_num";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

	}
?>

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
							WHERE a.v_get_code in ('0004','0005','0006') OR a.g_get_code in ('0004','0005','0006') OR a.pg_get_code in ('0004','0005','0006')
							GROUP BY a.user_num";
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function appovList($num,$code)
		{
			$sql ="SELECT *
								FROM certicification
								WHERE certicifi_type_code in ('0004','0005','0006')
								AND certicifi_state_code = '".$code."'
								AND user_num = '".$num."'
								ORDER BY modify_date
								LIMIT 1";
								//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function updateVCerticification($user_num,$appovekey, $code,$contents)
		{
			$sql ="UPDATE certicification
									SET certicifi_type_code = '".$code."' ,
											excuse = '".$contents."' ,
											modify_date = SYSDATE()
									WHERE certicification_seq = '".$appovekey."'
									AND user_num = '".$user_num."' ";
			//print_r($sql);
			$query = $this->db->query($sql);
		}

		function updateUserVget($user_num, $code)
		{
			$sql ="UPDATE USER
								SET v_get_code = '".$code."'
							WHERE user_num = '".$user_num."' ";
			//print_r($sql);
			$query = $this->db->query($sql);
		}

		function updateUserPget($user_num, $code)
		{
			$sql ="UPDATE USER
								SET g_get_code = '".$code."'
							WHERE user_num = '".$user_num."' ";
			//print_r($sql);
			$query = $this->db->query($sql);
		}

		function updateUserPgget($user_num, $code)
		{
			$sql ="UPDATE USER
								SET pg_get_code = '".$code."'
							WHERE user_num = '".$user_num."' ";
			//print_r($sql);
			$query = $this->db->query($sql);
		}

		function productAppovList()
		{
			$sql ="SELECT a.*,
											b.code_nm AS country,
											c.code_nm AS city,
											d.email,
											e.code_nm AS state
							FROM product a
							LEFT JOIN country_table b ON a.sortcountry = b.class AND a.country_code = b.code
							LEFT JOIN city_table c ON a.sortcountry = c.sclass AND a.country_code = c.class AND a.city_code = c.code
							LEFT JOIN USER d ON a.user_num = d.user_num
							LEFT JOIN code_table e ON a.product_state = e.code AND e.class='0018'
							WHERE a.useYn = 'Y'
							AND a.product_state in ('0002','0005')";
								//print_r($sql);
			$query = $this->db->query($sql);
			$result = $query->result();
			return $result;
		}

		function productState($product_num, $code)
		{
			$sql ="UPDATE product
								SET product_state = '".$code."'
							WHERE product_num = '".$product_num."' ";
			//print_r($sql);
			$query = $this->db->query($sql);
		}
	}
?>


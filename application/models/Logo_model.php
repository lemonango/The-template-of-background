<?php 
	class Logo_model extends CI_Model{
		/*获取logo信息*/
		public  function obtainLogo($data){
			$result = $this->db->where($data)->get('logo')->result_array();
			return $result;
		}
	}
 ?>
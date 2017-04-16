<?php 
	class Backend_model extends CI_Model{
		/*获取用户信息*/
		public function obtainUser($data){
			$result = $this->db->where($data)->get('admin')->result_array();
			return $result;
		}
	}
 ?>
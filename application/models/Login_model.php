<?php 
	class Login_model extends CI_Model{
		public function validateAccount($data){
			$result = $this->db->where($data)->get('admin')->result_array();
			return $result;
		}
	}
 ?>
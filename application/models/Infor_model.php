<?php 
	class Infor_model extends CI_Model{
		/*修改信息*/
		public function updateInfor($info,$data){
			$result = $this->db->where($info)->update('admin',$data);
			return $result;
		}
		
	}
 ?>
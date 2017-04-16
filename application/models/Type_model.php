<?php 
	class Type_model extends CI_Model{
		/*获取新闻分类信息*/
		public function obtainType($data){
			$result = $this->db->where($data)->order_by('type_date','desc')->get('type')->result_array();
			return $result;
		}
		/*添加分类*/
		public function uploadType($data){
			$result  = $this->db->insert('type',$data);
			return $result;
		}
		/*删除分类*/
		public function updateType($info,$data){
			$result = $this->db->where($info)->update('type',$data);
			return $result;
		}
	} 
 ?>
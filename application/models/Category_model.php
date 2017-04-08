<?php 
	class Category_model extends CI_Model{
		/*获取分类信息*/
		public function obtainCategory($data){
			$result = $this->db->where($data)->order_by('cty_date','desc')->get('category')->result_array();
			return $result;
		}
		/*上传分类信息*/
		public function uploadCategory($data){
			$result = $this->db->insert('category',$data);
			return $result;
		}
		/*删除分类信息*/
		public function updateCategory($info,$data){
			$result = $this->db->where($info)->update('category',$data);
			return $result;
		}
	}
 ?>
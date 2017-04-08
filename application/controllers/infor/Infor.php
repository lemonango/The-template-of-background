<?php 
	class Infor extends MY_Controller{
		/*个人信息*/
		public function index(){
			$result = $this->session->userdata('user');
			/*获取用户信息*/
			$userdata['user_id'] = $result['user_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['user'] = $user[0];
			$this->load->view('infor/infor',$data);
		}
		/*修改密码*/
		public function resetPassword(){
			$result = $this->session->userdata('user');
			/*获取用户信息*/
			$userdata['user_id'] = $result['user_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['user'] = $user[0];
			$this->load->view('infor/resetPassword',$data);
		}
	}
 ?>
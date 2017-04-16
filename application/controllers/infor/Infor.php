<?php 
	class Infor extends MY_Controller{
		/*个人信息*/
		public function index(){
			$result = $this->session->userdata('admin');
			/*获取用户信息*/
			$userdata['adn_id'] = $result['adn_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['admin'] = $user[0];
			$this->load->view('infor/infor',$data);
		}
		/*修改密码*/
		public function resetPassword(){
			$result = $this->session->userdata('admin');
			/*获取用户信息*/
			$userdata['adn_id'] = $result['adn_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['admin'] = $user[0];
			$this->load->view('infor/resetPassword',$data);
		}
	}
 ?>
<?php 
	class Backend extends MY_Controller{
		/*后台首页*/
		public function index(){
			$result = $this->session->userdata('admin');
			/*获取用户信息*/
			$userdata['adn_id'] = $result['adn_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['admin'] = $user[0];
			$this->load->view('backend/index',$data);
		}
	}
 ?>
<?php 
	class Backend extends MY_Controller{
		/*后台首页*/
		public function index(){
			$result = $this->session->userdata('user');
			/*获取用户信息*/
			$userdata['user_id'] = $result['user_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['user'] = $user[0];
			$this->load->view('backend/index',$data);
		}
	}
 ?>
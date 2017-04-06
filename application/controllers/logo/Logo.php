<?php 
	class Logo extends MY_Controller{
		/*logo标题的信息*/
		public function index(){
			$result = $this->session->userdata('user');
			/*获取用户信息*/
			$userdata['user_id'] = $result['user_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['user'] = $user[0];
			/*获取logo标题*/
			$logoData['logo_state'] = 1;
			$data['logo'] = $this->logo->obtainLogo($logoData);
			$this->load->view('logo/logo',$data);
		}
	}	
 ?>



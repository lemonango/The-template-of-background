<?php 
	class Logo extends MY_Controller{
		/*logo标题的信息*/
		public function index(){
			$result = $this->session->userdata('admin');
			/*获取用户信息*/
			$userdata['adn_id'] = $result['adn_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['admin'] = $user[0];
			/*获取logo标题*/
			$logoData['logo_state'] = 1;
			$data['logo'] = $this->logo->obtainLogo($logoData);
			$this->load->view('logo/logo',$data);
		}
		/*修改logo*/
		public function updateLogo(){
			$result = $this->session->userdata('admin');
			/*获取用户信息*/
			$userdata['adn_id'] = $result['adn_id'];
			$user = $this->bakend->obtainUser($userdata);
			$data['admin'] = $user[0];;
			/*获取logo标题*/
			$logoData['logo_state'] = 1;
			$data['logodate'] = $this->logo->obtainLogo($logoData);
			$this->load->view('logo/updateLogo',$data);
		}
	}	
 ?>



<?php 
	class Operation extends MY_Controller{
		/*修改信息*/
		public function updateInfor(){
			$user = $_POST;
			$result = $this->session->userdata('admin');
			$info['adn_id'] = $result['adn_id'];
			$data = array(
				'adn_account' => $user['adn_account'],
				'adn_name' => $user['adn_name'],
				'adn_phone' => $user['adn_phone'],
				'adn_address' => $user['adn_address']
				);
			$row = $this->infor->updateInfor($info,$data);
			if($row == 0){
				$error = 1;
				print_r($error);exit;
			}else{
				/*获取用户信息*/
				$userDate = $this->login->validateAccount($info);
				$this->session->set_userdata('admin',$userDate[0]);
				$error = 0;
				print_r($error);exit;
			}
		}
		/*修改密码*/
		public function resetPassword(){
			$user = $_POST;
			$result = $this->session->userdata('admin');
			$info['adn_id'] = $result['adn_id'];
			$userData = $this->bakend->obtainUser($info);
			if($user['password'] != $userData[0]['adn_password']){
				$error = 2;
				print_r($error);exit;
			}else{
				$userInfo = array(
					'adn_password' => $user['newPassword']
					);
				$row = $this->infor->updateInfor($info,$userInfo);
				if($row == 1){
					$error = 0;
					print_r($error);exit;
				}else{
					$error = 1;
					print_r($error);exit;
				}
			}
		}
	}
 ?>
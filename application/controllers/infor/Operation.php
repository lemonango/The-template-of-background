<?php 
	class Operation extends MY_Controller{
		/*修改信息*/
		public function updateInfor(){
			$user = $_POST;
			$result = $this->session->userdata('user');
			$info['user_id'] = $result['user_id'];
			$data = array(
				'user_account' => $user['user_account'],
				'user_name' => $user['user_name'],
				'user_phone' => $user['user_phone'],
				'user_address' => $user['user_address']
				);
			$row = $this->infor->updateInfor($info,$data);
			if($row == 0){
				$error = 1;
				print_r($error);exit;
			}else{
				/*获取用户信息*/
				$userDate = $this->login->validateAccount($info);
				$this->session->set_userdata('user',$userDate[0]);
				$error = 0;
				print_r($error);exit;
			}
		}
		/*修改密码*/
		public function resetPassword(){
			$user = $_POST;
			$result = $this->session->userdata('user');
			$info['user_id'] = $result['user_id'];
			$userData = $this->bakend->obtainUser($info);
			if($user['password'] != $userData[0]['user_password']){
				$error = 2;
				print_r($error);exit;
			}else{
				$userInfo = array(
					'user_password' => $user['newPassword']
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
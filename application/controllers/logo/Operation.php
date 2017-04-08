<?php 
class Operation extends MY_Controller{
	/*修改logo*/
	public function updateLogo(){
		$user = $_POST;
		if($user['logo_name'] == null || $user['logo_name'] == '' ){
			$error=3;
			print_R($error);exit;
		}else{
			$config['upload_path'] = '../forum/upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|tiff|svg|eps';
			$config['file_name'] = 'logo-'.rand();
			$config['max_size'] = 2048;
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('logo_img')){
				$logo_name = $user['logo_name'];
				$updateData = array(
					'logo_name' => $logo_name,
					'logo_date' => date('Y-m-d',time()),
					'logo_state' => 1
					);
				$updateInfo['logo_id'] = $user['logo_id'];
				$result = $this->logo->updateLogo($updateInfo,$updateData);
				if($result == 0){
					$error = 1;
					print_R($error);exit;
				}else{
					$error = 0;
					print_r($error);exit;
				}
			}else{
				$uploadData =  $this->upload->data();
				$logo_img = 'http://localhost/forum/upload/'.$uploadData['file_name'];
				$logo_name = $user['logo_name'];
				$updateData = array(
					'logo_name' => $logo_name,
					'logo_img' => $logo_img,
					'logo_date' => date('Y-m-d',time()),
					'logo_state' => 1
					);
				$updateInfo['logo_id'] = $user['logo_id'];
				$result = $this->logo->updateLogo($updateInfo,$updateData);
				if($result == 0){
					$error = 1;
					print_R($error);exit;
				}else{
					$error = 0;
					print_r($error);exit;
				}
			}
		}
	}
}
?>
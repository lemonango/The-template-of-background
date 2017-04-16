<?php 
class Operation extends MY_Controller{
	/*上传分类*/
	public function uploadType(){
		$user = $_POST;
		$info['type_name'] = $user['type_name'];
		$resultType = $this->type->obtainType($info);
		if($resultType != null){
			$error = 2;
			print_R($error);exit;
		}else{
			$typeData['type_name'] = $user['type_name'];
			$typeData['type_date'] = date('Y-m-d',time());
			$typeData['type_state'] = 1;
			$result = $this->type->uploadType($typeData);
			if($result == 1){
				$error = 0;
				print_R($error);exit;
			}else{
				$error = 1;
				print_R($error);exit;
			}
		}
	}
	/*删除分类*/
	public function deleteType(){
		$user = $_POST;
		$info['type_id'] = $user['type_id'];
		$resultType = $this->type->obtainType($info);
		if($resultType == null ){
			$error = 2;
			print_r($error);exit;
		}else{
			$deleteInfo['type_id'] = $user['type_id'];
			$deleteData['type_state'] = 0;
			$result = $this->type->updateType($deleteInfo,$deleteData);
			if($result == 1){
				$error = 0;
				print_r($error);exit;
			}else{
				$error = 1;
				print_r($error);exit;
			}
		}
	}
	/*修改分类*/
	public function updateType(){
		$user = $_POST;
		$updateInfo['type_id'] = $user['type_id'];
		$typeData['type_name'] = $user['type_name'];
		$typeData['type_date'] = date('Y-m-d',time());
		$result = $this->type->updateType($updateInfo,$typeData);
		if($result == 1){
			$error = 0;
			print_R($error);exit;
		}else{
			$error = 1;
			print_R($error);exit;
		}
	}
}
?>
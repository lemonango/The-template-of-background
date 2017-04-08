<?php 
class Operation extends MY_Controller{
	/*上传分类*/
	public function uploadCategory(){
		$user = $_POST;
		$info['cty_name'] = $user['cty_name'];
		$resultCategory = $this->category->obtainCategory($info);
		if($resultCategory != null){
			$error = 2;
			print_R($error);exit;
		}else{
			$categoryData['cty_name'] = $user['cty_name'];
			$categoryData['cty_date'] = date('Y-m-d',time());
			$result = $this->category->uploadCategory($categoryData);
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
	public function deleteCategory(){
		$user = $_POST;
		$info['cty_id'] = $user['cty_id'];
		$resultCategory = $this->category->obtainCategory($info);
		if($resultCategory == null ){
			$error = 2;
			print_r($error);exit;
		}else{
			$deleteInfo['cty_id'] = $user['cty_id'];
			$deleteData['cty_state'] = 0;
			$result = $this->category->updateCategory($deleteInfo,$deleteData);
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
	public function updateCategory(){
		$user = $_POST;
		$updateInfo['cty_id'] = $user['cty_id'];
		$categoryData['cty_name'] = $user['cty_name'];
		$categoryData['cty_date'] = date('Y-m-d',time());
		$result = $this->category->updateCategory($updateInfo,$categoryData);
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
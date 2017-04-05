<?php 
	class MY_Controller extends CI_Controller{
		/*设置门槛*/
		function __construct(){
			parent::__construct();
			$this->load->model('Backend_model','bakend');
			$result = $this->session->userdata('user');
			if($result == null ){
				redirect('/build_backend/index.php/welcome');
			}
		}
	}
 ?>
<?php 
	class MY_Controller extends CI_Controller{
		/*设置门槛*/
		function __construct(){
			parent::__construct();
			$this->load->model('Backend_model','bakend');
			$this->load->model('Logo_model','logo');
			$this->load->model('Infor_model','infor');
			$this->load->model('Login_model','login');
			$this->load->model('Category_model','category');
			$this->load->model('Type_model','type');
			$result = $this->session->userdata('admin');
			if($result == null ){
				redirect('/forum/index.php/welcome');
			}
		}
	}
 ?>
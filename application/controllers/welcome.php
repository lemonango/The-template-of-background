<?php 
	class welcome extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Login_model','login');
		}
		public function index(){
			$this->load->view('login');
		}
		/*登陆验证*/
		public function logIn(){
			$account = $this->input->post('account');
			$password = $this->input->post('password');
			$info['adn_account'] = $account;
			$info['adn_password'] = $password;
			$result = $this->login->validateAccount($info);
			if($result == null || $result == ''){
				$error = 1;
				print_r($error);exit;
			}else{
				$data = $result[0];
				$this->session->set_userdata('admin',$data);
				$error = 0;
				print_r($error);exit;
			}
		}
	}
 ?>
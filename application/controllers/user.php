<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		
		/*public function index(){
		}*/
		
		public function login(){
			$this->load->view('login.php');
		}
		 
		public function do_login(){
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			
			$result=$this->user_model->get_name_by_pass($name,$pass);
			if($result){
				$arr=array(
					'id'=>$result->userid,
					'username'=>$result->username,
				);
				$this->session->set_userdata($arr);
				redirect('blog/index');
				
			}
			
		}
		
		public function reg(){
			$this->load->view('reg.php');
		}
		
		public function do_reg(){
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			$result=$this->user_model->insert($name,$pass);
			if($result){
				redirect('user/login');
			}else{
				redirect('user/reg');
			}
		}
	}


?>
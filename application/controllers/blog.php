<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			
			$this->load->model('blog_model');
			$rs=$this->blog_model->get_article();
			
			$arr['blog']=$rs;
			
			$this->load->view('index.php',$arr);
		}
		
		
		/*public function add(){
			$this->load->model('blog_model');*/
			/*$rs=$this->blog_model->get_catalog();
			$arr['catalog']=$rs;*/
		/*	$this->load->view('add.php',$arr);
			
		}
		*/
		
		public function add(){
			$this->load->view('add.php');
		}
		
		public function do_add(){
			$title=$this->input->post('title');
			$content=$this->input->post('con');
			
			
		}
		
		public function update(){
			$id=$this->uri->segment(3);
			$this->load->model('blog_model');
			$result=$this->blog_model->update_attr($id);
			$arr['up']=$result;
			$this->load->view('update.php',$arr);
		}
		
		public function do_update(){
			$title=$this->input->post('title');
			$con=$this->input->post('con');
			$hid=$this->input->post('hid');
			
			$this->load->model('blog_model');
			$result=$this->blog_model->update_id($hid,$title,$con);
			if($result){
				redirect('blog/index');
			}
		}
		
		public function del(){
			$id=$this->uri->segment(3);
			$this->load->model('blog_model');
			$result=$this->blog_model->del_attr($id);
			if($result){
				$this->index();
			}else{
				echo "删除失败";
			}
		}
		
		
		public function blog_catalog(){
			$this->load->view('catalog.php');
		}
		
		public function do_catalog(){
			$catalog_name=$this->input->post('catalog');
			$this->load->model('blog_model');
			$rs=$this->blog_model->insert_catalog($catalog_name);
			
			if($rs){
				redirect('blog/insert');
			}
		}
		
		public function insert(){
			$this->load->view('index.php');
		}
	}

/*public function insert(){
			$this->load->model('blog_model');
			$rs=$this->blog_model->get_catalog();
			$arr['catalog']=$rs;
			$this->load->view('insert.php',$arr);
			
		}*/
		
		
		
		

?>
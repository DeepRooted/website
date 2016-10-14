<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		public function insert($name,$pass){
			$data=array(
				'username'=>$name,
				'pass'=>$pass,
			);
			
			$query=$this->db->insert('user',$data);
			return $query;
		}
		
		public function get_name_by_pass($name,$pass){
			$data=array(
				'username'=>$name,
				'pass'=>$pass,
			);
			
			$query=$this->db->get_where('user',$data);
			return $query->row();
		}
	}

?>
<?php 
	class Admin_manage extends CI_Controller {
		public function admin_test() {
			$this->load->view("admin/header");
			$this->load->view("admin/testing");
			$this->load->view("admin/footer");
		}
		
		public function admin_login() {
			$this->load->view("admin/login");
			
		}
	
	
	
	}
	

?>

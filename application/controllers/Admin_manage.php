<?php 
	class Admin_manage extends CI_Controller {
		public function admin_login() {
			$this->data['title'] = "Admin Login";
			$this->load->view("admin/login", $this->data);
			
		}
		
		public function dashboard() {
			$this->data['title'] = "Welcome to wherevership admin";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/dashboard");
			$this->load->view("admin/footer");
		}
		
		public function add_requester() {
			$this->data['title'] = "Add Requester";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/add_requester");
			$this->load->view("admin/footer");
		}
		
		public function requester_list() {
			$this->data['title'] = "Requester list";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/requster_list");
			$this->load->view("admin/footer");
		}
		
		public function add_driver() {
			$this->data['title'] = "Add driver";
			$this->load->view("admin/header",$this->data);
			$this->load->view("admin/add_driver");
			$this->load->view("admin/footer");
		}
		
		public function driver_list() {
			$this->data['title'] = "Driver list";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/driver_list");
			$this->load->view("admin/footer");
		}
		
		public function add_admin() {
			$this->data['title'] = "Add admin";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/add_admin");
			$this->load->view("admin/footer");
		}
		
		public function admin_list() {
			$this->data['title'] = "Admin List";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/admin_list");
			$this->load->view("admin/footer");
			
		}
		
		public function domestic() {
			$this->data['title'] = "Domestic report";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/domestic");
			$this->load->view("admin/footer");
		}
		
		public function international() {
			$this->data['title'] = "International report";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/international");
			$this->load->view("admin/footer");
		}
		
		
		public function trucking() {
			$this->data['title'] = "Trucking report";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/trucking");
			$this->load->view("admin/footer");
		}
		
		public function international_cost() {
			$this->data['title'] = "International cost";
			$this->load->view("admin/header", $this_data);
			$this->load->view("admin/international_costing");
			$this->load->view("admin/footer");
		}
		
		public function domestic_cost() {
			$this->data['title'] = "Domestic cost";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/domestic_costing");
			$this->load->view("admin/footer");
		}
		
		public function trucking_cost() {
			$this->data['title'] = "Trucking Cost";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/trucking_costing");
			$this->load->view("admin/footer");
		}
		
		public function profile_setting() {
			$this->data['title'] = "Profile Setting";
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/profile_setting");
			$this->load->view("admin/footer");
		}
	
	
	
	}
	

?>

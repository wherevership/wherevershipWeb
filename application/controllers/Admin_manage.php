<?php 
	class Admin_manage extends CI_Controller {
		public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_Model');
	}
	
	
		public function admin_login() {
			if (isset($this->session->userdata['admin_logged_in'])) {
				redirect(base_url('admin/dashboard'));
				
			} else {
			$this->data['title'] = "Admin Login";
			
			$this->load->view("admin/login", $this->data);
			}
		}
		
		public function dashboard() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Welcome to wherevership admin";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/dashboard",Sthis->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function add_requester() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Add Requester";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/add_requester", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function requester_list() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Requester list";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/requster_list", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function add_driver() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Add driver";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header",$this->data);
			$this->load->view("admin/add_driver", $this_data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function driver_list() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Driver list";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/driver_list", $this_data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function add_admin() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Add admin";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/add_admin", $this_data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function admin_list() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Admin List";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/admin_list", $this_data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			} 
			
		}
		
		public function domestic() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Domestic report";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/domestic", $this_data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function international() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "International report";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/international", $this_data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		
		public function trucking() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Trucking report";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/trucking", $this_data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function international_cost() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "International cost";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this_data);
			$this->load->view("admin/international_costing", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
				
			}
		}
		
		public function domestic_cost() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Domestic cost";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/domestic_costing",$this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function trucking_cost() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Trucking Cost";
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/trucking_costing",$this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
				
			}
		}
		
		public function profile_setting() {
			if (isset($this->session->userdata['admin_logged_in'])) {
				$this->data['title'] = "Profile Setting";
				$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']);
				$this->load->view("admin/header", $this->data);
				$this->load->view("admin/profile_setting", $this->data);
				$this->load->view("admin/footer");
			} else {
				
				redirect(base_url('admin/login'));
			}
		}
		
		
		public function test_session() {
			if (isset($this->session->userdata['admin_logged_in'])) {
					$username = ($this->session->userdata['admin_logged_in']['firstname']);
					echo($username);
					
			} else {
				
				echo('no Login');
			}
			
			
		}
		
	
	
	
	}
	

?>

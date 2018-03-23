<?php
	class Member_manage extends CI_Controller {
		
		private $data = array();

		public function user_panel() {
			$this->data['title'] = "User Panel";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/user_panel");
			$this->load->view("member/footer");
		}
	
	
		public function personal_profile() {
			$this->data['title'] = "Personal Profile";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/personal_profile");
			$this->load->view("member/footer");
		}
	
		public function unpaid_orders() {
			$this->data['title'] = "Unpaid Order";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/unpaid_orders");
			$this->load->view("member/footer");
		}
	
		public function domestic_report() {
			$this->data['title'] = "Domestic Report";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/domestic_report");
			$this->load->view("member/footer");
			
		}
	
		public function international_report() {
			$this->data['title'] = "International Report";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/international_report");
			$this->load->view("member/footer");
			
		}
	
		public function address_book() {
			$this->data['title'] = "Address Book";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/address_book");
			$this->load->view("member/footer");
			
		}
	
		
	
	
	
	}

?>
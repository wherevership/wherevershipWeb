<?php
	class Member_manage extends CI_Controller {
		
		private $data = array();

		public function user_panel() {
			$this->data['title'] = "User Panel";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/user_panel");
			$this->load->view("member/footer1");
		}
	
	
		public function personal_profile() {
			$this->data['title'] = "Personal Profile";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/personal_profile");
			$this->load->view("member/footer1");
		}
	
		public function unpaid_orders() {
			$this->data['title'] = "Unpaid Order";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/unpaid_orders");
			$this->load->view("member/footer1");
		}
	
		public function domestic_report() {
			$this->data['title'] = "Domestic Report";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/domestic_report");
			$this->load->view("member/footer1");
			
		}
	
		public function international_report() {
			$this->data['title'] = "International Report";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/international_report");
			$this->load->view("member/footer1");
			
		}
		
		public function truck_report() {
			$this->data['title'] = "International Report";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/truck_report");
			$this->load->view("member/footer");
			
		}
	
		public function address_book() {
			$this->data['title'] = "Address Book";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/address_book");
			$this->load->view("member/footer");
			
		}
		
		public function courier() {
			$this->data['title'] = "courier";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/courier");
			$this->load->view("member/footer");
			
		}
		
		public function pending_items() {
			$this->data['title'] = "Pending Items";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/pending_items");
			$this->load->view("member/footer");
			
		}
		
		public function actions_required() {
			$this->data['title'] = "Actions Required";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/actions_required");
			$this->load->view("member/footer");
			
		}
	/*	
		public function unpaid_orders() {
			$this->data['title'] = "Unpaid Orders";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/unpaid_orders");
			$this->load->view("member/footer");
			
		}
	*/	
		public function partial_paid_order() {
			$this->data['title'] = "Partial Paid Order";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/partial_paid_order");
			$this->load->view("member/footer1");
			
		}
		
		public function invoice() {
			$this->data['title'] = "Invoice";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/invoice");
			$this->load->view("member/footer1");
			
		}
		
		public function credit_history() {
			$this->data['title'] = "Credit History";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/credit_history");
			$this->load->view("member/footer");
			
		}
		
		public function top_up_history() {
			$this->data['title'] = "Top Up History";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/top_up_history");
			$this->load->view("member/footer");
			
		}
		
		public function top_up() {
			$this->data['title'] = "Top Up";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/topUp");
			$this->load->view("member/footer");
			
		}
		
		public function bulk_upload() {
			$this->data['title'] = "Partial Paid Order";
			$this->load->view("member/header", $this->data);
			$this->load->view("member/bulk_Upload");
			$this->load->view("member/footer");
			
		}
	
		
	
	
	
	}

?>
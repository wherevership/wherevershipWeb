<?php
	class Member_manage extends CI_Controller {
		public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_Model');
		$this->load->model('Shipment_Model');
		
	}
		
		private $data = array();

		public function user_panel() {
			$this->data['title'] = "User Panel";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/user_panel",$this->data);
			$this->load->view("member/footer1", $this->data);
		}
	
	
		public function personal_profile() {
			$this->data['title'] = "Personal Profile";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				$userData = $this->User_Model->getOne(array(
						'id' => $this->data['id'],
					));
				$this->data['userData'] = $userData; 
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/personal_profile",$this->data);
			$this->load->view("member/footer1", $this->data);
		}
	
		public function unpaid_orders() {
			$this->data['title'] = "Unpaid Order";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/unpaid_orders");
			$this->load->view("member/footer1", $this->data);
		}
	
		public function domestic_report() {
			$this->data['title'] = "Domestic Report";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				$shipmentList = $this->Shipment_Model->get(array(
				  'type' => 'Domestic',
				  'userid' => $this->data['id'],
				  'is_deleted' => 0,
				));
				print_r($shipmentList);
				
				$this->data['shipmentList'] = $shipmentList;
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/domestic_report", $this->data);
			$this->load->view("member/footer1", $this->data);
			
		}
	
		public function international_report() {
			$this->data['title'] = "International Report";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				$shipmentList = $this->Shipment_Model->get(array(
				  'type' => 'International',
				  'userid' => $this->data['id'],
				  'is_deleted' => 0,
				));
				print_r($shipmentList);
				
				$this->data['shipmentList'] = $shipmentList;
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/international_report", $this->data);
			$this->load->view("member/footer1", $this->data);
			
		}
		
		public function truck_report() {
			$this->data['title'] = "International Report";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/truck_report");
			$this->load->view("member/footer", $this->data);
			
		}
	
		public function address_book() {
			$this->data['title'] = "Address Book";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/address_book");
			$this->load->view("member/footer1", $this->data);
			
		}
		
		public function edit_address_book($id) {
			$this->data['title'] = $id;
			$this->data['id'] = $id;
			
			$this->load->view("member/header", $this->data);
			$this->load->view("member/edit_address-book",$this->data);
			$this->load->view("member/footer1", $this->data);
			
		}
		
		public function courier() {
			$this->data['title'] = "courier";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/courier");
			$this->load->view("member/footer", $this->data);
			
		}
		
		public function pending_items() {
			$this->data['title'] = "Pending Items";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/pending_items");
			$this->load->view("member/footer", $this->data);
			
		}
		
		public function actions_required() {
			$this->data['title'] = "Actions Required";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/actions_required");
			$this->load->view("member/footer", $this->data);
			
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
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/partial_paid_order");
			$this->load->view("member/footer1", $this->data);
			
		}
		
		public function invoice() {
			$this->data['title'] = "Invoice";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/invoice");
			$this->load->view("member/footer1", $this->data);
			
		}
		
		public function credit_history() {
			$this->data['title'] = "Credit History";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/credit_history");
			$this->load->view("member/footer", $this->data);
			
		}
		
		public function top_up_history() {
			$this->data['title'] = "Top Up History";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/top_up_history");
			$this->load->view("member/footer", $this->data);
			
		}
		
		public function top_up() {
			$this->data['title'] = "Top Up";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/topUp");
			$this->load->view("member/footer", $this->data);
			
		}
		
		public function bulk_upload() {
			$this->data['title'] = "Partial Paid Order";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
			$this->load->view("member/header", $this->data);
			$this->load->view("member/bulk_Upload");
			$this->load->view("member/footer", $this->data);
			
		}
	
		
	
	
	
	}

?>
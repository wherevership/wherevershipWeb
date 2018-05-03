<?php 
	class Shipment_manage extends CI_Controller {
		
			public function dtcDetail($id) {
				
				$this->data['title'] = $id;
				$this->data['id'] = $id;
				$this->load->view("member/header", $this->data);
				$this->load->view("member/unpaid_orders", $this->data);
				$this->load->view("member/footer1");
			
			
			}
			
			public function intDetail($id) {
				$this->data['title'] = $id;
				$this->data['id'] = $id;
				$this->load->view("member/header", $this->data);
				$this->load->view("member/unpaid_orders", $this->data);
				$this->load->view("member/footer1");
			
			
			}
			
			
			
		
	}

?>
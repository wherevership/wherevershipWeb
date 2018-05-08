<?php 
	class Shipment_manage extends CI_Controller {
		
			public function dtcDetail($id) {
				
				$this->data['title'] = $id;
				$this->data['id'] = $id;
				$this->load->view("member/header", $this->data);
				$this->load->view("member/dtc_shipment_detail", $this->data);
				$this->load->view("member/footer");
			
			
			}
			
			public function intDetail($id) {
				$this->data['title'] = $id;
				$this->data['id'] = $id;
				$this->load->view("member/header", $this->data);
				$this->load->view("member/int_shipment_detail", $this->data);
				$this->load->view("member/footer");
			
			
			}
			
			
			
		
	}

?>
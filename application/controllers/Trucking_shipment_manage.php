<?php 

class Trucking_shipment_manage extends CI_Controller {
	public function tkShipperForm() {
		$this->load->view("truck/header");
		$this->load->view("truck/truck_shipper_form");
		$this->load->view("frontEnd/footer3");
		
	}
	
	public function tkReceiverForm() {
		$this->load->view("truck/header");
		$this->load->view("truck/truck_receiver_form");
		$this->load->view("frontEnd/footer3");
		
	}
	public function tkProductDetailForm() {
		$this->load->view("truck/header");
		$this->load->view("truck/truck_product_detail");
		$this->load->view("frontEnd/footer3");
		
	}
	
	
	
	
}




?>
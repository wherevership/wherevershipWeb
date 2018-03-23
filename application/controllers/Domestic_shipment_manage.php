<?php 

class Domestic_shipment_manage extends CI_Controller {
	private $data = array();
	
	public function domesticShipperForm() {
		$this->data['title'] = "Domestic Courier Shipper Info Form";
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_shipper_form");
		$this->load->view("frontEnd/footer3");
		
	}
	
	public function domesticReceiverForm() {
		$this->data['title'] = "Domestic Courier Receiver Info Form";
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_receiver_form");
		$this->load->view("frontEnd/footer3");
		
	}
	public function domesticProductDetailForm() {
		$this->data['title'] = "Domestic Courier Product Detail Form";
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_product_detail");
		$this->load->view("frontEnd/footer3");
		
	}
	
	
	
	
}

?>
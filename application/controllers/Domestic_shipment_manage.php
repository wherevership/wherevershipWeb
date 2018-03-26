<?php 

class Domestic_shipment_manage extends CI_Controller {
	private $data = array();
	
	public function domesticShipperForm() {
		$this->data['title'] = "Domestic Courier Shipper Info Form";
		$this->data['weight'] = $this->input->post("weight", true);
		$this->data['height'] = $this->input->post("height", true);
		$this->data['width'] = $this->input->post("width", true);
		$this->data['length'] = $this->input->post("length", true);
		$this->data['v_weight'] = $this->input->post("v_weight", true);
		$this->data['fromState'] = $this->input->post("fromState", true);
		$this->data['toState'] = $this->input->post("toState", true);
		$this->data['cost'] = $this->input->post("cost", true);
		
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_shipper_form", $this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	public function domesticReceiverForm() {
		$this->data['title'] = "Domestic Courier Shipper Info Form";
		$this->data['weight'] = $this->input->post("weight", true);
		$this->data['height'] = $this->input->post("height", true);
		$this->data['width'] = $this->input->post("width", true);
		$this->data['length'] = $this->input->post("length", true);
		$this->data['v_weight'] = $this->input->post("v_weight", true);
		$this->data['fromState'] = $this->input->post("fromState", true);
		$this->data['toState'] = $this->input->post("toState", true);
		$this->data['cost'] = $this->input->post("cost", true);
		
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
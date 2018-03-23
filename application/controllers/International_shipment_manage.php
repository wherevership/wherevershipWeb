<?php 

class International_shipment_manage extends CI_Controller {
	private $data = array();
	
	public function shipperForm() {
		$this->data['title'] = "International Courier Shipper Form";
		$this->data['weight'] = $this->input->post("weight",true);
		$this->data['fromCountry'] = $this->input->post("fromCountry",true);
		$this->data['toCountry'] = $this->input->post("toCountry",true);
		$this->data['cost'] = $this->input->post("cost",true);
		
		$this->load->view("international/header", $this->data);
		$this->load->view("international/ShipperForm", $this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	
	public function productDetailForm() {
		$this->data['title'] = "International Courier Product Detail Form";
		$this->load->view("international/header", $this->data);
		$this->load->view("international/ProductDetailForm");
		$this->load->view("frontEnd/footer3");
		
	}
	
	
	public function receiverForm() {
		$this->data['title'] = "International Courier Receiver Form";
		
		$this->load->view("international/header", $this->data);
		$this->load->view("international/ReceiverForm");
		$this->load->view("frontEnd/footer3");
		
	}
	
	public function agreementForm() {
		$this->data['title'] = "International Courier Agreement Form";
		$this->load->view("international/header", $this->data);
		$this->load->view("international/AgreeForm");
		$this->load->view("frontEnd/footer3");
		
	}
	
}

?>
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
		$this->data['fromPostcode'] = $this->input->post("fromPostcode", true);
		$this->data['toPostcode'] = $this->input->post("toPostcode", true);
		$this->data['fromState'] = $this->input->post("fromState", true);
		$this->data['toState'] = $this->input->post("toState", true);
		$this->data['cost'] = $this->input->post("cost", true);
		
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_shipper_form", $this->data);
		$this->load->view("domestic/footer");
		
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
		
		$this->data['shipper_company_name'] = $this->input->post("shipper_company_name)", true);
		$this->data['shipper_country'] = $this->input->post("shipper_country", true);
		$this->data['shipper_address1'] = $this->input->post("shipper_address1", true);
		$this->data['shipper_address2'] = $this->input->post("shipper_address2", true);
		$this->data['shipper_address3'] = $this->input->post("shipper_address3", true);
		$this->data['shipper_city'] = $this->input->post("shipper_city", true);
		$this->data['shipper_postcode'] = $this->input->post("shipper_postcode", true);
		$this->data['shipper_state'] = $this->input->post("fromState", true);
		$this->data['shipper_contact_person'] = $this->input->post("shipper_contact_person", true);
		$this->data['shipper_phone_number'] = $this->input->post("shipper_phone_number", true);
		$this->data['shipper_email'] = $this->input->post("shipper_email", true);
		
		$this->data['receiver_company_name'] = $this->input->post("receiver_company_name)", true);
		$this->data['receiver_country'] = $this->input->post("receiver_country", true);
		$this->data['receiver_address1'] = $this->input->post("receiver_address1", true);
		$this->data['receiver_address2'] = $this->input->post("receiver_address2", true);
		$this->data['receiver_address3'] = $this->input->post("receiver_address3", true);
		$this->data['receiver_city'] = $this->input->post("receiver_city", true);
		$this->data['receiver_postcode'] = $this->input->post("receiver_postcode", true);
		$this->data['receiver_state'] = $this->input->post("toState", true);
		$this->data['receiver_contact_person'] = $this->input->post("receiver_contact_person", true);
		$this->data['receiver_phone_number'] = $this->input->post("receiver_phone_number", true);
		$this->data['receiver_email'] = $this->input->post("receiver_email", true);
		
	//	$this->data['type'] = $this->input->post("type", true);
		$this->data['pickup_required'] = $this->input->post("pickup_required", true);
		$this->data['parcel_content'] = $this->input->post("parcel_content", true);
		$this->data['value_of_content'] = $this->input->post("value_of_content", true);
		
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_receiver_form",$this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	public function domesticProductDetailForm() {
		$this->data['title'] = "Domestic Courier Product Detail Form";
		$this->data['weight'] = $this->input->post("weight", true);
		$this->data['height'] = $this->input->post("height", true);
		$this->data['width'] = $this->input->post("width", true);
		$this->data['length'] = $this->input->post("length", true);
		$this->data['v_weight'] = $this->input->post("v_weight", true);
		$this->data['fromState'] = $this->input->post("fromState", true);
		$this->data['toCountry'] = $this->input->post("toCountry", true);
		$this->data['cost'] = $this->input->post("cost", true);
		
		$this->data['shipper_account_number'] = $this->input->post("shipper_account_number", true);
		$this->data['shipper_account_name'] = $this->input->post("shipper_account_name", true);
		$this->data['shipper_company_name'] = $this->input->post("shipper_company_name)", true);
		$this->data['shipper_country'] = $this->input->post("shipper_country", true);
		$this->data['shipper_address'] = $this->input->post("shipper_address", true);
		$this->data['shipper_city'] = $this->input->post("shipper_city", true);
		$this->data['shipper_postcode'] = $this->input->post("shipper_postcode", true);
		$this->data['shipper_state'] = $this->input->post("shipper_state", true);
		$this->data['shipper_subhub'] = $this->input->post("shipper_subhub", true);
		$this->data['shipper_contact_person'] = $this->input->post("shipper_contact_person", true);
		$this->data['shipper_phone_number'] = $this->input->post("shipper_phone_number", true);
		$this->data['shipper_email'] = $this->input->post("shipper_email", true);
		
		$this->data['receiver_account_number'] = $this->input->post("receiver_account_number", true);
		$this->data['receiver_account_name'] = $this->input->post("receiver_account_name", true);
		$this->data['receiver_company_name'] = $this->input->post("receiver_company_name)", true);
		$this->data['receiver_country'] = $this->input->post("receiver_country", true);
		$this->data['receiver_address'] = $this->input->post("receiver_address", true);
		$this->data['receiver_city'] = $this->input->post("receiver_city", true);
		$this->data['receiver_postcode'] = $this->input->post("receiver_postcode", true);
		$this->data['receiver_state'] = $this->input->post("receiver_state", true);
		$this->data['receiver_subhub'] = $this->input->post("receiver_subhub", true);
		$this->data['receiver_contact_person'] = $this->input->post("receiver_contact_person", true);
		$this->data['receiver_phone_number'] = $this->input->post("receiver_phone_number", true);
		$this->data['receiver_email'] = $this->input->post("receiver_email", true);
		
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_product_detail", $this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	
	public function domesticShipmentOverview() {
		$this->data['title'] = "Domestic Courier Shipment Overview";
		
		$this->data['weight'] = $this->input->post("weight", true);
		$this->data['height'] = $this->input->post("height", true);
		$this->data['width'] = $this->input->post("width", true);
		$this->data['length'] = $this->input->post("length", true);
		$this->data['v_weight'] = $this->input->post("v_weight", true);
		$this->data['fromState'] = $this->input->post("fromState", true);
		$this->data['toCountry'] = $this->input->post("toCountry", true);
		$this->data['cost'] = $this->input->post("cost", true);
		
		$this->data['shipper_account_number'] = $this->input->post("shipper_account_number", true);
		$this->data['shipper_account_name'] = $this->input->post("shipper_account_name", true);
		$this->data['shipper_company_name'] = $this->input->post("shipper_company_name)", true);
		$this->data['shipper_country'] = $this->input->post("shipper_country", true);
		$this->data['shipper_address'] = $this->input->post("shipper_address", true);
		$this->data['shipper_city'] = $this->input->post("shipper_city", true);
		$this->data['shipper_postcode'] = $this->input->post("shipper_postcode", true);
		$this->data['shipper_state'] = $this->input->post("shipper_state", true);
		$this->data['shipper_subhub'] = $this->input->post("shipper_subhub", true);
		$this->data['shipper_contact_person'] = $this->input->post("shipper_contact_person", true);
		$this->data['shipper_phone_number'] = $this->input->post("shipper_phone_number", true);
		$this->data['shipper_email'] = $this->input->post("shipper_email", true);
		
		$this->data['receiver_account_number'] = $this->input->post("receiver_account_number", true);
		$this->data['receiver_account_name'] = $this->input->post("receiver_account_name", true);
		$this->data['receiver_company_name'] = $this->input->post("receiver_company_name)", true);
		$this->data['receiver_country'] = $this->input->post("receiver_country", true);
		$this->data['receiver_address'] = $this->input->post("receiver_address", true);
		$this->data['receiver_city'] = $this->input->post("receiver_city", true);
		$this->data['receiver_postcode'] = $this->input->post("receiver_postcode", true);
		$this->data['receiver_state'] = $this->input->post("receiver_state", true);
		$this->data['receiver_subhub'] = $this->input->post("receiver_subhub", true);
		$this->data['receiver_contact_person'] = $this->input->post("receiver_contact_person", true);
		$this->data['receiver_phone_number'] = $this->input->post("receiver_phone_number", true);
		$this->data['receiver_email'] = $this->input->post("receiver_email", true);
		
		$this->data['type'] = $this->input->post("type", true);
		$this->data['pickup_required'] = $this->input->post("pickup_required", true);
		$this->data['pieces'] = $this->input->post("pieces", true);
		
		
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_shipper_overview", $this->data);
		$this->load->view("frontEnd/footer3");
		
		
	
	}
	
	
	
	
	
}

?>
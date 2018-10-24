<?php 

class Domestic_shipment_manage extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Domestic_Price_Model');
		
	}
	
	private $data = array();
	
	public function domesticShipmentForm() {
		$this->data['title'] = "Domestic Courier Shipment Form";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
		
		}
		$this->data['weight'] = ($this->session->userdata['domesticShipment1']['weight']);
		$this->data['height'] = ($this->session->userdata['domesticShipment1']['height']);
		$this->data['width'] = ($this->session->userdata['domesticShipment1']['width']);
		$this->data['length'] = ($this->session->userdata['domesticShipment1']['length']);
		$this->data['v_weight'] = ($this->session->userdata['domesticShipment1']['v_weight']);
		$this->data['fromPostcode'] = ($this->session->userdata['domesticShipment1']['fromPostcode']);
		$this->data['toPostcode'] = ($this->session->userdata['domesticShipment1']['toPostcode']);
		$this->data['fromState'] = ($this->session->userdata['domesticShipment1']['fromState']);
		$this->data['toState'] = ($this->session->userdata['domesticShipment1']['toState']);
		$this->data['cost'] = ($this->session->userdata['domesticShipment1']['cost']);
		
		
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_shipper_form", $this->data);
		$this->load->view("domestic/footer");
		
	}
	
	public function domesticShipmentFormProcess() {
		$weight = $this->input->post("weight", true);
		$height = $this->input->post("height", true);
		$width = $this->input->post("width", true);
		$length = $this->input->post("length", true);
		$v_weight = $this->input->post("v_weight", true);
		$fromPostcode = $this->input->post("fromPostcode", true);
		$toPostcode = $this->input->post("toPostcode", true);
		$fromState = $this->input->post("fromState", true);
		$toState = $this->input->post("toState", true);
		$cost = $this->input->post("cost", true);
		
		$saveData = array(
				"weight" => $weight,
				"height" => $height,
				"width" => $width,
				"length" => $length,
				"v_weight" => $v_weight,
				"fromPostcode" => $fromPostcode,
				"toPostcode" => $toPostcode,
				"fromState" => $fromState,
				"toState" => $toState,
				"cost" => $cost,
		);
		
		$this->session->set_userdata('domesticShipment1', $saveData);
		redirect(base_url('dtc_shipment'));
	} 
	
	
	public function domesticShipmentOverview() {
		$this->data['title'] = "Domestic Courier Shipment Overview";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		$this->data['weight'] = ($this->session->userdata['domesticOverview']['weight']);;
		$this->data['height'] = ($this->session->userdata['domesticOverview']['height']);;
		$this->data['width'] = ($this->session->userdata['domesticOverview']['width']);;
		$this->data['length'] = ($this->session->userdata['domesticOverview']['length']);;
		$this->data['v_weight'] = ($this->session->userdata['domesticOverview']['v_weight']);;
		$this->data['fromState'] = ($this->session->userdata['domesticOverview']['fromState']);;
		$this->data['toState'] = ($this->session->userdata['domesticOverview']['toState']);
		$this->data['cost'] = ($this->session->userdata['domesticOverview']['cost']);
		$this->data['userId'] = ($this->session->userdata['domesticOverview']['userId']);
		$this->data['shipper_company_name'] = ($this->session->userdata['domesticOverview']['shipper_company_name']);
		$this->data['shipper_country'] = ($this->session->userdata['domesticOverview']['shipper_country']);
		$this->data['shipper_address1'] = ($this->session->userdata['domesticOverview']['shipper_address1']);
		$this->data['shipper_address2'] = ($this->session->userdata['domesticOverview']['shipper_address2']);
		$this->data['shipper_address3'] = ($this->session->userdata['domesticOverview']['shipper_address3']);
		$this->data['shipper_city'] = ($this->session->userdata['domesticOverview']['shipper_city']);
		$this->data['shipper_postcode'] = ($this->session->userdata['domesticOverview']['shipper_postcode']);
		$this->data['shipper_state'] = ($this->session->userdata['domesticOverview']['shipper_state']);
		$this->data['shipper_contact_person'] = ($this->session->userdata['domesticOverview']['shipper_contact_person']);
		$this->data['shipper_phone_number'] = ($this->session->userdata['domesticOverview']['shipper_phone_number']);
		$this->data['shipper_email'] = ($this->session->userdata['domesticOverview']['shipper_email']);
		$this->data['receiver_company_name'] = ($this->session->userdata['domesticOverview']['receiver_company_name']);
		$this->data['receiver_country'] = ($this->session->userdata['domesticOverview']['receiver_country']);
		$this->data['receiver_address1'] = ($this->session->userdata['domesticOverview']['receiver_address1']);
		$this->data['receiver_address2'] = ($this->session->userdata['domesticOverview']['receiver_address2']);
		$this->data['receiver_address3'] = ($this->session->userdata['domesticOverview']['receiver_address3']);
		$this->data['receiver_city'] = ($this->session->userdata['domesticOverview']['receiver_city']);
		$this->data['receiver_postcode'] = ($this->session->userdata['domesticOverview']['receiver_postcode']);
		$this->data['receiver_state'] = ($this->session->userdata['domesticOverview']['receiver_state']);
		$this->data['receiver_contact_person'] = ($this->session->userdata['domesticOverview']['receiver_contact_person']);
		$this->data['receiver_phone_number'] = ($this->session->userdata['domesticOverview']['receiver_phone_number']);
		$this->data['receiver_email'] = ($this->session->userdata['domesticOverview']['receiver_email']);
		$this->data['pickup_required'] = ($this->session->userdata['domesticOverview']['pickup_required']);
		$this->data['parcel_content'] = ($this->session->userdata['domesticOverview']['parcel_content']);
		$this->data['value_of_content'] = ($this->session->userdata['domesticOverview']['value_of_content']);
		
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_receiver_form",$this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	public function domesticShipmentOverviewProcess() {
		
		$weight = $this->input->post("weight", true);
		$height = $this->input->post("height", true);
		$width = $this->input->post("width", true);
		$length = $this->input->post("length", true);
		$v_weight = $this->input->post("v_weight", true);
		$fromState = $this->input->post("fromState", true);
		$toState = $this->input->post("toState", true);
		$cost = $this->input->post("cost", true);
		$userId = $this->input->post("userId", true);
		$shipper_company_name = $this->input->post("shipper_company_name", true);
		$shipper_country = $this->input->post("shipper_country", true);
		$shipper_address1 = $this->input->post("shipper_address1", true);
		$shipper_address2 = $this->input->post("shipper_address2", true);
		$shipper_address3 = $this->input->post("shipper_address3", true);
		$shipper_city = $this->input->post("shipper_city", true);
		$shipper_postcode = $this->input->post("shipper_postcode", true);
		$shipper_state = $this->input->post("fromState", true);
		$shipper_contact_person = $this->input->post("shipper_contact_person", true);
		$shipper_phone_number = $this->input->post("shipper_phone_number", true);
		$shipper_email = $this->input->post("shipper_email", true);
		
		$receiver_company_name = $this->input->post("receiver_company_name", true);
		$receiver_country = $this->input->post("receiver_country", true);
		$receiver_address1 = $this->input->post("receiver_address1", true);
		$receiver_address2 = $this->input->post("receiver_address2", true);
		$receiver_address3 = $this->input->post("receiver_address3", true);
		$receiver_city = $this->input->post("receiver_city", true);
		$receiver_postcode = $this->input->post("receiver_postcode", true);
		$receiver_state = $this->input->post("toState", true);
		$receiver_contact_person = $this->input->post("receiver_contact_person", true);
		$receiver_phone_number = $this->input->post("receiver_phone_number", true);
		$receiver_email = $this->input->post("receiver_email", true);
		
		
	//	$this->data['type'] = $this->input->post("type", true);
		$pickup_required = $this->input->post("pickup_required", true);
		$parcel_content = $this->input->post("parcel_content", true);
		$value_of_content = $this->input->post("value_of_content", true);
		
		$saveData = array(
				"weight" => $weight,
				"height" => $height,
				"width" => $width,
				"length" => $length,
				"v_weight" => $v_weight,
				"fromPostcode" => $fromPostcode,
				"toPostcode" => $toPostcode,
				"fromState" => $fromState,
				"toState" => $toState,
				"cost" => $cost,
				"userId" => $userId,
				"shipper_company_name" => $shipper_company_name,
				"shipper_country" => $shipper_country,
				"shipper_address1" => $shipper_address1,
				"shipper_address2" => $shipper_address2,
				"shipper_address3" => $shipper_address3,
				"shipper_city" => $shipper_city, 
				"shipper_postcode" => $shipper_postcode,
				"shipper_state" => $fromState, 
				"shipper_contact_person" => $shipper_contact_person, 
				"shipper_phone_number" => $shipper_phone_number, 
				"shipper_email" => $shipper_email,
				"receiver_company_name" => $receiver_company_name, 
				"receiver_country" => $receiver_country,
				"receiver_address1" => $receiver_address1, 
				"receiver_address2" => $receiver_address2, 
				"receiver_address3" => $receiver_address3, 
				"receiver_city" => $receiver_city, 
				"receiver_postcode" => $receiver_postcode,
				"receiver_state" => $toState,
				"receiver_contact_person" => $receiver_contact_person,
				"receiver_phone_number" => $receiver_phone_number, 
				"receiver_email" => $receiver_email, 
				"pickup_required" => $pickup_required,
				"parcel_content" => $parcel_content,
				"value_of_content" => $value_of_content,
				
		);
		
		$this->session->set_userdata('domesticOverview', $saveData);
		redirect(base_url('dtc_shipment_overview'));
		
	}
	
	
	public function domesticPayment() {
		$this->data['title'] = "Domestic Courier Product Detail Form";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
		$this->data['weight'] = ($this->session->userdata['dtcPayment']['weight']);;
		$this->data['height'] = ($this->session->userdata['dtcPayment']['height']);;
		$this->data['width'] = ($this->session->userdata['dtcPayment']['width']);;
		$this->data['length'] = ($this->session->userdata['dtcPayment']['length']);;
		$this->data['v_weight'] = ($this->session->userdata['dtcPayment']['v_weight']);;
		//$this->data['fromState'] = ($this->session->userdata['dtcPayment']['fromState']);;
	//	$this->data['toState'] = ($this->session->userdata['dtcPayment']['toState']);
		$this->data['cost'] = ($this->session->userdata['dtcPayment']['cost']);
		$this->data['userId'] = ($this->session->userdata['dtcPayment']['userId']);
		$this->data['shipper_company_name'] = ($this->session->userdata['dtcPayment']['shipper_company_name']);
		$this->data['shipper_country'] = ($this->session->userdata['dtcPayment']['shipper_country']);
		$this->data['shipper_address1'] = ($this->session->userdata['dtcPayment']['shipper_address1']);
		$this->data['shipper_address2'] = ($this->session->userdata['dtcPayment']['shipper_address2']);
		$this->data['shipper_address3'] = ($this->session->userdata['dtcPayment']['shipper_address3']);
		$this->data['shipper_city'] = ($this->session->userdata['dtcPayment']['shipper_city']);
		$this->data['shipper_postcode'] = ($this->session->userdata['dtcPayment']['shipper_postcode']);
		$this->data['shipper_state'] = ($this->session->userdata['dtcPayment']['shipper_state']);
		$this->data['shipper_contact_person'] = ($this->session->userdata['dtcPayment']['shipper_contact_person']);
		$this->data['shipper_phone_number'] = ($this->session->userdata['dtcPayment']['shipper_phone_number']);
		$this->data['shipper_email'] = ($this->session->userdata['dtcPayment']['shipper_email']);
		$this->data['receiver_company_name'] = ($this->session->userdata['dtcPayment']['receiver_company_name']);
		$this->data['receiver_country'] = ($this->session->userdata['dtcPayment']['receiver_country']);
		$this->data['receiver_address1'] = ($this->session->userdata['dtcPayment']['receiver_address1']);
		$this->data['receiver_address2'] = ($this->session->userdata['dtcPayment']['receiver_address2']);
		$this->data['receiver_address3'] = ($this->session->userdata['dtcPayment']['receiver_address3']);
		$this->data['receiver_city'] = ($this->session->userdata['dtcPayment']['receiver_city']);
		$this->data['receiver_postcode'] = ($this->session->userdata['dtcPayment']['receiver_postcode']);
		$this->data['receiver_state'] = ($this->session->userdata['dtcPayment']['receiver_state']);
		$this->data['receiver_contact_person'] = ($this->session->userdata['dtcPayment']['receiver_contact_person']);
		$this->data['receiver_phone_number'] = ($this->session->userdata['dtcPayment']['receiver_phone_number']);
		$this->data['receiver_email'] = ($this->session->userdata['dtcPayment']['receiver_email']);
		$this->data['pickup_required'] = ($this->session->userdata['dtcPayment']['pickup_required']);
		$this->data['parcel_content'] = ($this->session->userdata['dtcPayment']['parcel_content']);
		$this->data['value_of_content'] = ($this->session->userdata['dtcPayment']['value_of_content']);
		
		$this->load->view("domestic/header", $this->data);
		$this->load->view("domestic/domestic_product_detail", $this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	public function domesticPaymentProcess() {
		$weight = $this->input->post("weight", true);
		$height = $this->input->post("height", true);
		$width = $this->input->post("width", true);
		$length = $this->input->post("length", true);
		$v_weight = $this->input->post("v_weight", true);
		$cost = $this->input->post("cost", true);
		$userId = $this->input->post("userId", true);
		$shipper_company_name = $this->input->post("shipper_company_name", true);
		$shipper_country = $this->input->post("shipper_country", true);
		$shipper_address1 = $this->input->post("shipper_address1", true);
		$shipper_address2 = $this->input->post("shipper_address2", true);
		$shipper_address3 = $this->input->post("shipper_address3", true);
		$shipper_city = $this->input->post("shipper_city", true);
		$shipper_postcode = $this->input->post("shipper_postcode", true);
		$shipper_state = $this->input->post("shipper_state", true);
		$shipper_contact_person = $this->input->post("shipperContactPerson", true);
		$shipper_phone_number = $this->input->post("shipper_phone_number", true);
		$shipper_email = $this->input->post("shipper_email", true);
		
		$receiver_company_name = $this->input->post("receiver_company_name", true);
		$receiver_country = $this->input->post("receiver_country", true);
		$receiver_address1 = $this->input->post("receiver_address1", true);
		$receiver_address2 = $this->input->post("receiver_address2", true);
		$receiver_address3 = $this->input->post("receiver_address3", true);
		$receiver_city = $this->input->post("receiver_city", true);
		$receiver_postcode = $this->input->post("receiver_postcode", true);
		$receiver_state = $this->input->post("receiver_state", true);
		$receiver_contact_person = $this->input->post("receiver_contact_person", true);
		$receiver_phone_number = $this->input->post("receiver_phone_number", true);
		$receiver_email = $this->input->post("receiver_email", true);
		
		
	//	$this->data['type'] = $this->input->post("type", true);
		$pickup_required = $this->input->post("pickup_required", true);
		$parcel_content = $this->input->post("parcel_content", true);
		$value_of_content = $this->input->post("value_of_content", true);
		
		$saveData = array(
				"weight" => $weight,
				"height" => $height,
				"width" => $width,
				"length" => $length,
				"v_weight" => $v_weight,
				"cost" => $cost,
				"userId" => $userId,
				"shipper_company_name" => $shipper_company_name,
				"shipper_country" => $shipper_country,
				"shipper_address1" => $shipper_address1,
				"shipper_address2" => $shipper_address2,
				"shipper_address3" => $shipper_address3,
				"shipper_city" => $shipper_city, 
				"shipper_postcode" => $shipper_postcode,
				"shipper_state" => $shipper_state, 
				"shipper_contact_person" => $shipper_contact_person, 
				"shipper_phone_number" => $shipper_phone_number, 
				"shipper_email" => $shipper_email,
				"receiver_company_name" => $receiver_company_name, 
				"receiver_country" => $receiver_country,
				"receiver_address1" => $receiver_address1, 
				"receiver_address2" => $receiver_address2, 
				"receiver_address3" => $receiver_address3, 
				"receiver_city" => $receiver_city, 
				"receiver_postcode" => $receiver_postcode,
				"receiver_state" => $receiver_state,
				"receiver_contact_person" => $receiver_contact_person,
				"receiver_phone_number" => $receiver_phone_number, 
				"receiver_email" => $receiver_email, 
				"pickup_required" => $pickup_required,
				"parcel_content" => $parcel_content,
				"value_of_content" => $value_of_content,
				
		);
		
		$this->session->set_userdata('dtcPayment', $saveData);
		redirect(base_url('dtc_payment'));
		
		
	}
	
	
	public function domesticShipmentOverview1() {
		$this->data['title'] = "Domestic Courier Shipment Overview";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
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
	
	public function domestic_price($zone) {
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		$this->data['zone'] = $zone;
		$this->data['title'] = "Domestic Price-"." ".$zone;
		
		$priceList = $this->Domestic_Price_Model->get(array(
				'zone' => $zone,
				'is_deleted' => 0,
			));
		
		$this->data['priceList'] = $priceList;
		$this->load->view("admin/header", $this->data);
		$this->load->view("admin/domestic_price_list", $this->data);
		$this->load->view("admin/footer");
		
		
	}
	
	public function domestic_price_update($zone,$id) {
		$tagName= 'price'.$id;
		$input1 = $this->input->post($tagName, true);
		$whereArray = array(
						"id" => $id,
						);
		$updateArray = array(
						"price" => $input1,
						"modified_date" => date("Y-m-d H:i:s"),
						);
		$this->Domestic_Price_Model->update($whereArray, $updateArray);
		redirect(base_url('domestic/domestic_price/').$zone);
	}
	
	
	
	
}

?>
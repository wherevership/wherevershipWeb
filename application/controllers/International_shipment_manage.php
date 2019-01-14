<?php 

class International_shipment_manage extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Config_Model');
		$this->load->model('International_Price_Model');
		$this->load->model('Custom_Clearance_Model');
		
	}
	private $data = array();
	
	public function shipperForm() {
		$this->data['title'] = "International Courier Shipment Form";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		print_r($this->session->userdata['IntShipment1']);
		$this->data['weight'] = ($this->session->userdata['IntShipment1']['weight']);
		$this->data['height'] = ($this->session->userdata['IntShipment1']['height']);
		$this->data['width'] = ($this->session->userdata['IntShipment1']['width']);
		$this->data['length'] = ($this->session->userdata['IntShipment1']['length']);
		$this->data['v_weight'] = ($this->session->userdata['IntShipment1']['v_weight']);
		$this->data['fromState'] = ($this->session->userdata['IntShipment1']['fromState']);
		$this->data['toCountry'] = ($this->session->userdata['IntShipment1']['toCountry']);
		$this->data['cost'] = ($this->session->userdata['IntShipment1']['cost']);
		$this->data['type'] = ($this->session->userdata['IntShipment1']['type']);
		$this->data['fuelCharge'] = ($this->session->userdata['IntShipment1']['fuelCharge']);
		
		$this->load->view("international/header", $this->data);
		$this->load->view("international/ShipperForm", $this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	
	public function shipperFormProcess() {
		$weight = $this->input->post("weight", true);
		$height= $this->input->post("height", true);
		$width = $this->input->post("width", true);
		$length = $this->input->post("length", true);
		$v_weight = $this->input->post("v_weight", true);
		$fromState = $this->input->post("fromState", true);
		$toCountry = $this->input->post("toCountry", true);
		$cost = $this->input->post("cost", true);
		$type = $this->input->post("type", true);
		$fuelCharge = $this->input->post("fuelCharge", true);
		
		$saveData = array(
				"weight" => $weight,
				"height" => $height,
				"width" => $width,
				"length" => $length,
				"v_weight" => $v_weight,
				"fromState" => $fromState,
				"toCountry" => $toCountry,
				"cost" => $cost,
				"type" => $type,
				"fuelCharge" => $fuelCharge,
		);
		
		$this->session->set_userdata('IntShipment1', $saveData);
		redirect(base_url('int_shipper'));
		
		
	}
	
	public function productDetailForm() {
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		print_r($this->session->userdata['IntProductDetail']);
		$this->data['weight'] = ($this->session->userdata['IntProductDetail']['weight']);
		$this->data['height'] = ($this->session->userdata['IntProductDetail']['height']);
		$this->data['width'] = ($this->session->userdata['IntProductDetail']['width']);
		$this->data['length'] = ($this->session->userdata['IntProductDetail']['length']);
		$this->data['v_weight'] = ($this->session->userdata['IntProductDetail']['v_weight']);
		$this->data['fromState'] = ($this->session->userdata['IntProductDetail']['fromState']);
		$this->data['toCountry'] = ($this->session->userdata['IntProductDetail']['toCountry']);
		$this->data['cost'] = ($this->session->userdata['IntProductDetail']['cost']);
		$this->data['type'] = ($this->session->userdata['IntProductDetail']['type']);
		$this->data['fuelCharge'] = ($this->session->userdata['IntProductDetail']['fuelCharge']);
		
		$this->data['shipper_company_name'] = ($this->session->userdata['IntProductDetail']['shipper_company_name']);
		$this->data['shipper_country'] = ($this->session->userdata['IntProductDetail']['shipper_country']);
		$this->data['shipper_address1'] = ($this->session->userdata['IntProductDetail']['shipper_address1']);
		$this->data['shipper_address2'] = ($this->session->userdata['IntProductDetail']['shipper_address2']);
		$this->data['shipper_address3'] = ($this->session->userdata['IntProductDetail']['shipper_address3']);
		$this->data['shipper_city'] = ($this->session->userdata['IntProductDetail']['shipper_city']);
		$this->data['shipper_postcode'] = ($this->session->userdata['IntProductDetail']['shipper_postcode']);
		$this->data['shipper_state'] = ($this->session->userdata['IntProductDetail']['shipper_state']);
		$this->data['shipper_subhub'] = ($this->session->userdata['IntProductDetail']['shipper_subhub']);
		$this->data['shipper_contact_person'] = ($this->session->userdata['IntProductDetail']['shipper_contact_person']);
		$this->data['shipper_phone_number'] = ($this->session->userdata['IntProductDetail']['shipper_phone_number']);
		$this->data['shipper_email'] = ($this->session->userdata['IntProductDetail']['shipper_email']);
		
		
		$this->data['receiver_company_name'] = ($this->session->userdata['IntProductDetail']['receiver_company_name']);
		$this->data['receiver_country'] = ($this->session->userdata['IntProductDetail']['receiver_country']);
		$this->data['receiver_address1'] = ($this->session->userdata['IntProductDetail']['receiver_address1']);
		$this->data['receiver_address2'] = ($this->session->userdata['IntProductDetail']['receiver_address2']);
		$this->data['receiver_address3'] = ($this->session->userdata['IntProductDetail']['receiver_address3']);
		$this->data['receiver_city'] = ($this->session->userdata['IntProductDetail']['receiver_city']);
		$this->data['receiver_postcode'] = ($this->session->userdata['IntProductDetail']['receiver_postcode']);
		$this->data['receiver_state'] = ($this->session->userdata['IntProductDetail']['receiver_state']);
		$this->data['receiver_subhub'] = ($this->session->userdata['IntProductDetail']['receiver_subhub']);
		$this->data['receiver_contact_person'] = ($this->session->userdata['IntProductDetail']['receiver_contact_person']);
		$this->data['receiver_phone_number'] = ($this->session->userdata['IntProductDetail']['receiver_phone_number']);
		$this->data['receiver_email'] = ($this->session->userdata['IntProductDetail']['receiver_email']);
		
		$this->data['pickup_required'] = ($this->session->userdata['IntProductDetail']['pickup_required']);
		$this->data['parcel_content'] = ($this->session->userdata['IntProductDetail']['parcel_content']);
		$this->data['value_of_content'] = ($this->session->userdata['IntProductDetail']['value_of_content']);
		$this->data['collection_date'] = ($this->session->userdata['IntProductDetail']['collection_date']);
		
		$this->data['shipper_GST'] = ($this->session->userdata['IntProductDetail']['shipper_GST']);
		$this->data['receiver_GST'] = ($this->session->userdata['IntProductDetail']['receiver_GST']);
		$this->data['declared_value'] = ($this->session->userdata['IntProductDetail']['declared_value']);
		$this->data['currecy'] = ($this->session->userdata['IntProductDetail']['currecy']);
		$this->data['commodity_code'] = ($this->session->userdata['IntProductDetail']['commodity_code']);
		$this->data['exemtion'] = ($this->session->userdata['IntProductDetail']['exemtion']);
		$this->data['itn'] = ($this->session->userdata['IntProductDetail']['itn']);
		$this->data['type_of_export'] = ($this->session->userdata['IntProductDetail']['type_of_export']);
		$this->data['destination_duties'] = ($this->session->userdata['IntProductDetail']['destination_duties']);
		$this->data['approved_account_number'] = ($this->session->userdata['IntProductDetail']['approved_account_number']);
		
		$this->data['title'] = "International Courier Product Detail Form";
		$this->load->view("international/header", $this->data);
		$this->load->view("international/ProductDetailForm", $this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	
	public function productDetailFormProcess() {
		
		$weight = $this->input->post("weight", true);
		$height = $this->input->post("height", true);
		$width = $this->input->post("width", true);
		$length = $this->input->post("length", true);
		$v_weight = $this->input->post("v_weight", true);
		$fromState = $this->input->post("fromState", true);
		$toCountry = $this->input->post("toCountry", true);
		$cost = $this->input->post("cost", true);
		$type = $this->input->post("type", true);
		$fuelCharge = $this->input->post("fuelCharge", true);
		
		$shipper_account_number = $this->input->post("shipper_account_number", true);
		$shipper_account_name = $this->input->post("shipper_account_name", true);
		$shipper_company_name = $this->input->post("shipper_company_name", true);
		$shipper_country = $this->input->post("shipper_country", true);
		$shipper_address1 = $this->input->post("shipper_address1", true);
		$shipper_address2 = $this->input->post("shipper_address2", true);
		$shipper_address3 = $this->input->post("shipper_address3", true);
		$shipper_city = $this->input->post("shipper_city", true);
		$shipper_postcode = $this->input->post("shipper_postcode", true);
		$shipper_state = $this->input->post("shipper_state", true);
		$shipper_subhub = $this->input->post("shipper_subhub", true);
		$shipper_contact_person = $this->input->post("shipper_contact_person", true);
		$shipper_phone_number = $this->input->post("shipper_phone_number", true);
		$shipper_email = $this->input->post("shipper_email", true);
		
		$receiver_account_number = $this->input->post("receiver_account_number", true);
		$receiver_account_name = $this->input->post("receiver_account_name", true);
		$receiver_company_name = $this->input->post("receiver_company_name", true);
		$receiver_country = $this->input->post("receiver_country", true);
		$receiver_address1 = $this->input->post("receiver_address1", true);
		$receiver_address2 = $this->input->post("receiver_address2", true);
		$receiver_address3 = $this->input->post("receiver_address3", true);
		$receiver_city = $this->input->post("receiver_city", true);
		$receiver_postcode = $this->input->post("receiver_postcode", true);
		$receiver_state = $this->input->post("receiver_state", true);
		$receiver_subhub = $this->input->post("receiver_subhub", true);
		$receiver_contact_person = $this->input->post("receiver_contact_person", true);
		$receiver_phone_number = $this->input->post("receiver_phone_number", true);
		$receiver_email = $this->input->post("receiver_email", true);
		
		$pickup_required = $this->input->post("pickup_required", true);
		$parcel_content = $this->input->post("parcel_content", true);
		$value_of_content = $this->input->post("value_of_content", true);
		$collectionDate = $this->input->post("collectionDate", true);
		
		$shipper_GST = $this->input->post("shipper_GST", true);
		$receiver_GST = $this->input->post("receiver_GST", true);
		$declared_value = $this->input->post("declared_value", true);
		$currecy = $this->input->post("currecy", true);
		$commodity_code = $this->input->post("commodity_code", true);
		$exemtion = $this->input->post("exemtion", true);
		$itn = $this->input->post("itn", true);
		$type_of_export = $this->input->post("type_of_export", true);
		$destination_duties = $this->input->post("destination_duties", true);
		$approved_account_number = $this->input->post("approved_account_number", true);
		
		$saveData = array(
				"weight" => $weight, 
				"height" => $height, 
				"width" => $width,
				"length" => $length, 
				"v_weight" => $v_weight, 
				"fromState" => $fromState, 
				"toCountry" => $toCountry,
				"cost" => $cost,
				"type" => $type,
				"fuelCharge" => $fuelCharge, 
				"shipper_company_name" => $shipper_company_name,
				"shipper_country" => $shipper_country,
				"shipper_address1" => $shipper_address1,
				"shipper_address2" => $shipper_address2, 
				"shipper_address3" => $shipper_address3,
				"shipper_city" => $shipper_city,
				"shipper_postcode" => $shipper_postcode,
				"shipper_state" => $shipper_state,
				"shipper_subhub" => $shipper_subhub,
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
				"receiver_subhub" => $receiver_subhub,
				"receiver_contact_person" => $receiver_contact_person,
				"receiver_phone_number" => $receiver_phone_number,
				"receiver_email" => $receiver_email,
				"pickup_required" => $pickup_required,
				"collection_date" => $collectionDate,
				"parcel_content" => $parcel_content,
				"value_of_content" => $value_of_content,
				"shipper_GST" => $shipper_GST, 
				"receiver_GST" => $receiver_GST, 
				"declared_value" => $declared_value,
				"currecy" => $currecy, 
				"commodity_code" => $commodity_code,
				"exemtion" => $exemtion,
				"itn" => $itn,
				"type_of_export" => $type_of_export,
				"destination_duties" => $destination_duties,
				"approved_account_number" => $approved_account_number,
		);
		
		$this->session->set_userdata('IntProductDetail', $saveData);
		
		
		redirect(base_url('int_product_detail'));
		
		
		
	}
	
	public function custom() {
		
		
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
			
	
		print_r($this->session->userdata['IntCustom1']);
		$this->data['title'] = "International Custom Cleaner Form";
		$this->data['weight'] = ($this->session->userdata['IntCustom1']['weight']);
		$this->data['height'] = ($this->session->userdata['IntCustom1']['height']);
		$this->data['width'] = ($this->session->userdata['IntCustom1']['width']);
		$this->data['length'] = ($this->session->userdata['IntCustom1']['length']);
		$this->data['v_weight'] = ($this->session->userdata['IntCustom1']['v_weight']);
		$this->data['fromState'] = ($this->session->userdata['IntCustom1']['fromState']);
		$this->data['toCountry'] = ($this->session->userdata['IntCustom1']['toCountry']);
		$this->data['cost'] = ($this->session->userdata['IntCustom1']['cost']);
		$this->data['type'] = ($this->session->userdata['IntCustom1']['type']);
		$this->data['fuelCharge'] = ($this->session->userdata['IntCustom1']['fuelCharge']);
		
		
		$this->data['shipper_company_name'] = ($this->session->userdata['IntCustom1']['shipper_company_name']);
		$this->data['shipper_country'] = ($this->session->userdata['IntCustom1']['shipper_country']);
		$this->data['shipper_address1'] = ($this->session->userdata['IntCustom1']['shipper_address1']);
		$this->data['shipper_address2'] = ($this->session->userdata['IntCustom1']['shipper_address2']);
		$this->data['shipper_address3'] = ($this->session->userdata['IntCustom1']['shipper_address3']);
		$this->data['shipper_city'] = ($this->session->userdata['IntCustom1']['shipper_city']);
		$this->data['shipper_postcode'] = ($this->session->userdata['IntCustom1']['shipper_postcode']);
		$this->data['shipper_state'] = ($this->session->userdata['IntCustom1']['shipper_state']);
		$this->data['shipper_subhub'] = ($this->session->userdata['IntCustom1']['shipper_subhub']);
		$this->data['shipper_contact_person'] = ($this->session->userdata['IntCustom1']['shipper_contact_person']);
		$this->data['shipper_phone_number'] = ($this->session->userdata['IntCustom1']['shipper_phone_number']);
		$this->data['shipper_email'] = ($this->session->userdata['IntCustom1']['shipper_email']);
		
		$this->data['receiver_company_name'] = ($this->session->userdata['IntCustom1']['receiver_company_name']);
		$this->data['receiver_country'] = ($this->session->userdata['IntCustom1']['receiver_country']);
		$this->data['receiver_address1'] = ($this->session->userdata['IntCustom1']['receiver_address1']);
		$this->data['receiver_address2'] = ($this->session->userdata['IntCustom1']['receiver_address2']);
		$this->data['receiver_address3'] = ($this->session->userdata['IntCustom1']['receiver_address3']);
		$this->data['receiver_city'] = ($this->session->userdata['IntCustom1']['receiver_city']);
		$this->data['receiver_postcode'] = ($this->session->userdata['IntCustom1']['receiver_postcode']);
		$this->data['receiver_state'] = ($this->session->userdata['IntCustom1']['receiver_state']);
		$this->data['receiver_subhub'] = ($this->session->userdata['IntCustom1']['receiver_subhub']);
		$this->data['receiver_contact_person'] = ($this->session->userdata['IntCustom1']['receiver_contact_person']);
		$this->data['receiver_phone_number'] = ($this->session->userdata['IntCustom1']['receiver_phone_number']);
		$this->data['receiver_email'] = ($this->session->userdata['IntCustom1']['receiver_email']);
		
		$this->data['pickup_required'] = ($this->session->userdata['IntCustom1']['pickup_required']);
		$this->data['parcel_content'] = ($this->session->userdata['IntCustom1']['parcel_content']);
		$this->data['value_of_content'] = ($this->session->userdata['IntCustom1']['value_of_content']);
		$this->data['collectionDate'] = ($this->session->userdata['IntCustom1']['collectionDate']);
		
		$this->load->view("international/header", $this->data);
		$this->load->view("international/ReceiverForm",$this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	public function customProcess() {
		print_r($this->session->userdata['IntShipment1']);
		
		$weight = $this->input->post("weight", true);
		$height = $this->input->post("height", true);
		$width = $this->input->post("width", true);
		$length = $this->input->post("length", true);
		$v_weight = $this->input->post("v_weight", true);
		$fromState = $this->input->post("fromState", true);
		$toCountry = $this->input->post("toCountry", true);
		$type = $this->input->post("type", true);
		$fuelCharge = $this->input->post("fuelCharge", true);
		$cost = $this->input->post("cost", true);
		$shipper_company_name = $this->input->post("shipper_company_name", true);
		$shipper_country = $this->input->post("shipper_country", true);
		$shipper_address1 = $this->input->post("shipper_address1", true);
		$shipper_address2 = $this->input->post("shipper_address2", true);
		$shipper_address3 = $this->input->post("shipper_address3", true);
		$shipper_city = $this->input->post("shipper_city", true);
		$shipper_postcode = $this->input->post("shipper_postcode", true);
		$shipper_state = $this->input->post("fromState", true);
		$shipper_subhub = $this->input->post("shipper_subhub", true);
		$shipper_contact_person = $this->input->post("shipper_contact_person", true);
		$shipper_phone_number = $this->input->post("shipper_phone_number", true);
		$shipper_email = $this->input->post("shipper_email", true);
		$receiver_company_name = $this->input->post("receiver_company_name", true);
		$receiver_country = $this->input->post("toCountry", true);
		$receiver_address1 = $this->input->post("receiver_address1", true);
		$receiver_address2 = $this->input->post("receiver_address2", true);
		$receiver_address3 = $this->input->post("receiver_address3", true);
		$receiver_city = $this->input->post("receiver_city", true);
		$receiver_postcode = $this->input->post("receiver_postcode", true);
		$receiver_state = $this->input->post("receiver_state", true);
		$receiver_subhub = $this->input->post("receiver_subhub", true);
		$receiver_contact_person = $this->input->post("receiver_contact_person", true);
		$receiver_phone_number = $this->input->post("receiver_phone_number", true);
		$receiver_email = $this->input->post("receiver_email", true);
		$pickup_required = $this->input->post("pickup_required", true);
		$parcel_content = $this->input->post("parcel_content", true);
		$value_of_content = $this->input->post("value_of_content", true);
		$collectionDate = $this->input->post("collectionDate", true);
		
		$saveData = array(
				"weight" => $weight, 
				"height" => $height, 
				"width" => $width,
				"length" => $length, 
				"v_weight" => $v_weight, 
				"fromState" => $fromState, 
				"toCountry" => $toCountry,
				"cost" => $cost,
				"type" => $type,
				"fuelCharge" => $fuelCharge, 
				"shipper_company_name" => $shipper_company_name,
				"shipper_country" => $shipper_country,
				"shipper_address1" => $shipper_address1,
				"shipper_address2" => $shipper_address2, 
				"shipper_address3" => $shipper_address3,
				"shipper_city" => $shipper_city,
				"shipper_postcode" => $shipper_postcode,
				"shipper_state" => $shipper_state,
				"shipper_subhub" => $shipper_subhub,
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
				"receiver_subhub" => $receiver_subhub,
				"receiver_contact_person" => $receiver_contact_person,
				"receiver_phone_number" => $receiver_phone_number,
				"receiver_email" => $receiver_email,
				"pickup_required" => $pickup_required,
				"parcel_content" => $parcel_content,
				"value_of_content" => $value_of_content,
				"collectionDate" => $collectionDate,
		);
		
		$this->session->set_userdata('IntCustom1', $saveData);
		
		
		redirect(base_url('int_custom'));
		
	}
	
	public function toIntPaymentProcess() {
		$weight = $this->input->post("weight", true);
		$height = $this->input->post("height", true);
		$width = $this->input->post("width", true);
		$length = $this->input->post("length", true);
		$v_weight = $this->input->post("v_weight", true);
		$fromState = $this->input->post("fromState", true);
		$toCountry = $this->input->post("toCountry", true);
		$cost = $this->input->post("cost", true);
		$type = $this->input->post("type", true);
		$fuelCharge = $this->input->post("fuelCharge", true);
		
		$shipper_account_number = $this->input->post("shipper_account_number", true);
		$shipper_account_name = $this->input->post("shipper_account_name", true);
		$shipper_company_name = $this->input->post("shipper_company_name", true);
		$shipper_country = $this->input->post("shipper_country", true);
		$shipper_address1 = $this->input->post("shipper_address1", true);
		$shipper_address2 = $this->input->post("shipper_address2", true);
		$shipper_address3 = $this->input->post("shipper_address3", true);
		$shipper_city = $this->input->post("shipper_city", true);
		$shipper_postcode = $this->input->post("shipper_postcode", true);
		$shipper_state = $this->input->post("shipper_state", true);
		$shipper_subhub = $this->input->post("shipper_subhub", true);
		$shipper_contact_person = $this->input->post("shipper_contact_person", true);
		$shipper_phone_number = $this->input->post("shipper_phone_number", true);
		$shipper_email = $this->input->post("shipper_email", true);
		
		$receiver_account_number = $this->input->post("receiver_account_number", true);
		$receiver_account_name = $this->input->post("receiver_account_name", true);
		$receiver_company_name = $this->input->post("receiver_company_name", true);
		$receiver_country = $this->input->post("receiver_country", true);
		$receiver_address1 = $this->input->post("receiver_address1", true);
		$receiver_address2 = $this->input->post("receiver_address2", true);
		$receiver_address3 = $this->input->post("receiver_address3", true);
		$receiver_city = $this->input->post("receiver_city", true);
		$receiver_postcode = $this->input->post("receiver_postcode", true);
		$receiver_state = $this->input->post("receiver_state", true);
		$receiver_subhub = $this->input->post("receiver_subhub", true);
		$receiver_contact_person = $this->input->post("receiver_contact_person", true);
		$receiver_phone_number = $this->input->post("receiver_phone_number", true);
		$receiver_email = $this->input->post("receiver_email", true);
		
		$pickup_required = $this->input->post("pickup_required", true);
		$parcel_content = $this->input->post("parcel_content", true);
		$value_of_content = $this->input->post("value_of_content", true);
		
		$shipper_GST = $this->input->post("shipper_GST", true);
		$receiver_GST = $this->input->post("receiver_GST", true);
		$declared_value = $this->input->post("declared_value", true);
		$currecy = $this->input->post("currecy", true);
		$commodity_code = $this->input->post("commodity_code", true);
		$exemtion = $this->input->post("exemtion", true);
		$itn = $this->input->post("itn", true);
		$type_of_export = $this->input->post("type_of_export", true);
		$destination_duties = $this->input->post("destination_duties", true);
		$approved_account_number = $this->input->post("approved_account_number", true);
		
		$saveData = array(
				"weight" => $weight, 
				"height" => $height, 
				"width" => $width,
				"length" => $length, 
				"v_weight" => $v_weight, 
				"fromState" => $fromState, 
				"toCountry" => $toCountry,
				"cost" => $cost,
				"type" => $type,
				"fuelCharge" => $fuelCharge, 
				"shipper_company_name" => $shipper_company_name,
				"shipper_country" => $shipper_country,
				"shipper_address1" => $shipper_address1,
				"shipper_address2" => $shipper_address2, 
				"shipper_address3" => $shipper_address3,
				"shipper_city" => $shipper_city,
				"shipper_postcode" => $shipper_postcode,
				"shipper_state" => $shipper_state,
				"shipper_subhub" => $shipper_subhub,
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
				"receiver_subhub" => $receiver_subhub,
				"receiver_contact_person" => $receiver_contact_person,
				"receiver_phone_number" => $receiver_phone_number,
				"receiver_email" => $receiver_email,
				"pickup_required" => $pickup_required,
				"parcel_content" => $parcel_content,
				"value_of_content" => $value_of_content,
				"shipper_GST" => $shipper_GST, 
				"receiver_GST" => $receiver_GST, 
				"declared_value" => $declared_value,
				"currecy" => $currecy, 
				"commodity_code" => $commodity_code,
				"exemtion" => $exemtion,
				"itn" => $itn,
				"type_of_export" => $type_of_export,
				"destination_duties" => $destination_duties,
				"approved_account_number" => $approved_account_number,
		);
		
		$this->session->set_userdata('ToIntPayment', $saveData);
		
		
		redirect(base_url('to_int_payment'));
		
	}
	
	public function toIntPayment() {
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
		
		print_r($this->session->userdata['IntProductDetail']);
		$this->data['weight'] = ($this->session->userdata['ToIntPayment']['weight']);
		$this->data['height'] = ($this->session->userdata['ToIntPayment']['height']);
		$this->data['width'] = ($this->session->userdata['ToIntPayment']['width']);
		$this->data['length'] = ($this->session->userdata['ToIntPayment']['length']);
		$this->data['v_weight'] = ($this->session->userdata['ToIntPayment']['v_weight']);
		$this->data['fromState'] = ($this->session->userdata['ToIntPayment']['fromState']);
		$this->data['toCountry'] = ($this->session->userdata['ToIntPayment']['toCountry']);
		$this->data['cost'] = ($this->session->userdata['ToIntPayment']['cost']);
		$this->data['type'] = ($this->session->userdata['ToIntPayment']['type']);
		$this->data['fuelCharge'] = ($this->session->userdata['ToIntPayment']['fuelCharge']);
		
		$this->data['shipper_company_name'] = ($this->session->userdata['ToIntPayment']['shipper_company_name']);
		$this->data['shipper_country'] = ($this->session->userdata['ToIntPayment']['shipper_country']);
		$this->data['shipper_address1'] = ($this->session->userdata['ToIntPayment']['shipper_address1']);
		$this->data['shipper_address2'] = ($this->session->userdata['ToIntPayment']['shipper_address2']);
		$this->data['shipper_address3'] = ($this->session->userdata['ToIntPayment']['shipper_address3']);
		$this->data['shipper_city'] = ($this->session->userdata['ToIntPayment']['shipper_city']);
		$this->data['shipper_postcode'] = ($this->session->userdata['ToIntPayment']['shipper_postcode']);
		$this->data['shipper_state'] = ($this->session->userdata['ToIntPayment']['shipper_state']);
		$this->data['shipper_subhub'] = ($this->session->userdata['ToIntPayment']['shipper_subhub']);
		$this->data['shipper_contact_person'] = ($this->session->userdata['ToIntPayment']['shipper_contact_person']);
		$this->data['shipper_phone_number'] = ($this->session->userdata['ToIntPayment']['shipper_phone_number']);
		$this->data['shipper_email'] = ($this->session->userdata['ToIntPayment']['shipper_email']);
		
		
		$this->data['receiver_company_name'] = ($this->session->userdata['ToIntPayment']['receiver_company_name']);
		$this->data['receiver_country'] = ($this->session->userdata['ToIntPayment']['receiver_country']);
		$this->data['receiver_address1'] = ($this->session->userdata['ToIntPayment']['receiver_address1']);
		$this->data['receiver_address2'] = ($this->session->userdata['ToIntPayment']['receiver_address2']);
		$this->data['receiver_address3'] = ($this->session->userdata['ToIntPayment']['receiver_address3']);
		$this->data['receiver_city'] = ($this->session->userdata['ToIntPayment']['receiver_city']);
		$this->data['receiver_postcode'] = ($this->session->userdata['ToIntPayment']['receiver_postcode']);
		$this->data['receiver_state'] = ($this->session->userdata['ToIntPayment']['receiver_state']);
		$this->data['receiver_subhub'] = ($this->session->userdata['ToIntPayment']['receiver_subhub']);
		$this->data['receiver_contact_person'] = ($this->session->userdata['ToIntPayment']['receiver_contact_person']);
		$this->data['receiver_phone_number'] = ($this->session->userdata['ToIntPayment']['receiver_phone_number']);
		$this->data['receiver_email'] = ($this->session->userdata['ToIntPayment']['receiver_email']);
		
		$this->data['pickup_required'] = ($this->session->userdata['ToIntPayment']['weight']);
		$this->data['parcel_content'] = ($this->session->userdata['ToIntPayment']['weight']);
		$this->data['value_of_content'] = ($this->session->userdata['ToIntPayment']['weight']);
		
		$this->data['shipper_GST'] = ($this->session->userdata['ToIntPayment']['shipper_GST']);
		$this->data['receiver_GST'] = ($this->session->userdata['ToIntPayment']['receiver_GST']);
		$this->data['declared_value'] = ($this->session->userdata['ToIntPayment']['declared_value']);
		$this->data['currecy'] = ($this->session->userdata['ToIntPayment']['weight']);
		$this->data['commodity_code'] = ($this->session->userdata['ToIntPayment']['commodity_code']);
		$this->data['exemtion'] = ($this->session->userdata['ToIntPayment']['exemtion']);
		$this->data['itn'] = ($this->session->userdata['ToIntPayment']['itn']);
		$this->data['type_of_export'] = ($this->session->userdata['ToIntPayment']['type_of_export']);
		$this->data['destination_duties'] = ($this->session->userdata['ToIntPayment']['destination_duties']);
		$this->data['approved_account_number'] = ($this->session->userdata['ToIntPayment']['approved_account_number']);
		
		$this->load->view("international/header", $this->data);
		$this->load->view("international/AgreeForm", $this->data);
		$this->load->view("frontEnd/footer3");
		
	}
	
	public function fuel_charge_update() {
		//$description = $this->input->post("description", true);
		$value = $this->input->post("fuelChargeValue", true);
		$whereArray = array(
						"id" => 1,
						"description" => "Fuel Charge",
						);
		$updateArray = array(
						"value" => $value,
						"modified_date" => date("Y-m-d H:i:s"),
						);
		$this->Config_Model->update($whereArray, $updateArray);
		echo("pass");
	}
	
	
	public function internatinal_price($zone) {
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		$this->data['zone'] = $zone;
		$this->data['title'] = "International Price-"." ".$zone;
		$documentPriceList = $this->International_Price_Model->get(array(
				'zone' => $zone,
				'type' => 'documents',
				'is_deleted' => 0,
			));
		$nonDocumentPriceList = $this->International_Price_Model->get(array(
				'zone' => $zone,
				'type' => 'nonDocuments',
				'is_deleted' => 0,
			));
		$this->data['documentPriceList'] = $documentPriceList;
		$this->data['nonDocumentPriceList'] = $nonDocumentPriceList;
		$this->load->view("admin/header", $this->data);
		$this->load->view("admin/priceList", $this->data);
		$this->load->view("admin/footer");
		
		
	}
	
	public function international_price_update() {
		//$tagName= 'price'.$id;
		$id = $this->input->post("id", true);
		$price = $this->input->post("price", true);
		$whereArray = array(
						"id" => $id,
						);
		$updateArray = array(
						"price" => $price,
						"modified_date" => date("Y-m-d H:i:s"),
						);
		$this->International_Price_Model->update($whereArray, $updateArray);
		//redirect(base_url('internatinal/internatinal_price/').$zone);
		
		echo("pass");
	}
	
	public function bulk_internatinal_price_update() {
		//$tagName= 'price'.$id;
		$id = $this->input->post("id", true);
		$price = $this->input->post("price", true);
		
		
		
		for ($i = 0; $i < sizeof($id); $i++) {
			$whereArray = array(
							"id" => $id[$i],
							);
			$updateArray = array(
							"price" => $price[$i],
							"modified_date" => date("Y-m-d H:i:s"),
							);
							
			$this->International_Price_Model->update($whereArray, $updateArray);
		}
		
		//redirect(base_url('domestic/domestic_price/').$zone);
		
		echo("pass");
	}
	
	public function search_shipment_price() {
			$category = $this->input->post("category", true);
			$value = $this->input->post("search", true);
			$zone = $this->input->post("zone", true);
			$type = $this->input->post("type", true);
			
			$priceList = $this->International_Price_Model->search(array(
				'is_deleted' => 0,
				'zone' => $zone,
				'type' => $type,
			),array(
				$category => $value,
			));
			if (!empty($priceList)) {
				foreach ($priceList as $v) {
					
					
					$json[] = array(
					'c1' => $category,
					'va' => $value,
					'id' => $v['id'],
					'zone' => $v['zone'],
					'type' => $v['type'],
					'weight_category' => $v['weight_category'],
					'max_weight' => $v['max_weight'],
					'min_weight' => $v['min_weight'],
					'price' => $v['price'],
					);
					
				}
				
			} else {
				$json[] = array(
					'result' => 'empty',
				);
			
			} 
			echo json_encode($json);
			
		}
		
	public function custom_detail() {
		$id = $this->input->post("id", true);
		$clearance_detail = $this->Custom_Clearance_Model->getOne(array(
			'shipment_id' => $id,
		
		));
		
		if (!empty($clearance_detail)) {
			//$json[] = $clearance_detail;
		
				//$json[] = $v;
				$json = array(
					'id' => $clearance_detail['id'],
					'shipment_id' => $clearance_detail['shipment_id'],
					'shippers_vat_gst' => $clearance_detail['shippers_vat_gst'],
					'receivers_vat_gst' => $clearance_detail['receivers_vat_gst'],
					'declared_value' => $clearance_detail['declared_value'],
					'declared_value_currency' => $clearance_detail['declared_value_currency'],
					'harmonised_commodity_code' => $clearance_detail['harmonised_commodity_code'],
					'exemtion' => $clearance_detail['exemtion'],
					'type_of_export' => $clearance_detail['type_of_export'],
					'itn' => $clearance_detail['itn'],
					'destination_duties_taxes' => $clearance_detail['destination_duties_taxes'],
					
				); 
			
			
		} else {
			$json[] = array(
					'result' => 'empty',
				);
		}
		echo json_encode($json);
	}
	
}
	
	

?>
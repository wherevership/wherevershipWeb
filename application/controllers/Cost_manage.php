<?php
class Cost_manage extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Shipment_Cost_Model');
		$this->load->model('Country_Model');
	}
	
	
	public function test_get() {
		$dataList = $this->Country_Model->get(array(
			'is_deleted' => 0,
		));
		$dataList1 = $this->Shipment_Cost_Model->get(array(
			'is_deleted' => 0,
		));
		
		print_r($dataList);
		print_r($dataList1);

	}
	
	public function test_getC() {
		$dataList = $this->Country_Model->get(array(
			'is_deleted' => 0,
		));
		
		print_r($dataList);

	}
	
	public function test_getOne() {
		$test1 = $this->Country_Model->getOne(array(
			'country_code' => 'SG',
		));
		//cat_Weight(1.0);
		$weight_group = $this->cat_Weight(1.05);
		$test2 = $this->Shipment_Cost_Model->getOne(array(
			'weight_category' => $weight_group,
			'zoning_id' => $test1['zoning_id'],
		));
		echo $test2['cost'];
	}
	
	public function international_quote() {
		$formStateCode = $this->input->post("c", true);
		$ToCountryCode = $this->input->post("d", true);
		$weight = $this->input->post("w", true);
		$height = $this->input->post("h", true);
		$width = $this->input->post("wi", true);
		$length = $this->input->post("l", true);
		
		$countryData = $this->Country_Model->getOne(array(
			'country_code' => $ToCountryCode,
		));
		//cat_Weight(1.0);
		
		$final_weight = $this->compareWeight($weight , $height , $width, $length);
		$weight_group = $this->cat_Weight($final_weight);
		$shipmentCostData = $this->Shipment_Cost_Model->getOne(array(
			'weight_category' => $weight_group,
			'zoning_id' => $countryData['zoing_id'],
		));
		
		$data = array();
		$data['from'] = $formStateCode;
		$data['to'] = $ToCountryCode;
		$data['weight'] = $weight;
		$data['height'] = $height;
		$data['width'] = $width;
		$data['length'] = $length;
		$data['final weight'] = $final_weight;
		$data['weight group']  = $weight_group;
		$data['cost'] = $shipmentCostData['cost'];
		
		$this->load->view("frontEnd/header");
		$this->load->view("frontEnd/international_cost_result", $data);
		$this->load->view("frontEnd/footer");
	}
	
	function compareWeight($weight, $height, $width, $length) {
		$volumetricWeight = ($length * $width * $height) / 5000;
		if ($weight > $volumetricWeight) {
			return $weight; 
		} else {
			return $volumetricWeight;
		}
	}
	
	function cat_Weight($weight) {
		if ($weight > 0 && $weight <= 0.5) {
			return "cat1" ;
		}
		else if (($weight > 0.5 && $weight <= 1.0)) {
			return "cat2" ;
		}
		else if (($weight > 1.0 && $weight <= 1.5)) {
			return "cat3" ;
		}
		else if (($weight > 1.5 && $weight <= 2.0)) {
			return "cat4" ;
		}
		else if (($weight > 2.5 && $weight <= 3.0)) {
			return "cat5" ;
		}
		else if (($weight > 3.0 && $weight <= 3.5)) {
			return "cat6" ;
		}
		else if (($weight > 3.5 && $weight <= 4.0)) {
			return "cat7" ;
		}
		else if (($weight > 4.0 && $weight <= 4.5)) {
			return "cat8" ;
		}
		else if (($weight > 4.5 && $weight <= 5.0)) {
			return "cat9" ;
		}
		else if (($weight > 5.0 && $weight <= 5.5)) {
			return "cat10" ;
		}
		else if (($weight > 5.5 && $weight <= 6.0)) {
			return "cat11" ;
		}
		else if (($weight > 6.0 && $weight <= 6.5)) {
			return "cat12" ;
		}
		else if (($weight > 6.5 && $weight <= 7.0)) {
			return "cat13" ;
		}
		else if (($weight > 7.0 && $weight <= 7.5)) {
			return "cat14" ;
		}
		else if (($weight > 7.5 && $weight <= 8.0)) {
			return "cat15" ;
		}
		else if (($weight > 8.0 && $weight <= 8.5)) {
			return "cat16" ;
		}
		else if (($weight > 8.5 && $weight <= 9.0)) {
			return "cat17" ;
		}
		else if (($weight > 9.0 && $weight <= 9.5)) {
			return "cat18" ;
		}
		else if (($weight > 9.5 && $weight <= 10.0)) {
			return "cat19" ;
		}
		else if (($weight > 10.0 && $weight <= 10.5)) {
			return "cat20" ;
		}
		else if (($weight > 10.5 && $weight <= 11.0)) {
			return "cat21" ;
		}
		else if (($weight > 11.0 && $weight <= 11.5)) {
			return "cat22" ;
		}
		else if (($weight > 11.5 && $weight <= 12.0)) {
			return "cat23" ;
		}
		else if (($weight > 12.0 && $weight <= 12.5)) {
			return "cat24" ;
		}
		else if (($weight > 12.5 && $weight <= 13.0)) {
			return "cat25" ;
		}
		else if (($weight > 13.0 && $weight <= 13.5)) {
			return "cat26" ;
		}
		else if (($weight > 13.5 && $weight <= 14.0)) {
			return "cat27" ;
		}
		else if (($weight > 14.0 && $weight <= 14.5)) {
			return "cat28" ;
		}
		else if (($weight > 14.5 && $weight <= 15.0)) {
			return "cat29" ;
		}
		else if (($weight > 15.0 && $weight <= 15.5)) {
			return "cat30" ;
		}
		else if (($weight > 15.5 && $weight <= 16.0)) {
			return "cat31" ;
		}
		else if (($weight > 16.0 && $weight <= 16.5)) {
			return "cat32" ;
		}
		else if (($weight > 16.5 && $weight <= 17.0)) {
			return "cat33" ;
		}
		else if (($weight > 17.0 && $weight <= 17.5)) {
			return "cat34" ;
		}
		else if (($weight > 17.5 && $weight <= 18.0)) {
			return "cat35" ;
		}
		else if (($weight > 18.0 && $weight <= 18.5)) {
			return "cat36" ;
		}
		else if (($weight > 18.5 && $weight <= 19.0)) {
			return "cat37" ;
		}
		else if (($weight > 19.0 && $weight <= 19.5)) {
			return "cat38" ;
		}
		else if (($weight > 19.5 && $weight <= 20.0)) {
			return "cat39" ;
		}
		else if (($weight > 20.0 && $weight <= 20.5)) {
			return "cat40" ;
		}
		else if (($weight > 20.5 && $weight <= 21.0)) {
			return "cat41" ;
		}
		else if (($weight > 21.0 && $weight <= 21.5)) {
			return "cat42" ;
		}
		else if (($weight > 21.5 && $weight <= 22.0)) {
			return "cat43" ;
		}
		else {
			return "catX" ;
		}
		
	
	}
	
	
	
	
	
	
}
?>




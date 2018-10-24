<?php
class Price_api_manage extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Config_Model');
		$this->load->model('International_Price_Model');
		$this->load->model('Domestic_Price_Model');
		
	}
	
	
	public function domestic_price($zone,$weightCat) {
		$price = $this->Domestic_Price_Model->getOne(array(
				'zone' => $zone,
				'weight_category' => $weightCat,
				'is_deleted' => 0,
			));
		
		
		
		if (!empty($price)) {
			echo($price['price']);
		} else {
			echo('empty');
		}
		
	}
	
	
	public function int_price($zone,$weightCat) {
		$priceList = $this->International_Price_Model->get(array(
				'zone' => $zone,
				'weight_category' => $weightCat,
				'is_deleted' => 0,
			));
			
		
			
			
		$json = array();
		if (!empty($priceList)) {
			foreach($priceList as $v) {
				$json[] = array(
					'id' => $v['id'],
					'zone' => $v['zone'],
					'type' => $v['type'],
					'weight_category' => $v['weight_category'],
					'max_weight' => $v['max_weight'],
					'min_weight' => $v['min_weight'],
					'price' => $v['price'],
				
				);
			}
		} 
		
		echo json_encode($json);
	
	}
	
	
	
	
	
	
}




?>
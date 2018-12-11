<?php
	class Credit_api_manage extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Credit_History_Model');
		}
		
		public function creditSearchByDate() {
			$dateFrom = $this->input->post("dateFrom", true);
			$dateTo = $this->input->post("dateTo", true);
		
			$shipment = $this->Credit_History_Model->get(array(
				'is_deleted' => 0,
				'created_date >=' => $dateFrom,
				'created_date <=' => $dateTo,
			));
			if (!empty($shipment)) {
				foreach ($shipment as $v) {
					
					
					$json[] = array(
					
						'id' => $v['id'],
						'description' => $v['description'],
						'amount' => $v['amount'],
						'amount_type' => $v['amount_type'],
						'user_id' => $v['user_id'],
						'created_date' => $v['created_date'],
						'modified_date' => $v['modified_date'],
						
					);
					
				}
				
			} else {
				$json[] = array(
					'result' => 'empty',
				);
			
			} 
			echo json_encode($json);
			
			
		}
	}


?>
<?php 
	class Shipment_api_manage extends CI_Controller {
		public function __construct() {
			parent::__construct();
			
			$this->load->model('Shipment_Model');
			$this->load->model('User_Model');
		}
		
		
		public function shipmentDetail($id) {
			
			$shipment = $this->Shipment_Model->getOne(array(
				'id' => $id,
				
			));
			
			//echo($id);
			//print_r($shipment);
			//$json = array();
			//print_r($admin);
			
			if(!empty($shipment)) {
				$userid = $shipment['userid'];
				$user = $this->User_Model->getOne(array(
					'id' => $userid,
				));
				
				
				$json = array(	
					'id' => $shipment['id'],
					'shipper_company_name' => $shipment['shipper_company_name'],
					'shipper_address' => $shipment['shipper_address'],
					'shipper_city' => $shipment['shipper_city'],
					'shipper_postcode' => $shipment['shipper_postcode'],
					'shipper_state' => $shipment['shipper_state'],
					'shipper_country' => $shipment['shipper_country'],
					'shipper_contact_person' => $shipment['shipper_contact_person'],
					'shipper_phone_number' => $shipment['shipper_phone_number'],
					'shipper_email' => $shipment['shipper_email'],
					'recevier_company_name' => $shipment['recevier_company_name'],
					'recevier_address' => $shipment['recevier_address'],
					'recevier_city' => $shipment['receiver_city'],
					'recevier_postcode' => $shipment['recevier_postcode'],
					'recevier_state' => $shipment['receiver_state'],
					'recevier_country' => $shipment['receiver_country'],
					'recevier_contact_person' => $shipment['receiver_contact_person'],
					'recevier_phone_number' => $shipment['receiver_phone_number'],
					'recevier_email' => $shipment['receiver_email'],
					'weight' => $shipment['weight'],
					'length' => $shipment['length'],
					'width' => $shipment['width'],
					'height' => $shipment['height'],
					'volumentric_weight' => $shipment['volumetric_weight'],
					'price' => $shipment['price'],
					'parcel_content' => $shipment['parcel_content'],
					'value_of_content' => $shipment['value_of_content'],
					'pickup_required' => $shipment['pickup_required'],
					'tracking_number' => $shipment['tracking_number'],
					'status' => $shipment['status'],
					'collection_date' => $shipment['collection_date'],
					'user_name' => $user['firstname']." ".$user['lastname'],
					'userid' => $userid,
					);
					
				
			}
				
			echo json_encode($json);	
				
						
		}
		
		
		public function search_shipment($class) {
			$category = $this->input->post("category", true);
			$value = $this->input->post("search", true);
		
			if ($class == "do") {
				$type = "Domestic";
			} else {
				$type = "International"; 
			}
			
			$shipment = $this->Shipment_Model->search(array(
				'is_deleted' => 0,
				'type' => $type,
			),array(
				$category => $value,
			));
			if (!empty($shipment)) {
				foreach ($shipment as $v) {
					
					$userid = $v['userid'];
					$user = $this->User_Model->getOne(array(
						'id' => $userid,
					));
					$json[] = array(
					'c1' => $category,
					'va' => $value,
					'id' => $v['id'],
					'shipper_company_name' => $v['shipper_company_name'],
					'shipper_address' => $v['shipper_address'],
					'shipper_city' => $v['shipper_city'],
					'shipper_postcode' => $v['shipper_postcode'],
					'shipper_state' => $v['shipper_state'],
					'shipper_country' => $v['shipper_country'],
					'shipper_contact_person' => $v['shipper_contact_person'],
					'shipper_phone_number' => $v['shipper_phone_number'],
					'shipper_email' => $v['shipper_email'],
					'recevier_company_name' => $v['recevier_company_name'],
					'recevier_address' => $v['recevier_address'],
					'recevier_city' => $v['receiver_city'],
					'recevier_postcode' => $v['recevier_postcode'],
					'recevier_state' => $v['receiver_state'],
					'recevier_country' => $v['receiver_country'],
					'recevier_contact_person' => $v['receiver_contact_person'],
					'recevier_phone_number' => $v['receiver_phone_number'],
					'recevier_email' => $v['receiver_email'],
					'weight' => $v['weight'],
					'length' => $v['length'],
					'width' => $v['width'],
					'height' => $v['height'],
					'volumentric_weight' => $v['volumetric_weight'],
					'price' => $v['price'],
					'parcel_content' => $v['parcel_content'],
					'value_of_content' => $v['value_of_content'],
					'pickup_required' => $v['pickup_required'],
					'tracking_number' => $v['tracking_number'],
					'status' => $v['status'],
					'collection_date' => $v['collection_date'],
					'user_name' => $user['firstname']." ".$user['lastname'],
					'userid' => $userid,
					);
					
				}
				
			} else {
				$json[] = array(
					'result' => 'empty',
				);
			
			} 
			echo json_encode($json);
			
		}
		
		
		public function search_shipment_by_date($class) {
			
			$dateFrom = $this->input->post("dateFrom", true);
			$dateTo = $this->input->post("dateTo", true);
		
			if ($class == "do") {
				$type = "Domestic";
			} else {
				$type = "International"; 
			}
			
			$shipment = $this->Shipment_Model->get(array(
				'is_deleted' => 0,
				'type' => $type,
				'collection_date >=' => $dateFrom,
				'collection_date <=' => $dateTo,
			));
			if (!empty($shipment)) {
				foreach ($shipment as $v) {
					
					$userid = $v['userid'];
					$user = $this->User_Model->getOne(array(
						'id' => $userid,
					));
					$json[] = array(
					'c1' => $dateFrom,
					'va' => $dateTo,
					'id' => $v['id'],
					'shipper_company_name' => $v['shipper_company_name'],
					'shipper_address' => $v['shipper_address'],
					'shipper_city' => $v['shipper_city'],
					'shipper_postcode' => $v['shipper_postcode'],
					'shipper_state' => $v['shipper_state'],
					'shipper_country' => $v['shipper_country'],
					'shipper_contact_person' => $v['shipper_contact_person'],
					'shipper_phone_number' => $v['shipper_phone_number'],
					'shipper_email' => $v['shipper_email'],
					'recevier_company_name' => $v['recevier_company_name'],
					'recevier_address' => $v['recevier_address'],
					'recevier_city' => $v['receiver_city'],
					'recevier_postcode' => $v['recevier_postcode'],
					'recevier_state' => $v['receiver_state'],
					'recevier_country' => $v['receiver_country'],
					'recevier_contact_person' => $v['receiver_contact_person'],
					'recevier_phone_number' => $v['receiver_phone_number'],
					'recevier_email' => $v['receiver_email'],
					'weight' => $v['weight'],
					'length' => $v['length'],
					'width' => $v['width'],
					'height' => $v['height'],
					'volumentric_weight' => $v['volumetric_weight'],
					'price' => $v['price'],
					'parcel_content' => $v['parcel_content'],
					'value_of_content' => $v['value_of_content'],
					'pickup_required' => $v['pickup_required'],
					'tracking_number' => $v['tracking_number'],
					'status' => $v['status'],
					'collection_date' => $v['collection_date'],
					'user_name' => $user['firstname']." ".$user['lastname'],
					'userid' => $userid,
					);
					
				}
				
			} else {
				$json[] = array(
					'result' => 'empty',
				);
			
			} 
			echo json_encode($json);
			
			
		}
		
		public function member_search_shipment($class) {
			$category = $this->input->post("category", true);
			$value = $this->input->post("search", true);
			$userid = $this->input->post("userid", true);
		
			if ($class == "do") {
				$type = "Domestic";
			} else {
				$type = "International"; 
			}
			
			$shipment = $this->Shipment_Model->search(array(
				'is_deleted' => 0,
				'type' => $type,
				'userid' => $userid,
			),array(
				$category => $value,
			));
			if (!empty($shipment)) {
				foreach ($shipment as $v) {
					
					$userid = $v['userid'];
					$user = $this->User_Model->getOne(array(
						'id' => $userid,
					));
					$json[] = array(
					'c1' => $category,
					'va' => $value,
					'id' => $v['id'],
					'shipper_company_name' => $v['shipper_company_name'],
					'shipper_address' => $v['shipper_address'],
					'shipper_city' => $v['shipper_city'],
					'shipper_postcode' => $v['shipper_postcode'],
					'shipper_state' => $v['shipper_state'],
					'shipper_country' => $v['shipper_country'],
					'shipper_contact_person' => $v['shipper_contact_person'],
					'shipper_phone_number' => $v['shipper_phone_number'],
					'shipper_email' => $v['shipper_email'],
					'recevier_company_name' => $v['recevier_company_name'],
					'recevier_address' => $v['recevier_address'],
					'recevier_city' => $v['receiver_city'],
					'recevier_postcode' => $v['recevier_postcode'],
					'recevier_state' => $v['receiver_state'],
					'recevier_country' => $v['receiver_country'],
					'recevier_contact_person' => $v['receiver_contact_person'],
					'recevier_phone_number' => $v['receiver_phone_number'],
					'recevier_email' => $v['receiver_email'],
					'weight' => $v['weight'],
					'length' => $v['length'],
					'width' => $v['width'],
					'height' => $v['height'],
					'volumentric_weight' => $v['volumetric_weight'],
					'price' => $v['price'],
					'parcel_content' => $v['parcel_content'],
					'value_of_content' => $v['value_of_content'],
					'pickup_required' => $v['pickup_required'],
					'tracking_number' => $v['tracking_number'],
					'status' => $v['status'],
					'collection_date' => $v['collection_date'],
					'user_name' => $user['firstname']." ".$user['lastname'],
					'userid' => $userid,
					);
					
				}
				
			} else {
				$json[] = array(
					'result' => 'empty',
				);
			
			} 
			echo json_encode($json);
			
		}
		
		
		public function member_search_shipment_by_date($class) {
			
			$dateFrom = $this->input->post("dateFrom", true);
			$dateTo = $this->input->post("dateTo", true);
			$userid = $this->input->post("userid", true);
		
			if ($class == "do") {
				$type = "Domestic";
			} else {
				$type = "International"; 
			}
			
			$shipment = $this->Shipment_Model->get(array(
				'is_deleted' => 0,
				'type' => $type,
				'collection_date >=' => $dateFrom,
				'collection_date <=' => $dateTo,
				'userid' => $userid
			));
			if (!empty($shipment)) {
				foreach ($shipment as $v) {
					
					$userid = $v['userid'];
					$user = $this->User_Model->getOne(array(
						'id' => $userid,
					));
					$json[] = array(
					'c1' => $dateFrom,
					'va' => $dateTo,
					'id' => $v['id'],
					'shipper_company_name' => $v['shipper_company_name'],
					'shipper_address' => $v['shipper_address'],
					'shipper_city' => $v['shipper_city'],
					'shipper_postcode' => $v['shipper_postcode'],
					'shipper_state' => $v['shipper_state'],
					'shipper_country' => $v['shipper_country'],
					'shipper_contact_person' => $v['shipper_contact_person'],
					'shipper_phone_number' => $v['shipper_phone_number'],
					'shipper_email' => $v['shipper_email'],
					'recevier_company_name' => $v['recevier_company_name'],
					'recevier_address' => $v['recevier_address'],
					'recevier_city' => $v['receiver_city'],
					'recevier_postcode' => $v['recevier_postcode'],
					'recevier_state' => $v['receiver_state'],
					'recevier_country' => $v['receiver_country'],
					'recevier_contact_person' => $v['receiver_contact_person'],
					'recevier_phone_number' => $v['receiver_phone_number'],
					'recevier_email' => $v['receiver_email'],
					'weight' => $v['weight'],
					'length' => $v['length'],
					'width' => $v['width'],
					'height' => $v['height'],
					'volumentric_weight' => $v['volumetric_weight'],
					'price' => $v['price'],
					'parcel_content' => $v['parcel_content'],
					'value_of_content' => $v['value_of_content'],
					'pickup_required' => $v['pickup_required'],
					'tracking_number' => $v['tracking_number'],
					'status' => $v['status'],
					'collection_date' => $v['collection_date'],
					'user_name' => $user['firstname']." ".$user['lastname'],
					'userid' => $userid,
					);
					
				}
				
			} else {
				$json[] = array(
					'result' => 'empty',
				);
			
			} 
			echo json_encode($json);
			
			
		}
	
		Public function updateStatus(){
			$id = $this->input->post("id", true);
			$status = $this->input->post("status",true);
			
			$this->Shipment_Model->update(array(
			'id' => $id,
			
			), array(
			 'status' => $status,
			 'modified_date' => date("Y-m-d H:i:S"),
			));
		
			$json[] = array(
				'id' => $id,
				'status' => $status,
				'sysStatus' => 'pass',
			);
			
			echo json_encode($json);
			
			
		}
		
		Public function updateDomesticStatus(){
			$id = $this->input->post("id", true);
			$status = $this->input->post("status",true);
			
			$this->Shipment_Model->update(array(
			'id' => $id,
			
			), array(
			 'status' => $status,
			 'modified_date' => date("Y-m-d H:i:S"),
			));
		
			$json[] = array(
				'id' => $id,
				'status' => $status,
				'sysStatus' => 'pass',
			);
			
			echo json_encode($json);
			
			
		}
		
		Public function bulkUpdateStatus() {
		$id = $this->input->post("id", true);
		$status = $this->input->post("status",true);
		
		for ($i = 0; $i < sizeof($id); $i++) {
			$this->Shipment_Model->update(array(
			'id' => $id[$i],
			
			), array(
			 'status' => $status,
			 'modified_date' => date("Y-m-d H:i:S"),
			));
		}
		
		echo("Pass");
		
		}
		
		
	}
	
?>




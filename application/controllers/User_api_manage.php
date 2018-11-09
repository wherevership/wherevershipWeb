<?php 
	class User_api_manage extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Admin_Model');
			$this->load->model('Shipment_Model');
			$this->load->model('User_Model');
			$this->load->model('International_Zone_Model');
			$this->load->model('Domestic_Zone_Model');
			$this->load->model('Config_Model');
		}
		
		
		public function adminDetail($id) {
			
			$admin = $this->Admin_Model->getOne(array(
				'id' => $id,
			));
			$json = array();
			//print_r($admin);
			if(!empty($admin)) {
				
				$json = array(	
					'id' => $admin['id'],
					'firstname' => $admin['firstname'],
					'lastname' => $admin['lastname'],
					'email' => $admin['email'],
					'address1' => $admin['address1'],
					'address2' => $admin['address2'],
					'address3' => $admin['address3'],
					'mobile' => $admin['mobile'],
					'city' => $admin['city'],
					'postcode' => $admin['postcode'],
					'state' => $admin['state'],
					'country' => $admin['country'],
					'status' => $admin['status'],
					'created_date' => $admin['created_date'],
					'modified_date' => $admin['modified_date'],
					);
					
				
			}
				
			echo json_encode($json);	
				
			
			
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}
?>
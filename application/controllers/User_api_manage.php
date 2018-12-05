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
		
		public function userDetail($id) {
			
			$user = $this->User_Model->getOne(array(
				'id' => $id,
			));
			$json = array();
			//print_r($admin);
			if(!empty($user)) {
				
				$json = array(	
					'id' => $user['id'],
					'firstname' => $user['firstname'],
					'lastname' => $user['lastname'],
					'email' => $user['email'],
					'address1' => $user['address1'],
					'address2' => $user['address2'],
					'address3' => $user['address3'],
					'mobile' => $user['mobile'],
					'city' => $user['city'],
					'postcode' => $user['postcode'],
					'state' => $user['state'],
					'country' => $user['country'],
					'status' => $user['status'],
					'created_date' => $user['created_date'],
					'modified_date' => $user['modified_date'],
					);
					
				
			}
				
			echo json_encode($json);	
				
			
			
		}
		
		public function updateAdmin() {
			$id = $this->input->post("id", true);
			$status = $this->input->post("status",true);
			$this->Admin_Model->update(array(
			'id' => $id,
			
			), array(
			 'status' => $status,
			 'modified_date' => date("Y-m-d H:i:S"),
			));
			
			echo("Pass");
		
			
		}
		
		public function bulkUpdateAdmin() {
			$id = $this->input->post("id", true);
			$status = $this->input->post("status",true);
			
			for ($i = 0; $i < sizeof($id); $i++) {
				$this->Admin_Model->update(array(
					'id' => $id[$i],
			
					), array(
						'status' => $status,
						'modified_date' => date("Y-m-d H:i:S"),
					));
			}
			echo("Pass");
		
			
		}
		
		public function updateUser() {
			$id = $this->input->post("id", true);
			$status = $this->input->post("status",true);
			$this->User_Model->update(array(
			'id' => $id,
			
			), array(
			 'status' => $status,
			 'modified_date' => date("Y-m-d H:i:S"),
			));
			
			echo("Pass");
		
			
		}
		
		public function bulkUpdateUser() {
			$id = $this->input->post("id", true);
			$status = $this->input->post("status",true);
			
			for ($i = 0; $i < sizeof($id); $i++) {
				$this->User_Model->update(array(
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
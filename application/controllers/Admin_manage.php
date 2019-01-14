<?php 
	class Admin_manage extends CI_Controller {
		public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_Model');
		$this->load->model('Shipment_Model');
		$this->load->model('User_Model');
		$this->load->model('Order_Table_Model');
		$this->load->model('International_Zone_Model');
		$this->load->model('Domestic_Zone_Model');
		$this->load->model('Config_Model');
		$this->load->model('Credit_History_Model');
	}
	
	
		public function admin_login() {
			if (isset($this->session->userdata['admin_logged_in'])) {
				redirect(base_url('admin/dashboard'));
				
			} else {
			$this->data['title'] = "Admin Login";
			
			$this->load->view("admin/login", $this->data);
			}
		}
		
		public function dashboard() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Welcome to wherevership admin";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$fuelCharge = $this->Config_Model->getOne(array(
				'description' => 'Fuel Charge',
				'is_deleted' => 0,
			));
			$docScheduleNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Sehedule In Arrangment',
				'type' => 'Domestic',
			));
			$docPendingNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Pending For Collection',
				'type' => 'Domestic',
			));
			$docOnHoldNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'On Hold',
				'type' => 'Domestic',
			));
			$docCollectedNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Collcted',
				'type' => 'Domestic',
			));
			$docDropOffNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Drop Off',
				'type' => 'Domestic',
			));
			$docDeliveringNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Delivering',
				'type' => 'Domestic',
			));
			$docSuccessfulDeliveredNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Successful Delivered',
				'type' => 'Domestic',
			));
			$docReturnedNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Returned',
				'type' => 'Domestic',
			));
			$docCancelledNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Cancelled By Admin',
				'type' => 'Domestic',
			));
			$intScheduleNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Sehedule In Arrangment',
				'type' => 'International',
			));
			$intPendingNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Pending For Collection',
				'type' => 'International',
			));
			$intOnHoldNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'On Hold',
				'type' => 'International',
			));
			$intCollectedNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Collected',
				'type' => 'International',
			));
			$intDropOffNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Drop Off',
				'type' => 'International',
			));
			$intDeliveringNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Delivering',
				'type' => 'International',
			));
			$intSuccessfulDeliveredNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Successful Delivered',
				'type' => 'International',
			));
			$intReturnedNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Returned',
				'type' => 'International',
			));
			$intCancelledNumber = $this->Shipment_Model->record_count(array(
				'is_deleted' => 0,
				'status' => 'Cancelled By Admin',
				'type' => 'International',
			));
			$this->data['fuelCharge'] = $fuelCharge;
			$this->data['docScheduleNumber'] = $docScheduleNumber;
			$this->data['docPendingNumber'] = $docPendingNumber;
			$this->data['docOnHoldNumber'] = $docOnHoldNumber;
			$this->data['docCollectedNumber'] = $docCollectedNumber;
			$this->data['docDropOffNumber'] = $docDropOffNumber;
			$this->data['docDeliveringNumber'] = $docDeliveringNumber;
			$this->data['docSuccessfulDeliveredNumber'] = $docSuccessfulDeliveredNumber;
			$this->data['docReturnedNumber'] = $docReturnedNumber;
			$this->data['docCancelledNumber'] = $docCancelledNumber;
			$this->data['intScheduleNumber'] = $intScheduleNumber;
			$this->data['intPendingNumber'] = $intPendingNumber;
			$this->data['intOnHoldNumber'] = $intOnHoldNumber;
			$this->data['intCollectedNumber'] = $intCollectedNumber;
			$this->data['intDropOffNumber'] = $intDropOffNumber;
			$this->data['intDeliveringNumber'] = $intDeliveringNumber;
			$this->data['intSuccessfulDeliveredNumber'] = $intSuccessfulDeliveredNumber;
			$this->data['intReturnedNumber'] = $intReturnedNumber;
			$this->data['intCancelledNumber'] = $intCancelledNumber;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/dashboard",$this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function add_requester() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Add Requester";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/add_requester", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function requester_list() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Requester list";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$userList = $this->User_Model->get(array(
				'role' => 'Requester',
				'is_deleted' => 0,
			));
			
			$this->data['userList'] = $userList;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/requster_list", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function add_driver() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Add driver";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$this->load->view("admin/header",$this->data);
			$this->load->view("admin/add_driver", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function driver_list() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Driver list";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$userList = $this->User_Model->get(array(
				'role' => 'Driver',
				'is_deleted' => 0,
			));
			
			$this->data['userList'] = $userList;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/driver_list", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function add_admin() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Add admin";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/add_admin", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function admin_list() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Admin List";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$adminList = $this->Admin_Model->get(array(
				'is_deleted' => 0,
			));
			
			$this->data['adminList'] = $adminList;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/admin_list", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			} 
			
		}
		
		public function domestic() {
			if (isset($this->session->userdata['admin_logged_in'])) {
				$this->data['title'] = "Domestic report";
				$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
				$shipmentList = $this->Shipment_Model->get(array(
				  'type' => 'Domestic',
				  'is_deleted' => 0,
				));
				$this->data['shipmentList'] = $shipmentList;
				$this->load->view("admin/header", $this->data);
				$this->load->view("admin/domestic", $this->data);
				$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function international() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "International report";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$shipmentList = $this->Shipment_Model->get(array(
				  'type' => 'International',
				  'is_deleted' => 0,
				));
			$this->data['shipmentList'] = $shipmentList;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/international", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		
		public function trucking() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Trucking report";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/trucking", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function international_cost() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "International cost";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			
			$fuelCharge = $this->Config_Model->getOne(array(
				'description' => 'Fuel Charge',
				'is_deleted' => 0,
			));
			
			
			$zoneList = $this->International_Zone_Model->get(array(
				'is_deleted' => 0,
			));
			$this->data['fuelCharge'] = $fuelCharge;
			$this->data['zoneList'] = $zoneList;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/international_costing", $this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
				
			}
		}
		
		
		public function credit_history() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Credit History";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$credit_history = $this->Credit_History_Model->get(array(
				'is_deleted' => 0,
			));
			$this->data['creditHistory'] = $credit_history;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/credit_history",$this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function top_up_history() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Top Up History";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$top_up_history = $this->Order_Table_Model->get(array(
				'is_deleted' => 0,
			));
			$this->data['topUpHistory'] = $top_up_history;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/top_up_history",$this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
			
		}
		
		public function domestic_cost() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Domestic cost";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$zoneList = $this->Domestic_Zone_Model->get(array(
				'is_deleted' => 0,
			));
			
			$this->data['zoneList'] = $zoneList;
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/domestic_costing",$this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
			}
		}
		
		public function trucking_cost() {
			if (isset($this->session->userdata['admin_logged_in'])) {
			$this->data['title'] = "Trucking Cost";
			$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
			$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
			$this->load->view("admin/header", $this->data);
			$this->load->view("admin/trucking_costing",$this->data);
			$this->load->view("admin/footer");
			} else {
				redirect(base_url('admin/login'));
				
			}
		}
		
		public function profile_setting() {
			if (isset($this->session->userdata['admin_logged_in'])) {
				$this->data['title'] = "Profile Setting";
				$this->data['id'] = ($this->session->userdata['admin_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
				$userData = $this->Admin_Model->getOne(array(
						'id' => $this->data['id'],
					));
				$this->data['userData'] = $userData; 	
				$this->load->view("admin/header", $this->data);
				$this->load->view("admin/profile_setting", $this->data);
				$this->load->view("admin/footer");
			} else {
				
				redirect(base_url('admin/login'));
			}
		}
		
		public function search_admin() {
			$category = $this->input->post("category", true);
			$value = $this->input->post("search", true);
			$dataList = $this->Admin_Model->search(array(
				'is_deleted' => 0,
			),array(
				$category => $value,
			));
			if (!empty($dataList)) {
				foreach ($dataList as $v) {
					$json[] = array(
					'result' => 'pass',
					'id' => $v['id'],
					'firstname' => $v['firstname'],
					'lastname' => $v['lastname'],
					'email' => $v['email'],
					'address1' => $v['address1'],
					'address2' => $v['address2'],
					'address3' => $v['address3'],
					'mobile' => $v['mobile'],
					'city' => $v['city'],
					'postcode' => $v['postcode'],
					'state' => $v['state'],
					'country' => $v['country'],
					'status' => $v['status'],
					'is_deleted' => $v['is_deleted'],
					);
					
				}
				
			} else {
				$json[] = array(
					'result' => 'empty',
				);
			
			} 
			echo json_encode($json);
			
		}
		
		
		public function login_process() {
			
			
			$email = $this->input->post("user_login", true);
			$pass = md5($this->input->post("user_Pass", true));
			$dataList = $this->Admin_Model->getOne(array(
			'email' => $email,
			'password' => $pass,
			'status' => 'active',
			'is_deleted' => 0,
			));
	

	
			if (empty($dataList)) {
				redirect(base_url('admin/login'));
				echo("fail");
			} else {
				$data1 = array('id' => $dataList['id'],'firstname' => $dataList['firstname'], 'lastname' => $dataList['lastname']);
				$this->session->set_userdata('admin_logged_in',$dataList);
				echo("pass");
				redirect(base_url('admin/dashboard'));
			}
			
			
		}
		
		public function test_session() {
			if (isset($this->session->userdata['admin_logged_in'])) {
					$username = ($this->session->userdata['admin_logged_in']['firstname']);
					echo($username);
					
			} else {
				
				echo('no Login');
			}
			
			
		}
		
		public function logout() {
			$this->session->unset_userdata('admin_logged_in');
			if (isset($this->session->userdata['admin_logged_in'])) {
					$username = ($this->session->userdata['admin_logged_in']['firstname']);
					echo($username);
					
			} else {
				
				redirect(base_url('admin/login'));
			}
			
			
		}
		
		
		
		
		
	
	
	
	}
	

?>

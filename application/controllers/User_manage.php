<?php
class User_manage extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_Model');
		$this->load->model('Admin_Model');
	}
	
	public function test_get() {
		$dataList = $this->User_Model->get(array(
			'is_deleted' => 0,
		));
		
		$json = array();
		if (!empty($dataList)) {
			foreach($dataList as $v) {
				$json[] = array(
					'id' => $v['id'],
					'name' => $v['name'],
					'age' => $v['age'],
					'gender' => $v['gender'],
					'phone no' => $v['phone_no'],
				);
				
			}
			
		}
		echo json_encode($json);
	}
	
	public function test_getC() {
	
		$test1 = $this->User_Model->getOne(array(
			'name' => 'lee ling ling',
		));
		print_r($test1);

	}
	
	
	public function login_process() {
			$email = $this->input->post("email", true);
			$pass = $this->input->post("pass", true);
			$dataList = $this->User_Model->getOne(array(
			'email' => $email,
			'password' => $pass,
			));
			//echo($email. " ".$pass);
		
			if (empty($dataList)) {
				echo("fail");
				
			} else {
				
				
				$data1 = array('id' => $dataList['id'],'firstname' => $dataList['firstname'], 'lastname' => $dataList['lastname']);
				$this->session->set_userdata('user_logged_in',$data1);
				echo('pass');
				
				
			}  
	
		}
		
		
	public function logout() {
		$this->session->unset_userdata('user_logged_in');
			if (isset($this->session->userdata['user_logged_in'])) {
					$username = ($this->session->userdata['user_logged_in']['firstname']);
					echo($username);
					
			} else {
				
				redirect(base_url());
			}
			
		
		
	}
	
	
	public function signUpProcess() {
		try {
			
			
			$email = $this->input->post("email", true);
			$password = md5($this->input->post("password", true));
			$date = date("Y-m-d h:i:s");
			
			
			
			$user_id = $this->User_Model->insert(array(
				'email' => $email,
				'password' => $password,
				'status' => 'Active',
				'role' => 'Requester',
				'is_deleted' => 0,
				'created_date' => $date,
			));
			
			$data1 = array('id' => $user_id,'firstname' => 'Nameless', 'lastname' => 'User');
			$this->session->set_userdata('user_logged_in',$data1);
		
			echo json_encode(array(
				'status' => "OK",
				'result' => $user_id,
			
			));
		} catch(Exception $e) {
			echo json_encode(array(
				'status' => "ERROR",
				'result' => $e->getMessage(),
			
			));
		}
		
	}
	
	public function addAdmin() {
		/**
		$firstName = "Ng";
		$lastName =  "Xin Yi";
		$email = "anasng@gmail.com";
		$address1 = "2, Jalan Emas Merah";
		$address2 = "Taman Emas Merah";
		$address3 = "";
		$city =  "Pekan Nanas";
		$postcode = "81500";
		$state = "Johor";
		$country = "Malaysia";
		**/
		try {
			$firstName = $this->input->post("firstName", true);
			$lastName =  $this->input->post("lastName", true);
			$email = $this->input->post("email", true);
			$password = md5($this->input->post("password", true));
			$address1 = $this->input->post("address1", true);
			$address2 =  $this->input->post("address2", true);
			$address3 =  $this->input->post("address3", true);
			$city =  $this->input->post("city", true);
			$postcode = $this->input->post("postcode", true);
			$state = $this->input->post("state", true);
			$country = $this->input->post("country", true);
			$mobile = $this->input->post("mobile", true);
			$date = date("Y-m-d h:i:s");
		
			$admin_id = $this->Admin_Model->insert(array(
				'firstname' => $firstName,
				'lastname' => $lastName,
				'email' => $email,
				'password' => $password,
				'address1' => $address1,
				'address2' => $address2,
				'address3' => $address3,
				'mobile' => $mobile,
				'city' => $city,
				'postcode' => $postcode,
				'state' => $state,
				'country' => $country,
				'status' => 'active',
				'is_deleted' => 0,
				'created_date' => $date,
			));
		
			echo json_encode(array(
				'status' => "OK",
				'result' => $admin_id,
			
			));
		} catch(Exception $e) {
			echo json_encode(array(
				'status' => "ERROR",
				'result' => $e->getMessage(),
			
			));
		}
	//	echo($firstName." ". $lastName." ". $email." ".$address1." ");
	}
	
	
	public function updateAdminProfile($id) {
		/**
		$firstName = "Ng";
		$lastName =  "Xin Yi";
		$email = "anasng@gmail.com";
		$address1 = "2, Jalan Emas Merah";
		$address2 = "Taman Emas Merah";
		$address3 = "";
		$city =  "Pekan Nanas";
		$postcode = "81500";
		$state = "Johor";
		$country = "Malaysia";
		**/
		try {
			$firstName = $this->input->post("firstName", true);
			$lastName =  $this->input->post("lastName", true);
			$address1 = $this->input->post("address1", true);
			$address2 =  $this->input->post("address2", true);
			$address3 =  $this->input->post("address3", true);
			$city =  $this->input->post("city", true);
			$postcode = $this->input->post("postcode", true);
			$state = $this->input->post("state", true);
			$country = $this->input->post("country", true);
			$mobile = $this->input->post("mobile", true);
			$date = date("Y-m-d h:i:s");
		
			$admin_id = $this->Admin_Model->update(array(
				'id' => $id,
			),array(
				'firstname' => $firstName,
				'lastname' => $lastName,
				'address1' => $address1,
				'address2' => $address2,
				'address3' => $address3,
				'mobile' => $mobile,
				'city' => $city,
				'postcode' => $postcode,
				'state' => $state,
				'country' => $country,
				'status' => 'active',
				'is_deleted' => 0,
				'modified_date' => $date,
			));
		
			echo json_encode(array(
				'status' => "OK",
				'result' => $admin_id,
			
			));
		} catch(Exception $e) {
			echo json_encode(array(
				'status' => "ERROR",
				'result' => $e->getMessage(),
			
			));
		}
	//	echo($firstName." ". $lastName." ". $email." ".$address1." ");
	}
	
	
	
	public function updateMemberProfile($id) {
		/**
		$firstName = "Ng";
		$lastName =  "Xin Yi";
		$email = "anasng@gmail.com";
		$address1 = "2, Jalan Emas Merah";
		$address2 = "Taman Emas Merah";
		$address3 = "";
		$city =  "Pekan Nanas";
		$postcode = "81500";
		$state = "Johor";
		$country = "Malaysia";
		**/
		try {
			$firstName = $this->input->post("firstName", true);
			$lastName =  $this->input->post("lastName", true);
			$address1 = $this->input->post("address1", true);
			$address2 =  $this->input->post("address2", true);
			$address3 =  $this->input->post("address3", true);
			$city =  $this->input->post("city", true);
			$postcode = $this->input->post("postcode", true);
			$state = $this->input->post("state", true);
			$country = $this->input->post("country", true);
			$mobile = $this->input->post("mobile", true);
			$date = date("Y-m-d h:i:s");
		
			$user_id = $this->User_Model->update(array(
				'id' => $id,
			),array(
				'firstname' => $firstName,
				'lastname' => $lastName,
				'address1' => $address1,
				'address2' => $address2,
				'address3' => $address3,
				'mobile' => $mobile,
				'city' => $city,
				'postcode' => $postcode,
				'state' => $state,
				'country' => $country,
				'status' => 'active',
				'is_deleted' => 0,
				'modified_date' => $date,
			));
		
			echo json_encode(array(
				'status' => "OK",
				'result' => $user_id,
			
			));
		} catch(Exception $e) {
			echo json_encode(array(
				'status' => "ERROR",
				'result' => $e->getMessage(),
			
			));
		}
	//	echo($firstName." ". $lastName." ". $email." ".$address1." ");
	}
	
	public function addDriver() {
		/**
		$firstName = "Ng";
		$lastName =  "Xin Yi";
		$email = "anasng@gmail.com";
		$address1 = "2, Jalan Emas Merah";
		$address2 = "Taman Emas Merah";
		$address3 = "";
		$city =  "Pekan Nanas";
		$postcode = "81500";
		$state = "Johor";
		$country = "Malaysia";
		**/
		try {
			$firstName = $this->input->post("firstName", true);
			$lastName =  $this->input->post("lastName", true);
			$email = $this->input->post("email", true);
			$password = md5($this->input->post("password", true));
			$address1 = $this->input->post("address1", true);
			$address2 =  $this->input->post("address2", true);
			$address3 =  $this->input->post("address3", true);
			$city =  $this->input->post("city", true);
			$postcode = $this->input->post("postcode", true);
			$state = $this->input->post("state", true);
			$country = $this->input->post("country", true);
			$mobile = $this->input->post("mobile", true);
			$date = date("Y-m-d h:i:s");
		
			$user_id = $this->User_Model->insert(array(
				'firstname' => $firstName,
				'lastname' => $lastName,
				'email' => $email,
				'password' => $password,
				'address1' => $address1,
				'address2' => $address2,
				'address3' => $address3,
				'mobile' => $mobile,
				'city' => $city,
				'postcode' => $postcode,
				'state' => $state,
				'country' => $country,
				'role' => 'Driver',
				'status' => 'Active',
				'is_deleted' => 0,
				'created_date' => $date,
			));
		
			echo json_encode(array(
				'status' => "OK",
				'result' => $user_id,
			
			));
		} catch(Exception $e) {
			echo json_encode(array(
				'status' => "ERROR",
				'result' => $e->getMessage(),
			
			));
		}
	//	echo($firstName." ". $lastName." ". $email." ".$address1." ");
	}

	public function addRequester() {
		/**
		$firstName = "Ng";
		$lastName =  "Xin Yi";
		$email = "anasng@gmail.com";
		$address1 = "2, Jalan Emas Merah";
		$address2 = "Taman Emas Merah";
		$address3 = "";
		$city =  "Pekan Nanas";
		$postcode = "81500";
		$state = "Johor";
		$country = "Malaysia";
		**/
		try {
			$firstName = $this->input->post("firstName", true);
			$lastName =  $this->input->post("lastName", true);
			$email = $this->input->post("email", true);
			$password = md5($this->input->post("password", true));
			$address1 = $this->input->post("address1", true);
			$address2 =  $this->input->post("address2", true);
			$address3 =  $this->input->post("address3", true);
			$city =  $this->input->post("city", true);
			$postcode = $this->input->post("postcode", true);
			$state = $this->input->post("state", true);
			$country = $this->input->post("country", true);
			$mobile = $this->input->post("mobile", true);
			$date = date("Y-m-d h:i:s");
		
			$user_id = $this->User_Model->insert(array(
				'firstname' => $firstName,
				'lastname' => $lastName,
				'email' => $email,
				'password' => $password,
				'address1' => $address1,
				'address2' => $address2,
				'address3' => $address3,
				'mobile' => $mobile,
				'city' => $city,
				'postcode' => $postcode,
				'state' => $state,
				'country' => $country,
				'role' => 'Requester',
				'status' => 'Active',
				'is_deleted' => 0,
				'created_date' => $date,
			));
		
			echo json_encode(array(
				'status' => "OK",
				'result' => $user_id,
			
			));
		} catch(Exception $e) {
			echo json_encode(array(
				'status' => "ERROR",
				'result' => $e->getMessage(),
			
			));
		}
	//	echo($firstName." ". $lastName." ". $email." ".$address1." ");
	}
	
}

?>
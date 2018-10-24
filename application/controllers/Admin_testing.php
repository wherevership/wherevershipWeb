<?php 
	class Admin_testing extends CI_Controller {
		
		
		public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_Model');
	}
		
		public function test_get_one() {
			$dataList = $this->Admin_Model->getOne(array(
			'email' => 'lcg1989@hk3.com.my',
			'password' => '12345678',
			));
			
			
			print_r($dataList);
			$data1 = array('id' => $dataList['id'],'firstname' => $dataList['firstname'], 'lastname' => $dataList['lastname'], 'email' => $dataList['email']);
			echo('<br>');
			if (empty($data1)) {
				echo('fail');
				
			} else {
				echo($data1['firstname']);
				$this->session->set_userdata('admin_logged_in',$data1);
				echo('pass');
				print_r($this->session->userdata['admin_logged_in']); 
				
			}
			
		}
		
		
		public function test_get_all() {
			
			$dataList = $this->Admin_Model->get(array(
			
			));

			print_r($dataList);

			
		}
		
		
		public function test_session() {
			if (isset($this->session->userdata['admin_logged_in'])) {
					$username = ($this->session->userdata['admin_logged_in']['firstname']) .' '. ($this->session->userdata['admin_logged_in']['lastname']);
					$id = ($this->session->userdata['admin_logged_in']['id']);
					echo($username);
					echo('<br/>');
					echo($id);
					$userData = $this->Admin_Model->getOne(array(
						'id' => $id,
					));
					$user1 = $this->Admin_Model->get(array(
						'is_deleted' => 0,
					));
					echo('<br/>');
					print_r($userData);
					echo('<br/>');
					print_r($user1);
					echo('<br/>');
					print_r($this->session->all_userdata());
					echo('<br/>');
					print_r($this->session->userdata['admin_logged_in']); 
				} else {
					
					
					print_r($this->session->userdata['admin_logged_in']); 
				}
			
			
		}
		
		public function test_logout() {
			$this->session->unset_userdata('admin_logged_in');
			if (isset($this->session->userdata['admin_logged_in'])) {
					$username = ($this->session->userdata['admin_logged_in']['firstname']);
					echo($username);
					print_r($this->session->userdata['admin_logged_in']); 
			} else {
				//print_r($this->session->userdata['admin_logged_in']); 
				
				echo('no login');
			}
			
			
		}
		
		
		
	}
	
?>
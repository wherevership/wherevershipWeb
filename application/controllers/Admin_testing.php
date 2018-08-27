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
			echo('<br>');
			if (empty($dataList)) {
				echo('fail');
				
			} else {
				echo($dataList['firstname']);
				$this->session->set_userdata('admin_logged_in',$dataList);
				echo('pass');
				
				
			}
			
		}
		
		
		public function test_get_all() {
			
			$dataList = $this->Admin_Model->get(array(
			'is_deleted' => 0,
			));

			print_r($dataList);

			
		}
		
		
		public function test_session() {
			if (isset($this->session->userdata['admin_logged_in'])) {
					$username = ($this->session->userdata['admin_logged_in']['firstname']);
					echo($username);
					
				}
			
			
		}
		
		public function test_logout() {
			$this->session->unset_userdata('admin_logged_in');
			if (isset($this->session->userdata['admin_logged_in'])) {
					$username = ($this->session->userdata['admin_logged_in']['firstname']);
					echo($username);
					
			} else {
				
				echo('no login');
			}
			
			
		}
		
		
		
	}
	
?>
<?php 
	class Admin_testing extends CI_Controller {
		
		
		public function __construct() {
		parent::__construct();
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
				
				echo('pass');
			}
			
		}
		
		
		public function test_get_all() {
			
			$dataList = $this->Admin_Model->get(array(
			'is_deleted' => 0,
			));

			print_r($dataList);

			
		}
		
		
		
		
	}
	
?>
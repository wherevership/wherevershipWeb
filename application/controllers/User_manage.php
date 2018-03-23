<?php
class User_manage extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('User_Model');
		
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
	

	
}

?>
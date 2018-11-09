<?php 
	class Admin_process_manage extends CI_Controller {
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
	
	
	
	public function admin_delete($id) {
		$this->Admin_Model->delete(array(
			'id' => $id,
		));
		
		redirect(base_url('admin/admin_list'));
		
	}
	
	public function requester_delete($id) {
		$this->User_Model->delete(array(
			'id' => $id,
		));
		
		redirect(base_url('admin/requester_list'));
		
	}
	
	
	
	public function driver_delete($id) {
		$this->User_Model->delete(array(
			'id' => $id,
		));
		
		redirect(base_url('admin/driver_list'));
		
		
	}
	
	public function bulk_delete() {
		$id = $this->input->post("id", true);
		
		for ($i = 0; $i < sizeof($id); $i++) {
			$this->Admin_Model->delete(array(
				'id' => $id[$i],
			
			)); 
			
		}
		echo("pass");
	}
	
	public function userBulkDelete() {
		$id = $this->input->post("id", true);
		
		for ($i = 0; $i < sizeof($id); $i++) {
			$this->User_Model->delete(array(
				'id' => $id[$i],
			
			)); 
			
		}
		echo("pass");
	}
	
	
	
	}
	
?>
	
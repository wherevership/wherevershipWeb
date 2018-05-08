<?php 
	class Pru_manage extends CI_Controller {
		
			public function pontian() {
				$this->data['title'] = "Pontian";
				
				$this->load->view("pontian", $this->data);
				
			
			}
		
	}

?>
<?php 

class Track_manage extends CI_Controller {
	public function track() {
		$this->load->view("frontEnd/header");
		$this->load->view("frontEnd/track");
		$this->load->view("frontEnd/footer");
		
	}
	
	
	
}
?>
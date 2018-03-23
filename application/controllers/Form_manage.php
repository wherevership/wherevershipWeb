<?php 
class Form_manage extends CI_Controller {
	private $data = array();
	
	public function userSignupForm() {
		$this->data['title'] = "User Sign Up Form";
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/user_signup_form");
		$this->load->view("frontEnd/footer");
		
	}

}
?>
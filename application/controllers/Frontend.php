<?php 
class Frontend extends CI_Controller {
	private $data = array();
	
	public function index() {
		$this->data['title'] = "Wecome to wherevership";
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/index");
		$this->load->view("frontEnd/footer");
		
	}
	
	public function aboutUs() {
		$this->data['title'] = "About Us";
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/aboutUs");
		$this->load->view("frontEnd/footer");
		
	}
	
	public function contactUs() {
		$this->data['title'] = "Contact Us";
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/contactUs1");
		$this->load->view("frontEnd/footer");
		
	}
	
	public function courier() {
		$this->data['title'] = "Courier";
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/courier");
		$this->load->view("frontEnd/footer");
	}
	
	public function signUp() {
		$this->data['title'] = "Sign Up";
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/signUp");
		$this->load->view("frontEnd/footer");
	}
	
	public function userLogin() {
		$this->data['title'] = "User Login";
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/userLogin");
		$this->load->view("frontEnd/footer");
	}
	
	public function volumetricCalcualator() {
		$this->data['title'] = "Volumetric Calcualator";
		$this->load->view("frontEnd/header3", $this->data);
		$this->load->view("frontEnd/volumetricCalcualator");
		$this->load->view("frontEnd/footer3");
	}
	
	public function refundPolicy() {
		$this->data['title'] = "Refund Policy";
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/refund_policy");
		$this->load->view("frontEnd/footer");
	}
	
	public function truck() {
			$this->data['title'] = "Truck";
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/truck");
			$this->load->view("frontEnd/footer");
		}
		
	public function faq() {
			$this->data['title'] = "FAQ";
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/faq");
			$this->load->view("frontEnd/footer");
	}
	
	public function prohibitedItemList() {
			$this->data['title'] = "Prohibited Item List";
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/prohibitedItemList");
			$this->load->view("frontEnd/footer");
	}
	
	public function tos() {
			$this->data['title'] = "Term And Condition";
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/tos");
			$this->load->view("frontEnd/footer");
	}
	
	public function privacyPolicy() {
			$this->data['title'] = "Privacy Policy";
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/privacyPolicy");
			$this->load->view("frontEnd/footer");
	}
	
		
}

?>
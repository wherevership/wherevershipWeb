<?php 
class Frontend extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		
	}
	
	
	private $data = array();
	
	public function index() {
		$this->data['title'] = "Wecome to wherevership";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/courier");
		$this->load->view("frontEnd/footer",$this->data);
		
	}
	
	public function aboutUs() {
		$this->data['title'] = "About Us";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/aboutUs");
		$this->load->view("frontEnd/footer", $this->data);
		
	}
	
	public function contactUs() {
		$this->data['title'] = "Contact Us";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/contactUs1");
		$this->load->view("frontEnd/footer", $this->data);
		
	}
	
	public function courier() {
		$this->data['title'] = "Courier";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/courier");
		$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function signUp() {
		$this->data['title'] = "Sign Up";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/signUp");
		$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function userLogin() {
		
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				echo("login");
				redirect(base_url('member/user_panel'));
				
			} else {
				$this->data['title'] = "User Login";
				$this->data['id'] = "";
				$this->data['username'] = "";
				$this->load->view("frontEnd/header", $this->data);
				$this->load->view("frontEnd/userLogin");
				$this->load->view("frontEnd/footer", $this->data);
				
				
			}
		
	}
	
	public function volumetricCalcualator() {
		$this->data['title'] = "Volumetric Calcualator";
		$this->load->view("frontEnd/header3", $this->data);
		$this->load->view("frontEnd/volumetricCalcualator");
		$this->load->view("frontEnd/footer3");
	}
	
	public function refundPolicy() {
		$this->data['title'] = "Refund Policy";
		if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				echo("login");
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
		$this->load->view("frontEnd/header", $this->data);
		$this->load->view("frontEnd/refund_policy");
		$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function truck() {
			$this->data['title'] = "Truck";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				echo("login");
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/truck");
			$this->load->view("frontEnd/footer", $this->data);
		}
		
	public function faq() {
			$this->data['title'] = "FAQ";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/faq");
			$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function prohibitedItemList() {
		
			$this->data['title'] = "Prohibited Item List";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/prohibitedItemList");
			$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function tos() {
			$this->data['title'] = "Term And Condition";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/tos");
			$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function privacyPolicy() {
			$this->data['title'] = "Privacy Policy";
			if (isset($this->session->userdata['user_logged_in'])) {
				
				$this->data['id'] = ($this->session->userdata['user_logged_in']['id']);
				$this->data['username'] = ($this->session->userdata['user_logged_in']['firstname']) .' '. ($this->session->userdata['user_logged_in']['lastname']);
				
				
			} else {
				$this->data['id'] = "";
				$this->data['username'] = "";
				
				
			}
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/privacyPolicy");
			$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function forgotPass() {
			$this->data['title'] = "Forgot Password";
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/forgotPass");
			$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function forgotEmail() {
			$this->data['title'] = "Forgot Email";
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/forgotEmail");
			$this->load->view("frontEnd/footer", $this->data);
	}
	
	public function price() {
			$this->data['title'] = "Forgot Email";
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/pricing");
			$this->load->view("frontEnd/footer", $this->data);
	}
		
}

?>
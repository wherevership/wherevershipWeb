<?php
	class Email_manage extends CI_Controller  {
		
		
		public function testEmail() {
			$this->load->library('email');
			
			$this->email->from('admin@wherevership.com', 'Wherevership');
			$this->email->to('lcg1989@hotmail.com');
			$this->email->subject('Testing Email');
			$this->email->message('Testing Email 123');
			
			$this->email->send();
			
			
			
			
		}
	
	
		public function sendContactUs() {
			
			
				$this->load->library('email');
			
				$name = $this->input->post("name", true);
				$email = $this->input->post("email", true);
				$phone = $this->input->post("phone", true);
				$subject = $this->input->post("subject", true);
				$message = $this->input->post("message", true);
		//	$name = "dsfsdf";
		//	$email = "email";
		//	$phone = "dsfsdf";
		//	$subject = "dfsfdfs";
		//	$message = "dsdsdsf";
				$this->email->from('admin@wherevership.com', 'Wherevership');
				$this->email->to('lcg1989@hk3.com.my');
				$this->email->subject($subject);
				$this->email->message('Name: '. $name.' Email: '. $email.' Phone: '. $phone.' Message: '. $message);
			
				$this->email->send();
			
		//	redirect(base_url());
				echo('pass');
			
		
		
	
	}

	}


?>
<?php 
	class Order_manage extends CI_Controller {
		
			public function detail($id,$mode) {
				$this->data['title'] = $id;
				$this->data['id'] = $id;
				$this->data['mode'] = $mode;
				$this->load->view("member/header", $this->data);
				$this->load->view("member/order_detail", $this->data);
				$this->load->view("member/footer");
			
			}
		
	}

?>
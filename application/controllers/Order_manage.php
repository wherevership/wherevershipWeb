<?php 
	class Order_manage extends CI_Controller {
		
			public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Credit_History_Model');
			$this->load->model('Order_Table_Model');
			}
		
			public function detail($id,$mode) {
				$this->data['title'] = $id;
				$this->data['id'] = $id;
				$this->data['mode'] = $mode;
				$this->load->view("member/header", $this->data);
				$this->load->view("member/order_detail", $this->data);
				$this->load->view("member/footer");
			
			}
			
			public function search_top_up() {
				$dateFrom = $this->input->post("dateFrom", true);
				$dateTo = $this->input->post("dateTo", true);
				$type = $this->input->post("type", true);
				
				if ($type == 'admin') {
					$topUpList = $this->Order_Table_Model->get(array(
						'is_deleted' => 0,
						'created_date >=' => $dateFrom,
						'created_date <=' => $dateTo,
					));
					if (!empty($topUpList)) {
						foreach ($topUpList as $v) {
							$json[] = array(
								'id' => $v['id'],
								'dest' => $v['package'],
								'status' => $v['status'],
								'total_price' => $v['total_price'],
								'user_id' => $v['user_id'],
								'created_date' => $v['created_date'],
							
							);
							
						}
					}  else {
						$json[] = array(
							'result' => 'empty',
						);
			
					} 
					
				} else {
					$user_id = $this->input->post("user_id",true);
					$topUpList = $this->Order_Table_Model->get(array(
						'is_deleted' => 0,
						'created_date >=' => $dateFrom,
						'created_date <=' => $dateTo,
						'user_id' => $user_id,
					));
					if (!empty($topUpList)) {
						foreach ($topUpList as $v) {
							$json[] = array(
								'id' => $v['id'],
								'dest' => $v['package'],
								'status' => $v['status'],
								'total_price' => $v['total_price'],
								'user_id' => $v['user_id'],
								'created_date' => $v['created_date'],
							
							);
							
						}
					}  else {
						$json[] = array(
							'result' => 'empty',
							'created_date >=' => $dateFrom,
							'created_date <=' => $dateTo,
							'user_id' => $user_id,
						);
					}
			
				}	 
					
				echo json_encode($json);
			}

			public function updateTopUpStatus() {
				$id = $this->input->post("id", true);
				$status = $this->input->post("status", true);
				
				$this->Order_Table_Model->update(array(
					'id' => $id,
			
				), array(
					'status' => $status,
					'modified_date' => date("Y-m-d H:i:S"),
				));
		
			
				echo ('pass');
				
			}
			
			public function topUpApprove() {
				$id = $this->input->post("id", true);
				$package = $this->input->post("dest", true);
				$total_price = $this->input->post("total_price", true);
				$user_id = $this->input->post("user_id", true);
				$status = $this->input->post("status", true);
				
				$this->Order_Table_Model->update(array(
					'id' => $id,
				), array(
					'status' => 'Approved',
					'modified_date' => date("Y-m-d H:i:S"),
				));
				
				$this->Credit_History_Model->insert(array(
					'description' => $package,
					'amount' => $total_price,
					'amount_type' => 'dt',
					'user_id' => $user_id,
					'created_date' => date("Y-m-d H:i:s"),
				
				));
		
			
				echo ('pass');
				
			}
		
		}

	?>
<?php 
	class Testing_controller extends CI_Controller {
	
		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Shipment_Model');
			
		}
		
		
		public function testing_poslaju() {
			$headers = array(
				'X-User-Key: VTNRYTk0UEVRSXpLeU40ZTJpOFc0S1VQSXJsYzVKY2s=',
				'Origin: http://ezybox.my',
			
			);
			$url = "http://stagingsds.pos.com.my/apigateway/as2corporate/api/generateconnote/v1";
			$numberOfItem = "1";
			$prefix = "ER";
			$applicationCode = "FLEXISHIP2U@pos!23";
			$orderid = "B012345";
			$username = "flexiship";
			
			$final_url = $url."?numberOfItem=".$numberOfItem."&Prefix=".$prefix."&ApplicationCode=".$applicationCode."&orderid=".$orderid."username=".$username;
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_URL, $final_url);
			 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$return = curl_exec($ch);
			
			if (curl_errno($ch)) {
				print "Error".curl_error($ch);
				print "GG.com";
			} else {
				$transaction = json_decode($return, TRUE);
				curl_close($ch);
				var_dump($transaction);
				echo('<br/>this is testing purpose');

			}
		}
		
		public function getId() {
			$shipment = $this->Shipment_Model->getLastId();
			if (!empty($shipment)) {
				
			//	echo($shipment.id);
				
				foreach ($shipment as $v) {
					var_dump($v);
					//echo(json_decode($v['id']));
			
						$id =$v->id;
				
				}
				$prefix = substr($id, 0 ,2);
				$number = substr($id, -5);
				
				echo($number);
				echo($prefix);
				
				if ($prefix=='SH') {
					$f_number = (int)$number;
					$f_number = $f_number + 1;
					$numlength = mb_strlen($f_number);
					
					if ($numlength == 1) {
						$final_id = $prefix."0000".$f_number;
						
					} else if ($numlength == 2) {
						$final_id = $prefix."000".$f_number;
					} else if ($numlength == 3) {
						$final_id = $prefix."00".$f_number;
					} else if ($numlength == 4) {
						$final_id = $prefix."0".$f_number;
					} else if ($numlength == 5) {
						$final_id = $prefix.$f_number;
					} 	
				}
				echo($final_id);
				
			}
			
		}
	}

?>
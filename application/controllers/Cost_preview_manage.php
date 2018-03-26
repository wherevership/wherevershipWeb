<?php
	class Cost_preview_manage extends CI_Controller {
		
		public function costPreview() {
			$this->data['title'] = "Cost Preview For Internatioanl Courier";
			$this->data['frState'] = $this->input->post("c", true);
			$this->data['toCountry'] = $this->input->post("d", true);
			$weight = $this->input->post("w", true);
			$height = $this->input->post("h", true);
			$width = $this->input->post("wi", true);
			$length = $this->input->post("l", true);
			$this->data['fromState'] = $this->state_name($this->data['frState']);
			$this->data['weight_f'] = $this->compareWeight($weight, $height, $width, $length);
			$this->data['v_weight'] = ($length * $width * $height) / 5000;
			$this->data['weight'] = $weight;
			$this->data['length'] = $length;
			$this->data['width'] = $width;
			$this->data['height'] = $height;
			
			$this->load->view("frontEnd/header",$this->data);
			$this->load->view("frontEnd/cost_preview", $this->data);
			$this->load->view("frontEnd/footer");
			}
			
		public function dtcCostPreview() {
			$this->data['title'] = "Cost Preview For Domestic Courier";
			$this->data['frState'] = $this->input->post("c", true);
			$this->data['tState'] = $this->input->post("d", true);
			
			$this->data['fromState'] = $this->state_name($this->data['frState']);
			
			
			$weight = $this->input->post("w", true);
			$height = $this->input->post("h", true);
			$width = $this->input->post("wi", true);
			$length = $this->input->post("l", true);
			$this->data['toState'] = $this->state_name($this->data['tState']);
			$this->data['weight_f'] = $this->compareWeight($weight, $height, $width, $length);
			$this->data['v_weight'] = ($length * $width * $height) / 5000;
			$this->data['weight'] = $weight;
			$this->data['length'] = $length;
			$this->data['width'] = $width;
			$this->data['height'] = $height;
			
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/dt_cost_preview", $this->data);
			$this->load->view("frontEnd/footer");
			}
			
			
		function state_name($state) {
			if ($state == "jhr") {
				return "Johor" ;
		    }
		    else if ($state == "mlk") {
				return "Melaka";
		    }
		    else if ($state == "kdh") {
				return "Kedah";
		    }
		    else if ($state == "ktn") {
				return "Kelantan";
	     	}
	    	else if ($state == "nsn") {
				return "Negeri Sembilan";
		    }
		    else if ($state == "phg") {
				return "Pahang";
	     	}
			else if ($state == "prk") {
				return "Perak";
			}
			else if ($state == "pls") {
				return "Pelis";
			}
			else if ($state == "png") {
				return "Penang";
			}
			else if ($state == "sgr") {
				return "Selangor";
			}
			else if ($state == "trg") {
				return "Terengganu";
			}
			else if ($state == "kul") {
				return "Kuala Lumpur";
			}
			else if ($state == "srw") {
				return "Sarawak";
			}
			else if ($state == "pjy") {
				return "Putra Jaya";
			}
			else if ($state == "sbh") {
				return "Sabah";
			}
			else if ($state == "lbn") {
				return "Labuan";
			}
		}
		
		function compareWeight($weight, $height, $width, $length) {
			$volumetricWeight = ($length * $width * $height) / 5000;
			if ($weight > $volumetricWeight) {
				return $weight; 
			} else {
				return $volumetricWeight;
			}
		}
	}








?>
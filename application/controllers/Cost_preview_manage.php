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
			$this->data['fromStateZone'] = $this->state_zone($this->data['frState']);
			
			$weight = $this->input->post("w", true);
			$height = $this->input->post("h", true);
			$width = $this->input->post("wi", true);
			$length = $this->input->post("l", true);
			$this->data['toState'] = $this->state_name($this->data['tState']);
			$this->data['toStateZone'] = $this->state_zone($this->data['tState']);
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
		
		
		
		function state_zone($state) {
			if ($state == "jhr") {
				return "west" ;
		    }
		    else if ($state == "mlk") {
				return "west";
		    }
		    else if ($state == "kdh") {
				return "west";
		    }
		    else if ($state == "ktn") {
				return "west";
	     	}
	    	else if ($state == "nsn") {
				return "west";
		    }
		    else if ($state == "phg") {
				return "west";
	     	}
			else if ($state == "prk") {
				return "west";
			}
			else if ($state == "pls") {
				return "west";
			}
			else if ($state == "png") {
				return "west";
			}
			else if ($state == "sgr") {
				return "west";
			}
			else if ($state == "trg") {
				return "west";
			}
			else if ($state == "kul") {
				return "west";
			}
			else if ($state == "srw") {
				return "east";
			}
			else if ($state == "pjy") {
				return "west";
			}
			else if ($state == "sbh") {
				return "east";
			}
			else if ($state == "lbn") {
				return "east";
			}
		}
		
		function countryCode($country) {
			switch ($country) {
			
			default:
				echo "Your favorite color is neither red, blue, nor green!";
				
			case "AL":
				return "Albania";
				break;
   			case "DZ" : 
				return "Algeria";
				break;
   			case "AS" :
				return "American Samoa";
				break;
			case "AD" :
				return "Andorra";
				break;
    		case "AO" :
				return "Angola";
				break;
   			case "AI" :
				return "Anguilla";
				break;
    		case "AG" :
				return "Antigua";
				break;
   			case "AR" :
				return "Argentina";
				break;
   			case "AM" :
				return "Armenia";
				break;
   			case "AW" :
				return "Aruba";
				break;
   			case "AU" :
				return "Australia";
				break;
    		case "AT" :
				return "Austria";
				break;
   			case "AZ" :
				return "Azerbaijan";
				break;
			case "BS" :
				return "Bahamas";
				break;
			case "BH" :
				return "Bahrain";
				break;
   			case "BD" :
				return "Bangladesh";
				break;
   			case "BB" :
				return "Barbados";
				break;
   			case "BY" : return "Belarus"; break;
   			case "BE" : return "Belgium"; break;
   			case "BZ" :	return "Belize"; break;
   			case "BJ" : return "Benin"; break;
   			case "BM" : return "Bermuda"; break;
   			case "BT" : return "Bhutan"; break;
			case "BO" : return "Bolivia"; break;
   			case "BQ" : return "Bonaire"; break;
   			case "BA" : return "Bosnia And Herzegovina"; break;
   			case "BW" : return "Botswana"; break;
   			case "BR" : return "Brazil"; break;
   			case "BN" : return "Brunei Darus Salam"; break;
   			case "BG" : return "Bulgaria" break;
   			case "BF" >Burkina Faso</option>
   			case "KH" >Cambodia</option>
   			case "CM" >Cameroon</option>
   			case "CA" >Canada</option>
   			case "IC" >Canary Islands, The</option>
   			case "CV" >Cape Verde</option>
   			case "KY" >Cayman Islands</option>
   			case "TD" >Chad</option>
   			case "CL" >Chile</option>
   			case "CN1" >China I</option>
   			
    			case "CN2" >China Ii</option>
   			
    			case "CN" >China</option>
   			
    			case "CO" >Colombia</option>
   			
    			case "KM" >Comoros</option>
   			
    			case "CG" >Congo</option>
   			
    			case "CK" >Cook Islands</option>
   			
    			case "CR" >Costa Rica</option>
   			
    			case "CI" : return "Cote D'ivoire" break;
   			
    			case "HR" >Croatia</option>
   			
    			case "CU" >Cuba</option>
   			
    			case "CW" >Curacao</option>
   			
    			case "CY" >Cyprus</option>
   			
    			case "CZ" >Czech Republic</option>
   			
    			case "DK" >Denmark</option>
   			
    			case "DJ" >Djibouti</option>
   			
    			case "DM" >Dominica</option>
   			
    			case "DO" >Dominican Republic</option>
   			
    			case "TP" >East Timor</option>
   			
    			case "EC" >Ecuador</option>
   			
    			case "EG" >Egypt</option>
   			
    			case "SV" >El Salvador</option>
   			
    			case "GQ" >Equatorial Guinea</option>
   			
    			case "EE" >Estonia</option>
   			
    			case "ET" >Ethiopia</option>
   			
    			case "FK" >Falkland Islands (malvinas)</option>
   			
    			case "FO" >Faroe Islands</option>
   			
    			case "FJ" >Fiji</option>
   			
    			case "FI" >Finland</option>
   			
    			<option value="FR" >France</option>
   			
    			<option value="GF" >French Guiana</option>
   			
    			<option value="GA" >Gabon</option>
   			
    			<option value="GM" >Gambia</option>
   			
    			<option value="GE" >Georgia</option>
   			
    			<option value="DE" >Germany</option>
   			
    			<option value="GH" >Ghana</option>
   			
    			<option value="GI" >Gibraltar</option>
   			
    			<option value="GR" >Greece</option>
   			
    			<option value="GL" >Greenland</option>
   			
    			<option value="GD" >Grenada</option>
   			
    			<option value="GP" >Guadeloupe</option>
   			
    			<option value="GU" >Guam</option>
   			
    			<option value="GT" >Guatemala</option>
   			
    			<option value="GG" >Guernsey</option>
   			
    			<option value="GN" >Guinea Republic</option>
   			
    			<option value="GW" >Guinea Bissau</option>
   			
    			<option value="GY" >Guyana</option>
   			
    			<option value="HT" >Haiti</option>
   			
    			<option value="HN" >Honduras</option>
   			
    			<option value="HK" >Hong Kong</option>
   			
    			<option value="HU" >Hungary</option>
   			
    			<option value="IS" >Iceland</option>
   			
    			<option value="IN" >India</option>
   			
    			<option value="ID" >Indonesia</option>
   			
    			<option value="IE" >Ireland</option>
   			
    			<option value="IL" >Israel</option>
   			
    			<option value="IT" >Italy</option>
   			
    			<option value="JM" >Jamaica</option>
   			
    			<option value="JP" >Japan</option>
   			
    			<option value="JE" >Jersey</option>
   			
    			<option value="JO" >Jordan</option>
   			
    			<option value="KZ" >Kazakhstan</option>
   			
    			<option value="KE" >Kenya</option>
   			
    			<option value="KI" >Kiribati</option>
   			
    			<option value="KR" >South Korea</option>
   			
    			<option value="XK" >Kosovo</option>
   			
    			<option value="KW" >Kuwait</option>
   			
    			<option value="KG" >Kyrgyzstan</option>
   			
    			<option value="LA" >Lao People's Democratic Republic</option>
   			
    			<option value="LV" >Latvia</option>
   			
    			<option value="LB" >Lebanon</option>
   			
    			<option value="LS" >Lesotho</option>
   			
    			<option value="LR" >Liberia</option>
   			
    			<option value="LI" >Liechtenstein</option>
   			
    			<option value="LT" >Lithuania</option>
   			
    			<option value="LU" >Luxembourg</option>
   			
    			<option value="MO" >Macau</option>
   			
    			<option value="MK" >Macedonia, The Former Yugoslav Republic Of</option>
   			
    			<option value="MG" >Madagascar</option>
   			
    			<option value="MW" >Malawi</option>
   			
    			<option value="MV" >Maldives</option>
   			
    			<option value="MT" >Malta</option>
   			
    			<option value="MH" >Marshall Islands</option>
   			
    			<option value="MQ" >Martinique</option>
   			
    			<option value="MR" >Mauritania</option>
   			
    			<option value="MU" >Mauritius</option>
   			
    			<option value="YT" >Mayotte</option>
   			
    			<option value="MX" >Mexico</option>
   			
    			<option value="FM" >Micronesia, Federated States Of</option>
   			
    			<option value="MD" >Moldova, Republic Of</option>
   			
    			<option value="MC" >Monaco</option>
   			
    			<option value="MN" >Mongolia</option>
   			
    			<option value="ME" >Montenegro</option>
   			
    			<option value="MS" >Montserrat</option>
   			
    			<option value="MA" >Morocco</option>
   			
    			<option value="MZ" >Mozambique</option>
   			
    			<option value="MM" >Myanmar</option>
   			
    			<option value="NA" >Namibia</option>
   			
    			<option value="NR" >Nauru</option>
   			
    			<option value="NP" >Nepal</option>
   			
    			<option value="NL" >Netherlands</option>
   			
    			<option value="AN" >Netherlands Antilles</option>
   			
    			<option value="XN" >Nevis</option>
   			
    			<option value="NC" >New Caledonia</option>
   			
    			<option value="NZ" >New Zealand</option>
   			
    			<option value="NI" >Nicaragua</option>
   			
    			<option value="NG" >Nigeria</option>
   			
    			<option value="NU" >Niue</option>
   			
    			<option value="NO" >Norway</option>
   			
    			<option value="OM" >Oman</option>
   			
    			<option value="PK" >Pakistan</option>
   			
    			<option value="PW" >Palau</option>
   			
    			<option value="PA" >Panama</option>
   			
    			<option value="PG" >Papua New Guinea</option>
   			
    			<option value="PY" >Paraguay</option>
   			
    			<option value="PE" >Peru</option>
   			
    			<option value="PH" >Philippines</option>
   			
    			<option value="PL" >Poland</option>
   			
    			<option value="PT" >Portugal</option>
   			
    			<option value="PR" >Puerto Rico</option>
   			
    			<option value="QA" >Qatar</option>
   			
    			<option value="RE" >Reunion</option>
   			
    			<option value="RO" >Romania</option>
   			
    			<option value="RU" >Russian Federation</option>
   			
    			<option value="RW" >Rwanda</option>
   			
    			<option value="MP" >Saipan</option>
   			
    			<option value="WS" >Samoa</option>
   			
    			<option value="SM" >San Marino</option>
   			
    			<option value="ST" >Sao Tome And Principe</option>
   			
    			<option value="SA" >Saudi Arabia</option>
   			
    			<option value="SN" >Senegal</option>
   			
    			<option value="RS" >Serbia</option>
   			
    			<option value="SC" >Seychelles</option>
   			
    			<option value="SL" >Sierra Leone</option>
   			
    			<option value="SG" >Singapore</option>
   			
    			<option value="SK" >Slovakia</option>
   			
    			<option value="SI" >Slovenia</option>
   			
    			<option value="SB" >Solomon Islands</option>
   			
    			<option value="XS" >Somaliland (north Somalia)</option>
   			
    			<option value="ZA" >South Africa</option>
   			
    			<option value="ES" >Spain</option>
   			
    			<option value="LK" >Sri Lanka</option>
   			
    			<option value="BL" >St. Barthelemy</option>
   			
    			<option value="XE" >St. Eustatius</option>
   			
    			<option value="KN" >St. Kitts</option>
   			
    			<option value="LC" >St. Lucia</option>
   			
    			<option value="XM" >St. Maarten</option>
   			
    			<option value="VC" >St. Vincent</option>
   			
    			<option value="SR" >Suriname</option>
   			
    			<option value="SZ" >Swaziland</option>
   			
    			<option value="SE" >Sweden</option>
   			
    			<option value="CH" >Switzerland</option>
   			
    			<option value="PF" >Tahiti</option>
   			
    			<option value="TW-" >Taiwan</option>
   			
    			<option value="TJ" >Tajikistan</option>
   			
    			<option value="TZ" >Tanzania</option>
   			
    			<option value="TH" >Thailand</option>
   			
    			<option value="TG" >Togo</option>
   			
    			<option value="TO" >Tonga</option>
   			
    			<option value="TT" >Trinidad And Tobago</option>
   			
    			<option value="TN" >Tunisia</option>
   			
    			<option value="TR" >Turkey</option>
   			
    			<option value="TM" >Turkmenistan</option>
   			
    			<option value="TC" >Turks And Caicos Islands</option>
   			
    			<option value="TV" >Tuvalu</option>
   			
    			<option value="UG" >Uganda</option>
   			
    			<option value="UA" >Ukraine</option>
   			
    			<option value="AE" >United Arab Emirates</option>
   			
    			<option value="GB" >United Kingdom</option>
   			
    			<option value="US" >United States</option>
   			
    			<option value="UM" >United States Minor Outlying Islands</option>
   			
    			<option value="UY" >Uruguay</option>
   			
    			<option value="UZ" >Uzbekistan</option>
   			
    			<option value="VU" >Vanuatu</option>
   			
    			<option value="VE" >Venezuela</option>
   			
    			<option value="VN" >Vietnam</option>
   			
    			<option value="VG" >Virgin Islands, British</option>
   			
    			<option value="VI" >Virgin Islands, U.s.</option>
   			
    			<option value="ZM" >Zambia</option>
   			
    			<option value="ZW" >Zimbabwe</option>
		}
			
			
			
			
			
			
			
		}


	}
	
	
	






?>
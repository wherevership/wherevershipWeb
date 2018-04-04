<?php
	class Cost_preview_manage extends CI_Controller {
		
		public function costPreview() {
			$this->data['title'] = "Cost Preview For Internatioanl Courier";
			$this->data['frState'] = $this->input->post("c", true);
			$this->data['tCountry'] = $this->input->post("d", true);
			$weight = $this->input->post("w", true);
			$height = $this->input->post("h", true);
			$width = $this->input->post("wi", true);
			$length = $this->input->post("l", true);
			$this->data['fromState'] = $this->state_name($this->data['frState']);
			$this->data['toCountry'] = $this->countryCode($this->data['tCountry']);
			$this->data['toCountryZone'] = $this->countryZone($this->data['tCountry']);
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
			case "AF":
				return "Afghanistan";
				break;
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
   			case "BY" : 
				return "Belarus"; 
				break;
   			case "BE" : 
				return "Belgium";
				break;
   			case "BZ" :	
				return "Belize"; 
				break;
   			case "BJ" : 
				return "Benin"; 
				break;
   			case "BM" : 
				return "Bermuda"; 
				break;
   			case "BT" : 
				return "Bhutan"; 
				break;
			case "BO" : 
				return "Bolivia"; 
				break;
   			case "XB" : 
				return "Bonaire"; 
				break;
   			case "BA" : 
				return "Bosnia And Herzegovina"; 
				break;
   			case "BW" : 
				return "Botswana"; 
				break;
   			case "BR" : 
				return "Brazil"; 
				break;
   			case "BN" : 
				return "Brunei Darus Salam"; 
				break;
   			case "BG" : 
				return "Bulgaria"; 
				break;
   			case "BF" : 
				return "Burkina Faso"; 
				break;
			case "BI" : 
				return "Burundi"; 
				break;
   			case "KH" : 
				return "Cambodia"; 
				break;
   			case "CM" : 
				return "Cameroon"; 
				break;
   			case "CA" : 
				return "Canada"; 
				break;
   			case "IC" : 
				return "Canary Islands, The"; 
				break;
   			case "CV" : 
				return "Cape Verde"; 
				break;
   			case "KY" : 
				return "Cayman Islands"; 
				break;
			case "CF" : 
				return "Central African Rep"; 
				break;
   			case "TD" : 
				return "Chad"; 
				break;
   			case "CL" : 
				return "Chile"; 
				break;
   			case "CN1" : 
				return "China I"; 
				break;
   			case "CN2" : 
				return "China Ii"; 
				break;
   			case "CO" : 
				return "Colombia"; 
				break;
   			case "KM" : 
				return "Comoros"; 
				break;
   			case "CG" : 
				return "Congo"; 
				break;
			case "CD" : 
				return "Congo, DPR"; 
				break;
   			case "CK" : 
				return "Cook Islands"; 
				break;
   			case "CR" : 
				return "Costa Rica"; 
				break;
   			case "CI" : 
				return "Cote D'ivoire"; 
				break;
   			case "HR" : 
				return "Croatia"; 
				break;
   			case "CU" : 
				return "Cuba"; 
				break;
   			case "XC" : 
				return "Curacao"; 
				break;
   			case "CY" : 
				return "Cyprus"; 
				break;
   			case "CZ" : 
				return "Czech Republic"; 
				break;
   			case "DK" : 
				return "Denmark"; 
				break;
   			case "DJ" : 
				return "Djibouti"; 
				break;
   			case "DM" : 
				return "Dominica"; 
				break;
   			case "DO" : 
				return "Dominican Republic"; 
				break;
   			case "TL" : 
				return "East Timor"; 
				break;
   			case "EC" : 
				return "Ecuador"; 
				break;
   			case "EG" : 
				return "Egypt"; 
				break;
   			case "SV" : 
				return "El Salvador"; 
				break;
			case "ER" : 
				return "Eritrea"; 
				break;
   			case "EE" : 
				return "Estonia"; 
				break;
   			case "ET" : 
				return "Ethiopia"; 
				break;
   			case "FK" : 
				return "Falkland Islands (malvinas)";
				break;
   			case "FO" : 
				return "Faroe Islands"; 
				break;
   			case "FJ" : 
				return "Fiji"; 
				break;
   			case "FI" : 
				return "Finland"; 
				break;
   			case "FR" : 
				return "France"; 
				break;
   			case "GF" : return "French Guiana"; break;
   			case "GA" : return "Gabon"; break;
   			case "GM" : return "Gambia"; break;
   			case "GE" : return "Georgia"; break;
   			case "DE" : return "Germany"; break;
   			case "GH" : return "Ghana"; break;
   			case "GI" : return "Gibraltar"; break;
   			case "GR" : return "Greece"; break;
   			case "GL" : return "Greenland"; break;
   			case "GD" : return "Grenada"; break;
   			case "GP" : return "Guadeloupe"; break;
   			case "GU" : return "Guam"; break;
   			case "GT" : return "Guatemala"; break;
   			case "GG" : return "Guernsey"; break;
   			case "GN" : return "Guinea Republic"; break;
   			case "GW" : return "Guinea Bissau"; break;
			case "GQ" : return "Guinea Equatorial"; break;
   			case "GY" : return "Guyana"; break;
   			case "HT" : return "Haiti"; break;
   			case "HN" : return "Honduras"; break;
   			case "HK" : return "Hong Kong"; break;
   			case "HU" : return "Hungary"; break;
   			case "IS" : return "Iceland"; break;
			case "IN" : return "India"; break;
   			case "ID" : return "Indonesia"; break;
			case "IR" : return "Iran"; break;
			case "IQ" : return "Iraq"; break;
   			case "IE" : return "Ireland"; break;
   			case "IL" : return "Israel"; break;
   			case "IT" : return "Italy"; break;
   			case "JM" : return "Jamaica"; break;
   			case "JP" : return "Japan"; break;
   			case "JE" : return "Jersey"; break;
   			case "JO" : return "Jordan"; break;
   			case "KZ" : return "Kazakhstan"; break;
   			case "KE" : return "Kenya"; break;
   			case "KI" : return "Kiribati"; break;
			case "KP" : return "North Korea"; break;
   			case "KR" : return "South Korea"; break;
   			case "KV" : return "Kosovo"; break;
   			case "KW" : return "Kuwait"; break;
   			case "KG" : return "Kyrgyzstan"; break;
   			case "LA" : return "Lao People/'s Democratic Republic"; break;
   			case "LV" : return "Latvia"; break;
			case "LB" : return "Lebanon"; break;
   			case "LS" : return "Lesotho"; break;
   			case "LR" : return "Liberia"; break;
			case "LY" : return "Libya"; break;
   			case "LI" : return "Liechtenstein"; break;
   			case "LT" : return "Lithuania"; break;
   			case "LU" : return "Luxembourg"; break;
   			case "MO" : return "Macau"; break;
   			case "MK" : return "Macedonia, The Former Yugoslav Republic Of"; break;
   			case "MG" : return "Madagascar"; break;
   			case "MW" : return "Malawi"; break;
   			case "MV" : return "Maldives"; break;
			case "ML" : return "Mali"; break;
   			case "MT" : return "Malta"; break;
			case "MP" : return "Mariana Islands"; break;
   			case "MH" : return "Marshall Islands"; break;
   			case "MQ" : return "Martinique"; break;
   			case "MR" : return "Mauritania"; break;
   			case "MU" : return "Mauritius"; break;
   			case "YT" : return "Mayotte"; break;
   			case "MX" : return "Mexico"; break;
   			case "FM" : return "Micronesia, Federated States Of"; break;
   			case "MD" : return "Moldova, Republic Of"; break;
   			case "MC" : return "Monaco"; break;
   			case "MN" : return "Mongolia"; break;
   			case "ME" : return "Montenegro"; break;
   			case "MS" : return "Montserrat"; break;
   			case "MA" : return "Morocco"; break;
   			case "MZ" : return "Mozambique"; break;
   			case "MM" : return "Myanmar"; break;
   			case "NA" : return "Namibia"; break;
   			case "NR" : return "Nauru"; break;
   			case "NP" : return "Nepal"; break;
   			case "NL" : return "Netherlands"; break;
   			case "AN" : return "Netherlands Antilles"; break;
   			case "XN" : return "Nevis"; break;
   			case "NC" : return "New Caledonia"; break;
			case "NZ" : return "New Zealand"; break;
   			case "NI" : return "Nicaragua"; break;
			case "NE" : return "Niger"; break;
   			case "NG" : return "Nigeria"; break;
   			case "NU" : return "Niue"; break;
   			case "NO" : return "Norway"; break;
   			case "OM" : return "Oman"; break;
   			case "PK" : return "Pakistan"; break;
   			case "PW" : return "Palau"; break;
   			case "PA" : return "Panama"; break;
   			case "PG" : return "Papua New Guinea"; break;
   			case "PY" : return "Paraguay"; break;
   			case "PE" : return "Peru"; break;
   			case "PH" : return "Philippines"; break;
			case "PL" : return "Poland"; break;
   			case "PT" : return "Portugal"; break;
   			case "PR" : return "Puerto Rico"; break;
   			case "QA" : return "Qatar"; break;
   			case "RE" : return "Reunion"; break;
   			case "RO" : return "Romania"; break;
   			case "RU" : return "Russian Federation"; break;
   			case "RW" : return "Rwanda"; break;
   			case "SH" : return "Saint Helena"; break;
   			case "WS" : return "Samoa"; break;
   			case "SM" : return "San Marino"; break;
   			case "ST" : return "Sao Tome And Principe"; break;
   			case "SA" : return "Saudi Arabia"; break;
   			case "SN" : return "Senegal"; break;
   			case "RS" : return "Serbia"; break;
   			case "SC" : return "Seychelles"; break;
   			case "SL" : return "Sierra Leone"; break;
   			case "SG" : return "Singapore"; break;
   			case "SK" : return "Slovakia"; break;
   			case "SI" : return "Slovenia"; break;
   			case "SB" : return "Solomon Islands"; break;
			case "SO" : return "Somalia"; break;
   			case "XS" : return "Somaliland (north Somalia)"; break;
   			case "ZA" : return "South Africa"; break;
			case "SS" : return "South Sudan"; break;
   			case "ES" : return "Spain"; break;
   			case "LK" : return "Sri Lanka"; break;
   			case "BL" : return "St. Barthelemy"; break;
   			case "XE" : return "St. Eustatius"; break;
   			case "KN" : return "St. Kitts"; break;
   			case "LC" : return "St. Lucia"; break;
   			case "XM" : return "St. Maarten"; break;
   			case "VC" : return "St. Vincent"; break;
			case "SD" : return "Sudan"; break;
   			case "SR" : return "Suriname"; break;
   			case "SZ" : return "Swaziland"; break;
   			case "SE" : return "Sweden"; break;
   			case "CH" : return "Switzerland"; break;
			case "SY" : return "Syria"; break;
   			case "PF" : return "Tahiti"; break;
   			case "TW" : return "Taiwan"; break;
   			case "TJ" : return "Tajikistan<"; break;
   			case "TZ" : return "Tanzania"; break;
   			case "TH" : return "Thailand"; break;
   			case "TG" : return "Togo"; break;
   			case "TO" : return "Tonga"; break;
   			case "TT" : return "Trinidad And Tobago"; break;
   			case "TN" : return "Tunisia"; break;
   			case "TR" : return "Turkey"; break;
   			case "TM" : return "Turkmenistan"; break;
   			case "TC" : return "Turks And Caicos Islands"; break;
   			case "TV" : return "Tuvalu"; break;
   			case "UG" : return "Uganda"; break;
   			case "UA" : return "Ukraine"; break;
   			case "AE" : return "United Arab Emirates"; break;
   			case "GB" : return "United Kingdom"; break;
   			case "US" : return "United States"; break;
   			case "UM" : return "United States Minor Outlying Islands"; break;
   			case "UY" : return "Uruguay"; break;
   			case "UZ" : return "Uzbekistan"; break;
   			case "VU" : return "Vanuatu"; break;
   			case "VE" : return "Venezuela"; break;
   			case "VN" : return "Vietnam"; break;
   			case "VG" : return "Virgin Islands, British"; break;
   			case "VI" : return "Virgin Islands, U.s."; break;
			case "YE" : return "Yemen, Rep. Of"; break;
   			case "ZM" : return "Zambia"; break;
   			case "ZW" : return "Zimbabwe"; break;
			default:
				return "Malaysia";
		}

			
		}


				function countryZone($country) {
			switch ($country) {
			case "AF":
				return "Zone_8";
				break;
			case "AL":
				return "Zone_7";
				break;
   			case "DZ" : 
				return "Zone_8";
				break;
   			case "AS" :
				return "Zone_8";
				break;
			case "AD" :
				return "Zone_7";
				break;
    		case "AO" :
				return "Zone_8";
				break;
   			case "AI" :
				return "Zone_8";
				break;
    		case "AG" :
				return "Zone_8";
				break;
   			case "AR" :
				return "Zone_8";
				break;
			case "AM" :
				return "Zone_7";
				break;
   			case "AW" :
				return "Zone_8";
				break;
   			case "AU" :
				return "Zone_4";
				break;
    		case "AT" :
				return "Zone_6";
				break;
   			case "AZ" :
				return "Zone_7";
				break;
			case "BS" :
				return "Zone_8";
				break;
			case "BH" :
				return "Zone_7";
				break;
   			case "BD" :
				return "Zone_6";
				break;
   			case "BB" :
				return "Zone_8";
				break;
   			case "BY" : 
				return "Zone_7"; 
				break;
   			case "BE" : 
				return "Zone_6";
				break;
   			case "BZ" :	
				return "Zone_8"; 
				break;
   			case "BJ" : 
				return "Zone_8"; 
				break;
   			case "BM" : 
				return "Zone_8"; 
				break;
   			case "BT" : 
				return "Zone_3"; 
				break;
			case "BO" : 
				return "Zone_8"; 
				break;
   			case "XB" : 
				return "Zone_8"; 
				break;
   			case "BA" : 
				return "Zone_7"; 
				break;
   			case "BW" : 
				return "Zone_8"; 
				break;
   			case "BR" : 
				return "Zone_8"; 
				break;
   			case "BN" : 
				return "Zone_2"; 
				break;
   			case "BG" : 
				return "Zone_7"; 
				break;
   			case "BF" : 
				return "Zone_8"; 
				break;
			case "BI":
				return "Zone_8";
				break;
   			case "KH" : 
				return "Zone_3"; 
				break;
   			case "CM" : 
				return "Zone_8"; 
				break;
   			case "CA" : 
				return "Zone_5"; 
				break;
   			case "IC" : 
				return "Zone_8"; 
				break;
   			case "CV" : 
				return "Zone_8"; 
				break;
   			case "KY" : 
				return "Zone_8"; 
				break;
			case "CF":
				return "Zone_8";
				break;
   			case "TD" : 
				return "Zone_8"; 
				break;
   			case "CL" : 
				return "Zone_7"; 
				break;
   			case "CN1" : 
				return "Zone_2"; 
				break;
   			case "CN2" : 
				return "Zone_3"; 
				break;
   			case "CO" : 
				return "Zone_8"; 
				break;
   			case "KM" : 
				return "Zone_8"; 
				break;
   			case "CG" : 
				return "Zone_8"; 
				break;
			case "CD":
				return "Zone_8";
				break;
   			case "CK" : 
				return "Zone_8"; 
				break;
   			case "CR" : 
				return "Zone_8"; 
				break;
   			case "CI" : 
				return "Zone_8"; 
				break;
   			case "HR" : 
				return "Zone_7"; 
				break;
   			case "CU" : 
				return "Zone_8"; 
				break;
   			case "XC" : 
				return "Zone_8"; 
				break;
   			case "CY" : 
				return "Zone_7"; 
				break;
   			case "CZ" : 
				return "Zone_7"; 
				break;
   			case "DK" : 
				return "Zone_6"; 
				break;
   			case "DJ" : 
				return "Zone_8"; 
				break;
   			case "DM" : 
				return "Zone_8"; 
				break;
   			case "DO" : 
				return "Zone_8"; 
				break;
   			case "TL" : 
				return "Zone_8"; 
				break;
   			case "EC" : 
				return "Zone_8"; 
				break;
   			case "EG" : 
				return "Zone_8"; 
				break;
   			case "SV" : 
				return "Zone_8"; 
				break;
			case "ER":
				return "Zone_8";
				break;
   			case "EE" : 
				return "Zone_7"; 
				break;
   			case "ET" : 
				return "Zone_8"; 
				break;
   			case "FK" : 
				return "Zone_8";
				break;
   			case "FO" : 
				return "Zone_8"; 
				break;
   			case "FJ" : 
				return "Zone_8"; 
				break;
   			case "FI" : 
				return "Zone_6"; 
				break;
   			case "FR" : 
				return "Zone_6"; 
				break;
   			case "GF" : return "Zone_8"; break;
   			case "GA" : return "Zone_8"; break;
   			case "GM" : return "Zone_8"; break;
   			case "GE" : return "Zone_7"; break;
   			case "DE" : return "Zone_6"; break;
   			case "GH" : return "Zone_8"; break;
   			case "GI" : return "Zone_7"; break;
   			case "GR" : return "Zone_7"; break;
   			case "GL" : return "Zone_7"; break;
   			case "GD" : return "Zone_8"; break;
   			case "GP" : return "Zone_8"; break;
   			case "GU" : return "Zone_8"; break;
   			case "GT" : return "Zone_8"; break;
   			case "GG" : return "Zone_7"; break;
   			case "GN" : return "Zone_8"; break;
   			case "GW" : return "Zone_8"; break;
			case "GQ" : return "Zone_8"; break;
   			case "GY" : return "Zone_8"; break;
   			case "HT" : return "Zone_8"; break;
   			case "HN" : return "Zone_8"; break;
   			case "HK" : return "Zone_2"; break;
   			case "HU" : return "Zone_6"; break;
   			case "IS" : return "Zone_7"; break;
			case "IN" : return "Zone_6"; break;
   			case "ID" : return "Zone_2"; break;
			case "IR" : return "Zone_8"; break;
			case "IE" : return "Zone_8"; break;
   			case "IE" : return "Zone_8"; break;
   			case "IL" : return "Zone_8"; break;
   			case "IT" : return "Zone_6"; break;
   			case "JM" : return "Zone_8"; break;
   			case "JP" : return "Zone_4"; break;
   			case "JE" : return "Zone_7"; break;
   			case "JO" : return "Zone_7"; break;
   			case "KZ" : return "Zone_7"; break;
   			case "KE" : return "Zone_8"; break;
   			case "KI" : return "Zone_8"; break;
			case "KP" : return "Zone_8"; break;
   			case "KR" : return "Zone_4"; break;
   			case "KV" : return "Zone_7"; break;
   			case "KW" : return "Zone_7"; break;
   			case "KG" : return "Zone_7"; break;
   			case "LA" : return "Zone_3"; break;
   			case "LV" : return "Zone_7"; break;
			case "LB" : return "Zone_8"; break;
   			case "LS" : return "Zone_8"; break;
   			case "LR" : return "Zone_8"; break;
			case "LY" : return "Zone_8"; break;
   			case "LI" : return "Zone_6"; break;
   			case "LT" : return "Zone_7"; break;
   			case "LU" : return "Zone_6"; break;
   			case "MO" : return "Zone_2"; break;
   			case "MK" : return "Zone_7"; break;
   			case "MG" : return "Zone_8"; break;
   			case "MW" : return "Zone_8"; break;
   			case "MV" : return "Zone_3"; break;
			case "ML" : return "Zone_8"; break;
   			case "MT" : return "Zone_7"; break;
			case "MP" : return "Zone_8"; break;
   			case "MH" : return "Zone_8"; break;
   			case "MQ" : return "Zone_8"; break;
   			case "MR" : return "Zone_8"; break;
   			case "MU" : return "Zone_8"; break;
   			case "YT" : return "Zone_8"; break;
   			case "MX" : return "Zone_5"; break;
   			case "FM" : return "Zone_8"; break;
   			case "MD" : return "Zone_7"; break;
   			case "MC" : return "Zone_6"; break;
   			case "MN" : return "Zone_3"; break;
   			case "ME" : return "Zone_7"; break;
   			case "MS" : return "Zone_8"; break;
   			case "MA" : return "Zone_8"; break;
   			case "MZ" : return "Zone_8"; break;
   			case "MM" : return "Zone_3"; break;
   			case "NA" : return "Zone_8"; break;
   			case "NR" : return "Zone_8"; break;
   			case "NP" : return "Zone_3"; break;
   			case "NL" : return "Zone_6"; break;
   			case "XN" : return "Zone_8"; break;
   			case "NC" : return "Zone_8"; break;
			case "NZ" : return "Zone_4"; break;
   			case "NI" : return "Zone_8"; break;
			case "NE" : return "Zone_8"; break;
   			case "NG" : return "Zone_8"; break;
   			case "NU" : return "Zone_8"; break;
   			case "NO" : return "Zone_6"; break;
   			case "OM" : return "Zone_7"; break;
   			case "PK" : return "Zone_7"; break;
   			case "PW" : return "Zone_8"; break;
   			case "PA" : return "Zone_8"; break;
   			case "PG" : return "Zone_8"; break;
   			case "PY" : return "Zone_8"; break;
   			case "PE" : return "Zone_8"; break;
   			case "PH" : return "Zone_2"; break;
			case "PL" : return "Zone_7"; break;
   			case "PT" : return "Zone_6"; break;
   			case "PR" : return "Zone_8"; break;
   			case "QA" : return "Zone_7"; break;
   			case "RE" : return "Zone_8"; break;
   			case "RO" : return "Zone_7"; break;
   			case "RU" : return "Zone_7"; break;
   			case "RW" : return "Zone_8"; break;
			case "SH" : return "Zone_8"; break;
			case "WS" : return "Zone_8"; break;
   			case "SM" : return "Zone_7"; break;
   			case "ST" : return "Zone_8"; break;
   			case "SA" : return "Zone_7"; break;
   			case "SN" : return "Zone_8"; break;
   			case "RS" : return "Zone_7"; break;
   			case "SC" : return "Zone_8"; break;
   			case "SL" : return "Zone_8"; break;
   			case "SG" : return "Zone_1"; break;
   			case "SK" : return "Zone_7"; break;
   			case "SI" : return "Zone_7"; break;
   			case "SB" : return "Zone_8"; break;
			case "SO" : return "Zone_8"; break;
   			case "XS" : return "Zone_8"; break;
   			case "ZA" : return "Zone_8"; break;
			case "SS" : return "Zone_8"; break;
   			case "ES" : return "Zone_6"; break;
   			case "LK" : return "Zone_3"; break;
   			case "BL" : return "Zone_8"; break;
   			case "XE" : return "Zone_8"; break;
   			case "KN" : return "Zone_8"; break;
   			case "LC" : return "Zone_8"; break;
   			case "XM" : return "Zone_8"; break;
   			case "VC" : return "Zone_8"; break;
			case "SD" : return "Zone_8"; break;
   			case "SR" : return "Zone_8"; break;
   			case "SZ" : return "Zone_8"; break;
   			case "SE" : return "Zone_6"; break;
   			case "CH" : return "Zone_6"; break;
			case "SY" : return "Zone_8"; break;
   			case "PF" : return "Zone_8"; break;
   			case "TW" : return "Zone_2"; break;
   			case "TJ" : return "Zone_7"; break;
   			case "TZ" : return "Zone_8"; break;
   			case "TH" : return "Zone_2"; break;
   			case "TG" : return "Zone_8"; break;
   			case "TO" : return "Zone_8"; break;
   			case "TT" : return "Zone_8"; break;
   			case "TN" : return "Zone_8"; break;
   			case "TR" : return "Zone_7"; break;
   			case "TC" : return "Zone_8"; break;
   			case "TV" : return "Zone_8"; break;
   			case "UG" : return "Zone_8"; break;
   			case "UA" : return "Zone_7"; break;
   			case "AE" : return "Zone_7"; break;
   			case "GB" : return "Zone_6"; break;
   			case "US" : return "Zone_5"; break;
   			case "UY" : return "Zone_8"; break;
   			case "UZ" : return "Zone_7"; break;
   			case "VU" : return "Zone_8"; break;
   			case "VE" : return "Zone_8"; break;
   			case "VN" : return "Zone_3"; break;
   			case "VG" : return "Zone_8"; break;
   			case "VI" : return "Zone_8"; break;
			case "YE" : return "Zone_8"; break;
   			case "ZM" : return "Zone_8"; break;
   			case "ZW" : return "Zone_8"; break;
			default:
				return "Malaysia";
		}

			
		}

		
		
		
		
		
		
		
		}

?>
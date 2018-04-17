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
			$this->data['frPostcode'] = $this->input->post("cp", true);
			$this->data['toPostCode'] = $this->input->post("dp", true);
			$this->data['fromState'] = $this->state_name($this->data['frState']);
			$this->data['toCountry'] = $this->countryCode($this->data['tCountry']);
			$this->data['toCountryZone'] = $this->countryZone($this->data['tCountry']);
			$this->data['weight_f'] = $this->compareWeight($weight, $height, $width, $length);
			$this->data['v_weight'] = ($length * $width * $height) / 5000;
			$this->data['weight'] = $weight;
			$this->data['length'] = $length;
			$this->data['width'] = $width;
			$this->data['height'] = $height;
			$this->data['weightClass'] = $this->detemineInternationalWeight($this->data['weight_f']);
			$this->load->view("frontEnd/header",$this->data);
			$this->load->view("frontEnd/cost_preview", $this->data);
			$this->load->view("frontEnd/footer");
			}
			
		public function dtcCostPreview() {
			$this->data['title'] = "Cost Preview For Domestic Courier";
			$this->data['frState'] = $this->input->post("c", true);
			$this->data['tState'] = $this->input->post("d", true);
			
			$this->data['fromState'] = $this->state_name($this->data['frState']);
			$this->data['fromStateZone'] = $this->location($this->data['frState']);
			
			$weight = $this->input->post("w", true);
			$height = $this->input->post("h", true);
			$width = $this->input->post("wi", true);
			$length = $this->input->post("l", true);
			$this->data['frPostcode'] = $this->input->post("cp", true);
			$this->data['toPostCode'] = $this->input->post("dp", true);
			$this->data['toState'] = $this->state_name($this->data['tState']);
			$this->data['toStateZone'] = $this->location($this->data['tState']);
			$this->data['zone'] = $this->detemineZone($this->data['fromStateZone'],$this->data['toStateZone']);
			$this->data['weight_f'] = $this->compareWeight($weight, $height, $width, $length);
			$this->data['v_weight'] = ($length * $width * $height) / 5000;
			$this->data['weight'] = $weight;
			$this->data['length'] = $length;
			$this->data['width'] = $width;
			$this->data['height'] = $height;
			$this->data['weightClass'] = $this->detemineDemesticWeight($this->data['weight_f']);
			$this->load->view("frontEnd/header", $this->data);
			$this->load->view("frontEnd/dt_cost_preview", $this->data);
			$this->load->view("frontEnd/footer2");
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
		
		
		function detemineZone($fromState,$toState) {
				if ($fromState == "West" && $toState == "West") {
					return "zone2";
				} else if ($fromState == "West" && $toState == "Sarawak") {
					return "zone4";
				} else if ($fromState == "Sarawak" && $toState == "West") {
					return "zone4";
				} else if ($fromState == "West" && $toState == "Sabah") {
					return "zone5";
				} else if ($fromState == "Sabah" && $toState == "West") {
					return "zone5";
				}
			
		}
		
		function detemineDemesticWeight($weight) {
			if ($weight > 0 && $weight <=0.5) {
				return "weight001";
			} else if ($weight > 0.5 && $weight <=0.75) {
				return "weight002";
			} else if ($weight > 0.75 && $weight <=1.0) {
				return "weight003";
			} else if ($weight > 1.0 && $weight <=1.25) {
				return "weight004";
			} else if ($weight > 1.25 && $weight <=1.5) {
				return "weight005";
			} else if ($weight > 1.5 && $weight <=1.75) {
				return "weight006";
			} else if ($weight > 1.75 && $weight <=2.0) {
				return "weight007";
			} else if ($weight > 2.0 && $weight <=2.5) {
				return "weight008";
			} else if ($weight > 2.5 && $weight <=3.0) {
				return "weight009";
			} else if ($weight > 3.0 && $weight <=3.5) {
				return "weight010";
			} else if ($weight >3.5 && $weight <=4.0) {
				return "weight011";
			} else if ($weight >4.0 && $weight <=4.5) {
				return "weight012";
			} else if ($weight >4.5 && $weight <=5.0) {
				return "weight013";
			} 
		}
		
		
		function detemineInternationalWeight($weight) {
			if ($weight > 0 && $weight <=0.5) {
				return "weight001";
			} else if ($weight > 0.5 && $weight <=1.0) {
				return "weight002";
			} else if ($weight > 1.0 && $weight <=1.5) {
				return "weight003";
			} else if ($weight > 1.5 && $weight <=2.0) {
				return "weight004";
			} else if ($weight > 2.0 && $weight <=2.5) {
				return "weight005";
			} else if ($weight > 2.5 && $weight <=3.0) {
				return "weight006";
			} else if ($weight > 3.0 && $weight <=3.5) {
				return "weight007";
			} else if ($weight > 3.5 && $weight <=4.0) {
				return "weight008";
			} else if ($weight > 4.0 && $weight <=4.5) {
				return "weight009";
			} else if ($weight > 4.5 && $weight <=5.0) {
				return "weight010";
			} else if ($weight >5.0 && $weight <=5.5) {
				return "weight011";
			} else if ($weight >5.5 && $weight <=6.0) {
				return "weight012";
			} else if ($weight >6.0 && $weight <=6.5) {
				return "weight013";
			} else if ($weight >6.5 && $weight <=7.0) {
				return "weight014";
			} else if ($weight >7.0 && $weight <=7.5) {
				return "weight015";
			} else if ($weight >7.5 && $weight <=8.0) {
				return "weight016";
			} else if ($weight >8.0 && $weight <=8.5) {
				return "weight017";
			} else if ($weight >8.5 && $weight <=9.0) {
				return "weight018";
			} else if ($weight >9.0 && $weight <=9.5) {
				return "weight019";
			} else if ($weight >9.5 && $weight <=10.0) {
				return "weight020";
			} else if ($weight >10.0 && $weight <=10.5) {
				return "weight021";
			} else if ($weight >10.5 && $weight <=11.0) {
				return "weight022";
			} else if ($weight >11.0 && $weight <=11.5) {
				return "weight023";
			} else if ($weight >11.5 && $weight <=12.0) {
				return "weight024";
			} else if ($weight >12.0 && $weight <=12.5) {
				return "weight025";
			} else if ($weight >12.5 && $weight <=13.0) {
				return "weight026";
			} else if ($weight >13.0 && $weight <=13.5) {
				return "weight027";
			} else if ($weight >13.5 && $weight <=14.0) {
				return "weight028";
			} else if ($weight >14.0 && $weight <=14.5) {
				return "weight029";
			} else if ($weight >14.5 && $weight <=15.0) {
				return "weight030";
			} else if ($weight >15.0 && $weight <=15.5) {
				return "weight031";
			} else if ($weight >15.5 && $weight <=16.0) {
				return "weight032";
			} else if ($weight >16.0 && $weight <=16.5) {
				return "weight033";
			} else if ($weight >16.5 && $weight <=17.0) {
				return "weight034";
			} else if ($weight >17.0 && $weight <=17.5) {
				return "weight035";
			} else if ($weight >17.5 && $weight <=18.0) {
				return "weight036";
			} else if ($weight >18.0 && $weight <=18.5) {
				return "weight037";
			} else if ($weight >18.5 && $weight <=19.0) {
				return "weight038";
			} else if ($weight >19.0 && $weight <=19.5) {
				return "weight039";
			} else if ($weight >19.5 && $weight <=20.0) {
				return "weight040";
			} else if ($weight >20.0 && $weight <=20.5) {
				return "weight041";
			} else if ($weight >20.5 && $weight <=21.0) {
				return "weight042";
			} else if ($weight >21.0 && $weight <=21.5) {
				return "weight043";
			} else if ($weight >21.5 && $weight <=22.0) {
				return "weight044";
			} else if ($weight >22.0 && $weight <=22.5) {
				return "weight045";
			} else if ($weight >22.5 && $weight <=23.0) {
				return "weight046";
			} else if ($weight >23.0 && $weight <=23.5) {
				return "weight047";
			} else if ($weight >23.5 && $weight <=24.0) {
				return "weight048";
			} else if ($weight >24.0 && $weight <=24.5) {
				return "weight049";
			} else if ($weight >24.5 && $weight <=25.0) {
				return "weight050";
			} else if ($weight >25.0 && $weight <=25.5) {
				return "weight051";
			} else if ($weight >25.5 && $weight <=26.0) {
				return "weight052";
			} else if ($weight >26.0 && $weight <=26.5) {
				return "weight053";
			} else if ($weight >26.5 && $weight <=27.0) {
				return "weight054";
			} else if ($weight >27.0 && $weight <=27.5) {
				return "weight055";
			} else if ($weight >27.5 && $weight <=28.0) {
				return "weight056";
			} else if ($weight >28.0 && $weight <=28.5) {
				return "weight057";
			} else if ($weight >28.5 && $weight <=29.0) {
				return "weight058";
			} else if ($weight >29.0 && $weight <=29.5) {
				return "weight059";
			} else if ($weight >29.5 && $weight <=30.0) {
				return "weight060";
			} 
		}
		
		function location($state) {
			if ($state == "jhr") {
				return "West" ;
		    }
		    else if ($state == "mlk") {
				return "West";
		    }
		    else if ($state == "kdh") {
				return "West";
		    }
		    else if ($state == "ktn") {
				return "West";
	     	}
	    	else if ($state == "nsn") {
				return "West";
		    }
		    else if ($state == "phg") {
				return "West";
	     	}
			else if ($state == "prk") {
				return "West";
			}
			else if ($state == "pls") {
				return "West";
			}
			else if ($state == "png") {
				return "West";
			}
			else if ($state == "sgr") {
				return "West";
			}
			else if ($state == "trg") {
				return "West";
			}
			else if ($state == "kul") {
				return "West";
			}
			else if ($state == "srw") {
				return "Sarawak";
			}
			else if ($state == "pjy") {
				return "West";
			}
			else if ($state == "sbh") {
				return "Sabah";
			}
			else if ($state == "lbn") {
				return "Sabah";
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
				return "zone8";
				break;
			case "AL":
				return "zone7";
				break;
   			case "DZ" : 
				return "zone8";
				break;
   			case "AS" :
				return "zone8";
				break;
			case "AD" :
				return "zone7";
				break;
    		case "AO" :
				return "zone8";
				break;
   			case "AI" :
				return "zone8";
				break;
    		case "AG" :
				return "zone8";
				break;
   			case "AR" :
				return "zone8";
				break;
			case "AM" :
				return "zone7";
				break;
   			case "AW" :
				return "zone8";
				break;
   			case "AU" :
				return "zone4";
				break;
    		case "AT" :
				return "zone6";
				break;
   			case "AZ" :
				return "zone7";
				break;
			case "BS" :
				return "zone8";
				break;
			case "BH" :
				return "zone7";
				break;
   			case "BD" :
				return "zone6";
				break;
   			case "BB" :
				return "zone8";
				break;
   			case "BY" : 
				return "zone7"; 
				break;
   			case "BE" : 
				return "zone6";
				break;
   			case "BZ" :	
				return "zone8"; 
				break;
   			case "BJ" : 
				return "zone8"; 
				break;
   			case "BM" : 
				return "zone8"; 
				break;
   			case "BT" : 
				return "zone3"; 
				break;
			case "BO" : 
				return "zone8"; 
				break;
   			case "XB" : 
				return "zone8"; 
				break;
   			case "BA" : 
				return "zone7"; 
				break;
   			case "BW" : 
				return "zone8"; 
				break;
   			case "BR" : 
				return "zone8"; 
				break;
   			case "BN" : 
				return "zone2"; 
				break;
   			case "BG" : 
				return "zone7"; 
				break;
   			case "BF" : 
				return "zone8"; 
				break;
			case "BI":
				return "zone8";
				break;
   			case "KH" : 
				return "zone3"; 
				break;
   			case "CM" : 
				return "zone8"; 
				break;
   			case "CA" : 
				return "zone5"; 
				break;
   			case "IC" : 
				return "zone8"; 
				break;
   			case "CV" : 
				return "zone8"; 
				break;
   			case "KY" : 
				return "zone8"; 
				break;
			case "CF":
				return "zone8";
				break;
   			case "TD" : 
				return "zone8"; 
				break;
   			case "CL" : 
				return "zone7"; 
				break;
   			case "CN1" : 
				return "zone2"; 
				break;
   			case "CN2" : 
				return "zone3"; 
				break;
   			case "CO" : 
				return "zone8"; 
				break;
   			case "KM" : 
				return "zone8"; 
				break;
   			case "CG" : 
				return "zone8"; 
				break;
			case "CD":
				return "zone8";
				break;
   			case "CK" : 
				return "zone8"; 
				break;
   			case "CR" : 
				return "zone8"; 
				break;
   			case "CI" : 
				return "zone8"; 
				break;
   			case "HR" : 
				return "zone7"; 
				break;
   			case "CU" : 
				return "zone8"; 
				break;
   			case "XC" : 
				return "zone8"; 
				break;
   			case "CY" : 
				return "zone7"; 
				break;
   			case "CZ" : 
				return "zone7"; 
				break;
   			case "DK" : 
				return "zone6"; 
				break;
   			case "DJ" : 
				return "zone8"; 
				break;
   			case "DM" : 
				return "zone8"; 
				break;
   			case "DO" : 
				return "zone8"; 
				break;
   			case "TL" : 
				return "zone8"; 
				break;
   			case "EC" : 
				return "zone8"; 
				break;
   			case "EG" : 
				return "zone8"; 
				break;
   			case "SV" : 
				return "zone8"; 
				break;
			case "ER":
				return "zone8";
				break;
   			case "EE" : 
				return "zone7"; 
				break;
   			case "ET" : 
				return "zone8"; 
				break;
   			case "FK" : 
				return "zone8";
				break;
   			case "FO" : 
				return "zone8"; 
				break;
   			case "FJ" : 
				return "zone8"; 
				break;
   			case "FI" : 
				return "zone6"; 
				break;
   			case "FR" : 
				return "zone6"; 
				break;
   			case "GF" : return "zone8"; break;
   			case "GA" : return "zone8"; break;
   			case "GM" : return "zone8"; break;
   			case "GE" : return "zone7"; break;
   			case "DE" : return "zone6"; break;
   			case "GH" : return "zone8"; break;
   			case "GI" : return "zone7"; break;
   			case "GR" : return "zone7"; break;
   			case "GL" : return "zone7"; break;
   			case "GD" : return "zone8"; break;
   			case "GP" : return "zone8"; break;
   			case "GU" : return "zone8"; break;
   			case "GT" : return "zone8"; break;
   			case "GG" : return "zone7"; break;
   			case "GN" : return "zone8"; break;
   			case "GW" : return "zone8"; break;
			case "GQ" : return "zone8"; break;
   			case "GY" : return "zone8"; break;
   			case "HT" : return "zone8"; break;
   			case "HN" : return "zone8"; break;
   			case "HK" : return "zone2"; break;
   			case "HU" : return "zone6"; break;
   			case "IS" : return "zone7"; break;
			case "IN" : return "zone6"; break;
   			case "ID" : return "zone2"; break;
			case "IR" : return "zone8"; break;
			case "IE" : return "zone8"; break;
   			case "IE" : return "zone8"; break;
   			case "IL" : return "zone8"; break;
   			case "IT" : return "zone6"; break;
   			case "JM" : return "zone8"; break;
   			case "JP" : return "zone4"; break;
   			case "JE" : return "zone7"; break;
   			case "JO" : return "zone7"; break;
   			case "KZ" : return "zone7"; break;
   			case "KE" : return "zone8"; break;
   			case "KI" : return "zone8"; break;
			case "KP" : return "zone8"; break;
   			case "KR" : return "zone4"; break;
   			case "KV" : return "zone7"; break;
   			case "KW" : return "zone7"; break;
   			case "KG" : return "zone7"; break;
   			case "LA" : return "zone3"; break;
   			case "LV" : return "zone7"; break;
			case "LB" : return "zone8"; break;
   			case "LS" : return "zone8"; break;
   			case "LR" : return "zone8"; break;
			case "LY" : return "zone8"; break;
   			case "LI" : return "zone6"; break;
   			case "LT" : return "zone7"; break;
   			case "LU" : return "zone6"; break;
   			case "MO" : return "zone2"; break;
   			case "MK" : return "zone7"; break;
   			case "MG" : return "zone8"; break;
   			case "MW" : return "zone8"; break;
   			case "MV" : return "zone3"; break;
			case "ML" : return "zone8"; break;
   			case "MT" : return "zone7"; break;
			case "MP" : return "zone8"; break;
   			case "MH" : return "zone8"; break;
   			case "MQ" : return "zone8"; break;
   			case "MR" : return "zone8"; break;
   			case "MU" : return "zone8"; break;
   			case "YT" : return "zone8"; break;
   			case "MX" : return "zone5"; break;
   			case "FM" : return "zone8"; break;
   			case "MD" : return "zone7"; break;
   			case "MC" : return "zone6"; break;
   			case "MN" : return "zone3"; break;
   			case "ME" : return "zone7"; break;
   			case "MS" : return "zone8"; break;
   			case "MA" : return "zone8"; break;
   			case "MZ" : return "zone8"; break;
   			case "MM" : return "zone3"; break;
   			case "NA" : return "zone8"; break;
   			case "NR" : return "zone8"; break;
   			case "NP" : return "zone3"; break;
   			case "NL" : return "zone6"; break;
   			case "XN" : return "zone8"; break;
   			case "NC" : return "zone8"; break;
			case "NZ" : return "zone4"; break;
   			case "NI" : return "zone8"; break;
			case "NE" : return "zone8"; break;
   			case "NG" : return "zone8"; break;
   			case "NU" : return "zone8"; break;
   			case "NO" : return "zone6"; break;
   			case "OM" : return "zone7"; break;
   			case "PK" : return "zone7"; break;
   			case "PW" : return "zone8"; break;
   			case "PA" : return "zone8"; break;
   			case "PG" : return "zone8"; break;
   			case "PY" : return "zone8"; break;
   			case "PE" : return "zone8"; break;
   			case "PH" : return "zone2"; break;
			case "PL" : return "zone7"; break;
   			case "PT" : return "zone6"; break;
   			case "PR" : return "zone8"; break;
   			case "QA" : return "zone7"; break;
   			case "RE" : return "zone8"; break;
   			case "RO" : return "zone7"; break;
   			case "RU" : return "zone7"; break;
   			case "RW" : return "zone8"; break;
			case "SH" : return "zone8"; break;
			case "WS" : return "zone8"; break;
   			case "SM" : return "zone7"; break;
   			case "ST" : return "zone8"; break;
   			case "SA" : return "zone7"; break;
   			case "SN" : return "zone8"; break;
   			case "RS" : return "zone7"; break;
   			case "SC" : return "zone8"; break;
   			case "SL" : return "zone8"; break;
   			case "SG" : return "zone1"; break;
   			case "SK" : return "zone7"; break;
   			case "SI" : return "zone7"; break;
   			case "SB" : return "zone8"; break;
			case "SO" : return "zone8"; break;
   			case "XS" : return "zone8"; break;
   			case "ZA" : return "zone8"; break;
			case "SS" : return "zone8"; break;
   			case "ES" : return "zone6"; break;
   			case "LK" : return "zone3"; break;
   			case "BL" : return "zone8"; break;
   			case "XE" : return "zone8"; break;
   			case "KN" : return "zone8"; break;
   			case "LC" : return "zone8"; break;
   			case "XM" : return "zone8"; break;
   			case "VC" : return "zone8"; break;
			case "SD" : return "zone8"; break;
   			case "SR" : return "zone8"; break;
   			case "SZ" : return "zone8"; break;
   			case "SE" : return "zone6"; break;
   			case "CH" : return "zone6"; break;
			case "SY" : return "zone8"; break;
   			case "PF" : return "zone8"; break;
   			case "TW" : return "zone2"; break;
   			case "TJ" : return "zone7"; break;
   			case "TZ" : return "zone8"; break;
   			case "TH" : return "zone2"; break;
   			case "TG" : return "zone8"; break;
   			case "TO" : return "zone8"; break;
   			case "TT" : return "zone8"; break;
   			case "TN" : return "zone8"; break;
   			case "TR" : return "zone7"; break;
   			case "TC" : return "zone8"; break;
   			case "TV" : return "zone8"; break;
   			case "UG" : return "zone8"; break;
   			case "UA" : return "zone7"; break;
   			case "AE" : return "zone7"; break;
   			case "GB" : return "zone6"; break;
   			case "US" : return "zone5"; break;
   			case "UY" : return "zone8"; break;
   			case "UZ" : return "zone7"; break;
   			case "VU" : return "zone8"; break;
   			case "VE" : return "zone8"; break;
   			case "VN" : return "zone3"; break;
   			case "VG" : return "zone8"; break;
   			case "VI" : return "zone8"; break;
			case "YE" : return "zone8"; break;
   			case "ZM" : return "zone8"; break;
   			case "ZW" : return "zone8"; break;
			default:
				return "Malaysia";
		}

			
		}

		
		
		
		
		
		
		
		}

?>
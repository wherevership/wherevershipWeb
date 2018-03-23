<div id="masterContent" >
	<section class="quotebook">
<div class="container space">
<div class="row">
	<div class="col-md-6 hidden-sm hidden-xs" style="height: 292px;"><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/book.jpg" style="text-align: center; width: 100%; bottom: 0px; height: 100%;"></div>
	<div class="col-md-6">
	   <style>
.qnb-wrapped .nav-tabs>li>a {
    margin-right: 5px;
}
.qnb-wrapped .nav-tabs>li>a.domestic-tab, .qnb-wrapped .nav-tabs>li.active>a.domestic-tab, .qnb-wrapped .nav-tabs>li.active>a:focus.domestic-tab, .qnb-wrapped .nav-tabs>li.active>a.domestic-tab:hover {
	background-color: #00878c !important;
    border: 1px solid #00878c !important;
	border-bottom-color: transparent;
    color: #fff;
}
.qnb-wrapped .nav-tabs>li>a.international-tab, .qnb-wrapped .nav-tabs>li.active>a.international-tab, .qnb-wrapped .nav-tabs>li.active>a:focus.international-tab, .qnb-wrapped .nav-tabs>li.active>a.international-tab:hover {
	background-color: #5cb85c;
    border: 1px solid #5cb85c;
	border-bottom-color: transparent; 
    color: #fff;
}
.qnb-wrapped .nav > li > a.domestic-tab:hover, .qnb-wrapped .nav .open>a.domestic-tab:hover {
    background-color: #00878c !important;
    color: #fff;
    border-color: #00878c !important;
	border-bottom: 1px solid #FFF;
}
.qnb-wrapped .nav > li > a.international-tab:hover, .qnb-wrapped .nav .open>a.international-tab:hover {
    background-color: #5cb85c;
    color: #fff;
    border-color: #5cb85c;
	border-bottom: 1px solid #FFF;
}
.qnb-wrapped .nav-tabs {border-bottom: 1px solid #FFF;}
.quote-book.international-body {
	background-color: #5cb85c;
}
span.tip {
	position: absolute;
    top: -10px;
    left: 32px;
    font-size: 10px;
    color: #fff;
    background-color: #5cb85c;
    padding: 2px 5px;
}
.Pgeon_hr {border-color: rgba(255, 255, 255, 0.3); margin: 10px auto;}
</style>
<div class="row"  id="dropbox">
  <div class="qnb-wrapped">
  <!-- Nav tabs --> 
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a class="domestic-tab" href="#domestic" aria-controls="home" role="tab" data-toggle="tab"><strong>DOMESTIC</strong></a></li>
    
	<li role="presentation" class=""><a class="international-tab" href="#international" aria-controls="profile" role="tab" data-toggle="tab"><strong>INTERNATIONAL</strong></a></li>
    
	
	</ul>
	</div>
 

  <!-- Tab panes -->
  <div class="tab-content">

<div role="tabpanel" class="tab-pane active clearfix QuickQuote domestic" style="z-index:999999;padding:0px"  id="domestic">
   
  <div class="container-fluid quote-book domestic-body"> 
    <form method="POST" onsubmit="return checkaddress()" action="<?=base_url('dtc_cost_preview')?>">
	<div class="col-xs-12">
		<h2>Get Instant Quotes</h2>
	</div>
	
	<div class="col-xs-6 col-sm-6 dropbox-body padding-right-off" id="domestic">
		<h5>FROM:</h5>
		<select  required class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="c"  name="c" onChange="quote.CollAddrChange(this)" txt_c_state>
		<option value="" readonly>State</option>
		
		<option value="jhr" >Johor</option>
		
		<option value="kdh" >Kedah</option>
		
		<option value="ktn" >Kelantan</option>
		
		<option value="mlk" >Melaka</option>
		
		<option value="nsn" >Negeri Sembilan</option>
		
		<option value="phg" >Pahang</option>
		
		<option value="pkr" >Perak</option>
		
		<option value="pls" >Perlis</option>
		
		<option value="png" >Pulau Pinang</option>
		
		<option value="sgr" >Selangor</option>
		
		<option value="trg" >Terengganu</option>
			
		<option value="kul" >Kuala Lumpur</option>
			
		<option value="pjy" >Putra Jaya</option>
			
		<option value="srw" >Sarawak</option>
			
		<option value="sbh" >Sabah</option>
			
		<option value="lbn" >Labuan</option>
		
		</select>
	</div>
	
	
	
      <div class="col-xs-6 col-sm-6 dropbox-body padding-right-off" id="domestic">
	
	<h5>TO:</h5>
	
	
		<select required class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="d" name="d" onChange="quote.CollAddrChange(this)" txt_d_state>
			<option value="" readonly>State</option>
			
			<option value="jhr" >Johor</option>
			
			<option value="kdh" >Kedah</option>
			
			<option value="ktn" >Kelantan</option>
			
			<option value="mlk" >Melaka</option>
			
			<option value="nsn" >Negeri Sembilan</option>
			
			<option value="phg" >Pahang</option>
			
			<option value="prk" >Perak</option>
			
			<option value="pls" >Perlis</option>
			
			<option value="png" >Pulau Pinang</option>
			
			<option value="sgr" >Selangor</option>
			
			<option value="trg" >Terengganu</option>
			
			<option value="kul" >Kuala Lumpur</option>
			
			<option value="pjy" >Putra Jaya</option>
			
			<option value="srw" >Sarawak</option>
			
			<option value="sbh" >Sabah</option>
			
			<option value="lbn" >Labuan</option>
			
		</select>
	</div>
	
	<div class="col-xs-4 col-sm-4 padding-right-off">
		<h5>ENTER HEIGHT:</h5>
		<input type="text" class="form-control required digits" name="h" id="height" required placeholder="cm (Eg: 1)"  title="Please enter the height" value="" onkeypress="return isNumberKey(event)"/>
	</div>
	
	<div class="col-xs-4 col-sm-4 padding-right-off">
		<h5>ENTER WIDTH:</h5>
		<input type="text" class="form-control required digits" name="wi" id="width" required placeholder="cm (Eg: 1)"  title="Please enter the height" value="" onkeypress="return isNumberKey(event)"/>
	</div>
	
	<div class="col-xs-4 col-sm-4">
		<h5>ENTER LENGTH:</h5>
		<input type="text" class="form-control required digits" name="l" id="length" required placeholder="cm (Eg: 1)"  title="Please enter the height" value="" onkeypress="return isNumberKey(event)"/>
	</div>
	
	<div class="col-xs-12">
	<h5>ENTER WEIGHT:</h5>
	</div>
	<div class="col-xs-4 col-sm-5 padding-right-off">
	  <input type="text" class="form-control required digits" name="w" id="weight" required placeholder="KG (Eg: 0.01)"  title="Please enter the weight" value="" onkeypress="return isNumberKey(event)"/>
	</div>
	<div class="col-xs-1 padding-off" >
		<button type="button" class="btn btn-default pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Volumetric Calculator" onclick="window.open('<?=base_url("volumetricCalcualator")?>', '_blank', 'directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,resizable=0,width=600, height=400')"><i class="fas fa-calculator"></i></button>
	</div>
	<div class="col-xs-7 col-sm-6">
		<button class="btn btn-primary" name="submit" type="submit" value="Quote "id="submit">Quote &amp; Book</button>
	</div>
    </form>
	  <div class="clearfix"></div>
	  
  </div>
</div>
<!--domestic tab finish-->

<!--international tab start-->
<div role="tabpanel" class="tab-pane   clearfix QuickQuote international" style="z-index:999999;padding:0px"  id="international">
  <div class="container-fluid quote-book international-body"> 
    <form method="POST" onsubmit="return checkaddressint()" action="<?=base_url('cost_preview')?>">
	<div class="col-xs-12">
		<h2>Get Instant Quotes</h2>
		
	</div>
	<div class="col-xs-6 col-sm-6 dropbox-body padding-right-off" id="domestic">
		<h5>FROM:</h5>
	
	
		<select   class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="ic"  name="c"  txt_ic_state>
		<option value="" readonly>State</option>
		
			<option value="jhr" >Johor</option>
		
			<option value="kdh" >Kedah</option>
		
			<option value="ktn" >Kelantan</option>
		
			<option value="mlk" >Melaka</option>
		
			<option value="nsn" >Negeri Sembilan</option>
		
			<option value="phg" >Pahang</option>
		
			<option value="prk" >Perak</option>
		
			<option value="pls" >Perlis</option>
		
			<option value="png" >Pulau Pinang</option>
		
			<option value="sgr" >Selangor</option>
		
			<option value="trg" >Terengganu</option>
		
			<option value="kul" >Kuala Lumpur</option>
		
			<option value="pjy" >Putra Jaya</option>
		
			<option value="srw" >Sarawak</option>
		
			<option value="sbh" >Sabah</option>
		
			<option value="lbn" >Labuan</option>
		
		</select>
	</div>
	
	<div class="col-xs-6 col-sm-6 dropbox-body padding-right-off" id="domestic">
	<h5>TO:</h5>
	
		<select required class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="d" name="d" onChange="quote.CollAddrChange(this)" txt_id_state>
			 <option value="" readonly>Country</option>
 			 <o
    			<option value="AL-INT" >Albania</option>
   			
    			<option value="DZ-INT" >Algeria</option>
   			
    			<option value="AS-INT" >American Samoa</option>
   			
    			<option value="AD-INT" >Andorra</option>
   			
    			<option value="AO-INT" >Angola</option>
   			
    			<option value="AI-INT" >Anguilla</option>
   			
    			<option value="AG-INT" >Antigua</option>
   			
    			<option value="AR-INT" >Argentina</option>
   			
    			<option value="AM-INT" >Armenia</option>
   			
    			<option value="AW-INT" >Aruba</option>
   			
    			<option value="AU-INT" >Australia</option>
   			
    			<option value="AT-INT" >Austria</option>
   			
    			<option value="AZ-INT" >Azerbaijan</option>
   			
    			<option value="BS-INT" >Bahamas</option>
   			
    			<option value="BH-INT" >Bahrain</option>
   			
    			<option value="BD-INT" >Bangladesh</option>
   			
    			<option value="BB-INT" >Barbados</option>
   			
    			<option value="BY-INT" >Belarus</option>
   			
    			<option value="BE-INT" >Belgium</option>
   			
    			<option value="BZ-INT" >Belize</option>
   			
    			<option value="BJ-INT" >Benin</option>
   			
    			<option value="BM-INT" >Bermuda</option>
   			
    			<option value="BT-INT" >Bhutan</option>
   			
    			<option value="BO-INT" >Bolivia</option>
   			
    			<option value="BQ-INT" >Bonaire</option>
   			
    			<option value="BA-INT" >Bosnia And Herzegovina</option>
   			
    			<option value="BW-INT" >Botswana</option>
   			
    			<option value="BR-INT" >Brazil</option>
   			
    			<option value="BN-INT" >Brunei Darussalam</option>
   			
    			<option value="BG-INT" >Bulgaria</option>
   			
    			<option value="BF-INT" >Burkina Faso</option>
   			
    			<option value="KH-INT" >Cambodia</option>
   			
    			<option value="CM-INT" >Cameroon</option>
   			
    			<option value="CA-INT" >Canada</option>
   			
    			<option value="IC-INT" >Canary Islands, The</option>
   			
    			<option value="CV-INT" >Cape Verde</option>
   			
    			<option value="KY-INT" >Cayman Islands</option>
   			
    			<option value="TD-INT" >Chad</option>
   			
    			<option value="CL-INT" >Chile</option>
   			
    			<option value="CN1-INT" >China I</option>
   			
    			<option value="CN2-INT" >China Ii</option>
   			
    			<option value="CN-INT" >China</option>
   			
    			<option value="CO-INT" >Colombia</option>
   			
    			<option value="KM-INT" >Comoros</option>
   			
    			<option value="CG-INT" >Congo</option>
   			
    			<option value="CK-INT" >Cook Islands</option>
   			
    			<option value="CR-INT" >Costa Rica</option>
   			
    			<option value="CI-INT" >Cote D'ivoire</option>
   			
    			<option value="HR-INT" >Croatia</option>
   			
    			<option value="CU-INT" >Cuba</option>
   			
    			<option value="CW-INT" >Curacao</option>
   			
    			<option value="CY-INT" >Cyprus</option>
   			
    			<option value="CZ-INT" >Czech Republic</option>
   			
    			<option value="DK-INT" >Denmark</option>
   			
    			<option value="DJ-INT" >Djibouti</option>
   			
    			<option value="DM-INT" >Dominica</option>
   			
    			<option value="DO-INT" >Dominican Republic</option>
   			
    			<option value="TP-INT" >East Timor</option>
   			
    			<option value="EC-INT" >Ecuador</option>
   			
    			<option value="EG-INT" >Egypt</option>
   			
    			<option value="SV-INT" >El Salvador</option>
   			
    			<option value="GQ-INT" >Equatorial Guinea</option>
   			
    			<option value="EE-INT" >Estonia</option>
   			
    			<option value="ET-INT" >Ethiopia</option>
   			
    			<option value="FK-INT" >Falkland Islands (malvinas)</option>
   			
    			<option value="FO-INT" >Faroe Islands</option>
   			
    			<option value="FJ-INT" >Fiji</option>
   			
    			<option value="FI-INT" >Finland</option>
   			
    			<option value="FR-INT" >France</option>
   			
    			<option value="GF-INT" >French Guiana</option>
   			
    			<option value="GA-INT" >Gabon</option>
   			
    			<option value="GM-INT" >Gambia</option>
   			
    			<option value="GE-INT" >Georgia</option>
   			
    			<option value="DE-INT" >Germany</option>
   			
    			<option value="GH-INT" >Ghana</option>
   			
    			<option value="GI-INT" >Gibraltar</option>
   			
    			<option value="GR-INT" >Greece</option>
   			
    			<option value="GL-INT" >Greenland</option>
   			
    			<option value="GD-INT" >Grenada</option>
   			
    			<option value="GP-INT" >Guadeloupe</option>
   			
    			<option value="GU-INT" >Guam</option>
   			
    			<option value="GT-INT" >Guatemala</option>
   			
    			<option value="GG-INT" >Guernsey</option>
   			
    			<option value="GN-INT" >Guinea Republic</option>
   			
    			<option value="GW-INT" >Guinea Bissau</option>
   			
    			<option value="GY-INT" >Guyana</option>
   			
    			<option value="HT-INT" >Haiti</option>
   			
    			<option value="HN-INT" >Honduras</option>
   			
    			<option value="HK-INT" >Hong Kong</option>
   			
    			<option value="HU-INT" >Hungary</option>
   			
    			<option value="IS-INT" >Iceland</option>
   			
    			<option value="IN-INT" >India</option>
   			
    			<option value="ID-INT" >Indonesia</option>
   			
    			<option value="IE-INT" >Ireland</option>
   			
    			<option value="IL-INT" >Israel</option>
   			
    			<option value="IT-INT" >Italy</option>
   			
    			<option value="JM-INT" >Jamaica</option>
   			
    			<option value="JP-INT" >Japan</option>
   			
    			<option value="JE-INT" >Jersey</option>
   			
    			<option value="JO-INT" >Jordan</option>
   			
    			<option value="KZ-INT" >Kazakhstan</option>
   			
    			<option value="KE-INT" >Kenya</option>
   			
    			<option value="KI-INT" >Kiribati</option>
   			
    			<option value="KR-INT" >South Korea</option>
   			
    			<option value="XK-INT" >Kosovo</option>
   			
    			<option value="KW-INT" >Kuwait</option>
   			
    			<option value="KG-INT" >Kyrgyzstan</option>
   			
    			<option value="LA-INT" >Lao People's Democratic Republic</option>
   			
    			<option value="LV-INT" >Latvia</option>
   			
    			<option value="LB-INT" >Lebanon</option>
   			
    			<option value="LS-INT" >Lesotho</option>
   			
    			<option value="LR-INT" >Liberia</option>
   			
    			<option value="LI-INT" >Liechtenstein</option>
   			
    			<option value="LT-INT" >Lithuania</option>
   			
    			<option value="LU-INT" >Luxembourg</option>
   			
    			<option value="MO-INT" >Macau</option>
   			
    			<option value="MK-INT" >Macedonia, The Former Yugoslav Republic Of</option>
   			
    			<option value="MG-INT" >Madagascar</option>
   			
    			<option value="MW-INT" >Malawi</option>
   			
    			<option value="MV-INT" >Maldives</option>
   			
    			<option value="MT-INT" >Malta</option>
   			
    			<option value="MH-INT" >Marshall Islands</option>
   			
    			<option value="MQ-INT" >Martinique</option>
   			
    			<option value="MR-INT" >Mauritania</option>
   			
    			<option value="MU-INT" >Mauritius</option>
   			
    			<option value="YT-INT" >Mayotte</option>
   			
    			<option value="MX-INT" >Mexico</option>
   			
    			<option value="FM-INT" >Micronesia, Federated States Of</option>
   			
    			<option value="MD-INT" >Moldova, Republic Of</option>
   			
    			<option value="MC-INT" >Monaco</option>
   			
    			<option value="MN-INT" >Mongolia</option>
   			
    			<option value="ME-INT" >Montenegro</option>
   			
    			<option value="MS-INT" >Montserrat</option>
   			
    			<option value="MA-INT" >Morocco</option>
   			
    			<option value="MZ-INT" >Mozambique</option>
   			
    			<option value="MM-INT" >Myanmar</option>
   			
    			<option value="NA-INT" >Namibia</option>
   			
    			<option value="NR-INT" >Nauru</option>
   			
    			<option value="NP-INT" >Nepal</option>
   			
    			<option value="NL-INT" >Netherlands</option>
   			
    			<option value="AN-INT" >Netherlands Antilles</option>
   			
    			<option value="XN-INT" >Nevis</option>
   			
    			<option value="NC-INT" >New Caledonia</option>
   			
    			<option value="NZ-INT" >New Zealand</option>
   			
    			<option value="NI-INT" >Nicaragua</option>
   			
    			<option value="NG-INT" >Nigeria</option>
   			
    			<option value="NU-INT" >Niue</option>
   			
    			<option value="NO-INT" >Norway</option>
   			
    			<option value="OM-INT" >Oman</option>
   			
    			<option value="PK-INT" >Pakistan</option>
   			
    			<option value="PW-INT" >Palau</option>
   			
    			<option value="PA-INT" >Panama</option>
   			
    			<option value="PG-INT" >Papua New Guinea</option>
   			
    			<option value="PY-INT" >Paraguay</option>
   			
    			<option value="PE-INT" >Peru</option>
   			
    			<option value="PH-INT" >Philippines</option>
   			
    			<option value="PL-INT" >Poland</option>
   			
    			<option value="PT-INT" >Portugal</option>
   			
    			<option value="PR-INT" >Puerto Rico</option>
   			
    			<option value="QA-INT" >Qatar</option>
   			
    			<option value="RE-INT" >Reunion</option>
   			
    			<option value="RO-INT" >Romania</option>
   			
    			<option value="RU-INT" >Russian Federation</option>
   			
    			<option value="RW-INT" >Rwanda</option>
   			
    			<option value="MP-INT" >Saipan</option>
   			
    			<option value="WS-INT" >Samoa</option>
   			
    			<option value="SM-INT" >San Marino</option>
   			
    			<option value="ST-INT" >Sao Tome And Principe</option>
   			
    			<option value="SA-INT" >Saudi Arabia</option>
   			
    			<option value="SN-INT" >Senegal</option>
   			
    			<option value="RS-INT" >Serbia</option>
   			
    			<option value="SC-INT" >Seychelles</option>
   			
    			<option value="SL-INT" >Sierra Leone</option>
   			
    			<option value="SG" >Singapore</option>
   			
    			<option value="SK-INT" >Slovakia</option>
   			
    			<option value="SI-INT" >Slovenia</option>
   			
    			<option value="SB-INT" >Solomon Islands</option>
   			
    			<option value="XS-INT" >Somaliland (north Somalia)</option>
   			
    			<option value="ZA-INT" >South Africa</option>
   			
    			<option value="ES-INT" >Spain</option>
   			
    			<option value="LK-INT" >Sri Lanka</option>
   			
    			<option value="BL-INT" >St. Barthelemy</option>
   			
    			<option value="XE-INT" >St. Eustatius</option>
   			
    			<option value="KN-INT" >St. Kitts</option>
   			
    			<option value="LC-INT" >St. Lucia</option>
   			
    			<option value="XM-INT" >St. Maarten</option>
   			
    			<option value="VC-INT" >St. Vincent</option>
   			
    			<option value="SR-INT" >Suriname</option>
   			
    			<option value="SZ-INT" >Swaziland</option>
   			
    			<option value="SE-INT" >Sweden</option>
   			
    			<option value="CH-INT" >Switzerland</option>
   			
    			<option value="PF-INT" >Tahiti</option>
   			
    			<option value="TW-INT" >Taiwan</option>
   			
    			<option value="TJ-INT" >Tajikistan</option>
   			
    			<option value="TZ-INT" >Tanzania</option>
   			
    			<option value="TH-INT" >Thailand</option>
   			
    			<option value="TG-INT" >Togo</option>
   			
    			<option value="TO-INT" >Tonga</option>
   			
    			<option value="TT-INT" >Trinidad And Tobago</option>
   			
    			<option value="TN-INT" >Tunisia</option>
   			
    			<option value="TR-INT" >Turkey</option>
   			
    			<option value="TM-INT" >Turkmenistan</option>
   			
    			<option value="TC-INT" >Turks And Caicos Islands</option>
   			
    			<option value="TV-INT" >Tuvalu</option>
   			
    			<option value="UG-INT" >Uganda</option>
   			
    			<option value="UA-INT" >Ukraine</option>
   			
    			<option value="AE-INT" >United Arab Emirates</option>
   			
    			<option value="GB-INT" >United Kingdom</option>
   			
    			<option value="US-INT" >United States</option>
   			
    			<option value="UM-INT" >United States Minor Outlying Islands</option>
   			
    			<option value="UY-INT" >Uruguay</option>
   			
    			<option value="UZ-INT" >Uzbekistan</option>
   			
    			<option value="VU-INT" >Vanuatu</option>
   			
    			<option value="VE-INT" >Venezuela</option>
   			
    			<option value="VN-INT" >Vietnam</option>
   			
    			<option value="VG-INT" >Virgin Islands, British</option>
   			
    			<option value="VI-INT" >Virgin Islands, U.s.</option>
   			
    			<option value="ZM-INT" >Zambia</option>
   			
    			<option value="ZW-INT" >Zimbabwe</option>
   			
  			</optgroup>
		</select>
	</div>
	
	<div class="col-xs-4 col-sm-4 padding-right-off">
		<h5>ENTER HEIGHT:</h5>
		<input type="text" class="form-control required digits" name="h" id="height" required placeholder="cm (Eg: 1)"  title="Please enter the height" value="" onkeypress="return isNumberKey(event)"/>
	</div>
	
	<div class="col-xs-4 col-sm-4 padding-right-off">
		<h5>ENTER WIDTH:</h5>
		<input type="text" class="form-control required digits" name="wi" id="width" required placeholder="cm (Eg: 1)"  title="Please enter the height" value="" onkeypress="return isNumberKey(event)"/>
	</div>
	
	<div class="col-xs-4 col-sm-4">
		<h5>ENTER LENGTH:</h5>
		<input type="text" class="form-control required digits" name="l" id="length" required placeholder="cm (Eg: 1)"  title="Please enter the height" value="" onkeypress="return isNumberKey(event)"/>
	</div>
	
	<div class="col-xs-12">
	<h5>ENTER WEIGHT:</h5>
	</div>
	<div class="col-xs-5 col-sm-5 padding-right-off">
	  <input type="text" class="form-control required digits" name="w" id="weight" required placeholder="KG (Eg: 0.01)"  title="Please enter the weight" value="" onkeypress="return isNumberKey(event)"/>
	</div>
	<div class="col-xs-1 padding-off" >
		<button type="button" class="btn btn-default pull-right" onclick="window.open('<?=base_url("volumetricCalcualator")?>', '_blank', 'directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,resizable=0,width=600, height=400')" data-toggle="tooltip" data-placement="top" data-original-title="Volumetric Calculator"><i class="fas fa-calculator"></i></button>
	</div>
	
	<div class="col-xs-6 col-sm-6">
	<button class="btn btn-primary" name="submit" type="submit" value="Quote "id="submit">Quote &amp; Book</button>
	</div>
    </form>
  </div>
  </div>
<!--international tab end-->
  
  

</div>
</div>
<div id='dialog'> </div>
<script>
var currency = "RM";
$('#myTabs a').click(function (e) {
  e.peventDefault()
  $(this).tab('show')
});
/* For Use in External js */
var home = "https://secure.easyparcel.my/pass/";
var noStateMsg = "No State Available";
var fromPostCode = 5;
var laststr;
function checkaddress(){
	var status=true;
	var message = "";
	if($('#d').val() == ''){
		message += "Delivery State Not Chosen.<br>"; 
	}else{
		d_state = $('#d').val();
	} 

	if($('#c').val() == ''){
		message += "Collection State Not Chosen.<br>";
	}else{
		c_state = $('#c').val();
	}
	
	if(message != ""){
		swal({
			title: 'Oops',
			type: 'error',
			html: '' + message,
			confirmButtonColor: '#4e97d8'
		});
	}
	return status;
}
function checkaddressint(){
	var status=true;
	var message = "";
	if($('#id').val() == ''){
		message += "Collection State Not Chosen.<br>"; 
	}else{
		d_state = $('#id').val();
	} 

	if($('#ic').val() == ''){
		message += "Deliver Country Not Chosen.<br>";
	}else{
		c_state = $('#ic').val();
	}
	
	if(message != ""){
		swal({
			title: 'Oops',
			type: 'error',
			html: '' + message,
			confirmButtonColor: '#4e97d8'
		});
	}

	return status;
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57))){
        return false;
	}
    return true;
}   

</script>
	</div>
</div>
</div>
</section>
<section class="light-bg steps-bg">
  <div class="container space">
      <div class="col-xs-12 section-copy">
      <h1>How to Place A Delivery Booking?</h1>
      <h3>Get Everything Done At The Comfort Of Your Home</h3>
    </div>
    <div class="col-sm-4 col-xs-12 steps padding-off" >
      <div class="col-md-4 col-sm-12 col-xs-4"><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/compare.png" class="fade-in-down"></div>
      <div class="col-md-8 col-sm-12 col-xs-8">
        <h3><span style="color:#f69; font-size:36px;">1.</span>Compare Prices</h3>
        <p>Use our price comparison engine to find the best prices today.</p>
      </div>
    </div>
    <div class="col-xs-4 col-xs-offset-4 title-hr visible-xs">
      <p class="hr-home"></p>
    </div>
    <div class="col-sm-4 col-xs-12 steps padding-off">
      <div class="col-md-4 col-sm-12 col-xs-4"><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/steps-2.png" class="fade-in-down"></div>
      <div class="col-md-8 col-sm-12 col-xs-8">
        <h3><span style="color:#f69; font-size:36px;">2.</span> Book Online</h3>
        <p>Book for your favourite courier provider and just pay online.</p>
      </div>
    </div>
    <div class="col-xs-4 col-xs-offset-4 title-hr visible-xs">
      <p class="hr-home"></p>
    </div>
    <div class="col-sm-4 col-xs-12 steps-last padding-off">
      <div class="col-md-4 col-sm-12 col-xs-4"><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/steps-3.png" class="fade-in-down"></div>
      <div class="col-md-8 col-sm-12 col-xs-8">
        <h3><span style="color:#f69; font-size:36px;">3.</span> Parcel Collected</h3>
        <p>Prepare your shipment and we'll come to you!</p>
      </div>
    </div>
  </div>
</section>

<section class="whyus-bg hidden-xs">
  <div class="container space">
    <div class="col-xs-12 section-copy">
      <h1>Why EasyParcel?</h1>
      <h3>These Are Why You'll Love Us</h3>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-1.png" width="60px" class="fade-in-down"></span>
        <h4>Fast Online Delivery Booking</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-4.png" width="60px" class="fade-in-down"></span>
        <h4>Multiple Courier Choices</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-6.png" width="60px" class="fade-in-down"></span>
        <h4>Save On Every Delivery</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-2.png" width="60px" class="fade-in-down"></span>
        <h4>Easy Online Tracking</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-5.png" width="60px" class="fade-in-down"></span>
        <h4>Free Door To Door Collection</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-8.png" width="60px" class="fade-in-down"></span>
        <h4>InsurePlus - RM50 Extra Coverage</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-3.png" width="60px" class="fade-in-down"></span>
        <h4>Auto-Generated Consignment Note</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-7.png" width="60px" class="fade-in-down"></span>
        <h4>No Volume Commitments Required</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/why/why-9.png" width="60px" class="fade-in-down"></span>
        <h4>E-Commerce Integration Ready</h4>
      </div>
    </div>
  </div>
</section>

<style>
.qnb-wrapped .nav-tabs>li.active>a, .qnb-wrapped .nav-tabs>li.active>a:focus, .qnb-wrapped .nav-tabs>li.active>a:hover {
	background-color: #f69;
	border: 1px solid #f69;
	color: #fff;
}
.qnb-wrapped .nav-tabs>li>a {background-color: #fff;}
.qnb-wrapped .nav-tabs>li.active>a.domestic-tab, .qnb-wrapped .nav-tabs>li.active>a:focus.domestic-tab, .qnb-wrapped .nav-tabs>li.active>a.domestic-tab:hover {
	background-color: #f69;
	color: #fff;
	border-color: #f69;
	border-bottom-color: transparent;
}
.qnb-wrapped .nav-tabs>li.active>a.international-tab, .qnb-wrapped .nav-tabs>li.active>a:focus.international-tab, .qnb-wrapped .nav-tabs>li.active>a.international-tab:hover {
	background-color: #5cb85c;
    border: 1px solid #5cb85c;
	border-bottom-color: transparent;
    color: #fff;
}

.qnb-wrapped .nav > li > a.domestic-tab:hover, .qnb-wrapped .nav .open>a.domestic-tab:hover {
    background-color: #f69;
    color: #fff;
    border-color: #f69;
	border-bottom: 1px solid #FFF;
}

.qnb-wrapped .nav > li > a.international-tab:hover, .qnb-wrapped .nav .open>a.international-tab:hover {
    background-color: #5cb85c;
    color: #fff;
    border-color: #5cb85c;
	border-bottom: 1px solid #FFF;
}
.qnb-wrapped .nav-tabs {border-bottom: 1px solid #FFF;}
.QuickQuote.international-body {
	background-color: #5cb85c;
}
.qnb-wrapped .nav-tabs>li>a.international-tab {
    background-color: #5cb85c;
    color: #fff;
}
.qnb-wrapped .nav-tabs>li>a.domestic-tab {
    background-color: #f69;
    color: #fff;
}
@media (max-width: 767px) {
	.Courier_Img span.label {
	   display: inline-block;
	}
	.Courier_Img p {
	   text-align: left !important;
	}
}
.Courier_Price small.Courier_Price_TotalSave {
	font-weight: normal;
	color: #999;
	font-size: 80%;
	text-decoration: line-through;"
}
</style>

<script>
 
</script>
</div>
<div id="mainTrackResult"></div>


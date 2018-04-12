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
		<h5>FROM:</h5>
	</div>
	
	<div class="col-xs-5 col-sm-6 dropbox-body padding-right-off" id="domestic">
		
		<select  required class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="c"  name="c" onChange="quote.CollAddrChange(this)" txt_c_state>
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
	<div class="col-xs-7 col-sm-6 dropbox-body" id="domestic">
		<input type="text" class="form-control" id="cp" name="cp" placeholder="Postcode" onkeyup="quickQ.checkField(this,'c')" onchange="quickQ.checkField(this,'c')" onblur="quickQ.clearPostcode()" maxlength="5" value="" txt_c_postcode/>
	</div>
	
	
	<div class="col-xs-12">
	<h5>TO:</h5>
	</div>
      <div class="col-xs-5 col-sm-6 dropbox-body padding-right-off" id="domestic">
	

	
	
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
	<div class="col-xs-7 col-sm-6 dropbox-body" id="domestic">
		<input type="text" class="form-control" id="dp" name="dp" placeholder="Postcode" 
		onkeyup="quickQ.checkField(this,'d')" onchange="quickQ.checkField(this,'d')" onblur="quickQ.clearPostcode()" maxlength="5" value="" txt_d_postcode/>
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
		<h5>FROM:</h5>
	</div>
	<div class="col-xs-5 col-sm-6 dropbox-body padding-right-off" id="domestic">
		
	
	
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
	<div class="col-xs-7 col-sm-6 dropbox-body" id="domestic">
		<input type="text" class="form-control" id="icp" name="cp" placeholder="Postcode" onkeyup="quickQ.checkField(this,'ic')" onchange="quickQ.checkField(this,'ic')" onblur="quickQ.clearPostcode()" maxlength="5" value="" txt_ic_postcode/>
	</div>
	
	<div class="col-xs-12">
	<h5>TO:</h5>
	</div>
	<div class="col-xs-5 col-sm-6 dropbox-body padding-right-off" id="domestic">
		<select required class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="d" name="d" onChange="quote.CollAddrChange(this)" txt_id_state>
			 <option value="" readonly>Country</option>
				<option value="AF" >Afghanistan</option>
    			
				<option value="AL" >Albania</option>
   			
    			<option value="DZ" >Algeria</option>
   			
    			<option value="AS" >American Samoa</option>
   			
    			<option value="AD" >Andorra</option>
   			
    			<option value="AO" >Angola</option>
   			
    			<option value="AI" >Anguilla</option>
   			
    			<option value="AG" >Antigua</option>
   			
    			<option value="AR" >Argentina</option>
   			
    			<option value="AM" >Armenia</option>
   			
    			<option value="AW" >Aruba</option>
   			
    			<option value="AU" >Australia</option>
   			
    			<option value="AT" >Austria</option>
   			
    			<option value="AZ" >Azerbaijan</option>
   			
    			<option value="BS" >Bahamas</option>
   			
    			<option value="BH" >Bahrain</option>
   			
    			<option value="BD" >Bangladesh</option>
   			
    			<option value="BB" >Barbados</option>
   			
    			<option value="BY" >Belarus</option>
   			
    			<option value="BE" >Belgium</option>
   			
    			<option value="BZ" >Belize</option>
   			
    			<option value="BJ" >Benin</option>
   			
    			<option value="BM" >Bermuda</option>
   			
    			<option value="BT" >Bhutan</option>
   			
    			<option value="BO" >Bolivia</option>
   			
    			<option value="XB" >Bonaire</option>
   			
    			<option value="BA" >Bosnia And Herzegovina</option>
   			
    			<option value="BW" >Botswana</option>
   			
    			<option value="BR" >Brazil</option>
   			
    			<option value="BN" >Brunei Darussalam</option>
   			
    			<option value="BG" >Bulgaria</option>
   			
    			<option value="BF" >Burkina Faso</option>
				
				<option value="BI" >Burundi</option>
   			
    			<option value="KH" >Cambodia</option>
   			
    			<option value="CM" >Cameroon</option>
   			
    			<option value="CA" >Canada</option>
   			
    			<option value="IC" >Canary Islands, The</option>
   			
    			<option value="CV" >Cape Verde</option>
   			
    			<option value="KY" >Cayman Islands</option>
				
				<option value="CF" >Central African Rep</option>
   			
    			<option value="TD" >Chad</option>
   			
    			<option value="CL" >Chile</option>
   			
    			<option value="CN1" >China I</option>
   			
    			<option value="CN2" >China Ii</option>
   			
    			<option value="CO" >Colombia</option>
   			
    			<option value="KM" >Comoros</option>
   			
    			<option value="CG" >Congo</option>
   			
    			<option value="CK" >Cook Islands</option>
   			
    			<option value="CR" >Costa Rica</option>
   			
    			<option value="CI" >Cote D'ivoire</option>
   			
    			<option value="HR" >Croatia</option>
   			
    			<option value="CU" >Cuba</option>
   			
    			<option value="XC" >Curacao</option>
   			
    			<option value="CY" >Cyprus</option>
   			
    			<option value="CZ" >Czech Republic</option>
   			
    			<option value="DK" >Denmark</option>
   			
    			<option value="DJ" >Djibouti</option>
   			
    			<option value="DM" >Dominica</option>
   			
    			<option value="DO" >Dominican Republic</option>
   			
    			<option value="TL" >East Timor</option>
   			
    			<option value="EC" >Ecuador</option>
   			
    			<option value="EG" >Egypt</option>
   			
    			<option value="SV" >El Salvador</option>
				
				<option value="ER" >Eritrea</option>
				
				<option value="EE" >Estonia</option>
   			
    			<option value="ET" >Ethiopia</option>
   			
    			<option value="FK" >Falkland Islands (malvinas)</option>
   			
    			<option value="FO" >Faroe Islands</option>
   			
    			<option value="FJ" >Fiji</option>
   			
    			<option value="FI" >Finland</option>
   			
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
				
				<option value="GQ" >Guinea Equatorial</option>
   			
    			<option value="GY" >Guyana</option>
   			
    			<option value="HT" >Haiti</option>
   			
    			<option value="HN" >Honduras</option>
   			
    			<option value="HK" >Hong Kong</option>
   			
    			<option value="HU" >Hungary</option>
   			
    			<option value="IS" >Iceland</option>
   			
    			<option value="IN" >India</option>
   			
    			<option value="ID" >Indonesia</option>
				
				<option value="IR" >Iran</option>
				
				<option value="IQ" >Iraq</option>
   			
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
				
				<option value="KP" >North Korea</option>
				
    			<option value="KR" >South Korea</option>
   			
    			<option value="KV" >Kosovo</option>
   			
    			<option value="KW" >Kuwait</option>
   			
    			<option value="KG" >Kyrgyzstan</option>
   			
    			<option value="LA" >Lao People's Democratic Republic</option>
   			
    			<option value="LV" >Latvia</option>
   			
    			<option value="LB" >Lebanon</option>
   			
    			<option value="LS" >Lesotho</option>
   			
    			<option value="LR" >Liberia</option>
				
				<option value="LY" >Libya</option>
				
    			<option value="LI" >Liechtenstein</option>
   			
    			<option value="LT" >Lithuania</option>
   			
    			<option value="LU" >Luxembourg</option>
   			
    			<option value="MO" >Macau</option>
   			
    			<option value="MK" >Macedonia, The Former Yugoslav Republic Of</option>
   			
    			<option value="MG" >Madagascar</option>
   			
    			<option value="MW" >Malawi</option>
   			
    			<option value="ML" >Mali</option>
				
				<option value="MV" >Maldives</option>
   			
    			<option value="MT" >Malta</option>
				
				<option value="MP" >Mariana Islands</option>
   			
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
				
				<option value="NE" >Niger</option>
   			
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
   			
    			<option value="SH" >Saint Helena</option>
   			
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
				
				<option value="SO" >Somalia</option>
   			
    			<option value="XS" >Somaliland (north Somalia)</option>
   			
    			<option value="ZA" >South Africa</option>
				
				<option value="SS" >South Sudan</option>
   			
    			<option value="ES" >Spain</option>
   			
    			<option value="LK" >Sri Lanka</option>
   			
    			<option value="BL" >St. Barthelemy</option>
   			
    			<option value="XE" >St. Eustatius</option>
   			
    			<option value="KN" >St. Kitts</option>
   			
    			<option value="LC" >St. Lucia</option>
   			
    			<option value="XM" >St. Maarten</option>
   			
    			<option value="VC" >St. Vincent</option>
				
    			<option value="SD" >Sudan</option>
				
				<option value="SR" >Suriname</option>
   			
    			<option value="SZ" >Swaziland</option>
   			
    			<option value="SE" >Sweden</option>
   			
    			<option value="CH" >Switzerland</option>
				
				<option value="SY" >Syria</option>
   			
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
				
				<option value="YE" >Yemen, Rep. Of</option>
   			
    			<option value="ZM" >Zambia</option>
   			
    			<option value="ZW" >Zimbabwe</option>
   			
  			</optgroup>
		</select>
	</div>
	<div class="col-xs-7 col-sm-6 dropbox-body" id="domestic">
		<input type="text" class="form-control" id="idp" name="dp" placeholder="Postcode"  maxlength="10" value="" txt_id_postcode/>
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
		status=false;
	}

	if($('#c').val() == ''){
		message += "Collection State Not Chosen.<br>";
		status=false;
	}
	
	if ($('#cp').val().length < 5) {
		message += "Delivery Postcode Not Valid.<br>";
		status=false;
	}
	
	if ($('#dp').val().length < 5) {
		message += "Collection Postcode Not Valid.<br>";
		status=false;
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
	}

	if($('#ic').val() == ''){
		message += "Deliver Country Not Chosen.<br>";
	}
	
	
	if ($('#icp').val().length < 5) {
		message += "Delivery Postcode Not Valid.<br>";
		status=false;
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
      <div class="col-md-4 col-sm-12 col-xs-4"><img src="<?=base_url('assets2/image/service/compare.png')?>" class="fade-in-down"></div>
      <div class="col-md-8 col-sm-12 col-xs-8">
        <h3><span style="color:#f69; font-size:36px;">1.</span>Compare Prices</h3>
        <p>Use our price comparison engine to find the best prices today.</p>
      </div>
    </div>
    <div class="col-xs-4 col-xs-offset-4 title-hr visible-xs">
      <p class="hr-home"></p>
    </div>
    <div class="col-sm-4 col-xs-12 steps padding-off">
      <div class="col-md-4 col-sm-12 col-xs-4"><img src="<?=base_url('assets2/image/service/steps-2.png')?>" class="fade-in-down"></div>
      <div class="col-md-8 col-sm-12 col-xs-8">
        <h3><span style="color:#f69; font-size:36px;">2.</span> Book Online</h3>
        <p>Book for your favourite courier provider and just pay online.</p>
      </div>
    </div>
    <div class="col-xs-4 col-xs-offset-4 title-hr visible-xs">
      <p class="hr-home"></p>
    </div>
    <div class="col-sm-4 col-xs-12 steps-last padding-off">
      <div class="col-md-4 col-sm-12 col-xs-4"><img src="<?=base_url('assets2/image/service/steps-3.png')?>" class="fade-in-down"></div>
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
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-1.png')?>" width="60px" class="fade-in-down"></span>
        <h4>Fast Online Delivery Booking</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-4.png')?>" width="60px" class="fade-in-down"></span>
        <h4>Multiple Courier Choices</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-6.png')?>" width="60px" class="fade-in-down"></span>
        <h4>Save On Every Delivery</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-2.png')?>" width="60px" class="fade-in-down"></span>
        <h4>Easy Online Tracking</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-5.png')?>" width="60px" class="fade-in-down"></span>
        <h4>Free Door To Door Collection</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-8.png')?>" width="60px" class="fade-in-down"></span>
        <h4>InsurePlus - RM50 Extra Coverage</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-3.png')?>" width="60px" class="fade-in-down"></span>
        <h4>Auto-Generated Consignment Note</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-7.png')?>" width="60px" class="fade-in-down"></span>
        <h4>No Volume Commitments Required</h4>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="whyus-point"> <span><img src="<?=base_url('assets2/image/why/why-9.png')?>" width="60px" class="fade-in-down"></span>
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


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
	background-color: #B3003C !important;
    border: 1px solid #B3003C !important;
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
    background-color: #B3003C !important;
    color: #fff;
    border-color: #B3003C !important;
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
    
    
	<li role="presentation" class="active"><a class="international-tab" href="#international" aria-controls="profile" role="tab" data-toggle="tab"><strong>TRUCKING</strong></a></li>
    
	
	</ul>
	</div>
 

  <!-- Tab panes -->
  <div class="tab-content">

<!--international tab start-->
<div role="tabpanel" class="tab-pane active clearfix QuickQuote international" style="z-index:999999;padding:0px"  id="international">
  <div class="container-fluid quote-book international-body"> 
    <form action="" method="POST" onsubmit="return checkaddressint()">
	<div class="col-xs-12">
		<h2>Get Instant Quotes</h2>
		<h5>FROM:</h5>
	</div>
	<div class="col-xs-6 col-sm-6 dropbox-body padding-right-off" id="domestic">
		<select   class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="ic"  name="c"  txt_ic_state>
		<option value="" readonly>State</option>
		
			<option value="JHR" >Johor</option>
		
			<option value="KDH" >Kedah</option>
		
			<option value="KTN" >Kelantan</option>
		
			<option value="MLK" >Melaka</option>
		
			<option value="NSN" >Negeri Sembilan</option>
		
			<option value="PHG" >Pahang</option>
		
			<option value="PRK" >Perak</option>
		
			<option value="PLS" >Perlis</option>
		
			<option value="PNG" >Pulau Pinang</option>
		
			<option value="SGR" >Selangor</option>
		
			<option value="TRG" >Terengganu</option>
		
			<option value="KUL" >Kuala Lumpur</option>
		
			<option value="PJY" >Putra Jaya</option>
		
			<option value="SRW" >Sarawak</option>
		
			<option value="SBH" >Sabah</option>
		
			<option value="LBN" >Labuan</option>
		
		</select>
	</div>
	
	<div class="col-xs-6 col-sm-6 dropbox-body" id="domestic">
		<input type="text" class="form-control" id="icp" name="cp" placeholder="Postcode" maxlength="5" value="" />
	</div>
	
      
	<div class="col-xs-12">
	<h5>TO:</h5>
	</div>
	<div class="col-xs-6 col-sm-6 dropbox-body padding-right-off" id="domestic">
		<select required class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="d" name="d" onChange="quote.CollAddrChange(this)" txt_id_state>
			<option value="" readonly>State</option>
		
			<option value="JHR" >Johor</option>
		
			<option value="KDH" >Kedah</option>
		
			<option value="KTN" >Kelantan</option>
		
			<option value="MLK" >Melaka</option>
		
			<option value="NSN" >Negeri Sembilan</option>
		
			<option value="PHG" >Pahang</option>
		
			<option value="PRK" >Perak</option>
		
			<option value="PLS" >Perlis</option>
		
			<option value="PNG" >Pulau Pinang</option>
		
			<option value="SGR" >Selangor</option>
		
			<option value="TRG" >Terengganu</option>
		
			<option value="KUL" >Kuala Lumpur</option>
		
			<option value="PJY" >Putra Jaya</option>
		
			<option value="SRW" >Sarawak</option>
		
			<option value="SBH" >Sabah</option>
		
			<option value="LBN" >Labuan</option>
		</select>
	</div>
	
	<div class="col-xs-6 col-sm-6 dropbox-body" id="domestic">
		<input type="text" class="form-control" id="idp" name="dp" placeholder="Postcode"  maxlength="10" value="" txt_id_postcode/>
	</div>
	
	<div class="col-xs-4 col-sm-4 padding-right-off">
		<h5>ENTER HEIGHT:</h5>
		<input type="text" class="form-control required digits" name="h" id="height" required placeholder="cm (Eg: 1)"  title="Please enter the height" value=""/>
	</div>
	
	<div class="col-xs-4 col-sm-4 padding-right-off">
		<h5>ENTER WIDTH:</h5>
		<input type="text" class="form-control required digits" name="wi" id="width" required placeholder="cm (Eg: 1)"  title="Please enter the height" value=""/>
	</div>
	
	<div class="col-xs-4 col-sm-4">
		<h5>ENTER LENGTH:</h5>
		<input type="text" class="form-control required digits" name="l" id="length" required placeholder="cm (Eg: 1)"  title="Please enter the height" value=""/>
	</div>
	
	<div class="col-xs-12">
	<h5>ENTER WEIGHT:</h5>
	</div>
	<div class="col-xs-5 col-sm-5 padding-right-off">
	  <input type="text" class="form-control required digits" name="w" id="weight" required placeholder="KG (Eg: 0.01)"  title="Please enter the weight" value=""/>
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
	
	if($('#cp').val().trim().length==5 && $('#dp').val().trim().length==5){
		
		if(message == ""){
			
			$.ajax({
				type  : "post",
				url : "./?ac=checkPostcode",
				async : false,
				data : {
					cpostcode : $('#cp').val(),
					cstate : c_state,
					dpostcode : $('#dp').val(),
					dstate : d_state
				},
				success : function(result){
					if(result == true){
						status=true;
					}else{
						message += result;
						status=false;
					}
				},
				fail : function(result){
					message += "Something Went Wrong. Please Try Again. If Problem Persist, Please Contact Our Customer Service.<br>";
					status=false;
				}
			});
		}
	}
	else if($('#cp').val().trim().length!=0 || $('#dp').val().trim().length!=0)
	{
		if($('#cp').val().trim().length!=5 && $('#cp').val().trim().length!=0)
		{
			message += "Collection Postcode Does Not Match The Standard.<br>";
			status=false;
		}
		else if($('#dp').val().trim().length!=5 && $('#dp').val().trim().length!=0)
		{
			message += "Delivery Postcode Does Not Match The Standard.<br>";
			status=false;
		}
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
	
	
	if($('#icp').val().trim().length==5 && $('#idp').val().trim().length==5){
		
		if(message == ""){
			
			$.ajax({
				type  : "post",
				url : "./?ac=checkPostcode",
				async : false,
				data : {
					cpostcode : $('#icp').val(),
					cstate : c_state,
					dpostcode : '',
					dstate : ''
				},
				success : function(result){
					if(result == true){
						status=true;
					}else{
						message += result;
						status=false;
					}
				},
				fail : function(result){
					message += "Something Went Wrong. Please Try Again. If Problem Persist, Please Contact Our Customer Service.<br>";
					status=false;
				}
			});	
		}
	}
	else if($('#icp').val().trim().length!=0 || $('#idp').val().trim().length!=0)
	{
		if($('#icp').val().trim().length!=5 && $('#icp').val().trim().length!=0)
		{
			message += "Collection Postcode Does Not Match The Standard.<br>";
			status=false;
		} 
		
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
      <h1>Why Wherevership?</h1>
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
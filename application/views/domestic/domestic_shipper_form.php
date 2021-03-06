<div id="sticky-anchor"></div>
		<div class="container top1">
			<div class="row">
				<div class="container-fluid">
					<div class="col-lg-3 col-md-4 col-sm-12 logo-wrapper">
						<a href="<?=base_url('')?>" class="logo-wrapper">
							<img src="<?=base_url('assets2/image/logo.png')?>" class="logo hidden-xs" width="50%">
						</a>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-12 padding-off">
						<div class="row bs-wizard" style="border-bottom:0;">
							<div class="col-xs-4 bs-wizard-step complete">
								<div class="text-center bs-wizard-stepnum hidden-sm hidden-xs">Shipment Details</div>
								<div class="text-center bs-wizard-stepnum visible-sm visible-xs">Shipment <br> Details</div>
								<div class="progress">
									<div class="progress-bar"></div>
								</div>
								<a  class="bs-wizard-dot"></a>
							</div>
							<div class="col-xs-4 bs-wizard-step disabled">
								<div class="text-center bs-wizard-stepnum hidden-sm hidden-xs">Order Summary</div>
								<div class="text-center bs-wizard-stepnum visible-sm visible-xs">Order <br> Summary</div>
								<div class="progress">
									<div class="progress-bar"></div>
								</div>
								<a  class="bs-wizard-dot"></a>
							</div>
							<div class="col-xs-4 bs-wizard-step disabled">
								<div class="text-center bs-wizard-stepnum hidden-sm hidden-xs">Payment Options</div>
								<div class="text-center bs-wizard-stepnum visible-sm visible-xs">Payment <br> Options</div>
								<div class="progress">
									<div class="progress-bar"></div>
								</div>
								<a  class="bs-wizard-dot"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<style>
	@media screen and (max-width : 767px) {
			.address_detail{
					padding: 0px;
				
			}
		
	}
	
	</style>

	
		<div class="container-fluid space">
			<form method="POST" action="<?=base_url('dtc_shipment_overview_process')?>" class="form-horizontal">
					<input type="hidden" name="weight" value="<?=$weight?>"/>
					<input type="hidden" name="height" value="<?=$height?>"/>
					<input type="hidden" name="width" value="<?=$width?>"/>
					<input type="hidden" name="length" value="<?=$length?>"/>
					<input type="hidden" name="v_weight" value="<?=$v_weight?>"/>
					<input type="hidden" name="cost" value="<?=$cost?>"/>
					<input type="hidden" name="fromState" value="<?=$fromState?>"/>
					<input type="hidden" name="toState" value="<?=$toState?>"/>
					<input type="hidden" name="shipper_postcode" value="<?=$fromPostcode?>"/>
					<input type="hidden" name="receiver_postcode" value="<?=$toPostcode?>"/>
					<input type="hidden" id="userId"  name="userId" value="<?=$id?>" />
					<input type="hidden" name="collectionDate" id="collectionDate" />
					
				<div class="row">
					<div class="col-md-9  col-xs-12">
							<p id="userId"></p>
						<div class="row">
							<div class="col-md-6 address_detail">
								<div class="panel panel-default">
									<div class="title-bar">
										<h3 class="title">Shipper Detail</h3>
									</div>
									<div class="panel-body">
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_company_name">Company Name: </label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="shipper_company_name" id="shipper_company_name" class="form-control" title="please enter company name!"/>
												</div>
											</div>
										</div>		
									
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_address">Address:<span class="required"></span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="shipper_address1" id="shipper_address1" class="form-control" title="address 1*" required />
												</div>
												<div class="has-feedback">
													<input type="text" name="shipper_address2" id="shipper_address2" class="form-control" title="address 2"  />
												</div>
												<div class="has-feedback">
													<input type="text" name="shipper_address3" id="shipper_address3" class="form-control" title="address 3"  />
												</div>
											</div>
										</div>
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_city">City:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="shipper_city" id="shipper_city" class="form-control" title="please enter shipper's city!" required/>
												</div>
											</div>	
										</div>			
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_postcode">PostCode:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="spr_postcode" id="shipper_postcode" class="form-control" title="please enter shipper's postcode" value="<?=$fromPostcode?>" disabled />
												</div>
											</div>
										</div>			
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_state">State:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="shipper_state" id="shipper_state" class="form-control" title="please enter shipper's state" value="<?=$fromState?>" disabled />
												</div>
											</div>
										</div>
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_country">Country:</label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<select name="shipper_country" class="form-control" id="shipper_country">
														<option value="Malaysia">Malaysia</option>
										
													</select>
												</div>
											</div>
										</div>	
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_contact_person">Contact Person:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="shipper_contact_person" id="shipper_contact_person" class="form-control" title="please enter contact person name" required/>
												</div>
											</div>
										</div>	
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_phone_number">Phone Number:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="shipper_phone_number" id="shipper_contact_Person" class="form-control" title="please enter contact person phone number" required/>
												</div>
											</div>
										</div>
										<div class ="form-group">
											<div class="col-sm-4">
												<label for="shipper_email">Email:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="shipper_email" id="shipper_email" class="form-control" title="please enter contact person email" required/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 address_detail">
								<div class="panel panel-default">
									<div class="title-bar">
										<h3 class="title">Recevier Detail</h3>
									</div>
									<div class="panel-body">
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_company_name">Company Name:</label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="receiver_company_name" id="receiver_company_name" class="form-control" title="please enter receiver's company name!"/>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_address">Address:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="receiver_address1" id="receiver_address1" class="form-control" title="please enter receiver's address!" required/>
												</div>
												<div class="has-feedback">
													<input type="text" name="receiver_address2" id="receiver_address2" class="form-control" title="address 2"  />
												</div>
												<div class="has-feedback">
													<input type="text" name="receiver_address3" id="receiver_addres3" class="form-control" title="address 3"  />
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_city">City:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="receiver_city" id="receiver_city" class="form-control" title="please enter receiver's city!" required/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_postcode">PostCode:<span class="required">*</span></label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="rec_postcode" id="receiver_postcode" class="form-control" title="please enter receiver's postcode!" value="<?=$toPostcode?>" disabled />
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_state">State:<span class="required">*</span></label>
											</div>
					
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="receiver_state" id="receiver_state" class="form-control" title="please enter receiver's state!" value="<?=$toState?>" disabled />
							
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_country">Country:</label>
											</div>
						
											<div class="col-sm-8">
												<div class="has-feedback">
													<select name="receiver_country" class="form-control" id="receiver_country" required>
														<option value="Malaysia">Malaysia</option>
										
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_contact_person">Contact Person:<span class="required">*</span></label>
											</div>
											
												<div class="col-sm-8">
													<div class="has-feedback">
														<input type="text" name="receiver_contact_person" id="receiver_contact_person" class="form-control" title="please enter receiver's name!" required/>
													</div>
												</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_phone_number">Phone Number:<span class="required">*</span></label>
											</div>
											
												<div class="col-sm-8">
													<div class="has-feedback">
														<input type="text" name="receiver_phone_number" id="receiver_phone_number" class="form-control" title="please enter receiver's phone number!" required/>
													</div>
												</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<label for="receiver_email">Email:<span class="required">*</span></label>
											</div>
										
											<div class="col-sm-8">
												<div class="has-feedback">
													<input type="text" name="receiver_email" id="receiver_email" class="form-control" title="please enter receiver's email!" required/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="panel panel-default">
								<div class="title-bar">
									<h3 class="title">My Parcel Detail</h3>
								</div>
								<div class="panel-body">
								<div class="col-md-6  col-xs-12">
									<label for="parcel_content">Parcel Content: </label>
									<div class="has-feedback">
										<input type="text" name="parcel_content" id="parcel_content" class="form-control" placeholder="Eg: book" required />
									</div>
								</div>
								
								<div class="col-md-6  col-xs-12">
									<label for="value_of_content">Value of Content (RM): </label>
									<div class="has-feedback">
										<input type="text" name="value_of_content" id="value_of_content" class="form-control" placeholder="Eg: 10.00" required/>
									</div>
								</div>
							</div>
							</div>
							
						</div>
						
						<div class="row">
							
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="col-md-6">
									
										<div class="form-group">
											<label class="col-sm-4">Pickup Required</label>
												<div class="col-sm-8">
													<div class="has-feedback">
														<select name="pickup_required" class="form-control" onchange="showDate()">
															<option value="-1">Please Select</option>
															<option value="1">Yes</option>
															<option value="0">No</option>
														</select>
													</div>
												</div>
										</div>
									</div>
									<div class="col-md-6" style="display:none" id="calendar">
										 <div class="form-group">
											<div class="input-group date">
												<div class="input-group-addon">Collection Date</div>
													<div class="has-feedback">
														<input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" name="dateFrom" id="collectionDate1" size="16" name="collectionDate1" onchange="dispalyDate(this.value)"/> 
														
													</div>
											</div>
										</div>
									
									
									</div>
								
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<label><input type="checkbox" name="acceptNotice" style="margin-top:11px;" id="acceptCheck"/> &nbsp; I agree & have acknowledged on the <a href="<?=base_url('term_and_condition')?>" target="_blank">Terms & Conditions </a> . </label>
							</div>
						</div>
						<div class="row">
							<div class ="form-group">
								<div class="col-md-6">
									<a type="button" class="form-control btn" href="javascript:history.go(-1)">Back</a>
								</div>
				
								<div class="col-md-6">
									<input type="submit" value="Next" id="next" class="form-control btn btn-primary" onclick="return checkvalid()"/>
					
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-12">
						<div class="well" >
							<div style="text-align: center;"> 
							<img src="<?=base_url('assets2/image/poslaju.png')?>" width="50%">
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Weight (Kg): </label>
								</div>
										
								<div class="col-md-7">
									<p><?=$weight?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Length (cm): </label>
								</div>
										
								<div class="col-md-7">
									<p><?=$length?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Width (cm): </label>
								</div>
										
								<div class="col-md-7">
									<p><?=$width?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Height (cm): </label>
								</div>
										
								<div class="col-md-7">
									<p><?=$height?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Volumetric Weight (Kg): </label>
								</div>
										
								<div class="col-md-7">
									<p><?=$v_weight?></p>
								</div>
							</div>
							<div class="row">
								<hr>
								<div class="col-md-5">
									<label>Price (RM): </label>
								</div>
										
								<div class="col-md-7">
									<h3 style="color: #00a9b0;"><?=$cost?></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>	
		</div>
	<div id="myModal" class="modal fade in">
  <div class="modal-content" style="max-width:700px;">
      <div class="modal-body">
        <div class="row text-center"> 
          <h2>Already an account holder</h2>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="SigninForm well" onkeypress="return checkEnter(event)">
              <p>Please log in so we can help you faster and better.</p>
              <div class="has-feedback">
                <input class="form-control" type="text" placeholder="Sign in Email" id="username" name="txt_user"><span class="glyphicon glyphicon-info-sign form-control-feedback hide" aria-hidden="true"></span>
                <br>
              </div>
              <div class="has-feedback">
                <input class="form-control" type="password" placeholder="Sign in Password" name="txt_pass" id="password"><span class="glyphicon glyphicon-info-sign form-control-feedback hide" aria-hidden="true"></span>
              </div>
              <input type="hidden" name="txt_wechatID" value="">
              <br>
              <label class="checkbox">
                <input type="checkbox" id="rememberme">Remember Me
              </label>
              <button class="btn btn-primary btn-lg log-in" id="loginPay" onclick="Signin()" style="width:100%;"> Log In and Continue</button>
              <a href="<?=base_url('forgotPass')?>" class="span11" target="_blank">Forgot your password?</a> 
              <div class="clearfix"></div>
              <br>  
              
            </div>
          </div>      
          <div class="visible-xs space"></div>    
        </div>
      </div>
     
  </div>
</div>	
		
		
	<script>
	/*firebase.auth().onAuthStateChanged( firebaseUser => {
	if(firebaseUser) {
		
		$("#userId").val(firebaseUser.uid);
	
	} else {
		$("#myModal").modal({
			show: 'false',
			backdrop: 'static', 
			keyboard: false
		});
		
	}

	});  */

	 var id = '<?=$id?>';
	 
	if (id == '') {
		$("#myModal").modal({
			show: 'false',
			backdrop: 'static', 
			keyboard: false
		});
		
	}
	
	function checkvalid() {
		var term=$("#acceptCheck");
		
		if (term.is(':checked')) {
			var sf = ($("[name=pickup_required]").val().trim());
			if (sf == '-1') {
				swal({
					title: 'Oops',
					type: 'error',
					html: 'Please please pickup Required',
					confirmButtonColor: '#4e97d8'
					})
				return false;
			} else {
				return true;
			
			}
		 	
				
		} else {
			swal({
				title: 'Oops',
				type: 'error',
				html: 'Your must check the term and condition',
				confirmButtonColor: '#4e97d8'
				})

			return false;
		}
		
	}
	
	function dispalyDate(collectionDate) {
	
		console.log(collectionDate);
		$('#collectionDate').val(collectionDate);
		
	}
	
	function Signin(){
		 buttonInProcess();
		if(document.getElementById('rememberme').checked){
			rememberme = $(".SigninForm [name=txt_user]").val();
			var d = new Date();
			d.setTime(d.getTime() + (1825*24*60*60*1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = 'username = '+rememberme+ "; " + expires;
		}
		if($("#username").val() == "" || $("#password").val() == ""){
			CheckNull($("#username"),$("#password"));
			swal({
				title: 'Oops',
				type: 'error',
				html: 'Please enter your email and password.',
				confirmButtonColor: '#4e97d8'
				})
			buttonNotInProcess();
		}else
		{
			CheckNull($("#username"),$("#password"));
			const username = $('#username').val();
			const password = $('#password').val();
			
		$.ajax({
			url: '<?=base_url('member/login_process')?>',
			type: 'POST',
			data: {email: username, pass: password},
			error: function() {
				alert('something is wrong');
			},
			success: function(data) {
				//alert(data);
				if (data=='pass') {
					window.location.reload();
				} else {
					 
				   swal({
						title: 'Oops',
						type: 'error',
						html: "Email or Password is uncorrect",
						confirmButtonColor: '#4e97d8'
						});
				   
					buttonNotInProcess()
				} 
			}
		});
	/**		const auth = firebase.auth();
			console.log(username);
			auth.signInWithEmailAndPassword(username,password).then(function(firebaseUser) {
				 window.location.reload();
			
			}).catch(function(error) {
				   
				   swal({
						title: 'Oops',
						type: 'error',
						html: error.message,
						confirmButtonColor: '#4e97d8'
						});
				   
				buttonNotInProcess();
				
			});
	**/
		}
	}
	
	function CheckNull(obj,obj1){

		if(General.isTextEmpty($(obj))){
			doFail(obj);
		}else{
			clearNull(obj);
		}
		if(General.isTextEmpty($(obj1))){
			doFail(obj1);
		}else{
			clearNull(obj1);
		}

	}

	function doPass(obj){
		$(obj).addClass("pass");
		$(obj).removeClass("padding");
		$(obj).removeClass("fail");
		$(obj).css("border-color","#0F0");
		$(obj).parent().children().eq(1).addClass("hide");
	}

	function doFail(obj){
		$(obj).addClass("fail");
		$(obj).removeClass("padding");
		$(obj).removeClass("pass");
		$(obj).css("border-color","#F00");
		$(obj).parent().children().eq(1).removeClass("hide");
	}

	function clearNull(obj){
		$(obj).removeClass("pass");
		$(obj).removeClass("fail");
		$(obj).removeClass("padding");
		$(obj).css("border-color","");
		$(obj).parent().children().eq(1).addClass("hide");
	}

	
	function checkEnter(e) {
		if (e.keyCode == 13) {
				Signin();
		}
	}
	
	function buttonInProcess(){
  
		$("#loginPay").html('<i class="fas fa-spinner selector__glyph-inner animate-spin" style="font-size: 24px;"></i> In Progress');
		$("#loginPay").prop('disabled', true);
	}

	function buttonNotInProcess(){
		$("#loginPay").prop('disabled', false);
		$("#loginPay").html('Log In and Continue');
		
	}
	
	function showDate(){
	var sf = ($("[name=pickup_required]").val().trim());
	if(sf == '1'){
		$('#calendar').attr('style','display: ""');
	}else{
		$('#calendar').attr('style','display: none');
	}
	}
	
	
	$(function(){
		$( "#collectionDate1" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
		var collectionDate = $("#collectionDate1").val().trim();
		$('#collectionDate').val(collectionDate);
		showDate();
	});
	
	function checkPickupRequired() {
		var sf = ($("[name=pickup_required]").val().trim());
		if (sf == '-1') {
			swal({
				title: 'Oops',
				type: 'error',
				html: 'Please please pickup Required',
				confirmButtonColor: '#4e97d8'
				})
			return false;
		} else {
			return true;
			
		}
	}

	</script>

	
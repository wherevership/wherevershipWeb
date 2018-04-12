<div id="sticky-anchor"></div>
		<div class="container top1">
			<div class="row">
				<div class="container-fluid">
					<div class="col-lg-6 col-md-4 col-sm-12 logo-wrapper">
						<a href="<?=base_url('')?>" class="logo-wrapper">
							<img src="<?=base_url('assets2/image/logo.png')?>" class="logo hidden-xs" width="50%">
						</a>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-12 padding-off">
						<div class="row">
							<ol class="breadcrumb-body">
								<li class="current">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">1</div>
											<div class="breadcrumb-stage">Shipment <br/>Detail</div>
										</div>
										
								</li>
								<li class="future">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">2</div>
											<div class="breadcrumb-stage">Shipment <br/>Overview </div>
									
										</div>
									
								</li>
								<li class="future">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">3</div>
											<div class="breadcrumb-stage">Payment <br/>Option</div>
										
										</div>
									
								</li>
								
							
						
							</ol>
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

		<div class="row title-bar">
			<h1 class="title">Shipment Detail</h1>
		</div>
		<div class="container-fluid space">
			<form method="POST" action="<?=base_url('dtc_receiver')?>" class="form-horizontal">
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
					
				<div class="row">
					<div class="col-md-9  col-xs-12">
						
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
												<label for="shipper_contact_Person">Phone Number:<span class="required">*</span></label>
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
														<select name="pickup_required" class="form-control">
															<option value="yes">Yes</option>
															<option value="no">No</option>
														</select>
													</div>
												</div>
										</div>
									</div>
									<div class="col-md-6">
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
									<input type="submit" value="Next" id="next" class="form-control btn btn-success" onclick="return checkvalid()"/>
					
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
		
	<script>
	function checkvalid() {
		var term=$("#acceptCheck");
		
		if (term.is(':checked')) {
		 	
		  return true;	
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
	
	</script>

	
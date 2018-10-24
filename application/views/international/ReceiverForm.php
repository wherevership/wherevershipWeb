	<div id="sticky-anchor"></div>
		<div class="container top1">
			<div class="row">
				<div class="container-fluid">
					<div class="col-lg-2 col-md-4 col-sm-12 logo-wrapper">
						<a href="<?=base_url('')?>" class="logo-wrapper">
							<img src="<?=base_url('assets2/image/logo.png')?>" class="logo hidden-xs" width="50%">
						</a>
					</div>
					<div class="col-lg-10 col-md-8 col-sm-12 padding-off">
						<div class="row bs-wizard" style="border-bottom:0;">
							<div class="col-xs-3 bs-wizard-step complete">
								<div class="text-center bs-wizard-stepnum hidden-sm hidden-xs">Shipment Details</div>
								<div class="text-center bs-wizard-stepnum visible-sm visible-xs">Shipment <br> Details</div>
								<div class="progress" >
									<div class="progress-bar" style="width:100%"></div>
								</div>
								<a  class="bs-wizard-dot" href="javascript:history.go(-1)"></a>
							</div>
							<div class="col-xs-3 bs-wizard-step complete">
								<div class="text-center bs-wizard-stepnum hidden-sm hidden-xs">Custom Cleaner</div>
								<div class="text-center bs-wizard-stepnum visible-sm visible-xs">Custom <br> Cleaner</div>
								<div class="progress">
									<div class="progress-bar"></div>
								</div>
								<a  class="bs-wizard-dot"></a>
							</div>
							<div class="col-xs-3 bs-wizard-step disabled">
								<div class="text-center bs-wizard-stepnum hidden-sm hidden-xs">Order Summary</div>
								<div class="text-center bs-wizard-stepnum visible-sm visible-xs">Order <br> Summary</div>
								<div class="progress">
									<div class="progress-bar"></div>
								</div>
								<a  class="bs-wizard-dot"></a>
							</div>
							<div class="col-xs-3 bs-wizard-step disabled">
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
	
		
		<div class="container-fluid space">
		<form method="POST" action="<?=base_url('int_product_detail_Process')?>" class="form-horizontal">
			<div class="row">
				<input type="hidden" name="weight" value="<?=$weight?>"/>
				<input type="hidden" name="height" value="<?=$height?>"/>
				<input type="hidden" name="width" value="<?=$width?>"/>
				<input type="hidden" name="length" value="<?=$length?>"/>
				<input type="hidden" name="v_weight" value="<?=$v_weight?>"/>
				<input type="hidden" name="cost" value="<?=$cost?>"/>
				<input type="hidden" name="fromState" value="<?=$fromState?>"/>
				<input type="hidden" name="toCountry" value="<?=$toCountry?>"/>
				<input type="hidden" id="userId"  name="userId" value="<?=$id?>"/>
				<input type="hidden" id="type"  name="type" value="<?=$type?>"/>
				<input type="hidden" id="fuelCharge"  name="fuelCharge" value="<?=$fuelCharge?>"/>
				
				<input type="hidden" name="shipper_company_name" value="<?=$shipper_company_name?>"/>
				<input type="hidden" name="shipper_country" value="<?=$shipper_country?>"/>
				<input type="hidden" name="shipper_address1" value="<?=$shipper_address1?>"/>
				<input type="hidden" name="shipper_address2" value="<?=$shipper_address2?>"/>
				<input type="hidden" name="shipper_address3" value="<?=$shipper_address3?>"/>
				<input type="hidden" name="shipper_city" value="<?=$shipper_city?>"/>
				<input type="hidden" name="shipper_postcode" value="<?=$shipper_postcode?>"/>
				<input type="hidden" name="shipper_state" value="<?=$shipper_state?>"/>
				<input type="hidden" name="shipper_subhub" value="<?=$shipper_subhub?>"/>
				<input type="hidden" name="shipper_contact_person" value="<?=$shipper_contact_person?>"/>
				<input type="hidden" name="shipper_phone_number" value="<?=$shipper_phone_number?>"/>
				<input type="hidden" name="shipper_email" value="<?=$shipper_email?>"/>
				
				<input type="hidden" name="receiver_company_name" value="<?=$receiver_company_name?>"/>
				<input type="hidden" name="receiver_country" value="<?=$receiver_country?>"/>
				<input type="hidden" id="receiver_address1" name="receiver_address1" value="<?=$receiver_address1?>"/>
				<input type="hidden" id="receiver_address2" name="receiver_address2" value="<?=$receiver_address2?>"/>
				<input type="hidden" id="receiver_address3" name="receiver_address3" value="<?=$receiver_address3?>"/>
				<input type="hidden" id="receiver_city" name="receiver_city" value="<?=$receiver_city?>"/>
				<input type="hidden" id="receiver_postcode" name="receiver_postcode" value="<?=$receiver_postcode?>"/>
				<input type="hidden" id="receiver_state" name="receiver_state" value="<?=$receiver_state?>"/>
				<input type="hidden" name="receiver_subhub" value="<?=$receiver_subhub?>"/>
				<input type="hidden" name="receiver_contact_person" value="<?=$receiver_contact_person?>"/>
				<input type="hidden" name="receiver_phone_number" value="<?=$receiver_phone_number?>"/>
				<input type="hidden" name="receiver_email" value="<?=$receiver_email?>"/>
				
				
				<input type="hidden" name="pickup_required" value="<?=$pickup_required?>"/>
				<input type="hidden" name="parcel_content" value="<?=$parcel_content?>"/>
				<input type="hidden" name="value_of_content" value="<?=$value_of_content?>"/>
			
			</div>
			
			<div class="row">
				<div class="col-md-9 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4">Shipper's VAT/GST</label>
										<div class="col-sm-8">
											<div class="has-feedback">
												<input type="text" name="shipper_GST" id="shipper_GST" class="form-control"/>
											</div>
										</div>
									</div>
								</div>
			
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4">Receiver's VAT/GST</label>
										<div class="col-sm-8">
											<div class="has-feedback">
												<input type="text" name="receiver_GST" id="receiver_GST" class="form-control"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4">Declared Value For Customs (as on commercial,proforma invoice)</label>
										<div class="col-sm-5">
											<div class="has-feedback">
												<input type="text" name="declared_value" id="declared_value" class="form-control"/>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="has-feedback">
												<select name="currecy" class="form-control">
													<option value="MYR">MYR</option>
													<option value="USD">USD</option>
													<option value="SGD">SGD</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4">Harmonised Commodity Code (if applicable)</label>
										<div class="col-sm-8">
											<div class="has-feedback">
												<input type="text" name="commodity_code" id="commodity_code" class="form-control"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4">(FTR) Exemtion</label>
										<div class="col-sm-8">
										<select name="exemtion" class="form-control">
											<option value="0">please select</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4">ITN</label>
										<div class="col-sm-8">
											<div class="has-feedback">
												<input type="text" name="itn" id="ITN" class="form-control"/>
											</div>
										</div>
									</div>
								</div>
							</div>
			
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4">Type of Export</label>
										<div class="col-sm-8">
											<select name="type_of_export" class="form-control">
												<option value="0">Please Select</option>
												<option value="1">Permanent</option>
												<option value="2">Temporary</option>
												<option value="3">Repair/Return</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4">Destination duties/taxes</label>
										<div class="col-sm-8">
											<div class="has-feedback">
												<select name="destination_duties" class="form-control" onchange="var optionVal=$(this).find(':selected').val(); checkselect(optionVal)">
													<option value="0">Please Select</option>
													<option value="1">Receiver</option>
													<option value="2">Shipper</option>
													<option value="3">Other</option>
												</select>
												<input type="hidden" name="approved_account_number" id="approved_account_number" class="form-control" placeholder="specify approved account number"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label><input type="checkbox" name="acceptCheck" style="margin-top:11px;" id="acceptCheck"/> &nbsp; I agree & have acknowledged on the <a href="<?=base_url('term_and_condition')?>" target="_blank">Terms & Conditions </a> . </label>
								</div>
							</div>
							<div class="row">
								<div class = "form-group">		
									<div class="col-md-6">
										<a type="button" class="form-control btn" href="javascript:history.go(-1)">Back</a>
									</div>
									<div class="col-md-6">
										
										<input type="submit" value="Next" id="next" class="form-control btn btn-primary" onclick="return checkvalid()"/>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-md-3 col-xs-12">
					<div class="well">
						<div style="text-align: center;">
							<img src="<?=base_url('assets2/image/DHL.jpg')?>" width="50%">
						</div>
						<div class="row">
							<div class="col-md-5">
								<label>Weight (Kg): </label>
							</div>
										
							<div class="col-md-7">
								<p class="pull-right"><?=$weight?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<label>Length (cm): </label>
							</div>
										
							<div class="col-md-7">
								<p class="pull-right"><?=$length?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<label>Width (cm): </label>
							</div>
										
							<div class="col-md-7">
								<p class="pull-right"><?=$width?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<label>Height (cm): </label>
							</div>
										
							<div class="col-md-7">
								<p class="pull-right"><?=$height?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<label>Volumetric Weight (Kg): </label>
							</div>
										
							<div class="col-md-7">
								<p class="pull-right"><?=$v_weight?></p>
							</div>
						</div>
						<div class="row">
							<hr>
							<div class="col-md-5">
								<label>Price (RM): </label>
							</div>
									
							<div class="col-md-7">
								<h3 style="color: #00a9b0;" class="pull-right"><?=$cost?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>	
		
	</div>
	
	<script>
		function checkselect(value) {
				if(value == "3") {
					console.log(value);
					$("#approved_account_number").attr('type', 'text');
				} else {
					console.log("haha");
					$("#approved_account_number").attr('type', 'hidden');
				}
			
		}
		
		
		
		function checkvalid() {
		var term=$("#acceptCheck");
		
		if (term.is(':checked')) {
			var id = createId();
			console.log(id);
		 	
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
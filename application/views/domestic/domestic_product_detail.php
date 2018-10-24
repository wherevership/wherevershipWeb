<style>
	.space2 {
	margin-bottom: 10px; 
	}
	.gray_background {
		background-color: #e6e6e6;
		padding: 5px;
		margin-bottom: 10px;
	}

</style>

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
									<div class="progress-bar" style="width:100%"></div>
								</div>
								<a  class="bs-wizard-dot" href="javascript:history.go(-2)"></a>
							</div>
							<div class="col-xs-4 bs-wizard-step complete">
								<div class="text-center bs-wizard-stepnum hidden-sm hidden-xs">Order Summary</div>
								<div class="text-center bs-wizard-stepnum visible-sm visible-xs">Order <br> Summary</div>
								<div class="progress">
									<div class="progress-bar" style="width:100%"></div>
								</div>
								<a  class="bs-wizard-dot" href="javascript:history.go(-1)"></a>
							</div>
							<div class="col-xs-4 bs-wizard-step complete">
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
		<form method="POST" action="" class="form-horizontal">
			<div class="row">
				<input type="hidden" name="weight" value="<?=$weight?>"/>
				<input type="hidden" name="height" value="<?=$height?>"/>
				<input type="hidden" name="width" value="<?=$width?>"/>
				<input type="hidden" name="length" value="<?=$length?>"/>
				<input type="hidden" name="v_weight" value="<?=$v_weight?>"/>
				<input type="hidden" name="cost" value="<?=$cost?>"/>
				<input type="hidden" name="userId" value="<?=$userId?>"/>
				
				<input type="hidden" name="shipper_company_name" value="<?=$shipper_company_name?>"/>
				<input type="hidden" name="shipper_country" value="<?=$shipper_country?>"/>
				<input type="hidden" id="shipperAddress1" name="shipper_address1" value="<?=$shipper_address1?>"/>
				<input type="hidden" id="shipperAddress2" name="shipper_address2" value="<?=$shipper_address2?>"/>
				<input type="hidden" id="shipperAddress3" name="shipper_address3" value="<?=$shipper_address3?>"/>
				<input type="hidden" id="shipperCity" name="shipper_city" value="<?=$shipper_city?>"/>
				<input type="hidden" id="shipperPostcode" name="shipper_postcode" value="<?=$shipper_postcode?>"/>
				<input type="hidden" id="shipperState" name="shipper_state" value="<?=$shipper_state?>"/>
				<input type="hidden" name="shipperContactPerson" value="<?=$shipper_contact_person?>"/>
				<input type="hidden" name="shipperPhoneNumber" value="<?=$shipper_phone_number?>"/>
				<input type="hidden" name="shipper_email" value="<?=$shipper_email?>"/>
				
				
				<input type="hidden" name="receiver_company_name" value="<?=$receiver_company_name?>"/>
				<input type="hidden" name="receiver_country" value="<?=$receiver_country?>"/>
				<input type="hidden" id="receiver_address1" name="receiver_address1" value="<?=$receiver_address1?>"/>
				<input type="hidden" id="receiver_address2" name="receiver_address2" value="<?=$receiver_address2?>"/>
				<input type="hidden" id="receiver_address3" name="receiver_address3" value="<?=$receiver_address3?>"/>
				<input type="hidden" id="receiver_city" name="receiver_city" value="<?=$receiver_city?>"/>
				<input type="hidden" id="receiver_postcode" name="receiver_postcode" value="<?=$receiver_postcode?>"/>
				<input type="hidden" id="receiver_state" name="receiver_state" value="<?=$receiver_state?>"/>
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
						<div class="panel-body" style="background-color: #f2f5f8">
							
							<div class="col-md-3 col-xs-12">
								<img src="<?=base_url('assets2/image/poslaju.png')?>" width="70%">
							</div>
							<div class="col-md-3 col-xs-12">
								<p>
									<?=$shipper_contact_person?> <br/>
									<?=$shipper_state?> <br/>
									<?=$shipper_country?>
								</p>
							</div>
							<div class="col-md-3 col-xs-12">
								<p>
									<?=$receiver_contact_person?> <br/>
									<?=$receiver_state?> <br/>
									<?=$receiver_country?>
								</p>
							</div>
							<div class="col-md-3 col-xs-12">
								<p>
									RM <?=$cost?>
								</p>
							</div>
						
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-xs-12">
					<div class="well">
						
						<h3 class="panel-subtitle">
							Total Price: 
						</h3> 
						<hr>
						<span style="font-size: 20pt;"><b>RM<?=$cost?></b></span>
					
					</div>
					<div class="row">
						<div class="form-group">
							<input type="submit" value="Pay Now" id="next" class="form-control btn btn-primary">
						</div>
				</div>
			</div>
		</form>
	
	</div>
</div>
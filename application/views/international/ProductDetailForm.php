<style>
	.space2 {
	margin-bottom: 10px; 
	}
	.gray_background {
		background-color: #e6e6e6;
		padding: 5px;
	}

</style>
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
								<a  class="bs-wizard-dot" href="javascript:history.go(-2)"></a>
							</div>
							<div class="col-xs-3 bs-wizard-step complete">
								<div class="text-center bs-wizard-stepnum hidden-sm hidden-xs">Custom Cleaner</div>
								<div class="text-center bs-wizard-stepnum visible-sm visible-xs">Custom <br> Cleaner</div>
								<div class="progress">
									<div class="progress-bar" style="width:100%"></div>
								</div>
								<a  class="bs-wizard-dot" href="javascript:history.go(-1)"></a>
							</div>
							<div class="col-xs-3 bs-wizard-step complete">
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
		<form method="POST" action="<?=base_url("to_int_payment_Process")?>" class="form-horizontal">
			<div class="row">
				<input type="hidden" name="weight" value="<?=$weight?>"/>
				<input type="hidden" name="height" value="<?=$height?>"/>
				<input type="hidden" name="width" value="<?=$width?>"/>
				<input type="hidden" name="length" value="<?=$length?>"/>
				<input type="hidden" name="v_weight" value="<?=$v_weight?>"/>
				<input type="hidden" name="cost" value="<?=$cost?>"/>
				<input type="hidden" name="fromState" value="<?=$fromState?>"/>
				<input type="hidden" name="toCountry" value="<?=$toCountry?>"/>
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
			
				<?php //receiver info ?>
			
				<input type="hidden" name="receiver_company_name" value="<?=$receiver_company_name?>"/>
				<input type="hidden" name="receiver_country" value="<?=$receiver_country?>"/>
				<input type="hidden" name="receiver_address1" value="<?=$receiver_address1?>"/>
				<input type="hidden" name="receiver_address2" value="<?=$receiver_address2?>"/>
				<input type="hidden" name="receiver_address3" value="<?=$receiver_address3?>"/>
				<input type="hidden" name="receiver_city" value="<?=$receiver_city?>"/>
				<input type="hidden" name="receiver_postcode" value="<?=$receiver_postcode?>"/>
				<input type="hidden" name="receiver_state" value="<?=$receiver_state?>"/>
				<input type="hidden" name="receiver_subhub" value="<?=$receiver_subhub?>"/>
				<input type="hidden" name="receiver_contact_person" value="<?=$receiver_contact_person?>"/>
				<input type="hidden" name="receiver_phone_number" value="<?=$receiver_phone_number?>"/>
				<input type="hidden" name="receiver_email" value="<?=$receiver_email?>"/>
				
				<input type="hidden" name="pickup_required" value="<?=$pickup_required?>"/>
				<input type="hidden" name="parcel_content" value="<?=$parcel_content?>"/>
				<input type="hidden" name="value_of_content" value="<?=$value_of_content?>"/>
				<input type="hidden" name="collection_date" value="<?=$collection_date?>"/>
			
				<input type="hidden" name="shipper_GST" value="<?=$shipper_GST?>"/>
				<input type="hidden" name="receiver_GST" value="<?=$receiver_GST?>"/>
				<input type="hidden" name="declared_value" value="<?=$declared_value?>"/>
				<input type="hidden" name="currecy" value="<?=$currecy?>"/>
				<input type="hidden" name="commodity_code" value="<?=$commodity_code?>"/>
				<input type="hidden" name="exemtion" value="<?=$exemtion?>"/>
				<input type="hidden" name="itn" value="<?=$itn?>"/>
				<input type="hidden" name="type_of_export" value="<?=$type_of_export?>"/>
				<input type="hidden" name="destination_duties" value="<?=$destination_duties?>"/>
				<input type="hidden" name="approved_account_number" value="<?=$approved_account_number?>"/>
			</div>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-title-bar">
						<div class="title">
							<img src="<?=base_url('assets2/image/DHL.jpg')?>" width="20%">
						</div>
					</div>
				
					<div class="panel-body" style="background-color: #f2f5f8">
						<div class="col-md-3">
								
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Pick Up Info
								</h3>
								<hr>
								<?=$shipper_contact_person?><br>
								<?=$shipper_company_name?><br>
								<?=$shipper_address1?><br>
								<?=$shipper_address2?><br>
								<?=$shipper_address3?><br>
								<?=$shipper_city?><br>
								<?=$shipper_state?><br>
								<?=$shipper_country?><br>
								<?=$shipper_postcode?><br>
								<?=$shipper_phone_number?><br>
								<?=$shipper_email?>
							</p>
						</div>
						<div class="col-md-3">
								
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Drop Off Info
								</h3>
								<hr>
								<?=$receiver_contact_person?><br>
								<?=$receiver_company_name?><br>
								<?=$receiver_address1?><br>
								<?=$receiver_address2?><br>
								<?=$receiver_address3?><br>
								<?=$receiver_city?><br>
								<?=$receiver_state?><br>
								<?=$receiver_country?><br>
								<?=$receiver_postcode?><br>
								<?=$receiver_phone_number?><br>
								<?=$receiver_email?>
							</p>
						</div>
						<div class="col-md-3">
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Parcel Info
								</h3>
								<hr>
								Length: <?=$length?>cm<br>
								Width: <?=$width?>cm<br>
								Height: <?=$height?>cm<br>
								Weight: <?=$weight?>kg<br>
								<hr>
								Parcel Content: <?=$parcel_content?><br>
								Value of content: <?=$value_of_content?>
							
								<hr>
								Required pickup: <?=$pickup_required?>
								Collection Date: <?=$collection_date?>
								
							</p>
						</div>
						<div class="col-md-3">
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Price 
								</h3> 
								<hr>
								<h4 style="font-size: 22pt;"><b>RM<?=$cost?></b><br/></h4>
								<small><?=$fuelCharge?>% Fuel Charge incluced</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-title-bar">
						<div class="title">
							<h3>Customer Clearance</h3>
						</div>
					</div>
					<div class="panel-body" style="background-color: #f2f5f8">
					<div class="col-md-3">
						<h3>Shipper's VAT/GST number</h3>
						<p><?=$shipper_GST?></p>
						<hr>
						<h3>Receiver's VAT/GST number</h3>
						<p><?=$receiver_GST?></p>
					</div>
					
					<div class="col-md-3">
						<h3>Declared Value for Customs</h3>
						<p><?=$declared_value?><?=$currecy?></p>
						<hr>
						<h3>Exemtion</h3>
						<p><?=$exemtion?></p>
					</div>
					<div class="col-md-3">
						<h3>Type of Export</h3>
						<p><?=$type_of_export?></p>
						<hr>
						<h3>itn</h3>
						<p><?=$itn?></p>
					</div>
					<div class="col-md-3">
					
						<h3>Destination Duties Taxes</h3>
						<p><?=$destination_duties?></p>
						<hr>
						<h3>Approved Account Number<h3>
						<p><?=$approved_account_number?></p>
					</div>
				</div>
				</div>
			
			</div>
			
			
			<div class="row">		
				<div class="form-group">
					<div class="col-md-6">
						<a type="button" class="form-control btn" href="javascript:history.go(-1)">Back</a>
					</div>
				
					<div class="col-md-6">
						<input type="submit" value="Next" id="next" class="form-control btn btn-primary"/>
					
					</div>
				</div>
			</div>
			
		</form>
	
</div>
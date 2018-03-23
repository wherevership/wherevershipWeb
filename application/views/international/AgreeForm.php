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
					<div class="col-lg-6 col-md-4 col-sm-6 logo-wrapper">
						<a href="<?=base_url('')?>" class="logo-wrapper">
							<img src="<?=base_url('assets2/image/logo.png')?>" class="logo hidden-xs" width="50%">
						</a>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-6 padding-off hidden-sm">
						<div class="row">
							<ol class="breadcrumb-body">
								<li class="past">
									<a href="javascript:history.go(-3)">
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">1</div>
											<div class="breadcrumb-stage">Shipper Detail</div>
										</div>
									</a>	
								</li>
								<li class="past">
									<a href="javascript:history.go(-2)">
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">2</div>
											<div class="breadcrumb-stage">Receiver Detail </div>
									
										</div>
									</a>
								</li>
								<li class="past">
									<a href="javascript:history.go(-1)">
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">3</div>
											<div class="breadcrumb-stage">Product Detail</div>
										
										</div>
									</a>
								</li>
								<li class="current">
									
										<div class="breadcrumb-statge-container">
									
											<div class="breadcrumb-stage">4</div>
											<div class="breadcrumb-stage">Agreement <span style="visibility: hidden;">.....</span></div>
										
										</div>
									
								</li>
							
						
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>


	<div class="row title-bar">
		<h1>Shipper Agreement</h1>
	</div>
	
	<div class="container">
		<form method="POST">
			<?php //shipper info ?>
			<input type="hidden" name="shipper_account_number" value=""/>
			<input type="hidden" name="shipper_account_name" value=""/>
			<input type="hidden" name="shipper_company_name" value=""/>
			<input type="hidden" name="shipper_country" value=""/>
			<input type="hidden" name="shipper_address" value=""/>
			<input type="hidden" name="shipper_city" value=""/>
			<input type="hidden" name="shipper_postcode" value=""/>
			<input type="hidden" name="shipper_state" value=""/>
			<input type="hidden" name="shipper_subhub" value=""/>
			<input type="hidden" name="shipper_contact_person" value=""/>
			<input type="hidden" name="shipper_phone_number" value=""/>
			<input type="hidden" name="shipper_email" value=""/>
			<?php //receiver info ?>
			<input type="hidden" name="receiver_account_number" value=""/>
			<input type="hidden" name="receiver_account_name" value=""/>
			<input type="hidden" name="receiver_company_name" value=""/>
			<input type="hidden" name="receiver_country" value=""/>
			<input type="hidden" name="receiver_address" value=""/>
			<input type="hidden" name="receiver_city" value=""/>
			<input type="hidden" name="receiver_postcode" value=""/>
			<input type="hidden" name="receiver_state" value=""/>
			<input type="hidden" name="receiver_subhub" value=""/>
			<input type="hidden" name="receiver_contact_person" value=""/>
			<input type="hidden" name="receiver_phone_number" value=""/>
			<input type="hidden" name="receiver_email" value=""/>
			<?php //product detail ?>
			<input type="hidden" name="shipper_country" value=""/>
			<input type="hidden" name="shipper_country" value=""/>
			<input type="hidden" name="pieces" value=""/>
			<input type="hidden" name="pieces_weight" value=""/>
			<input type="hidden" name="length" value=""/>
			<input type="hidden" name="width" value=""/>
			<input type="hidden" name="height" value=""/>
			<input type="hidden" name="shipper_GST" value=""/>
			<input type="hidden" name="receiver_GST" value=""/>
			<input type="hidden" name="declared_value" value=""/>
			<input type="hidden" name="currecy" value=""/>
			<input type="hidden" name="commodity_code" value=""/>
			<input type="hidden" name="Exemtion" value=""/>
			<input type="hidden" name="ITN" value=""/>
			<input type="hidden" name="type_of_export" value=""/>
			<input type="hidden" name="destination_duties" value=""/>
			<input type="hidden" name="approved_account_number" value=""/>
			<div class="row">
				<p style="font-size: 15px; color: red">
					unless otherwise agree in writing .i/we agree that DHL's Terms and Condition of
					<br />
					Carriage are all the terms of the contract between me/us and DHL and (1) such Terms and Conditions and,
                    <br />
                    where applicable, the Warsaw Convention limits and/or excludes DHL's liabity For loss, damage or delay and
                    <br />
                    (2) the shipment does not contain cash or dangerous goods
				</p>
					<div class="col-md-12">
						<div class="form-group">
							<p>See
								<a>Term & Condition</a>
							</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label><input type="checkbox" name="agree" value="Facebook" class="marketing"/>I Agree</label>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-sm-4">Date</label>
								<div class="col-sm-8">
						
									<input type="text" name="date" id="date" class="form-control"/>
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
						<input type="submit" value="Next" id="next" class="form-control btn btn-success"/>
					</div>
				</div>
			
			</div>
			
		</form>
</div>
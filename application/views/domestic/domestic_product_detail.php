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
					<div class="col-lg-6 col-md-4 col-sm-6 logo-wrapper">
						<a href="<?=base_url('')?>" class="logo-wrapper">
							<img src="<?=base_url('assets2/image/logo.png')?>" class="logo hidden-xs" width="50%">
						</a>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-6 padding-off hidden-sm">
						<div class="row">
							<ol class="breadcrumb-body">
								<li class="past">
									<a href="javascript:history.go(-2)">
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
								<li class="current">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">3</div>
											<div class="breadcrumb-stage">Product Detail</div>
										
										</div>
								
								</li>
								<li class="future">
									
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
		<h1>Products & Services</h1>
	</div>
	
	<div class="container">
	<form method="POST" action="<?=base_url('int_agreement')?>" class="form-horizontal">
			<input type="hidden" name="weight" value="<?=$weight?>"/>
			<input type="hidden" name="height" value="<?=$height?>"/>
			<input type="hidden" name="width" value="<?=$width?>"/>
			<input type="hidden" name="length" value="<?=$length?>"/>
			<input type="hidden" name="v_weight" value="<?=$v_weight?>"/>
			<input type="hidden" name="cost" value="<?=$cost?>"/>
			<input type="hidden" name="fromState" value="<?=$fromState?>"/>
			<input type="hidden" name="toCountry" value="<?=$toCountry?>"/>
			
			<!--shipper info-->
			<input type="hidden" name="shipper_account_number" value="<?=$shipper_account_number?>"/>
			<input type="hidden" name="shipper_account_name" value="<?=$shipper_account_name?>"/>
			<input type="hidden" name="shipper_company_name" value="<?=$shipper_company_name?>"/>
			<input type="hidden" name="shipper_country" value="<?=$shipper_country?>"/>
			<input type="hidden" name="shipper_address" value="<?=$shipper_address?>"/>
			<input type="hidden" name="shipper_city" value="<?=$shipper_city?>"/>
			<input type="hidden" name="shipper_postcode" value="<?=$shipper_postcode?>"/>
			<input type="hidden" name="shipper_state" value="<?=$shipper_state?>"/>
			<input type="hidden" name="shipper_subhub" value="<?=$shipper_subhub?>"/>
			<input type="hidden" name="shipper_contact_person" value="<?=$shipper_contact_person?>"/>
			<input type="hidden" name="shipper_phone_number" value="<?=$shipper_phone_number?>"/>
			<input type="hidden" name="shipper_email" value="<?=$shipper_email?>"/>
			
			<!-- //receiver info -->
			<input type="hidden" name="receiver_account_number" value="<?=$receiver_account_number?>"/>
			<input type="hidden" name="receiver_account_name" value="<?=$receiver_account_name?>"/>
			<input type="hidden" name="receiver_company_name" value="<?=$receiver_company_name?>"/>
			<input type="hidden" name="receiver_country" value="<?=$receiver_country?>"/>
			<input type="hidden" name="receiver_address" value="<?=$receiver_address?>"/>
			<input type="hidden" name="receiver_city" value="<?=$receiver_city?>"/>
			<input type="hidden" name="receiver_postcode" value="<?=$receiver_postcode?>"/>
			<input type="hidden" name="receiver_state" value="<?=$receiver_state?>"/>
			<input type="hidden" name="receiver_subhub" value="<?=$receiver_subhub?>"/>
			<input type="hidden" name="receiver_contact_person" value="<?=$receiver_contact_person?>"/>
			<input type="hidden" name="receiver_phone_number" value="<?=$receiver_phone_number?>"/>
			<input type="hidden" name="receiver_email" value="<?=$receiver_email?>"/>
			
			<div class="row space2">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4">Type</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<select name="shipper_country" class="form-control">
										<option value="1">International Non Document</option>
										<option value="2">International Document</option>
										<option value="3">Domestic</option>
									</select>
								</div>
							</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4">Pickup Required</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<select name="shipper_country" class="form-control">
										<option value="0">Select</option>
										<option value="1">Yes</option>
										<option value="2">No</option>
									</select>
								</div>
							</div>
					</div>
				</div>
			</div>
					
			<div class="row space2">
				<h2>Shipment Detail</h2>
			</div>
			<div class="gray_background">
			<div class="row space2">
			
				<div class="col-md-2">
					<div class="form-group">
						<label>Pieces*</label>
						<input type="text" name="pieces" id="pieces" class="form-control"/>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Pieces Weight(KGs)</label>
						<input type="text" name="pieces_weight" id="pieces_weight" class="form-control" value="<?=$weight?>"/>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Length(CM)</label>
						<input type="text" name="length" id="length" class="form-control" value="<?=$length?>"/>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Width(CM)</label>
						<input type="text" name="width" id="width" class="form-control" value="<?=$width?>"/>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Height(CM)</label>
						<input type="text" name="height" id="height" class="form-control" value="<?=$height?>"/>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			
			</div>
			</div>					
			
			<div class="row">
				<div class ="form-group">
					<div class="col-md-6">
						<a type="button" class="form-control btn" href="javascript:history.go(-1)">Back</a>
					</div>
					<div class="col-md-6" class="form-control">
						<input type="submit" value="Next" id="next" class="submit form-control btn btn-success"/>
					</div>
				</div>
			</div>
		</form>
	
</div>
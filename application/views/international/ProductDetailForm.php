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
									<a href="javascript:history.go(-2)">
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">1</div>
											<div class="breadcrumb-stage">Shipper Detail</div>
										</div>
									</a>	
								</li>
								<li class="past">
									<a href="javascript:history.go(-1)">
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
	<form method="POST" action="<?=base_url('int_agreement')?>">
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
						<input type="text" name="pieces_weight" id="pieces_weight" class="form-control"/>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Length(CM)</label>
						<td><input type="text" name="length" id="length" class="form-control"/></td>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Width(CM)</label>
						<td><input type="text" name="width" id="width" class="form-control"/></td>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Height(CM)</label>
						<td><input type="text" name="height" id="height" class="form-control"/></td>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			
			</div>
			</div>					
			<div class="row space2">
				<h3>*** This Part will not display Other than Non-Document Shipment Onlys ***</h3>
			</div>
			
			<div class="row space2">
				<h5>For Non Documents Shipment Only (Custom Requirement)</h5>
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
			
			<div class="row space2">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4">Declared Value For Customs (as on commercial,proforma invoice</label>
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
			<div class="row space2">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4">(FTR) Exemtion</label>
							<div class="col-sm-8">
								<select name="Exemtion" class="form-control">
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
									<input type="text" name="ITN" id="ITN" class="form-control"/>
								</div>
							</div>
					</div>
				</div>
			</div>
			
			<div class="row space2">
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
									<select name="destination_duties" class="form-control">
									<option value="0">Please Select</option>
									<option value="1">Permanent</option>
									<option value="2">Temporary</option>
									<option value="3">Repair/Return</option>
								</select>
								<input type="text" name="approved_account_number" id="approved_account_number" class="form-control"/>
								</div>
							</div>
					</div>
				</div>
			</div>
			
			
			
				<div class = "form-group">		
					<div class="col-md-6">
						<a type="button" class="form-control btn" href="javascript:history.go(-1)">Back</a>
					</div>
					<div class="col-md-6" class="form-control">
						<input type="submit" value="Next" id="next" class="form-control btn btn-success"/>
					</div>
				</div>
			
		</form>
	
</div>
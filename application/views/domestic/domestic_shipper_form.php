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
											<div class="breadcrumb-stage">Shipper <br/>Detail</div>
										</div>
										
								</li>
								<li class="future">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">2</div>
											<div class="breadcrumb-stage">Receiver <br/>Detail </div>
									
										</div>
									
								</li>
								<li class="future">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">3</div>
											<div class="breadcrumb-stage">Product <br/>Detail</div>
										
										</div>
									
								</li>
								<li class="future">
									
										<div class="breadcrumb-statge-container">
									
											<div class="breadcrumb-stage">4</div>
											<div class="breadcrumb-stage">Shipment <br/>Overview</div>
										
										</div>
									
								</li>
							
						
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	

		<div class="row title-bar">
			<h1 class="title">From (Shipper)</h1>
		</div>
		
		<div class="container">
		<form method="POST" action="<?=base_url('dtc_receiver')?>" class="form-horizontal">
				<div class="row">
				<input type="hidden" name="weight" value="<?=$weight?>"/>
				<input type="hidden" name="height" value="<?=$height?>"/>
				<input type="hidden" name="width" value="<?=$width?>"/>
				<input type="hidden" name="length" value="<?=$length?>"/>
				<input type="hidden" name="v_weight" value="<?=$v_weight?>"/>
				<input type="hidden" name="cost" value="<?=$cost?>"/>
				<input type="hidden" name="fromState" value="<?=$fromState?>"/>
				<input type="hidden" name="toState" value="<?=$toState?>"/>
				<div class="col-md-6">
					<div class="form-group">
						<div class="col-sm-4">
							<label for="shipper_account_number">Acc Number: </label>
						</div>
						
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="shipper_account_number" id="shipper_account_number" class="form-control" title="please enter shipper's account number!"/>
								</div>
							</div>
					</div>
					<div class ="form-group">
						<div class="col-sm-4">
							<label for="shipper_account_name">Acc Name: </label>
						</div>
						
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="shipper_account_name" id="shipper_account_name" class="form-control" title="please enter shipper's name!"/>
								</div>
						</div>
					</div>	
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
							<label for="shipper_address">Address:<span class="required">*</span></label>
						</div>
						
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_address" id="shipper_address" class="form-control" title="please enter shipper's address" required />
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
								<input type="text" name="shipper_postcode" id="shipper_postcode" class="form-control" title="please enter shipper's postcode" required/>
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
				</div>
				<div class="col-md-6">
					<div class ="form-group">
						<div class="col-sm-4">
							<label for="shipper_subhub">Subhub:</label>
						</div>
						
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_subhub" id="shipper_subhub" class="form-control" title="please enter shipper's subhub"/>
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
			<div class ="form-group">
				<div class="col-md-6">
						<a type="button" class="form-control btn" href="javascript:history.go(-1)">Back</a>
					</div>
				
					<div class="col-md-6">
						<input type="submit" value="Next" id="next" class="form-control btn btn-success"/>
					
					</div>
			</div>
			
		</form>
		
	</div>

	
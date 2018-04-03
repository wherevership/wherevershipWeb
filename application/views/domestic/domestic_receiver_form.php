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
								<li class="past">
									<a href="javascript:history.go(-1)">
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">1</div>
											<div class="breadcrumb-stage">Shipper <br/>Detail</div>
										</div>
									</a>	
								</li>
								<li class="current">
									
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
			<h1 class="title">To (Receiver)</h1>
		</div>
	<div class="container">
		<form method="POST" action="<?=base_url('dtc_product_detail')?>" class="form-horizontal">
			<div class="row">
				<input type="hidden" name="weight" value="<?=$weight?>"/>
				<input type="hidden" name="height" value="<?=$height?>"/>
				<input type="hidden" name="width" value="<?=$width?>"/>
				<input type="hidden" name="length" value="<?=$length?>"/>
				<input type="hidden" name="v_weight" value="<?=$v_weight?>"/>
				<input type="hidden" name="cost" value="<?=$cost?>"/>
				<input type="hidden" name="fromState" value="<?=$fromState?>"/>
				<input type="hidden" name="toState" value="<?=$toState?>"/>
				
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
				
				
				<div class="col-md-6">
					<div class="form-group">
						<div class="col-sm-4">
							<label for="receiver_account_number">Acc Number:</label>
						</div>
						
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_account_number" id="receiver_account_number" class="form-control" title="please enter receiver's account number!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
						<div class="col-sm-4">
							<label for="receiver_account_name">Acc Name:</label>
						</div>
						
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_account_name" id="receiver_account_name" class="form-control" title="please enter receiver's account name!"/>
								</div>
							</div>
					</div>	
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
							<label for="receiver_address">Address:<span class="required">*</span></label>
						</div>
						
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_address" id="receiver_address" class="form-control" title="please enter receiver's address!" required/>
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
									<input type="text" name="receiver_postcode" id="receiver_postcode" class="form-control" title="please enter receiver's postcode!" required/>
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
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="col-sm-4">
							<label for="receiver_subhub">Subhub:</label>
						</div>
						
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_subhub" id="receiver_subhub" class="form-control" title="please enter receiver's subhub!"/>
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

	
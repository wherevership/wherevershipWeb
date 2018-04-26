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
								<li class="current">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">1</div>
											<div class="breadcrumb-stage">Shipper Detail</div>
										</div>
										
								</li>
								<li class="future">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">2</div>
											<div class="breadcrumb-stage">Receiver Detail </div>
									
										</div>
									
								</li>
								<li class="future">
									
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
			<h1 class="title">From (Shipper)</h1>
		</div>
		
		<div class="container">
		<form method="POST" action="<?=base_url('dtc_receiver')?>" class="form-horizontal">
				<div class="row">
				<p><?=$weight?></p>
				<input type="text" name="weight" value="<?=$weight?>"/>
				<input type="text" name="width" value="<?=$width?>"/>
				<input type="text" name="length" value="<?=$length?>"/>
				<input type="text" name="v_weight" value="<?=$v_weight?>"/>
				<input type="text" name="cost" value="<?=$cost?>"/>
				<input type="text" name="fromState" value="<?=$fromState?>"/>
				<input type="text" name="toState" value="<?=$toState?>"/>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4">Acc Number: </label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="shipper_account_number" id="shipper_account_number" class="form-control" title="please enter shipper's account number!"/>
								</div>
							</div>
					</div>
					<div class ="form-group">
						<label class="col-sm-4">Acc Name: </label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="shipper_account_name" id="shipper_account_name" class="form-control" title="please enter shipper's name!"/>
								</div>
						</div>
					</div>	
					<div class ="form-group">
						<label class="col-sm-4">Company Name: </label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="shipper_company_name" id="shipper_company_name" class="form-control" title="please enter company name!"/>
								</div>
							</div>
					</div>		
					<div class ="form-group">
						<label class="col-sm-4">Country:</label>
							<div class="col-sm-8">
							<div class="has-feedback">
								<select name="shipper_country" class="form-control">
									<option value="MY">Malaysia</option>
									<option value="SG">Singapore</option>
									<option value="ID">Indonesia</option>
								</select>
							</div>
						</div>
					</div>	
					<div class ="form-group">
						<label class="col-sm-4">Address:</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_address" id="shipper_address" class="form-control" title="please enter shipper's address" />
							</div>
						</div>
					</div>
					<div class ="form-group">
						<label class="col-sm-4">City:</label>
						<div class="col-sm-8">
							<div class="has-feedback">
							<input type="text" name="shipper_city" id="shipper_city" class="form-control" title="please enter shipper's city!"/>
							</div>
						</div>	
					</div>			
					<div class ="form-group">
						<label class="col-sm-4">PostCode:</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_postcode" id="shipper_postcode" class="form-control" title="please enter shipper's postcode"/>
							</div>
						</div>
					</div>			
					<div class ="form-group">
						<label class="col-sm-4">State:</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_state" id="shipper_state" class="form-control" title="please enter shipper's state"/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class ="form-group">
						<label class="col-sm-4">Subhub:</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_subhub" id="shipper_subhub" class="form-control" title="please enter shipper's subhub"/>
							</div>
						</div>
					</div>
					<div class ="form-group">
						<label class="col-sm-4">Contact Person:</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_contact_person" id="shipper_contact_person" class="form-control" title="please enter contact person name" />
							</div>
						</div>
					</div>	
					<div class ="form-group">
						<label class="col-sm-4">Phone Number</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_phone_number" id="shipper_contact_Person" class="form-control" title="please enter contact person phone number"/>
							</div>
						</div>
					</div>
					<div class ="form-group">
						<label class="col-sm-4">Email</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="shipper_email" id="shipper_email" class="form-control" title="please enter contact person email"/>
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

	
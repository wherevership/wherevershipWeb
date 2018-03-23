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
									<a href="javascript:history.go(-1)">
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">1</div>
											<div class="breadcrumb-stage">Shipper Detail</div>
										</div>
									</a>	
								</li>
								<li class="current">
									
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
			<h1 class="title">To (Receiver)</h1>
		</div>
	<div class="container">
		<form method="POST" action="<?=base_url('tk_product_detail')?>" class="form-horizontal">
			<div class="row">	
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
			
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4">Acc Number</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_account_number" id="receiver_account_number" class="form-control" title="please enter receiver's account number!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4">Acc Name</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_account_name" id="receiver_account_name" class="form-control" title="please enter receiver's account name!"/>
								</div>
							</div>
					</div>	
					<div class="form-group">
						<label class="col-sm-4">Company Name</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_company_name" id="receiver_company_name" class="form-control" title="please enter receiver's company name!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4">Country</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<select name="receiver_country" class="form-control">
										<option value="MY">Malaysia</option>
										<option value="SG">Singapore</option>
										<option value="ID">Indonesia</option>
									</select>
								</div>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4">Address</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_address" id="receiver_address" class="form-control" title="please enter receiver's address!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4">City</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_city" id="receiver_city" class="form-control" title="please enter receiver's city!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4">PostCode</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_postcode" id="receiver_postcode" class="form-control" title="please enter receiver's postcode!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
					<label class="col-sm-4">State</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="receiver_state" id="receiver_state" class="form-control" title="please enter receiver's state!"/>
							</div>
						</div>
				</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4">Subhub</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_subhub" id="receiver_subhub" class="form-control" title="please enter receiver's subhub!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4">Contact Person</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_contact_person" id="receiver_contact_person" class="form-control" title="please enter receiver's name!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4">Phone Number</label>
							<div class="col-sm-8">
								<div class="has-feedback">
									<input type="text" name="receiver_phone_number" id="receiver_phone_number" class="form-control" title="please enter receiver's phone number!"/>
								</div>
							</div>
					</div>
					<div class="form-group">
					<label class="col-sm-4">Email</label>
						<div class="col-sm-8">
							<div class="has-feedback">
								<input type="text" name="receiver_email" id="receiver_email" class="form-control" title="please enter receiver's email!"/>
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

	
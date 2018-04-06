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
				
				<input type="hidden" name="shipper_company_name" value="<?=$shipper_company_name?>"/>
				<input type="hidden" name="shipper_country" value="<?=$shipper_country?>"/>
				<input type="hidden" id="shipper_address1" name="shipper_address1" value="<?=$shipper_address1?>"/>
				<input type="hidden" id="shipper_address2" name="shipper_address2" value="<?=$shipper_address2?>"/>
				<input type="hidden" id="shipper_address3" name="shipper_address3" value="<?=$shipper_address3?>"/>
				<input type="hidden" id="shipper_city" name="shipper_city" value="<?=$shipper_city?>"/>
				<input type="hidden" id="shipper_postcode" name="shipper_postcode" value="<?=$shipper_postcode?>"/>
				<input type="hidden" id="shipper_state" name="shipper_state" value="<?=$shipper_state?>"/>
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
				<input type="hidden" name="receiver_contact_person" value="<?=$receiver_contact_person?>"/>
				<input type="hidden" name="receiver_phone_number" value="<?=$receiver_phone_number?>"/>
				<input type="hidden" name="receiver_email" value="<?=$receiver_email?>"/>
				
			<!--	<input type="hidden" name="type" value="<?=$receiver_email?>"/> -->
				<input type="hidden" name="pickup_required" value="<?=$pickup_required?>"/>
				<input type="hidden" name="pickup_required" value="<?=$parcel_content?>"/>
				<input type="hidden" name="pickup_required" value="<?=$value_of_content?>"/>
				
			</div>
			
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-title-bar">
						<div class="title">
							<img src="<?=base_url('assets2/image/poslaju.png')?>" width="20%">
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
								
							</p>
						</div>
						<div class="col-md-3">
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Price 
								</h3> 
								<hr>
								<span style="font-size: 20pt;"><b>RM<?=$cost?></b></span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					 <label><input type="checkbox" name="acceptNotice" style="margin-top:11px;"/> &nbsp; I agree & have acknowledged on the <a href="<?=base_url('term_and_condition')?>" target="_blank">Terms & Conditions </a> . </label>
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

	
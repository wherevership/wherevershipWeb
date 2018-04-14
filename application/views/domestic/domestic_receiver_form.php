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
											<div class="breadcrumb-stage">Shipment <br/>Detail</div>
										</div>
									</a>	
								</li>
								<li class="current">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">2</div>
											<div class="breadcrumb-stage">Shipment <br/>Overview </div>
									
										</div>
								
								</li>
								<li class="future">
									
										<div class="breadcrumb-statge-container">
										
											<div class="breadcrumb-stage">3</div>
											<div class="breadcrumb-stage">Payment <br/>Option</div>
										
										</div>
									
								</li>
								
						
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		<div class="row title-bar">
			<h1 class="title">Shipment Overview</h1>
		</div>
	<div class="container">
		<form method="POST" action="" class="form-horizontal">
			<div class="row">
				<input type="hidden" name="weight" value="<?=$weight?>"/>
				<input type="hidden" name="height" value="<?=$height?>"/>
				<input type="hidden" name="width" value="<?=$width?>"/>
				<input type="hidden" name="length" value="<?=$length?>"/>
				<input type="hidden" name="v_weight" value="<?=$v_weight?>"/>
				<input type="hidden" name="cost" value="<?=$cost?>"/>
				<input type="hidden" name="userId" value="<?=$useId?>"/>
				
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

<script>
	var weight = parseFloat("<?=$weight?>");
	var height = parseInt("<?=$height?>");
	var width = parseInt("<?=$width?>");
	var length = parseInt("<?=$length?>");
	var cost = parseFloat("<?=$cost?>");
	var userId = "<?=$useId?>";
	
	var shipperCompanyName = "<?=$shipper_company_name?>";
	var shipperCountry = "<?=$shipper_country?>";
	var shipperAddress1 = "<?=$shipper_address1?>";
	var shipperAddress2 = "<?=$shipper_address2?>";
	var shipperAddress3 = "<?=$shipper_address3?>";
	var shipperCity = "<?=$shipper_city?>";
	var shipperPostcode = "<?=$shipper_postcode?>";
	var shipperState = "<?=$shipper_state?>";
	var shipperCountry = "<?=$shipper_country?>"
	var shipperContactPerson = "<?=$shipper_contact_person?>";
	var shipperPhoneNumber = "<?=$shipper_phone_number?>";
	var shipperEmail = "<?=$shipper_email?>";
	
	var receiverCompanyName = "<?=$receiver_company_name?>";
	var receiverCountry = "<?=$receiver_country?>";
	var receiverAddress1 = "<?=$receiver_address1?>";
	var receiverAddress2 = "<?=$receiver_address2?>";
	var receiverAddress3 = "<?=$receiver_address3?>";
	var receiverCity = "<?=$receiver_city?>";
	var receiverPostcode = "<?=$receiver_postcode?>";
	var receiverState = "<?=$receiver_state?>";
	var receiverContactPerson = "<?=$receiver_contact_person?>";
	var receiverPhoneNumber = "<?=$receiver_phone_number?>";
	var receiverEmail = "<?=$receiver_email?>";
	
	var pickupRequired = "<?=$pickup_required?>";
	var parcelContent = "<?=$parcel_content?>";
	var valueOfContent = "<?=$value_of_content?>";
	
	var newId = "";
	
	var database = firebase.database().ref('Shipment');
			
				database.once('value', snap => {
					var object1 = snap.val();
					window.keys = Object.keys(object1);
					var lastKeys = keys[keys.length-1];
					var pixel = "SH";
					var id = parseInt(lastKeys.substring(2,10));
					id = id + 1;
					var idString = id.toString();
				
					if (idString.length == 1) {
						window.newId = pixel + "00000" + id;
					
					} else if (idString.length == 2) {
						window.newId = pixel + "0000" + id;
					} else if (idString.length == 3) {
						window.newId = pixel + "000" + id;
					} else if (idString.length == 4) {
						window.newId = pixel + "00" + id;
					} else if (idString.length == 5) {
						window.newId = pixel + "0" + id;
					} else if (idString.length == 6) {
						window.newId = pixel + id;
					} 
				console.log(window.newId);
				firebase.database().ref('Shipment/' + window.newId).set({
					weight: weight,
					height: height,
					width: width,
					length: length, 
					cost: cost,
					userId: userId,
					shipperCompanyName: window.shipperCompanyName,
					shipperCountry: window.shipperCountry,
					shipperAddress1: window.shipperAddress1,
					shipperAddress2: window.shipperAddress2,
					shipperAddress3: window.shipperAddress3,
					shipperCity: window.shipperCity,
					shipperPostcode: window.shipperPostcode,
					shipperState: window.shipperState,
					shipperContactPerson: window.shipperContactPerson,
					shipperPhoneNumber: window.shipperPhoneNumber,
					shipperEmail: window.shipperEmail,
					receiverCompanyName: window.receiverCompanyName,
					receiverCountry: window.receiverCountry,
					receiverAddress1: window.receiverAddress1,
					receiverAddress2: window.receiverAddress2,
					receiverAddress3: window.receiverAddress3,
					receiverCity: window.receiverCity,
					receiverPostcode: window.receiverPostcode,
					receiverState: window.receiverState,
					receiverContactPerson: window.receiverContactPerson,
					receiverPhoneNumber: window.receiverPhoneNumber,
					receiverEmail: window.receiverEmail,
					pickupRequired: window.pickupRequired,
					parcelContent: window.parcelContent,
					valueOfContent: window.valueOfContent,
					serviceType: "Domestic",
					status: "Unpaid"
				});
				
			});
			
	
	
</script>
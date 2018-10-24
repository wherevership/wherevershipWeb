		<div class="row responsive-quote">
				<div id="homeStandardContainer" class="homeTabContainer">
					<div class="col-lg-offset-2 col-md-offset-1 col-lg-8 col-md-10 home-tab-input-container no-padding">
						<div class="responsive-quote-bar">
							<div class="container-fluid">
								<form id="homepageInstantQuoteForm" class="form-horizontal" role="form" action="https://thelorry.com/book" method="post">
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 no-padding">
										<div class="form-control flat home-tab-input home-tab-vehicle-btn selectVehicleBtn" data-toggle="modal" data-target="#myVehicleModal">
											<span style="color:#5f6273;">Vehicle...</span>
											<span class="fa fa-spinner fa-spin loadVehicleSpinner" style="display:none;"></span>
										</div>
										<input hidden id="lorrySize" name="lorrySize" type="text"/>
										<input hidden id="country" name="country" value="my" type="text"/>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 no-padding" data-toggle="modal" data-target=".myPickupFrom">
										<input type="text" id="pickUpAddress" name="addressFull[0]" class="form-control flat home-tab-input-address" readonly="true" placeholder="From..." value="" />
										<input hidden id="pickupAddressVal" name="addressFull[0]" type="text" />
										<input hidden id="autoPickupUnit" name="addressUnit[0]" type="text" />
										<input hidden id="autoPickupStreet" name="addressStreet[0]" type="text" />
										<input hidden id="autoPickupZip" name="addressZip[0]" type="text" />
										<input hidden id="autoPickupCity" name="addressCity[0]" type="text" />
										<input hidden id="autoPickupState" name="addressState[0]" type="text" />
										<input hidden id="autoPickupLatitude" name="addressLatitude[0]" type="text" />
										<input hidden id="autoPickupLongitude" name="addressLongitude[0]" type="text" />
										<input hidden id="pickBuilingName" name="buildingName[0]" type="text" />
										<input hidden id="pickBuilingUnit" name="buildingUnit[0]" type="text" />
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 no-padding" data-toggle="modal" data-target=".myDeliveryTo">
										<input type="text" id="dropOffAddress" name="addressFull[1]" class="form-control flat home-tab-input-address" readonly="true" placeholder="To.." value=""/>
										<input hidden id="dropoffAddressVal" name="addressFull[1]" type="text" />
										<input hidden id="autoDropoffUnit" name="addressUnit[1]" type="text" />
										<input hidden id="autoDropoffStreet" name="addressStreet[1]" type="text" />
										<input hidden id="autoDropoffZip" name="addressZip[1]" type="text" />
										<input hidden id="autoDropoffCity" name="addressCity[1]" type="text" />
										<input hidden id="autoDropoffState" name="addressState[1]" type="text" />
										<input hidden id="autoDropoffLatitude" name="addressLatitude[1]" type="text" />
										<input hidden id="autoDropoffLongitude" name="addressLongitude[1]" type="text" />
										<input hidden id="dropBuildingName" name="buildingName[1]" type="text" />
										<input hidden id="dropBuildingunit" name="buildingUnit[1]" type="text" />
									</div>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 no-padding">
										<input type="text" id="standardDate" name="standardDate" readonly="true" class="form-control flat home-tab-input-date" placeholder="Date" />
									</div>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 no-padding">
										<button type="button" class="btn btn-quote instantQuote">Instant Quotation</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="homeDisposalContainer" class="homeTabContainer avenir-light" style="display:none;">
					<div class="col-lg-12 col-md-12 home-tab-input-container">
						<div class="container-fluid">
							This is disposal
						</div>
					</div>
				</div>
				<div id="homeRedeemContainer" class="homeTabContainer avenir-light" style="display:none;">
					<div class="col-lg-12 col-md-12 home-tab-input-container">
						<div class="container-fluid">
							This is redeem
						</div>
					</div>
				</div>
				
			</div>

			
			
			<div class="modal fade" id="myVehicleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog-vehicle modal-dialog">
			<div class="modal-content modal-content-vehicle">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4>Select Vehicle Type:</h4>
				</div>
				<div class="modal-body marg-top-25">
					<div class="row">
						<div class="col-lg-12 col-md-12 no-padding">
							<div class="col-lg-4 col-md-4 modal-vehicle-words">
								<div class="selectVehicleType" data-vehicle-type="1" data-vehicle-name="1-Tonne Lorry">
									<div class="vehicle-hover1 col-lg-12 col-md-12 col-sm-4 col-xs-12"></div>
									<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 no-padding marg-bott-25">
										<h4>1-tonne lorry</h4>
										<p>Max size (ft): 9' x 5' x 5'<br>Max Weight (kg): 1,000</p>
										<p class="sub">*Room/Apartment moving</p> 
										<div class="hidden-lg hidden-md hidden-sm col-xs-12 modal-vehicle-bottom-line"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 modal-vehicle-words">
								<div class="selectVehicleType" data-vehicle-type="2" data-vehicle-name="3-Tonne (14-ft) Lorry">
									<div class="vehicle-hover2 col-lg-12 col-md-12 col-sm-4 col-xs-12"></div>
									<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 no-padding marg-bott-25">
										<h4>3-tonne(14-ft) lorry</h4>
										<p>Max size (ft): 14' x 7'2" x 7'<br>Max Weight (kg): 3,000</p>
										<p class="sub">*Medium load house or office moves</p> 
										<div class="hidden-lg hidden-md hidden-sm col-xs-12 modal-vehicle-bottom-line"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 modal-vehicle-words">
								<div class="selectVehicleType" data-vehicle-type="3" data-vehicle-name="3-Tonne (17-ft) Lorry">
									<div class="vehicle-hover3 col-lg-12 col-md-12 col-sm-4 col-xs-12"></div>
									<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 no-padding marg-bott-25">
										<h4>3-tonne(17-ft) lorry</h4>
										<p>Max size (ft): 16.5' x 7'2" x 7'<br>Max Weight (kg): 3,000</p>
										<p class="sub">*Heavy load house or office moves</p> 
										<div class="hidden-lg hidden-md hidden-sm col-xs-12 modal-vehicle-bottom-line"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 no-padding">
							<div class="col-lg-6 col-md-6 modal-vehicle-words">
								<div class="selectVehicleType" data-vehicle-type="9" data-vehicle-name="4x4 Pickup">
									<div class="vehicle-hover4 col-lg-12 col-md-12 col-sm-4 col-xs-12"></div>
									<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 no-padding marg-bott-25">
										<h4>4x4 Pickup</h4>
										<p>Max size (ft): 4' x 3' x 2'<br>Max Weight (kg): 500</p>
										<p class="sub">*Light furniture/boxes</p> 
										<div class="hidden-lg hidden-md hidden-sm col-xs-12 modal-vehicle-bottom-line"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 modal-vehicle-words">
								<div class="selectVehicleType" data-vehicle-type="4" data-vehicle-name="Van">
									<div class="vehicle-hover5 col-lg-12 col-md-12 col-sm-4 col-xs-12"></div>
									<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 no-padding marg-bott-25">
										<h4>Van</h4>
										<p>Max size (ft): 8' x 3' x 4'<br>Max Weight (kg): 500</p>
										<p class="sub">*Light furniture/boxes</p> 
									</div>
								</div>
							</div>
							<!-- <div class="col-lg-4 col-md-4 modal-vehicle-words">
								<div class="selectVehicleType" data-vehicle-type="goget" data-vehicle-name="motorcycle">
									<div class="vehicle-hover6 col-lg-12 col-md-12 col-sm-4 col-xs-12"></div>
									<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 no-padding marg-bott-25">
										<h4>Motorcycle</h4>
										<p>Max size (ft): 1' x 1' x 1'<br>Max Weight (kg): 10</p>
										<p class="sub">*Documents/small items</p> 
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<div class="row notes-suitable">
						<p>* : Suitable for</p>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Popup Pickup FROM-->
	<div class="modal fade myPickupFrom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog-pickup-address modal-dialog">
			<div class="modal-content modal-content-address padd-bott-25" style="background-color:#e6e6e6;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title avenir-black text-left">Pickup Address</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div id="homeStandardContainer" class="homeTabContainer">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" id="autoPickupAddress" name="addressFull[0]" class="form-control flat home-tab-input-modal" placeholder="Street address" />
								<input hidden id="autoPickupUnit" name="addressUnit[0]" type="text" />
								<input hidden id="autoPickupStreet" name="addressStreet[0]" type="text" />
								<input hidden id="autoPickupZip" name="addressZip[0]" type="text" />
								<input hidden id="autoPickupCity" name="addressCity[0]" type="text" />
								<input hidden id="autoPickupState" name="addressState[0]" type="text" />
								<input hidden id="autoPickupLatitude" name="addressLatitude[0]" type="text" />
								<input hidden id="autoPickupLongitude" name="addressLongitude[0]" type="text" />
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" class="form-control flat home-tab-input-modal buildingNamePick" placeholder="Building name (Optional)" />
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" class="form-control flat home-tab-input-modal buildingUnitPick" placeholder="Unit no. (Optional)"/>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 avenir-black" style="font-weight:100; font-size:18px;  margin-top:10px; color:#5f6273;">
								Address Guide
							</div>
							<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 my-address-margin">
								<div class="my-address-guide-street avenir-black text-center">Street Address:</div>
								<div class="my-address-guide-words avenir-light">i.e. <span class="my-address-unit-responsive2">L-1A,</span> <span class="my-address-building-responsive2">Renault Building,</span> <span class="my-address-guide-ex avenir-black">Jalan Kemajuan 1</span><span class="">, PJ</span></div>
							</div>
							<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 my-address-margin">
								<div class="my-address-guide-street avenir-black text-center">Building Name:</div>
								<div class="my-address-guide-words avenir-light">i.e. <span class="my-address-unit-responsive2">L-1A,</span> <span class="my-address-guide-ex avenir-black">Renault Building</span> <span class="my-address-street-responsive3">, Jalan Kemajuan 1, PJ</span></div>
							</div>
							<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 my-address-margin">
								<div class="my-address-guide-street avenir-black text-center">Unit Number:</div>
								<div class="my-address-guide-words avenir-light">i.e. <span class="my-address-guide-ex avenir-black">L-1A</span>, <span class="my-address-building-responsive2">Renault Building,</span> <span class="my-address-street-responsive3">Jalan Kemajuan 1, PJ</span></div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center avenir-light my-address-submit-button">
								<button type="button" class="btn btn-dialog-address btn-md col-lg-4 col-lg-offset-4 submitAutoAddressPickup">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Popup Delivery TO-->
	<div class="modal fade myDeliveryTo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog-pickup-address modal-dialog">
			<div class="modal-content modal-content-address padd-bott-25" style="background-color:#e6e6e6;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title avenir-black text-left">Delivery Address</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<form id="homepageInstantQuoteForm" class="form-horizontal" role="form" action="https://thelorry.com/book" method="post">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" id="autoDropoffAddress" name="addressFull[1]" class="form-control flat home-tab-input-modal" placeholder="Street address" />
								<input hidden id="autoDropoffUnit" name="addressUnit[1]" type="text" />
								<input hidden id="autoDropoffStreet" name="addressStreet[1]" type="text" />
								<input hidden id="autoDropoffZip" name="addressZip[1]" type="text" />
								<input hidden id="autoDropoffCity" name="addressCity[1]" type="text" />
								<input hidden id="autoDropoffState" name="addressState[1]" type="text" />
								<input hidden id="autoDropoffLatitude" name="addressLatitude[1]" type="text" />
								<input hidden id="autoDropoffLongitude" name="addressLongitude[1]" type="text" />
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" class="form-control flat home-tab-input-modal buildingNameDrop" placeholder="Building name (Optional)" />
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" class="form-control flat home-tab-input-modal buildingUnitDrop" placeholder="Unit no. (Optional)" />
							</div>
						</form>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 avenir-black" style="font-weight:100; font-size:18px;  margin-top:10px; color:#5f6273;">
							Address Guide
						</div>
						<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 my-address-margin">
							<div class="my-address-guide-street avenir-black text-center">Street Address:</div>
							<div class="my-address-guide-words avenir-light">i.e. <span class="my-address-unit-responsive2">L-1A,</span> <span class="my-address-building-responsive2">Renault Building,</span> <span class="my-address-guide-ex avenir-black">Jalan Kemajuan 1</span><span class="">, PJ</span></div>
						</div>
						<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 my-address-margin">
							<div class="my-address-guide-street avenir-black text-center">Building Name:</div>
							<div class="my-address-guide-words avenir-light">i.e. <span class="my-address-unit-responsive2">L-1A,</span> <span class="my-address-guide-ex avenir-black">Renault Building</span> <span class="my-address-street-responsive3">, Jalan Kemajuan 1, PJ</span></div>
						</div>
						<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 my-address-margin">
							<div class="my-address-guide-street avenir-black text-center">Unit Number:</div>
							<div class="my-address-guide-words avenir-light">i.e. <span class="my-address-guide-ex avenir-black">L-1A</span>, <span class="my-address-building-responsive2">Renault Building,</span> <span class="my-address-street-responsive3">Jalan Kemajuan 1, PJ</span></div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center avenir-light my-address-submit-button">
							<button type="button" class="btn btn-dialog-address btn-md col-lg-4 col-lg-offset-4 submitAutoAddressDropoff">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="intentExitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog-exit  modal-dialog">
			<div class="modal-content padd-bott-25 modal-exit">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
				</div>
				<div class="modal-body">
					<div class="row words-adjust text-center">
						<img class="center-block img-responsive bye-bye-icon" src="https://thelorry.com/images/icons/asset-PopUp.png">
						<h3>Awww~ You're Leaving?</h3>
						<p>Well, before you go, leave your email below and <br> get our exclusive offer!!</p>

						<div class="form-inline form-inline-custom">
							<input type="text" class="form-control form-control-exit" placeholder="Your Email">
							<button class="btn btn-submit-exit avenir-black">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="gogetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog-exit  modal-dialog">
			<div class="modal-content padd-bott-25 modal-exit">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
				</div>
				<div class="modal-body">
					<div class="row words-adjust text-center">
						<h3>Hello! You caught us before we're ready.</h3>
						<p>We're working hard to put the finishing touches for our motorcycle service. Things are going well and it should be ready to help you with your delivery very soon.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


<script>
	$('#AllShipments').collapse();
	$("ul[data-target='#AllShipments']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#International").addClass('active selected');

</script>
<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
    <div class="row dashoboard-account">
		<style>
			.panel-pink{
				margin-top:20px;
			}

			.ui-dialog{
				z-index: 1060 !important;
			}

			.ui-widget-overlay{
				z-index: 1040 !important;
			}

			.panel{
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none;
			}

			.table{
				margin-bottom:0 px !important;
			}

			.table>thead:first-child>tr:first-child>th {
				text-align: center;
				border-right: 1px solid;
			}

			.table>tbody>tr>td {
				text-align: center;
				border-right: 1px solid #ddd;
			}

			.butlist .btn{
				margin-left:5px ;
			}

			.well {
				background-color: #ddd;
				margin-bottom: 0px;
			}

			@media(max-width:767px){
				.search_cat{
					padding-left: 0;
					padding-right: 0;
				}
			}
			.sweet-alert #import {
				display: block;
				width: auto;
				height: auto;
				margin: 15px;
			}

			.form-control-feedback.epi-info-circled { 
				position: absolute;
				padding-top: 8px;
				color: #d82b1f ;
				font-size: 18px;
			}

		</style>

		<div class="container-fluid space-small" style="padding-bottom: 15px;">
			<h2 class="dashboard-title" id="title"></h2>
		</div>
		<div class="row">
			
				<div class="col-md-3">
								
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Pick Up Info
								</h3>
								<hr>
								<span id="pickUpInfo">
								
								</span>
								
							</p>
						</div>
						<div class="col-md-3">
								
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Drop Off Info
								</h3>
								<hr>
								<span id="dropOffInfo">
								
								</span>
								
							</p>
						</div>
						<div class="col-md-3">
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Parcel Info
								</h3>
								<hr>
								<p id="shipmentId"></p>
								<hr>
								Length: <span id="length"></span>cm<br>
								Width: <span id="width"></span>cm<br>
								Height: <span id="height"></span>cm<br>
								Weight: <span id="weight"></span>kg<br>
								<hr>
								Parcel Content: <span id="parcelContent"></span><br>
								Value of content: <span id="valueOfContent"></span>
							
								<hr>
								Required pickup: <span id="pickUpRequired"></span>
								PickUp Date: <span id="pickupDate"></span>
								
							</p>
						</div>
						<div class="col-md-3">
							<p>
								<hr class="visible-sm visible-xs">
								<h3 class="panel-subtitle">
									Status 
								</h3>
								<hr>
									<span id="status"></span>
								<hr>
								<h3 class="panel-subtitle">
									Price 
								</h3> 
								<hr>
								<span style="font-size: 20pt;"><b>RM<span id="price"></span></b></span>
							</p>
						</div>
			</div>
		
	</div>

</div>

<script>
	var id = '<?=$id?>';
	$("#title").text(id);
	const ShipDatebase = firebase.database().ref('Shipment/' + id );
	ShipDatebase.once('value', snap=> {
		var object = snap.val();
		$("#pickUpInfo").html(object.shipperContactPerson + '<br>' + object.shipperCompanyName + '<br>' + object.shipperAddress1 + '<br>' + object.shipperAddress2 + '<br>' + object.shipperAddress3 + '<br>' + object.shipperCity + '<br>' + object.shipperState +'<br>'+ object.shipperCountry +'<br>'+ object.shipperPostcode + '<br>' + object.shipperPhoneNumber + '<br>'+ object.shipperEmail);
		$("#dropOffInfo").html(object.receiverContactPerson + '<br>' + object.receiverCompanyName + '<br>' + object.receiverAddress1 + '<br>' + object.receiverAddress2 + '<br>' + object.receiverAddress3 + '<br>' + object.receiverCity + '<br>' + object.receiverState +'<br>'+ object.receiverCountry +'<br>'+ object.receiverPostcode + '<br>' + object.receiverPhoneNumber + '<br>'+ object.receiverEmail);
		$("#length").text(object.length);
		$("#width").text(object.width);
		$("#height").text(object.height);
		$("#weight").text(object.weight);
		$("#parcelContent").text(object.parcelContent);
		$("#valueOfContent").text(object.valueOfContent);
		$("#pickUpRequired").text(object.pickupRequired);
		$("#price").text(object.price.toFixed(2));
		$("#shipmentId").text(object.tranckingNo);
		$("#pickupDate").text(object.pickupDate);
		$("#status").text(object.status);
		console.log(snap.val());
	});
	console.log(id);
</script>
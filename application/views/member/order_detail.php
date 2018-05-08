 <script>
	var mode = <?=$mode?>;
	console.log(mode);
	console.log(typeof mode);
	if (mode == 1) {
		$('#MyOrders').collapse();
		$("ul[data-target='#MyOrders']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
		$("#Unpaid_Order_Invoices").addClass('active selected');
	} else if (mode == 2){
		$('#MyOrders').collapse();
		$("ul[data-target='#MyOrders']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
		$("#Partialpaid_Order_Invoices").addClass('active selected');
	} else if (mode == 3){
		$('#MyOrders').collapse();
		$("ul[data-target='#MyOrders']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
		$("#Order_Invoices").addClass('active selected');
	}

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
			<h2 class="dashboard-title">Address Book</h2>
		</div>
		<div class="row">
			<div class="well">
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
								<p id="shipmentId"></p>
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

</div>
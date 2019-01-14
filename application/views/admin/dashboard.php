 <script>
	$("#dashboard").addClass('active selected');
</script>
	<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off" >
		<style>
			.profile-bg {
				padding: 20px;
				border-width: 1px;
				border-color: #ddd;
				border-style: solid;
				background: #eee;
			}

			.profile-bg.bindCard {
				background-color: #B3003C;
			}

			.bindCard p, .bindCard_successful p {
				margin: 0px; color:#fff;
			}

			.profile-bg.bindCard_successful {
				background-color: #666;
			}
			
			.showDetail {
				color: #fff;!important
			}
		</style>
		<div class="row dashoboard-account">
			<div class="row space">
				<div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-5 profile-pic text-center" style="position: relative;"> 
					<div class="profile_picture"> <img src="<?=base_url('assets2/image/user.jpg')?>">
						<div id="logo" class="glyphicon glyphicon-camera camera"></div>
					</div>
				<input class="hidden" type="file" value="upload" id="upload"/>

			</div>
			<div class="col-xs-7 visible-xs">
				<h3 class="profile-name"><?=isset($username)?$username:'unknown user'?></h3>
				
			</div>
			<div class="col-md-7 col-sm-8 col-xs-12 my-details">
				<div class="row hidden-xs">
					<h3 class="profile-name"><?=!empty($username)?$username:'Unknown'?></h3>
					
					
					<br>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="alert alert-danger">
				<h3><span><strong>Fuel Charge : </strong><?=!empty($fuelCharge['value'])?$fuelCharge['value']:'0'?> % </span></h3>
				<a class="btn btn-success" href="<?=base_url('admin/international_cost')?>">Change</a>
			</div>
		</div>
		<div class="row">
			<div class="container-fluid total-summary">
				<div class="panel panel-default">
					<div class="panel-body padding-off total-summary_wrap">
						<div class="col-xs-4 padding-off total-saving">
						<a href="<?=base_url('admin/domestic')?>"  class="showDetail" data-toggle="tooltip" data-placement="top" title="Click To See Domestic Shipment Detail">
							<div class="col-sm-4 col-xs-12">
								<h1 class="total-icon-size"><i class="fas fa-truck-pickup"></i></h1>
							</div>
							<div class="col-sm-8 col-xs-12">
								<h2>Domestic Shipment </h2>
								<table width="100%">
									<tbody>
										
										<tr>
											<td class="labels">Schedule In Arrangement</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docScheduleNumber)?$docScheduleNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Pending For Collection</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docPendingNumber)?$docPendingNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">On Hold</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docOnHoldNumber)?$docOnHoldNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Collected</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docCollectedNumber)?$docCollectedNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Drop Off</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docDropOffNumber)?$docDropOffNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Delivering</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docDeliveringNumber)?$docDeliveringNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Successful Delivered</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docSuccessfulDeliveredNumber)?$docSuccessfulDeliveredNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Returned</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docReturnedNumber)?$docReturnedNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Cancelled By Admin</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docCancelledNumber)?$docCancelledNumber:"0"?></div></strong></td> 
										</tr>
									</tbody>
								</table>
	
							</div>
							</a>
						</div>
						<div class="col-xs-4 padding-off total-delivered">
						<a href="<?=base_url('member/international_report')?>" class="showDetail" data-toggle="tooltip" data-placement="top" title="Click To See Internatinal Shipment Detail">
							<div class="col-sm-4 col-xs-12">
								<h1 class="total-icon-size"><i class="fas fa-truck-moving"></i></h1>
							</div>
							<div class="col-sm-8 col-xs-12">
								<h2>Internatinal Shipment</h2>
								<table width="100%">
									<tbody>

										<tr>
											<td class="labels">Schedule In Arrangement</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intScheduleNumber)?$intScheduleNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Pending For Collection</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intPendingNumber)?$intPendingNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">On Hold</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intOnHoldNumber)?$intOnHoldNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Collected</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intCollectedNumber)?$intCollectedNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Drop Off</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intDropOffNumber)?$intDropOffNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Delivering</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intDeliveringNumber)?$intDeliveringNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Successful Delivered</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intSuccessfulDeliveredNumber)?$intSuccessfulDeliveredNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Returned</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intReturnedNumber)?$intReturnedNumber:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Cancelled By Admin</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intCancelledNumber)?$intCancelledNumber:"0"?></div></strong></td> 
										</tr>
									</tbody>
								</table>
							</div>
							</a>
						</div>
						<div class="col-xs-4 padding-off total-referral">
							<div class="col-sm-4 col-xs-12">
								<h1 class="total-icon-size"><i class="fas fa-truck-moving"></i></i></h1>
							</div>
							<div class="col-sm-8 col-xs-12">
								<h2>Truck Shipment</h2>
								<table width="100%">
									<tbody>

										<tr>
											<td class="labels">Schedule In Arrangement</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Pending For Collection</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">On Hold</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Collected</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Drop Off</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Delivering</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Successful Delivered</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Returned</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Cancelled By Admin</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
				
	</div>
	</div>
</div>
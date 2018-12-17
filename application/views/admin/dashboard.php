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
			<div class="container-fluid total-summary">
				<div class="panel panel-default">
					<div class="panel-body padding-off total-summary_wrap">
						<div class="col-xs-4 padding-off total-saving">
							<div class="col-sm-4 col-xs-12">
								<h1 class="total-icon-size"><i class="fas fa-truck-pickup"></i></h1>
							</div>
							<div class="col-sm-8 col-xs-12">
								<h2>Domestic Shipment </h2>
								<table width="100%">
									<tbody>

										<tr>
											<td class="labels">Prepare to ship</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docPrepareNum)?$docPrepareNum:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Shiping</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docShippingNum)?$docShippingNum:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Shipped</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($docShippedNum)?$docShippedNum:"0"?></div></strong></td> 
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-xs-4 padding-off total-delivered">
							<div class="col-sm-4 col-xs-12">
								<h1 class="total-icon-size"><i class="fas fa-truck-moving"></i></h1>
							</div>
							<div class="col-sm-8 col-xs-12">
								<h2>Internatinal Shipment</h2>
								<table width="100%">
									<tbody>

										<tr>
											<td class="labels">Prepare to ship</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intPrepareNum)?$intPrepareNum:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Shiping</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intShippingNum)?$intShippingNum:"0"?></div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Shipped</td>
											<td class="values"> <div class="pull-right" style="position: relative;"><?=!empty($intShippedNum)?$intShippedNum:"0"?></div></strong></td> 
										</tr>
									</tbody>
								</table>
							</div>
							
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
											<td class="labels">Prepare to ship</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Shiping</td>
											<td class="values"> <div class="pull-right" style="position: relative;">0</div></strong></td> 
										</tr>
										<tr>
											<td class="labels">Shipped</td>
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
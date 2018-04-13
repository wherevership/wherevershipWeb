	<div id="masterContent" >
			<div class="container">
		
				<form method="POST" action="<?=base_url('dtc_shipper')?>" class="form-horizontal">
					<input type="hidden" id="wt" name="weight" value="<?=$weight?>" />
					<input type="hidden" id="l" name="length" value="<?=$length?>"/>
					<input type="hidden" id="w" name="width" value="<?=$width?>"/>
					<input type="hidden" id="h" name="height" value="<?=$height?>"/>
					<input type="hidden" id="vwt" name="v_weight" value="<?=$v_weight?>"/>
					<input type="hidden" id="frm" name="fromState" value="<?=$fromState?>"/>
					<input type="hidden" id="frm" name="fromStateZone" value="<?=$fromStateZone?>"/>
					<input type="hidden" id="frm" name="toStateZone" value="<?=$toStateZone?>"/>
					<input type="hidden" id="to" name="toState" value="<?=$toState?>"/>
					<input type="hidden" id="cp" name="fromPostcode" value="<?=$frPostcode?>"/>
					<input type="hidden" id="dp" name="toPostcode" value="<?=$toPostCode?>"/>
					<input type="hidden" id="cost1" name="cost" value=""/>
					
					<div class="space">
						<div class="row">
							<div class="panel panel-default">
								<div class="panel panel-title-bar">
									<img src="<?=base_url('assets2/image/poslaju.png')?>" width="20%">
								</div>
								<div class="panel-body">
									<div class="col-md-3">
										<h3>From:</h3>
										<p><?=$fromState?></p>
										<p><?=$frPostcode?></p>
										<p><?=$fromStateZone?> Malaysia</p>
										<hr class="visible-sm visible-xs">
									</div>
									<div class="col-md-3">
										<h3>To:</h3>
										<p><?=$toState?></p>
										<p><?=$toPostCode?></p>
										<p><?=$toStateZone?> Malaysia</p>
										<hr class="visible-sm visible-xs">
									</div>
									<div class="col-md-3">
										<h3>Parcel Info</h3>
										
										<p>Length: <?=$length?>cm</p>
										<p>Width: <?=$width?>cm</p>
										<p>Height: <?=$height?>cm</p>
										<p>Weight: <?=$weight?>Kg</p>
										<p>Volumetic Weight: <?=$v_weight?>Kg<p>
										
										
										<hr class="visible-sm visible-xs">
									</div>
									<div class="col-md-3">
										<div>
											<h3>Price</h3>
										
											<p style="color: #00a9b0;"><b>RM<span id="cost"></span></b></p>
										</div>
										<div class="form-group">
											<input type="submit" value="Continue >>" id="next" class="form-control btn btn-success"/>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<a type="button" class="form-control btn" href="javascript:history.go(-1)">Cancel</a>
							</div>
				
							<div class="col-md-6">
							</div>
						</div>
					</div>
				</div>
				</form>
				
				
       
		</div>
	</div>
	
	
	
	<script>
		var weight = <?=$weight_f?>;
		var formStateZone = "<?=$fromStateZone?>";
		var toStateZone = "<?=$toStateZone?>";
		console.log(weight);
		const database = firebase.database().ref('domestic_cost');
		database.on('value', snap => {
			var object1 = snap.val();
			var keys = Object.keys(object1);
			for (var i=0; i<keys.length; i++) {
				var k= keys[i];
				console.log(k);
				if (weight >= object1[k].minWeight && weight <= object1[k].maxWeight && formStateZone == object1[k].fromStateZone && toStateZone == object1[k].toStateZone ) {
					
					$("#cost").text(object1[k].cost.toFixed(2));
					$("#cost1").val(object1[k].cost.toFixed(2));
					console.log(object1[k].cost.toFixed(2));
				}
			  	
			}
		});
		
		
		
	</script>
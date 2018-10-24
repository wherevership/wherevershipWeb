
<div id="masterContent" >
	
		<div class="container space">
		
		
		
			<table id="myTable" class="table table-striped" width="100%">
					<thead class>
						<tr>
							<th width="5%" class="hidden-xs">No</th>
							<th width="14%" class="hidden-xs">Courier Company</th>
							<th width="20%" class="hidden-xs">Delivery Duration</th>
							<th width="14%" class="hidden-xs">Service Type</th>
							<th width="17%" class="hidden-xs">Document Type</th>
							<th width="14%" class="hidden-xs">Your Price</th>
							<th class="visible-xs"></th>
 
							<th width="16%" style="padding:4px;"></th>
						</tr>
					</thead>
					<tbody id="table1">
						<tr>
							<form method="POST" action="<?=base_url('int_shipper_process')?>" class="form-horizontal">
							
								<input type="hidden" id="wt" name="weight" value="<?=$weight?>" />
								<input type="hidden" id="l" name="length" value="<?=$length?>" />
								<input type="hidden" id="w" name="width" value="<?=$width?>" />
								<input type="hidden" id="h" name="height" value="<?=$height?>" />
								<input type="hidden" id="vwt" name="v_weight" value="<?=$v_weight?>"/>
								<input type="hidden"  id="frm" name="fromState" value="<?=$fromState?>"/>
								<input type="hidden" id="to" name="toCountry" value="<?=$toCountry?>" />
								<input type="hidden" id="toCountryZone" name="toCountryZone" value="<?=$toCountryZone?>" />
								<input type="hidden" id="cost1" name="cost" value=""/>
								<input type="hidden" id="fuelCharge1" name="fuelCharge" value="<?=$fuelCharge?>"/>
								<input type="hidden" id="type1" name="type" value=""/>
								<input type="hidden" id="icp" name="fromPostcode" value="<?=$frPostcode?>"/>
								<input type="hidden" id="idp" name="toPostcode" value="<?=$toPostCode?>"/>
						
							
								<td width="5%" class="hidden-xs">1</td>
								<td class="hidden-xs" width="14%"><img src="<?=base_url('assets2/image/DHL.jpg')?>" width="60%"></td>
								<td class="hidden-xs" width="20%">7 working day(s)</td>
								<td class="hidden-xs" width="14%"><i class="fas fa-truck"></i>Pick Up</td>
								<td class="hidden-xs" width="17">Documents</td>
								<td class="hidden-xs" width="14%"><span id="price1"></span></td>
								<td width="16%"><input type="submit" value="Continue" id="next" class="form-control btn btn-primary"/></td>
							
							</form>
						</tr>
						<tr>
							<form method="POST" action="<?=base_url('int_shipper_process')?>" class="form-horizontal">
							
								<input type="hidden" id="wt" name="weight" value="<?=$weight?>" />
								<input type="hidden" id="l" name="length" value="<?=$length?>" />
								<input type="hidden" id="w" name="width" value="<?=$width?>" />
								<input type="hidden" id="h" name="height" value="<?=$height?>" />
								<input type="hidden" id="vwt" name="v_weight" value="<?=$v_weight?>"/>
								<input type="hidden"  id="frm" name="fromState" value="<?=$fromState?>"/>
								<input type="hidden" id="to" name="toCountry" value="<?=$toCountry?>" />
								<input type="hidden" id="toCountryZone" name="toCountryZone" value="<?=$toCountryZone?>" />
								<input type="hidden" id="cost2" name="cost" value=""/>
								<input type="hidden" id="fuelCharge1" name="fuelCharge" value="<?=$fuelCharge?>"/>
								<input type="hidden" id="type2" name="type" value=""/>
								<input type="hidden" id="icp" name="fromPostcode" value="<?=$frPostcode?>"/>
								<input type="hidden" id="idp" name="toPostcode" value="<?=$toPostCode?>"/>
						
							
								<td width="5%" class="hidden-xs">2</td>
								<td class="hidden-xs" width="14%"><img src="<?=base_url('assets2/image/DHL.jpg')?>" width="60%"></td>
								<td class="hidden-xs" width="20%">7 working day(s)</td>
								<td class="hidden-xs" width="14%"><i class="fas fa-truck"></i>Pick Up</td>
								<td class="hidden-xs" width="17">Non Documents</td>
								<td class="hidden-xs" width="14%"><span id="price2"></span></td>
								<td width="22%"><input type="submit" value="Continue" id="next" class="form-control btn btn-primary"/></td>
							
							</form>
						</tr>
					</tbody>
				</table>
			
		</div>
	
		
					 
		</div>
		<script>
		
		$(document).ready(function(){
			var weightClass = "<?=$weightClass?>";
			var toCountryZone = "<?=$toCountryZone?>";
			var finalWeight = <?=$weight_f?>;
			var fuelCharge = <?=$fuelCharge?>;
			var documentType = $("#type").val();
			var url = "<?=base_url('api/intCost/')?>" + toCountryZone + '/'  + weightClass;
			var fuelChargeInPer = fuelCharge / 100;
			var totalPrice = 0;
		
				console.log(url);
			$.ajax({
				method: "GET",
				url: url,
				dataTypr: "json" 
			}).done(function(response){
				var json = JSON.parse(response);
			console.log(json);
				if (json.length > 0) {
					
					for (var i=0; i < json.length; i++) {
						var fuelChargeinRM = json[i].price * fuelChargeInPer;
						totalPrice = parseFloat(json[i].price) + parseFloat(fuelChargeinRM);
						var total = parseFloat(totalPrice).toFixed(2);
						if (json[i].type == "documents") {
							
							$("#price1").text(total);
							$("#cost1").val(total);
							$("#type1").val(json[i].type);
							
							
						} else if (json[i].type == "nonDocuments") {
							
							$("#price2").text(total);
							$("#cost2").val(total);
							$("#type2").val(json[i].type);
							
						}
						
					
						
					}
					
					
				}
				
			//var fuelChargeinRM = response * fuelChargeInPer;
			
		//	totalPrice = parseFloat(response) +  parseFloat(fuelChargeinRM);
			
		//	$("#price").text("RM" + response);
		//	$("#cost").val(parseFloat(totalPrice).toFixed(2));
		//	$("#fuelCharge").text("Fuel Charge"+fuelCharge+"%");
		//	$("#fuelCharge1").val(fuelCharge);
		//	$("#totalPrice").text("RM" + parseFloat(totalPrice).toFixed(2));
			//$("#priceTitle").removeClass("hide");
	//		$("#price").removeClass("hide");
		//	$("#fuelCharge").removeClass("hide");
			//$("#totalPrice").removeClass("hide");
			//$("#next").removeClass("hide");
			
			}).fail(function(jqXHR,textStatus,errorThrown){
					alert("textStatus:" + textStatus + " " + jqXHR.responseText + " "+ jqXHR.status + " " + jqXHR.readyState);

			
			});
		
		
	/*
		const database = firebase.database().ref('international_fare/'+ documentType + '/' + toCountryZone + '/' + weightClass);
		database.on('value', snap => {
			var object1 = snap.val();
			console.log(object1);
			$("#cost1").text(object1.toFixed(2));
			$("#cost").val(object1.toFixed(2));
			$("#priceTitle").removeClass("hide");
			$("#price").removeClass("hide");
			$("#next").removeClass("hide");
			
		});
			
	*/		
		});
		
	</script>
	</div>
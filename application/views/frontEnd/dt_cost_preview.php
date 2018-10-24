
	<div id="masterContent" >
		
			<div class="container space">
			
			
				<table id="myTable" class="table table-striped" width="100%">
					<thead class>
						<tr>
							<th width="5%" class="hidden-xs">No</th>
							<th width="15%" class="hidden-xs">Courier Company</th>
							<th width="25%" class="hidden-xs">Delivery Duration</th>
							<th width="16%" class="hidden-xs">Service Type</th>
							<th width="20%" class="hidden-xs">Your Price</th>
							<th class="visible-xs"></th>
 
							<th width="19%" style="padding:4px;"></th>
						</tr>
					</thead>
					<tbody id="table1">
						<form method="POST" action="<?=base_url('dtc_shipment_process')?>" class="form-horizontal">
							<input type="hidden" id="wt" name="weight" value="<?=$weight?>" />
							<input type="hidden" id="l" name="length" value="<?=$length?>"/>
							<input type="hidden" id="w" name="width" value="<?=$width?>"/>
							<input type="hidden" id="h" name="height" value="<?=$height?>"/>
							<input type="hidden" id="vwt" name="v_weight" value="<?=$v_weight?>"/>
							<input type="hidden" id="frm" name="fromState" value="<?=$fromState?>"/>
							<input type="hidden" id="frz" name="fromStateZone" value="<?=$fromStateZone?>"/>
							<input type="hidden" id="tsz" name="toStateZone" value="<?=$toStateZone?>"/>
							<input type="hidden" id="to" name="toState" value="<?=$toState?>"/>
							<input type="hidden" id="cp" name="fromPostcode" value="<?=$frPostcode?>"/>
							<input type="hidden" id="dp" name="toPostcode" value="<?=$toPostCode?>"/>
							<input type="hidden" id="cost1" name="cost" value=""/>
						
							<tr>
								<td width="5%" class="hidden-xs">1</td>
								<td class="hidden-xs" width="15%"><img src="<?=base_url('assets2/image/poslaju.png')?>" width="60%"></td>
								<td class="hidden-xs" width="25%">1 working day(s)</td>
								<td class="hidden-xs" width="16%"><i class="fas fa-truck"></i>Pick Up</td>
								<td class="hidden-xs" width="20%"><span id="price"></span></td>
								<td width="22%"><input type="submit" value="Book Now" id="next" class="form-control btn btn-primary"/></td>
							</tr>
						</form>	
					</tbody>
				</table>
		
				
					
					
				
		</div>
	
	</div>
	
	
	
	<script>
		var zone = "<?=$zone?>";
		var weightClass = "<?=$weightClass?>";
		var url = "<?=base_url('api/domesticCost')?>"+'/'+ zone + '/' + weightClass;
		
		$.ajax({
			method: "GET",
			url: url,
			dataType: "text" 
		}).done(function(response){
			$("#price").text("RM" + response);
			$("#cost1").val(parseFloat(response).toFixed(2));
			
			
		});
	/*	//console.log(weight);
		function submitTo() {
			var weight = $('#wt').val();
			var lg = $('#l').val();
			var width = $('#w').val();
			var height = $('#h').val();
			var v_weight = $('#vwt').val();
			var fromState = $('#frm').val();
			var fromStateZone = $('#frz').val();
			var toStateZone = $('#tsz').val();
			var toState = $('#to').val();
			var fromPostcode = $('#cp').val();
			var toPostCode = $('#dp').val();
			var cost1 = $('#cost1').val();
			
			$.ajax({
				url : '<?=base_url('dtc_shipper')?>',
				type : 'POST',
				data : {weight: weight, length: lg, height: height, width: width, v_weight: v_weight, fromPostCode: fromPostcode, toPostCode: toPostCode, fromState: fromState, toState: toState, cost: cost1},
				error : function() {
					alert('something is wrong');
				},
				success : function(data) {
					
				}
				
			});
		
		*/
		
	
		
		
		
		
	</script>
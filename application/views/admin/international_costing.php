<script>
	$('#costing').collapse();
	$("ul[data-target='#costing']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#international_cost").addClass('active selected');

</script>
<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off" >
		
		  <div class="row dashoboard-account">
    <div class="container-fluid space-small" style="padding-bottom: 15px;">
	<style>
.table>thead:first-child>tr:first-child>th {
	text-align: center;
	border-right: 1px solid;
	border-color: #fff;
}

.table>tbody>tr>td {
	text-align: center;
	border-right: 1px solid #ddd;
}

.well {
	background-color: #ddd;
	margin-bottom: 0px;
}

tr#DetailRow>td {
    text-align: left;
}

button.close {
    position: absolute;
    right: 30px;
    z-index: 2;
}
#OrdDetailRow th {
    background-color: #DDD;
    color: #333;
    font-weight: normal;
}
.form-control-feedback.epi-info-circled { 
	position: absolute;
	padding-top: 8px;
	color: #d82b1f ;
	font-size: 18px;
}
</style>
<div> 
  
  <h2 class="dashboard-title">International Cost Setting
    
  </h2>
  
   
</div>
	<div class="clearfix"> 
		<div class="well col-xs-12 col-sm-12">
			<div class="hidden-xs">
				<div class="col-xs-3 padding-left-off">
					<h3>Current Fuel Charge</h3>
				</div>
				<div id="update" class="input-group col-xs-9" >
						<div class="has-feedback">
							<input class="form-control" type="text" name="fuelCharge" id="fuelCharge" placeholder="Current Fuel Charge" value="<?=!empty($fuelCharge['value'])?$fuelCharge['value']:''?>"/>
							<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
						</div>

						<span class="input-group-btn">
							<button class="btn btn-primary" type="button" onclick="updateCharge()">Update</button>
						</span> </div>
			</div>
			 <div class="visible-xs">
				<h3>Current Fuel Charge(%)</h3>
			</select>
			<div class="input-group col-xs-12">
				<input class="form-control" type="text" name="search2" placeholder="Order No"/>
				<span class="input-group-btn">
					<button class="btn btn-primary" type="button" onclick="">Update</button>
				</span> </div>
			</div>
		</div>
		
		<div class="container-fluid" style="padding-top:15px;">
			<?php
				if (!empty($zoneList)) {
					foreach ($zoneList as $v) {
			?>
					<div class="col-xs-12 col-sm-4" style="padding-top:15px;">
						<a class="btn btn-primary" style="width:100%;" href="<?=base_url('internatinal/internatinal_price/').$v['zone']?>">
							<?=$v['zone']?>
						</a>
					</div>
			<?php
				}}
					else {
		  
			?>
				<div>
				<h3>No Found</h3>
				</div>
			<?php
				}
	
			?>  
		</div>

	</div>
</div>
</div>
</div>
</div>

<script>
	function updateCharge() {
		if ($('#fuelCharge').val() == ""){
				swal({
			title: 'Oops',
			type: 'error',
			html: "Fuel Charge Can't empty",
			confirmButtonColor: '#4e97d8'
			})
		} else {
			const fuelChargeValue = $('#fuelCharge').val();
			
		$.ajax({
			url: '<?=base_url('internatinal/fuel_charge_update')?>',
			type: 'POST',
			data: {fuelChargeValue: fuelChargeValue},
			error: function() {
				alert('something is wrong');
			},
			success: function(data) {
				//alert(data);
				if (data=='pass') {
					  swal({
						title: 'Oops',
						type: 'success',
						html: "Update Success",
						confirmButtonColor: '#4e97d8'
						});
				} else {
					 
				   swal({
						title: 'Oops',
						type: 'error',
						html: "Update Fail",
						confirmButtonColor: '#4e97d8'
						});
				   
			
				} 
			} 
		});
		}
	} 

</script>
 <script>
	$('#credit').collapse();
	$("ul[data-target='#credit']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#credit_history").addClass('active selected');

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
					margin-bottom: 10px;
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
  				<h2 class="dashboard-title">Credit History</h2>
  
   			</div>
		</div>
		<div class="clearfix"></div>
		<div class="well col-xs-12 col-sm-12">
			<div id="searchfield_calendar" class="input-group">
				<div class="row">
					<div class="col-xs-6 padding-off">
						<div class="form-group" style="margin-bottom:0px">
							<div class="input-group date">
								<div class="input-group-addon">From 
								</div>
								<div class="has-feedback">
									<input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" name="dateFrom" id="fromDate" size="16" name="dateFrom"/>
									<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 padding-right-off">
						<div class="form-group" style="margin-bottom:0px">
							<div class="input-group date">
								<div class="input-group-addon">To </div>
								<div class="has-feedback">
	                			<input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" name="dateTo" id="toDate" size="16" name="dateTo"/>
									<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<span class="input-group-btn">
					<button class="btn btn-primary" type="button" onclick="searchbydate()">Search</button>
				</span> 
			</div>
		</div>
	
		<div class="visible-xs">&nbsp;</div>
		
		<div class="pull-right hidden-xs" style="margin: 20px 0px;">
			<ul class="pagination">
    
			</ul>
		</div>
		<div class="container-fluid">
			<table id="myTable" class="table table-striped" width="100%">
				<thead>
					<tr>
						<th class="hidden-xs text-center" width="20%">Date/Time</th>
						<th class="hidden-xs text-center" width="20%">Description</th>
						<th class="hidden-xs text-center" width="15%">Credit </th>
						<th class="hidden-xs text-center" width="15%">Debit</th>
						<th class="hidden-xs text-center" width="20%">User ID</th>
						<th class="hidden-xs text-center" width="10%"></th>
						<th class="visible-xs" width="60%">Statement Summary</th>
						<th class="visible-xs" width="35%">Balance (RM)</th>
						<th class="visible-xs" width="5%"></th>
					</tr>
				</thead>
				<tbody id="table1">
					<?php 
						
						if (!empty($creditHistory)) {
							$balance = 0;
							foreach ($creditHistory as $v) {
								if ($v['amount_type']=='dt') {
									$balance += $v['amount'];
								} else {
									$balance -= $v['amount'];
								}
					?>
					<tr>
						
						<td class="hidden-xs" width="20%"><?=$v['created_date']?></td>
						<td class="hidden-xs" width="20%"><?=$v['description']?></td>
						<td class="hidden-xs" width="15%"><?=($v['amount_type']=='dt')?$v['amount']:''?></td>
						<td class="hidden-xs" width="15%"><?=($v['amount_type']=='kt')?$v['amount']:''?></td>
						<td class="hidden-xs" width="20%"><?=$v['user_id']?></td>
						<td class="hidden-xs text-center" width="10%"></td>
						
					</tr>
  
					<?php
						}}
						else {
		  
					?>
					<tr><td colspan='7'>No Record Found.</td></tr>
	
					<?php
						}
	
					?>
    

				</tbody>
  
			</table>
		</div>
  

		<div class="dashboard-pagination">
			<ul class="pagination">
    
			</ul>
		</div>
		<div class="clearfix"></div>

	</div>
	<div id="dialog"></div>

	



	<script>
		$(function(){
			$( "#fromDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
			$( "#toDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});

		});
		
		
		function searchbydate() {
			url = "<?=base_url('credit/search_by_date')?>";
			var dateFrom = ($("[name=dateFrom]").val().trim());
			var dateTo = ($("[name=dateTo]").val().trim());
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					dateFrom: dateFrom, 
					dateTo: dateTo
				},
				
				success: function(result) {
					console.log(result);
					var json = JSON.parse(result);
					var x = 0;
					$("#table1").html("");
					console.log(json.length);
					if (json.length > 0) {
						for (var i=0; i < json.length; i++) {
							if (json[i].result != 'empty') { 
									var debit = '';
									var kredit = '';
									if (json[i].amount_type == 'dt') {
										debit = json[i].amount;
										kredit = '';
									} else {
										debit = '';
										kredit = json[i].amount;
									}
									var tr = $("<tr>").html('<td class="hidden-xs" width="20%">'+json[i].created_date+'</td><td class="hidden-xs" width="20%">'+json[i].description+'</td><td class="hidden-xs" width="15%">'+debit+'</td><td class="hidden-xs" width="15%">'+kredit+'</td><td class="hidden-xs" width="20%">'+json[i].user_id+'</td><td class="hidden-xs" width="10%"></td>');
									
									$("#table1").append(tr);
								
								
							} else {
								var tr = $("<tr>").html('<td colspan=\'7\'>No Record Found.</td>');
								$("#table1").append(tr);
							}
						}
						
					} else {
						
							var tr = $("<tr>").html('<tr><td colspan=\'7\'>No Record Found.</td></tr>');
							$("#table1").append(tr);
						}	
				}
			});
			}
	</script>
 
 </div>
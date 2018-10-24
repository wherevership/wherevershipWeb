<script>
	$('#costing').collapse();
	$("ul[data-target='#costing']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#domestic_cost").addClass('active selected');

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
  
  <h2 class="dashboard-title">Domestic Cost Setting
    
  </h2>
  
</div>

	<div class="clearfix"> 
		<div class="container-fluid space">
			<?php
				if (!empty($zoneList)) {
					foreach ($zoneList as $v) {
			?>
					<div class="col-xs-12 col-sm-4" style="padding-top:15px;">
						<a class="btn btn-primary" style="width:100%;" href="<?=base_url('domestic/domestic_price/').$v['zone']?>">
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
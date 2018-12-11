 <script>
	$("#dashboard").addClass('active selected');
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
  
  <h2 class="dashboard-title">Dashboard
    
  </h2>
  
   
</div>
	<div class="clearfix"> 
		
		<div class="row space">
			<div class="col-md-3 col-sm-4 col-xs-12 profile-pic"> 
				<div class="profile_picture"> <img src="<?=base_url('assets2/image/user.jpg')?>">
						<div id="logo" class="glyphicon glyphicon-camera camera"></div>
				</div>
				<input class="hidden" type="file" value="upload" id="upload"/>

			</div>
			
			<div class="col-md-9 col-sm-8 ">
				<div class="hidden-xs">
					<h3 class="profile-name"><?=!empty($username)?$username:'Unknown'?></h3>
					
					 
					<br>
				</div>
			</div>
		
		</div>
	</div>
</div>
</div>
</div>
</div>
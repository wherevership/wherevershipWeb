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
	<div class="row"> 
		<a class="btn btn-default" href="<?=base_url('admin/domestic_cost')?>" style="float: left;"><</a>
		<h2 class="dashboard-title"><?=!empty($title)?$title:'Error'?>
    
		</h2>
  
   
		</div>

	<div class="clearfix"> 
		
  		<div class="container-fluid" style="padding-top: 15px; padding-bottom: 15px;">
			<div class="well col-xs-12 col-sm-12" onkeypress="return checkEnter(event)">
				<div class="hidden-xs">
					<div class="col-xs-3 padding-left-off">
						<select class="form-control" id="category" name="category" onchange="changeCategory()">    
							<option value='max_weight' >Max Weight</option>
							<option value='min_weight' >Min Weight</option>
			
						</select>
					</div>
					<div id="searchfield" class="input-group col-xs-9" >
						<div class="has-feedback">
							<input class="form-control" type="text" name="search2" placeholder="Search"/>
							<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
						</div>

						<span class="input-group-btn">
							<button class="btn btn-primary" type="button" onclick="priceList.search()">Search</button>
						</span> 
					</div>
      
				</div>
				<div class="visible-xs">
					<select class="form-control col-xs-12" id="category" name="category">
						<option value='max_weight' >Max Weight</option>
						<option value='min_weight' >Min Weight</option>
					</select>
					<div class="input-group col-xs-12">
						<input class="form-control" type="text" name="search2" placeholder="Search"/>
						<span class="input-group-btn ">
							<button class="btn btn-primary" type="button" onclick="priceList.search()">Search</button>
						</span>							
					</div>
				</div>
			</div>
			<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;">
				<select class="form-control dashboard-bulk-action" id="bulkAction" name="bulkAction" style="width: 150px;">
					<option value='-1' selected>Bluk Action</option>
					<option value='update'>Update</option>
				</select>
				<button onclick='performBulkAction(bulkAction.value)' class="btn btn-default">Apply</button>
			</div>

			<div class="pull-right hidden-xs">
				<ul class="pagination">
    
				</ul>
			</div>


					
			<table id="myTable" class="table table-striped" width="100%">
				<thead>
					<tr>
						<th width="5%" class="hidden-xs"><input type='checkbox' name='checkAllPrice' id='checkAllPrice' onclick="checkAllPriceBox()"></th>
						<th class="hidden-xs" width="25%">Max Weight</th>
						<th class="hidden-xs" width="25%">Min Weight</th>
						<th class="hidden-xs" width="25%">price</th>
      
						<th class="visible-xs" width="67%">Admin Summary</th>
						<th width="20%"></th>
					</tr>
				</thead>
				<tbody id="table1">
						<?php 
  
							if (!empty($priceList)) {
								foreach ($priceList as $v) {
						?>
						<tr>
							<!--	<form method="POST" action=""> -->
							<td width="5%" class="hidden-xs"><input type='checkbox' name="checkBluckAction" id="checkBluck-<?=$v['id']?>" onclick="checknow();" value="<?=$v['id']?>"></td>
							<td class="hidden-xs" width="25%"><?=$v['max_weight']?></td>
							<td class="hidden-xs" width="25%"><?=$v['min_weight']?></td>
									
							<td class="hidden-xs" width="25%">
								<input type="text" name="<?='price'.$v['id']?>" id="<?='price'.$v['id']?>" class="form-control" value="<?=$v['price']?>" />
				
							</td>
							<td width="20%">
								<a href="javascript:priceList.updatePrice('<?=$v['id']?>');" id="update" class="form-control btn btn-success">Update</a>
				
							</td>
							<!--	</form> -->
						</tr>
  
						<?php
								}}
							else {
		  
						?>
						<tr><td colspan='5'>No Record Found.</td></tr>
	
						<?php
							}
	
						?>
    

					</tbody>
  
				</table>
				<div class="form-inline pull-left" style="margin: 20px 0px;">
					<select class="form-control dashboard-bulk-action" id="bulkAction2" name="bulkAction2" onchange="" style="width: 150px;">
						<option value='-1' selected>Bulk Actions</option>
						<option value='update'>Update</option>
		
					</select>
					<button onclick='performBulkAction(bulkAction2.value)' class="btn btn-default">Apply</button>
				</div>
				

				<div class="dashboard-pagination">
					<ul class="pagination">
    
					</ul>
				</div>

				
		
		
			</div>
		</div>
		
		
		
			
</div>
	</div>
	</div>
</div>
</div>

<script>
<!-- checkbox usage START-->
var lastChecked = null;
    
$(document).ready(function() {
	var $checkbox = $('input[name=checkBluckAction]');
	$checkbox.click(function(e) {
		if(!lastChecked) {
			lastChecked = this;
			return;
		}

		if(e.shiftKey) {
			var start = $checkbox.index(this);
			var end = $checkbox.index(lastChecked);

			$checkbox.slice(Math.min(start,end), Math.max(start,end)+ 1).prop('checked', lastChecked.checked);

		}

		lastChecked = this;
	});
});
<!-- checkbox usage END -->

function checkAllPriceBox(){
	var checkboxes = document.getElementsByName('checkBluckAction');
	if(document.getElementById('checkAllPrice').checked){
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = true;
			}
		}
	}else{
		for (var i = 0; i < checkboxes.length; i++) {
			console.log(i)
			if (checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = false;
			}
		}
	}
}

function checknow(id){
	if(document.getElementById('checkAllPrice').checked){
		document.getElementById('checkAllPrice').checked=false;
	}else{
		var checkboxes = document.getElementsByName('checkBluckAction');
		var allchecked=0;
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				if(checkboxes[i].checked == false){
					allchecked=1;
				}
			}
 		}

		if(allchecked==0){
			document.getElementById('checkAllPrice').checked=true;
		}
	}
}

var priceList = {
	
	search : function(){
		url = "<?=base_url('domestic/search_price')?>";
		var category = ($("[name=category]").val().trim());
		var search = ($("[name=search2]").val().trim());
		var zone = "<?=$zone?>";
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					category: category, 
					search: search,
					zone: zone,
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
									
								
								
									var tr = $("<tr>").html('<td width="5%" class="hidden-xs"><input type=\'checkbox\' name="checkBluckAction" id="checkBluck-'+json[i].id+'" onclick="checknow();" value="'+json[i].id+'"></td><td class="hidden-xs" width="25%">'+json[i].max_weight+'</td><td class="hidden-xs" width="25%">'+json[i].min_weight+'</td><td class="hidden-xs" width="25%"><input type="text" name="price'+json[i].id+'" id="price'+json[i].id+'" class="form-control" value="'+json[i].price+'" /></td><td width="20%"><a href="javascript:priceList.updatePrice(\''+json[i].id+'\');" id="update" class="form-control btn btn-success">Update</a></td>');
									
									$("#table1").append(tr);
							
								
							} else {
								var tr = $("<tr>").html('<td colspan=\'5\'>No Record Found.</td>');
								$("#table1").append(tr);
							}
						}
						
					} else {
						
							var tr = $("<tr>").html('<tr><td colspan=\'5\'>No Record Found.</td></tr>');
							$("#table1").append(tr);
					}
					//console.log(result);
					
					
				},
				error: function(XMLHttpRequest,textStatus,textStatus){
					console.log(XMLHttpRequest.responseText);
					console.log(XMLHttpRequest.status);
					console.log(XMLHttpRequest.readyState);
					console.log(textStatus);
					alert(XMLHttpRequest.responseText);
			
				} 
			
			});
	},
	
	updatePrice: function(id) {
		var elementId = '#price' + id;
		var price = ($(elementId).val().trim());
		console.log(price);
		url = "<?=base_url('domestic/domestic_price_update')?>";
		
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					id: id,
					price: price
					
				},
				
				success: function(result) {
					console.log(result);
					window.location.href = '<?=base_url("domestic/domestic_price/").$zone?>';
					  
				},
				error: function(XMLHttpRequest,textStatus,textStatus){
					console.log(XMLHttpRequest.responseText);
					console.log(XMLHttpRequest.status);
					console.log(XMLHttpRequest.readyState);
					console.log(textStatus);
					alert(XMLHttpRequest.responseText);
			
				}	
			
			});
		
		
	},
}

function BulkUpdate(){
var checkboxes = document.getElementsByName('checkBluckAction');
	id=[];
	price1=[];
	count=0;
	
	for(var i = 0; i < checkboxes.length; i++){
		if(checkboxes[i].checked == true){
			var myElem = document.getElementById((checkboxes[i].id));
			if (myElem != null){
				
				id[count] = document.getElementById((checkboxes[i].id)).value;
				var priceElement = '#price' + id[count];
				price1[count] = ($(priceElement).val().trim());
				
				count++;
			}
		}
	}
	
	console.log(id);
	console.log(price1);
   	
	if(id==""){
		swal({
			title: 'Oops',
			type: 'error',
			html: 'error',
			confirmButtonColor: '#4e97d8'
			})
	}else{
		swal({
        title: status,
        text: 'Are you sure want to update the ('+id.length+') selected shipment?',
        type: 'warning',
        confirmButtonColor: '#4e97d8',
        showCancelButton: true
      }).then(function() {
		  console.log(id);
		  
         bulkUpdatePriceFunc(id,price1);
      });
		
		//bulkDeleteFunc(id);
	}
}

function bulkUpdatePriceFunc(id,price1) {
	url = "<?=base_url('domestic/bulk_domestic_price_update')?>";
		
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					id: id,
					price: price1
					
				},
				
				success: function(result) {
					console.log(result);
					window.location.href = '<?=base_url("domestic/domestic_price/").$zone?>';
					  
				},
				error: function(XMLHttpRequest,textStatus,textStatus){
					console.log(XMLHttpRequest.responseText);
					console.log(XMLHttpRequest.status);
					console.log(XMLHttpRequest.readyState);
					console.log(textStatus);
					alert(XMLHttpRequest.responseText);
			
				}	
			
			});
	
}

function checkEnter(e) {
    if(e.keyCode == 13) {
		priceList.search();
    }
}

function performBulkAction(value){
	switch(value){
		case "update" : BulkUpdate(); break;
		default : alert("Please select a valid action."); break;
	}
}
</script>
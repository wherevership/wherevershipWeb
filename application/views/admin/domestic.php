 <script>
	$('#AllShipments').collapse();
	$("ul[data-target='#AllShipments']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Domestic").addClass('active selected');

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
  
  <h2 class="dashboard-title">Shipping Managment - Domestic
    
  </h2>
  
   
</div>
</div>
<div class="clearfix"> 
  
  <div class="well col-xs-12 col-sm-12" onkeypress="return checkEnter(event)">
    <div class="hidden-xs">
      <div class="col-xs-3 padding-left-off">
        <select class="form-control" id="category" name="category" onchange="changeCategory()">    
			<option value='collection_date' class='hidden-xs' >Collection Date</option>
			<option value='tracking_number' >Tracking Number</option>
        </select>
      </div>
      <div id="searchfield_normal" class="input-group col-xs-9" >
		<div class="has-feedback">
        	<input class="form-control" type="text" name="search2" placeholder="search"/>
			<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
		</div>

        <span class="input-group-btn">
        <button class="btn btn-primary" type="button" onclick="shipmentList.searchbyother()">Search</button>
        </span> </div>
      <div id="searchfield_calendar" class="input-group col-xs-9" style="display:none">
        <div class="row">
          <div class="col-xs-6 padding-off">
            <div class="form-group" style="margin-bottom:0px">
              <div class="input-group date">
                <div class="input-group-addon">From </div>
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
        <button class="btn btn-primary" type="button" onclick="shipmentList.searchbydate()">Search</button>
        </span> </div>
    </div>
    <div class="visible-xs">
      <select class="form-control col-xs-12" id="category" name="category" onchange="changeCategory()">
		<option value='2' >Tracking No</option>
      </select>
      <div class="input-group col-xs-12">
        <input class="form-control" type="text" name="search2" placeholder="Search"/>
        <span class="input-group-btn ">
        <button class="btn btn-primary" type="button" onclick="shipmentList.searchbyother()">Search</button>
        </span> </div>
    </div>
  </div>
   
  
 
   
  <!-- /input-group --> 
  <!-- /.col-lg-6 --> 
  <div class="visible-xs">&nbsp;</div>
<div class="container-fluid">
<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;">
    <select class="form-control dashboard-bulk-action" id="bulkAction" name="bulkAction" style="width: 150px;">
		<option value='-1' selected>Bluk Action</option>
		<option value='Prepare_to_ship'>Prepare To Ship</option>
		<option value='Shipping'>Shipping</option>
		<option value='Shipped'>Shipped</option>
    </select>
    <button onclick='performBulkAction(bulkAction.value)' class="btn btn-default">Apply</button>
  </div>

<div class="pull-right hidden-xs">
  <ul class="pagination">
    
  </ul>
</div>
<!--

<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;"> Listing Per Page :
  <select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
	<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
  </select>
</div> -->
<table id="myTable" class="table table-striped" width="100%">
  <thead>
    <tr>
      <th width="2%" class="hidden-xs"><input type='checkbox' name='checkAllOrderOrder' id='checkAllOrder' onclick="checkAllOrderBox()"></th>
      <th class="hidden-xs" width="15%">Tracking Number</th>
      <th class="hidden-xs" width="25%">Deliver To</th>
      <th class="hidden-xs" width="16%">Collection Date</th>
      <th class="hidden-xs" style="text-align:right" width="20%">Status</th>
      <th class="visible-xs" width="67%">Order Summary</th>
      <th width="22%"></th>
    </tr>
  </thead>
  <tbody id="table1">
  <?php
		if (!empty($shipmentList)) {
		foreach ($shipmentList as $v) {
   ?>
	<tr>
		<td width="2%" class="hidden-xs"><input type='checkbox' name="checkBluckAction" id="checkBluck-<?=$v['id']?>" onclick="checknow();" value="<?=$v['id']?>" /></td>
		<td class="hidden-xs" width="15%"><?=$v['tracking_number']?></td>
		<td class="hidden-xs" width="25%"><?=$v['recevier_postcode'].'<br/>'.$v['receiver_state'].'<br/>'.$v['receiver_country']?></td>
		<td class="hidden-xs" width="16%"><?=$v['collection_date']?></td>
		<td class="hidden-xs" width="20%"><?=$v['status']?></td>
		
		<td width="22%">
			<a href="javascript:showDetail('<?=$v['id']?>');" class="btn btn-success btn-xs">See More</a>
			<a href="javascript:shipmentList.ChangeStatus('<?=base_url('admin/updateDomesticStatus/'.$v['id'].'/Prepare_to_ship')?>','Prepare To Ship');" class="btn btn-success btn-xs <?php if ($v['status']=='Prepare_to_ship') {?>disabled<?php }?>">Prepare to ship</i></a>
			<a href="javascript:shipmentList.ChangeStatus('<?=base_url('admin/updateDomesticStatus/'.$v['id'].'/Shipping')?>','Shipping');" class="btn btn-success btn-xs <?php if ($v['status']=='Shipping') {?>disabled<?php }?>">Shipping</i></a>
			<a href="javascript:shipmentList.ChangeStatus('<?=base_url('admin/updateDomesticStatus/'.$v['id'].'/Shipped')?>','Shipped');" class="btn btn-success btn-xs <?php if ($v['status']=='Shipped') {?>disabled<?php }?>">Shipped</i></a>
		
		</td>
	</tr>
  
	<?php
	}}
	  else {
		  
    ?>
	  <tr><td colspan='6'>No Record Found.</td></tr>
	
	<?php
	  }
	
	?>  
  
    </tbody>
  
</table>
<div class="form-inline pull-left" style="margin: 20px 0px;">
    <select class="form-control dashboard-bulk-action" id="bulkAction2" name="bulkAction2" onchange="" style="width: 150px;">
		<option value='-1' selected>Bluk Action</option>
		<option value='Prepare_to_ship'>Prepare To Ship</option>
		<option value='Shipping'>Shipping</option>
		<option value='Shipped'>Shipped</option>
    </select>
    <button onclick='performBulkAction(bulkAction2.value)' class="btn btn-default">Apply</button>
  </div>
  

<div class="dashboard-pagination">
  <ul class="pagination">
    
  </ul>
</div>


<div class="clearfix"></div>

</div>
<div id="dialog"></div>

<div class="modal fade modal-fullscreen" id="shipmentDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			
	<div class="modal-dialog" role="document" id="services1">
		<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title" id="tracking_number"></h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="col-md-6 col-md-12 padding-off">
						<h3><b><span id="status"></span></b></h3>
					</div>
					<div class="col-md-6 col-md-12 padding-off">
						<h4>Created by: <span id="user"></span></h4>
					</div>
					<div class="clearfix"></div>
					<hr/>
					<div class="col-md-6 col-xs-12 padding-off">
						<h3>From</h3>
						<p>
						 <span id="shipper_company_name"></span>
						 <span id="shipper_name"></span><br/>
						 <span id="shipper_address"></span>
						 <span id="shipper_city"></span>
						 <span id="shipper_postcode"></span>
						 <span id="shipper_state"></span>
						 <span id="shipper_country"></span> <br/>
						 <span id="shipper_phone_number"></span> <br/>
						 <span id="shipper_email"></span>
						</p>
					  </div>  
					
					  <div class="col-md-6 col-xs-12 padding-off">
						<h3>To</h3>	
						<p>
						 <span id="recevier_company_name"></span>
						 <span id="recevier_name"></span><br/>
						 <span id="recevier_address"></span>
						 <span id="recevier_city"></span>
						 <span id="recevier_postcode"></span>
						 <span id="recevier_state"></span>
						 <span id="recevier_country"></span> <br/>
						 <span id="recevier_phone_number"></span> <br/>
						 <span id="recevier_email"></span>
						</p>
					  </div>
       
					   <div class="clearfix"></div>
						<hr />
						<div>
							<div class="col-md-6 col-xs-12 padding-off">
								<h3>Parcel Detail</h3>
								<p>Parcel Content: <span id="parcel_content"></span></p>
								<p>Value of Content: <span id="value_of_content"></span></p>
								<p>Pickup Required: <span id="pickup_required"></span></p>
								<p>Collection Date: <span id="collection_date"></span></p>
								
							</div>
							<div class="col-md-6  col-xs-12 padding-off">
								<h3>Parcel Demension</h3>
								<p>Weight: <span id="weight"></span></p>
								<p>length: <span id="length"></span></p>
								<p>Width: <span id="width"></span></p>
								<p>Height: <span id="height"></span></p>
							</div>
								
					
        
					</div>
					<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
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

function showDetail(id) {
	url = "<?=base_url('admin/shipmentDetail/')?>" + id;
	console.log(url);
	
	$.ajax({
		method: "GET",
		url: url,
		dataType: "json"
	}).done(function(response){
		console.log(response);
		setTimeout(function(){ 
				
			$("#shipper_company_name").text(response.shipper_company_name);
			$("#shipper_address").text(response.shipper_address);
			$("#shipper_city").text(response.shipper_city);
			$("#shipper_postcode").text(response.shipper_postcode);
			$("#shipper_state").text(response.shipper_state);
			$("#shipper_country").text(response.shipper_country);
			$("#shipper_contact_person").text(response.shipper_contact_person);
			$("#shipper_phone_number").text(response.shipper_phone_number);
			$("#shipper_email").text(response.shipper_email);
			$("#recevier_company_name").text(response.recevier_company_name);
			$("#recevier_address").text(response.recevier_address);
			$("#recevier_city").text(response.recevier_city);
			$("#recevier_postcode").text(response.recevier_postcode);
			$("#recevier_state").text(response.recevier_state);
			$("#recevier_country").text(response.recevier_country);
			$("#recevier_contact_person").text(response.recevier_contact_person);
			$("#recevier_phone_number").text(response.recevier_phone_number);
			$("#recevier_email").text(response.recevier_email);
			$("#weight").text(response.weight);
			$("#length").text(response.length);
			$("#width").text(response.width);
			$("#height").text(response.height);
			$("#volumentric_weight").text(response.volumentric_weight);
			$("#price").text(response.price);
			$("#parcel_content").text(response.parcel_content);
			$("#value_of_content").text(response.value_of_content);
			$("#pickup_required").text(response.pickup_required);
			$("#tracking_number").text(response.tracking_number);
			$("#status").text(response.status);
			$("#collection_date").text(response.collection_date);
			$("#user").text(response.userid +" "+ response.user_name);
			
			$("#shipmentDetail").modal();
		
		},2000);
		
	}).fail(function(XMLHttpRequest,textStatus,textStatus){
				console.log(XMLHttpRequest.responseText);
				console.log(XMLHttpRequest.status);
				console.log(XMLHttpRequest.readyState);
				console.log(textStatus);
				alert("something wrong");
	
	});
	
	
	//$("#shipmentDetail").modal();
}


var shipmentList = {
	Detail : function(ref_id){
		var listrow = document.getElementsByClassName("listrow-"+ref_id);
		if($($(listrow).find(".action .mini img")).attr("src") == "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png"){
			orderlist.RemoveDetail();
		}else{			
			orderlist.RemoveDetail();
			$(listrow).after(
				'<tr id="OrdDetailRow"><td colspan="7"><img src="https://secure.easyparcel.my/pass/application/source/Malaysia/img/ajax-loader.gif" /></td></tr>'
			);
			$.ajax({
				type : "post",
				url : "./?cp=MemberOrderDetail",
				data : {oid : $(listrow).attr("data-id")},
				success : function(result){
					$($(listrow).find(".action .mini img")).attr("src","https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png");
					$("#OrdDetailRow").find("td").html(result);
			}
		}).fail(function(){
		swal({
				title: 'Error',
				type: 'error',
				html: 'fail',
				confirmButtonColor: '#4e97d8'
				})
		});
	}
	},
	
	statussort : function(key){
		if(key == ''){
			key = $('#OSSelect').val();
		}
		var url = QueryString(window.location.href);
		var os = key;
		var qs = "";
		for(p in url.qs){
			if(p != "sc" && p != "os" && p != "sf" && p != "lpg"){
				if(qs.length > 0) qs += "&";
				qs += p + "=" + url.qs[p]
			};
		}
		window.location.href = url.link + "?" + qs + (os.length > 0 ? "&os=" + os : "");
	},
	
	resultLimit : function(limit){
		var url = QueryString(window.location.href);
		var rl = limit;
		var qs = "";
		for(p in url.qs){
			if(p != "lpg"&& p != "rl"){
				if(qs.length > 0) qs += "&";
				qs += p + "=" + url.qs[p]
			};
		}
		window.location.href = url.link + "?" + qs + (rl.length > 0 ? "&rl=" + rl : "");
	},
	
	searchbyother : function(){
		url = "<?=base_url('admin/searchShipmentByOther/do')?>";
		var category = ($("[name=category]").val().trim());
		var search = ($("[name=search2]").val().trim());
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					category: category, 
					search: search
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
									var checkPrepare = ((json[i].status == 'Prepare_to_ship') ? 'disabled' : '');
									var checkShipping = ((json[i].status == 'Shipping') ? 'disabled' : '');
									var checkShipped = ((json[i].status == 'Shipped') ? 'disabled' : '');
								
								
									var tr = $("<tr>").html('<td width="2%" class="hidden-xs"><input type=\'checkbox\' name="checkBluckAction" id="checkBluck-'+json[i].id+'" onclick="checknow();" value="'+json[i].id+'"></td><td class="hidden-xs" width="15%">'+json[i].tracking_number+'</td><td class="hidden-xs" width="25%">'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</td><td class="hidden-xs" width="16%">'+json[i].collection_date+'</td><td class="hidden-xs" width="20%">'+json[i].status+'</td><td class="visible-xs"><p>'+json[i].tracking_number+'</p><p>'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</p><p>'+json[i].collection_date+'</p><p>'+json[i].status+'</p></td><td width="22%"><a href="javascript:showDetail(\''+json[i].id+'\');" class="btn btn-success btn-xs">See More</a><a href="javascript:shipmentList.ChangeStatus(\'<?=base_url('admin/updateDomesticStatus/')?>'+json[i].id+'/Prepare_to_ship\',\'Prepare To Ship\');" class="btn btn-success btn-xs '+checkPrepare+'">Prepare to ship</a><a href="javascript:shipmentList.ChangeStatus(\'<?=base_url('admin/updateDomesticStatus/')?>'+json[i].id+'/Shipping\',\'Shipping\');" class="btn btn-success btn-xs '+checkShipping+'">Shipping</a><a href="javascript:shipmentList.ChangeStatus(\'<?=base_url('admin/updateDomesticStatus/')?>'+json[i].id+'/Shipped\',\'Shipped\');" class="btn btn-success btn-xs '+checkShipped+'">Shipped</a></td>');
									
									$("#table1").append(tr);
								
								
							} else {
								var tr = $("<tr>").html('<td colspan=\'6\'>No Record Found.</td>');
								$("#table1").append(tr);
							}
						}
						
					} else {
						
							var tr = $("<tr>").html('<tr><td colspan=\'6\'>No Record Found.</td></tr>');
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
	
	searchbydate :function() {
		url = "<?=base_url('admin/searchShipmentByDate/do')?>";
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
									var checkPrepare = ((json[i].status == 'Prepare_to_ship') ? 'disabled' : '');
									var checkShipping = ((json[i].status == 'Shipping') ? 'disabled' : '');
									var checkShipped = ((json[i].status == 'Shipped') ? 'disabled' : '');
								
								
									var tr = $("<tr>").html('<td width="2%" class="hidden-xs"><input type=\'checkbox\' name="checkBluckAction" id="checkBluck-'+json[i].id+'" onclick="checknow();" value="'+json[i].id+'"></td><td class="hidden-xs" width="15%">'+json[i].tracking_number+'</td><td class="hidden-xs" width="25%">'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</td><td class="hidden-xs" width="16%">'+json[i].collection_date+'</td><td class="hidden-xs" width="20%">'+json[i].status+'</td><td class="visible-xs"><p>'+json[i].tracking_number+'</p><p>'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</p><p>'+json[i].collection_date+'</p><p>'+json[i].status+'</p></td><td width="22%"><a href="javascript:showDetail(\''+json[i].id+'\');" class="btn btn-success btn-xs">See More</a><a href="javascript:shipmentList.ChangeStatus(\'<?=base_url('admin/updateDomesticStatus/')?>'+json[i].id+'/Prepare_to_ship\',\'Prepare To Ship\');" class="btn btn-success btn-xs '+checkPrepare+'">Prepare to ship</a><a href="javascript:shipmentList.ChangeStatus(\'<?=base_url('admin/updateDomesticStatus/')?>'+json[i].id+'/Shipping\',\'Shipping\');" class="btn btn-success btn-xs '+checkShipping+'">Shipping</a><a href="javascript:shipmentList.ChangeStatus(\'<?=base_url('admin/updateDomesticStatus/')?>'+json[i].id+'/Shipped\',\'Shipped\');" class="btn btn-success btn-xs '+checkShipped+'">Shipped</a></td>');
									
									$("#table1").append(tr);
								
								
							} else {
								var tr = $("<tr>").html('<td colspan=\'6\'>No Record Found.</td>');
								$("#table1").append(tr);
							}
						}
						
					} else {
						
							var tr = $("<tr>").html('<tr><td colspan=\'6\'>No Record Found.</td></tr>');
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
	
	ChangeStatus : function(url,status) {
		swal({
        title: status,
        text: 'Are you sure',
        type: 'warning',
        confirmButtonColor: '#4e97d8',
        showCancelButton: true
      }).then(function() {
         location.href=url;
      });
	},
	
	Del :function(obj) {
		//alert($(obj).html());
		/*
		$('#popupbox .modal-header h3').html("Confirm delete this unpaid order?");
		$("#popupbox .modal-body").html("Are you SURE?");
		$("#popupbox .modal-footer").html('<button type="button" class="btn btn-primary" dt-id="'+$(obj).attr("dt-id")+'" onclick="orderlist.Delete(this)">OK</button>' + 
		'<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>');
		$('#popupbox').modal('toggle');//*/
		swal({
			title: 'Confirm delete this unpaid order?',
			text: "Are you SURE?",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#4e97d8',
			confirmButtonText: 'Yes',
			cancelButtonText: 'Cancel'
			}).then(function() {
				id = $(obj).attr("dt-id");
				orderlist.Delete(id);
			})
	},
	
Delete :function (obj) {
	var
	type ="post",
	url = "./?ac=doDeleteInvoice",
	data ={id},
	callback = function(result){
			if($.trim(result) == "pass"){
				swal({
					title: 'Success',
					type: 'success',
					html: 'The item has been succesfully deleted!',
					confirmButtonColor: '#4e97d8'
					}).then(function() {
						window.location.reload();
					})
			}else{
				swal({
					title: 'Oops',
					type: 'error',
					html: '' + result,
					confirmButtonColor: '#4e97d8'
				})
			} 
		};
		General.loadAjax(type,url,data,callback);
	},	
	
	RemoveDetail : function(){
		$("#OrdDetailRow").remove();
		$('.action .mini').html("<img src='https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png'>");
	},
};
var ordershipmentlist = {
	Detail : function(obj){
		var parent = $(obj).parent();
		if($(parent).find('a.pull-right img').first().attr('src') == "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png"){
			$(parent).find('a.pull-right img').first().attr("src", "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png");
			ordershipmentlist.RemoveDetail();
		}else{
			ordershipmentlist.RemoveDetail();
			$($(parent).find('a.pull-right img').first()).parent().parent().parent().after(
				'<tr id="DetailRow"><td colspan="9"><img src="https://secure.easyparcel.my/pass/application/source/Malaysia/img/ajax-loader.gif" /></td></tr>'
			);
			$.ajax({
				type : "post",
				url : "./?cp=MemberShipmentDetail",
				data : {iid : $(obj).attr("data-id")},
				success : function(result){
					$("#DetailRow").find("td").html(result);
					if($(parent).find('a.pull-right img').first().attr('src') == "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png"){
						$(parent).find('a.pull-right img').first().attr("src", "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png");
					}
				}
			}).fail(function(){
			swal({
				title: 'Error',
				type: 'error',
				html: 'fail',
				confirmButtonColor: '#4e97d8'
				})
			});
		}
	},
	
	RemoveDetail : function(){
		$("#DetailRow").prev().find('a.pull-right img').first().attr("src", "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png");
		$("#DetailRow").remove();
		
	},
		
	search : function(){
		var message = "";
		var url = QueryString(window.location.href);
		var sc = $("[name=search]").val();
		if(sc == ""){
			sc = ($("[name=search2]").val().trim());
		}
		var sf = ($("[name=category]").val().trim());
		if (sf == '1'){
			sc =  'From='+($("[name=dateFrom]").val().trim())+'To='+($("[name=dateTo]").val().trim());
		}
		
		if(sc == ""){
			message+="No Search Key Is Inserted.</br>";
			if(message != ""){
				swal({
					title: 'Oops',
					type: 'error',
					html: '' + message,
					confirmButtonColor: '#4e97d8'
				})
				return false;
			}
		}else{
			var qs = "";
			for(p in url.qs){
				if(p != "sc" && p != "lpg"){
					if(qs.length > 0) qs += "&";
					qs += p + "=" + url.qs[p]
				};
			}
			window.location.href = url.link + "?" + qs + (sc.length > 0 ? "&sc=" + sc : "");
		}
	},

	Track : function(ref,awb,courier){
			$.ajax({
				type : "post",
				url : "./?ac=doTrackAwb",
				data : {
					courier : courier,
				},
				success : function(res){
					//var myWindow = window.open("./?pg=Track&t="+res+"/"+awb, "Easyparcel Track Popout", "width=700, height=400");
					var myWindow = window.open("./?pg=Track&t="+res+"/"+awb, '_blank');
					if(myWindow == null || typeof(myWindow)=='undefined'){
						swal({
							title: 'Oops',
							type: 'info',
							html: 'We found out your browser disabled the pop-up settings.<br>Please disable your pop-up blocker and have another try.',
							confirmButtonColor: '#4e97d8'
						})
					}
				}
			}).fail(function(){
				swal({
					title: 'Error',
					type: 'error',
					html: 'Fail',
					confirmButtonColor: '#4e97d8'
					})
			});
		}
};

function CheckNull(obj,obj1,obj2){
	var from  = $("[name=dateFrom]");
	var to  = $("[name=dateTo]");
	var sc  = $("[name=search]");
	if(obj == "0" && obj1 == "0"){
		if(General.isTextEmpty($(obj2))){
			doFail(obj2);
		}else{
			clearClass(obj2);
		}
	}else{
		if(General.isTextEmpty($(obj))){
			doFail(obj);
		}else{
			clearClass(obj);
		}
		if(General.isTextEmpty($(obj1))){
			doFail(obj1);
		}else{
			clearClass(obj1);
		}
	}
}

function doFail(obj){
	$(obj).addClass("fail");
	$(obj).removeClass("padding");
	$(obj).removeClass("pass");
	$(obj).css("border-color","#F00");
	$(obj).parent().children().eq(1).removeClass("hide");
}

function clearClass(){
	var names = ["dateFrom","dateTo","search"];
	for (i = 0; i < names.length; i++) { 
		$("[name="+names[i]+"]").removeClass("pass");
		$("[name="+names[i]+"]").removeClass("fail");
		$("[name="+names[i]+"]").removeClass("padding");
		$("[name="+names[i]+"]").css("border-color","");
		$("[name="+names[i]+"]").parent().children().eq(1).addClass("hide");
	}
}

function QueryString(url){
	var link = url.split("?");
	var url = {link: link[0], qs : {}};
	if(link[1] == null) return url;
	var qs = link[1].split("&");
	for(var i = 0; i < qs.length;i++){
		var param = qs[i].split("=");
		if(param[0] != null) url.qs[param[0]] = param[1];
	}
	return url;
}

function RemoveDetail(){
	$("#DetailRow").remove();
	$('.action .mini').html("<img src='https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png'>");
}

function checkAllOrderBox(){
	var checkboxes = document.getElementsByName('checkBluckAction');
	if(document.getElementById('checkAllOrder').checked){
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
	if(document.getElementById('checkAllOrder').checked){
		document.getElementById('checkAllOrder').checked=false;
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
			document.getElementById('checkAllOrder').checked=true;
		}
	}
}

function changeCategory(){
	var sf = ($("[name=category]").val().trim());
	if(sf == 'collection_date'){
		$('#searchfield_normal').attr('style','display: none');
		$('#searchfield_calendar').attr('style','display: ""');
	}else{
		$('#searchfield_normal').attr('style','display: ""');
		$('#searchfield_calendar').attr('style','display: none');
	}
}


function BulkUpdateStatus(status){
var checkboxes = document.getElementsByName('checkBluckAction');
	id=[];
	count=0;
	
	for(var i = 0; i < checkboxes.length; i++){
		if(checkboxes[i].checked == true){
			var myElem = document.getElementById((checkboxes[i].id));
			if (myElem != null){
				
				id[count] = document.getElementById((checkboxes[i].id)).value;
				
				count++;
			}
		}
	}
	
	console.log(id);
   	
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
		  console.log(id,status);
		  console.log(status);
         bulkDeleteFunc(id,status);
      });
		
		//bulkDeleteFunc(id);
	}
}

function bulkDeleteFunc(id,status) {
	url = "<?=base_url('admin/bulkUpdateStatus')?>";
		
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					id: id,
					status: status
					
				},
				
				success: function(result) {
					console.log(result);
					window.location.href = '<?=base_url("admin/domestic")?>';
					  
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

$(function(){
	$( "#fromDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
    $( "#toDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
	changeCategory();
});

function checkEnter(e) {
    if(e.keyCode == 13) {
		var sf = ($("[name=category]").val().trim());
		console.log(sf);
		if(sf == 'collection_date'){
			shipmentList.searchbydate();
		} else {
			shipmentList.searchbyother();
		}
		
    }
}

function performBulkAction(value){
	switch(value){
		case "Prepare_to_ship" : BulkUpdateStatus("Prepare_to_ship"); break;
		case "Shipping" : BulkUpdateStatus("Shipping"); break; 
		case "Shipped" : BulkUpdateStatus("Shipped"); break;
		default : alert("Please select a valid action."); break;
	}
}
</script>
 </div>
  </div>
  </div>
</div>

</div>
 <script>
	$('#AllShipments').collapse();
	$("ul[data-target='#AllShipments']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Domestic").addClass('active selected');

</script>

  <div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
    <div class="row dashoboard-account">
    
	<style>
.btn-default2 {
  color: #333;
  background-color: #ccc;
  border-color: #fff;
}
.table>thead:first-child>tr:first-child>th {
  text-align: center;
  border-right: 1px solid;
}
.table>tbody>tr>td {
  text-align: center;
  border-right: 1px solid #ddd;
}
tr#DetailRow>td {
  text-align: left;
}
.well {
  background-color: #ddd;
  margin-bottom: 0px;
}
.table>thead.domestic:first-child>tr:first-child>th {
    background-color: #80d8d4;
}
.table>thead.international:first-child>tr:first-child>th {
    background-color: #5cb85c;
}
.dashboard-title span.domestic-title {
  background-color: #80d8d4;
  vertical-align: super;
  font-size: 16px;
}

.dashboard-title span.international-title {
  vertical-align: super;
  font-size: 16px;
}
.form-control-feedback.epi-info-circled { 
  position: absolute;
  padding-top: 8px;
  color: #d82b1f ;
  font-size: 18px;
}
.sweet-overlay, .sweet-alert{
    position: absolute!important;
}

.swal2-modal{
z-index:10001;}

.glyphicon-remove {
  display:none;
  position: absolute;
  cursor: pointer;
  background-color: rgba(113,110,110, 0.66);
  height: 50px;
  width: 60px;
  padding: 15px 18px;
  color: black;
  font-size: 20px;
}

#photo div:hover span, #photo div:hover span, #invoice div:hover span, #photo div:hover span{
  display:block;
}

</style>

<div> 
  
  <div class="container-fluid space-small" style="padding-bottom: 15px;">
    <h2 class="dashboard-title">
  All Shipments <span class="label label-success domestic-title">Domestic</span><br>
    </h2>
  </div>
  <div class="clearfix"></div>
   
</div>
<div class="clearfix"> 

  
  <div class="well col-xs-12 col-sm-8" onkeypress="return checkEnter(event)">
    <div class="hidden-xs">
      <div class="col-xs-3 padding-left-off">
        <select class="form-control" id="category" name="category" onchange="changeCategory()">    
			<option value='collection_date' class='hidden-xs' >Collection Date</option>
			<option value='tracking_number' >Tracking Number</option>
        </select>
		</div>
		<div id="searchfield_normal" class="input-group col-xs-9">
			<div class="has-feedback">
				<input class="form-control" type="text" name="search2" placeholder="search"/>
				<span class="fas fa-info-circle form-control-feedback hide"  aria-hidden="true"></span>
			</div>
			<span class="input-group-btn">
				<button class="btn btn-primary" type="button" onclick="shipmentlist.searchbyother()">Search</button>
			</span> 
		</div>
		<div id="searchfield_calendar" class="input-group col-xs-9" style="display:none">
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group" style="margin-bottom:0px">
						<div class="input-group date">
							<div class="input-group-addon">From </div>
							<div class="has-feedback">
								<input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" id="fromDate" size="16" name="dateFrom"/>
								<span class="fas fa-info-circle form-control-feedback hide"  aria-hidden="true"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group" style="margin-bottom:0px">
						<div class="input-group date">
							<div class="input-group-addon">To </div>
							<div class="has-feedback">
								<input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" id="toDate" size="16" name="dateTo"/>
								<span class="fas fa-info-circle form-control-feedback hide"  aria-hidden="true"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<span class="input-group-btn">
				<button class="btn btn-primary" type="button" onclick="shipmentlist.searchbydate()">Search</button>
			</span> 
		</div>
      
    </div>
    <div class="visible-xs">
      <div class="col-xs-12 padding-off">
       <select class="form-control col-xs-12" id="category" name="category" onchange="changeCategory()">
		<option value='tracking_number' >Tracking Number</option>
      </select>
      </div>
      <div class="input-group col-xs-12">
        <input class="form-control" type="text" name="search2" placeholder=""/>
        <span class="input-group-btn ">
        <button class="btn btn-primary" type="button" onclick="shipmentlist.searchbyother()">Search</button>
        </span> </div>
    </div>
    <!-- /input-group --> 
  </div>
   
  
  
  <div class="well col-xs-12 col-sm-4">
   <select class="form-control" id="SSSelect" name="SSSelect" onchange="shipmentlist.statussort(this.value)">
    <option value=''>Filter By Status</option><option value='Schedule In Arrangement' >Schedule In Arrangement</option><option value='Pending For Collection' >Pending For Collection</option><option value='On Hold' >On Hold</option><option value='Collected' >Collected</option><option value='Drop Off' >Drop Off</option><option value='Delivering' >Delivering</option><option value='Successful Delivered' >Successful Delivered</option><option value='Returned' >Returned</option><option value='Cancelled By Admin' >Cancelled By Admin</option>
    </select>
  </div>
   
</div>
<div class="visible-xs">&nbsp;</div>
<!--
<div class="alert alert-danger" role="alert">
<p>Dear customers,</p>
<p>Effective 9th of May 2015, all air waybills (AWB) from Skynet Express will be printed out in <strong>two(2) A4 papers</strong> and consists of <strong>5 copies</strong>.</p>
<p>The additional copies (Account copy and Manifest copy) are for courier office usage to ensure better efficiency in delivery process. Kindly keep the Sender's copy with you and attach all the remaining 4 copies to your parcel.</p>
</div>
-->

<div class="container-fluid">
  <div class="pull-right hidden-xs">
    <ul class="pagination">
      
    </ul>
  </div>
  <div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;">
    <select class="form-control dashboard-bulk-action" id="bulkAction" name="bulkAction" style="width: 180px;">
	<option value='-1' selected>Bluk Action</option>
   </select>
    <button onclick='performBulkAction(bulkAction.value)' class="btn btn-default">Apply</button>
  </div>
  
  
  <div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;">
    
  </div>
  
  
  <table id="myTable" class="table table-striped" width="100%">
    <thead class="domestic">
      <tr>
        <th width="2%"><input type='checkbox' name='checkall' id='checkall' onclick="AwbCheckAll()"></th>
        <th width="15%" class="hidden-xs">Tracking No</th>
        <th width="25%" class="hidden-xs">Deliver To</th>
        <th width="16%" class="hidden-xs">Collection Date</th>
        <th width="20%" class="hidden-xs">Status</th>
        <th class="visible-xs">Shipment Summary</th>
 
    <th width="22%" style="padding:4px;"></th> <!-- leaver pigeon -->
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
    <select class="form-control dashboard-bulk-action" id="bulkAction2" name="bulkAction2" style="width: 180px;">
    <option value='-1' selected>Bluk Action</option>
	
    </select>
    <button onclick='performBulkAction(bulkAction2.value)' class="btn btn-default">Apply</button>
  </div>
  
  <div class="form-inline visible-xs pull-right"> 
  </div>
  
  
  
  <div id="result"></div>
  <div class="dashboard-pagination">
    <ul class="pagination">
      
    </ul>
  </div>
  
  <div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;"> 
    
  </div>
  
  <div class="clearfix"></div>
  <br>
 
  
  <div id="dialog"></div>
  
</div>
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
	
	//$("#name").text(id);
	
	
}



		

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

var weekday = new Array(7);
weekday[0]=  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";
    
var shipmentlist = {
  Detail : function(ref_id,awb,courier,start_duration,scheduled_start_date,courier_holidays){
    var listrow = document.getElementsByClassName("listrow-"+ref_id);
    if($($(listrow).find(".action .mini")).attr("src") == "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png"){
      shipmentlist.RemoveDetail();
    }else{
      shipmentlist.RemoveDetail();
      $(listrow).after(
        '<tr id="DetailRow"><td colspan="9"><img src="https://secure.easyparcel.my/pass/application/source/Malaysia/img/ajax-loader.gif" /></td></tr>'
      );
      $.ajax({
        type : "post",
        url : "./?cp=MemberShipmentDetail",
        data : {iid : $(listrow).attr("data-id")},
        success : function(result){
          $($(listrow).find(".action .mini")).attr("src","https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png");
          $("#DetailRow").find("td").html(result);
          var more = $("#DetailRow").find("td").find(".row").eq(1);
          var get = $('#append-'+ref_id).html();
          more.append('<div class="col-md-12">'+get+'</div>');
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
  },
  Rating : function(ref_id){
    
    var i = document.getElementsByClassName("listrow-"+ref_id);
    //if($($(i).find(".action .mini")).attr("src") == "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png"){
      //shipmentlist.RemoveDetail();
    //}else{      
      shipmentlist.RemoveDetail();
      $(i).after(
        '<tr id="DetailRow"><td colspan="9"><img src="https://secure.easyparcel.my/pass/application/source/Malaysia/img/ajax-loader.gif" /></td></tr>'
      );
      $.ajax({
        type : "post",
        url : "./?cp=ParcelRating",
        data : {iid : $(i).attr("data-id")},
        success : function(result){
          $($(i).find(".action .mini img")).attr("src","https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png");
          $("#DetailRow").find("td").html(result);
        }
      }).fail(function(){
      swal({
        title: 'Error',
        type: 'error',
        html: 'Fail',
        confirmButtonColor: '#4e97d8'
        })
      });
    //}
  },
  
  RemoveDetail : function(){
    $("#DetailRow").remove();
    $('.action .mini').attr("src","https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png");
  },
  
  searchbyother : function(){
		url = "<?=base_url('member/searchShipmentByOther/do')?>";
		var category = ($("[name=category]").val().trim());
		var search = ($("[name=search2]").val().trim());
		var userid = <?=$id?>;
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					category: category, 
					search: search,
					userid: userid
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
									
								
								
									var tr = $("<tr>").html('<td width="2%" class="hidden-xs"><input type=\'checkbox\' name="checkBluckAction" id="checkBluck-'+json[i].id+'" onclick="checknow();" value="'+json[i].id+'"></td><td class="hidden-xs" width="15%">'+json[i].tracking_number+'</td><td class="hidden-xs" width="25%">'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</td><td class="hidden-xs" width="16%">'+json[i].collection_date+'</td><td class="hidden-xs" width="24%" id="status-'+json[i].id+'">'+json[i].status+'</td><td class="visible-xs"><p>'+json[i].tracking_number+'</p><p>'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</p><p>'+json[i].collection_date+'</p><p>'+json[i].status+'</p></td><td width="22%"><a href="javascript:showDetail(\''+json[i].id+'\');" class="btn btn-success btn-xs">See More</a></td>');
									
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
		url = "<?=base_url('member/searchShipmentByDate/do')?>";
		var dateFrom = ($("[name=dateFrom]").val().trim());
		var dateTo = ($("[name=dateTo]").val().trim());
		var userid = <?=$id?>;
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					dateFrom: dateFrom, 
					dateTo: dateTo,
					userid: userid
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
									
								
								
									var tr = $("<tr>").html('<td width="2%" class="hidden-xs"><input type=\'checkbox\' name="checkBluckAction" id="checkBluck-'+json[i].id+'" onclick="checknow();" value="'+json[i].id+'"></td><td class="hidden-xs" width="15%">'+json[i].tracking_number+'</td><td class="hidden-xs" width="25%">'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</td><td class="hidden-xs" width="16%">'+json[i].collection_date+'</td><td class="hidden-xs" width="24%" id="status-'+json[i].id+'">'+json[i].status+'</td><td class="visible-xs"><p>'+json[i].tracking_number+'</p><p>'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</p><p>'+json[i].collection_date+'</p><p>'+json[i].status+'</p></td><td width="22%"><a href="javascript:showDetail(\''+json[i].id+'\');" class="btn btn-success btn-xs">See More</a></td>');
									
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
	
	changeStatus : function(url, status) {
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
  
  statussort : function(status){
    if(status == ''){
			alert("Please select a valid action.");
		} else {
			url = "<?=base_url('member/searchShipmentByOther/do')?>";
			var category = 'status';
			var search = status;
			var userid = <?=$id?>;
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					category: category, 
					search: search,
					userid: userid
					
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
									
								
								
								var tr = $("<tr>").html('<td width="2%" class="hidden-xs"><input type=\'checkbox\' name="checkBluckAction" id="checkBluck-'+json[i].id+'" onclick="checknow();" value="'+json[i].id+'"></td><td class="hidden-xs" width="15%">'+json[i].tracking_number+'</td><td class="hidden-xs" width="25%">'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</td><td class="hidden-xs" width="16%">'+json[i].collection_date+'</td><td class="hidden-xs" width="24%" id="status-'+json[i].id+'">'+json[i].status+'</td><td class="visible-xs"><p>'+json[i].tracking_number+'</p><p>'+json[i].recevier_postcode+'<br/>'+json[i].recevier_state+'<br/>'+json[i].recevier_country+'</p><p>'+json[i].collection_date+'</p><p>'+json[i].status+'</p></td><td width="22%"><a href="javascript:showDetail(\''+json[i].id+'\');" class="btn btn-success btn-xs">See More</a></td>');
									
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
			
		}
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
  
  Track : function(ref,awb,courier){
    $.ajax({
      type : "post",
      url : "./?ac=doTrackAwb",
      data : {
        courier : courier,
      },
      success : function(res){
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

function CheckNull(obj){
  var sc  = $("[name=search]");
  
  if(General.isTextEmpty($(obj))){
    doFail(obj);
  }else{
    clearNull(obj);
  }
}

function doFail(obj){
  $(obj).addClass("fail");
  $(obj).removeClass("padding");
  $(obj).removeClass("pass");
  $(obj).css("border-color","#F00");
  $(obj).parent().children().eq(1).removeClass("hide");
}

function clearNull(obj){
  $(obj).removeClass("pass");
  $(obj).removeClass("fail");
  $(obj).removeClass("padding");
  $(obj).css("border-color","");
  $(obj).parent().children().eq(1).addClass("hide");
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

function AwbMultiDownload(){
  var checkboxes = document.getElementsByName('checkawbdownload');
  id="";
  count=0;

  for(var i = 0; i < checkboxes.length; i++){
    if(checkboxes[i].checked == true){
      var myElem = document.getElementById((checkboxes[i].id));
      if (myElem != null){
        if(id!=""){
          id=id+","+document.getElementById((checkboxes[i].id)).value;
        }else{
          id=document.getElementById((checkboxes[i].id)).value;
        }
        count++;
      }
    }
  }
    
  if(id==""){
    swal({
      title: 'Oops',
      type: 'error',
      html: 'Please select the parcels which you would like download the awb as zip file.',
      confirmButtonColor: '#4e97d8'
      })
  }else{
    window.location.href = "?ac=AWBLabelDownload&id="+id;
  }
}

function ReportMultiMiss(){
  
  var checkboxes = document.getElementsByName('checkawbdownload');
  id="";
  count=0;

  for(var i = 0; i < checkboxes.length; i++){
    if(checkboxes[i].checked == true){
      var myElem = document.getElementById((checkboxes[i].id));
      if (myElem != null){
        if(id!=""){
          id=id+","+(checkboxes[i].id).substr(3);
        }else{
          id=(checkboxes[i].id).substr(3);
        }
        count++;
      }
    }
  }

  if(id==""){
    swal({
      title: 'Oops',
      type: 'error',
      html: 'Please select the parcels which you would like to report as miss.',
      confirmButtonColor: '#4e97d8'
      })
  }else{
    reportmiss(id);
  }
}

function ReportMultiLate(){
  var checkboxes = document.getElementsByName('checkawbdownload');
  id="";
  count=0;
  
  for(var i = 0; i < checkboxes.length; i++){
      if(checkboxes[i].checked == true){
      var myElem = document.getElementById((checkboxes[i].id));
      if (myElem != null){
        if(id!=""){
          id=id+","+(checkboxes[i].id).substr(3);
        }else{
          id=(checkboxes[i].id).substr(3);
        }
        count++;
      }
    }
  }
    
  if(id==""){
    swal({
      title: 'Oops',
      type: 'error',
      html: 'Please select the parcels which you would like to report as late.',
      confirmButtonColor: '#4e97d8'
      })
  }else{
  reportlate(id);
  }
}

function reportmiss(id){
  var type = "post",
  url = "./?ac=doReportParcels",
  data = {
    parcelnos : id,
    reporttype: "miss"
  },
  callback = function(result){
    var obj = JSON.parse(result);
    var resultdisplay="";
    for(counter=0; counter<obj.details.length; counter++){
      resultdisplay +=obj.details[counter].parcelno;
      resultdisplay +=" -  "+obj.details[counter].status+"  <br>";
    }
    
    if(obj.status == "pass"){
      swal({
        title: 'Miss Pickup result',
        type: 'success',
        html: '' + resultdisplay,
        confirmButtonColor: '#4e97d8'
        }).then(function() {
          location.reload();
        })
    }else{
      swal({
        title: 'Oops something went wrong.Thank you.',
        type: 'error',
        html: 'Please try again later.',
        confirmButtonColor: '#4e97d8'
      })
    }
  };

  swal({
    title: 'Miss Pickup Report Confirmation',
    text: 'Do you want to report this parcel(s) as missed pick up? <br>' + id,
    type: 'warning',
    confirmButtonColor: '#4e97d8',
    showCancelButton: true,
    cancelButtonText: "Cancel"
    }).then(function() {
      General.loadAjax(type,url,data,callback);
    })
}

function reportlate(id){
  var type = "post",
  url = "./?ac=doReportParcels",
  data = {
    parcelnos : id,
    reporttype: "late"
  },
  callback = function(result){
    var obj = JSON.parse(result);
    var resultdisplay="";
    for(counter=0; counter<obj.details.length; counter++){
      resultdisplay +=obj.details[counter].parcelno;
      resultdisplay +=" -  "+obj.details[counter].status+"  <br>";
    }
    
    if(obj.status == "pass"){
      swal({
        title: 'Late Delivery result',
        type: 'success',
        html: '' + resultdisplay,
        confirmButtonColor: '#4e97d8'
        }).then(function() {
          location.reload();
        })
    }else{
      swal({
        title: 'Oops something went wrong.Thank you.',
        type: 'error',
        html: 'Please try again later.',
        confirmButtonColor: '#4e97d8'
      })  
    }
  };

  swal({
    title: 'Miss Pickup Report Confirmation',
    text: "Do you want to report this parcel(s) as late delivery? <br>" + id,
    type: 'warning',
    confirmButtonColor: '#4e97d8',
    showCancelButton: true,
    cancelButtonText: "Cancel"
    }).then(function() {
      General.loadAjax(type,url,data,callback);
    })

}

function AwbCheckAll(){
  var checkboxes = document.getElementsByName('checkBluckAction');
  if(document.getElementById('checkall').checked){
    for(var i = 0; i < checkboxes.length; i++){
      if(checkboxes[i].type == 'checkbox'){
        checkboxes[i].checked = true;
      }
    }
  }else{
    for (var i = 0; i < checkboxes.length; i++){
      console.log(i)
      if (checkboxes[i].type == 'checkbox'){
        checkboxes[i].checked = false;
      }
    }
  }
}

function RequestMultiCancel(){
  var checkboxes = document.getElementsByName('checkawbdownload');
  id="";
  count=0;
  for(var i = 0; i < checkboxes.length; i++){
    if(checkboxes[i].checked == true){
      var myElem = document.getElementById((checkboxes[i].id));
      if (myElem != null){
        if(id!=""){
          id=id+","+(checkboxes[i].id).substr(3);
        }else{
          id=(checkboxes[i].id).substr(3);
        }
        count++;
      }
    }
  }
    
  if(id==""){
    swal({
      title: 'Oops',
      type: 'error',
      html: 'Please select the parcels which you would like to request for cancellation.',
      confirmButtonColor: '#4e97d8'
      })
  }else{
    requestcancelreasons(id);
  }
}

function requestcancelreasons(id){
  idArray = id.split(",");
  body=$(".requestremark .body").html();
  msg="Please provide the reason for your cancellation request for the below parcel(s).";
  body=body.replace("*message*", msg);
  textinput="";
  for(i=0; i<idArray.length; i++){
    textinput=textinput+"<div class='row'><div class='col-md-5'>("+idArray[i]+") </div>"
    +"<div class='col-md-7'><select onchange='showTextbox(\""+idArray[i]+"\")' id='"+idArray[i]+"' class=\"form-control input-xs\">"
    +"<option value=\"Missed pick up\">Missed Pick Up</option>"
    +"<option value=\"Customer cancelled order\">Customer Cancelled Order</option>"
    +"<option value=\"Duplicate order\">Duplicate Order</option>"
    +"<option value=\"Wrong courier\">Wrong Courier</option></select></div>"
    +"<div id='newtracking"+idArray[i]+"' style='display:none'><div class='col-md-5'>New Tracking Number : </div><div class='col-md-7'><input type='text' class='form-control' id='text"+idArray[i]+"' size='30' maxlength='100'></div></div></div><br>";
  }

  body=body.replace("*textinputreasons*", textinput);
  
  swal({
    title: 'Request for Cancellation',
    text: "" + body,
    type: 'info',
    confirmButtonColor: '#4e97d8',
    showCancelButton: true,
    cancelButtonText: "Cancel"
    }).then(function() {
      requestcancel(id);
    })
}

function requestcancel(id){
  idArray = id.split(",");    
  jsonObj = [];
  for(i=0; i<idArray.length; i++){
        var pno = idArray[i];
        var remarks = document.getElementById(idArray[i]).value;
    if(remarks == "Duplicate order"){
      if(document.getElementById("text"+idArray[i]).value.trim() == ""){
        remarks = "";
      }else{
        remarks = remarks + ", New Tracking = " + document.getElementById("text"+idArray[i]).value.trim();
      }
    }else if(remarks == "Wrong courier"){
      if(document.getElementById("text"+idArray[i]).value.trim() == ""){
        remarks = "";
      }else{
        remarks = remarks + ", New Tracking = " + document.getElementById("text"+idArray[i]).value.trim();
      }
    } 
        itemabc = {};
        itemabc ["parcelno"] = pno;
        itemabc ["remarks"] = remarks;
        jsonObj.push(itemabc);
  }
  jsonstring=JSON.stringify(jsonObj);

  var type = "post",
  url = "./?ac=doRequestCancelParcels",
  processData=false,
  data = {
    jsondata : jsonstring
  },
  callback = function(result){
    var obj = JSON.parse(result);
    var resultdisplay="";
    for(counter=0; counter<obj.details.length; counter++){
      resultdisplay +=obj.details[counter].parcelno;
      resultdisplay +=" -  "+obj.details[counter].status+"  <br>";
    }
      
    if(obj.status == "pass"){
      swal({
        title: 'Request for Cancellation',
        text: "" + resultdisplay,
        type: 'success',
        confirmButtonColor: '#4e97d8'
        }).then(function() {
          location.reload();
        })
    }else{
      swal({
        title: 'Oops something went wrong.Thank you.',
        type: 'error',
        html: 'Please try again later',
        confirmButtonColor: '#4e97d8'
        })
    }
  };  
  General.loadAjax(type,url,data,callback);
  
}

function requestreschedule(id, start_duration, scheduled_start_date){
  body=$(".reschedulediv"+id).html();
  body=body+"Select the new collection date for parcel '"+id+"'<br>"
  +"<input type='text' name='collectiondate' size='10' class='form-control datepicker' readonly id='cd"+id+"'  class='cd"+id+"' style='cursor:pointer !important;' onclick=\"$('#cd"+id+"').datepicker("
  +"{dateFormat: 'yy-mm-dd DD', minDate: +"+start_duration+", maxDate: '+14D', "
  +"beforeShowDay: function(date){holiday=document.getElementById('courierholidays"+id+"').value;"
  +"disabledDates=holiday.split(','); for (var i = 0; i < disabledDates.length; i++) { var deadline=date.getFullYear().toString()+'-'; var deadlinemonth=date.getMonth()+1;"
  +"deadline=deadline+deadlinemonth+'-'+date.getDate().toString();if (disabledDates[i] == deadline){ return [false];}}return [true];},"
  +"onSelect: function(dateText, inst) {var date = $(this).datepicker('getDate');var dayOfWeek = weekday[date.getUTCDay()];}});" 
  +"$('#cd"+id+"').datepicker('show');\"  value='"+scheduled_start_date+"' title='Choose collection date'> <br><br><br><br>";

  swal({
    title: 'Request for Reschedule',
    text: "" + body,
    type: 'info',
    confirmButtonColor: '#4e97d8',
    showCancelButton: true,
    cancelButtonText: "Cancel"
    }).then(function() {
      reschedulenow(id);
    })
}

function reschedulenow(id){
  rescheduledate=document.getElementById("cd"+id).value;
  var type = "post",
  url = "./?ac=doRescheduleParcel",
  data = {
    parcelno : id,
    rescheduledate: rescheduledate
  },
  callback = function(result){
    var obj = JSON.parse(result);
    if(obj.status == "pass"){
      swal({
        title: 'Request for reschedule.',
        text: "" + obj.msg,
        type: 'success',
        confirmButtonColor: '#4e97d8'
        }).then(function() {
          location.reload();
        })
    }else{
      swal({
        title: 'Oops something went wrong.Thank you.',
        type: 'error',
        html: 'Please try again later',
        confirmButtonColor: '#4e97d8'
        })
    }
  };
  General.loadAjax(type,url,data,callback); 
}

function requestAddressChange(id){
  body=$(".requestchangeaddress .body").html();
  body=body.replace("*parcelno*", id);
  var input="<select id=\"changetype\" class=\"form-control input-xs\" onChange='requesttypechanged()'><option value=\"\">Select Request Type</option>"+
    "<option value=\"CAC\">Request Collection Address Change Only</option>"+
    "<option value=\"DAC\">Request Delivery Address Change Only</option>"+
    "<option value=\"CDAC\">Request Collection and Delivery Address Change</option></select>"+
    "<div id=\"colladdress\" style=\"display:none\"><br>"+
    "<b>New Collection Address</b><br>"+
    "<input type=\"text\"  name=\"caddr1\" id=\"caddr1\" txt_c_addr1 class=\"form-control input-xs\" maxlength=\"36\" placeholder=\"Line 1\" value=\"\">"+
    "<input type=\"text\" name=\"caddr2\" id=\"caddr2\" txt_c_building class=\"form-control input-xs\" maxlength=\"36\" placeholder=\"Line 2\" value=\"\">"+
    "<input type=\"text\"  name=\"caddr3\" id=\"caddr3\" txt_c_addr3 class=\"form-control input-xs\" maxlength=\"36\" placeholder=\"Line 3\" value=\"\">"+
    "<input type=\"text\"  name=\"caddr4\" id=\"caddr4\" txt_c_addr4 class=\"form-control input-xs\" maxlength=\"36\" placeholder=\"Line 4\" value=\"\">"+
    "<input type=\"text\" name=\"ccity\" id=\"ccity\" txt_c_city class=\"form-control\" placeholder=\"Collection City\" value=\"\"></div>"+
    "<div id=\"deliaddress\" style=\"display:none\"><br>"+
    "<b>New Delivery Address</b><br>"+
    "<input type=\"text\"  name=\"daddr1\" id=\"daddr1\" txt_d_addr1 class=\"form-control input-xs\" maxlength=\"36\" placeholder=\"Line 1\" value=\"\">"+
    "<input type=\"text\" name=\"daddr2\" id=\"daddr2\" txt_d_building class=\"form-control input-xs\" maxlength=\"36\" placeholder=\"Line 2\" value=\"\">"+
    "<input type=\"text\"  name=\"daddr3\" id=\"daddr3\" txt_d_addr3 class=\"form-control input-xs\" maxlength=\"36\" placeholder=\"Line 3\" value=\"\">"+
    "<input type=\"text\"  name=\"daddr4\" id=\"daddr4\" txt_d_addr4 class=\"form-control input-xs\" maxlength=\"36\" placeholder=\"Line 4\" value=\"\">"+
    "<input type=\"text\" name=\"dcity\" id=\"dcity\" txt_d_city class=\"form-control\" placeholder=\"Delivery City\" value=\"\"></div>";
    body=body.replace("*theinternal*", input);
    $( "#dialog" ).html(body).dialog({
      title: "Request for Change of Address",
      resizable: true,
      maxWidth:600,
      width: "auto",
      modal: true,
      buttons: {"Ok": function(){
        var yourSelect = document.getElementById( "changetype" );
        var reqtype= yourSelect.options[ yourSelect.selectedIndex ].value;
        caddr1=document.getElementById("caddr1").value;
        caddr2=document.getElementById("caddr2").value;
        caddr3=document.getElementById("caddr3").value;
        caddr4=document.getElementById("caddr4").value; 
        ccity=document.getElementById("ccity").value;
        daddr1=document.getElementById("daddr1").value;
        daddr2=document.getElementById("daddr2").value;
        daddr3=document.getElementById("daddr3").value;
        daddr4=document.getElementById("daddr4").value; 
        dcity=document.getElementById("dcity").value;
        var message = "";
        if(reqtype==""){
          message += "Please select an option to continue.<br>";
        }else if(reqtype=="CAC"){
          if(caddr1 == ""){
            message += "Collection address 1 is not inserted.<br>";
          }
          if(ccity == ""){
            message += "Collection city is not inserted.<br>";
          }
        }else if(reqtype=="DAC"){
          if(daddr1 == ""){
            message += "Delivery address 1 is not inserted.<br>";
          }
          if(dcity == ""){
            message += "Delivery city is not inserted.<br>";
          }
        }else{
          if(caddr1 == ""){
            message += "Collection address 1 is not inserted.<br>";
          }
          if(ccity == ""){
            message += "Collection city is not inserted.<br>";
          }
          if(daddr1 == ""){
            message += "Delivery address 1 is not inserted.<br>";
          }
          if(dcity == ""){
            message += "Delivery city is not inserted.<br>";
          }
        }
        if(message != ""){
          swal({
            title: 'Oops..',
            type: 'error',
            html: ''+message,
            confirmButtonColor: '#4e97d8'
          })
        }else{
          processAddressChange(id);
          $(this).dialog("close");
        }
      }, 
      "Cancel": function(){$(this).dialog( "close" );}}
    });
}

function requesttypechanged(){
  var yourSelect = document.getElementById( "changetype" );
  var reqtype= yourSelect.options[ yourSelect.selectedIndex ].value;
  if(reqtype==""){
    $( "#colladdress" ).hide();
    $( "#deliaddress" ).hide();
  } else if (reqtype=="CAC"){
    $( "#colladdress" ).show();
    $( "#deliaddress" ).hide();
  }else if (reqtype=="DAC"){
    $( "#colladdress" ).hide();
    $( "#deliaddress" ).show();
  }else {
    $( "#colladdress" ).show();
    $( "#deliaddress" ).show();
  }
}

function processAddressChange(id){
  var yourSelect = document.getElementById( "changetype" );
  var reqtype= yourSelect.options[ yourSelect.selectedIndex ].value;
  caddr1=document.getElementById("caddr1").value;
  caddr2=document.getElementById("caddr2").value;
  caddr3=document.getElementById("caddr3").value;
  caddr4=document.getElementById("caddr4").value; 
  ccity=document.getElementById("ccity").value;
  daddr1=document.getElementById("daddr1").value;
  daddr2=document.getElementById("daddr2").value;
  daddr3=document.getElementById("daddr3").value;
  daddr4=document.getElementById("daddr4").value; 
  dcity=document.getElementById("dcity").value;
  var   type = "post",
  url = "./?ac=doRequestChangeAddressParcels",
  processData=false,
  data = {
    parcelnos : id,
    requesttype : reqtype,
    colladdr1 :caddr1,
    colladdr2 :caddr2,
    colladdr3 :caddr3,
    colladdr4 :caddr4,
    collcity :ccity,
    deliaddr1 :daddr1,
    deliaddr2 :daddr2,
    deliaddr3 :daddr3,
    deliaddr4 :daddr4,
    delicity : dcity 
  },
  callback = function(result){
    var obj = JSON.parse(result);
    if(obj.status == "pass"){
      swal({
        title: 'Change of Address Request Result',
        text: "" + obj.message,
        type: "info",
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
        }).then(function() {
          location.reload();
        })
    }else{
      swal({
        title: 'Oops something went wrong.Thank you.',
        type: 'error',
        html: 'Please try again later',
        confirmButtonColor: '#4e97d8'
        })
    }
  };
  General.loadAjax(type,url,data,callback);
}

function checknow(id){
  if(document.getElementById('checkall').checked){
    document.getElementById('checkall').checked=false;
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
      document.getElementById('checkall').checked=true;
    }
  }
}

function changeCategory(){
  var sf = $("[name=category]").val();
  sf = $.trim(sf);
  if(sf == 'collection_date'){
    $('#searchfield_normal').attr('style','display: none');
    $('#searchfield_calendar').attr('style','display: ""');
    
  }else if(sf == 'tracking_number'){
    $('#searchfield_normal').attr('style','display: ""');
    $('#searchfield_calendar').attr('style','display: none');
   
  }
}

function ShipmentDownload(){
  var checkboxes = document.getElementsByName('checkBluckAction');
  id="";
  count=0;
  
  for(var i = 0; i < checkboxes.length; i++){
    if(checkboxes[i].checked == true){
      var myElem = document.getElementById((checkboxes[i].id));
      if (myElem != null){
        if(id!=""){
          id=id+","+document.getElementById((checkboxes[i].id)).value;
        }else{
          id=document.getElementById((checkboxes[i].id)).value;
        }
        count++;
      }
    }
  }
    
  if(id==""){
    swal({
      title: 'Oops',
      type: 'error',
      html: 'Please select the shipment which you would like download.',
      confirmButtonColor: '#4e97d8'
      })
  }else{
    window.location.href = "?ac=ShipmentDownload&id="+id;
  }
}

function showTextbox(id){
  selectedOption = (document.getElementById(id).value);
  if(selectedOption == "Duplicate order"){
    document.getElementById("newtracking"+id).style.display="";
  }else if(selectedOption == "Wrong courier"){
    document.getElementById("newtracking"+id).style.display="";
  }else if(selectedOption == "Missed pick up"){
    document.getElementById("newtracking"+id).style.display="none";
  }else if(selectedOption == "Customer cancelled order"){
    document.getElementById("newtracking"+id).style.display="none";
  }   
}

$(function() {
  $( "#fromDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+14d'});
    $( "#toDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+14d'});
  changeCategory();
});

function checkEnter(e) {
    if (e.keyCode == 13) {
    shipmentlist.search();
    }
}

function performBulkAction(value){
  switch(value){
    case "RequestMultiCancel" : RequestMultiCancel(); break;
    default : alert("Please select a valid action."); break;
  }
}

function reportparcel(itemid,ordernumber,awb,status,courier){
  //ajax get question and show
  $.ajax({
    type : 'post',
    url: "./?ac=deGetReportIssue",
    data : {
      status : status,
      itemid : itemid  
    },
    success : function(result){
      body=$(".reportparcel .body").html();
      body=body.replace("*awb*", awb);
      var input="<select name='issue"+itemid+"' id='issue"+itemid+"' class='form-control'>"+result+"</select>";
        body=body.replace("*theinternal*", input);
        /*$( "#dialog" ).html(body).dialog({
          title: "Report Parcel",
          resizable: true,
          maxWidth:600,
          width: "auto",
          modal: true,
          buttons: {"Ok": function(){
            $(this).dialog( "close" );
            var id = $('#issue'+itemid).val();
            processReport(itemid,ordernumber,awb,id);
          }, 
          "Cancel": function(){$(this).dialog( "close" );}}
        });*/
        swal({
          title: 'Report Parcel',
          text: '' + body,
          showCancelButton: true,
          confirmButtonColor: '#4e97d8',
          confirmButtonText: 'Ok',
          cancelButtonText: 'Cancel'
          }).then(function() {
            var id = $('#issue'+itemid).val();
            processReport(itemid,ordernumber,awb,id,courier);
          })
    }
   });
}

function uploadPhoto(e,issue,parcelid){
  var f = $(e).attr("name");
  var ftype = $(e).attr("data-type");
  if(!$(e).val()) {
        // No file is uploaded, do nothing
    $(e).val('');
        return false;
    }
  if($(e).prop('files').length > 4){
    swal({
      title: 'Oops',
      type: 'error',
      html: 'You are only allowed to upload 4 parcel photos.',
      confirmButtonColor: '#4e97d8'
      })
    $(e).val('');
    return false;
  }else{
    $('#'+ftype+'_upload').show();
    var file_data = [];
    var form_data = new FormData();
    for(i = 0; i<$(e).prop('files').length; i++){
      form_data.append('files[]', $(e).prop('files')[i]);
      form_data.append('type_of',ftype);
      form_data.append('parcel_id',parcelid);
    }
    
    $.ajax({
      url: "./?ac=doUploadInsurance50Attachment",
      type: "POST",
      data: form_data,
      processData: false,
      contentType: false,
      success: function (res){
        $('#'+ftype+'_upload').hide();
        if(res=="success"){
          displayPhoto(e,parcelid,ftype);
        }else{
          swal({
            title: 'Oops',
            type: 'error',
            html: '' + res,
            confirmButtonColor: '#4e97d8'
            })
        }
        }
    });
    $(e).val('');
        return false;
    }
}

function displayPhoto(e,parcelid,ftype){
  $('.'+ftype).empty();
  $.ajax({
    type: "POST",
      url: "./?ac=getUploadedInsurance50Attachment",
      data: {parcel_id: parcelid, type_of:ftype},
    dataType: "json",
      success: function (res) {
      var obj =(res.attachments);
      for(counter=0; counter<obj.length; counter++){
        $('.'+ftype).append(
          "<div style='float:left;width:70px;height:60px;position:relative;'>" +
          "<img src='"+obj[counter].img+"' style='margin-right:5px;margin-bottom:4px;vertical-align:top;height:50px;width:60px;float:left' >" +
          "<span id='"+obj[counter].imgonly+"' class='glyphicon glyphicon-trash glyphicon-remove' onclick=\"deletephoto('"+parcelid+"','"+obj[counter].imgonly+"', '"+obj[counter].img+"')\"></span>" +
          "</div>"
        );
      }
      if(res.id != ""){
        if((res.id).slice(-1) ==','){
          var id = (res.id).slice(0, -1);
        }
        var input = $('input[data-type='+ftype+']').attr('name');
        input = input.replace("[", "");
        input = input.replace("]", "");
        input = input.replace("input_", "");
        
        
        
        if($("input[name='input_"+input+"']").length){
          $("input[name='input_"+input+"']").val(id);
        }else{
          var $temp = $("<input>");
          $("body").append($temp);
          $temp.html("<input type='hidden' name='input_"+input+"' value='"+id+"'>");
        }
      }else{
        var input = $('input[data-type='+ftype+']').attr('name');
        input = input.replace("[", "");
        input = input.replace("]", "");
        input = input.replace("input_", "");
        $("input[name='input_"+input+"']").val('');
      }
      
      }
    });
}

function deletephoto(parcelid,img,asd){
  $.ajax({
    type : "post",
    url : "./?ac=doDeleteInsurance50Attachment",
    data : {
      attachment : img,
      parcel_id : parcelid
    },
    success: function (res) {
      if(res=="success"){
        displayPhoto("#dialog .photo",parcelid,'photo');
        displayPhoto("#dialog .invoice",parcelid,'invoice');
      }else{
        swal({
          title: 'Oops',
          type: 'error',
          html: '' + res,
          confirmButtonColor: '#4e97d8'

        })
      }
    }
  });
}

function processReport(itemid,ordernumber,awb,id,courier){
  if(id != 0 && id != ""){
    //straight check
    $.ajax({
      type: "POST",
      url: "./?ac=doReportIssue",
      data : { issueID : id,
           parcelID : itemid},
      dataType: "json",
      success: function (result) {
        window.question = result.question;
        window.startQuestion = result.startQuestion;
        if(result.response == 'pass'){
          $.ajax({
            type : "post",
            url : "./?ac=doTrackAwb",
            data : {
              courier : courier,
            },
            success : function(res){
              swal({
                title: 'Success',
                type: 'success',
                html: res + ' has received your report and will respond to you under My Account >' + ' <a href="?pg=MyAccount&tab=ParcelReport">Parcel Report</a> ' + 'tab',
                showCancelButton: true,
                confirmButtonColor: '#4e97d8',
                confirmButtonText: 'Ok',
                cancelButtonText: 'View Parcel Report'
                }).then(function() {
                  location.reload();
                }, function(dismiss) {
                  if (dismiss === 'cancel') {
                  window.location.href = './?pg=MyAccount&tab=ParcelReport';
                  }
                })
            }
          }).fail(function(){
            swal({
              title: 'Error',
              type: 'error',
              html: 'Fail',
              confirmButtonColor: '#4e97d8'
              })
          });
        }else if(result.response == 'issueExist'){
          swal({
            title: 'Oops',
            type: 'error',
            html: 'You have reported earlier. You may check for courier reply under' + ' <a href="?pg=MyAccount&tab=ParcelReport">Parcel Report</a> ' + 'tab.',
            showCancelButton: true,
            confirmButtonColor: '#4e97d8',
            confirmButtonText: 'Ok',
            cancelButtonText: 'View Parcel Report'
            }).then(function() {
              location.reload();
            }, function(dismiss) {
              if (dismiss === 'cancel') {
              window.location.href = './?pg=MyAccount&tab=ParcelReport';
              }
            })
        }else if(result.response == 'showQuestion'){
          showQ(result,itemid,id,ordernumber);
        }
      }
    });
  }else{
    swal({
      title: 'Oops',
      type: 'error',
      html: 'Please select issue.',
      confirmButtonColor: '#4e97d8'
      })
  }
}

function showQ(result,itemid,id,ordernumber){
  $("input[class^='inputs_']").remove();
  var response = result;
  $("#myModal").modal('toggle');
  $("#modalContent").html(result.content);
  document.getElementById("modalCancelBtn").addEventListener("click", function(){
    $("#myModal .close").click();
  });
  document.getElementById("modalOKBtn").addEventListener("click", function(){
    okfunction(response,itemid,id,ordernumber);
  });

  displayPhoto("#dialog .photo",itemid,'photo');
  displayPhoto("#dialog .invoice",itemid,'invoice');
}

function okfunction(result,itemid,id,ordernumber){
//process checking
var message = '';
var input = [];
var link = (result.linkQuestion).split('/');
for(var i = 1; i <= result.question; i++){
  if(!$('input[name=input_'+i+']').val()){
    message += "Question "+ i +" is empty. <br>";
  }else{
    if(result.linkQuestion != '' && (i-1 == link[i-1])){
    }else{
      input[i] = $('input[name=input_'+i+']').val();
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.html("<input type='hidden' class='inputs_"+i+"' value='"+$('input[name=input_'+i+']').val()+"'>");
    }
  }
}
if(message == ""){
  if(result.linkQuestion == ''){
    var inputss = [];
    var qid = parseInt(window.startQuestion);
    for(var j = 0; j < window.question; j++){
      inputss.push({'qid':(qid+j),'response':$(".inputs_"+(j+1)).val()});
    }
    $.ajax({
      type : 'post',
      url: "./?ac=doUpdateReportIssue",
      data : {
        parcelID : itemid,
        issueID : id,
        cust_response : inputss,
        order_number : ordernumber,
      },
      success : function(result){
        result = result.trim();
        if(result =="pass"){
          swal({
            title: 'Success',
            type: 'success',
            html: 'You had report your parcel successfully.'+ '<a href="?pg=MyAccount&tab=ParcelReport">Parcel Report</a> ' + 'tab.',
            showCancelButton: true,
            confirmButtonColor: '#4e97d8',
            confirmButtonText: 'Ok',
            cancelButtonText: 'View Parcel Report'
            }).then(function() {
              location.reload();
            }, function(dismiss) {
              if (dismiss === 'cancel') {
              window.location.href = './?pg=MyAccount&tab=ParcelReport';
              }
            })
        }else{
          swal({
            title: 'Oops...',
            type: 'error',
            html: 'Please Try again later on.',
            confirmButtonColor: '#4e97d8',
            confirmButtonText: 'OK'
            }).then(function() {
              location.reload();
            })
        }
      }
     });
  }else{
    $("#dialog").html('Uploading photos... Kindly Hold On.').dialog({
      title: "Processing...",
      resizable: false,
      maxWidth: 500,
      width: 'auto',
      modal: true
      });
        
    var path = "";
    var proceed = false;
    //get photo
    for(i = 0; i < link.length; i++){
      var file_data = [];
      var form_data = new FormData();
      form_data.append('file[]', $('input[name=input_'+link[i]+']').prop('files')[0]);
      $.ajax({
        url: "./?ac=doUploadReportPhoto&for="+link[i]+"&parcelid="+itemid+"&issue="+id,
        type: "POST",
        data: form_data,
        indexValue: i,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (result){
          //$('.inputs_'+result.response).replaceWith("<input type='hidden' class='inputs_"+result.response+"' value='"+result.content+"'>");
          result.content = (result.content).trim();
          if(result.content != ""){
            $('.inputs_'+result.response).val(result.content);
            if(this.indexValue == (link.length-1)){
              proceed = true;
              setTimeout(function(){
                var inputss = [];
                var qid = parseInt(window.startQuestion);
                for(var j = 0; j < window.question; j++){
                  inputss.push({'qid':(qid+j),'response':$(".inputs_"+(j+1)).val()});
                }
                $.ajax({
                  type : 'post',
                  url: "./?ac=doUpdateReportIssue",
                  data : {
                    parcelID : itemid,
                    issueID : id,
                    cust_response : inputss,
                    order_number : ordernumber,
                  },
                  success : function(result){
                    result = result.trim();
                    if(result =="pass"){
                      swal({
                        title: 'Success',
                        type: 'success',
                        html: 'You had report your parcel successfully.'+ '<a href="?pg=MyAccount&tab=ParcelReport">Parcel Report</a> ' + 'tab.',
                        showCancelButton: true,
                        confirmButtonColor: '#4e97d8',
                        confirmButtonText: 'Ok',
                        cancelButtonText: 'View Parcel Report'
                        }).then(function() {
                          location.reload();
                        }, function(dismiss) {
                          if (dismiss === 'cancel') {
                          window.location.href = './?pg=MyAccount&tab=ParcelReport';
                          }
                        })
                    }else{
                      swal({
                        title: 'Oops...',
                        type: 'error',
                        html: 'Please Try again later on.',
                        confirmButtonColor: '#4e97d8',
                        confirmButtonText: 'OK'
                        }).then(function() {
                          location.reload();
                        })
                    }
                  }
                 });
              }, 4000)
            }
          }else{
            swal({
              title: 'Oops...',
              type: 'error',
              html: 'Oops, we found some difficulty to upload the photo. Please Try again later on.',
              confirmButtonColor: '#4e97d8',
              confirmButtonText: 'OK'
              }).then(function() {
                location.reload();
              })
          }
        }
      });
    }
  }
}else{
  $("input[class^='inputs_']").remove();
  swal({
    title: 'Oops',
    type: 'error',
    html: message,
    confirmButtonColor: '#4e97d8'
    })
}
}

function showFileName(e,id){
var filename = $('input[name=input_'+id+']').val();
if(filename !== null){
  $('#photo_upload_'+id).html(filename);
}

}
</script>

    </div>
  </div>
</div>

</div>

<div id="mainTrackResult"></div>
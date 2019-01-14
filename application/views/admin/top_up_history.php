<script>
	$('#MyCredits').collapse();
	$("ul[data-target='#MyCredits']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Top_Up_History").addClass('active selected');

</script>

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
<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
    <div class="row dashoboard-account">
      <div class="container-fluid space-small" style="padding-bottom: 15px;">
        <div id="TopUpHistory">
          <h2 class="text-center">Top Up History</h2>
        </div>
      </div>
      <div class="well row col-sm-12 date_search">
        <div class="col-md-5 col-sm-5 col-xs-12 padding-left-off" style="padding-bottom:5px;">
          <div class="form-group">
            <div class="input-group date">
              <div class="input-group-addon" style="min-width: 60px;">From </div>
              <div class="has-feedback">
	          	<input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" name="dateFrom" value="" id="dateFrom" size="16">
			  	<span class="form-control-feedback hide"  aria-hidden="true"><i class="fas fa-info-circle"></i></span> </div>
            </div>
			</div>
          </div>
        <div class="col-md-5 col-sm-5 col-xs-12 padding-left-off" style="padding-bottom:5px;">
          <div class="form-group">
            <div class="input-group date">
              <div class="input-group-addon" style="min-width: 60px;">To </div>
              <div class="has-feedback">
                <input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" name="dateTo" value="" id="dateTo" size="16">
                <span class="form-control-feedback hide"  aria-hidden="true"><i class="fas fa-info-circle"></i></span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12 padding-off" style="padding-bottom:5px;"> <a class="btn btn-primary" onclick="gettopup()" style="width: 100%;">Search</a> </div>
      </div>
      <div class="visible-xs">&nbsp;</div>
	  <div class="clearfix"></div>
      <div class="container-fluid">
        <div class="row">
        <div class="pull-right hidden-xs">
          <ul class="pagination">
            
          </ul>
        </div>
		<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;"></div>



		</div>
        <form method="post">
			<table id="myTable" class="table table-striped" width="100%">

				<thead>
					<tr>
					<th width="12%" class="text-center hidden-xs">Date/Time</th>
					<th width="20%" class="hidden-xs">Package Description</th>
					<th width="14%" class="text-center hidden-xs">User Id</th>
					


					<th width="14%" class="text-center hidden-xs">Transaction No</th>
					<th width="14%" class="text-center hidden-xs">Status</th>
					<th width="12%" class="text-center hidden-xs">Amount (RM)</th>
					<th class="visible-xs" width="88%"></th>
					
					<th width="14%" style="padding:4px;"></th>
					</tr>
				</thead>
				<tbody id="table1">
					<?php
						if (!empty($topUpHistory)) {
							foreach ($topUpHistory as $v) {
								
								if ($v['status'] == 'Approved' || $v['status'] == 'Rejected' ) {
										$disabled = 'style= "display: none;"';
								} else {
										$disabled = '';
								}
					?>
					<tr>
		
		<td class="hidden-xs" width="12%"><?=$v['created_date']?></td>
		<td class="hidden-xs" width="20%"><?=$v['package']?></td>
		<td class="hidden-xs" width="14%"><?=$v['user_id']?></td>
		<td class="hidden-xs" width="14%"><?=$v['id']?></td>
		<td class="hidden-xs" width="14%"><?=$v['status']?></td>
		<td class="hidden-xs" width="12%"><?=$v['total_price']?></td>
		<td class="visible-xs" width="88"><?=$v['created_date']?><br/><?=$v['package']?><br/><?=$v['user_id']?><br/><?=$v['status']?><br/><?=$v['total_price']?></td>
		
		<td width="14%" style="padding:4px;">
			<a href="javascript:approveTopUp('<?=$v['id']?>','<?=$v['package']?>','<?=$v['total_price']?>','<?=$v['user_id']?>');" class="btn btn-success btn-xs" <?=$disabled?>>Approve</a>
			<a href="javascript:rejectTopUp('<?=$v['id']?>');" class="btn btn-danger btn-xs" <?=$disabled?>>Reject</a>
		</td>
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
			
        </form>
		<div class="row">
			<div class="form-inline visible-xs text-center"> 
				
			</div>

		</div>
		<div class="row">
		<div class="dashboard-pagination">
          <ul class="pagination">
            
          </ul>
        </div>
        <div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;"> 
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="dialog"></div>
<script>
$(function() {
    $( "#dateFrom" ).datepicker({dateFormat: 'yy-mm-dd',maxDate: '+0d'});
	$( "#dateTo" ).datepicker({dateFormat: 'yy-mm-dd',maxDate: '+0d'});
});

function gettopup(){
	url = "<?=base_url('order/search_by_date')?>";
		var dateFrom = ($("[name=dateFrom]").val().trim());
		var dateTo = ($("[name=dateTo]").val().trim());
		if(dateFrom!="" && dateTo!=""){ 
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					dateFrom: dateFrom, 
					dateTo: dateTo,
					type: 'admin'
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
									var ckDisabled = '';
									if (json[i].status == 'Approved' || json[i].status == 'Rejected') {
										ckDisabled = 'style= "display: none;"';
									} else {
										ckDisabled = '';
										
									}
								
								
									var tr = $("<tr>").html('<td class="hidden-xs" width="12%">'+json[i].created_date+'</td><td class="hidden-xs" width="20%">'+json[i].dest+'</td><td class="hidden-xs" width="14%">'+json[i].user_id+'</td><td class="hidden-xs" width="14%">'+json[i].id+'</td><td class="hidden-xs" width="14%">'+json[i].status+'</td><td class="hidden-xs" width="12%">'+json[i].total_price+'</td><td class="visible-xs" width="88">'+json[i].created_date+'<br/>'+json[i].dest+'<br/>'+json[i].user_id+'<br/>'+json[i].status+'<br/>'+json[i].total_price+'</td><td width="14%"><a href="javascript:approveTopUp(\''+json[i].id+'\',\''+json[i].dest+'\',\''+json[i].total_price+'\',\''+json[i].user_id+'\');" class="btn btn-success btn-xs" '+ckDisabled+'>Approve</a>><a href="javascript:rejectTopUp(\''+json[i].id+'\');" class="btn btn-danger btn-xs" '+ckDisabled+'>Reject</a></td>');
									
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
		} else {
		//	CheckNull($("[name=dateFrom]"),$("[name=dateTo]"));
		swal({
			title: 'Please Select Date Range',
			type: 'error',
			html: "Please select both 'From' and 'To' date to search topup invoice.",
			confirmButtonColor: '#4e97d8'
			})
		}
}

function approveTopUp(id,dest,total_price,user_id) {
	url = "<?=base_url('order/approveTopUp')?>";
	
		 
		$.ajax({
			url: url,
			type: "POST",
			dataType: "text",
			async: true,
			data: {
				id: id,
				dest: dest,
				total_price: total_price,
				user_id: user_id,
				status: status
			},
				
			success: function(result) {
				if (result=="pass") {
					location.reload(true);
					}
					
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

function rejectTopUp(id) {
	url = "<?=base_url('order/updateStatus')?>";
	
	var id = id;
	var status = "Rejected";
		 
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
				if (result=="pass") {
					location.reload(true);
					}
					
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

/**
function CheckNull(obj,obj1){
	var from  = $("[name=dateFrom]");
	var to  = $("[name=dateTo]");
	
	if(General.isTextEmpty($(obj))){
		doFail(obj);
	}else{
		clearNull(obj);
	}
	if(General.isTextEmpty($(obj1))){
		doFail(obj1);
	}else{
		clearNull(obj1);
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
**/
function resultLimit(limit){
	var url = QueryString(window.location.href);
		var rl = limit;
		var qs = "";
		for(p in url.qs){
			if(p != "hpg"&& p != "rl"){
				if(qs.length > 0) qs += "&";
				qs += p + "=" + url.qs[p]
			};
		}
		window.location.href = url.link + "?" + qs + (rl.length > 0 ? "&rl=" + rl : "");
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

function downloadMonthly(){
	var from = ($("[name=dateFrom]").val().trim());
	var to = ($("[name=dateTo]").val().trim());
	if(from == "" || to == ""){
		CheckNull($("[name=dateFrom]"),$("[name=dateTo]"));
		swal({
			title: 'Please Select Date Range',
			type: 'error',
			html: "Kindly select top up 'From' and 'To' date to download topup invoice.",
			confirmButtonColor: '#4e97d8'
			})
	}else{
		window.open("https://secure.easyparcel.my/pass/?ac=doTopupReceipt&from="+from+"&to="+to);
	}
}
</script>
</div>
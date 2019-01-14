 <script>
	$('#MyOrders').collapse();
	$("ul[data-target='#MyOrders']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Credit_History").addClass('active selected');

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
</style>
 <div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
    <div class="row credits-available hidden-xs">
					<?php 
						
						if (!empty($creditHistoryList)) {
							$bal = 0;
							foreach ($creditHistoryList as $v) {
								if ($v['amount_type']=='dt') {
									$bal += $v['amount'];
								} else {
									$bal -= $v['amount'];
								}
							}
						}
					?>
      <h4><i class="fas fa-coins" style="font-size:48px; vertical-align: middle;"></i> My credits : RM <?=sprintf('%0.2f', $bal);?>
        <div class="btn-group pull-right" style="margin-top: 10px;"> <a href="<?=base_url('member/top_up')?>" class="btn btn-topup"><i class="fas fa-angle-double-up"></i> Top Up</a> </div>
      </h4>
    </div>
    
    <div class="row dashoboard-account">
	  <div class="container-fluid space-small" style="padding-bottom: 15px;">
        <h2 class="text-center">Statement</h2>
      </div>
      <div class="clearfix"></div>
	  
	  <div class="well row col-sm-12 date_search" onkeypress="return checkEnter(event)">
        <div class="col-md-5 col-sm-5 col-xs-12 padding-left-off" style="padding-bottom:5px;">
          <div class="form-group">
            <div class="input-group date">
              <div class="input-group-addon" style="min-width: 60px;">From </div>
              <div class="has-feedback">
                <input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" name="fromDate" value="" id="fromDate" size="16">
					<span class="fas fa-info-circled form-control-feedback hide"  aria-hidden="true"></span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12 padding-left-off" style="padding-bottom:5px;">
          <div class="form-group">
            <div class="input-group date">
              <div class="input-group-addon" style="min-width: 60px;">To </div>
              <div class="has-feedback">
                <input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" name="toDate" value="" id="toDate" size="16">
						<span class="fas fa-info-circled  form-control-feedback hide"  aria-hidden="true"></span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12 padding-off" style="padding-bottom:5px;"> <a class="btn btn-primary" onclick="searchByDate()" style="width: 100%;">Search</a> </div>
      </div>
      <div class="container-fluid"> 
        
        <div class="pull-right hidden-xs">
          <ul class="pagination">
            
          </ul>
        </div>
         
        <div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;"> 
			
        </div>
        <div class="visible-xs">&nbsp;</div>
        <table id="myTable" class="table table-striped hidden-xs">
          <thead>
            <tr>
              <th class="hidden-xs text-center" width="20%">Date/Time</th>
              <th class="hidden-xs text-center" width="30%">Description</th>
              <th class="hidden-xs text-center" width="15%">Debit </th>
              <th class="hidden-xs text-center" width="15%">Credit</th>
              <th class="hidden-xs text-center" width="20%">Balance</th>
              <th class="visible-xs" width="60%">Statement Summary</th>
	      <th class="visible-xs" width="35%">Balance (RM)</th>
			  <th class="visible-xs" width="5%"></th>
            </tr>
          </thead>
          <tbody id="table1">
			<?php 
						
						if (!empty($creditHistoryList)) {
							$balance = 0;
							foreach ($creditHistoryList as $v) {
								if ($v['amount_type']=='dt') {
									$balance += $v['amount'];
								} else {
									$balance -= $v['amount'];
								}
					?>
			<tr>
				<td class="hidden-xs" width="20%"><?=$v['created_date']?></td>
				<td class="hidden-xs" width="30%"><?=$v['description']?></td>
				<td class="hidden-xs" width="15%"><?=($v['amount_type']=='dt')?$v['amount']:''?></td>
				<td class="hidden-xs" width="15%"><?=($v['amount_type']=='kt')?$v['amount']:''?></td>
				<td class="hidden-xs" width="20%"><?=sprintf('%0.2f', $balance);?></td>
				
			
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
		
		<table class="mobile_table table table-striped visible-xs">
			<thead>
				<tr>
				  <th width="95%">Statement Summary</th>
				  <th width="5%"></th>
				</tr>
			  </thead>
			  <tbody id="table2">
				  <?php 
						
						if (!empty($creditHistoryList)) {
							$balance1 = 0;
							foreach ($creditHistoryList as $v) {
								if ($v['amount_type']=='dt') {
									$balance1 += $v['amount'];
								} else {
									$balance1 -= $v['amount'];
								}
					?>
				
				<tr>
					<td class="text-center">Date/Time : <?=$v['created_date']?></br><?=$v['description']?></br><span style="color:#00a9b0"><?=$v['amount']?>(<?=($v['amount_type']=='dt')?'Debit':'Credit'?>)</span><br>Balance (RM) : <?=sprintf('%0.2f', $balance1);?></td>
					<td class="text-center">
					 
					</td>
					
				</tr>
				<?php
						}}
						else {
		  
					?>
					<tr><td colspan='4'>No Record Found.</td></tr>
	
					<?php
						}
	
					?>
				
			  </tbody>
		</table>
		<div class="row"> 
			<div class="form-inline text-center visible-xs"> 
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

		$(function(){
			$( "#fromDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
			$( "#toDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});

		});
		
		
		function searchByDate() {
			url = "<?=base_url('credit/search_by_dateMember')?>";
			var dateFrom = ($("[name=fromDate]").val().trim());
			var dateTo = ($("[name=toDate]").val().trim());
			var user_id = '<?=$id?>';
			console.log(user_id);
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					dateFrom: dateFrom, 
					dateTo: dateTo,
					user_id: user_id
				},
				
				success: function(result) {
					console.log(result);
					var json = JSON.parse(result);
					var x = 0;
					$("#table1").html("");
					$("#table2").html("");
					console.log(json.length);
					var balance = 0;
					if (json.length > 0) {
						for (var i=0; i < json.length; i++) {
							if (json[i].result != 'empty') { 
									var debit = '';
									var kredit = '';
									
									var type = '';
									var amount = parseFloat(parseFloat(json[i].amount).toFixed(2));
									console.log(typeof(amount));
									if (json[i].amount_type == 'dt') {
										debit = amount.toFixed(2);
										kredit = '';
										balance += amount;
										type = 'Debit';
									} else {
										debit = '';
										kredit = amount.toFixed(2);
										balance -= amount;
										type = 'Credit';
									}
									console.log(balance);
									var fixedBal = parseFloat(balance).toFixed(2);
									var tr = $("<tr>").html('<td class="hidden-xs" width="20%">'+json[i].created_date+'</td><td class="hidden-xs" width="30%">'+json[i].description+'</td><td class="hidden-xs" width="15%">'+debit+'</td><td class="hidden-xs" width="15%">'+kredit+'</td><td class="hidden-xs" width="20%">'+fixedBal+'</td></td>');
									
									var tr2 = $("<tr>").html('<td class="text-center">Date/Time : '+json[i].created_date+'</br>'+json[i].description+'</br><span style="color:#00a9b0">'+json[i].amount+'('+type+')</span><br>Balance (RM) : '+fixedBal+'</td><td class="text-center"></td>');
									
									$("#table1").append(tr);
									$("#table2").append(tr2);
								
					
								
							} else {
								var tr = $("<tr>").html('<td colspan=\'7\'>No Record Found.</td>');
								
								var tr2 = $("<tr2>").html('<td colspan=\'4\'>No Record Found.</td>')
								$("#table1").append(tr);
								
								$("#table2").append(tr2);
								
							}
						}
						
					} else {
						
							var tr = $("<tr>").html('<tr><td colspan=\'7\'>No Record Found.</td></tr>');
							var tr2 = $("<tr2>").html('<td colspan=\'4\'>No Record Found.</td>')
							$("#table1").append(tr);
							$("#table2").append(tr2);
						}	
				}
			});
			}
	function StatementCategory(key){
	if(key == ''){
		key = $('#SSSelect').val();
	}
	var url = QueryString(window.location.href);
	var ss = key;
	var qs = "";
	for(p in url.qs){
		if(p != "sc" && p != "ss" && p != "sf" && p != "lpg"){
			if(qs.length > 0) qs += "&";
			qs += p + "=" + url.qs[p]
		}
	}
	window.location.href = url.link + "?" + qs + (ss.length > 0 ? "&ss=" + ss : "");
}

function resultLimit(limit){
	var url = QueryString(window.location.href);
	var rl = limit;
	var qs = "";
	for(p in url.qs){
		if(p != "lpg"&& p != "rl"){
			if(qs.length > 0) qs += "&";
			qs += p + "=" + url.qs[p]
		}
	}
	window.location.href = url.link + "?" + qs + (rl.length > 0 ? "&rl=" + rl : "");
}


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


</script>

</div>

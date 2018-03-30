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
	          	<input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" value="2018-03-01" name="dateFrom" value="" id="dateFrom" size="16">
			  	<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span> </div>
            </div>
			</div>
          </div>
        <div class="col-md-5 col-sm-5 col-xs-12 padding-left-off" style="padding-bottom:5px;">
          <div class="form-group">
            <div class="input-group date">
              <div class="input-group-addon" style="min-width: 60px;">To </div>
              <div class="has-feedback">
                <input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" value="2018-03-30" name="dateTo" value="" id="dateTo" size="16">
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span> </div>
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
		<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;"> <a class="btn btn-default" onclick="downloadMonthly()" style="min-width: 220px;"><i class="epi-download"></i> Download Invoice</a> </div>



		</div>
        <form method="post">
			<table id="myTable" class="table table-striped">

				<thead style="border:none;">
					<tr class="ep-header-color">
					<th width="12%" class="text-center hidden-xs">Date/Time</th>
					<th width="40%" class="hidden-xs">Package Description</th>
					<th width="20%" class="text-center hidden-xs">Promotion Period</th>


					<th width="16%" class="text-center hidden-xs">Transaction No</th>
					<th width="12%" class="text-center hidden-xs">Amount</th>
					<th class="hidden-xs"></th>
					</tr>
				</thead>
				<tbody class="hidden-xs">
					<tr><td colspan='4'>No Record Found.</td></tr>
					
				</tbody>
			</table>
			<table class="visible-xs table mobile_table table-striped" width="100%;">
				<th class="text-center">Topup History Summary</th>
				<th></th>
				<tr><td colspan='4'>No Record Found.</td></tr>
				
			</table>
        </form>
		<div class="row">
			<div class="form-inline visible-xs text-center"> Listing :
				<select class="list_option" id="resultLimit" name="resultLimit" onchange="resultLimit(this.value)">
					<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
				</select>
			</div>

		</div>
		<div class="row">
		<div class="dashboard-pagination">
          <ul class="pagination">
            
          </ul>
        </div>
        <div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;"> Listing Per Page :
            <select class="form-control" id="resultLimit" name="resultLimit" onchange="resultLimit(this.value)">   
			<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
          </select>
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
	message = "";
	var url = window.location.href;
	url = url.replace("#TopUpHistory", "");
	url = QueryString(url);
	var from = ($("[name=dateFrom]").val().trim());
	var to = ($("[name=dateTo]").val().trim());
	if(from!="" && to!=""){
		var qs = "";
		for(p in url.qs){
			if((p != "from" && p != "hpg")&&(p != "to" && p != "hpg")){
				if(qs.length > 0) qs += "&";
				qs += p + "=" + url.qs[p]
			};
		}
		window.location.href = url.link + "?" + qs + (from.length > 0 ? "&from=" + from : "")+ (to.length > 0 ? "&to=" + to : "");	
	}else{
		CheckNull($("[name=dateFrom]"),$("[name=dateTo]"));
		swal({
			title: 'Please Select Date Range',
			type: 'error',
			html: "Please select both 'From' and 'To' date to search topup invoice.",
			confirmButtonColor: '#4e97d8'
			})
	}
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
 <div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
    <div class="row credits-available hidden-xs">
      <h4><i class="epi-money173" style="font-size:48px; vertical-align: middle;"></i> My credits : RM 25.00
        <div class="btn-group pull-right" style="margin-top: 10px;"> <a href="./?pg=MyAccount&amp;tab=Profile&amp;do=Topup" class="btn btn-topup"><i class="epi-up-circled"></i> Top Up</a> </div>
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
					<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12 padding-left-off" style="padding-bottom:5px;">
          <div class="form-group">
            <div class="input-group date">
              <div class="input-group-addon" style="min-width: 60px;">To </div>
              <div class="has-feedback">
                <input data-date-format="yyyy-mm-dd" readonly type="text" class="form-control" name="toDate" value="" id="toDate" size="16">
						<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span> </div>
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
         
        <div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;"> Listing Per Page :
			<select class="form-control" name="resultLimit" onchange="resultLimit(this.value)">        
				<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
			</select>
        </div>
        <div class="visible-xs">&nbsp;</div>
        <table id="myTable" class="table table-striped hidden-xs">
          <thead>
            <tr>
              <th class="hidden-xs text-center" width="20%">Date/Time</th>
              <th class="hidden-xs text-center" width="20%">Description</th>
              <th class="hidden-xs text-center" width="15%">Credit </th>
              <th class="hidden-xs text-center" width="15%">Debit</th>
              <th class="hidden-xs text-center" width="20%">Balance</th>
              <th class="hidden-xs text-center" width="10%">Statement</th>
              <th class="visible-xs" width="60%">Statement Summary</th>
	      <th class="visible-xs" width="35%">Balance (RM)</th>
			  <th class="visible-xs" width="5%"></th>
            </tr>
          </thead>
          <tbody>
			
            
            <tr>
              <td class="hidden-xs text-center">2017-10-31<br />16:24:57</td>
              <td class="hidden-xs text-center">
			  
			  Early Bird Registration (RM 25.00)
			   
			  </td>
              <td class="hidden-xs text-center">25.00</td>
              <td class="hidden-xs text-center">0.00</td>
              <td class="hidden-xs text-center">25.00</td>
			  <td class="hidden-xs text-center">
			   
			  <td class="visible-xs">Date/Time : 2017-10-31 16:24:57</br> Early Bird Registration (RM 25.00)</br><label style="color:#ff6699">Credit : 25.00 <br>Debit : 0.00</label></td>
              <td class="visible-xs">
                Balance : 25.00 </td>
			  <td class="visible-xs text-center">
			   
			  </td>
            </tr>
            
          </tbody>
        </table>
		
		<table class="mobile_table table table-striped visible-xs">
			<thead>
				<tr>
				  <th width="95%">Statement Summary</th>
				  <th width="5%"></th>
				</tr>
			  </thead>
			  <tbody>
				  
				
				<tr>
					<td>Date/Time : 2017-10-31 16:24:57</br> Early Bird Registration (RM 25.00)</br><span style="color:#ff6699">Credit : 25.00 <br>Debit : 0.00</span><br>Balance (RM) : 25.00</td>
					<td class="text-center">
					 
					</td>
				</tr>
				
			  </tbody>
		</table>
		<div class="row"> 
			<div class="form-inline text-center visible-xs"> Listing Per Page :
			  <select class="list_option" name="resultLimit" onchange="resultLimit(this.value)">
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
          <select class="form-control" name="resultLimit" onchange="resultLimit(this.value)">
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

function searchByDate(){
	message = "";
	var url = QueryString(window.location.href);
	if($("[name=fromDate]").val().trim() != "" && $("[name=toDate]").val().trim() != ""){
		sc = 'From-'+($("[name=fromDate]").val().trim())+'To-'+($("[name=toDate]").val().trim());
	}else{
		message+="Please Select The From & To Date.";
	}
	
	if(message != ""){
		CheckNull($("[name=fromDate]"),$("[name=toDate]"));
		swal({
			title: 'Oops',
			type: 'error',
			html: '' + message,
			confirmButtonColor: '#4e97d8'
			})
		return false;
	}else{
		var qs = "";
		for(p in url.qs){
			if(p != "sc" && p != "lpg"){
				if(qs.length > 0) qs += "&";
				qs += p + "=" + url.qs[p]
			}
		}
		window.location.href = url.link + "?" + qs + (sc.length > 0 ? "&sc=" + sc : "");
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

$(function(){
	$( "#fromDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
    $( "#toDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
});
</script>

</div>

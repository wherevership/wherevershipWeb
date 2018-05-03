 <script>
	$('#MyOrders').collapse();
	$("ul[data-target='#MyOrders']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Partialpaid_Order_Invoices").addClass('active selected');

</script>
 <div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
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
  
  <h2 class="dashboard-title">Partially Paid Order & Invoices
    
  </h2>
  
   
</div>
</div>
<div class="clearfix"> 
  
  <div class="well col-xs-12 col-sm-8" onkeypress="return checkEnter(event)">
    <div class="hidden-xs">
      <div class="col-xs-3 padding-left-off">
        <select class="form-control" id="category" name="category" onchange="changeCategory()">    
			<option class='hidden-xs' value='1' >Order Date</option><option value='0' >Order No</option>
        </select>
      </div>
      <div id="searchfield_normal" class="input-group col-xs-9" >
		<div class="has-feedback">
        	<input class="form-control" type="text" name="search" placeholder="Order No"/>
			<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
		</div>

        <span class="input-group-btn">
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
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
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
        </span> </div>
    </div>
    <div class="visible-xs">
      <select class="form-control col-xs-12" id="category" name="category" onchange="changeCategory()">
		<option value='0' >Order No</option>
      </select>
      <div class="input-group col-xs-12">
        <input class="form-control" type="text" name="search2" placeholder="Order No"/>
        <span class="input-group-btn ">
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
        </span> </div>
    </div>
  </div>
   
  
  <div class="well col-xs-12 col-sm-4">
	<select class="form-control" id="OSSelect" name="OSSelect" onchange="orderlist.statussort('')">
		<option value=''>Filter By Status</option><option value='1' >Unpaid (0)</option><option value='2' >Paid (0)</option><option value='3' Selected>Partially Paid (0)</option>
	</select>
  </div>
   
  <!-- /input-group --> 
  <!-- /.col-lg-6 --> 
  <div class="visible-xs">&nbsp;</div>
<div class="container-fluid">
<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;">
    <select class="form-control dashboard-bulk-action" id="bulkAction" name="bulkAction" style="width: 150px;">
		<option value='UsageStatement' selected>Usage Statement</option>
    </select>
    <button onclick='performBulkAction(bulkAction.value)' class="btn btn-default">Apply</button>
  </div>

<div class="pull-right hidden-xs">
  <ul class="pagination">
    
  </ul>
</div>


<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;"> Listing Per Page :
  <select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
	<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
  </select>
</div>
<table id="myTable" class="table table-striped" width="100%">
  <thead>
    <tr>
      <th width="5%" class="hidden-xs"><input type='checkbox' name='checkAllOrderOrder' id='checkAllOrder' onclick="checkAllOrderBox()"></th>
      <th width="15%">Order No</th>
      <th class="hidden-xs" width="26%">Order Date</th>
      <th class="hidden-xs" width="26%">Status</th>
      <th class="hidden-xs" style="text-align:right" width="15%">Total (RM)</th>
      <th class="visible-xs" width="67%">Order Summary</th>
      <th width="18%"></th>
    </tr>
  </thead>
  <tbody id="table1">
    
  <tr><td colspan='7'>No Record Found.</td></tr>
    </tbody>
  
</table>
<div class="form-inline pull-left" style="margin: 20px 0px;">
    <select class="form-control dashboard-bulk-action" id="bulkAction2" name="bulkAction2" onchange="" style="width: 150px;">
		<option value='UsageStatement' selected>Usage Statement</option>
    </select>
    <button onclick='performBulkAction(bulkAction2.value)' class="btn btn-default">Apply</button>
  </div>
  <div class="form-inline visible-xs pull-right"> Listing :
   <select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
	<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
   </select>
  </div>

<div class="dashboard-pagination">
  <ul class="pagination">
    
  </ul>
</div>

<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;"> Listing Per Page :
  <select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
	<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
  </select>
</div>
<div class="clearfix"></div>
<ol class="breadcrumb" style="font-size:11px; vertical-align:middle;">
  <li><img src="https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png" style="vertical-align:middle;" /> Detail</li>
  <li><i class="epi-download" style="font-size: 14px;color: #B4B4B4;"></i> Download Statement</li>
</ol>
</div>
<div id="dialog"></div>
<script>
firebase.auth().onAuthStateChanged( firebaseUser => {
	if(firebaseUser) {
					
					const userDatebase = firebase.database().ref('User/' + firebaseUser.uid);
					
					userDatebase.on('value', snap => {
						
						$("#welcome").text("Hi " + snap.val().firstName + " " + snap.val().lastName);
						
					
					
					if (snap.hasChild('order')) {
					const userShipDatebase = firebase.database().ref('User/' + firebaseUser.uid + '/order');
					userShipDatebase.once('value', snap=> {
							var object1 = snap.val();
							var keys = Object.keys(object1);
							
								
								for (var i=0; i<keys.length; i++) {
										var k= keys[i];
										if (object1[k] == "paid") {
										const shipmentdata = firebase.database().ref('Order/' + k);
										$("#table1").empty();
										shipmentdata.once('value', snap=>{
											
											var object2 = snap.val();
											var shipKey = snap.key;
											
											var tr = $("<tr>").html('<td width="2%"><input type=\'checkbox\' name=\'checkall\' id=\'checkall\' onclick="AwbCheckAll()"></td><td width="15%" class="hidden-xs">'+shipKey+'</td><td width="26%" class="hidden-xs">'+object2.orderDate+'</td><td width="26%" class="hidden-xs">'+object2.status+'</td><td width="20%" class="hidden-xs">'+object2.totalPrice.toFixed(2)+'</td><td width="6%" class="hidden-xs"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></td>');
											$("#table1").append(tr);
												
												
											
											
											
											
										});
										}
									
								}
					
					}); 	
					} else {
						$("#table1").empty();
						var tr= $("<tr>").html('<td colspan=\'9\'>No Record Found.</td>');
						$("#table1").append(tr);
					}
					
					});
					$(".login_top").hide();
					$(".signUp_top").hide();
					$(".logout_top").show();
					$("#welcome").attr("href","<?=base_url("member/user_panel")?>");
					$("#log_in_f").text("LogOut").attr("href","javascript:logout()");
					$("#log_in_mobile").attr("href","<?=base_url("member/user_panel")?>");
					$("#dashboard_f").attr("href","<?=base_url("member/user_panel")?>");
					$("#edit_profile_f").attr("href","<?=base_url("member/personal_profile")?>");
					$("#my_cart_f").attr("href","<?=base_url("member/actions_required")?>");
				} else {
					$(".login_top").show();
					$(".signUp_top").show();
					$(".logout_top").hide();
					$("#welcome").text("Hi, Welcome");
					$("#welcome").attr("href","<?=base_url("userLogin")?>");
					$("#log_in_mobile").attr("href","<?=base_url("userLogin")?>");
					$("#log_in_f").text("LogIn").attr("href","<?=base_url("userLogin")?>");
					$("#dashboard_f").attr("href","<?=base_url("userLogin")?>");
					$("#edit_profile_f").attr("href","<?=base_url("userLogin")?>");
					$("#my_cart_f").attr("href","<?=base_url("userLogin")?>");
					console.log('not logged in');
				}
				});
<!-- checkbox usage START-->
var lastChecked = null;
    
$(document).ready(function() {
	var $checkbox = $('input[name=checkUsagedownload]');
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

var orderlist = {
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
	
	search : function(){
		var message = "";
		var url = QueryString(window.location.href);
		var sc = $("[name=search]").val();
		if(sc == ""){
			sc = ($("[name=search2]").val().trim());
		}
		var sf = ($("[name=category]").val().trim());
		if (sf == '1'){
			if($("[name=dateFrom]").val().trim() != "" && $("[name=dateTo]").val().trim() != ""){
				sc = 'From-'+($("[name=dateFrom]").val().trim())+'To-'+($("[name=dateTo]").val().trim());
			}else{
				message+="Please Select The From & To Date.";
				CheckNull($("[name=dateFrom]"),$("[name=dateTo]"),"0");
				sc = "fail";
			}
		}
		
		if(sc == ""){
			message+="No Search Key Is Inserted.</br>";
			CheckNull("0","0",$("[name=search]"));
		}
		
		if(message != ""){
			swal({
				title: 'Oops',
				type: 'error',
				html: '' + message,
				confirmButtonColor: '#4e97d8'
				})
			return false;
		}else{
			clearClass();
			var qs = "";
			for(p in url.qs){
				if(p != "sc" && p != "sf" && p != "os" && p != "lpg"){
					if(qs.length > 0) qs += "&";
					qs += p + "=" + url.qs[p]
				};
			}
			window.location.href = url.link + "?" + qs + (sc.length > 0 ? "&sc=" + sc : "")+ (sf.length > 0 ? "&sf=" + sf : "");
		}
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
	var checkboxes = document.getElementsByName('checkUsagedownload');
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
		var checkboxes = document.getElementsByName('checkUsagedownload');
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
	if(sf == 1){
		$('#searchfield_normal').attr('style','display: none');
		$('#searchfield_calendar').attr('style','display: ""');
	}else{
		$('#searchfield_normal').attr('style','display: ""');
		$('#searchfield_calendar').attr('style','display: none');
	}
}

function UsageStatement(){
	var checkboxes = document.getElementsByName('checkUsagedownload');
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
			html: 'Please select the order invoices which you would like to download.',
			confirmButtonColor: '#4e97d8'
			})
	}else{
		window.open("?ac=UsageStatement&id="+id);
	}
}

$(function(){
	$( "#fromDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
    $( "#toDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
	changeCategory();
});

function checkEnter(e) {
    if(e.keyCode == 13) {
		orderlist.search();
    }
}

function performBulkAction(value){
	switch(value){
		case "UsageStatement" : UsageStatement(); break;
		default : alert("Please select a valid action."); break;
	}
}
</script>
 </div>
  </div>
  </div>
</div>

</div>
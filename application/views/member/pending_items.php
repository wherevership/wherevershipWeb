 <script>
	$('#MyBookings').collapse();
	$("ul[data-target='#MyBookings']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Pending_Bookings").addClass('active selected');

</script>
<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
<style>
.profile-bg {
	padding: 20px;
    border-width: 1px;
    border-color: #ddd;
    border-style: solid;
    background: #eee;
}

.profile-bg.bindCard {
	background-color: #B3003C;
}

.bindCard p, .bindCard_successful p {
	margin: 0px; color:#fff;
}

.profile-bg.bindCard_successful {
	background-color: #666;
}
</style>

<script>
function bindcardnow()
{
document.getElementById("instantpay").submit();
}
</script>
<div class="profile-bg bindCard">
	<form name="ePayment" id='instantpay' method="post" action="https://www.mobile88.com/ePayment/entry.asp">
		<input type="hidden" name="MerchantCode" value="M02625_S0001">
		<input type="hidden" name="PaymentId" value="55">
		<input type="hidden" id="RefNo" name="RefNo" value="BEP0000188473">
		<input type="hidden" name="Amount" value="1.00">
		<input type="hidden" name="Currency" value="MYR">
		<input type="hidden" id="ProdDesc" name="ProdDesc" value="Credit Card Registration">
		<input type="hidden" name="UserName" value="Loh Chin Guan">
		<input type="hidden" name="UserEmail" value="lcg1989@hk3.com.my">
		<input type="hidden" name="UserContact" value="177754956">
		<input type="hidden" name="Lang" value="UTF-8">
		<input type="hidden" id="Signature" name="Signature" value="T5fNtKLSZokRyAm6SLE1eiWukEM=">
		<input type="hidden" name="ResponseURL" value="https://secure.easyparcel.my/pass/?pg=ReturnUrl&type=bcn">
		<input type="hidden" name="ActionType" value="BT">
		<input type="hidden" name="TokenId" value="">
		<p><i class="epi-credit-card"></i> &nbsp;  Register Your Credit Card And Start Shipping Internationally<a href="#" class="btn btn-default btn-xs pull-right" onclick='bindcardnow()'>Register Now</a> <span class="pull-right" data-toggle="tooltip" data-original-title="Registration is free. The RM1 registration fee will be credited back to your EasyParcel account in 24 hours."><i class="epi-info-circled"></i></span></p>
	</form>
</div>          		

       
	<div class="container-fluid dashoboard-account">
		<div class="row space-small">

  
	<!--TOP CONTROL BUTTON START-->
	<div class="row">
		<h2 class="dashboard-title">My Cart</h2>
		<button class="btn btn-success btn-sm topButton pull-right hidden-xs" data-placement="bottom" onclick="PayMultiBooking('');" title="Check Out Now">
			<span class="glyphicon glyphicon-shopping-cart "></span> Check Out 
		</button>
		<button class="btn btn-primary btn-sm topButton pull-right hidden-xs" data-placement="bottom" onclick="window.location='./?pg=Quote';" title="Create New Parcel">
			<span class="glyphicon glyphicon-plus"></span> New Parcel
		</button>
		<button class="btn btn-danger btn-sm topButton pull-right deleteAll hidden-xs" data-placement="bottom" onclick="DeleteMultiBooking();" title="You may also delete all bookings under this tab and make a new order. No charges applied on cancellation.">
			<span class="glyphicon glyphicon-trash"></span> Delete
		</button>
		<button class="btn btn-warning btn-sm topButton pull-right hidden-xs" data-placement="bottom" onclick="DuplicateMultiBooking('');" title="Duplicate"> 
			<span class="epi-doc-text-inv"></span> Duplicate
		</button>
        <div class="clearfix"></div>
		<div class="visible-xs" style="padding-bottom:5px">
		<div class="row">
		<button class="btn btn-warning topButton col-xs-2" data-placement="bottom" onclick="DuplicateMultiBookings('');" title="Duplicate"> 
			<span class="epi-doc-text-inv"></span> 
		</button>
		<button class="btn btn-danger topButton deleteAll col-xs-2" data-placement="bottom" onclick="DeleteMultiBookings();" title="You may also delete all bookings under this tab and make a new order. No charges applied on cancellation.">
			<span class="glyphicon glyphicon-trash"></span>
		</button>
		<button class="btn btn-primary topButton col-xs-2" style="padding:3px;" data-placement="bottom"  onclick="window.location='./?pg=Quote';" title="Create New Parcel">
			<span class="glyphicon glyphicon-plus"></span> New
		</button>
		<button class="btn btn-success topButton col-xs-2" data-placement="bottom" onclick="PayMultiBookings('');" title="Check Out Now">
			<span class="glyphicon glyphicon-shopping-cart "></span>
		</button>
		</div>
		</div>
	</div><!-- close Line 260 row -->
	<br>
	
	<!--TOP CONTROL BUTTON END-->
	<div class="row ep-nav-tab">
		<ul class="nav ep-tab" >
			<li class="" id="active">
				<i class="epi-th-list hidden-xs hidden-sm"></i>
				<strong>Pending</strong>
				<span class="badge">0</span>
			</li>
			
			<li class="selected pull-right hidden-xs" id="total">
				<i class="epi-ok-1 hidden-xs hidden-sm"></i>
				<span class="parcels"><strong></strong></span>
				<span class="badge"></span>
			</li>
		</ul>
		<!--HELLO-->
		<div class="ep-cont" id="active_part">
			
			
			<div class="well smallmargin" id="mainTemp_active" >
			<div class="row"> 
				<div class='alert alert-warning'><strong>Sorry..</strong> We cannot find any pending booking details placed under this account..</div>
			</div>
			</div>
			
			</div> <!-- CLOSE ep-cont ACTIVE-->
			
		</div>	
	</div>

</div>
</div>
</div>
</div>

</div>
<div id="dialog"></div>

<div id="paymentDialog"></div>
<script>
<!-- checkbox usage START-->
var lastChecked = null;
checkTotalCheckboxPrice();
$(document).ready(function() {
	var $checkbox = $('input[name=checkbookingactive]');
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

var lastChecked = null;
    
$(document).ready(function() {
	var $checkbox = $('input[name=checkbookingexpired]');
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

<!-- Handle collapse START -->
$('input[name=collapse_booksummary_active]').click(function(){
	var target = $('input[name=collapse_booksummary_active]:checked').parent().parent().parent().attr('id');
	if(target == 'active_collapse'){var a = 'activelist';}else{var a = 'expiredlist';}
	if($('#'+a+' input[name=collapse_booksummary_active]:checked').val() == 1){$('#'+a+' .collapse').collapse('show');}else{$('#'+a+' .collapse').collapse('hide');}
});
$('input[name=collapse_booksummary_expired]').click(function(){
	var target = $('input[name=collapse_booksummary_expired]:checked').parent().parent().parent().attr('id');
	if(target == 'active_collapse'){var a = 'activelist';}else{var a = 'expiredlist';}

	if($('#'+a+' input[name=collapse_booksummary_expired]:checked').val() == 1){$('#'+a+' .collapse').collapse('show');}else{$('#'+a+' .collapse').collapse('hide');}
});
<!-- Handle collapse END -->


function show(id){
	if(id=="active"){
		checkTotalCheckboxPrice();
		document.getElementById("active").className= "active";
		document.getElementById("expired").className="";
		if(document.getElementById("expiredlist")!=null){
			document.getElementById("expiredlist").className="hide";
		}
		if(document.getElementById("activelist")!=null){
			document.getElementById("activelist").className="";
		}
		elementCount = document.all("mainTemp_expired").length;
		if(elementCount===undefined){	
			document.getElementById("mainTemp_expired").className="well smallmargin hide";
			document.getElementById("expired_part").className="ep-cont hide";
		}else{
			document.getElementById("mainTemp_expired").className="well smallmargin hide";
			document.getElementById("expired_part").className="ep-cont hide";
			for(i=0; i<elementCount; i++) {
				document.all("mainTemp_expired",i).className="well smallmargin hide";
			}
		}

		elementCount2 = document.all("mainTemp_active").length;
		if(elementCount2===undefined){	
			document.getElementById("mainTemp_active").className="well smallmargin";
			document.getElementById("active_part").className="ep-cont";
		}else{
			document.getElementById("mainTemp_active").className="well smallmargin";
			document.getElementById("active_part").className="ep-cont";
			for(i=0; i<elementCount2; i++) {
				document.all("mainTemp_active",i).className="well smallmargin";
			}
		}
	}else{
		$('li#total').hide();
		document.getElementById("active").className= "";
		document.getElementById("expired").className="active";
		if(document.getElementById("activelist")!=null){
			document.getElementById("activelist").className="hide";
		}
		if(document.getElementById("expiredlist")!=null){
			document.getElementById("expiredlist").className=" ";
		}
		elementCount2 = document.all("mainTemp_active").length;
		if(elementCount2===undefined){	
			document.getElementById("mainTemp_active").className="well smallmargin hide";
			document.getElementById("active_part").className="ep-cont hide";
		}else{
			document.getElementById("mainTemp_active").className="well smallmargin hide";
			document.getElementById("active_part").className="ep-cont hide";
			for (i=0; i<elementCount2; i++) {
    			document.all("mainTemp_active",i).className="well smallmargin hide";
			}	
		}	
		elementCount = document.all("mainTemp_expired").length;
		if(elementCount===undefined){	
			document.getElementById("mainTemp_expired").className="well smallmargin";
			document.getElementById("expired_part").className="ep-cont";
		}else{
			document.getElementById("mainTemp_expired").className="well smallmargin";
			document.getElementById("expired_part").className="ep-cont";
			for (i=0; i<elementCount; i++){
				document.all("mainTemp_expired",i).className="well smallmargin";
			}
		}
	}
}

function EditBooking(bid){
	window.location.href="./?pg=Quote&bid="+bid;
}

function checkallornotactive(){
	var checkboxes = document.getElementsByName('checkbookingactive');
	if(document.getElementById('checkbookingallactive').checked){
		//for(var i = 0; i < checkboxes.length; i++){
		if(0 > 100){
			var count = 100;
		}else{
			var count = 0;
		}
		for(var i = 0; i < count; i++){
			if(checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = true;
			}
		}
		if(0 > 100){
			swal({
				title: 'Max order per check out: 100',
				type: 'info',
				html: 'Hi, for faster loading speed, we have automatically selected 100/' +0+ ' orders for check out. You may check out for the remaining orders after this payment completes. Thank you!',
				confirmButtonColor: '#4e97d8'
				})
		}
	}else{
		for (var i = 0; i < checkboxes.length; i++){
			if (checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = false;
			}
		}
	}
	checkTotalCheckboxPrice();
}

function checkallornotactives(){
	var checkboxes = document.getElementsByName('checkbookingactives');
		if(document.getElementById('checkbookingallactives').checked){
		//for(var i = 0; i < checkboxes.length; i++){
		if(0 > 100){
			var count = 100;
		}else{
			var count = 0;
		}
		for(var i = 0; i < count; i++){
			if(checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = true;
			}
		}
		if(0 > 100){
			swal({
				title: 'Max order per check out: 100',
				type: 'info',
				html: 'Hi, for faster loading speed, we have automatically selected 100/' +0+ ' orders for check out. You may check out for the remaining orders after this payment completes. Thank you!',
				confirmButtonColor: '#4e97d8'
				})
		}
	}else{
		for (var i = 0; i < checkboxes.length; i++) {
			if (checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = false;
			}
		}
	}
}

function checknowactive(id){
	if(document.getElementById('checkbookingallactive').checked){
		document.getElementById('checkbookingallactive').checked=false;
	}else{
		var checkboxes = document.getElementsByName('checkbookingactive');
		var allchecked=0;
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				if(checkboxes[i].checked == false)
				{
					allchecked=1;
				}
			}
 		}

		if(allchecked==0)
		{
			document.getElementById('checkbookingallactive').checked=true;
		}
	}
}

function checknowactives(id){
	if(document.getElementById('checkbookingallactives').checked){
		document.getElementById('checkbookingallactives').checked=false;
	}else{
		var checkboxes = document.getElementsByName('checkbookingactives');
		var allchecked=0;
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				if(checkboxes[i].checked == false){
					allchecked=1;
				}
			}
 		}
		if(allchecked==0){
			document.getElementById('checkbookingallactives').checked=true;
		}
	}
}

function checkallornotexpired(){
	var checkboxes = document.getElementsByName('checkbookingexpired');
	if(document.getElementById('checkbookingallexpired').checked){
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = true;
			}
		}
	}else{
		for (var i = 0; i < checkboxes.length; i++) {
			if (checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = false;
			}
		}
	}
}

function checkallornotexpireds(){
	var checkboxes = document.getElementsByName('checkbookingexpireds');
	if(document.getElementById('checkbookingallexpireds').checked){
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = true;
			}
		}
	}else{
		for (var i = 0; i < checkboxes.length; i++) {
			if (checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = false;
			}
		}
	}
}

function checknowexpired(id){
	if(document.getElementById('checkbookingallexpired').checked){
		document.getElementById('checkbookingallexpired').checked=false;
	}else{
		var checkboxes = document.getElementsByName('checkbookingexpired');
		var allchecked=0;
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				if(checkboxes[i].checked == false){
					allchecked=1;
				}
			}
 		}

		if(allchecked==0){
			document.getElementById('checkbookingallexpired').checked=true;
		}
	}
}

function checknowexpireds(id){
	if(document.getElementById('checkbookingallexpireds').checked){
		document.getElementById('checkbookingallexpireds').checked=false;
	}else{
		var checkboxes = document.getElementsByName('checkbookingexpireds');
		var allchecked=0;
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				if(checkboxes[i].checked == false){
					allchecked=1;
				}
			}
 		}
		if(allchecked==0){
			document.getElementById('checkbookingallexpireds').checked=true;
		}
	}
}

function progressBarUpdate(progresval){
	$("#popupbox .modal-body").html("Please hold on, we are processing your order and invoice <br/><br><div class='progress'><div class='progress-bar progress-bar-striped' role='progressbar' aria-valuenow="+progresval+" aria-valuemin='0' aria-valuemax='100' style='width:"+progresval+"%'>"+progresval+"%</div>");
	if(progresval<100){
		setTimeout(function(){progressBarUpdate(progresval+10)}, 1000);
	}
}

function DuplicateBooking(id){
	var type = "post",
		url = "./?ac=doDuplicateNow",
		data = {
			bookid: id
		},
	callback = function(result){
		if(result.substr(0,4)  == "pass"){
			window.location.reload();
		}else{
			swal({
				title: 'Oops',
				type: 'error',
				html: '' + result,
				confirmButtonColor: '#4e97d8'
				})
			//document.getElementById('dialog').innerHTML=result;
		}
	};
	General.loadAjax(type,url,data,callback);		
}

function DuplicateMultiBooking(){
	if(document.getElementById("active").className=="active"){	
		checkboxname="checkbookingactive";
		label="Active";
		if(($("[name="+checkboxname+"]:checked").length)>0){
			swal({
				title: 'Duplicate Confirmation',
				text: "Are You Sure You Want To Duplicate ("+($("[name="+checkboxname+"]:checked").length)+") "+label+" Items?",
				type: 'warning',
				confirmButtonColor: '#4e97d8',
				showCancelButton: true
			}).then(function() {
				var chkbox = $("[name="+checkboxname+"]:checked");
				var bookId = [];
				for(i = 0; i < chkbox.length; i++){
					bookId.push($(chkbox[i]).val());
				}

				var 
					type = "post",
					url = "./?ac=doMultiDuplicateNow",
					data = {
						bookid: bookId
					},
						
					callback = function(result){
						if(result == "pass"){
							swal({
								title: 'Duplicate Successful',
								text: 'Successfully Duplicate The Booking(s).',
								type: 'success',
								confirmButtonColor: '#4e97d8'
							}).then(function() {
								window.location.reload();
							})
						}else{
							swal({
								title: 'Fail to duplicate.',
								type: 'error',
								html: '' + result,
								confirmButtonColor: '#4e97d8'
							})
						}
					};
				General.loadAjax(type,url,data,callback);	
			},function(dismiss) {
			    if (dismiss === 'cancel') {
			    } else {
				  throw dismiss;
			    }
			})
		}else{
			swal({
				title: 'Opps...',
				type: 'error',
				html: 'No Item Is Selected.',
				confirmButtonColor: '#4e97d8'
				})
		}
	}else{
		swal({
			title: 'Oops...',
			type: 'error',
			html: 'You may not duplicate Expired parcels.',
			confirmButtonColor: '#4e97d8'
			})
	}
	
}

function DuplicateMultiBookings() {
	if(document.getElementById("active").className=="active"){
		checkboxname="checkbookingactives";
		label="Active";
		if(($("[name="+checkboxname+"]:checked").length)>0){
			swal({
				title: 'Duplicate Confirmation',
				text: "Are You Sure You Want To Duplicate ("+($("[name="+checkboxname+"]:checked").length)+") "+label+" Items?",
				type: 'warning',
				confirmButtonColor: '#4e97d8',
				showCancelButton: true
			}).then(function() {
				var chkbox = $("[name="+checkboxname+"]:checked");
				var bookId = [];
				for(i = 0; i < chkbox.length; i++){
					bookId.push($(chkbox[i]).val());
				}
		
				var 
					type = "post",
					url = "./?ac=doMultiDuplicateNow",
					data = {
					  bookid: bookId
					},
						
					callback = function(result){
						if(result == "pass"){
							swal({
								title: 'Duplicate Successful',
								text: 'Successfully Duplicate The Booking(s).',
								type: 'success',
								confirmButtonColor: '#4e97d8'
							}).then(function() {
								window.location.reload();
							})
						}else{
							swal({
								title: 'Fail to duplicate.',
								type: 'error',
								html: '' + result,
								confirmButtonColor: '#4e97d8'
							})
						}
					};
				General.loadAjax(type,url,data,callback);
			}, function(dismiss) {
			    if (dismiss === 'cancel') { // you might also handle 'close' or 'timer' if you used those
					// ignore
				} else {
					throw dismiss;
				}
			})
		}else{
			swal({
				title: 'Opps...',
				type: 'error',
				html: 'No Item Is Selected.',
				confirmButtonColor: '#4e97d8'
			})
		}
	} else {
		swal({
			title: 'Oops...',
			type: 'error',
			html: 'You may not duplicate Expired parcels.',
			confirmButtonColor: '#4e97d8'
			})
	}
}

function PaySingleBooking(id){
	
		closeCoverBox(id);
	  
}

function PayMultiBooking(){
	var checkboxes = document.getElementsByName('checkbookingactive');
	id="";
	count=0;
	countcannot=0;
	if(document.getElementById("active").className=="active"){	
		for(var i = 0; i < checkboxes.length; i++){
   			if(checkboxes[i].checked == true){
				var myElem = document.getElementById('expired'+(checkboxes[i].id).substr(7));
				if (myElem == null){
					if(id!=""){
						id=id+","+(checkboxes[i].id).substr(7);
					}else{
						id=(checkboxes[i].id).substr(7);
					}
					count++;
				}else{
					countcannot++;
				}
			}
   		}
		if(count>0){
			if(count>100){
				swal({
				title: 'Oops!',
				type: 'warning',
				html: 'Kindly select maximum 100 orders at a time for faster processing. You may check out for the remaining orders after this payment completes. Thank you!',
				confirmButtonColor: '#4e97d8'
				})
			}else{
				
				    closeCoverBox(id);
				  	
			}
		}else{
			swal({
				title: 'Oops...',
				type: 'error',
				html: 'No Item Is Selected.',
				confirmButtonColor: '#4e97d8'
				})
		}
		
	}else{
		swal({
			title: 'Oops...',
			type: 'error',
			html: 'All the booking you have selected is expired, please edit them to choose new collection date to proceed.',
			confirmButtonColor: '#4e97d8'
			})
	}
}

function PayMultiBookings(){
	var checkboxes = document.getElementsByName('checkbookingactives');
	id="";
	count=0;
	countcannot=0;
	if(document.getElementById("active").className=="active"){
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].checked == true){
				var myElem = document.getElementById('expired'+(checkboxes[i].id).substr(7));
				if (myElem == null){
					if(id!=""){
						id=id+","+(checkboxes[i].id).substr(7);
					}else{
						id=(checkboxes[i].id).substr(7);
					}
					count++;
				}else{
					countcannot++;
				}
			}
		}
		if(count>0){
			if(count>100){
				swal({
				title: 'Oops!',
				type: 'warning',
				html: 'Kindly select maximum 100 orders at a time for faster processing. You may check out for the remaining orders after this payment completes. Thank you!',
				confirmButtonColor: '#4e97d8'
				})
			}else{
				
					  closeCoverBox(id);
				  
			}
		} else {
			swal({
				title: 'Oops...',
				type: 'error',
				html: 'No Item Is Selected.',
				confirmButtonColor: '#4e97d8'
				})
		}
	}else{
		swal({
			title: 'Oops...',
			type: 'error',
			html: 'All the booking you have selected is expired, please edit them to choose new collection date to proceed.',
			confirmButtonColor: '#4e97d8'
			})
	}	
}

function paymentDialog(dialogheader,dialogmessage){
	var widthvalue = "auto";
	if(window.innerWidth > 400){
		widthvalue = window.innerWidth*0.8;
	}else{
		widthvalue = "auto";
	}
	
	$("#paymentDialog").html(dialogmessage).dialog({
		title: dialogheader,
		resizable: false,
		maxWidth: 500,
		width: widthvalue,
		modal: true,
		buttons: {
			"Cancel": function(){
				$(this).dialog( "close" );
			}
		}
	});
	if(window.innerHeight < 500){
		var y = document.getElementsByClassName("ui-dialog");
		var i;
		for (i = 0; i < y.length; i++){
			topValue = parseInt(y[i].style.top, 10) + 65 ;
			y[i].style.top = topValue + "px";
		}
	}
}

var isCheckOut=false;
function PayLoggedInBookingConfirm(id){
	swal({
		title: 'Order is processing',
		type: 'info',
		html: "<br><i class='epi-spin4 selector__glyph-inner animate-spin' style='font-size: 24px;'></i>",
		showConfirmButton: false,
		allowOutsideClick: false,
		allowEscapeKey: false,
		closeOnConfirm: false,  
		showLoaderOnConfirm: true
	})
	var type = "post",
		url = "./?ac=CheckOutv3",
		data = {
		bookid: id
		},
	callback = function(result){
		if(result.substr(0,4)  == "pass"){
			window.location.href="./?pg=Payment&id="+result.substr(4);
		}else{
			swal({
				title: 'Error',
				type: 'error',
				html: '' + result,
				confirmButtonColor: '#4e97d8'
				}).then(function() {
					window.location.reload();
				})
			//document.getElementById('dialog').innerHTML=result;
			$(".next").removeClass("disabled");
			$(".next").html("Confirm and Continue Now");
			isCheckOut = false;
		}
	};
	if(!isCheckOut){
		isCheckOut = true;
		General.loadAjax(type,url,data,callback);
	}			
}

function GuestBookingConfirm(id){
	$(".nextGuest").addClass("disabled");
	$(".nextGuest").html("<i class='epi-spin4 selector__glyph-inner animate-spin' style='font-size: 24px;'></i>");
	buttonInProcess("guest");
	billname=document.getElementById('nameverify2').value;
	email=document.getElementById('emailverify2').value;
	phone=document.getElementById('phoneverify2').value;
	if(billname.trim()=="" || email.trim()=="" || phone.trim()==""){
		CheckNull($("#nameverify2"),$("#emailverify2"),$("#phoneverify2"));
		CheckNull2($("#username2"),$("#password2"));
		swal({
			title: 'Error',
			type: 'error',
			html: 'Please provide the fullname for billing, a valid email address and a valid phone number which will be used for verification purpose.',
			confirmButtonColor: '#4e97d8'
			})
		$(".nextGuest").removeClass("disabled");
		$(".nextGuest").html("Continue as Guest");
		buttonNotInProcess();
		isCheckOut = false;
	}else if(ValidateEmail(email)===false){
		CheckNull($("#nameverify2"),$("#emailverify2"),$("#phoneverify2"));
		CheckNull2($("#username2"),$("#password2"));
		doFail($("#emailverify2"));
		swal({
			title: 'Error',
			type: 'error',
			html: 'The email address provided is not valid.',
			confirmButtonColor: '#4e97d8'
			})
		$(".nextGuest").removeClass("disabled");
		$(".nextGuest").html("Continue as Guest");
		buttonNotInProcess();
		isCheckOut = false;
	}else if(ValidatePhone(phone)===false){
		CheckNull($("#nameverify2"),$("#emailverify2"),$("#phoneverify2"));
		CheckNull2($("#username2"),$("#password2"));
		doFail($("#phoneverify2"));
		swal({
			title: 'Error',
			type: 'error',
			html: 'The mobile no provided is not valid.',
			confirmButtonColor: '#4e97d8'
			})
		$(".nextGuest").removeClass("disabled");
		$(".nextGuest").html("Continue as Guest");
		buttonNotInProcess();				
		isCheckOut = false;
	}else{
		CheckNull($("#nameverify2"),$("#emailverify2"),$("#phoneverify2"));
		CheckNull2($("#username2"),$("#password2"));
		progresval=10;
		progressBarUpdate(progresval);
		$("#popupbox .modal-footer").html('<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>');
		var type = "post",
			url = "./?ac=CheckOutAsGuest",
			data = {
			bookid: id,
			name:billname,
			email:email,
			phone:phone
			},
	
		callback = function(result){
			if(result.substr(0,4)  == "pass"){
				window.location.href="./?pg=Payment&id="+result.substr(4);
			}else{
				swal({
					title: 'Oops',
					type: 'error',
					html: '' + result,
					confirmButtonColor: '#4e97d8'
					})
				//document.getElementById('dialog').innerHTML=result;
				$(".nextGuest").removeClass("disabled");
				$(".nextGuest").html("Continue as Guest");
				buttonNotInProcess();
				isCheckOut = false;
			}
		};
		if(!isCheckOut){
			isCheckOut = true;
			General.loadAjax(type,url,data,callback);
		}	
	}
}

function checkEnter(e) {
    if (e.keyCode == 13) {
		loginandpay(id);
    }
}
function loginandpay(id){
	email=document.getElementById('username2').value;
	pwd=document.getElementById('password2').value;
	buttonInProcess("normal");
	/*if(document.getElementById('rememberme').checked){
		rememberme = email;
		var d = new Date();
		d.setTime(d.getTime() + (1825*24*60*60*1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = 'username = '+rememberme+ "; " + expires;
	}*/
	if(email=="" || pwd==""){
		CheckNull($("#username2"),$("#password2"));
		CheckNull2($("#nameverify2"),$("#emailverify2"),$("#phoneverify2"));
		swal({
			title: 'Error',
			type: 'error',
			html: 'Please provide valid email and password.',
			confirmButtonColor: '#4e97d8'
		})
		buttonNotInProcess();
	}else{
		//document.getElementById("logginginprogress2").style.display="inline";
		CheckNull($("#username2"),$("#password2"));
		CheckNull2($("#nameverify2"),$("#emailverify2"),$("#phoneverify2"));
		var type = "post",
			url = "./?ac=doUserLogin",
			data = {
			email: email,
			pwd:pwd
		},
		callback = function(result){
			if(result  == "pass"){
				//document.getElementById("logginginprogress2").style.display="none";
				PayLoggedInBookingConfirm(id);
				progresval=10;
				progressBarUpdate(progresval);
			}else{
				//document.getElementById("logginginprogress2").style.display="none";
				if(result == "fail"){
					loginMessage = "Sorry, invalid email or password. Please Try Again.";
				}
				swal({
					title: 'Oops',
					type: 'error',
					html: '' + loginMessage,
					confirmButtonColor: '#4e97d8'
					})
				//document.getElementById('dialog').innerHTML=result;
				buttonNotInProcess();
			}
		};
		General.loadAjax(type,url,data,callback);		
	}
}

function SignInFB(response,id){
	var email = response.email;
	if(email == "" || email == null || email===undefined){
		swal({
			title: 'Invalid Facebook Account',
			type: 'error',
			html: 'Please sign up manually.',
			confirmButtonColor: '#4e97d8'
			})
		return false;
	}

	var
	type = "post",
	url = "./?ac=doFBSignInOnly",
	data={
		email:response.email,
		fname:response.first_name,
		lname:response.last_name,
		fbid:response.id
	},	
	callback = function(result){
		if(result == "pass2"){
			//document.getElementById("logginginprogress").style.display="none";
			PayLoggedInBookingConfirm(id);
			progresval=10;
			progressBarUpdate(progresval);
		}
		else{
			swal({
				title: 'Oops',
				type: 'error',
				html: "There seems to be a problem and the system is not able to register you. Please try again. If there error persist please contact our cusstomer service for further assistance.\n Thank you for choosing us as your service partner. Have a nice day.",
				confirmButtonColor: '#4e97d8'
				})
		}
	};
	General.loadAjax(type,url,data,callback);
}

function FBloginnow(id){
	FB.getLoginStatus(function(response){
		if (response.status === 'connected'){
			FB.api('/me?fields=first_name, last_name, picture, email', function(response){
			SignInFB(response,id);
			},{scope:'email',  return_scopes: true});
		}else{
			FB.login(function(response) {
				if (response.authResponse){
					FB.api('/me?fields=first_name, last_name, picture, email', function(response) {
					console.log('Good to see you, ' + response.name + '.');
					SignInFB(response,id);
					},{scope:'email',  return_scopes: true});
				}else{
					//If user cancel or not fully authorize don't do anything
					//console.log('User cancelled login or did not fully authorize.');
				}
			}, {scope: 'email'});	
		}
	});
}


//Start of FB script

  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '327130994156139',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
	(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
function testAPI(){
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=first_name, last_name, picture, email', function(response) {
	console.log('Successful login for: ' + response.name + response.email);
	//document.getElementById('status').innerHTML = 'Welcome back , ' + response.name + '!';
	//SignInFB(response);
    });
}

$(document).ready(function(){
	
	if("active" == "active"){
		show("expired");
	}
	$("#emailverify2, #username2").bind("keydown", function (event) {
		// Disable Ctrl+C, Ctrl+V
		if((event.keyCode == 17)|| (event.keyCode == 67) && (event.keyCode == 17) || (event.keyCode == 86)) {
			event.preventDefault();
		}
	});
});

function DeleteSingleBooking(id){
	swal({
		title: 'Delete Confirmation',
		text: 'Are You Sure You Want To Delete This Booking?',
		type: 'warning',
		confirmButtonColor: '#4e97d8',
		showCancelButton: true
		}).then(function() {
			var type = "post",
					url = "./?ac=doDeleteBooking",
					data = {
						bookid: id
					},
				
				callback = function(result){
					if(result == "pass"){
						swal({
							title: 'Delete Successful',
							text: 'Successfully Deleted The Booking.',
							type: 'success',
							confirmButtonColor: '#4e97d8'
							}).then(function() {
								window.location.reload();
							})
					}else{
						swal({
							title: 'Delete Message',
							type: 'error',
							html: '' + result,
							confirmButtonColor: '#4e97d8'
							})
					}
				};
				General.loadAjax(type,url,data,callback);	
		}, function(dismiss) {
			if (dismiss === 'cancel') { // you might also handle 'close' or 'timer' if you used those
				// ignore
			} else {
			    throw dismiss;
			}
		});
	}
	function DeleteMultiBooking() {
	if(document.getElementById("active").className=="active"){	
		checkboxname="checkbookingactive";
		label="Active";
	}else{
		checkboxname="checkbookingexpired";
		label="Expired";
	}
	if(($("[name="+checkboxname+"]:checked").length)>0){
		swal({
			title: 'Delete Confirmation',
			text: "Are You Sure You Want To Delete ("+($("[name="+checkboxname+"]:checked").length)+") "+label+" Items?",
			type: 'warning',
			confirmButtonColor: '#4e97d8',
			showCancelButton: true
			}).then(function() {
				var chkbox = $("[name="+checkboxname+"]:checked");
					var bookId = [];
					for(i = 0; i < chkbox.length; i++){
						bookId.push($(chkbox[i]).val());
					}

					var 
						type = "post",
						url = "./?ac=doDeleteBooking",
						data = {
						bookid: bookId
						},
					
					callback = function(result){
						if(result == "pass"){
							swal({
								title: 'Delete Successful',
								text: 'Successfully Deleted The Booking.',
								type: 'success',
								confirmButtonColor: '#4e97d8'
								}).then(function() {
									window.location.reload();
								})
						}else{
							swal({
								title: 'Delete Message',
								type: 'error',
								html: '' + result,
								confirmButtonColor: '#4e97d8'
								})
						}
					};

					General.loadAjax(type,url,data,callback);
			}, function(dismiss) {
			  if (dismiss === 'cancel') { // you might also handle 'close' or 'timer' if you used those
				// ignore
			  } else {
				throw dismiss;
			  }
			})
	}else{
		swal({
			title: 'Opps...',
			type: 'error',
			html: 'No Item Is Selected.',
			confirmButtonColor: '#4e97d8'
			})
	}
}

function DeleteMultiBookings() {
	if(document.getElementById("active").className=="active"){
		checkboxname="checkbookingactives";
		label="Active";
	}else{
		checkboxname="checkbookingexpireds";
		label="Expired";
	}
	if(($("[name="+checkboxname+"]:checked").length)>0){
		swal({
			title: 'Are You Sure You Want To Delete ("+($("[name="+checkboxname+"]:checked").length)+") "+label+" Items?',
			text: 'Delete Confirmation',
			type: 'warning',
			confirmButtonColor: '#4e97d8'
		}).then(function() {
			var chkbox = $("[name="+checkboxname+"]:checked");
				var bookId = [];
				for(i = 0; i < chkbox.length; i++){
					bookId.push($(chkbox[i]).val());
				}
				var 
					type = "post",
					url = "./?ac=doDeleteBooking",
					data = {
					bookid: bookId
					},
				
				callback = function(result){
					if(result == "pass"){
						swal({
							title: 'Delete Successful',
							text: 'Successfully Deleted The Booking.',
							type: 'success',
							confirmButtonColor: '#4e97d8'
							}).then(function() {
								window.location.reload();
							})
					}else{
						swal({
							title: 'Delete Message',
							type: 'error',
							html: '' + result,
							confirmButtonColor: '#4e97d8'
						})
					}
				};

					General.loadAjax(type,url,data,callback);	
			})
	}else{
		swal({
			title: 'Opps...',
			type: 'error',
			html: 'No Item Is Selected.',
			confirmButtonColor: '#4e97d8'
			})
	}
}

function confirmUpgradeInsurance(booking_id,bookid,uid,goodValue,oriPrice,priceDisplay,rateDisplay,urlDisplay,deliTo,pWeight,cid){
	$.ajax({
		type: "POST",
		url: "./?ac=doSaveInsuranceDetail",
		data: {
			uid : uid,
			bookid : bookid,
			checkStatus : 1,	
			cid : cid,
			pValue : goodValue,
			pWeight : pWeight,
			pTo : deliTo  


		},
		success:function(result){	
			if(result != '') {				
				tempTotal = parseFloat(result);
				tempTotal = tempTotal.toFixed(2);
				body1 = '<h4>The insurance charge for this parcel is: <b>RM '+tempTotal+'</b></h4>';
				body2 = '<i style="font-size:10px;text-transform:none;">Charges formula: ('+rateDisplay+'% x RM'+goodValue+') <b>OR</b> minimum RM5.00 charges whichever is higher.<br>';
				body3 = 'This protection plan will be covered by <a href="http://'+urlDisplay+'" target="_blank">'+urlDisplay+'</a></i>';
				body4 = '<hr/><div class="hidden-xs"><div class="form-group">';
				body4 += '<p class="col-sm-4 col-lg-2 control-label">Parcel Photo</p>';
				body4 += '<div class="col-sm-8 col-lg-10"><label class="select-wrapper" for="photo">';
				body4 += '<input id="photo" type="file" multiple="multiple" name="photo[]" accept=".png, .jpg, .jpeg, .bmp, .tiff" style="visibility: hidden"></label>';
				body4 += '<span id="photouploading">Uploading...</span><span id="photoaccept">.png, .jpg, .bmp, .tiff</span>';
				body4 += '</div></div></div>';
				/* MOBILE VIEW*/
				body4 += '<div class="visible-xs"><p>Parcel Photo</p>';
				body4 += '<p><label class="select-wrapper" for="photo"><input id="photo" multiple="multiple" name="photo[]" accept=".png, .jpg, .jpeg, .bmp, .tiff" style="visibility: hidden" type="file"></label>';
				/* MOBILE VIEW END*/
				body4 += '<span style="display: none;" id="photouploadingMobile">Uploading...</span>';
				body4 += '<span id="photoacceptMobile">.png, .jpg, .bmp, .tiff</span></p></div>';
				body4 += '<div class="col-sm-4 col-lg-2"></div><div class="col-sm-8 col-lg-10 col-xs-12" id="showphotohere"></div>';
				
				
				body4 += '<div class="hidden-xs"><div class="form-group">';
				body4 += '<p class="col-sm-4 col-lg-2 control-label">Parcel Invoice</p>';
				body4 += '<div class="col-sm-8 col-lg-10">';
				body4 += '<label class="select-wrapper" for="invoice">';
				body4 += '<input id="invoice" type="file" multiple="multiple" name="invoice[]" accept=".png, .jpg, .jpeg, .bmp, .tiff, .pdf" title=" " class="image_src" style="visibility: hidden"></label>';
				body4 += '<span id="invoiceuploading">Uploading...</span><span id="invoiceaccept">.png, .jpg, .bmp, .tiff, .pdf</span>';
				body4 += '</div></div></div>';
				/* MOBILE VIEW*/
				body4 += '<div class="visible-xs"><p>Parcel Invoice</p><p><label class="select-wrapper" for="invoice">';
				body4 += '<input id="invoice" multiple="multiple" name="invoice[]" accept=".png, .jpg, .jpeg, .bmp, .tiff, .pdf" title=" " class="image_src" style="visibility: hidden" type="file"></label>';
				body4 += '<span style="display: none;" id="invoiceuploadingMobile">Uploading...</span><span id="invoiceacceptMobile">.png, .jpg, .bmp, .tiff, .pdf</span></p></div>';
				/* MOBILE VIEW END*/
				body4 += '<div class="col-sm-4 col-lg-2"></div>';
				body4 += '<div class="col-sm-8 col-lg-10 col-xs-12" id="showinvoicehere"></div>';
				
				body4 += '<i style="font-size:11px;text-transform:none;">Please upload at least <span style="color:red">3 photos</span> and <span style="color:red">1 invoice.</span></i>';
				ibody = body1+body2+body3+body4;
				
				$('#popupbox .modal-header h3').html("Upgrade Parcel's Protection Plan");
				$("#popupbox .modal-body").html(ibody);
				$("#popupbox .modal-footer").html('<button class="btn btn-default" data-dismiss="modal" type="button">Close</button><button class="btn btn-primary" onclick="upgradeInsurance('+'\''+booking_id+'\''+','+bookid+','+uid+',\''+oriPrice+'\',\''+tempTotal+'\',\''+rateDisplay+'\',\''+goodValue+'\',\''+deliTo+'\',\''+pWeight+'\',\''+cid+'\')" type="button">Confirm &amp; Upgrade</button>');
				$("#popupbox .modal-footer").append('<input type="hidden" name="bookid" id="bookid" value='+bookid+'>');
				$('#popupbox').modal('toggle');
				if($(window).width() < 321){
					$('#popupbox .modal-footer :button').addClass("btn-sm");
				}
				
				displayphoto();
				displayinvoice();
				$("#photouploading").hide();
				$("#invoiceuploading").hide();
				
				$('#photo').change(function() {
					if(!$(this).val()) {
						// No file is uploaded, do nothing
						return false;
					}
					
					if($(this).prop('files').length > 6){
						swal({
							title: 'Oops',
							type: 'error',
							html: 'You are only allowed to upload 6 parcel photos.',
							confirmButtonColor: '#4e97d8'
							})
						return false;
					}else{
						var file_data = [];
						var form_data = new FormData();
						for(i = 0; i<$(this).prop('files').length; i++){
							form_data.append('file[]', $(this).prop('files')[i]);
							form_data.append('bookid',bookid);
						}
						$("#photouploading").show();
						$("#photoaccept").hide(); 




						
						$("#photouploadingMobile").show();
						$("#photoacceptMobile").hide(); 

						$.ajax({
							url: "./?ac=doUploadParcelPhoto",
							type: "POST",
							data: form_data,
							processData: false,
							contentType: false,
							success: function (res){
								if(res=="success"){
									$("#photo").replaceWith($("#photo").clone(true));
									displayphoto();
									$("#photouploading").hide();
									$("#photoaccept").show(); 
									$("#photouploadingMobile").hide();
									$("#photoacceptMobile").show(); 
								}else{
									$("#photo").replaceWith($("#photo").clone(true));
									$("#photouploading").hide();
									$("#photoaccept").show(); 
									$("#photouploadingMobile").hide();
									$("#photoacceptMobile").show(); 
									swal({
										title: 'Oops',
										type: 'error',
										html: '' + res,
										confirmButtonColor: '#4e97d8'
										})
								}
							}
						});
						return false;
					}
				});
				
				$('#invoice').change(function() {
					if(!$(this).val()) {
						// No file is uploaded, do nothing
						return false;
					}
						
					if($(this).prop('files').length > 6){
						swal({
							title: 'Oops',
							type: 'error',
							html: 'You are only allowed to upload 6 parcel invoice.',
							confirmButtonColor: '#4e97d8'
							})
						return false;
					}else{
						var file_data = [];
						var form_data = new FormData();
						for(i = 0; i<$(this).prop('files').length; i++){
							form_data.append('invoice[]', $(this).prop('files')[i]);
							form_data.append('bookid',bookid);
						}
						$("#invoiceuploading").show();
						$("#invoiceaccept").hide(); 
						$("#invoiceuploadingMobile").show();
						$("#invoiceacceptMobile").hide(); 
						$.ajax({
							url: "./?ac=doUploadParcelInvoice", 
							type: "POST",
							data: form_data,
							processData: false,
							contentType: false,
							success: function(res){
								if(res=="success"){
									$("#invoice").replaceWith($("#invoice").clone(true));
									$("#invoiceuploading").hide();
									$("#invoiceaccept").show();
									$("#invoiceuploadingMobile").hide();
									$("#invoiceacceptMobile").show();
									displayinvoice();
								}else{
									$("#invoice").replaceWith($("#invoice").clone(true));
									$("#invoiceuploading").hide();
									$("#invoiceaccept").show();
									$("#invoiceuploadingMobile").hide();
									$("#invoiceacceptMobile").show();
									swal({
										title: 'Oops',
										type: 'error',
										html: '' + res,
										confirmButtonColor: '#4e97d8'
									})
								}
							}
						});
						return false;
					}
				});

			}
		}
	});
}

function EditInsurance(booking_id){
	window.location.assign("./?pg=Book&bid="+booking_id);
}

function upgradeInsurance(booking_id,bookid,uid,oriPrice,insurancePrice,insuranceRate,goodValue,deliTo,pWeight,cid){
	var message = checkInsurance();
	if(message!=""){
		swal({
			title: 'Oops',
			type: 'error',
			html: '' + message,
			confirmButtonColor: '#4e97d8'
			})
	}
	else{
		$.ajax({		
			type: "POST",
			url: "./?ac=doBuyInsurance",
			data: {
				uid : uid,
				bookid : bookid,	
				checkStatus : 2
			},		
			success:function(result){	
				if(result != ''){				
					var smsprice = $('span#ins-sms-price_'+bookid).html();
					if(smsprice == "None" || typeof(smsprice) === 'undefined' || smsprice == ''){
						var smsprice = '0.00';
					}
					tempTotal = parseFloat(oriPrice)+parseFloat(insurancePrice)+parseFloat(smsprice);
					tempTotal = tempTotal.toFixed(2);
					$('span#ins-total-price_'+bookid).hide().html("RM "+tempTotal).fadeIn(500);	
					$('span#ins-insurance-price_'+bookid).hide().html('RM '+insurancePrice+'<br><i>('+insuranceRate+'% X RM '+goodValue+')</i>').fadeIn(500);	
					$('span#ins-insurance-button_'+bookid).hide().html('').fadeIn(500);
					var body = '<button class="btn btn-warning btn-xs" data-placement="bottom" onclick="EditInsurance('+'\''+booking_id+'\');" title="Edit or Cancel" style="margin-top:0px !important;">';
					body += '<span class="glyphicon glyphicon-hand-right"></span> Edit / Cancel Insurance</button>';
					$('span#ins-insurance-button_'+bookid).html(body);
					$('#popupbox').modal('hide');
					checkTotalCheckboxPrice();
				}
			}
		});
	}
}

function checkInsurance(){
	var message ="";
	if($("#showphotohere img").length<3){
		message +="Please upload at least (3) three images of the parcel. (Compulsory for purchasing additional insurance)\n";	
	}
	if($("#showinvoicehere img").length<1){
		message +="Please upload the invoice. (Compulsory for purchasing additional insurance)\n";	
	}
	return message;
}

function displayphoto(){
var bookid = $('#popupbox .modal-footer #bookid').val();
	$.ajax({
   		url: "./?ac=getUploadedParcelPhoto",
   		type: "POST",
   		data: {bookid: bookid, bookid: bookid},
    		success: function (res) {
			var obj = jQuery.parseJSON(res);
			$('#showphotohere').empty();
			for(counter=0; counter<obj.length; counter++){
				$('#showphotohere').append(
					"<div style='float:left;width:70px;height:60px;position:relative;'>" +
					"<img src='"+obj[counter].img+"' style='margin-right:5px;margin-bottom:4px;vertical-align:top;height:50px;width:60px;float:left' >" +
					"<span id='"+obj[counter].imgonly+"' class='glyphicon glyphicon-trash' onclick=\"deletephoto('"+obj[counter].imgonly+"', '"+obj[counter].img+"')\"></span>" +
					"</div>"
				);
			}
    	}
  	});
}

function displayinvoice(){
var bookid = $('#popupbox .modal-footer #bookid').val();
	$.ajax({
   		url: "./?ac=getUploadedParcelInvoice",
   		type: "POST",
   		data: {bookid: bookid, bookid: bookid},
    	success: function (res) {
   			var obj = jQuery.parseJSON(res);
			$('#showinvoicehere').empty();
			for(counter=0; counter<obj.length; counter++){
				$('#showinvoicehere').append(
					"<div style='float:left;width:70px;height:60px;position:relative;'>" +
					"<img src='"+obj[counter].img+"' style='margin-right:5px;margin-bottom:4px;vertical-align:top;height:50px;width:60px;float:left' >" +
					"<span id='"+obj[counter].imgonly+"' class='glyphicon glyphicon-trash' onclick=\"deleteinvoice('"+obj[counter].imgonly+"', '"+obj[counter].img+"')\"></span>" +
					"</div>"
				);
			}
    	}
  	});
}

function deletephoto(img,imgurl){
var bookid = $('#popupbox .modal-footer #bookid').val();
	var 
		type = "post",
		url = "./?ac=doDeletePhoto",
		data = {
		photo : img,
		bookid : bookid
	},
	callback = function(result){
		if(result == "success"){
			displayphoto();
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
}

function deleteinvoice(img,imgurl){
	var bookid = $('#popupbox .modal-footer #bookid').val();
	var 
		type = "post",
		url = "./?ac=doDeleteInvoiceAttachment",
		data = {
		invoice : img,
		bookid : bookid
	},
	callback = function(result){
		if(result == "success"){
			displayinvoice();
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
}

// TY-S SMS
function BuySMS(bookid,oriPrice){
	var SMSPRICE = "0.20";
	
	var 
		type = "post",
		url = "./?ac=doBuySMS",
		data = {
		bookid : bookid
	},
	callback = function(result){
		if(result == "0.00"){
			$('span#ins-sms-price_'+bookid).html('Free');
		}else{
			$('span#ins-sms-price_'+bookid).html(SMSPRICE);
		}
		var insurance = $('span#ins-insurance-price_'+bookid).html();	
		
		// candy 0512 return S
		var return_price = "0.00";
		if($('span#ins-return-price_'+bookid).length > 0){
			if($('span#ins-return-price_'+bookid).html() != 'None'){
			 return_price = $('span#ins-return-price_'+bookid).html();		
			}
		}
		// candy 0512 return E	

		if(insurance == "Basic" || insurance == "基本"){
			insurance = 0.00;
		}else{
			insurance = insurance.substring(0, insurance.indexOf('<'));
			insurance = insurance.replace("RM",'');
		}
		// candy return S
		tempTotal = parseFloat(oriPrice)+parseFloat(result)+parseFloat(insurance)+parseFloat(return_price);
		// candy return E
		tempTotal = tempTotal.toFixed(2);
		$('span#ins-total-price_'+bookid).hide().html("RM "+tempTotal).fadeIn(500);	
		$('span#sms-button_'+bookid).hide().html('').fadeIn(500);
		var body = '<button class="btn btn-warning btn-xs" data-placement="bottom" onclick="CancelSMS('+'\''+bookid+'\''+',\''+oriPrice+'\');" title="Cancel SMS" style="margin-top:0px !important;">';
		body += '<span class="glyphicon glyphicon-hand-right"></span> Cancel SMS </button>';
		$('span#sms-button_'+bookid).show().html(body);
		checkTotalCheckboxPrice();
	};
	General.loadAjax(type,url,data,callback);	
}

function CancelSMS(bookid,oriPrice){
	var 
		type = "post",
		url = "./?ac=doCancelSMS",
		data = {
		bookid : bookid
	},
	callback = function(result){
		if(result == "0.00"){
			var insurance = $('span#ins-insurance-price_'+bookid).html();
			
			// candy 0512 return S
			var return_price = "0.00";
			if($('span#ins-return-price_'+bookid).length > 0){
				if($('span#ins-return-price_'+bookid).html() != 'None'){
				 return_price = $('span#ins-return-price_'+bookid).html();		
				}
			}
			// candy 0512 return E	
			
		if(insurance == "Basic" || insurance == "基本"){
				insurance = 0.00;
			}else{
				insurance = insurance.substring(0, insurance.indexOf('<'));
				insurance = insurance.replace("RM",'');
			}
			 // candy return S
			tempTotal = parseFloat(oriPrice)+parseFloat(insurance)+parseFloat(return_price);
			// candy return E
			tempTotal = tempTotal.toFixed(2);
			
			$('span#ins-sms-price_'+bookid).html('None');
		    $('span#ins-total-price_'+bookid).hide().html("RM "+tempTotal).fadeIn(500);	
			$('span#sms-button_'+bookid).hide().html('').fadeIn(500);
			var body = '<button class="btn btn-warning btn-xs" data-placement="bottom" onclick="BuySMS('+'\''+bookid+'\''+',\''+oriPrice+'\');" title="Buy Tracking SMS" style="margin-top:0px !important;">';
			body += '<span class="glyphicon glyphicon-hand-right"></span> Buy Tracking SMS </button>';
			$('span#sms-button_'+bookid).show().html(body);
			checkTotalCheckboxPrice();
		}
	};
	General.loadAjax(type,url,data,callback);	
}
// TY-E SMS

var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      //Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '435253458611-89sn8161llr6cqp4n7ladej36pjvrnfk.apps.googleusercontent.com',
      });
      attachSignin(document.getElementById('googlelogin'),document.getElementById("googleid").value);
    });
};

function attachSignin(element,id) {
    auth2.attachClickHandler(element, {},
	function(googleUser){
        var profile = googleUser.getBasicProfile();
        var id_token = googleUser.getAuthResponse().id_token;
		var email = profile.getEmail();
		email = email.trim();
		$.ajax({
			type: "POST",
			url: "./?ac=CheckUserEmail",
			data : { 
				email : email
			},
			async : false,
			success:function(response){
				if(response == "pass"){
					window.outcome = 1;
				}else{
					window.outcome = 2;
				}
			}
		});
		if(window.outcome == 2){
			var
			type = "post",
			url = "./?ac=doUserLoginGoogle",
			data = {
				email : email
			},
			callback = function(result){		
				if(result == "pass"){
					PayLoggedInBookingConfirm(id);
				}else{
					swal({
						title: 'Sign In Fail',
						type: 'error',
						html: 'Sorry, invalid email. Please Try Again.',
						confirmButtonColor: '#4e97d8'
						})
				}
			};
		}else if(window.outcome == 1){
			var
			type = "post",
			url = "./?ac=doQuickUserSignUp",
			data = {
				email : email
			},
			callback = function(result){
				if(result == "pass"){	
					swal({
					title: 'Registration Completed',
					type: 'success',
					html: 'Congratulations your account has been created successfully.',
					confirmButtonColor: '#4e97d8'
					}).then(function() {
						window.location.reload();
					})
				}
			};		
		}
		General.loadAjax(type,url,data,callback);
	});
}

$('input[name=checkbookingactive]').click(function(){
	checkTotalCheckboxPrice();
});

function checkTotalCheckboxPrice(){
	var checkboxes = document.getElementsByName('checkbookingactive');
	count=0;
	countcannot=0;
	price=0;
	for(var i = 0; i < checkboxes.length; i++){
		if(checkboxes[i].checked == true){
			var myElem = document.getElementById('expired'+(checkboxes[i].id).substr(7));
			if (myElem == null){
				var eachPrice = ($('#ins-total-price_'+(checkboxes[i].id).substr(7)).html()).replace(/RM/, '');
				price += parseFloat(eachPrice);
				count++;
			}else{
				countcannot++;
			}
		}
	}

	if(count>0){
		price = price.toFixed(2);
		$('#total .badge').html('RM '+price);
		$('#total .parcels').html('<strong>Selected '+count+' Parcels:</strong>');
		$('li#total').show();

	}else{
		$('li#total').hide();
	}
}
function CheckNull(obj,obj1,obj2){

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
	if(General.isTextEmpty($(obj2))){
		doFail(obj2);
	}else{
		clearNull(obj2);
	}
}

function CheckNull2(obj,obj1,obj2){
	clearNull(obj);
	clearNull(obj1);
	clearNull(obj2);
}

function doPass(obj){
	$(obj).addClass("pass");
	$(obj).removeClass("padding");
	$(obj).removeClass("fail");
	$(obj).css("border-color","#0F0");
	$(obj).parent().children().eq(1).addClass("hide");
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

function closeCoverBox(id){
	PayLoggedInBookingConfirm(id);
	progresval=10;
	progressBarUpdate(progresval);
}

function buttonInProcess(id){
	switch(id) {
    case "normal":
       $("#loginPay2").html('<i class="epi-spin4 selector__glyph-inner animate-spin" style="font-size: 24px;"></i> In Progress');
        break;
    case "guest":
        $("#loginPayGuest2").html('<i class="epi-spin4 selector__glyph-inner animate-spin" style="font-size: 24px;"></i> In Progress');
        break;
	}

	$("#loginPay2").prop('disabled', true);
	$("#loginPayFB2").attr("disabled", "disabled"); 
	$("#loginPayGoogle2").attr("disabled", "disabled");
	$("#loginPayGuest2").prop('disabled', true);
	$("#modalCancel").attr("disabled", "disabled");
	
	document.getElementById('loginPayFB2').style.pointerEvents = 'none';
	document.getElementById('loginPayGoogle2').style.pointerEvents = 'none';
}

function buttonNotInProcess(){
	$("#loginPay2").prop('disabled', false);
	$("#loginPay2").html('Log In and Continue');
	$("#loginPayFB2").removeAttr('disabled');
	$("#loginPayGoogle2").removeAttr('disabled');
	$("#loginPayGuest2").prop('disabled', false);
	$("#loginPayGuest2").html('Continue as Guest');
	$("#modalCancel").removeAttr('disabled');
	
	document.getElementById('loginPayFB2').style.pointerEvents = 'auto'; 
	document.getElementById('loginPayGoogle2').style.pointerEvents = 'auto';
}

$('input[name=checkbookingactive]').live("click",function(){ 
    checkTotalCheckboxPrice();
});

// candy return S
function ReturnServiceOption(booking_id,oriprice){
	window.location.assign("./?pg=Book&bid="+booking_id);
}
// candy return E
</script>

</div>

<div id="mainTrackResult"></div>
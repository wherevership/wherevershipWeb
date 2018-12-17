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
    background-color: #f69;
}
.table>thead.international:first-child>tr:first-child>th {
    background-color: #5cb85c;
}
.dashboard-title span.domestic-title {
  background-color: #f69;
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

<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
		
	<div class="row dashoboard-account">
		<div class="container-fluid space-small"> 
			<div>
				<h2 class="dashboard-title">
				Top Up
				</h2>
			</div>
			<div class="clearfix"></div>
			<table id="myTable" class="table table-striped" width="100%">
    <thead>
      <tr>
        <th width="25%" class="hidden-xs">Package</th>
        <th width="25%" class="hidden-xs">Credit (RM)</th>
        <th width="25%" class="hidden-xs">You need pay (RM)</th>
        
        <th class="visible-xs">Shipment Summary</th>
		<th width="25%" style="padding:4px;"></th>
			
      </tr>
    </thead>
    <tbody id="table1">
	<?php
		if (!empty($creditList)) {
		foreach ($creditList as $v) {
   ?>
	<tr>
		<td class="hidden-xs" width="25%"><?=$v['package']?></td>
		<td class="hidden-xs" width="25%"><?=$v['credit_value']?></td>
		<td class="hidden-xs" width="25"><?=$v['amount']?></td>
		<td width="25%">
			<button class="btn btn-primary" data-toggle="modal" data-target="#payment_method" id="<?=$v['id']?>-><?=$v['package']?>-><?=$v['amount']?>">Get It Now</button>
			
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
		
		
		</div>
	</div>
<div id="dialog"></div>
<div id="TopupDialog"></div>
<!-- candy -> get optional form -->
<div>
<div id="payment_method" class="modal fade in"  data-keyboard="false" data-backdrop="static">
  <div class="modal-content" style="text-align: left;">
    <div class="modal-header" >
      <div class="row" style="padding: 15px 15px 0px">
        <h3>Select your preferred payment method</h3>
        <p>Total amount <span style="color: #2cbeb7; font-weight: bold; font-size: 20px;" >RM<span id="tamt"></span></span> <small></small></p>
        <p><input type='hidden' id='tid' >
        <input type='hidden' id='tname'></p>
      </div>
    </div>
    <div class="modal-body payment_method_wrapper" style="color: black;">
      <div class="panel panel-deafult" style="background-color: #f5f5f5;">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <h4><strong>Credit / Debit Card / Online Banking</strong></h4>
              <p><small>Select your preferred payment gateway. No extra charges.</small></p>
              <div id="payment_form"></div>
            </div>
          </div>
          <div class="row">
          
            <div class="col-md-3 col-sm-4">
              <div class="well">
             <div class="radio">
                  <label style="display: block;">
                    <input type="radio" name="optradio" id="optradio" value="Ipay" checked>
                    <img src="https://secure.easyparcel.my/pass/application/APP_6.15/theme/easyparcel/images/payment_gateway/ipay88_logo.png" width="100px" >
                  </label>
                </div>
              </div>
            </div>
          
            <div class="col-md-3 col-sm-4">
              <div class="well">
             <div class="radio">
                  <label style="display: block;">
                    <input type="radio" name="optradio" id="optradio" value="Molpay" >
                    <img src="https://secure.easyparcel.my/pass/application/APP_6.15/theme/easyparcel/images/payment_gateway/molpay_logo.png" width="100px" >
                  </label>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      
      
      
      <div class="panel panel-deafult" style="background-color: #f5f5f5;" >
        <div class="panel-body">
          <div class="col-md-12">
			<div class="radio">
				<input type="radio" name="optradio" id="optradio" value="offline" >
				<h4><strong>Offline Payment: ATM Transfer / Bank Transfer</strong></h4>
        <p><small> Offline payment processing will take 1-3 working days.</small></p> 
				<p><strong>Company Name: WHEREVERSHIP SDN BHD <br>
					Bank Name : MAYBANK <br>
					Account No : 5511 5510 6852</strong> </p>
				<p><small><i class="fas fa-info-circle blink"></i> Kindly email the e-statement slip after top up to <a href="mailto:business@wherevership.com">business@wherevership.com</a></small></p>
          </div>
		  </div>
          <div class="row"> </div>
        </div>
      </div>
     
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" id="cancel">Cancel</button>
      <button type="button" class="btn btn-primary" 
  onclick="submitform()">Continue</button>
    </div>
  </div>
</div>
</div>



<script>
 $("#cancel").click(function(){
 	//when user wait long time ago , can click to stop run 
	try{
		window.stop();
	}catch(exception){
		window.document.execCommand('Stop');
	}
	
});
//candy -. add starter
function starter(ep) { 
	ep=ep.replace("Topup", "");
   	 $('.'+ep).click();
}

//candy pass value to dialog box
 $('#payment_method').on('show.bs.modal', function(e) {
    var $modal = $(this),
     	topupinfo = e.relatedTarget.id;   
     	info = topupinfo.split("->");
     	topup_id = info[0];
		topup_name = info[1];
     	topup_amt = info[2];
     $modal.find('#tid').html(topup_id);
     $modal.find('#tname').html(topup_name);
     $modal.find('#tamt').html(topup_amt);
   
    
     
 });

//candy add submit form for pop up page
function submitform() 
  {
  	var topup_id = $('#tid').text();
  	var topup_name = $('#tname').text();
  	var payment_method = document.querySelector('input[id="optradio"]:checked').value;
	var 
	    type = "post",
	    url = "./?ac=getPaymentForm",
	    data = {
	      order_type:"topup",
	      payment_method:payment_method,
	      topup_id : topup_id,	 
	      
	      },

		 callback = function(result){

		    $('#payment_form').html(result); 
		    // $('#myModal').modal('hide');
		    
		    if(payment_method == 'Molpay')
		    {
		    	// alert(data);
			    $.post("./?ac=doMolpayLog", $("#"+topup_name).serialize())
		          .done(function( data ) {
		         	 $(".PaymentForm").submit();
		          });
		    }else{
		    	$(".PaymentForm").submit();
		    }
				
		 };
		 
	      General.loadAjax(type,url,data,callback);

 }
//##candy end 

// var molpay = {
// 	action : "https://www.onlinepayment.com.my/MOLPay/pay/[:merchant_acc:]/",
// 	amount : 0,
// 	orderid : "",
// 	bill_name : "Loh Chin Guan",
// 	bill_email : "lcg1989@hk3.com.my",
// 	bill_mobile : "177754956",
// 	bill_des : "Credit Topup",
// 	cur : "RM",
// 	returnurl : "[:mreturn_url:]",
// 	vcode : "[:vcode:]",
// 	country : "Malaysia",
// },
// ipay = {
// 	action : "http://ezivoucher.com/payment_gateway/ipay.php",
// 	MerchantCode : "[:mcode:]",
// 	PaymentId : "",
// 	RefNo : "[:invoice:]",
// 	Amount : "[:amount:]",
// 	Currency : "RM",
// 	ProdDesc : "Credit Topup",
// 	UserName : "Loh Chin Guan",
// 	UserEmail : "lcg1989@hk3.com.my",
// 	UserContact : "177754956",
// 	Lang : "UTF-8",
// 	Signature : "[:signature:]",
// 	ResponseURL : "[:ireturn_url:]",
// 	BackendURL : "[:ibackend_url:]"

// };


// var Topup = {
// 	MOLPayData : {},
// 	iPayData : {},
	
// 	SelectPayment : function(){
// 		$("[molpay]").toggleClass("btn-info");
// 		$("[ipay]").toggleClass("btn-info");
// 	},
	
// 	Send : function(){
// 		var amount = $("#amount").html();
// 		var str = "";
// 		for(p in ipay){
// 			str += p + " : " + ipay[p] + "\n";
// 		}
// 		swal({
// 			title: 'Info',
// 			type: 'info',
// 			html: '' + str,
// 			confirmButtonColor: '#4e97d8'
// 			})
// 		if($.trim($(".btn-info").html()) == 'Topup'){
// 			Topup.iPayData.Amount = amount;
// 			$.ajax({
// 				type : "post",
// 				url : "./?ac=doiPayProcess",
// 				data : Topup.iPayData,
// 				success : function(result){
// 					if($.trim(result) != "fail"){
// 						Topup.iPayData.Signature = $.trim(result);
// 						swal({
// 							title: 'Info',
// 							type: 'info',
// 							html: '' + Topup.iPayData.Signature,
// 							confirmButtonColor: '#4e97d8'
// 							})
// 						Topup.FormSubmit(Topup.iPayData);
// 					}else{
// 						swal({
// 							title: 'Error',
// 							type: 'error',
// 							html: 'Process fail',
// 							confirmButtonColor: '#4e97d8'
// 							})
// 					}
// 				}
// 			});
			
// 		}else{
// 			//Topup.FormSubmit(Topup.MOLPayData);
// 		}
// 	},
	
// 	FormSubmit : function(data){
// 		var form = jQuery('<form>', {
// 			'action' : data.action, 
// 			'method' : 'post'
// 		});
// 		for(p in data){
// 			if(p != "action"){
// 				form.append(jQuery('<input>', {
// 					'name' : p,
// 					'value' : data[p],
// 					'type' : 'hidden'
// 				}));
// 			}
// 		}
// 		form.submit();
// 	},
	
// 	Setup :function(molpay,ipay){
// 		Topup.MOLPayData = molpay;
// 		Topup.iPayData = ipay;
// 	}
// }
// Topup.Setup(molpay,ipay);

function filter(){
	var i_month = $('#i_month').val();
	var i_year = $('#i_year').val();
	var data = {
		i_month : i_month,
		i_year : i_year
	};
	alert(i_month + " " + i_year);

	$.ajax({
		type : "post",
		url : "./?ac=doTopupReceipt",
		data : data,
		success : function(result){
			result = $.trim(result);
			if(result == "pass"){
				//$("#integrateInsert").hide();
				$("#success").show();
				windows.reload();
				//setTimeout(function(){location.href = "./?pg=MyAccount&tab=Integrate"},2000);
			}else{
				aswal({
					title: 'Info',
					type: 'info',
					html: '' + result,
					confirmButtonColor: '#4e97d8'
					})
			}
		}
	}).fail(function(){
		swal({
			title: 'Error',
			type: 'error',
			html: 'Exec Fail',
			confirmButtonColor: '#4e97d8'
			})
	});
}

function topupDetails(topup_name){
	var topupClass = document.getElementById("tpPanelBody-"+topup_name);
	if(topupClass.className == "panel-body visible"){
		topupClass.className = "panel-body hidden";
	}else{
		var visibletopupClass = document.getElementsByClassName("panel-body visible");
		var i;
		for (i = 0; i < visibletopupClass.length; i++) {
			visibletopupClass[i].className = "panel-body hidden";
		}
		topupClass.className = "panel-body visible";
	}
}

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
		swal({
			title: 'Please Select Date Range',
			type: 'error',
			html: "Please select both 'From' and 'To' date to search topup invoice.",
			confirmButtonColor: '#4e97d8'
			})
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
 
function SendVerify(){
	window.location.href ="./?pg=MyAccount&tab=UserVerifyAccount"
}

$(function() {
    $( "#dateFrom" ).datepicker({dateFormat: 'yy-mm-dd',maxDate: '+0d'});
	$( "#dateTo" ).datepicker({dateFormat: 'yy-mm-dd',maxDate: '+0d'});
});

function downloadMonthly(){
	var from = ($("[name=dateFrom]").val().trim());
	var to = ($("[name=dateTo]").val().trim());
	if(from == "" || to == ""){
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

$(function () {
	$('[data-toggle="tooltip"]').tooltip();
})


function FBPixelTracking(TopUpName,TopUpAmount){
 	fbq('init', '348255145366237');
  	fbq('trackCustom', TopUpName, {value: TopUpAmount, });
}
</script>
</div>
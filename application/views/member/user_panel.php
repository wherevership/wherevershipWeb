 <script>
	$("#dashboard").addClass('active selected');
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
		{ document.getElementById("instantpay").submit(); }  
	</script>
	<!--
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
	</div> -->          		

       
   
	<div class="row dashoboard-account">
		<div class="row space">
			<div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-5 profile-pic text-center" style="position: relative;"> 
				<div class="profile_picture"> <img src="<?=base_url('assets2/image/user.jpg')?>">
						<div id="logo" class="glyphicon glyphicon-camera camera"></div>
				</div>
				<input class="hidden" type="file" value="upload" id="upload"/>

			</div>
			<div class="col-xs-7 visible-xs">
				<h3 class="profile-name"></h3>
				
			</div>
			<div class="col-md-7 col-sm-8 col-xs-12 my-details">
				<div class="row hidden-xs">
					<h3 class="profile-name"><?=!empty($username)?$username:'Unknown'?></h3>
					<span class="label">Activation User</span>
					
					<br>
				</div>
				<br />
				<table width="100%">
					<tbody>
						<tr>
							<td class="labels">Referral Commission Earned:</td>
							<td class="values"><strong><a href="./?pg=MyAccount&tab=Referral">RM 0.00</a></strong></td>
						</tr>
						
						<tr>
							<td class="labels">My Credits:</td>
						<td class="values"><strong><a href="./?pg=MyAccount">RM 25.00 </a> <div class="pull-right" style="position: relative;"><a href="./?pg=MyAccount&tab=Profile&do=Topup" class="btn top_up hidden-xs btn-box-shadow"><i class="epi-up-circled"></i> Top Up</a></div></strong></td> 
						</tr>
					</tbody>
				</table>
				<br>
				<div class="input-group dashboard-coupon">
					<div class="has-feedback">
						<input class="form-control" type="text" name="couponSearch" placeholder="Coupon code"/>
						<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
					</div>
					<span class="input-group-btn">
					<button class="btn btn-primary" type="button" onclick="registerCoupon()" style="height: 34px;"><i class="epi-right"></i></button>
					</span>
				</div>
			</div>
		</div>
		<div class="row" style="display: none;">
			<div class="col-xs-4 my-package text-center" style="padding-bottom:15px; padding-top:15px; border-right: 1px solid #fff;">
				<h4 style="margin-bottom: 0px; margin-top: 0px;"> <a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top">EP 2000</a> </h4>
			</div>
			<div class="col-xs-4 my-package text-center" style="padding-bottom:15px; padding-top:15px; border-right: 1px solid #fff;">
				<h4 style="margin-bottom: 0px; margin-top: 0px;"> <a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top">TOP UP</a> </h4>
			</div>
			<div class="col-xs-4">
				<div class="input-group">
					<input class="form-control" style="height: 48px;" type="text" name="couponSearch" placeholder="Coupon code"/>
					<span class="input-group-btn">
					<button class="btn btn-primary" type="button" onclick="registerCoupon()" style="height: 48px;"><i class="epi-right"></i></button>
					</span> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container-fluid total-summary">
				<div class="panel panel-default">
					<div class="panel-body padding-off total-summary_wrap">
						<div class="col-xs-4 padding-off total-saving">
							<div class="col-sm-4 col-xs-12">
								<h1 class="total-icon-size"><i class="epi-insurance"></i></h1>
							</div>
							<div class="col-sm-8 col-xs-12">
								<h5>Total Saving</h5>
								<h3><span class="hidden-xs">RM</span> 0.00</h3>
							</div>
						</div>
						<div class="col-xs-4 padding-off total-delivered">
							<div class="col-sm-4 col-xs-12">
								<h1 class="total-icon-size"><i class="epi-delivery36"></i></h1>
							</div>
							<div class="col-sm-8 col-xs-12">
								<h5>Total Delivered</h5>
								<h3>0</h3>
							</div>
						</div>
						<div class="col-xs-4 padding-off total-referral">
							<div class="col-sm-4 col-xs-12">
								<h1 class="total-icon-size"><i class="epi-share-1"></i></h1>
							</div>
							<div class="col-sm-8 col-xs-12">
								<h5>Total Referral</h5>
								<h3>0</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			
				
	</div>
</div>

<div id="result"></div>
<script>
	
	
	
	function registerCoupon(){
		var couponCode = ($("[name=couponSearch]").val().trim());
		if(couponCode != ""){
			$.ajax({
				dataType: "json",
				type : "post",
				url : "./?ac=doRegisterCoupon",
				data : {
					couponCode : couponCode
				},
				success: function(result){
					if(result.status=="success"){
						swal({
							imageUrl: result.coupon_image,
							imageWidth: 350,
							title: 'Congratulations!',
							html: "You have successfully registered the coupon code.",
							confirmButtonColor: '#4e97d8',
						})
						setTimeout(function() {
							window.location.replace(".?pg=MyAccount&tab=MyRewards");
						}, 2000);
					}else if(result.status=="OldSuccess"){
						window.open(".?pg=MyAccount&cqs="+couponCode);
					}else{
						swal({
							type: 'warning',
							title: 'Oops!',
							html: "It seems like the coupon code is invalid or expired. Try again with the correct code. Thank you.",
							confirmButtonColor: '#4e97d8',
							allowOutsideClick: false
						})
					}
				}
			});
		}else{
			swal({
				type: 'warning',
				title: 'Oops!',
				html: "Please insert a valid coupon code. Thank you.",
				confirmButtonColor: '#4e97d8',
				allowOutsideClick: false
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

	$('#upload').change(function(){
		swal({   
			title: 'Loading........',   
			text: '<div class="progress-bar progress-bar-info progress-bar-striped" id="myProgress" style="visibility: visible" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><div id="myBar" style="visibility: visible"></div></div>',
			showConfirmButton: false
		});
		var bar= document.getElementById("myProgress"); 
		var elem = document.getElementById("myBar");   
		var width = 1;
		var id = setInterval(frame, 20);
		function frame() {
			if (width >= 100){
				clearInterval(id);
			}else{
				width++; 
				elem.style.width = width + '%'; 
				$('#myBar').html(width + "%" );
			}	
		}
		if(!$(this).val()) {
			return false;
		}else{
			var file_data = $(this).prop('files')[0];  
			var form_data = new FormData();                  
			form_data.append('file', file_data);

			$.ajax({
				url: "./?ac=doUploadPhoto",
				type: "POST",
				data: form_data,
				processData: false,
				contentType: false,
				success: function (res) {
					if(res=="success"){
						clearInterval(id);
						elem.style.width = 100 + '%'; 
						$('#myBar').html("100%");
						window.location.reload();
					}else{
						swal({
							title: 'Oops',
							type: 'error',
							html: '' + res,
							confirmButtonColor: '#4e97d8'
							})
						return false;
					}
				}
			});
			return false;
		}
	});

	$(".profile_picture").hover(
		function() {
			$(this).children("img").fadeTo(200, 0.5).end().children("#logo").show();
			document.getElementById("logo").style.visibility = "visible";
		},
		function() {
			$(this).children("img").fadeTo(200, 1).end().children("#logo").hide();
		}
	);

	$(".profile_picture").click(function(){
		$('#upload').click();
	});

	</script> 
<!-- Below code added for Facebook -->
	<div id="fb-root"></div>

</div>
<div id="mainTrackResult"></div>
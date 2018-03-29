<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="utf-8">
<title><?=isset($title)?$title:''?> | Delivery Made Easy</title>
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?=base_url('assets2/image/favicon.ico')?>"/>

<!-- Stylesheet-->
<link href="<?=base_url('assets2/css/bootstrap.min.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/bootstrap-select.min.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/odometer-theme-plaza.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/jquery-ui.min.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/animation.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/nunito.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/animate.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/sweetalert2.min.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/style.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/jquery.dataTables.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/quote.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/fontawesome-all.css')?>" rel="stylesheet">

<!-- original javascript-->
<script type="text/javascript" src="<?=base_url('assets2/js/jquery-1.12.1.min.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery-migrate-1.2.1.min.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/bootstrap.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/bootstrap-filestyle.min.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery.jplist.3.4.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/general.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/newsline.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jssor.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jssor.slider.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery.viewportchecker.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/odometer.min.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery-ui.min.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery.mobile.custom.min.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery.ui.widget.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery.iframe-transport.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery.fileupload.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/bootstrap-select.min.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/tooltip.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/sweetalert2.min.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/jquery.dataTables.js')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/quote.js')?>"></script>

<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>

<script src="<?=base_url('assets2/js/firConfig.js')?>"></script>
<!--<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js"></script> -->
<script>

</script>

<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/944118998/?value=0&amp;guid=ON&amp;script=0"/>
  </div>
</noscript>

</head>
<body>
	<div class="header-top-bar hidden-xs hidden-sm">
		<div class="container">
			<div class="row featurette top-bar-content">
				<div class="col-sm-12 hidden-xs top-bar-menu">
      
					<nav id="nav-toggle-menu" class="hidden-xs">
						<ul class="nav-list">
							<li><i class="fas fa-user"></i> <a id="welcome">Hi, Welcome</a></li>
							<li><i class="fas fa-truck"></i> <a data-toggle="modal" data-target="#services">Send A Parcel</a></li>
							<li><i class="far fa-question-circle"></i><a href="<?=base_url('contactUs')?>"> Help</a></li>
              
						</ul>
					</nav>
        
				</div>
			</div>
		</div>
	</div>
	<div class="header-logo hidden-xs">
		<div class="container">
			<div class="row featurette header-grid-inner">
				<div class="container-fluid">
					<div class="col-lg-6 col-md-4 col-sm-6 logo-wrapper"> <a href="<?=base_url('')?>" class="logo-wrapper"><img src="<?=base_url('assets2/image/logo.png')?>" class="logo hidden-xs"></a> </div>
				
						<ul class="nav navbar-nav navbar-right visible-sm">
							<li class="login-menu login_top"><a href="<?=base_url('userLogin')?>"><i class="fas fa-user"></i>Log In</a></li>
							<li class="login-menu signUp_top" style="border-left: 2px solid #fff;"><a href="<?=base_url('signUp')?>">Sign Up</a></li>
							<li class="login-menu logout_top" style="border-left: 2px solid #fff;"><a>Log Out</a></li>
						</ul>
				
					<div class="col-lg-6 col-md-8 padding-off hidden-sm">
						<div class="row">
							<form class="myform" onsubmit="return false;">
								<div class="col-xs-12" style="
									border: 1px solid #999795;
									padding: 0px;
									border-radius: 4px;
									display: inline-block;
									box-shadow: inset 0 0 5px #dbd8d8;
									top: 8px;">
									<div class="col-sm-9 col-xs-9 padding-off">
										<input type="text" class="form-control" name="MainContentAwb" id="MainContentAwb" value="" placeholder="Enter Your Tracking Number Here" style="
										border: none;
										box-shadow: none;
										background-color: rgba(255, 255, 255, 0);
										height: 38px;
										width: 100%;
										font-size: 12px;
										text-transform: uppercase;">
									</div>
									<div class="col-sm-3 col-xs-3 padding-off">
										<button type="button" class="btn btn-primary" value="Track" onclick="Track()" style="
											border-color: #fff;
											width: 100%;
											padding: 8px 0px;">
											<i class="fas fa-map-marker-alt"></i> Track
										</button>
									</div>
								</div>
							</form>
							<div id="dialog"></div>
							<script>
								function Track(){
									var awb = $('#MainContentAwb').val();
									awb = awb.trim();
									if(awb == ""){
									alert('Please enter Airway Bill for track.');
									/*swal({
									title: 'Oops',
									type: 'error',
									html: 'Please enter Airway Bill for track.',
									confirmButtonColor: '#4e97d8'
									})*/
								}else{
									awb = awb.replace(/\n/g,';').replace(/ /g, ";").replace(/\+/g, ';').replace(/[&\/\#,+()$~%.'":*?<>{}!@^`]/g, '');
									while (awb.indexOf(';;') > -1) {
									awb = awb.replace(';;', ';');
									}
									if(awb.slice(-1) == ';'){
									awb = awb.slice(0,-1);
									}
									if(awb.charAt(0) == ';'){
										awb = awb.substr(1);
									}
									awb = awb.split(';');
									if(awb.length <= 15){
										var displayAWB = awb.join('/');
			
										location.href= '<?=base_url("tracking")?>';
									
								}else{ 
									swal({
										title: 'Oops',
										text: 'You may only key in maximum of 15 AWB/Order.',
										type: 'error',
										confirmButtonColor: '#4e97d8'
				}).then(function() {
					location.reload();
				})
		}
	}
}

</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--START OF TOP STICKY MENU-->
<div id="sticky-anchor"></div>
<div id="sticky" class="hidden-xs">
  <header class="page-header menu">
    <div class="container">
      <div class="row featurette">
        <nav id="bs-navbar" class="collapse navbar-collapse hidden-xs">
          <ul class="nav navbar-nav">
            <li><a href="<?=base_url('')?>" style="padding-left: 0px;"><span class="glyphicon glyphicon-home hidden-sm hidden-md"></span> Home</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
                	<li><a href="<?=base_url('courier')?>">Courier</a></li>
                	<li><a href="<?=base_url('truck')?>">Trucking</a></li>
                </ul>
            </li>
			 <li><a href="<?=base_url('aboutUs')?>">About Us</a>
			 </li>
            
		</ul>
          <ul class="nav navbar-nav navbar-right hidden-sm">
             <li class="login-menu login_top"><a href="<?=base_url('userLogin')?>"><i class="fas fa-user"></i> Log In</a></li>
            <li class="login-menu signUp_top"><a href="<?=base_url('signUp')?>" style="border-left: 1px solid rgba(255, 255, 255, 0.5);">Sign Up</a></li>
			<li class="login-menu logout_top"><a>Log Out</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</div>
 
<!--END OF TOP STICKY MENU--> 

<!--START OF MOBILE TOP MENU-->
<div id="sticky-anchor-mobile"></div>
<div id="sticky" class="mobile-navbar navbar-header visible-xs">
  <a href="index.html"><img src="<?=base_url('assets2/image/logo.png')?>" class="visible-xs hiddenn-sm phone-logo" style="float: left;"></a>
    <div class="mobile-menu pull-right">
      <button type="button" class="navbar-toggle collapsed" onclick="displayMainMenu()"><i class="fas fa-home"></i></button>
    </div>
    <div class="mobile-menu pull-right"> <a href="signUp.html">
      <button type="button" class="navbar-toggle collapsed"><i class="fas fa-user"></i></button>
      </a> </div>
    <div class="mobile-menu pull-right"> <a href="quote.html">
      <button type="button" class="navbar-toggle collapsed"><i class="fas fa-truck"></i></button>
      </a> </div>
</div>
</div>
<!--END OF MOBILE TOP MENU--> 

<!--START OF MOBILE DROP DOWN MENU-->
<div id="MasterMobileMenu" style="display:none; background-color: rgba(255,102,153,0.1);">
  <div class="container"> 
    
    <h3 class="site-nav-title">PROFILE</h3>
    <ul class="nav navbar-nav site-nav-group">
      <li class="site-nav-item login_top"> <a href="<?=base_url('userLogin')?>"><span>Log In</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
      <li class="site-nav-item signUp_top"> <a href="<?=base_url('signUp')?>"><span>Sign Up</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
	  <li class="site-nav-item logout_top"> <a><span>Log Out</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
    </ul>
    <h3 class="site-nav-title">USEFUL LINKS</h3>
    <ul class="nav navbar-nav site-nav-group">
      <li class="site-nav-item"> <a href="<?=base_url()?>"><span>Home</span> <span class="side-menu-box"><i class="fas fa-home"></i></span></a> </li>
      <li class="site-nav-item"> <a href="<?=base_url('aboutUs')?>"><span>About Us</span> <span class="side-menu-box"><i class="fas fa-info-circle"></i></span></a> </li>
      <li class="site-nav-item"> <a href="<?=base_url('courier')?>"><span>Send A Parcel</span> <span class="side-menu-box"><i class="fas fa-truck"></i></span></a> </li>
      
    </ul>
    
  	
   </div>
</div>
<!--END OF MOBILE DROP DOWN MENU--> 

		<div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title" id="exampleModalLabel">Please Choose a serives.</h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body">
						<div class="text-center">
							<a class="btn btn-primary btn-lg btn-block" href="<?=base_url('courier')?>">Courier</a>
							<a class="btn btn-primary btn-lg btn-block" href="<?=base_url('truck')?>">Truck</a>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
					</div>
				</div>
			</div>
		</div>

<script>
function displayMainMenu(){
	var currentStyle = document.getElementById("masterContent").style.display;
	if(currentStyle == "none"){
		document.getElementById("masterContent").style.display = "";
		document.getElementById("masterFooter").style.display = "";
		document.getElementById("MasterMobileMenu").style.display = "none";
	}else{
		document.getElementById("masterContent").style.display = "none";
		document.getElementById("masterFooter").style.display = "none";
		document.getElementById("MasterMobileMenu").style.display = "";
	}
	$('html,body').scrollTop(0);
}

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
	var div_top_mobile = $('#sticky-anchor-mobile').offset().top;
	 
}

$(function () {
	$(window).scroll(sticky_relocate);
    sticky_relocate();
	$(window).on('resize', function() {
		if($(window).width() > 767){
			document.getElementById("MasterMobileMenu").style.display = "none";
			document.getElementById("masterContent").style.display = "";
			document.getElementById("masterFooter").style.display = "";
		}
	});
	
	$(window).focus(function() {
		if($(window).width() > 767){
			document.getElementById("MasterMobileMenu").style.display = "none";
			document.getElementById("masterContent").style.display = "";
			document.getElementById("masterFooter").style.display = "";
		}
	});
});
</script> 

<div id="masterContent" style='background-color: #ebeced';>
	
<style>
.pluginConnectButtonConnected {
	pointer-events: none;
	cursor: default;
}

.glyphicon.glyphicon-camera.camera {
	font-size: 75px;
}

#upload {
	visibility : hidden;
}

#myProgress {
	position: relative;
	width: 100%;
	height: 30px;
	background-color: #ddd;
	visibility : hidden;
}

#myBar {
	position: absolute;
	width: 1%;
	height: 100%;
	background-color: #4CAF50;
	visibility : hidden;
}

.form-control-feedback.epi-info-circled { 
	position: absolute;
	padding-top: 8px;
	color: #d82b1f ;
	font-size: 18px;
}


.btn-box-shadow {
    -webkit-animation: blink 1.0s linear infinite;
    -moz-animation: blink 1.0s linear infinite;
    -ms-animation: blink 1.0s linear infinite;
    -o-animation: blink 1.0s linear infinite;
    animation: blink 1.0s linear infinite;
}

@keyframes blink {
    0% { box-shadow: 0 0 15px #B3003C; }
    50% { box-shadow: none; }
    100% { box-shadow: 0 0 15px #B3003C; }
}

@-webkit-keyframes blink {
    0% { box-shadow: 0 0 15px #B3003C; }
    50% { box-shadow: 0 0 0; }
    100% { box-shadow: 0 0 15px #B3003C; }
}

.total-summary_wrap {display: flex;}
</style>
<div class="container space-small">
	<div class="row"><style>
.qnb-wrapped .nav-tabs>li.active>a, .qnb-wrapped .nav-tabs>li.active>a:focus, .qnb-wrapped .nav-tabs>li.active>a:hover {
	background-color: #f69;
	border: 1px solid #f69;
	color: #fff;
}
.qnb-wrapped .nav-tabs>li>a {background-color: #fff;}
.qnb-wrapped .nav-tabs>li>a.domestic-tab, .qnb-wrapped .nav-tabs>li.active>a.domestic-tab, .qnb-wrapped .nav-tabs>li.active>a:focus.domestic-tab, .qnb-wrapped .nav-tabs>li.active>a.domestic-tab:hover {
	background-color: #f69;
	color: #fff;
	border-color: #f69;
	border-bottom-color: transparent;
}
.qnb-wrapped .nav-tabs>li>a.international-tab, .qnb-wrapped .nav-tabs>li.active>a.international-tab, .qnb-wrapped .nav-tabs>li.active>a:focus.international-tab, .qnb-wrapped .nav-tabs>li.active>a.international-tab:hover {
	background-color: #5cb85c;
    border: 1px solid #5cb85c;
	border-bottom-color: transparent;
    color: #fff;
}
.qnb-wrapped .nav > li > a.domestic-tab:hover, .qnb-wrapped .nav .open>a.domestic-tab:hover {
    background-color: #f69;
    color: #fff;
    border-color: #f69;
	border-bottom: 1px solid #FFF;
}
.qnb-wrapped .nav > li > a.international-tab:hover, .qnb-wrapped .nav .open>a.international-tab:hover {
    background-color: #5cb85c;
    color: #fff;
    border-color: #5cb85c;
	border-bottom: 1px solid #FFF;
}
.qnb-wrapped .nav-tabs {border-bottom: 1px solid #FFF;}
.QuickQuote.international-body {
	background-color: #5cb85c;
}
span.tip {
	position: absolute;
    top: -10px;
    left: 32px;
    font-size: 10px;
    color: #fff;
    background-color: #5cb85c;
    padding: 2px 5px;
}
@media (min-width:768px) and (max-width:991px) {
.paddingoff {
	padding: 0px;
}
}
</style>

<div class="QuickQuoteHighlight3 text-center" style="display:none" onclick="unfocusQuickQuote();"><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/quote-book-adam.png" width="40%"></div>
<div id="dialog"></div>

<div class="col-md-2 padding-off hidden-xs hidden-sm">
	<style>
		.list-group-item:first-child, .list-group-item:last-child { border-radius: 0px;}
		.list-group {border: 1px solid #ddd; margin-bottom: 0px;}
		a.list-group-item, button.list-group-item {
			padding-left: 15px;
			padding-right: 10px;
		}
		.list-group-item, .list-group-item:focus, .list-group-item:hover {
			z-index: 2;
			color: #555;
			background-color: #f9f9f9;
			border-color: #f9f9f9;
		}
		.list-group-item:hover {
			background-color: #e8e8e8;
			color: #000;
			font-weight: 400;
			border-left: 5px solid #00a9b0;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
		}
		.list-group-item>.badge, .nav-pills>a>.badge {
			color: #FFFFFF;
			background-color: #f69;
		}
		.list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
			z-index: 2;
			color: #000;
			background-color: transparent;
			border: 0px;
			border-radius: 0px;
			padding-left: 10px;
			padding-right: 10px;
		}

		.list-group-item.selected, .list-group-item.selected:hover {
			background-color: #f5f5f5;
			border-left: 5px solid #00a9b0;
			font-weight: normal;
			color: #555;
			padding-left: 15px;
		}

		.list-group-item.selected>.badge, .nav-pills>.selected>a>.badge {
			color: #fff;
			background-color: #f69;
		}

		.focusQuickQuoteBlock { 
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1000;
			left: 0;
			top: 0;
			background-color: rgba(0,0,0, 0.85);
			overflow-x: hidden;
		}

		ul.list-group.btn {
			width: 100%;
			border-radius: 0px;
			text-align: left;
			background-color: #f9f9f9;
			border: 0px;
			border-left: 1px solid #ddd;
			border-right: 1px solid #ddd;
			border-bottom: 1px solid #ddd;
			background-color: #f1f1f1;
			padding-right: 0px;
		}

	.ep-nav-tab .ep-cont {
		background-color: #fff;
	}
	@media (min-width:992px) and (max-width:1199px) {
		.list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
			padding-left: 2px;
			padding-right: 2px;
		}
		a.list-group-item, button.list-group-item {
			padding-left: 5px;
			padding-right: 0px;
		}
	}
	</style>
	<!--<div id="focusQuickQuoteBlock" class="focusQuickQuoteBlock" onclick="unfocusQuickQuote();"></div> -->

	<div class="row">
			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group">
					<a href="<?=base_url('user_panel')?>" class="active selected list-group-item">
						<i class="fas fa-home"></i> Dashboard
					</a>
				</ul>
			</div>

			<div style="border-top: 1px solid #ddd;">
				<ul class="list-group btn" data  -toggle="collapse" data-target="#SendParcel" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-truck"></i> Send Parcel<i class="epi-plus-squared-alt epi pull-right"></i>
					</a>
				</ul>
				<div>
					<div class="collapse dropdown" id="SendParcel">
						<ul class="list-group">
							<a onclick="focusQuickQuote()" class="list-group-item" style="cursor: pointer;" id="Send_A_Parcel">Send A Parcel</a>
  	
							<a href="" class="[:ac_bulkupload:] list-group-item" id ="Bulk_Upload">Bulk Upload</a>
						</ul>
					</div>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyBookings" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
					<i class="fas fa-shopping-cart"></i> My Cart<i class="epi-plus-squared-alt epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="MyBookings">
					<ul class="list-group">
						<a href="" class="[:ac_book_pending:] list-group-item" id="Pending_Bookings">Pending Items <span class="badge" id="pending">0</span></a>
						<a href="" class="[:ac_book_expired:] list-group-item" id="Expired_Bookings">Action Required <span class="badge" id="expire">0</span></a>
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#AllShipments" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
					<i class="fas fa-truck"></i> All Shipments<i class="epi-plus-squared-alt epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="AllShipments">
					<ul class="list-group">
						<a href="<?=base_url('domestic_report')?>" class=" list-group-item" id="Domestic">Domestic</a>
  	
						<a href="<?=base_url('international_report')?>" class=" list-group-item" id="International">International</a>
						
						<a href="<?=base_url('international_report')?>" class=" list-group-item" id="International">Trucking</a>
	  	
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyAccount" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-user"></i> My Account<i class="epi-plus-squared-alt epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="MyAccount">
					<ul class="list-group">
						<a href="" class=" list-group-item" id="Profile_Setting">Profile Setting</a>
						<a href="" class=" list-group-item" id="Address_Book">Address Book</a>
						<a href="" class=" list-group-item" id="Referral">Referral</a>
						<a href="" class=" list-group-item" id="Flyer_Request">Flyer Request
							<span class="badge" data-toggle="tooltip" data-original-title="Unclaim Flyer">0</span>  <!-- yz changes -->
						</a>
	  
						<a href="" class="[:ac_parcelreport:] list-group-item" id="Parcel_Report">
							Parcel Report
							<span class="badge" data-toggle="tooltip" data-original-title="Unseen Message">0</span> <!-- yz changes -->
						</a>
	  
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#Tools" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-wrench"></i> Tools <i class="epi-plus-squared-alt epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="Tools">
					<ul class="list-group">
						<a href="" class="list-group-item" id="Bulk_Delivery_Tools">Bulk Delivery Tools
						</a>
						<a href="" target="_blank" class="list-group-item" id="Widgets">Widgets</a>
						<a onclick = "window.open('http://wherevership.com/volumetricCalcualator', 'Wherevership  Calculator Popout', 'width=700, height=500')" style="cursor: pointer;" class="list-group-item" id="Volumetric_Calculator">Volumetric Calculator</a>
						<a href="" target="_blank" class="list-group-item" id="EasyTrack">EasyTrack</a>
						<a href="" target="_blank" class="[:ac_fragile:] list-group-item" id="Fragile_Logo">Fragile Logo</a>
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#HelpSupport" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-info-circle"></i> Help & Support<i class="epi-plus-squared-alt epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="HelpSupport">
					<ul class="list-group">
						<a href="" target="_blank" class="list-group-item" id="Contact_Us">Contact Us</a>
						<a href="" target="_blank" class="list-group-item" id="FAQ">FAQ</a>
						<a href="" target="_blank" class="list-group-item" id="Tutorial">Tutorial</a>
						<a href="" target="_blank" class="list-group-item" id="Tutorial">Tour Guide <span class="label label-success">New</span></a>
	
					</ul>
				</div>
			</div>
		</div>
	
	</div>

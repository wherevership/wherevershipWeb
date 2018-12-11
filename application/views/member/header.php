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

<link href="<?=base_url('assets2/css/karla.css')?>" rel="stylesheet">

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

<!--<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
-->
<!--
<script src="<?=base_url('assets2/js/firConfig.js')?>"></script>
-->
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
							<li><i class="fas fa-user"></i> <a id="welcome" <?=!empty($id)?base_url('member/user_panel'):base_url('userLogin')?>><?=!empty($id)?'Hi,'.' '.$username:'Hi, Welcome'?></a></li>
						<!--	<li><i class="fas fa-truck"></i> <a data-toggle="modal" data-target="#services">Send A Parcel</a></li> -->
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
							<li class="login-menu login_top" <?=!empty($id)? 'style="display:none;"':''?>><a href="<?=base_url('userLogin')?>"><i class="fas fa-user"></i>Log In</a></li>
							<li class="login-menu signUp_top" style="border-left: 2px solid #fff;" <?=!empty($id)? 'style="display:none;"':''?>><a href="<?=base_url('signUp')?>">Sign Up</a></li>
							<li class="login-menu logout_top" style="border-left: 2px solid #fff;" <?=!empty($id)? '':'style="display:none;"'?>><a href='<?=base_url('member/logOut')?>'>Log Out</a></li>
						</ul>
				
				<!--	<div class="col-lg-6 col-md-8 padding-off hidden-sm">
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

function logout() {
		firebase.auth().signOut().then(function() {
								
								window.location.href = '<?=base_url()?>';
							}).catch(function(error) {
								 swal({
									title: 'Oops',
									type: 'error',
									html: error,
									confirmButtonColor: '#4e97d8'
									})
									
				
						});
		
	}

</script>
					</div>
				</div> -->
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
			<!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
                	<li><a href="<?=base_url('courier')?>">Courier</a></li>
                	<li><a href="<?=base_url('truck')?>">Trucking</a></li>
                </ul>
            </li> -->
			 <li><a href="<?=base_url('aboutUs')?>">About Us</a>
			 </li>
            
		</ul>
          <ul class="nav navbar-nav navbar-right hidden-sm">
             <li class="login-menu login_top" <?=!empty($id)? 'style="display:none;"':''?>><a href="<?=base_url('userLogin')?>"><i class="fas fa-user"></i> Log In</a></li>
            <li class="login-menu signUp_top" <?=!empty($id)? 'style="display:none;"':''?>><a href="<?=base_url('signUp')?>" style="border-left: 1px solid rgba(255, 255, 255, 0.5);">Sign Up</a></li>
			<li class="login-menu logout_top" <?=!empty($id)? '':'style="display:none;"'?>><a href='<?=base_url('member/logOut')?>'>Log Out</a></li>
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
  <a href="<?=base_url('')?>"><img src="<?=base_url('assets2/image/logo.png')?>" class="visible-xs hiddenn-sm phone-logo" style="float: left;"></a>
    <div class="mobile-menu pull-right">
      <a class="navbar-toggle collapsed" onclick="displayMainMenu()"><i class="fas fa-bars"></i></a>
    </div>
    <div class="mobile-menu pull-right"> 
      <a  class="navbar-toggle collapsed" id="log_in_mobile"><i class="fas fa-user"></i></a>
    </div>
   <!-- <div class="mobile-menu pull-right">
      <a class="navbar-toggle collapsed" data-toggle="modal" data-target="#services"><i class="fas fa-truck"></i></a>
    </div> -->
</div>
</div>
<!--END OF MOBILE TOP MENU--> 

<!--START OF MOBILE DROP DOWN MENU-->
<div id="MasterMobileMenu" style="display:none; background-color: rgba(0,169,176,0.1);">
  <div class="container"> 
    
    <h3 class="site-nav-title">PROFILE</h3>
    <ul class="nav navbar-nav site-nav-group">
      <li class="site-nav-item login_top" <?=!empty($id)? 'style="display:none;"':''?> > <a href="<?=base_url('userLogin')?>"><span>Log In</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
      <li class="site-nav-item signUp_top" <?=!empty($id)? 'style="display:none;"':''?>> <a href="<?=base_url('signUp')?>"><span>Sign Up</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
	  <li class="site-nav-item logout_top" <?=!empty($id)? '':'style="display:none;"'?>> <a onclick='logout()'><span>Log Out</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
    </ul>
    <h3 class="site-nav-title">USEFUL LINKS</h3>
    <ul class="nav navbar-nav site-nav-group">
      <li class="site-nav-item"> <a href="<?=base_url()?>"><span>Home</span> <span class="side-menu-box"><i class="fas fa-home"></i></span></a> </li>
      <li class="site-nav-item"> <a href="<?=base_url('aboutUs')?>"><span>About Us</span> <span class="side-menu-box"><i class="fas fa-info-circle"></i></span></a> </li>
      <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> Send Parcel <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-truck"></i></span></a>
        <ul class="dropdown-menu" role="menu">
         
			  <li><a href="<?=base_url('courier')?>">Send A Parcel</a></li>
             <!-- <li><a href="./?pg=MyAccount&tab=BulkUpload">Bulk Upload</a></li> -->
            
        </ul>
      </li>
    <!--  <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> My Cart <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-shopping-cart"></i></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?=base_url('member/pending_items')?>">Pending Items</a></li>
          <li><a href="<?=base_url('member/actions_required')?>">Action Required</a></li>
        </ul>
      </li> -->
      <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> My Credit <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-shopping-basket"></i></span></a>
        <ul class="dropdown-menu" role="menu">
        	<li><a href="<?=base_url('member/credit_history')?>">Credit History</a></li>
        	<li><a href="<?=base_url('member/invoice')?>">Invoices</a></li>
        </ul>
      </li>
      <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> All Shipments <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-truck"></i></span></a>
        <ul class="dropdown-menu" role="menu">
			<li><a href="<?=base_url('member/domestic_report')?>">Domestic</a></li>
			<li><a href="<?=base_url('member/international_report')?>">International</a></li>
		<!--	<li><a href="javascript:comingsoon();">truck</a></li>  -->
		  
        </ul>
      </li>
  <!--    <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> My Credits <span class="caret"></span></span> <span class="side-menu-box"><i class="far fa-money-bill-alt"></i></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?=base_url('member/top_up')?>">Top Up</a></li>
          <li><a href="<?=base_url('member/credit_history')?>">Credit History</a></li>
          <li><a href="<?=base_url('member/top_up_history')?>">Top Up History</a></li>
        </ul>
      </li>
      -->
      <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>My Account <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?=base_url('member/personal_profile')?>">Profile Setting</a></li>
          <li><a href="<?=base_url('member/address_book')?>">Address Book</a></li>
         <!-- <li><a href="./?pg=MyAccount&tab=Referral">Referral</a></li> -->
    		  
              <!--  <li><a href="./?pg=MyAccount&tab=FlyerModule">Flyer Request</a></li> -->
    		   
          
              <!--  <li><a href="./?pg=MyAccount&tab=ParcelReport">Parcel Report</a></li> -->
            
        </ul>
      </li>
      <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> Tools<span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-wrench"></i></span></a>
        <ul class="dropdown-menu" role="menu">
			<li><a onclick = "window.open('<?=base_url('volumetricCalcualator')?>', 'Wherevership Calculator Popout', 'width=700, height=500')">Volumetric Calculator</a></li>
         
        </ul>
      </li>
      <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> Help & Support <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-info-circle"></i></span></a>
        <ul class="dropdown-menu" role="menu">
		
		
		
          <li><a href="<?=base_url('contactUs')?>">Contact Us</a></li>
          <li><a href="<?=base_url('faq')?>">FAQ</a></li>
          
        </ul>
      </li>
    </ul>
    
  	
   </div>
</div>
<!--END OF MOBILE DROP DOWN MENU--> 

		<!--END OF MOBILE DROP DOWN MENU--> 
		
		<div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			
			<div class="modal-dialog" role="document" id="services1">
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
		
		
<style>

@media (max-width: 767px) {
  #services1{
        max-width: 650px; !important
  }


	
</style>

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
				
				<ul class="list-group">
					<a href="<?=base_url('member/user_panel')?>" class="list-group-item" id="dashboard">
						<i class="fas fa-home"></i> Dashboard
					</a>
				</ul>
			

			<div style="border-top: 1px solid #ddd;">
				<ul class="list-group btn" data-toggle="collapse" data-target="#SendParcel" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-truck"></i> Send Parcel<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>
				<div>
					<div class="collapse dropdown" id="SendParcel">
						<ul class="list-group">
							<a href="<?=base_url('member/courier')?>" class= "list-group-item" id="Send_A_Parcel">Courier</a>
					<!--		<a href="javascript:comingsoon();" class= "list-group-item" id ="Truck">Trucking</a> -->
  	
						<!--	<a href="<?=base_url('member/bulk_upload')?>" class="[:ac_bulkupload:] list-group-item" id ="Bulk_Upload">Bulk Upload</a> -->
						</ul>
					</div>
				</div>
			</div>
<!--
			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyBookings" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
					<i class="fas fa-shopping-cart"></i> My Cart<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="MyBookings">
					<ul class="list-group">
						<a href="<?=base_url('member/pending_items')?>" class="[:ac_book_pending:] list-group-item" id="Pending_Bookings">Pending Items <span class="badge" id="pending">0</span></a>
						<a href="<?=base_url('member/actions_required')?>" class="[:ac_book_expired:] list-group-item" id="Action_Required">Action Required <span class="badge" id="expire">0</span></a>
					</ul>
				</div>
			</div>
			-->
			<div style="border-top: 1px solid #ddd;">
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyOrders" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
					<i class="fas fa-shopping-basket"></i> My Credit<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>	
			 
				<div class="collapse dropdown" id="MyOrders">
					<ul class="list-group">
					<a href="<?=base_url('member/credit_history')?>" class="list-group-item" id="Credit_History" >Credit History</a>
					<a href="<?=base_url('member/invoice')?>" class=" list-group-item" id="Order_Invoices">Invoices</a>
				</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#AllShipments" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
					<i class="fas fa-truck"></i> All Shipments<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="AllShipments">
					<ul class="list-group">
						<a href="<?=base_url('member/domestic_report')?>" class=" list-group-item" id="Domestic">Domestic</a>
  	
						<a href="<?=base_url('member/international_report')?>" class=" list-group-item" id="International">International</a>
						
					<!-- <a href="javascript:comingsoon();" class=" list-group-item" id="Trucking">Trucking</a>  -->
	  	
					</ul>
				</div>
			</div>
	<!--		
			<div>
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyCredits" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
					<i class="far fa-money-bill-alt"></i> My Credits<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="MyCredits">
					<ul class="list-group">
						<a href="<?=base_url('member/top_up')?>" class=" list-group-item" id="Top_Up">Top Up</a>
						<a href="<?=base_url('member/credit_history')?>" class=" list-group-item" id="Credit_History">Credit History</a>
						<a href="<?=base_url('member/top_up_history')?>" class="[:ac_history:] list-group-item" id="Top_Up_History">Top Up History</a>
					</ul>
				</div>
			</div>
-->
			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyAccount" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-user"></i> My Account<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="MyAccount">
					<ul class="list-group">
						<a href="<?=base_url('member/personal_profile')?>" class=" list-group-item" id="Profile_Setting">Profile Setting</a>
						<a href="<?=base_url('member/address_book')?>" class=" list-group-item" id="Address_Book">Address Book</a>
						<!--<a href="" class=" list-group-item" id="Referral">Referral</a> -->
						<!--<a href="" class=" list-group-item" id="Flyer_Request">Flyer Request
							<span class="badge" data-toggle="tooltip" data-original-title="Unclaim Flyer">0</span>  <!-- yz changes 
						</a> -->
	  
						<!--<a href="" class="[:ac_parcelreport:] list-group-item" id="Parcel_Report">
							Parcel Report
							<span class="badge" data-toggle="tooltip" data-original-title="Unseen Message">0</span>  yz changes 
						</a> -->
	  
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#Tools" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-wrench"></i> Tools <i class="fas fa-plus pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="Tools">
					<ul class="list-group">
						
						<a onclick = "window.open('<?=base_url('volumetricCalcualator')?>', 'Wherevership  Calculator Popout', 'width=700, height=500')" style="cursor: pointer;" class="list-group-item" id="Volumetric_Calculator">Volumetric Calculator</a>
					
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#HelpSupport" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-info-circle"></i> Help & Support<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="HelpSupport">
					<ul class="list-group">
						<a href="<?=base_url('contactUs')?>" target="_blank" class="list-group-item" id="Contact_Us">Contact Us</a>
						<a href="<?=base_url('faq')?>" target="_blank" class="list-group-item" id="FAQ">FAQ</a>
					</ul>
				</div>
			</div>
		</div>
	
	</div>
	
	<script>
var sidebarstatus = '000000';



$('.list-group-item').click(function (e) {
	var data = $(e.target).parent().parent().attr('data-target');
	$(data).on("shown.bs.collapse", function(){
		$(e.target).parent().children().eq(1).removeClass('fa-plus');
		$(e.target).parent().children().eq(1).addClass('fa-minus');
	/*	var status = "";
		if(data == "#SendParcel"){
			status = {status_SendParcel : 1};
		}else if(data == "#MyBookings"){
			status = {status_MyBookings : 1};
		}else if(data == "#MyOrders"){
			status = {status_MyOrders : 1};	
		}else if(data == "#AllShipments"){
			status = {status_AllShipments : 1}; 
		}else if(data == "#MyCredits"){
			status = {status_MyCredits : 1};
		}else if(data == "#MyAccount"){
			status = {status_MyAccount : 1}; 
		}else if(data == "#Tools"){
			status = {status_Tools : 1};
		}else if(data == "#HelpSupport"){
			status = {status_HelpSupport : 1};
		} */
	/*	$.ajax({
			type : "post",
			url : "./?ac=updateStatus",
			data : status,
			success : function(result){
				result = $.trim(result);
			}
		}); */
	});
	$(data).on("hidden.bs.collapse", function(){
		$(e.target).parent().children().eq(1).removeClass('fa-minus');
		$(e.target).parent().children().eq(1).addClass('fa-plus');
/*		var status = "";
		if(data == "#SendParcel"){
			status = {status_SendParcel : 0}; 
		}else if(data == "#MyBookings"){
			status = {status_MyBookings : 0}; 
		}else if(data == "#MyOrders"){
			status = {status_MyOrders : 0};	
		}else if(data == "#AllShipments"){
			status = {status_AllShipments : 0};  
		}else if(data == "#MyCredits"){
			status = {status_MyCredits : 0}; 
		}else if(data == "#MyAccount"){
			status = {status_MyAccount : 0}; 
		}else if(data == "#Tools"){
			status = {status_Tools : 0}; 
		}else if(data == "#HelpSupport"){
			status = {status_HelpSupport : 0}; 
		} */
	/*	$.ajax({
			type : "post",
			url : "./?ac=updateStatus",
			data : status,
			success : function(result){
				result = $.trim(result);
			}
		}); */
	});
});

$('ul[data-toggle=collapse]').click(function (e) {
	var data = $(e.target).parent().attr('data-target');
	$(data).on("shown.bs.collapse", function(){
		$(e.target).children().eq(1).removeClass('fa-plus');
		$(e.target).children().eq(1).addClass('fa-minus');
	/*	var status = "";
		if(data == "#SendParcel"){
			status = {status_SendParcel : 1};
		}else if(data == "#MyBookings"){
			status = {status_MyBookings : 1};
		}else if(data == "#MyOrders"){
			status = {status_MyOrders : 1};	
		}else if(data == "#AllShipments"){
			status = {status_AllShipments : 1}; 
		}else if(data == "#MyCredits"){
			status = {status_MyCredits : 1};
		}else if(data == "#MyAccount"){
			status = {status_MyAccount : 1}; 
		}else if(data == "#Tools"){
			status = {status_Tools : 1};
		}else if(data == "#HelpSupport"){
			status = {status_HelpSupport : 1};
		} */
	/*	$.ajax({
			type : "post",
			url : "./?ac=updateStatus",
			data : status,
			success : function(result){
				result = $.trim(result);
			}
		}); */
	});
	$(data).on("hidden.bs.collapse", function(){
		$(e.target).children().eq(1).removeClass('fa-minus')
		$(e.target).children().eq(1).addClass('fa-plus');
	/*	var status = ""
		if(data == "#SendParcel"){
			status = {status_SendParcel : 0}; 
		}else if(data == "#MyBookings"){
			status = {status_MyBookings : 0}; 
		}else if(data == "#MyOrders"){
			status = {status_MyOrders : 0};	
		}else if(data == "#AllShipments"){
			status = {status_AllShipments : 0};  
		}else if(data == "#MyCredits"){
			status = {status_MyCredits : 0}; 
		}else if(data == "#MyAccount"){
			status = {status_MyAccount : 0}; 
		}else if(data == "#Tools"){
			status = {status_Tools : 0}; 
		}else if(data == "#HelpSupport"){
			status = {status_HelpSupport : 0}; 
		}  */
	/*	$.ajax({
			type : "post",
			url : "./?ac=updateStatus",
			data : status,
			success : function(result){
				result = $.trim(result);
			}
		}); */
	});
});

if(sidebarstatus.substring(0, 1) == 1){
	$('#SendParcel').collapse();
	$("ul[data-target='#SendParcel']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
//if(sidebarstatus.substring(1, 2) == 1){
	//$('#MyBookings').collapse();
//	$("ul[data-target='#MyBookings']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
//}

if(sidebarstatus.substring(1, 2) == 1){
	$('#MyOrders').collapse();
	$("ul[data-target='#MyOrders']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}

if(sidebarstatus.substring(2, 3) == 1){
	$('#AllShipments').collapse();
	$("ul[data-target='#AllShipments']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
//if(sidebarstatus.substring(3, 4) == 1){
//	$('#MyCredits').collapse();
//	$("ul[data-target='#MyCredits']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
//}

if(sidebarstatus.substring(3, 4) == 1){
	$('#MyAccount').collapse();
	$("ul[data-target='#MyAccount']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
if(sidebarstatus.substring(4, 5) == 1){
	$('#Tools').collapse();
	$("ul[data-target='#Tools']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
if(sidebarstatus.substring(5, 6) == 1){
	$('#HelpSupport').collapse();
	$("ul[data-target='#HelpSupport']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}

$('#expandForm input').on('change', function() {
	var status = $('input[name="acceptNotice"]:checked', '#expandForm').val();
	if(status=="0"){
		var fullstatus = {fullstatus : 1};
		$(".collapse.dropdown:not(.in)").collapse('show');
		$(".fas").removeClass('fa-plus');
		$(".fas").addClass('fa-minus');
		
	}else if(status=="1"){
		var fullstatus = {fullstatus : 0};
		$(".collapse.in").collapse('hide');
		$(".fas").removeClass('fa-plus');
		$(".fas").addClass('fa-minus');
		
	}
});

if(sidebarstatus == 111111){
	$('input:radio[name=acceptNotice][value="0"]').prop('checked', true);
	$(".fas").removeClass('fa-plus');
	$(".fas").addClass('fa-minus');
}else if(sidebarstatus == 000000){
	$('input:radio[name=acceptNotice][value="1"]').prop('checked', true);
}


var bookDoneCount = false;
var unpaidDoneCount = false;
var bookCountAjax;
var unpaidCountAjax;

$(window).load(function(){
	getUnpaidOrder();
	getBookCount();
	setInterval(function(){
		getUnpaidOrder();
		getBookCount();
	}, 600000);
	$('.hover[data-toggle="tooltip"]').tooltip({
		animated: 'fade',
		html: true
	});
});

function comingsoon() {
	swal({
				title: 'Coming Soon!!',
				type: 'error',
				html: 'this function will coming soon',
				confirmButtonColor: '#4e97d8'
				})
		
	
	
}

function getBookCount(){
	<!-- yz changes -->
	var mssg="0";
	var flyerUnclaim="0";
	if(mssg != 0 || flyerUnclaim != 0)
	{
		$('#MyAccount').collapse();
		$("ul[data-target='#MyAccount']").children().children().eq(1).removeClass('epi-plus-squared-alt').addClass('epi-minus-squared-alt');
	}
	/*
	bookCountAjax = $.ajax({
		type : "post",
		url : "./?ac=getBookingCount",
		data : '',
		success : function(result){
			bookDoneCount = true;
			result = $.trim(result);
			if(result != "fail"){
				result = result.split(',');
				$('span#pending').text(result[0]);
				$('span#expire').text(result[1]);
				if((result[0])>0 || (result[1])>0){
					$('#MyBookings').collapse();
					$("ul[data-target='#MyBookings']").children().children().eq(1).removeClass('epi-plus-squared-alt').addClass('epi-minus-squared-alt');
				}
			}else{
				swal({
					title: 'Opps!',
					text: "You've been idle for some time. For security purposes, kindly relogin..",
					type: 'info',
					confirmButtonColor: '#4e97d8'
					}).then(function() {
						location.reload();
					})
			}
		}
	});
	*/
	/*$.ajax({
		type : "post",
		async : true,
		url : "./?ac=getUnpaidOrderCount",
		data : '',
		success : function(result){
			result = $.trim(result);
			if(result != "fail"){
				//split result
				result = result.split(",");
				$('span#unpaid').text(result[0]);
				$('span#partialpaid').text(result[1]);
				if(result[0]>0 || result[1]>0){
					$('#MyOrders').collapse();
					$("ul[data-target='#MyOrders']").children().children().eq(1).removeClass('epi-plus-squared-alt').addClass('epi-minus-squared-alt');
				}
			}else{
				swal({
					title: 'Opps!',
					text: "You've been idle for some time. For security purposes, kindly relogin..",
					type: 'info',
					confirmButtonColor: '#4e97d8'
					}).then(function() {
						location.reload();
					})
			}
		}
	});*/
}

function getUnpaidOrder() {
	/*
	unpaidCountAjax = $.ajax({
		type : "post",
		async : true,
		url : "./?ac=getUnpaidOrderCount",
		data : '',
		success : function(result){
			unpaidDoneCount = true;
			result = $.trim(result);
			if(result != "fail"){
				//split result
				result = result.split(",");
				$('span#unpaid').text(result[0]);
				$('span#partialpaid').text(result[1]);
				if(result[0]>0 || result[1]>0){
					$('#MyOrders').collapse();
					$("ul[data-target='#MyOrders']").children().children().eq(1).removeClass('epi-plus-squared-alt').addClass('epi-minus-squared-alt');
				}
			}else{
				swal({
					title: 'Opps!',
					text: "You've been idle for some time. For security purposes, kindly relogin..",
					type: 'info',
					confirmButtonColor: '#4e97d8'
					}).then(function() {
						location.reload();
					})
			}
		}
	});   */
}


/*
$('.list-group').click(function(e){
	var tab_status = {tabstatus : $(e.target).attr('id')};
	$.ajax({
		type : "post",
		url : "./?ac=updateTabStatus",
		data : tab_status,
		success : function(result){
		result = $.trim(result);
		}
	});
});
*/

</script>

<!DOCTYPE html>
<html>
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

<script type="text/javascript" src="<?=base_url('assets2/js/quote.js?')?>"></script>

<script type="text/javascript" src="<?=base_url('assets2/js/quickquote.js?v=1.1')?>"></script>

<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>

<script src="<?=base_url('assets2/js/firConfig.js')?>"></script>
<!--
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js"></script>
<script>
-->
</script>
<!--
<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/944118998/?value=0&amp;guid=ON&amp;script=0"/>
  </div>
</noscript>
-->

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
							<li class="login-menu logout_top" style="border-left: 2px solid #fff;"><a onclick='logout()'>Log Out</a></li>
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
			<li class="login-menu logout_top"><a onclick='logout()'>Log Out</a></li>
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
    <div class="mobile-menu pull-right">
      <a class="navbar-toggle collapsed" data-toggle="modal" data-target="#services"><i class="fas fa-truck"></i></a>
    </div>
</div>
</div>
<!--END OF MOBILE TOP MENU--> 

<!--START OF MOBILE DROP DOWN MENU-->
<div id="MasterMobileMenu" style="display:none; background-color: rgba(0,169,176,0.1);">
  <div class="container"> 
    
    <h3 class="site-nav-title">PROFILE</h3>
    <ul class="nav navbar-nav site-nav-group">
      <li class="site-nav-item login_top"> <a href="<?=base_url('userLogin')?>" class="login_mobile"><span>Log In</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
      <li class="site-nav-item signUp_top"> <a href="<?=base_url('signUp')?>" ><span>Sign Up</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
	  <li class="site-nav-item logout_top"> <a><span onclick='logout()'>Log Out</span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a> </li>
    </ul>
    <h3 class="site-nav-title">USEFUL LINKS</h3>
    <ul class="nav navbar-nav site-nav-group">
      <li class="site-nav-item"> <a href="<?=base_url()?>"><span>Home</span> <span class="side-menu-box"><i class="fas fa-home"></i></span></a> </li>
      <li class="site-nav-item"> <a href="<?=base_url('aboutUs')?>"><span>About Us</span> <span class="side-menu-box"><i class="fas fa-info-circle"></i></span></a> </li>
      <li class="site-nav-item"> <a href="<?=base_url('courier')?>"><span>Courier</span> <span class="side-menu-box"><i class="fas fa-truck"></i></span></a> </li>
	  <li class="site-nav-item"> <a href="<?=base_url('truck')?>"><span>Truck</span> <span class="side-menu-box"><i class="fas fa-truck"></i></span></a> </li>
      
    </ul>
    
  	
   </div>
</div>

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
	
    if (window_top > div_top || window_top > div_top_mobile) {
        $('#sticky').addClass('stick');
		$('#sticky').addClass('animated fadeInDownBig');
		$('div#sticky.navbar-header.visible-xs').addClass('stick');
		$('div#sticky.navbar-header.visible-xs').addClass('animated fadeInDownBig');
    } else {
        $('#sticky').removeClass('stick');
		$('#sticky').removeClass('animated fadeInDownBig');
		$('div#sticky.navbar-header.visible-xs').removeClass('stick');
		$('div#sticky.navbar-header.visible-xs').removeClass('animated fadeInDownBig');
    }
	 
}
</script> 
<div id="text"></div>


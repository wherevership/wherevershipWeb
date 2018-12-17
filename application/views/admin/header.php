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

<link href="<?=base_url('assets2/css/style.css?v=1.1')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/jquery.dataTables.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/quote.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/fontawesome-all.css')?>" rel="stylesheet">

<link href="<?=base_url('assets2/css/fs-model.css')?>" rel="stylesheet">

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

<script type="text/javascript" src="<?=base_url('assets2/js/fs-model.js')?>"></script>

<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>

<!--<script src="<?=base_url('assets2/js/firConfig.js')?>"></script>  -->
<script>

</script>



</head>
<body>
	
	<style>
		.welcomelabel {
			background-color: #00a9b0;
			padding: 1px 0;
		}
		
		.welcomelabel h4 {
			text-align: center;
			color: #fff;
		}
		
	</style>
 
	<div class="welcomelabel">
		<h4><?=isset($username)?$username:'unknown user'?></h4>
		<div id="sticky" class="mobile-navbar navbar-header visible-xs">
		<div class="mobile-menu pull-right">
			<a class="navbar-toggle collapsed" onclick="displayMainMenu()"><i class="fas fa-bars"></i></a>
		</div>
		</div>
	</div>
	
	
		<ul class="nav navbar-nav navbar-right visible-sm">
			<li><a class="navbar-toggle collapsed" onclick="displayMainMenu()"><i class="fas fa-bars"></i></a></li>
		</ul>
		
		
	<!--START OF MOBILE DROP DOWN MENU-->
<div id="MasterMobileMenu" style="display:none; background-color: rgba(0,169,176,0.1);">
  <div class="container"> 
	<ul class="nav navbar-nav site-nav-group">
      <li class="site-nav-item"> <a href="<?=base_url()?>"><span>Home</span> <span class="side-menu-box"><i class="fas fa-home"></i></span></a> </li>
      <li class="site-nav-item"> <a href="<?=base_url('admin/dashboard')?>"><span>Dashboard</span> <span class="side-menu-box"><i class="fas fa-home"></i></span></a> </li>
      <li class="site-nav-item dropdown"> 
		<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Requester <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-truck"></i></span></a>
        <ul class="dropdown-menu" role="menu">
         
			  <li><a href="<?=base_url('admin/add_requester')?>">Add Requester</a></li>
			  <li><a href="<?=base_url('admin/requester_list')?>">Requester List</a></li>
             
           </ul>
      </li>
	 <li class="site-nav-item dropdown"> 
		<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Driver <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-truck"></i></span></a>
        <ul class="dropdown-menu" role="menu">
         
			  <li><a href="<?=base_url('admin/add_driver')?>">Add Driver</a></li>
			  <li><a href="<?=base_url('admin/driver_list')?>">Driver List</a></li>
             
           </ul>
      </li>
	<li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Admin <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-shopping-basket"></i></span></a>
        <ul class="dropdown-menu" role="menu">
        	<li><a href="<?=base_url('admin/add_admin')?>">Add Admin</a></li>
        	<li><a href="<?=base_url('admin/admin_list')?>">Admin List</a></li>
        </ul>
      </li>
      <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span> All Shipments <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-truck"></i></span></a>
        <ul class="dropdown-menu" role="menu">
			<li><a href="<?=base_url('admin/domestic')?>">Domestic</a></li>
			<li><a href="<?=base_url('admin/international')?>">International</a></li>
			<li><a href="<?=base_url('admin/trucking')?>">truck</a></li>
		  
        </ul>
      </li>
		<li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Credits <span class="caret"></span></span> <span class="side-menu-box"><i class="far fa-money-bill-alt"></i></span></a>
        <ul class="dropdown-menu" role="menu">
          <!--<li><a href="<?=base_url('member/top_up')?>">Top Up</a></li> -->
          <li><a href="<?=base_url('admin/credit_history')?>">Credit History</a></li>
          <!--<li><a href="<?=base_url('member/top_up_history')?>">Top Up History</a></li> -->
        </ul>
      </li>
     <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Costing <span class="caret"></span></span> <span class="side-menu-box"><i class="far fa-money-bill-alt"></i></span></a>
        <ul class="dropdown-menu" role="menu">
			<li><a href="<?=base_url('admin/international_cost')?>">International Costing</a></li>
			<li><a href="<?=base_url('admin/domestic_cost')?>">Domestic Costing</a></li>
			<li><a href="<?=base_url('admin/trucking_cost')?>">Trucking Costing</a></li>
        </ul>
      </li>
      <li class="site-nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>My Account <span class="caret"></span></span> <span class="side-menu-box"><i class="fas fa-user"></i></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?=base_url('admin/profile_setting')?>">Profile Setting</a></li>
          <li><a href="<?=base_url('admin/logOut')?>">Log Out</a></li>
        
         </ul>
      </li>
      
    </ul>
    
  	
   </div>
</div>
<!--END OF MOBILE DROP DOWN MENU--> 
		
		<div class="container-fluid space-small" id="masterContent">
	
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
	
	.logo {
				
				background-size: 120px;
				background-position: center top;
				background-repeat: no-repeat;
				height: 140px;
				font-size: 20px;
				display: block;
				margin-bottom: 10px;
				
				
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

			<div class="row">
				<div style="margin-bottom: 10px;">
				<a href="<?=base_url()?>">
					<img src="<?=base_url('assets2/image/logo.png')?>" class="logo hidden-xs" style="text-align:center;">
				</a>
				</div>
				<div style="border-top: 1px solid #ddd;">	
					<ul class="list-group">
						<a href="<?=base_url('admin/dashboard')?>" class="list-group-item">
							<i class="fas fa-home"></i> Dashboard
					</a>
				</ul>
			</div>

				<div style="border-top: 1px solid #ddd;">
					<ul class="list-group btn" data-toggle="collapse" data-target="#requester" aria-expanded="false" aria-controls="collapseExample">
						<a class="list-group-item active">
							<i class="fas fa-truck"></i> Requester<i class="fas fa-plus pull-right"></i>
						</a>
					</ul>
					<div>
						<div class="collapse dropdown" id="requester">
							<ul class="list-group">
								<a href="<?=base_url('admin/add_requester')?>" class="list-group-item"  id="add_requester">Add Requester</a>
  	
								<a href="<?=base_url('admin/requester_list')?>" class=" list-group-item" id ="requester_list">Requster List</a>
							</ul>
						</div>
					</div>
				</div>
				
				<div style="border-top: 1px solid #ddd;">
					<ul class="list-group btn" data-toggle="collapse" data-target="#driver" aria-expanded="false" aria-controls="collapseExample">
						<a class="list-group-item active">
							<i class="fas fa-truck"></i> Driver<i class="fas fa-plus pull-right"></i>
						</a>
					</ul>
					<div>
						<div class="collapse dropdown" id="driver">
							<ul class="list-group">
								<a href="<?=base_url('admin/add_driver')?>" class="list-group-item"  id="add_driver">Add Driver</a>
  	
								<a href="<?=base_url('admin/driver_list')?>" class="list-group-item" id ="driver_list">Driver List</a>
							</ul>
						</div>
					</div>
				</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#admin" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
					<i class="fas fa-shopping-cart"></i> Admin<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="admin">
					<ul class="list-group">
						<a href="<?=base_url('admin/add_admin')?>" class="list-group-item" id="add_admin">Add Admin </a>
						<a href="<?=base_url('admin/admin_list')?>" class="list-group-item" id="admin_list">Admin List </a>
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
						<a href="<?=base_url('admin/domestic')?>" class=" list-group-item" id="Domestic">Domestic</a>
  	
						<a href="<?=base_url('admin/international')?>" class=" list-group-item" id="International">International</a>
						<a href="<?=base_url('admin/trucking')?>" class=" list-group-item" id="Trucking">Trucking</a>
	  	
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#credit" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-gift"></i> Credit<i class="fas fa-plus epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="credit">
					<ul class="list-group">
						<a href="<?=base_url('admin/credit_history')?>" class="list-group-item" id="credit_history">Credit History</a>
						
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#costing" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-gift"></i> Costing<i class="fas fa-plus epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="costing">
					<ul class="list-group">
						<a href="<?=base_url('admin/international_cost')?>" class="list-group-item" id="international_cost">International Costing</a>
						<a href="<?=base_url('admin/domestic_cost')?>" class="list-group-item" id="domestic_cost">Domestic Costing</a>
						<a href="<?=base_url('admin/trucking_cost')?>" class="list-group-item" id="trucking_cost">Trucking Costing</a>
					</ul>
				</div>
			</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyAccount" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-user"></i> My Account<i class="fas fa-plus pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="MyAccount">
					<ul class="list-group">
						<a href="<?=base_url('admin/profile_setting')?>" class=" list-group-item" id="Profile_Setting">Profile Setting</a>
						<a href="<?=base_url('admin/LogOut')?>" class=" list-group-item" id="Profile_Setting">Log Out</a>
						
					</ul>
				</div>
			</div>

			
		</div>
	
	</div>
<script>
var sidebarstatus = '0000000';

function displayMainMenu(){
	var currentStyle = document.getElementById("masterContent").style.display;
	if(currentStyle == "none"){
		document.getElementById("masterContent").style.display = "";
		document.getElementById("MasterMobileMenu").style.display = "none";
	}else{
		document.getElementById("masterContent").style.display = "none";
		document.getElementById("MasterMobileMenu").style.display = "";
	}
	$('html,body').scrollTop(0);
}

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
	$('#requester').collapse();
	$("ul[data-target='#requester']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
//if(sidebarstatus.substring(1, 2) == 1){
	//$('#MyBookings').collapse();
//	$("ul[data-target='#MyBookings']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
//}

if(sidebarstatus.substring(1, 2) == 1){
	$('#driver').collapse();
	$("ul[data-target='#driver']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}

if(sidebarstatus.substring(2, 3) == 1){
	$('#admin').collapse();
	$("ul[data-target='#admin']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
//if(sidebarstatus.substring(3, 4) == 1){
//	$('#MyCredits').collapse();
//	$("ul[data-target='#MyCredits']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
//}

if(sidebarstatus.substring(3, 4) == 1){
	$('#AllShipment').collapse();
	$("ul[data-target='#AllShipment']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
if(sidebarstatus.substring(4, 5) == 1){
	$('#AllShipment').collapse();
	$("ul[data-target='#credit']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
if(sidebarstatus.substring(5,6) == 1){
	$('#Coasting').collapse();
	$("ul[data-target='#Coasting']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
}
if(sidebarstatus.substring(7,8) == 1){
	$('#MyAccount').collapse();
	$("ul[data-target='#MyAccount']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
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



</script>

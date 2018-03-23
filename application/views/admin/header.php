<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="utf-8">
<title>WHEREVERSHIP | Delivery Made Easy</title>
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

<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js"></script>
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
		<h4>Welcome Micropop!</h4>
	</div>
		<div class="container-fluid space-small">
	
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
				background-image: url(http://wherevership.com/assets2/image/logo.png);
				background-size: 140px;
				background-position: center top;
				background-repeat: no-repeat;
				height: 140px;
				font-size: 20px;
				display: block
				
				
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
				<a>
					<img src="http://wherevership.com/assets2/image/logo.png" class="logo hidden-xs" style="text-align:center;">
				</a>
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
							<i class="fas fa-truck"></i> Requester<i class="epi-plus-squared-alt epi pull-right"></i>
						</a>
					</ul>
					<div>
						<div class="collapse dropdown" id="SendParcel">
							<ul class="list-group">
								<a onclick="focusQuickQuote()" class="list-group-item" style="cursor: pointer;" id="Send_A_Parcel">Add Requester</a>
  	
								<a href="" class="[:ac_bulkupload:] list-group-item" id ="Bulk_Upload">Requster List</a>
							</ul>
						</div>
					</div>
				</div>
				
				<div style="border-top: 1px solid #ddd;">
					<ul class="list-group btn" data  -toggle="collapse" data-target="#SendParcel" aria-expanded="false" aria-controls="collapseExample">
						<a class="list-group-item active">
							<i class="fas fa-truck"></i> Driver<i class="epi-plus-squared-alt epi pull-right"></i>
						</a>
					</ul>
					<div>
						<div class="collapse dropdown" id="SendParcel">
							<ul class="list-group">
								<a onclick="focusQuickQuote()" class="list-group-item" style="cursor: pointer;" id="Send_A_Parcel">Add Driver</a>
  	
								<a href="" class="[:ac_bulkupload:] list-group-item" id ="Bulk_Upload">Driver List</a>
							</ul>
						</div>
					</div>
				</div>

			<div style="border-top: 1px solid #ddd;">	
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyBookings" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
					<i class="fas fa-shopping-cart"></i> Admin<i class="epi-plus-squared-alt epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="MyBookings">
					<ul class="list-group">
						<a href="" class="[:ac_book_pending:] list-group-item" id="Pending_Bookings">Add Admin <span class="badge" id="pending">0</span></a>
						<a href="" class="[:ac_book_expired:] list-group-item" id="Expired_Bookings">Admin List <span class="badge" id="expire">0</span></a>
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
				<ul class="list-group btn" data-toggle="collapse" data-target="#MyRewards" aria-expanded="false" aria-controls="collapseExample">
					<a class="list-group-item active">
						<i class="fas fa-gift"></i> Costing<i class="epi-plus-squared-alt epi pull-right"></i>
					</a>
				</ul>

				<div class="collapse dropdown" id="MyRewards">
					<ul class="list-group">
						<a href="" class=" list-group-item" id="Coupon">International Costing</a>
						<a href="" class=" list-group-item" id="Coupon">Domestic Costing</a>
						<a href="" class=" list-group-item" id="Coupon">Trucking Costing</a>
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
						<a href="" class=" list-group-item" id="Profile_Setting">Log Out</a>
						
					</ul>
				</div>
			</div>

			
		</div>
	
	</div>

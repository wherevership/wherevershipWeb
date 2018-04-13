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

<script type="text/javascript" src="<?=base_url('assets2/js/quote.js')?>"></script>

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
<!--START OF MOBILE TOP MENU-->
<div id="sticky-anchor-mobile"></div>



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

<style>
			.breadcrumb-body {
				list-style: outside none none;
				margin: 6px auto;
				padding: 10px 0px;
				width: 530px;
			}
			
			.breadcrumb-body li {
				width: 110px;
				display: inline-block;
			
			}
			
			.breadcrumb-body li .breadcrumb-statge-container {
				-webkit-clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
				clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
				bottom: 0;
				height: 110px;
				width: 100%;
				display: block;
				padding: 5px 5px;
			}
			
			.breadcrumb-body .past .breadcrumb-statge-container {
				background-color: #00a9b0;
				color: #fff;
			}
			
			.breadcrumb-body .current .breadcrumb-statge-container {
			
				background-color: #00a9b0;
				color: #fff;
			}
			
			.breadcrumb-body .future .breadcrumb-statge-container {
				background-color: #EFEFEF;
				color: #000;
			}
			
			.breadcrumb-body li .breadcrumb-statge-container .breadcrumb-stage {
				text-align: center;
				font-weight: bolder;
				font-size: 10pt;
				line-height: 18px;
				margin: 10px auto;
				
				
			}
			
			.title-bar {
				background-color: #00a9b0; 
				text-align: center;
				padding: 10px auto;
				color: #fff;
				margin-bottom: 20px;
			}
			
			.title-bar .title {
				padding: 10px;
			
			}
			
			.panel-title-bar {
				background-color: #00a9b0; 
				text-align: center;
				padding: 10px auto;
				color: #fff;
				margin-bottom: 0px;
			}
			
			.panel-title-bar .title {
				padding: 10px;
			
			}
			
			.panel-subtitle {
				
				color: #00a9b0;
				
			}
			
			.top1 {
				margin-top: 15px;
			}
			label {
					font-weight: 300; !important
			}
			
			.required {
				color: #FF0000;
			}
		
		</style>
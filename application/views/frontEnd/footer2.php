<footer id="masterFooter" class="page-footer">
	<div class="container">
		<div class="footer-inner">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 footer-link-height">
				<ul class="links">
				<li class="title-link">Overview</li>
				<li><a href="<?=base_url('aboutUs')?>">About Us</a></li>
				<li><a href="#" class="hide">Blog</a></li>
			    <li><a href="<?=base_url('faq')?>">FAQ</a></li>
				<li><a href="<?=base_url('contactUs')?>">Contact Us</a></li>
				<li><a href="<?=base_url('prohibited_item_list')?>">Prohibited Item List</a></li>
				<li><a href="<?=base_url('term_and_condition')?>">Terms & Conditions</a></li>
				<li><a href="<?=base_url('refund_policy')?>">Refund Policy</a></li>
				<li><a href="<?=base_url('privacy_policy')?>">Privacy Policy</a></li>
				</ul>
			</div>
			
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 footer-link-height">
				<ul class="links">
				<li class="title-link">My Account</li>
				<li><a id="log_in_f" href="<?=!empty($id)?base_url('member/logOut'):base_url('userLogin')?>"><?=!empty($id)?'Log Out':'Log In'?></a></li>
				<li><a id="dashboard_f" href="<?=!empty($id)?base_url('member/user_panel'):base_url('userLogin')?>">Dashboard</a></li>
				<li><a id="edit_profile_f" href="<?=!empty($id)?base_url('member/personal_profile'):base_url('userLogin')?>">Edit Your Profile</a></li>
				<li><a id="my_cart_f" href="<?=!empty($id)?base_url('member/actions_required'):base_url('userLogin')?>">My Cart</a></li>
			</ul>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 footer-link-height">
				<ul class="links">
				<li class="title-link">Tools</li>
				<li><a data-toggle="modal" data-target="#services">Send A Parcel</a></li>
				<li><a href="#">Trace & Track</a></li>
				<li><a href = "<?=base_url('volumetricCalcualator')?>">Volumetric Calculator</a></li>
		          
				</ul>
			</div>
	<!--		
			<div class="col-xs-12 col-sm-6 col-md-4 footer-link-height social-links">
				<ul class="links" style="padding-bottom: 5px;">
					<li class="title-link">Follow Us</li>
					<li style="float: left; margin-right: 10px;"><a href="#" target="_blank"><i class="fab fa-facebook-f" style="text-align: center"></i></a></li>
					<li style="float: left; margin-right: 10px;"><a href="#" target="_blank"><i class="fab fa-twitter" style="text-align: center"></i></a></li>
					<li style="float: left; margin-right: 10px;"><a href="#" target="_blank"><i class="fab fa-youtube" style="text-align: center"></i></a></li>
					<li style="float: left; margin-right: 10px;"><a href="#" target="_blank"><i class="fab fa-pinterest-p" style="text-align: center"></i></a></li>
					<li style="margin-right: 10px;"><a href="#" target="_blank"><i class="epi-instagramm"></i></a></li>
				</ul>
				<hr style="margin: 15px 0px;border-color: #5d5d5d;">
				<ul class="links">
					<li class="title-link" style="padding-top: 10px;">Register</li>
					<form action="<?=base_url('signUp')?>" method="post">
						<div class="col-sm-9 col-xs-7" style="padding: 0px;">
							<input class="form-control" type="text" placeholder="Email" name="email"  value="">
						</div>
						<div class="col-sm-3 col-xs-5">
							<input type="submit" class="btn btn-primary" value="Sign Up">
						</div>
					</form>
					<div class="clearfix"></div>
                	<br>
				</ul>
					<ul class="links">
	   
	</ul>
			</div> -->
		</div>
	</div>
</footer>
<div class="page-copyright">
	<div class="container">
		<p class="text-center small">Created & Powered By Wherevership Sdn Bhd (1201025-W).<br>
		All Copyrights Reserved &copy; 2018</p>
	</div>
</div>
<div id="popupbox" class="modal fade in">
	<div class="modal-content">
		<div class="modal-header"> 
			<h3>Loading...</h3>
		</div>
		<div class="modal-body"></div>
		<div class="modal-footer"></div>
	</div>
</div>
<div class="list-fix hidden-xs" id="list-fix">
	
			<!-- <div class="wrapper" style="background-color: #f34160; bottom: 5px;"> <span id="top-link-block"> <a href="?pg=Jobs" style="color: #fff;"> <i class="epi-sound blink"></i></a> </span>
				<div class="tooltip" style=" background-color: #fff; border: 1px solid #f34160; color: #f34160; padding: 14px 0px 14px 10px;">We Are Hiring!</div>
			</div> -->
		
	<div class="wrapper back-top"> <span id="top-link-block"> <a href="#top" onclick="$('html,body').animate({scrollTop:0},'slow');return false;" style="color: #fff;"> <i class="fas fa-angle-up"></i></a> </span>
		<div class="tooltip">Back To Top</div>
	</div>
</div>


<script>

			

$(function () {
	var console_styles = {
		spacing: "color: #336699",
		title: "color: #f69; font-weight: bold",
		image: function(parameter) {
			return "background-image: url(\"<?=base_url('assets2/image/favicon.ico')?>\"); background-size: cover";
		},
		wording : "color:white",
	};
	setTimeout(console.log.bind(console, "%c  %c Welcome To Wherevership %c  %cCreated & Powered By Wherevership Sdn Bhd (1201025-W) All Copyrights Reserved © 2017", console_styles.image(""), console_styles.title, console_styles.image(""),console_styles.wording));
	
	$('[data-toggle="tooltip"]').tooltip();
	});

$('.list-fix').viewportChecker({
	classToAdd: 'visible animated bounceIn',
	removeClassAfterAnimation: true,
	offset: "50%"
});

$('.fade-in-down').addClass("invisible").viewportChecker({
	classToAddForFullView: 'visible animated fadeInDown',
	classToRemove : 'invisible',
	removeClassAfterAnimation: true,
	offset: "20%"
});


$(document).ready( function() {
    $(".back-top").hide(); //hide your div initially
	var topOfOthDiv = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
            $(".back-top").show(); //reached the desired point -- show div
        }
		if($(window).scrollTop() < topOfOthDiv) { //scrolled past the other div?
            $(".back-top").hide(); //reached the desired point -- show div
        }
    });
});
</script>

<script type="text/javascript" src="<?=base_url('assets2/js/quickquote.js')?>"></script>

</body>
</html>

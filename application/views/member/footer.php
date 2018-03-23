	</div>
</div>

<footer id="masterFooter" class="page-footer">
	<div class="container">
		<div class="footer-inner">
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-link-height">
				<ul class="links">
				<li class="title-link">Overview</li>
				<li><a href="<?=base_url('aboutUs')?>">About Us</a></li>
				<li><a href="#">Blog</a></li>
			    <li><a href="#">FAQ</a></li>
				<li><a href="<?=base_url('contactUs')?>">Contact Us</a></li>
				<li><a href="#">Prohibited Item List</a></li>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-link-height">
				<ul class="links">
				<li class="title-link">Quick Guide</li>
				<li><a href="<?=base_url('signUp')?>">Sign Up An Account</a></li>
				<li><a href="#">Place An Order</a></li>
				<li><a href="#">Utilise Address Book</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-link-height">
				<ul class="links">
				<li class="title-link">My Account</li>
				<li><a href="<?=base_url('userLogin')?>">Log In</a></li>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Edit Your Profile</a></li>
				<li><a href="#">My Cart</a></li>
				<li><a href="#">Top Up History</a></li>
				<li><a href="#">Credit History</a></li>
				<li><a href="#">Referral/Affiliate</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-link-height">
				<ul class="links">
				<li class="title-link">Tools</li>
				<li><a href="#">Send A Parcel</a></li>
				<li><a href="#">Trace & Track</a></li>
				<li><a onclick = "#">Volumetric Calculator</a></li>
				<li><a href="#">Widgets</a></li>
				
		            <li><a href="#">Bulk Delivery Tool</a></li>
		          
				</ul>
			</div>
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
					<form action="./?ac=SignupExternal" method="post">
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
			</div>
		</div>
	</div>
</footer>
<div class="page-copyright">
	<div class="container">
		<p class="text-center small">Created & Powered By Wherevership Sdn Bhd ().<br>
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
			return "background-image: '<?=base_url("assets2/image/footer-background.jpeg")?>'; background-size: cover";
		},
		wording : "color:white",
	};
	setTimeout(console.log.bind(console, "%c  %c Welcome To Wherevership %c  %cCreated & Powered By Wherevership Sdn Bhd (1028666-H) All Copyrights Reserved © 2017", console_styles.image(""), console_styles.title, console_styles.image(""),console_styles.wording));
	setTimeout(console.log.bind(console, "%c%s","color: white; background: #f69; font-size: 26px;"," ᶘ ᵒᴥᵒᶅ < Hello There! Are you lost?"));
    setTimeout(console.log.bind(console, "%c%s","color: black; background: #f69; font-size: 26px;"," (ಠ ּ͜೦) < Did you know human can drink Lava but only once?"));
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

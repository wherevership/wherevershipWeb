
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

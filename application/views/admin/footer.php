	
	
		
	    </div>
		
		
			<div class="page-copyright">
				<div class="container">
					<p class="text-center small">Created & Powered By Wherevership Sdn Bhd ().<br>
						All Copyrights Reserved &copy; 2018</p>
				</div>
			</div>
	<div class="list-fix hidden-xs" id="list-fix">
		<div class="wrapper back-top"> <span id="top-link-block"> <a href="#top" style="color: #fff;" class="scrollToTop"> <i class="fas fa-angle-up"></i></a> </span>
			<div class="tooltip">Back To Top</div>
		</div>
	</div>
	
	<script>
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


 $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
	
	</script>
	
	
	
	
	
	</body>
	
	
<html>
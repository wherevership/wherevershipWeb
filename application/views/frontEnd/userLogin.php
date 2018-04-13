<div id="masterContent" >
	<!-- Below code added for Facebook -->
<div id="fb-root"></div>
<!-- End of facebook sdk code -->

<script src="https://apis.google.com/js/api:client.js"></script>
<style>
    #customBtn {
      display: inline-block;
      background: white;
      color: #444;
      width: 190px;
      border-radius: 5px;
      border: thin solid #888;
      box-shadow: 1px 1px 1px grey;
      white-space: nowrap;
    }
    span.icon {
      background: url('https://developers.google.com/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
    }
	.form-control-feedback.epi-info-circled { 
		position: absolute;
		padding-top: 15px;
		color: #d82b1f ;
		font-size: 18px;
	}
	.recent_login_picture {
	width: 150px;
	height:150px;
    position: relative;
    margin: auto;
	float: none !important;
}
	.recent_login-pic img {
    border-radius: 50%;
    box-shadow: 1px 1px 3px #C3C3C3;
	width: 150px;
	height:150px;
	background-color: #fff;
}
	.remove_btn {
		background: white;
		border: 2px solid white;
		right: 15px;
		top: 5px;
		border-radius: 30px;
		height: 30px;
		position: absolute;
		transition: none;
		width: 30px;
		padding: 5px 0px;
		z-index: 2;
	}
	.remove_btn a {
      color: #cccccc;
	}
	.recent_login-pic a h4 {
		color: #1d2129; 
		font-weight: bold;
	}

	@media (min-width:992px) {
		div.recent_login-pic:hover div.remove_btn {
			display: block;
		}
		div.recent_login-pic div.remove_btn {
			position:absolute;
			display:none;
		}
	}
	
	.hiddenClass{
	  display:none;
    }

	@media (max-width:991px) {
	div.recent_login-pic div.remove_btn {
			display: block;
			right:16%;
		}
	}

	@media (max-width:697px) {
	div.recent_login-pic div.remove_btn {
			display: block;
			right:10%;
		
	}
	
		.recent_login_picture {
	width: 100px;
	height:100px;
}
	.recent_login-pic img {
	width: 100px;
	height:100px;
}
}	

@media (max-width:430px) {
		.recent_login_picture {
	width: 80px;
	height:80px;
}
	.recent_login-pic img {
	width: 80px;
	height:80px;
}
}

@media screen and (max-width: 1199px) and (min-width: 992px) {
			.recent_login_picture {
	width: 120px;
	height:120px;
}
	.recent_login-pic img {
	width: 120px;
	height:120px;
}

}				
</style>
<section style="background-color: #ebeced;">
<div class="container space">
  <div class="row">
	  <div id="recentLogin" class="col-md-6 col-xs-12 space padding-off" style="padding-top: 19px;">
	    <h1 class="text-center">Recent Logins</h1>
 	    <br>
 	    <div class="row">
	      <stage(login_status)>
		    <Yes>
			  
		    </Yes>
	      </stage(login_status)>
	    </div>
	  </div>
	<div id="LoginForm" class="col-md-6 col-xs-12">							   
      <div class="SigninForm well" onkeypress="return checkEnter(event)">
        <h1>Log In</h1>
        <p>Welcome back! Access your account and manage your bookings.</p>
		<div class="has-feedback">
       <input class="form-control" type="text" placeholder="Sign in Email" id="login_email" name="txt_user"><span class="glyphicon glyphicon-info-sign form-control-feedback hide"  aria-hidden="true"></span>
        <br>
		</div>
		<div class="has-feedback">
       <input class="form-control" type="password" placeholder="Sign in Password" id="login_pass" name="txt_pass"><span class="glyphicon glyphicon-info-sign form-control-feedback hide"  aria-hidden="true"></span>
        </div>
        <input type="hidden" name="txt_wechatID" value="">
        <br>
        
		<label class="checkbox">
        <input type="checkbox" id="rememberme"/>Remember Me</label>
		<button class="btn btn-primary btn-lg log-in" value="Login" onclick="Signin()" style="width:100%;"> Log In </button>
        
		<a href="./?pg=MemberForgotPassword" class="span11">Forgot your password?</a> / <a href="./?pg=MemberForgotEmail" class="span11">Forgot your login email?</a>
        <div class="clearfix"></div>
        <br>
        
	        <div class="social-login-divider"><i class="social-login-divider-text">Or</i></div>
	        <div class="social-connect-buttons-wrapper text-center">
	      
	        <a rel="nofollow" onClick="FBloginnow()" class="fb-btn btn btn-lg btn-default"><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/fblogin.png"></a>
	      
	        <a rel="nofollow" class="google-btn google-login btn btn-lg btn-default"><img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/googlelogin.png" id="googlelogin"></a>
	      
	    
	      	</div>
	      
    	
        <hr>
        <br>
        No account? Start here! <strong> <a href="<?=base_url('signUp')?>">Register Now</a> </strong>
        </div>
    </div>
  </div>
</div>
</section>
<div id="dialog"></div>

<script>
var outcome="";
var isLogin=false;
var message="";
var exist=0;
var cookieStr = document.cookie;
cookieStr = cookieStr.split('; ');
var cookies = {};
for(var i=0;i<cookieStr.length;i++){
	var cur = cookieStr[i].split('=');
	cookies[cur[0]] = cur[1];
}
if(cookies['username'] != ''){
	$('input[name=txt_user]').val(cookies['username']);
}

var url = window.location.href;
if(url.indexOf("pg=ShopifyLanding") > -1){
	$(".SigninForm h1").before('<p class="alert alert-danger">You are required to Login before proceed to Shopify Integration Installation.</p>');
}
function Signin(){
	
	if(document.getElementById('rememberme').checked){
		rememberme = $(".SigninForm [name=txt_user]").val();
		var d = new Date();
		d.setTime(d.getTime() + (1825*24*60*60*1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = 'username = '+rememberme+ "; " + expires;
	}
	if($(".SigninForm [name=txt_user]").val() == "" || $(".SigninForm [name=txt_pass]").val() == ""){
		CheckNull($(".SigninForm [name=txt_user]"),$(".SigninForm [name=txt_pass]"));
		swal({
			title: 'Oops',
			type: 'error',
			html: 'Please enter your email and password.',
			confirmButtonColor: '#4e97d8'
			})
	}else
	{
		CheckNull($(".SigninForm [name=txt_user]"),$(".SigninForm [name=txt_pass]"));
		$(".log-in").addClass("disabled");
		$(".log-in").html("<i class='epi-spin4 selector__glyph-inner animate-spin' style='font-size: 24px;'></i>");
		const username = $('#login_email').val();
		const password = $('#login_pass').val();
		const auth = firebase.auth();
		console.log(username);
		auth.signInWithEmailAndPassword(username,password).then(function(firebaseUser) {
			
			window.location.href = '<?=base_url("member/user_panel")?>';
		}).catch(function(error) {
				   isLogin = false;
				   swal({
						title: 'Oops',
						type: 'error',
						html: error.message,
						confirmButtonColor: '#4e97d8'
						});
				   
				
				
		});
	
		if(!isLogin){
			isLogin = true;
		
		}
	}
}

function UpdateQuoteRedirectId(){
	var
		type = "post",
		url = "./?ac=doUpdateQuoteRedirectId",
		data = {
			quoteid : '[:quote_id:]'
		},callback = function(result){
			if(result == "pass"){
				window.location.href = "?pg=Quote&b=[:quote_id:]&offer=[:extra_url:]"; 
			}
		};	
	General.loadAjax(type,url,data,callback);	
}

function CheckNull(obj,obj1){
	var pwd  = $(".SignupForm [name=txt_pass]");
	var email  = $(".SignupForm [name=txt_email]");
	
	if(General.isTextEmpty($(obj))){
		doFail(obj);
	}else{
		clearNull(obj);
	}
	if(General.isTextEmpty($(obj1))){
		doFail(obj1);
	}else{
		clearNull(obj1);
	}
}

function doPass(obj){
	$(obj).addClass("pass");
	$(obj).removeClass("padding");
	$(obj).removeClass("fail");
	$(obj).css("border-color","#0F0");
	$(obj).parent().children().eq(1).addClass("hide");
}

function doFail(obj){
	$(obj).addClass("fail");
	$(obj).removeClass("padding");
	$(obj).removeClass("pass");
	$(obj).css("border-color","#F00");
	$(obj).parent().children().eq(1).removeClass("hide");
}

function clearNull(obj){
	$(obj).removeClass("pass");
	$(obj).removeClass("fail");
	$(obj).removeClass("padding");
	$(obj).css("border-color","");
	$(obj).parent().children().eq(1).addClass("hide");
}
/*
function SignInFB(response){
	FB.api('/me?fields=first_name, last_name, picture, email', function(response2){
	FBValidation = true;
	if(response2.id != response.id || response2.first_name != response.first_name || response2.last_name != response.last_name || response2.email != response.email){
  		FBValidation = false;
    }
	var email = response.email;
	if(email == "" || email == null || email===undefined || FBValidation==false){
		swal({
			title: 'Invalid Facebook Account',
			type: 'error',
			html: 'Please sign up manually.',
			confirmButtonColor: '#4e97d8'
			})
		return false;
	}
	var
	type = "post",
	url = "./?ac=doFBSignIn",
	data={
		email:response.email,
		fname:response.first_name,
		lname:response.last_name,
		fbid:response.id
	},	
	callback = function(result){
		if(result == "pass"){	
			swal({
				title: 'Done Register',
				type: 'success',
				html: "Please check your email for account verification. If you can't find the verification email, kindly check your Junk/Spam mail.",
				confirmButtonColor: '#4e97d8'
				}).then(function() {
					window.location.reload();
				})
		}else if(result == "pass2"){
			LocationLink = './?pg=MyAccount'
			window.location.href = LocationLink.replace(/&amp;/g,'&');
		}else{
			swal({
				title: 'Oops',
				type: 'error',
				html: "There seems to be a problem and the system is not able to register you. Please try again. If there error persist please contact our cusstomer service for further assistance.\n Thank you for choosing us as your service partner. Have a nice day.",
				confirmButtonColor: '#4e97d8'
				})
		}
	};
	General.loadAjax(type,url,data,callback);
	});
}

function FBloginnow(){
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {

	FB.api('/me?fields=first_name, last_name, picture, email', function(response) {

		SignInFB(response);
       },{scope:'email',  return_scopes: true});


  } else {
    FB.login(function(response) {
   	
	if (response.authResponse) {
    
     FB.api('/me?fields=first_name, last_name, picture, email', function(response) {
      //console.log('Good to see you, ' + response.name + '.');
	SignInFB(response);
     },{scope:'email',  return_scopes: true});
   	} else {
   	}
 	}, {scope: 'email'});	
   }
 });
}


//Start of FB script

  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    //console.log('statusChangeCallback');
    //console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '327130994156139',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  function testAPI() {
    //console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=first_name, last_name, picture, email', function(response) {
	//console.log('Successful login for: ' + response.name + response.email);
    });
  }
*/
function checkEnter(e) {
    if (e.keyCode == 13) {
		Signin();
    }
}
/*
$(function(){
	$("#login_email").focus();
});

var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      //Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '649081315058-877bqilqh4t7upl4tgmn2n8ivl1i3eth.apps.googleusercontent.com',
      });
      attachSignin(document.getElementById('googlelogin'));
	  attachSignin(document.getElementById('googlesignup'));
    });
};

function attachSignin(element) {
	
    auth2.attachClickHandler(element, {},
	function(googleUser){
        var profile = googleUser.getBasicProfile();
		var image = profile.getImageUrl();
        var id_token = googleUser.getAuthResponse().id_token;
		var id = profile.getId();
		var email = profile.getEmail();
		email = email.trim();
		$.ajax({
			type: "POST",
			url: "./?ac=CheckUserEmail",
			data : { 
				email : email
			},
			async : false,
			success:function(response){
				if(response == "pass"){
					window.outcome = 1;
				}else{
					window.outcome = 2;
				}
			}
		});
		if(window.outcome == 2){
			var
			type = "post",
			url = "./?ac=doUserLoginGoogle",
			data = {
				email : email,
				id : id,
				image : image
			},
			callback = function(result){		
				if(result == "pass"){
					window.location.href = './?pg=MyAccount';
				}else{
					swal({
						title: 'Sign In Fail',
						type: 'error',
						html: 'Sorry, invalid email. Please Try Again.',
						confirmButtonColor: '#4e97d8'
						})
				}
			};
		}else if(window.outcome == 1){
			var
			type = "post",
			url = "./?ac=doQuickUserSignUp",
			data = {
				email : email
			},
			callback = function(result){
				if(result == "pass"){
					swal({
					title: 'Registration Completed',
					type: 'success',
					html: 'Congratulations your account has been created successfully.',
					confirmButtonColor: '#4e97d8'
					}).then(function() {
						window.location.reload();
					})
				}
			};		
		}
		General.loadAjax(type,url,data,callback);
	});
}
startApp();

*/

function removeAcc(id){
		var
			type = "post",
			url = "./?ac=doRemoveUser",
			data = {
				id : id
			},
			callback = function(result){
				if(result == "pass"){		
					window.location.reload();
				}
			};
			General.loadAjax(type,url,data,callback);
}

$('.swal2-modal').keypress(function (e) {
  if (e.which == 13) {
	$( ".btn-danger" ).trigger( "click" );
    return false;
  }
});

$(document).ready(function(){ 
	if(0<=0){
		$('#recentLogin').addClass('hiddenClass');
		$('#LoginForm').addClass('col-md-offset-3');
	}else{
		$('#recentLogin').removeClass('hiddenClass');
		$('#LoginForm').removeClass('col-md-offset-3');
	}
	
	if(0===1){
		$('#userLogin').addClass('col-md-offset-4 col-xs-offset-4');
	}else{
		$('#userLogin').removeClass('col-md-offset-4 col-xs-offset-4');
	}
	
	if(0===2){
		$('#userLogin').addClass('col-md-offset-2 col-xs-offset-2');
	}else{
		$('#userLogin').removeClass('col-md-offset-2 col-xs-offset-2');
	}
});
</script> 

</div>
<div id="mainTrackResult"></div>
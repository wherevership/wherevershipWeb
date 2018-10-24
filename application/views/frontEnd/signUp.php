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
	span.form-control-feedback.epi-info-circled { 
		position: absolute;
		padding-top: 15px;
		color: #d82b1f ;
		font-size: 18px;
	}
</style>
<section style="background-color: #ebeced;">
<div class="container space">
  <div class="row">
	<div class="col-md-6 col-md-offset-3 col-xs-12">
      <div class="SignupForm well">
        <h1>Register & <br> Start Sending Parcels</h1>
        <p>New to Wherevership? Sign up. It's free and simple!</p>
		<div class="has-feedback" style="margin-bottom: 10px;">
		
			<!-- TY-S EMAIL -->
	        <input class="form-control" type="text" placeholder="Email" id="email" name="txt_email" onchange="checkEmail(this)" value="">
			<span class="far fa-times-circle form-control-feedback hide"  aria-hidden="true"></span>
			<!-- TY-E EMAIL -->
		</div>
		
		<div class="has-feedback" style="margin-bottom: 10px;">
			<input class="form-control" type="password" placeholder="Password" id="pass" name="txt_pass" onchange="checkPass(this)"  value="">
			<span class="far fa-times-circle form-control-feedback hide"  aria-hidden="true"></span>
		</div>
		<div class="has-feedback">
			<input class="form-control" type="password" placeholder="Retype Password" id="cpass" name="txt_pass_confirm" onchange="checkConfirmPass(this)" value="">
			<span class="far fa-times-circle form-control-feedback hide"  aria-hidden="true"></span>
		
		</div>
        <label class="checkbox">
          <input type="checkbox" name="acceptTerm" id="acceptCheck">
          I accept the <a href="<?=base_url('term_and_condition')?>">Terms and Conditions</a></label>
        <button class="btn btn-primary btn-lg sign-up" value="Sign up" onclick="SignUp()" style="width:100%"> Sign Up </button>
		<div class="clearfix"></div>
        
        <br>
        Log in to reveal exclusive deals and book faster! <strong> <a href="<?=base_url('userLogin')?>">Log In</a> </strong>
      </div>
    </div>
  </div>
</div>
</section>
<div id="dialog"></div>

<script>


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

var parameter = '[:parameter:]';


function SignUp(){
		var term=$("#acceptCheck");
		
		if (term.is(':checked')) {
			var email = $('#email').val();
			var password = $('#pass').val();
			var repassword = $('#cpass').val();
			var url =  "<?=base_url('member/signUp')?>";
			if (email == "") {
				swal({
					title: 'Oops',
					type: 'error',
					html: 'Please enter your email.',
					confirmButtonColor: '#4e97d8'
				})
		
			} else if (password == "" || repassword == "") {
					swal({
						title: 'Oops',
						type: 'error',
						html: 'Please enter your password.',
						confirmButtonColor: '#4e97d8'
					})
			} else if (password != repassword) {
					console.log(password);
					console.log(repassword);
					swal({
						title: 'Oops',
						type: 'error',
						html: 'Password and retype password not same.',
						confirmButtonColor: '#4e97d8'
					})
			} else {
				
					console.log(email + password);
					$.ajax({
						type: "post",
						url: url,
						data: {
							email: email,
							password: password
						},
						dataType: "json",
						async: true,
						success: function(result){
							window.location.href = '<?=base_url("member/user_panel")?>';
			
						},
						error: function(XMLHttpRequest,textStatus,textStatus){
							console.log(XMLHttpRequest.responseText);
							console.log(XMLHttpRequest.status);
							console.log(XMLHttpRequest.readyState);
							console.log(textStatus);
							alert("something wrong");
			
					}	
				});
			}
		} else {
			swal({
				title: 'Oops',
				type: 'error',
				html: 'Your must check the term and condition',
				confirmButtonColor: '#4e97d8'
				})

		
		}
}

function checkEmail(obj){
	$(".alert.alert-danger").text("").removeClass();
	//$(".sign-up").attr("disabled", true);
	$(obj).parent().children().eq(1).removeClass("fas fa-info-circle hide");
	$(obj).parent().children().children().eq(0).removeClass("fas fa-genderless");
    $(obj).parent().children().eq(1).html("<i class='far fa-times-circle selector__glyph-inner animate-spin' style='font-size: 18px;'></i>");
	var pass = true;
	var email = $(".SignupForm [name=txt_email]").val();
	email = email.trim();
	console.log(email);
	if(General.isTextEmpty($(obj))){
		doEmpty(obj);
		window.emailOutcome = 0;
	//	$(".sign-up").attr("disabled", true);
	}else if(!General.validateEmail(email)){
		doFail(obj);
		window.emailOutcome = 1;
	//	$(".sign-up").attr("disabled", true);
	}else{
		
		doPass(obj);
		window.emailOutcome = 3;
		
			
		}
	checkvalid()
	}


function checkPass(obj) {
	$(obj).parent().children().eq(1).removeClass("fas fa-info-circle hide");
	$(obj).parent().children().children().eq(0).removeClass("fas fa-genderless");
    $(obj).parent().children().eq(1).html("<i class='far fa-times-circle selector__glyph-inner animate-spin' style='font-size: 18px;'></i>");
		if  (General.isTextEmpty($(obj))){
			doEmpty(obj);
			window.passOutcome = 0;
			
			$(".sign-up").attr("disabled",false);
		} else if (General.isLengthLess($(obj),8)) {
			doFail(obj);
		
			window.passOutcome = 1;
			$(".sign-up").attr("disabled",false);
		} else {
			doPass(obj);
			window.passOutcome = 2;
		}
		
		checkvalid()
		
	
	}
	
	function checkConfirmPass(obj) {
		$(obj).parent().children().eq(1).removeClass("fas fa-info-circle hide");
	$(obj).parent().children().children().eq(0).removeClass("fas fa-genderless");
    $(obj).parent().children().eq(1).html("<i class='far fa-times-circle selector__glyph-inner animate-spin' style='font-size: 18px;'></i>");
		var pwd = $("#pass").val();	
		var pwdc = $("#cpass").val();
		if  (General.isTextEmpty($(obj))){
			doEmpty(obj);
			window.confirmPassOutcom = 0;
		
			$(".sign-up").attr("disabled",false);
		}  else if (pwd != pwdc){
			doFail(obj);
			window.confirmPassOutcome = 1;
			
			$(".sign-up").attr("disabled",false);
		
		} else {
			window.confirmPassOutcome = 2;
			doPass(obj)
		}
	checkvalid()
	}

	function checkvalid() {
		var term = $("#termsCheck");
	
		if (term.is(':checked')) {
			if (window.emailOutcome == 3 && window.passOutcome == 2 && window.confirmPassOutcome == 2) {
				$(".sign-up").attr("disabled",true);
			}
		}
	
	}
	
	


function SendLink(){
	$(".alert.alert-danger").text("").removeClass();
	var email = $(".SignupForm [name=txt_email]").val();
	email = email.trim();
	$.ajax({
		type: "POST",
		url: "./?ac=SendVerificationLink",
		data : { 
			email : email
		},
		success:function(response){
			if(response == "pass"){
				$(".has-feedback").before('<p class="alert alert-danger">We’ve sent the verification link to your mail. Click on it to verify.</p>');
			}
		}
	});
}

function checkEmpty(obj){
	if(!General.isTextEmpty($(obj))){
		doPass(obj);
		
	}else{
		doFail(obj);
	}
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
	$(obj).parent().children().children().eq(0).removeClass("far fa-times-circle selector__glyph-inner animate-spin");
	$(obj).parent().children().eq(1).removeClass("far fa-times-circle hide");
	$(obj).parent().children().eq(1).html("<i class='fas fa-check' style='font-size: 18px; color: #5cb85c;'></i>");
	$(obj).addClass("pass");
	$(obj).removeClass("padding");
	$(obj).removeClass("fail");
	$(obj).css("border-color","#0F0");
}

function doPadding(obj){
	$(obj).addClass("padding");
	$(obj).removeClass("pass");
	$(obj).removeClass("fail");
	$(obj).css("border-color","#F90");
}

function doFail(obj){
	$(obj).parent().children().children().eq(0).removeClass("far fa-times-circle selector__glyph-inner animate-spin");
	$(obj).parent().children().eq(1).addClass("far fa-times-circle");
	$(obj).addClass("fail");
	$(obj).removeClass("padding");
	$(obj).removeClass("pass");
	$(obj).css("border-color","#F00");
}

function doEmpty(obj){
	$(obj).addClass("fail");
	$(obj).removeClass("padding");
	$(obj).removeClass("pass");
	$(obj).css("border-color","#F00");
	$(obj).parent().children().eq(1).addClass("hide");
}

function clearNull(obj){
	$(obj).removeClass("pass");
	$(obj).removeClass("fail");
	$(obj).removeClass("padding");
	$(obj).css("border-color","");
	$(obj).parent().children().eq(1).addClass("hide");
}

function ValidateSignUp(){
	var email = $("#email1");
	var pass = $("#pass");
	var cpass = $("#cpass");
	var term = $("#termsCheck");
	var returnResult = "";
	checkEmail(email);
	checkPass(pass);
	checkConfirmPass(cpass);
	
	if(term.is(":checked")==false){
		returnResult += "Looks like you have forgotten to tick on 'Terms and Conditions'.<br>";
	}
	if(window.emailOutcome == 0){
		returnResult += "Please insert a valid email into the email field.<br>";
	}else if(window.emailOutcome == 1){
		returnResult += "Please insert a valid email into the email field. <br>";
	}else if(window.emailOutcome == 2) {
		returnResult += "Another user with this email already exists. Maybe it's your evil twin. Spooky. If it is you, kindly log in with the email or click <br><a href='./?pg=MemberForgotPassword'><b><u>HERE</u></b></a> to reset a new password.<br>";
	}else if(window.passOutcome == 0) {
		returnResult += "Please insert a password into the password field.<br>";
	}else if(window.passOutcome == 1) {
		returnResult += "Password too short<br>";
	}else if(window.confirmPassOutcome == 0) {
		returnResult += "Please insert a password into the comfirm password field.<br>";
	}else if(window.confirmPassOutcome == 1) {
		returnResult += "Password not march<br>";
	}else if(window.emailOutcome == 3 && window.passOutcome == 2 && window.confirmPassOutcome == 2){
		if(returnResult == ""){
			returnResult = true;
		}
	}
	return returnResult;
}

function ErrorMsg(){
	var email 	= $(".SignupForm [name=txt_email]");
	var term 	= $(".SignupForm [name=acceptTerm]");
	var msg = "";
	if(!General.isTextEmpty(email)){
		if(email.hasClass("padding")){
			msg += "-System still verify your email.\n\n";
		}else if(email.hasClass("fail")){
			msg += "-Your email has been used.\n\n";
		}
	}else{
		msg += "-Email should not be empty.\n\n";
	}
	if(!term.is(":checked")){
		msg += "-You must tick the Terms and Condition to proceed your registration.\n\n";
	}
	return msg;
}


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
			window.location.reload();
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

function checkEnter(e) {
    if (e.keyCode == 13) {
		Signin();
    }
}

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
</script> 

</div>
<div id="mainTrackResult"></div>
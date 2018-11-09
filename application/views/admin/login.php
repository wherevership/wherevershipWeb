<!DOCTYPE html>
<html>
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


<!--
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js"></script>
<script>
-->
</script>


		
		<style>
			body {
				background-color: #f1f1f1;
			}
		
			#login {
				width: 320px;
				padding: 8% 0 0;
				margin: auto;
			}
			
			.login form {
				margin-top: 20px;
				margin-left: 0;
				padding: 26px 24px 46px;
				background: #fff;
				box-shadow: 0 1px 3px rgba(0,0,0,.13);
			}
			
			.login form,.login h1 a {
				overflow: hidden;
				font-weight: 400;
			}
			
			.login * {
				display: block;
				margin-top: 0cm;
			}
			
			.login h1{
				text-align: center;
			}
			
			.login h1 a {
				background-image: url(<?=base_url('assets2/image/logo.png')?>);
				background-size: 140px;
				background-position: center top;
				background-repeat: no-repeat;
				height: 140px;
				font-size: 20px;
				display: block
				
				
			}
			
			.login form .input, .login input[type=text] {
				background: #fbfbfb;
			}
			
			.login form .input, .login input[type=text] {
				border: 1px solid #ddd;
				box-shadow: inset 0 1px 2px rgba(0,0,0,.07);
				font-size: 24px;
				width: 100%;
				padding: 3px;
				margin: 2px 6px 16px 0;
			}
			
			.login .btn-primary {
				float: right;
			}
			
			.login input[type=text]:hover, .login input[type=password]:hover{
				background: #f1f1f1;
			}
		</style>
	
	</head>
	<body >
		<div class="login">
			<div id="login">
				<h1>
					<a  href="<?=base_url()?>" title="Powerd by Wherevership" tabindex="-1">
						
					</a>
				</h1>
				<form name="loginform" id="loginform" action="<?=base_url('admin/login_process')?>" method="post">
					<p>
						<label for="user_login">
							Username or Email Address
							<br>
							<input type="text" name="user_login" id="user_login" class="input" value size="20">
						</label>
					</p>
					
					<p>
						<label for="user_pass">
							Password
							<br>
							<input type="password" name="user_Pass" id="user_pass" class="input" value size="20">
						</label>
					</p>
					
					</p>
						<input type="submit" class="btn btn-primary btn-lg log-in" value="Log In" style="width:100%;" id="submit">
					</p>
				</form>
			</div>
		</div>
		
	<script>
			function returnValidate() {
				var user_login = document.getElementById('user_login');
				var password = document.getElementById('password');
				
				if (user_login.value == '') {
					alert("User Id can't empty");
					return false;
				}
				
				if (password.value == '') {
					alert("Password can't empty");
					return false;
				}
			}
	
	
	function Signin(){
	

		if($('#user_login').val() == "" || $("#user_pass").val() == ""){
		
			swal({
				title: 'Oops',
				type: 'error',
				html: 'Please enter your email and password.',
				confirmButtonColor: '#4e97d8'
			})
		
		}else
		{
			$("#submit").prop('disabled', true);
			$("#submit").html("<i class='fas fa-spinner selector__glyph-inner animate-spin' style='font-size: 24px;'></i>");
			var username = $('#user_login').val();
			var password = $('#user_pass').val();
			var url="<?=base_url('admin/login_process')?>";
		
			$.ajax({
				url: url,
				type: 'POST',
				data: {user_login: username, user_Pass: password},
				dataType: "text",
				async: true,
				error: function(XMLHttpRequest,textStatus,textStatus) {
					console.log(XMLHttpRequest.responseText);
					console.log(XMLHttpRequest.status);
					console.log(XMLHttpRequest.readyState);
					console.log(textStatus);
					alert("something wrong");
				
				},
				success: function(data) {
					//alert(data);
					if (data=='pass') {
						window.location.href = '<?=base_url("admin/dashboard")?>';
					} else {
					
				   swal({
						title: 'Oops',
						type: 'error',
						html: "Email or Password is incorrect",
						confirmButtonColor: '#4e97d8'
						});
				   
					
				} 
			} 
		});
		
	/**	auth.signInWithEmailAndPassword(username,password).then(function(firebaseUser) {
			
			window.location.href = '<?=base_url("member/user_panel")?>';
		}).catch(function(error) {
				   isLogin = false;
				   swal({
						title: 'Oops',
						type: 'error',
						html: error.message,
						confirmButtonColor: '#4e97d8'
						});
				   
					buttonNotInProcess()
				
		});
	**/
		
		
		
	}
			}
	
	function buttonNotInProcess(){
		$("#submit").prop('disabled', false);
		$("#submit").html('Log In');
		
	
}
	
	</script>	
	
	</body>
	
</html>
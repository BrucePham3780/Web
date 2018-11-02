<?php 
if(!empty($_SESSION)) 
{ 
	session_start(); 
} 

include('controller/c_user.php');


if(!empty($_POST)){

	if(isset($_POST['name']))
		$name=$_POST['name'];
	if(isset($_POST['email']))
		$email=$_POST['email'];
	if(isset($_POST['password']))
		$pass=$_POST['password'];
	if(isset($_POST['repassword']))
		$repass=$_POST['repassword'];
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])
		&& isset($_POST['repassword']) && $pass==$repass){
		$cuser = new c_user();
	$cuser->register($name, $email, $pass);	
	}
	else{
		header("location:signup.php");
		$_SESSION['error'] = 'Registration fail!';
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sign Up Form by Colorlib</title>

	<!-- Font Icon -->
	<link rel="stylesheet" href="public/fonts/material-icon/css/material-design-iconic-font.min.css">

	<!-- Main css -->
	<link rel="stylesheet" href="public/css/style.css">
</head>
<body>

	<div class="main">

		<!-- Sign up form -->
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">Sign up</h2>
						<form method="POST" class="register-form" id="register-form">
							<div class="form-group">
								<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
								<input type="text" name="name" id="name"  placeholder="Your Name" required="required" />
							</div>

							<div class="form-group">
								<label for="email"><i class="zmdi zmdi-email"></i></label>
								<input type="email" name="email" id="email" placeholder="Your Email" required="required"  />
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label>
								<input type="password" name="password" id="password" placeholder="Password" required="required" />
							</div>
							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" name="repassword" id="repassword" placeholder="Repeat your password" required="required" />
							</div>
							<div class="form-group">
								<!-- <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
								<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label> -->
							</div>
							<div class="form-group form-button">
								<input  type="button" name="register" id="register" class="form-submit" value="Register"/>

							</div>


							<div id="response">
								<pre></pre>
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure><img src="public/images/signup-image.jpg" alt="sing up image"></figure>
						<a href="signin.php" class="signup-image-link">I am already member</a>
					</div>
				</div>
			</div>
		</section>


	</div>

	<!-- JS -->
	<script src="public/vendor/jquery/jquery.min.js"></script>
	<script src="public/js/main.js"></script>

</body>


<script type="text/javascript" charset="utf-8" async defer>
	
	$(document).ready(function(){
		$('#register').click(function(){
			var a = $('#register2').val();
			console.log(a);
		// Call ajax for pass data to other place
		$.ajax({
			type: 'POST',
			url: 'emailduplicated.php',
			data: $('#email').serialize() // getting filed value in serialize form
		})


		.done(function(data){ // if getting done then call.
			var obj = JSON.parse(data);
			if(obj.status){
				alert("exist");
			}
			else{
				$('#register-form').submit();

			}


		})


		.fail(function() { // if fail then getting message
			// just in case posting your form failed
			alert( "Posting failed." );

		});

			// to prevent refreshing the whole page page
			return false;

		});
	});
</script>


</html>
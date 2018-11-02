<?php 
if(!empty($_SESSION)) 
{ 
	session_start(); 
} 
include('controller/c_user.php');
if(isset($_POST['register'])){
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
		$cuser = new c_User();
	$cuser->register($name, $email, $pass);
}
else{
	$_SESSION['error'] = 'Registration fail!';
	header("location:signup.php");
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Fit Point a Sports Category Flat Bootstrap Responsive Web Template| Sign Up Free :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Vide" />
	<meta name="keywords" content="Fit Point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="public/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="public/js/move-top.js"></script>
<script type="text/javascript" src="public/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

</head>
<body>
	<div class="page-head">
		<div class="container">
			<div class="navigation">
				<div class="logo">
					<h1>
						<a class="navbar-brand link link--yaku" href="index.php"><span>F</span><span>I</span><span>T</span><span>P</span><span>O</span><span>I</span><span>N</span><span>T</span></a>
					</h1>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="public/images/menu.png" alt=" " /></span>
					<ul class="nav1 nav nav-wil cl-effect-11" id="cl-effect-11">
						<li><a data-hover="HOME" href="index.php">HOME <span class="sr-only">(current)</span></a></li>
						<li><a data-hover="ABOUT" href="about.php">ABOUT</a></li>
						<li><a data-hover="PROGRAMS" href="programs.php">PROGRAMS</a></li>
						<li><a data-hover="SHORTCODES" href="shortcodes.html">SHORTCODES</a></li>
						<li><a data-hover="CONTACT" href="contact.php">CONTACT</a></li>
						<li><a href="signup.php">Sign up free</a></li>
					</ul>
					<!-- script-for-menu -->
					<script>
						$( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								});
						});
					</script>
					<!-- /script-for-menu -->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!-- registration-form -->
	<div class="registration-form">
		<div class="container">
			<h2 class="tittle">Registration</h3>
				<div class="registration-grids">
					<div class="reg-form">
						<div class="reg">
							<form method="post" action="#">
								<ul>
									<li class="text-info">Your Name: </li>
									<li><input type="text" value="" name="name"></li>
								</ul>				 
								<ul>
									<li class="text-info">Email: </li>
									<li><input type="text" value="" name="email"></li>
								</ul>
								<ul>
									<li class="text-info">Password: </li>
									<li><input type="password" value="" name="password"></li>
								</ul>
								<ul>
									<li class="text-info">Re-enter Password:</li>
									<li><input type="password" value="" name="repassword"></li>
								</ul>					
								<input type="submit" value="REGISTER NOW" name="register">
								<p class="click">All ready have an account ?. <a href="#" data-toggle="modal" data-target="#myModal"> Login Here</a></p> 
							</form>
						</div>
					</div>
					<div class="reg-right">
						<h3>Completely Free Account</h3>

						<p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
						libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
						<h3 class="lorem">Lorem ipsum dolor sit amet elit.</h3>

						<p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>

					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- registration-form -->
		<!-- login -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div>
					<div class="modal-body modal-spa">
						<div class="login-grids">
							<div class="login">
								<div class="login-left">
									<ul>
										<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
										<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
										<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
									</ul>
								</div>
								<div class="login-right">
									<form method="post">
										<h3>Signin with your account </h3>
										<input type="text" value="Enter your email" name="emaillog" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}" required="">	
										<input type="password" value="Password" name="passwordlog"
										onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
										<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
										<div class="single-bottom">
											<input type="checkbox"  id="brand" value="">
											<label for="brand"><span></span>Remember Me.</label>
										</div>
										<input type="submit" value="SIGNIN" name="login" >
									</form>
								</div>
								<div class="clearfix"></div>								
							</div>
							<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //login -->
		<!--footer-top-->
		<div class="footer-top">
			<div class="container">
				<div class="footer-left">
					<h3>INFORMATION</h3>
					<p>At vero eos et accusamus et iusto 
						odio dignissimos ducimus qui blanditiis
						praesentium voluptatum deleniti atque 
						corrupti quos dolores et quas molestias 
						excepturi sint occaecati cupiditate non
						provident, similique sunt in culpa qui officia
					deserunt mollitia animi, id est laborum et dolorum fuga.</p>
					<ul>
						<li>The company name <span>Lorem ipsum dolor,</span>Glasglow Dr 40 Fe 72.  </li>
						<li>1234567890  </li>
						<li><a href="mailto:info@example.com">contact@example.com</a> </li>
					</ul>
				</div>
				<div class="footer-middle">
					<h3>FROM THE BLOG</h3>
					<div class="foo-grids">
						<a href="#"><img class="img-responsive" src="images/blog1.jpg" alt="" /></a>
						<p><a href="#">Accusamus et iusto 
						odio dignissimos ducimus et iusto odio qui blanditiis dignissimos</a></p>
						<div class="clearfix"></div>
					</div>
					<div class="foo-grids">
						<a href="#"><img class="img-responsive" src="images/blog2.jpg" alt="" /></a>
						<p><a href="#">Odio dignissimos ducimus qui blanditiis
						praesentium voluptatum Accusamus et iusto</a></p>
						<div class="clearfix"></div>
					</div>
					<div class="foo-grids">
						<a href="#"><img class="img-responsive" src="images/blog3.jpg" alt="" /></a>
						<p><a href="#">Dignissimos ducimus qui blanditiis
						praesentium voluptatum. Odio dignissimos ducimus</a></p>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="footer-right">
					<h3>SUBSCRIBE NOW</h3>
					<p>Sed ut perspiciatis  
						odio dignissimos ducimus qui blanditiis
						praesentium voluptatum deleniti atque 
					corrupti quos dolores et quas molestias</p>
					<form>
						<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--//footer-top-->
		<!--copy right-->
		<div class="copyright">
			<div class="container">
				<div class="copy-left">
					<p> &copy; 2016 Fit Point. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
				</div>
				<div class="copy-right">
					<ul>
						<li><a class="fb1" href="#"></a></li>
						<li><a class="fb2" href="#"></a></li>
						<li><a class="fb3" href="#"></a></li>
						<li><a class="fb4" href="#"></a></li>
						<li><a class="fb5" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--//copy right-->
		<!-- smooth scrolling -->
		<script type="text/javascript">
			$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/								
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!-- for bootstrap working -->
	<script src="public/public/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->

</body>
</html>
<?php
include("controller/c_home.php");
session_start(); 
$chome = new c_Home();
$data = $chome -> index();
$coachlist =$data['CoachList'];
$data1 = $chome -> index();
$classlist =$data1['ClassList'];

?>


<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
	<title>Fit Club Sports Category Bootstrap responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Fit Club a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- for Coaches css -->
	<link href="public/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<!-- //for Coaches css -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="public/css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

	<!-- default css files -->
	<link rel="stylesheet" href="public/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="public/css/style_coach.css" type="text/css" media="all">
	<link rel="stylesheet" href="public/css/font-awesome.min.css" />
	<!-- default css files -->
	
</head>

<!-- Body -->
<body>

	<!-- banner -->
	<div class=" banner">
		<div class="wthree-different-dot">
			<!-- header -->
			<div class="header">
				<div class="container">  
					<div class="header-mdl agileits-logo"><!-- header-two --> 
						<h1><a href="index.html">Fit Club</a></h1> 
					</div>
					<div class="header-nav"><!-- header-three --> 	
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button> 
							</div>
							<!-- top-nav -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="index.html" class="scroll" data-hover="Home">Home</a></li>
									<li><a href="#about" class="scroll" data-hover="About">About</a></li> 
									
									<li><a href="#coaches" class="scroll" data-hover="Coaches">Coaches</a></li>
									<li><a href="#contact" class="scroll" data-hover="Contact">Contact</a></li>
									<?php 
									if(isset($_SESSION['user_name'])){
										?>
										<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['user_name']?> <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="logout.php">Logout</a></li>
											</ul>
										</li>
										<?php		
									}
									else{
										?>
										<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="signup.php">Sign up</a></li>
												<li><a href="signin.php" >Sign in</a></li>
											</ul>
										</li>
										<?php	
									}
									?>

								</ul>  
								<div class="clearfix"> </div>	
							</div>
						</nav>    
					</div>	
				</div>	
			</div>	
			<!-- //header --> 

			<!-- banner slider -->
			<div class="banner-top">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>	
								<div class="wthree-different-dot">
									<div class="banner_text">
										<div class="container">
											<h2>Health and strength</h2>
											<p>Aenean molestie enim consectetur, iaculis nisi eu, viverra velit. Suspendisse accumsan ultricies enim in tristique. Nulla eget ligula in odio suscipit dignissim ut vel velit. Duis ut semper risus.</p>

										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="wthree-different-dot">	
									<div class="banner_text">
										<div class="container">
											<h3>Fit and strong</h3>
											<p>Aenean molestie enim consectetur, iaculis nisi eu, viverra velit. Suspendisse accumsan ultricies enim in tristique. Nulla eget ligula in odio suscipit dignissim ut vel velit. Duis ut semper risus.</p>

										</div>
									</div>
								</div>
							</li>
							<li>	
								<div class="wthree-different-dot">
									<div class="banner_text">
										<div class="container">
											<h3>Workout harder</h3>
											<p>Aenean molestie enim consectetur, iaculis nisi eu, viverra velit. Suspendisse accumsan ultricies enim in tristique. Nulla eget ligula in odio suscipit dignissim ut vel velit. Duis ut semper risus.</p>

										</div>
									</div>
								</div>
							</li>
							<li>	
								<div class="wthree-different-dot">
									<div class="banner_text">
										<div class="container">
											<h3>Run and exercise</h3>
											<p>Aenean molestie enim consectetur, iaculis nisi eu, viverra velit. Suspendisse accumsan ultricies enim in tristique. Nulla eget ligula in odio suscipit dignissim ut vel velit. Duis ut semper risus.</p>

										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- banner slider -->

		</div>
	</div>
	<!-- //banner -->

	<!-- Our Classes -->
	<section class="popular_classes" id="classes">
		<div class="container">
			<h3 class="heading">Our <span>Classes</span></h3>
			<div class="classes_grids">
				<?php
				foreach ($classlist as $class) {
					# code...

					?>

					<div class="col-md-4">
						<div class="classes_grid1">
							<img src="public/images/c1.jpg" alt="popular cakes" />
							<h3><?=$class->className?></h3>
							<p><?=$class->classDetail?></p>
						</div>
					</div>
					<?php 
				}
				?>

				<div class="col-md-4">
					<div class="classes_grid1">
						<img src="public/images/c2.jpg" alt="popular cakes" />
						<h3>Personal Training</h3>
						<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="classes_grid1">
						<img src="public/images/c3.jpg" alt="popular cakes" />
						<h3>Gymnastic Classes</h3>
						<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="classes_grid1">
						<img src="public/images/c4.jpg" alt="popular cakes" />
						<h3>Barbell Training</h3>
						<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="classes_grid1">
						<img src="public/images/c5.jpg" alt="popular cakes" />
						<h3>6pack workout</h3>
						<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="classes_grid1">
						<img src="public/images/c6.jpg" alt="popular cakes" />
						<h3>Crossfit Classes</h3>
						<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
					</div>
				</div>

			</div>
		</div> 
	</section>
	<!-- //Our Classes -->

	<!-- agents section -->
	<section class="demo" id="coaches">
		<div class="container">  
			<h3 class="heading">Meet Our <span>Coaches</span></h3>
			<div id="verticalTab">
				<ul class="resp-tabs-list">
					<?php 
					foreach ($coachlist as $coach) {


						?>
						<li>
							<div class="col-md-4 tab1">
								<img src="public/images/<?=$coach->coachImage?>" alt="" />
							</div>
							<div class="col-md-8 tab1">
								<h3><?= $coach->coachName?></h3>
								<h4><?=$coach->coachDetail?></h4>
							</div>
							<div class="clearfix"></div>
						</li>

						<?php 
					}

					?>

				</ul>
				<div class="resp-tabs-container">
					<div>
						<div class="col-md-7 tabs-right1">
							<h3>william  d'cruz</h3>
							<h4>Coach : Fit club trainer</h4>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<div class="tab-bottom">
								<p><i class="fa fa-map-marker" aria-hidden="true"></i>4615 50 Ave, Lloydminster, Canada</p>
								<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@example.com">mail@example.com</a></p>
								<p><i class="fa fa-phone" aria-hidden="true"></i>+120 233 455 7654</p>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisthn cingelit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit dolor sit amet.</p>

						</div>	
						<div class="col-md-5 tabs-right2">
							<img src="public/images/coach1.jpg" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div>
						<div class="col-md-7 tabs-right1">
							<h3>sanrick  d'cruz</h3>
							<h4>Coach : Fit club trainer</h4>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<div class="tab-bottom">
								<p><i class="fa fa-map-marker" aria-hidden="true"></i>4615 50 Ave, Lloydminster, Canada</p>
								<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@example.com">mail@example.com</a></p>
								<p><i class="fa fa-phone" aria-hidden="true"></i>+010 233 455 6789</p>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisthn cingelit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit dolor sit amet.</p>

						</div>	
						<div class="col-md-5 tabs-right2">
							<img src="public/images/coach4.jpg" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div>
						<div class="col-md-7 tabs-right1">
							<h3>louis phillipe</h3>
							<h4>Coach : Fit club trainer</h4>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<div class="tab-bottom">
								<p><i class="fa fa-map-marker" aria-hidden="true"></i>4615 50 Ave, Lloydminster, Canada</p>
								<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@example.com">mail@example.com</a></p>
								<p><i class="fa fa-phone" aria-hidden="true"></i>+210 927 633 2468</p>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisthn cingelit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit dolor sit amet.</p>

						</div>	
						<div class="col-md-5 tabs-right2">
							<img src="public/images/coach2.jpg" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div>
						<div class="col-md-7 tabs-right1">
							<h3>mary lindey</h3>
							<h4>Coach : Fit club trainer</h4>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<div class="tab-bottom">
								<p><i class="fa fa-map-marker" aria-hidden="true"></i>4615 50 Ave, Lloydminster, Canada</p>
								<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@example.com">mail@example.com</a></p>
								<p><i class="fa fa-phone" aria-hidden="true"></i>+105 967 254 7834</p>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisthn cingelit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit dolor sit amet.</p>

						</div>	
						<div class="col-md-5 tabs-right2">
							<img src="public/images/coach3.jpg" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //agents section -->

	<!-- pricing plans -->
	<section class="pricing" id="pricing">
		<div class="container">
			<h3 class="heading">Pricing <span>Plans</span></h3>
			<div class="w3l-pricing-grids">
				<div class="agileits-pricing-grid first">
					<div class="pricing_grid">
						<div class="pricing-top">
							<h3>Standard</h3>
						</div>
						<div class="wthree-pricing-info">
							<p>$<span>15</span>/month</p>
						</div>
						<div class="pricing-bottom">
							<div class="pricing-bottom-bottom">
								<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
								<p><span class="fa fa-times"></span><span>Beginner </span> Classes</p>
								<p><span class="fa fa-times"></span><span>Personal </span> Training</p>  
								<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
								<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
							</div>
							<div class="buy-button">
								<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="agileits-pricing-grid second">
					<div class="pricing_grid">
						<div class="pricing-top blue-top">
							<h3>Popular</h3>
						</div>
						<div class="wthree-pricing-info blue-top">
							<p>$<span>20</span>/month</p>
						</div>
						<div class="pricing-bottom">
							<div class="pricing-bottom-bottom blue-pricing-bottom-top">
								<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
								<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
								<p><span class="fa fa-times"></span><span>Personal </span> Training</p>  
								<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
								<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
							</div>
							<div class="buy-button">
								<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="agileits-pricing-grid third">
					<div class="pricing_grid">
						<div class="pricing-top green-top">
							<h3>Golden</h3>
						</div>
						<div class="wthree-pricing-info green-top">
							<p>$<span>35</span>/month</p>
						</div>
						<div class="pricing-bottom">
							<div class="pricing-bottom-bottom green-pricing-bottom-top">
								<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
								<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
								<p><span class="fa fa-check"></span><span>Personal </span> Training</p>  
								<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
								<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
							</div>
							<div class="buy-button">
								<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
							</div>
						</div>
					</div>
				</div>

				<div class="agileits-pricing-grid fourth">
					<div class="pricing_grid">
						<div class="pricing-top yellow-top">
							<h3>Professional</h3>
						</div>
						<div class="wthree-pricing-info yellow-top">
							<p>$<span>50</span>/month</p>
						</div>
						<div class="pricing-bottom">
							<div class="pricing-bottom-bottom yellow-pricing-bottom-top">
								<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
								<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
								<p><span class="fa fa-check"></span><span>Personal </span> Training</p>  
								<p><span class="fa fa-check"></span><span>Olympic </span> weightlifting</p>
								<p class="text"><span class="fa fa-check"></span><span>Foundation</span> Training</p>
							</div>
							<div class="buy-button">
								<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</section>
	<!-- //pricing plans -->

	<!--pop-up-grid-->
	<div id="popup">
		<div id="small-dialog" class="mfp-hide">
			<div class="signin-form profile">
				<h3>Sign Up</h3>
				<div class="login-form">
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Username" required="">
						<input type="email" name="email" placeholder="E-mail" required="">
						<input type="password" name="password" placeholder="Password" required="">
						<input type="password" name="password" placeholder="Confirm Password" required="">
						<input type="submit" value="Sign Up">
					</form>
				</div>
			</div>
		</div>
	</div>						
	<!--pop-up-grid-->

	<!-- contact -->
	<section class="w3ls-section contact" id="contact">
		<div class="container">
			<div class="contact_wthreerow agileits-w3layouts">

				<div class="col-md-7 w3l_contact_form">
					<h4>Contact Form</h4>
					<form action="#" method="post">
						<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"
						required="">
						<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"
						required="">
						<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"
						required="">
						<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="col-md-5 agileits_w3layouts_contact_gridl">
					<div class="agileits_mail_grid_right_grid">
						<h4>Contact Info</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur. Nunc id dui vitae urna tincidunt varius.</p>
						<ul class="contact_info">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, 3FB, New Jersey.</li>
							<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span>+1(21) 244 567 5678</li>
							<li><span class="fa fa-globe" aria-hidden="true"></span><a href="#">info@website.com</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</section>
	<!-- //contact -->

	<!-- footer -->
	<section class="footer">
		<div class="container">
			<div class="agileinfo-grids">
				<div class="agile-grid-left agile-grid-right">
					<h4>Keep Updated On Social Media</h4>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agile-nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#about" class="scroll">About</a></li>
					<li><a href="#classes" class="scroll">Classes</a></li>
					<li><a href="#coaches" class="scroll">Our Coaches</a></li>
					<li><a href="#testimonials" class="scroll">Testimonials</a></li>
					<li><a href="#pricing" class="scroll">Pricing Plans</a></li>
					<li><a href="#contact" class="scroll">Contact us</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- //footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>© 2018 Fit club. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</div>
	<!-- //copyright -->


	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="public/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.js"></script>
	<!-- //Default-JavaScript-File -->

	<!-- Responsive tabs for coachhes section -->
	<script src="public/js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true,   // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- //Responsive tabs for coachhes section -->

	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
	<!-- //scrolling script -->

	<!--banner Slider starts Here-->
	<script src="public/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 4
		  $("#slider4").responsiveSlides({
		  	auto: true,
		  	pager:true,
		  	nav:true,
		  	speed: 500,
		  	namespace: "callbacks",
		  	before: function () {
		  		$('.events').append("<li>before event fired.</li>");
		  	},
		  	after: function () {
		  		$('.events').append("<li>after event fired.</li>");
		  	}
		  });

		});
	</script>
	<!--banner Slider ends Here-->

	<!-- Pop-up for pricing tables -->
	<script src="public/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //Pop-up for pricing tables -->

	<!-- Smooth scrolling -->
	<script src="public/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="public/js/move-top.js"></script>
	<script type="text/javascript" src="public/js/easing.js"></script>
	<!-- here stars scrolling icon -->
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
		<!-- //here ends scrolling icon -->
		<!-- //Smooth scrolling -->

	</body>
	<!-- //Body -->

	</html>
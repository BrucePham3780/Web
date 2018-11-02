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
<html>
<head>
	<title>Fit Point a Sports Category Flat Bootstrap Responsive Web Template| Home :: w3layouts</title>
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
	<div data-vide-bg="public/video/training">
		<div class="center-container">
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
							<li><a class="active" data-hover="HOME" href="index.php">HOME <span class="sr-only">(current)</span></a></li>
							<li><a data-hover="ABOUT" href="public/about.html">ABOUT</a></li>
							<li><a data-hover="PROGRAMS" href="programs.php">PROGRAMS</a></li>
							<li><a data-hover="TRAINER" href="coach.php">TRAINER</a></li>
							<li><a data-hover="CONTACT" href="public/contact.html">CONTACT</a></li>
							<li><a href="signup.php">Sign up free</a></li>
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
				<div class="socials">
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4dd797b06396480a"></script>
				</div>
				<div class="box_1-top">
					<div class="banner-info">
						<h2>FITNESS, HEALTH AND WELL BEING</h2>
						<h3>Fitness-workouts, Nutrition Tips And Advices, Get To Know How To Build Muscle</h3>
						<a class="hvr-rectangle-out button" href="#">Check out our features</a>
					</div>
					<div class="arrow text-center"><a class="scroll" href="#banner-bottom"><img src="public/images/arrow.png" alt="" /></a></div>
				</div>
			</div>
		</div>
	</div>

	<script>window.jQuery || document.write('<script src="public/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
	<script src="public/js/jquery.vide.min.js"></script>

	<!--banner bottom-->
	<div id="banner-bottom" class="banner-bottom">
		<div class="container">
			<h3 style=" color: Blue">Met Our Coaches</h3>

			<div class="bottom-grids">
				<?php 
				foreach ($coachlist as $coach) {
					

					?>
					<div class="col-md-3 bottom-grid text-center">
						<h3><?=$coach->coachName?></h3>
						<img src="public/images/<?=$coach->coachImage?>" weight="100" height="100" alt="" />
						<p><?=$coach->coachDetail?></p>
					</div>
					<?php 
				}
				?>
				
				<div class="clearfix"></div>
			</div>

			<h3  style=" color: Blue">Classes</h3>

			<div class="bottom-grids">
				<?php 
				foreach ($classlist as $class) {
					

					?>
					<div class="col-md-3 bottom-grid text-center">
						<h3><?=$class->className?></h3>
						<img src="public/images/<?=$class->classImage?>" alt="" />
						<p><?=$class->classDetail?></p>
					</div>
					<?php 
				}
				?>
				
				<div class="clearfix"></div>
			</div>
			<div class="content-grids">
				<div class="col-md-4 content-left text-center">
					<h4>Strength <span>Training</span></h4>
					<p> Nam libero tempore, cum soluta nobis 
						est eligendi optio cumque nihil impedit
						quo minus id quod maxime placeat 
					assumenda est, omnis dolor repellendus. </p>
				</div>
				<div class="col-md-8 content-right">
					<img class="img-responsive" src="public/images/pic9.jpg" alt="" />
				</div>
				<div class="col-md-8 content-right">
					<img class="img-responsive" src="public/images/pic5.jpg" alt="" />
				</div>
				<div class="col-md-4 content-left text-center">
					<h4>Weight <span>Loss</span></h4>
					<p> Nam libero tempore, cum soluta nobis 
						est eligendi optio cumque nihil impedit
						quo minus id quod maxime placeat 
					assumenda est, omnis dolor repellendus. </p>
				</div>
				<div class="col-md-4 content-left text-center">
					<h4>Best <span>Nutrition</span></h4>
					<p> Nam libero tempore, cum soluta nobis 
						est eligendi optio cumque nihil impedit
						quo minus id quod maxime placeat 
					assumenda est, omnis dolor repellendus. </p>
				</div>
				<div class="col-md-8 content-right">
					<img class="img-responsive" src="public/images/pic12.jpg" alt="" />
				</div>
				<div class="col-md-8 content-right">
					<img class="img-responsive" src="public/images/pic10.jpg" alt="" />
				</div>
				<div class="col-md-4 content-left text-center">
					<h4>Healthy <span>Diet</span></h4>
					<p> Nam libero tempore, cum soluta nobis 
						est eligendi optio cumque nihil impedit
						quo minus id quod maxime placeat 
					assumenda est, omnis dolor repellendus. </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	
	<!--//banner bottom-->
	<div class="testimonials">
		<div class="container">
			<h3>HAPPY WITH YOUR BODY?</h3>
			<p>Let Us Help You Get Your Health<span> Back And Track!</span></p>
		</div>
	</div>
	<!--training-->
	<div class="training">
		<div class="container">
			<div class="col-md-8 training-grid">
				<h3>Look and feel better in 30 days <span>,guaranteed.</span></h3>
				<div class="train-left">
					<img class="img-responsive" src="public/images/pic13.png" alt="" />
				</div>
				<div class="train-right">
					<p>Sed ut perspiciatis unde omnis 
						iste natus error sit voluptatem accusantium 
						doloremque laudantium, totam rem aperiam,
						eaque ipsa quae ab illo inventore veritatis
						et quasi architecto beatae vitae dicta sunt explicabo.
						At vero eos et accusamus et iusto 
						odio dignissimos ducimus qui blanditiis.
						Nemo enim ipsam voluptatem quia 
						voluptas sit aspernatur aut odit aut fugit, 
					sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
				</div>
				<div class="clearfix"></div>
				<div class="method-grids">
					<h3>Fitness Instructions</h3>
					<ul>
						<li><a href="#">voluptatem accusantium </a></li>
						<li><a href="#">dignissimos ducimus</a></li>
						<li><a href="#">doloremque laudantium</a></li>
						<li><a href="#">voluptatem accusantium </a></li>
						<li><a href="#">dignissimos ducimus</a></li>
						<li><a href="#">doloremque laudantium</a></li>
					</ul>
					<ul>
						<li><a href="#">dignissimos ducimus</a></li>
						<li><a href="#">voluptatem accusantium </a></li>
						<li><a href="#">doloremque laudantium</a></li>
						<li><a href="#">voluptatem accusantium </a></li>
						<li><a href="#">dignissimos ducimus</a></li>
						<li><a href="#">doloremque laudantium</a></li>
					</ul>
					<ul>
						<li><a href="#">voluptatem accusantium </a></li>
						<li><a href="#">dignissimos ducimus</a></li>
						<li><a href="#">doloremque laudantium</a></li>
						<li><a href="#">voluptatem accusantium </a></li>
						<li><a href="#">dignissimos ducimus</a></li>
						<li><a href="#">doloremque laudantium</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-4 training-left">
				<h3>Fitness</h3>
				<p>At vero eos et accusamus et iusto 
					odio dignissimos ducimus qui blanditiis
					praesentium voluptatum deleniti atque 
					corrupti quos dolores et quas molestias 
					excepturi sint occaecati cupiditate non
					provident, similique sunt in culpa qui officia
				deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				<img class="img-responsive" src="public/images/pic14.jpg" alt="" />
				<p>Sed ut perspiciatis unde omnis 
					iste natus error sit voluptatem accusantium 
					doloremque laudantium, totam rem aperiam,
				eaque ipsa quae ab illo inventore veritatis</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--//training-->
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
					<a href="#"><img class="img-responsive" src="public/images/blog1.jpg" alt="" /></a>
					<p><a href="#">Accusamus et iusto 
					odio dignissimos ducimus et iusto odio qui blanditiis dignissimos</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="foo-grids">
					<a href="#"><img class="img-responsive" src="public/images/blog2.jpg" alt="" /></a>
					<p><a href="#">Odio dignissimos ducimus qui blanditiis
					praesentium voluptatum Accusamus et iusto</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="foo-grids">
					<a href="#"><img class="img-responsive" src="public/images/blog3.jpg" alt="" /></a>
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
	<script src="public/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->

</body>
</html>
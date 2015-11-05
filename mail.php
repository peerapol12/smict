<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Mail Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Truck Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<script src="js/jquery-1.11.1.min.js"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600' rel='stylesheet' type='text/css'>
<!--/fonts-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
	 new WOW().init();
</script>
<!--start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!--start-smoth-scrolling-->

</head>
<body>
	<!-- banner -->
<div id="home" class="banner a-banner">
		<!-- container -->
		<div class="container">
			<div class="header">
				<div class="head-logo">
					<a href="index.php"><img src="logo4.png" alt="" /></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="Bye/images/menu.png" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom"><a href="index.php">Home<i><img src="Bye/images/nav-but1.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="about.php">About<i><img src="Bye/images/nav-but2.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom active"><a href="services.php">Services<i><img src="Bye/images/nav-but3.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="product-type.php">Product<i><img src="Bye/images/nav-but4.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="mail.php">Mail Us<i><img src="Bye/images/nav-but5.png" alt=""/></i></a></li>
						<div class="clearfix"> </div>
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
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
	<!-- //banner -->
	<!-- mail -->
	<div class="mail">
		<!-- container -->
		<div class="container">
			<div class="map footer-middle wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d789648.8275273686!2d-94.99758062072284!3d39.36606983615378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sweb+designing+software+usa!5e0!3m2!1sen!2sin!4v1434416660807"frameborder="0" style="border:0"></iframe>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h3>Contact Us</h3>
					<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
					<h4>Headquarters</h4>
					<p>123 T. Globel Place.
						<span>CG 09-123</span>
						Italy, Ba. 4567
					</p>
					<h4>Get In Touch</h4>
					<p>Telephone: +1 234 567 9871
						<span>FAX: +1 234 567 9871</span>
						E-mail: <a href="mailto:info@example.com">mail@example.com</a>
					</p>
				</div>
				<div class="col-md-6 contact-form wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<form>
						<input type="text" placeholder="Name" required="">
						<input type="text" placeholder="Email" required="">
						<input type="text" placeholder="Subject" required="">
						<textarea placeholder="Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //mail -->
	<!-- footer -->
	<?php include ('footer.php')?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Application-Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Truck Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fotorama.css" rel="stylesheet" />
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
<!-- pop-up -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
<!-- pop-up -->
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
	<!-- PBX -->
	<div class="products-top">
	<div class="testimonials">
		<div class="container" align="center">
					<div class="testimonial-nfo wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					  <h3>Application-Solution</h3><br /><br />
					</div>
					  	<div class="wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<div class="fotorama" data-loop="true">
								<img src="images/app1.png" data-caption="Web Service Payment Gateway Project e-Payment For I-Mobile 3GX"alt=""/>
								<img src="images/app2.png" data-caption="Web Service Payment Gateway Project e-Payment For I-Mobile 3GX" alt="" />
								<img src="images/app3.jpg" data-caption="ระบบบริหารงาน ERPโรงเรียน" alt="" />
								<img src="images/app4.png" data-caption="Online Excess Baggage Project บริษัท การบินไทย จำกัด มหาชน"  alt=""/>
								
							</div>
						</div>
					<br />
		</div>
	</div>
	</div>
	<!-- PBX -->
	<?php include ('footer.php')?>
	<script src="js/fotorama.js"></script>
</body>
</html>
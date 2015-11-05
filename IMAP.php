<!DOCTYPE html>
<html>
<head>
<title>SMART ICT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8"/>
<meta name="keywords" content="Truck Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/aaa.css" />
<link rel="stylesheet" href="css/uikit.css"/>

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
					<span class="menu"><img src="images/menu.png" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom"><a href="index.php">Home<i><img src="images/nav-but1.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="about.php">About<i><img src="images/nav-but2.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="services.php">Services<i><img src="images/nav-but3.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom active"><a href="product-type.php">Product<i><img src="images/nav-but4.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="mail.php">Mail Us<i><img src="images/nav-but5.png" alt=""/></i></a></li>
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
		<!-- //container -->
	</div>
	<!-- //banner -->
	<!-- products-top -->
	<div class="products-top">
		<!-- container -->
	<div class="news">
		<div class="news-grids">
			<h3 align="center"><?php echo $_GET["type_name"] ?></h3>
			<br/>
			<br/>
			<div class="container">
			
				<div data-uk-grid class="uk-grid">
				<?php include 'conn.php';
				
					$sqll = "SELECT * FROM product WHERE pro_type_id = '".$_GET["pro_type_id"]."'";
					$queryy = mysql_query($sqll);
					
					while ($resultt = mysql_fetch_array($queryy)) {
						
					$sqll2 = "SELECT * FROM detail_pro WHERE pro_id = '".$resultt["pro_id"]."'";
					$queryy2 = mysql_query($sqll2);															
				?>
				
  					<div class="uk-width-small-1-2 uk-width-medium-1-3 "><br>
  						
    					
    						<div class="uk-border-rounded"style="height: 300px;overflow: hidden; border: 5px solid #D6D6D6;">
      							<a href= "#<?php echo $resultt["pro_id"];?>"  data-uk-modal><img class="test-center" src="<?php echo $resultt["picture"];?>" style="height: 290px;width: 290px;" hspace="5%" vspace="3%" alt="..."></a>
      						</div>
      						<div id="<?php echo $resultt["pro_id"];?>" class="uk-modal">
      							<div class="uk-modal-dialog">
      								 <a class="uk-modal-close uk-close"></a>
        							<h4 class="bg-info"><?php echo $resultt["pro_name"];?></h4>
        							<h5>Detail</h5>
        								<ol>
        								<?php 	while ($resultt2 = mysql_fetch_array($queryy2)) { ?>
        								<li class="bg-warning"><?php echo $resultt2["detail"];?></li>
        								<?php }?>		
        								</ol>		
      							</div>
      						</div>
    				
					</div>
				
				<!--<div class="col-md-4 bg wow fadeInLeft animated thumbnail" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s; height: 450px;">
					
						<img src="<?php echo $resultt["picture"];?>" class="img-responsive col-md-12"  alt="">
							<div class="caption">
								<h4><?php echo $resultt["pro_name"];?></h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								
					
							</div>
					
				</div>-->
		
				<?php }?>
				
					
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>			
	</div>	
	</div>
	<!-- //products-top -->
	<!-- footer -->
	<?php include ('footer.php')?>
	<script src="js/uikit.js"></script>
	<script src="js/components/grid.js"></script>
	<script src="js/components/lightbox.js"></script>
	<script src="js/core/modal.js"></script>
</body>
</html>
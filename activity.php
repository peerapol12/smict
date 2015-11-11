<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Smart ICT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Truck Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/uikit.css" rel="stylesheet"/>
<link href="css/fotorama.css" rel="stylesheet"/>
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
					<span class="menu"><img src="images/menu.png" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom"><a href="index.php">Home<i><img src="Bye/images/nav-but1.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="about.php">About<i><img src="Bye/images/nav-but2.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="services.php">Services<i><img src="Bye/images/nav-but3.png" alt=""/> </i> </a></li>
						<li class="hvr-sweep-to-bottom"><a href="product-type.php">Product<i><img src="Bye/images/nav-but4.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="mail.php">Mail<i><img src="Bye/images/nav-but5.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom active"><a href="activity.php">กิจกรรม<i><img src="Bye/images/nav-but5.png" alt=""/></i></a></li>
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
<div class="container">
	<h1 align="center">กิจกรรม บริษัท</h1>
</div>
<div class="container">
<div data-uk-grid class="uk-grid">
				<?php include 'conn.php';
				
					$sqll = "SELECT * FROM act_type";
					$queryy = mysql_query($sqll);
					
					while ($resultt = mysql_fetch_array($queryy)) {
					$sqll2 = "select * from activity where act_id = '".$resultt["act_id"]."'";
					$queryy2 = mysql_query($sqll2);
																				
				?>
				
  					<div class="uk-width-small-1-2 uk-width-medium-1-3 "><br>
  						
    					
    						<div class="uk-border-rounded"style="height: 300px;overflow: hidden; background-image: url(333.jpg);background-repeat: no-repeat;">
      							<a href= "#<?php echo $resultt["act_id"];?>" data-uk-modal><h4><?php echo $resultt["activity"];?></h4> </a>
      						</div>
      						<div id="<?php echo $resultt["act_id"];?>" class="uk-modal">
      							<div class="uk-model-dialog">
      								<a class="uk-modal-close uk-close"></a>
      								<div class="fotorama" data-loop = "true">
      									<?php while ($resultt2 = mysql_fetch_array($queryy2)){?>
      									<img src="<?php echo $resultt2["picname"];?>">
      									<?php }?>
      								</div>
    							</div>
    						</div>
    				</div>
					<?php }?>
</div>
</div>
<?php include ('footer.php')?>
<script src="js/fotorama.js"></script>
<script src="js/uikit.js"></script>
<script src="js/components/grid.js"></script>
<script src="js/components/lightbox.js"></script>
<script src="js/core/modal.js"></script>
</body>
</html>
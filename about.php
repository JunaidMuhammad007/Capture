<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Capture - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    	section.ftco-section {
    		background: white;
		}

		.staff .text .position {
    		color: #f67e7d;
		}
    </style>
  </head>
  <body>
  	<?php 
  		include("connection.php");
  	?>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html"><span class="flaticon-camera"></span>Capture</a></h1>
			<?php include("NavBar.php"); 
				if(!$userLoggedIn){
					header("Location: loginForm.php");
				}
			?>

		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section bg-light ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-9 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
	            <h1 class="mb-3 bread">About Us</h1>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section-no-padding bg-light">
				<div class="hero-wrap">
					<div class="overlay"></div>
					<div class="d-flex">
						<div class="author-image text img p-md-5 ftco-animate" style="background-image: url(images/author.jpg);">
							
						</div>
						<div class="author-info text p-4 mt-5 mb-5 ftco-animate">
							<div class="desc">
								<h1 class="mb-4">Capture Photography Agency</h1>
								<p class="mb-4">Photography Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<ul class="mb-4">
									<li>Even the all-powerful Pointing has no control about the blind texts</li>
									<li>One day however a small line of blind text by the name of Lorem Ipsum decided</li>
									<li>The Big Oxmox advised her not to do so, because there were thousands</li>
								</ul>
								<ul class="ftco-social mt-3">
		              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		            </ul>
	            </div>
						</div>
					</div>
				</div>
			</section>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row">
	    			<?php 
	    				$q = $db->query("
	    						SELECT
	    						name,
	    						position,
	    						description,
	    						image_file
	    						FROM
	    						staff
	    					");

	    				if($q === false)
						{	
							die($db->error);
						}

	    				while($row = $q->fetch_assoc()){
	    			?>
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="staff">
								<div class="img" style="background-image: url(images/<?php echo "staff/".$row["image_file"];?>);"></div>
								<div class="text pt-4">
									<h3><?php echo $row["name"];?></h3>
									<span class="position mb-2"><?php echo $row["position"];?></span>
									<p><?php echo $row["description"];?></p>
									<ul class="ftco-social-icon d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
	    	</div>
	    </section>
	    <?php include("footer.php");?>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
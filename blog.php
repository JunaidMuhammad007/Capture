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
  </head>
  <body>
<?php
		include("connection.php");
		$userLoggedIn = false;
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
		</aside>
		<div id="colorlib-main">
			<section class="ftco-section bg-light ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-9 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
	            <h1 class="mb-3 bread">Read Our Articles</h1>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-8">
	    				<div class="row">
	    					<?php 
	    						$q = $db->query("SELECT * FROM blogs"); 

	    						if($q === false)
								{	
									die($db->error);
								}

								while($row = $q->fetch_assoc()){
	    					?>
			    			<div class="col-md-6">
			    				<div class="blog-entry ftco-animate">
										<a href=<?php echo "single.php?blog_id=".$row["blog_id"];?> class="img img-2" style="background-image: url(images/<?php echo $row['image_file'];?>);"></a>
										<div class="text text-2 pt-2 mt-3">
				              <h3 class="mb-2"><a href=<?php echo "single.php?blog_id=".$row["blog_id"];?>><?php echo $row["title"];?></a></h3>
				              <div class="meta-wrap">
												<p class="meta">
				              		<span><?php echo $row["_date"];?></span>
				              		<span><?php echo $row["category"];?></span>
				              	</p>
			              	</div>
				              <p class="mb-4"><?php echo substr($row["description"], 0, 89)."...";?></p>
				            </div>
									</div>
			    			</div>
			    			<?php } ?>
			    		</div><!-- END-->
			    		<div class="row mt-5">
			          <div class="col text-center">
			            <!--div class="block-27">
			              <ul>
			                <li><a href="#">&lt;</a></li>
			                <li class="active"><span>1</span></li>
			                <li><a href="#">2</a></li>
			                <li><a href="#">3</a></li>
			                <li><a href="#">4</a></li>
			                <li><a href="#">5</a></li>
			                <li><a href="#">&gt;</a></li>
			              </ul>
			            </div-->
			          </div>
			        </div>
			    	</div>
	    			<div class="col-lg-4 sidebar ftco-animate bg-light">
	            <div class="sidebar-box">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	                </div>
	              </form>
	            </div>
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Categories</h3>
	              <ul class="categories">
	                <li><a href="#">Fashion <span>(6)</span></a></li>
	                <li><a href="#">Technology <span>(8)</span></a></li>
	                <li><a href="#">Travel <span>(2)</span></a></li>
	                <li><a href="#">Food <span>(2)</span></a></li>
	                <li><a href="#">Photography <span>(7)</span></a></li>
	              </ul>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Popular Articles</h3>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Tag Cloud</h3>
	              <ul class="tagcloud">
	                <a href="#" class="tag-cloud-link">animals</a>
	                <a href="#" class="tag-cloud-link">human</a>
	                <a href="#" class="tag-cloud-link">people</a>
	                <a href="#" class="tag-cloud-link">cat</a>
	                <a href="#" class="tag-cloud-link">dog</a>
	                <a href="#" class="tag-cloud-link">nature</a>
	                <a href="#" class="tag-cloud-link">leaves</a>
	                <a href="#" class="tag-cloud-link">food</a>
	              </ul>
	            </div>

							<div class="sidebar-box subs-wrap img" style="background-image: url(images/bg_1.jpg);">
								<div class="overlay"></div>
								<h3 class="mb-4 sidebar-heading">Newsletter</h3>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
	              <form action="#" class="subscribe-form">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Email Address">
	                  <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
	                </div>
	              </form>
	            </div>

	          </div><!-- END COL -->
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
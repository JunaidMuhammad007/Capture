	
<nav id="colorlib-main-menu" role="navigation">
	<ul>
		<?php 
		header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
		header("Pragma: no-cache"); // HTTP 1.0.
		header("Expires: 0 "); // Proxies.
		
		if(isset($_COOKIE["userType"]) && $_COOKIE["userType"] == "user"){ 
				$userLoggedIn = true;
			?>
			<li><a href="logout.php">Log out</a></li>
		<?php }else{ ?>
			<li><a href="loginForm.php">Log in</a></li>
		<?php $userLoggedIn = false; } ?>
		<li><a href="index.php">Home</a></li>
		<?php 
		if($userLoggedIn == true){ ?>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="blog.php">Blog</a></li>
		<?php } ?>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</nav>
<div class="colorlib-footer">
	<h3>Follow Us Here!</h3>
	<div class="d-flex justify-content-center">
		<ul class="d-flex align-items-center">
			<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-facebook"></i></a></li>
			<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-twitter"></i></a></li>
			<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-instagram"></i></a></li>
			<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-linkedin"></i></a></li>
		</ul>
	</div>
</div>
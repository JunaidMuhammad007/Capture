<nav id="colorlib-main-menu" role="navigation">
	<ul>
		<?php 
		header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
		header("Pragma: no-cache"); // HTTP 1.0.
		header("Expires: 0 "); // Proxies.
		
		if(isset($_COOKIE["userType"]) && $_COOKIE["userType"] == "admin"){ 
				$userLoggedIn = true;
			?>
			<li><a href="logout.php">Log out</a></li>
		<?php }else{ ?>
			<li><a href="loginForm.php">Log in</a></li>
		<?php $userLoggedIn = false; } ?>
		<li><a href="index.php">Home</a></li>
		<li><a href="listImages.php">Gallery Images</a></li>
		<li><a href="listMembers.php">Members</a></li>
		<li><a href="listBlogs.php">Blogs</a></li>
		<li><a href="../index.php">View Site</a></li>
	</ul>
</nav>	
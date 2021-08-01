<?php
	include("../connection.php");

	$q = $db->query("DELETE FROM blogs WHERE blog_id = '$_GET[blog_id]'");

	
	header("Location: listBlogs.php");

?>
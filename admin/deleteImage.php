<?php
	include("../connection.php");

	$q = $db->query("DELETE FROM images WHERE file_name = '$_GET[file_name]'");

	header("Location: listImages.php");

?>
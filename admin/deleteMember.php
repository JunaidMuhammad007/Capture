<?php
	include("../connection.php");

	$q = $db->query("DELETE FROM staff WHERE staff_id = '$_GET[staff_id]'");

	
	header("Location: listMembers.php");

?>
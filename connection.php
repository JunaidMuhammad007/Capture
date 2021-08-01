<?php
	
	$db = new mysqli;

	$db->connect("localhost", "root", "");

	$q = $db->query("USE projdb");

	if($q == NULL){
		echo "Error connecting with database!";
	}
	else{
		echo "Connection successfull!";
	}

	include("../functions.php");
?>

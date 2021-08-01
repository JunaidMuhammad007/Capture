<?php

	include("../connection.php");

	$q = $db->query("SELECT
		name,
		password
		FROM
		admin_details
		WHERE
		name = '$_POST[username]' AND password = '$_POST[password]'
		");

	if($q->fetch_assoc() == NULL){

		header("Location: loginForm.php?validData=false");

	}else{

		SetUserTypeCookie("admin");
		header("Location: index.php");

	}

?>

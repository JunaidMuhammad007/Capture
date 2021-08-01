<?php

	include("connection.php");

	$q = $db->query("SELECT
		name,
		password
		FROM
		user_details
		WHERE
		name = '$_POST[loginUsername]' AND password = '$_POST[loginPassword]'
		");

	if($q->fetch_assoc() == NULL){
		header("Location: loginForm.php?validData=false");

	}else{

		SetUserTypeCookie("user");
		header("Location: index.php");

	}

?>

<?php

	include("connection.php");

	$q = $db->query("SELECT
		username
		FROM
		user_details
		WHERE
		username = '$_POST[signupUsername]'
		");
	$row = $q->fetch_assoc();

	if($row["username"] == NULL){

		$q = $db->query("INSERT INTO 
		user_details(username, password)
		VALUES
		('$_POST[signupUsername]', '$_POST[signupPassword]')
		");

		SetUserTypeCookie("user");
		header("Location: index.php");

	}else{

		header("Location: signupForm.php?validData=false");

	}

	

?>

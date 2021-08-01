<?php
	include("../connection.php");

	$file = "";
	$fileArray = "";

	if($_POST["image_file"] == "")
	{
		$file = "dummy.jpg";
	}else{
		$fileArray = explode('\\', $_POST["image_file"]);
		$file = $fileArray[count($fileArray) -1];

		$tfile = $_POST["filename"];
		$newfile = '..\images\\'.$file;
		 
		if (!copy($tfile, $newfile)) {
		    echo "failed to copy $file...\n";
		}else{
		    echo "copied $file into $newfile\n";
		}
	}
	

	$q = $db->query("
			INSERT INTO 
			staff(
			name,
			position,
			description,
			image_file) 
			VALUES(
			'$_POST[name]',
			'$_POST[position]',
			'$_POST[description]',
			'$file')
			");

	if($q === false)
	{
		header("Location: listMembers.php?addition=false");
		//die($db->error);
	}
	else
	{
		header("Location: listMembers.php?addition=true");
	}

?>
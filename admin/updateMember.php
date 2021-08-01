<?php
	include("../connection.php");

	$file = "";
	$fileArray = "";

	if($_POST["image_file"] == "")
	{
		$q = $db->query("SELECT image_file from staff where staff_id = '$_GET[staff_id]'");
		$row = $q->fetch_assoc();
		$file = $row["image_file"];
	}
	else{
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
		UPDATE staff 
		SET name = '$_POST[name]',
	 		position =  '$_POST[position]',
	 		description = '$_POST[description]',
	 		image_file = '$file'
	 	WHERE staff_id = '$_GET[staff_id]'");

	if($q === false)
	{
		header("Location: listMembers.php?addition=false");
	}
	else
	{
		header("Location: listMembers.php?addition=true");
	}

?>
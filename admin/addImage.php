<?php
	include("../connection.php");

	$fileArray = explode('\\', $_POST["filename"]); 
	$file = $fileArray[count($fileArray) -1];

	//echo $_POST["filename"];
	//echo "|   ".$file;

	$q = $db->query("INSERT INTO images(file_name) VALUES('$file')");

	$tfile = $_POST["filename"];
	$newfile = '..\images\\'.$file;
	 
	if (!copy($tfile, $newfile)) {
	    echo "failed to copy $file...\n";
	}else{
	    echo "copied $file into $newfile\n";
	}

	if($q === false)
	{
		header("Location: listImages.php?addition=false");
	}
	else
	{
		header("Location: listImages.php?addition=true");
	}

?>
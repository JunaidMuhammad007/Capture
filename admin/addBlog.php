<?php
	include("../connection.php");

	$file = "";
	$fileArray = "";

	if($_POST["image_file"] == "")
	{
		$file = "dummy.jpg";
	}elseif(preg_match('/[^a-zA-Z\d]/', $_POST["image_file"])){
		$fileArray = explode('\\', $_POST["image_file"]);
		$file = $fileArray[count($fileArray) -1];

		$tfile = $_POST["image_file"];
		$newfile = "..\images\\blogs\\".$file;
		 
		if (!copy($tfile, $newfile)) {
		    echo "failed to copy $file...\n";
		}else{
		    echo "copied $file into $newfile\n";
		}
	}else{
		$file = $_POST["image_file"];
	}

	$newDate = date("Y-m-d",strtotime($_POST["date"]));

	echo "\n".$newDate."\n";
	echo $_POST["author"];
	$q = $db->query("
			INSERT INTO 
			blogs(
			title,
			_date,
			category,
			description,
			image_file,
			author_id)  
			VALUES(
			'$_POST[title]',
			'$newDate',
			'$_POST[category]',
			'$_POST[description]',
			'$file',
			'$_POST[author]')
			");

	if($q === false)
	{
		header("Location: listblogs.php?addition=false");
		die($db->error);
	}
	else
	{
		header("Location: listblogs.php?addition=true");
	}

?>
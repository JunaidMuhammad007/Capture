<?php
	include("../connection.php");

	$file = "";
	$fileArray = "";

	if($_POST["image_file"] == "")
	{
		$q = $db->query("SELECT image_file from blogs where blog_id = '$_GET[blog_id]'");
		$row = $q->fetch_assoc();
		$file = $row["image_file"];
	}
	else{
		$fileArray = explode('\\', $_POST["image_file"]);
		$file = $fileArray[count($fileArray) -1];

		$tfile = $_POST["image_file"];
		$newfile = "..\images\\blogs\\".$file;
		 
		if (!copy($tfile, $newfile)) {
		    echo "failed to copy $file...\n";
		}else{
		    echo "copied $file into $newfile\n";
		}
	}

	$q = $db->query("
			UPDATE blogs
			SET title = '$_POST[title]',
				_date = '$_POST[date]' ,
				category = '$_POST[category]' ,
				description = '$_POST[description]',
				image_file =  '$file',
				author_id = '$_POST[author]'  
			WHERE blog_id = '$_GET[blog_id]'");

	if($q === false)
	{
		//header("Location: listblogs.php?addition=false");
		die($db->error);
	}
	else
	{
		header("Location: listblogs.php?addition=true");
	}

?>
<?php
	$uploaddir = 'C:/xampp/htdocs/PHPTST/FileManager/upload/';

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir. $_FILES['userfile']['name'])) {
		echo "File is valid, and was successfully uploaded.";
	} else {
		echo "Possible file upload attack!";
	}
?>
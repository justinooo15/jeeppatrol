<?php
	//include("includes/connection.php");

	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES['uploadphoto']['name']);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);

	if (isset($_POST['uploadphoto'])) {
		$check = getimagesize($_FILES["uploadphoto"]["tmp_name"]);

		if ($check !== false) {
			
		}
	}

?>
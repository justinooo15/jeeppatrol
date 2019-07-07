<?php
	include("includes/connection.php");

	$username = "tino";
	$target_dir = 	$_SERVER["DOCUMENT_ROOT"] . "/images/post/";
	$postimg = $_FILES['post_image']['name'];
	$ext = pathinfo($postimg, PATHINFO_EXTENSION);
	$newname =	rand() .  '.' . $ext;

	if ($_FILES['post_image']['size'] > 26000000) {
		echo "error file too big";
	}

	if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "mp4" && $ext != "3gp") {
		echo "Sorry. Your File Format is not Supported";
	}

	if(move_uploaded_file($_FILES['post_image']['tmp_name'], $target_dir . "/" . $newname)){

		$insertimg = $conn->prepare("insert into tbl_uploaded_images (uploaded_image) values (:img)");
		$insertimg->bindParam(':img', $newname);

		$insertimg->execute();
		$last_id = $conn->insert_id;
		//echo "Upload sucess";
		header("location: upload-page.php?id=" . $last_id);
	}else{
		echo "Sorry, there was an error uploading your file.";
	}



?>
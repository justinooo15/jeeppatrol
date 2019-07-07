<?php 

	session_start();
	
	$others = $_POST['others'];

	if (!isset($others)) {
		header("Location: home.php");
	}

	include("includes/connection.php");

	$driverid = $_POST['driver'];
	$getname = $conn->prepare("select f_name, l_name from tbl_drivers where driver_id = ?");
	$getname->execute(array($driverid));

	while($row = $getname->fetch()){
		$drivername = $row['f_name'] . " " . $row['l_name'];
	}

	$uid = $_POST['uid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$fullname = $fname . " " . $lname;
	$vio = $_POST['violation'];
	$pend = "pending";

	if (isset($vio)) {
		$chckvio = implode(' , ', $vio);

		$insertnewpost = $conn->prepare("insert into tbl_posts (user_id, user_fullname, driver_id, driver_name, violation, post_status, date_time) values (:uid, :fullname, :driverid, :drivername, :vio, :pend, now())");

		$insertnewpost->bindParam(':uid', $uid);
		$insertnewpost->bindParam(':fullname',$fullname);
		$insertnewpost->bindParam(':driverid', $driverid);
		$insertnewpost->bindParam(':drivername', $drivername);
		$insertnewpost->bindParam(':vio', $chckvio);
		$insertnewpost->bindParam(':pend', $pend);

		$insertnewpost->execute();
		$last_id = $conn->lastInsertId();

	}else{
		$insertnewpost = $conn->prepare("insert into tbl_posts (user_id, user_fullname, driver_id, driver_name, others, post_status, date_time) values (:uid, :fullname, :driverid, :drivername, :others, :pend, now())");

		$insertnewpost->bindParam(':uid', $uid);
		$insertnewpost->bindParam(':fullname',$fullname);
		$insertnewpost->bindParam(':driverid', $driverid);
		$insertnewpost->bindParam(':drivername', $drivername);
		$insertnewpost->bindParam(':others', $others);
		$insertnewpost->bindParam(':pend', $pend);

		$insertnewpost->execute();
		$last_id = $conn->lastInsertId();
	}

	$target_dir = 	$_SERVER["DOCUMENT_ROOT"] . "/images/post/";
	$postimg = $_FILES['post_image']['name'];
	$ext = pathinfo($postimg, PATHINFO_EXTENSION);
	$newname =	rand() .  '.' . $ext;

	if(count($_FILES['post_image']['name']) > 3) {
		$_SESSION['file_limit'] = "Only 3 images/videos are allowed to be uploaded";
		header("location: home.php");
	}elseif ($_FILES['post_image']['size'] > 26000000) {
		$_SESSION['file_big'] = "error file too big";
		header("location: home.php");
	}elseif ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "mp4" && $ext != "3gp") {
		$_SESSION['format_support'] = "Sorry. Your File Format is not Supported";
		header("location: home.php");
	}elseif (count($_FILES['post_image']['name']) > 0) {

		if(move_uploaded_file($_FILES['post_image']['tmp_name'], $target_dir . "/" . $newname)){

			$insertimg = $conn->prepare("insert into tbl_uploaded_images (post_id, uploaded_image) values (:id,:img)");
			$insertimg->bindParam(':id', $last_id);
			$insertimg->bindParam(':img', $newname);

			$insertimg->execute();

		}else{
			echo "Sorry, there was an error uploading your file.";
		}
	}

	$_SESSION['feedback'] = "Your feedback has been successfully sent!";
	header("Location: home.php");

?>
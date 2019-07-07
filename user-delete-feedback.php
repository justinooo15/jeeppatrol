<?php
	session_start();

	include("includes/connection.php");

	$id = $_POST['srcid'];

	if (!isset($id)) {
		header("location: home.php");
	}else{

		$deletefeedback = $conn->prepare("delete from tbl_posts where post_id = ?");
		$deletefeedback->execute(array($id));

		$_SESSION['record_delete'] = "Record has been successfully deleted.";
		header("location: home.php");
	}
?>
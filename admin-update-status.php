<?php
	session_start();
	include("includes/connection.php");

	if (!isset($_POST['status'])) {
		header("location: admin-edit-status.php");
	}

	$status = $_POST['status'];
	$id = $_REQUEST['id'];

	$update = $conn->prepare("update tbl_posts
								set post_status = ?
								where post_id = ?");
	$update->execute(array($status, $id));

	$_SESSION['status_update'] = "The report status has been updated";
	header("location: admin-edit-status.php?id=" . $id);
?>
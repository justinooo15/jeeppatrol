<?php
	session_start();
	include("includes/connection.php");

	$srcid = $_POST['srcid'];

	if (!isset($srcid)) {
		header("location: admin-user-list.php");
	}
	$deleteuser = $conn->prepare("delete from tbl_users where user_id = ?");
	$deleteuser->execute(array($srcid));

	$_SESSION['delete_user'] = "User has been deleted";
	header("location: admin-user-list.php");
?>
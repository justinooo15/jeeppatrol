<?php
	session_start();
	include("includes/connection.php");

	$srcid = $_POST['srcid'];

	if (!isset($srcid)) {
		header("location: admin-list-reports.php");
	}
	$deletepost = $conn->prepare("delete from tbl_posts where post_id = ?");
	$deletepost->execute(array($srcid));

	$_SESSION['report_delete'] = "The Report has been deleted";
	header("location: admin-list-reports.php");

?>
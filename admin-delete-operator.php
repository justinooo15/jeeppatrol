<?php
	session_start();
	include("includes/connection.php");
	$id = $_POST['srcid'];

	if (!isset($id)) {
		header("location: admin-operator-list.php");
	}

	$deloperator = $conn->prepare("delete from tbl_users where user_id = ?");
	$deloperator->execute(array($id));

	$_SESSION['operator_delete'] = "Operator successfully deleted";
	header("location: /admin-operator-list.php");
?>
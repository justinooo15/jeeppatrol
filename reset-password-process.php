<?php
	session_start();
	include("includes/connection.php");
	$pass = $_POST['pass'];
	$conpass = $_POST['conpass'];

	if ($conpass != $pass) {
		$_SESSION['not_equal'] = "Your password does not match!";
		header("Location: forgot-password.php");
	}

	$hashedpass = password_hash($pass, PASSWORD_DEFAULT);
	$updatepass = $conn->prepare("update tbl_users
									set pword = ?
									where user_id = ?");
	$updatepass->execute(array($hashedpass, $_REQUEST['id']));

	$_SESSION['changed_pass'] = "Your Password has been updated!";
	header("location: index.php");
?>
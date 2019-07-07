<?php
	session_start();
	include("includes/connection.php");

	$id = $_REQUEST['id'];
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	$hashedpass = password_hash($password, PASSWORD_DEFAULT);

	$update = $conn->prepare("update tbl_users
								set f_name = ?,l_name = ?,contact_no = ?,email = ?,uname = ?,pword = ?
								where user_id = ?");
	$update->execute(array($fname,$lname,$contact_no,$email,$username,$password,$id));

	$_SESSION['update_operator'] = "update_operator";
	header("location: admin-edit-operator.php?id=" . $id);
?>
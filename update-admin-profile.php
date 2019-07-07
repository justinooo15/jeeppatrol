<?php
	session_start();
	include("includes/connection.php");

	$pass = $_POST['pass_word'];
	$con = $_POST['password_con'];

	if (!isset($pass)) {
		header("Location: admin-edit-profile.php");
	}

	if ($pass != $con) {
		$_SESSION['confirm_pass'] = "Password do not Match!";
		header("location: admin-edit-profile.php");
	}else{

		$hashedpass = password_hash($pass, PASSWORD_DEFAULT);

		$user_id = $_POST['uid'];
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$contact = $_POST['contact'];
		$gend = $_POST['gender'];

		$newname = $fname ." ". $lname;

		//for updating the names in all post by user id
		$getoldnamepost = $conn->prepare("select user_fullname from tbl_posts where user_id = ?");
		$getoldnamepost->execute(array($user_id));
		while ($oldnamepost = $getoldnamepost->fetch()) {
			$oldname = $oldnamepost['user_fullname'];

			$updatepost = $conn->prepare("update tbl_posts
									set user_fullname = ?
									where user_fullname = ?");

			$updatepost->execute(array($newname, $oldname));	
		}

		//for updating the names in all comments by user id
		$getoldnamecom = $conn->prepare("select user_name from tbl_comments where user_id = ?");
		$getoldnamecom->execute(array($user_id));
		while ($oldnamecom = $getoldnamepost->fetch()) {
			$oldnamee = $oldnamecom['user_name'];

			$updatecom = $conn->prepare("update tbl_comments
									set user_name = ?
									where user_name = ?");

			$updatecom->execute(array($newname, $oldnamee));
		}

		//for updating the name in user by userid
		$updateuser = $conn->prepare("update tbl_users
									set f_name = ?, l_name = ?, contact_no = ?, gender = ?, pword = ?
									where user_id = ?");

		$updateuser->execute(array($fname, $lname, $contact, $gend, $hashedpass, $user_id));

		header("location: admin-edit-profile.php");
	}

?>
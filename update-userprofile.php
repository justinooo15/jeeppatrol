<?php
	session_start();
	include("includes/connection.php");

	$pass = $_POST['pass_word'];
	$con = $_POST['password_con'];

	if (!isset($pass)) {
		header("Location: account-settings.php");
	}

	if ($pass != $con) {
		$_SESSION['confirm_pass'] = "Password do not Match!";
		header("location: /account-settings.php");
	}else{

		$hashedpass = password_hash($pass, PASSWORD_DEFAULT);

		$user_id = $_POST['uid'];
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];

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

		//for updating the name in user by userid
		$updateuser = $conn->prepare("update tbl_users
									set f_name = ?, l_name = ?, contact_no = ?, email = ?, pword = ?
									where user_id = ?");

		$updateuser->execute(array($fname, $lname, $contact, $email, $hashedpass, $user_id));

	}

	if(count($_FILES) > 0) {
	//echo "s".$_POST['id'];	
		if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			//echo "s".$_POST['id'];	
    		$imgData = file_get_contents($_FILES['image']['tmp_name']);
    		$imageProperties = getimageSize($_FILES['image']['tmp_name']);
    		$statement = $conn->prepare("Update tbl_users set photo = ? where user_id = ?");
    		$statement->execute(array($imgData,$user_id));
    		print_r($conn->errorInfo());
		}
	}

	header("location: account-settings.php");

?>
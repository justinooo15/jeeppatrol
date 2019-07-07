<?php
	session_start();

	if (!isset($_POST['firstname'])) {
		header('location: signup.php');
	}

	
	include("includes/connection.php");

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$chckifexist = $conn->prepare("select uname from tbl_users where uname = ?");
	$chckifexist->execute(array($username));

	while ($row = $chckifexist->fetch()) {
		$chckuname = $row['uname'];
	}

	if ($username == $chckuname) {
		$_SESSION['user_exist'] = "Username already exists!";
		header("location: index.php");
	}elseif(empty($chckuname)){

		$hashedpass = password_hash($password, PASSWORD_DEFAULT);

		$lvluser = "user";

		try {

			$adduser = $conn->prepare("insert into tbl_users (f_name, l_name, contact_no, email, uname, pword, user_level) values (:fname, :lname, :number, :email, :unamee, :pwordd, :level)");

			$adduser->bindParam(':fname',$firstname);
			$adduser->bindParam(':lname',$lastname);
			$adduser->bindParam(':number',$contact);
			$adduser->bindParam(':email',$email);
			$adduser->bindParam(':unamee',$username);
			$adduser->bindParam(':pwordd',$hashedpass);
			$adduser->bindParam(':level',$lvluser);

			$adduser->execute();

			if (!file_exists("images/user/$username")) {
				mkdir("images/user/$username");
			}

			$getlastid = $conn->lastInsertId();
			$_SESSION['user_id'] = $getlastid;
			$_SESSION['user_fullname'] = $firstname . " " . $lastname;
			$_SESSION['email'] = $email;

			header("Location: send-email-verify.php");
		
		} catch (PDOException $e) {
			echo "Error because:" . $e;
			echo "<h3>Refresh the page to retry</h3>";
		}
	}

	
?>
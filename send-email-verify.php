<?php
	session_start();

	if (!isset($userfullname)) {
		header("location: index.php");
	}

	$userfullname= $_SESSION['user_fullname'];
	$id = $_SESSION['user_id'];
	$usermail = $_SESSION['email'];
/*
	$userfullname = "Derick Grade";
	$id = 14;
	$usermail = "jj.perez.zas@gmail.com";*/
	//use PHPMailer;

	date_default_timezone_set('Etc/UTC');
	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Host = "smtp.gmail.com"; // for gmail hosting
	// $mail->Host = "smtp.mail.me.com"; // for icloud hosting
	$mail->Port = 587;
	//$mail->SMTPSecure = tls;
	$mail->SMTPAutoTLS = true;
	$mail->SMTPAuth = true;
	$mail->Username = "jj.perez.zas@gmail.com"; //for gmail account
	$mail->Password = "255.255.255.0"; //for gmail account
	// $mail->Username = "jj.perez.zas@icloud.com"; //for icloud account
	// $mail->Password = "@trolledFACE15"; //for icloud account
	$mail->setFrom('jj.perez.zas@gmail.com','Justine Perez'); //from OTMPS
	$mail->addAddress($usermail,'userfullname'); //for the users email address
	$mail->Subject = "Email verification for: " . $userfullname;
	$mail->Body = "Thank you " . $userfullname . " for signing up on JeepPatrol\n" .
					"Please follow the link bellow to verify your account.\n" .
					"http://" . $_SERVER['SERVER_NAME'] . "/account-verify.php?id=" . $id ." ";

	if (!$mail->send()) {
    	//echo 'Mailer Error: ' . $mail->ErrorInfo;
		echo "<script>alert('Error! Please try again');</script>";
	} else {
    	//echo 'Message sent!';
		unset($_SESSION['user_fullname']);
		unset($_SESSION['user_id']);
		unset($_SESSION['email']);
    	$_SESSION['signup'] = "Your account has been successfully created";
    	header("Location: /");
	}

?>
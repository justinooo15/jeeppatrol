<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!isset($username)) {
		header("location: index.php");
	}

	include("includes/connection.php");
	
	$admin = "admin";
	$user = "user";
	$operator = "operator";

	$chcklvl = $conn->prepare("select uname, user_level from tbl_users where uname = ? or email = ?");
	$chcklvl->execute(array($username, $username));

	while($row = $chcklvl->fetch()){
		$resultuser =  $row['user_level'];
	}

	if($user == $resultuser){
			$chckstmt = $conn->prepare("select uname, pword, account_verify from tbl_users where uname = ? or email = ?");
			$chckstmt->execute(array($username, $username));

			$result = $chckstmt->fetch(PDO::FETCH_ASSOC);

		if(empty($result)){
			$_SESSION['flash_login'] = "Incorrect login details";
			header("location: /index.php");

		}else{
			//for calling result
			//echo $result['username'];
			$hashedpass = $result['pword'];
			$verify = password_verify($password, $hashedpass);

			if($verify){

				if ($result['account_verify'] == true) {

					$_SESSION['username'] = $username;
					$_SESSION['login'] = "You have successfully logged in!";
					header("location: /home.php");
					//echo "success";
				}elseif($result['account_verify'] == false){
					$_SESSION['not_verified'] = "Your account has not been verified";
					header("location: /");
				}

			}else{
				$_SESSION['flash_login'] = "Incorrect login details";
				header("location: /");
				//echo "err";
			}

		}
	}elseif($admin == $resultuser){
		$chckstmt = $conn->prepare("select uname, pword from tbl_users where uname = ? or email = ?");
			$chckstmt->execute(array($username, $username));

			$result = $chckstmt->fetch(PDO::FETCH_ASSOC);

		if(empty($result)){
			$_SESSION['flash_login'] = "Incorrect login details";
			header("location: index.php");

		}else{
			//for calling result
			//echo $result['username'];
			$hashedpass = $result['pword'];
			$verify = password_verify($password, $hashedpass);

			if($verify){
				$_SESSION['username'] = $username;
				$_SESSION['admin_login'] = "Login Successfully";
				header("location: dashboard.php");
				//echo "success";

			}else{
				$_SESSION['flash_login'] = "Incorrect login details";
				header("location: index.php");
				//echo "err";
			}

		}
	}elseif($operator == $resultuser){
			$chckstmt = $conn->prepare("select uname, pword from tbl_users where uname = ? or email = ?");
			$chckstmt->execute(array($username, $username));

			$result = $chckstmt->fetch(PDO::FETCH_ASSOC);

		if(empty($result)){
			$_SESSION['flash_login'] = "Incorrect login details";
			header("location: index.php");

		}else{
			//for calling result
			//echo $result['username'];
			$hashedpass = $result['pword'];
			$verify = password_verify($password, $hashedpass);

			if($verify){
				$_SESSION['username'] = $username;
				$_SESSION['operator_login'] = "Login Successfully";
				header("location: operatorpage.php");
				//echo "success";

			}else{
				$_SESSION['flash_login'] = "Incorrect login details";
				header("location: index.php");
				//echo "err";
			}

		}
	}
?>
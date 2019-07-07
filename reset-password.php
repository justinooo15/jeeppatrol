<?php 
session_start();
include("includes/connection.php");
 	$validation = $_POST['valid'];
 if (!isset($validation)) {
 	$_SESSION['no_validation'] = "Please type your email or mobile number to verify";
 	header("Location: forgot-password.php");
 }else{

 	$checkiftrue = $conn->prepare("select * from tbl_users where email = ? or contact_no = ?");
 	$checkiftrue->execute(array($validation, $validation));
 	$check = $checkiftrue->fetch();

 	if (empty($check)) {
 		$_SESSION['no_exist'] = "There is no existing email or mobile number";
 		header("Location: forgot-password.php");
 	}
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

	<title></title>

	<link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">
	
	<link rel="stylesheet" href="/library/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/library/css/style.css">
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="forgot">
						<div class="forgot__head">
							<h1 class="forgot__text">Reset your password</h1>
						</div>
						<form action="reset-password-process.php?id=<?php echo $check['user_id'];?>" method="post">
							<div class="forgot__body">
								<label for="" class="pull-left">Password:</label>
								<input type="password" name="pass" class="forgot__input form-control" placeholder="Password" required>

								<label for="" class="pull-left">Confirm Password:</label>
								<input type="password" name="conpass" class="forgot__input form-control" placeholder="Confirm Password" required>
								<button class="btn btn-primary" type="submit">
									Reset Password
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/library/js/global.js"></script>
	</body>
</html>
<?php
	session_start();

	include("includes/connection.php");

	$id = $_REQUEST['id'];

	$getuser = $conn->prepare("select account_verify from tbl_users where user_id = ?");
	$getuser->execute(array($id));

	$account = $getuser->fetch();
	
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
	<body class="logback">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					<div class="verify">
						<div class="img">
						<?php
							if ($account['account_verify'] == 0) {

							$true = 1;
							$update = $conn->prepare("update tbl_users
														set account_verify = ? 
														where user_id = ?");
							$update->execute(array($true, $id));
							
						?>	
							<div class="row">
								<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
									<div class="verify__img-container">
										<img src="/library/images/account-verified.png" alt="Success-Image" class="verify__img">
									</div>
								</div>
							</div>
							<div class="verify__details">
								<h5 class="verify__text">
									Your account has been verified
									You can now log-in on JeepPatrol!
								</h5>
								<h4>
									<a href="index.php">Click here to login</a>
								</h4>
							</div>	
						<?php
							}else{
								$_SESSION['verified'] = "Your account is already verified!";
								header("Location: /");
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/library/js/global.js"></script>
</body>
</html>

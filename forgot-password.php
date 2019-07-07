<?php
	session_start();
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
							<h1 class="forgot__text">Password Recovery</h1>
						</div>
						<form action="reset-password.php" method="post">
							<div class="forgot__body">
								<label for="" class="pull-left">Enter your Email or Mobile number to recover your account.</label>
								<input type="text" name="valid" class="forgot__input form-control" placeholder="Email or Mobile number" required>
								<button class="btn btn-primary" type="submit" onclick="window.location.href='index.php'">
									Cancel
								</button>
								<button class="btn btn-primary" type="submit">
									Next
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
	<script>
		$(function(){
			<?php if (isset($_SESSION['no_validation'])): ?>
				swal("Error","Please type your email or mobile number to verify","error");
				<?php unset($_SESSION['no_validation']) ?>
			<?php endif ?>
			<?php if (isset($_SESSION['no_exist'])): ?>
				swal("Error","There is no existing email or mobile number","error");
				<?php unset($_SESSION['no_exist']) ?>
			<?php endif ?>
			<?php if (isset($_SESSION['not_equal'])): ?>
				swal("Error","Your password does not match!","error");
				<?php unset($_SESSION['not_equal']) ?>
			<?php endif ?>
		});
	</script>
	</body>
</html>
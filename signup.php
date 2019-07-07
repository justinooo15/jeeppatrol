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

	<link rel="stylesheet" href="library/plugins/mdb/css/mdb.min.css">

</head>	
<body class="logback">
			<div class="main">	
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-7">
							<div class="signup">
								<div class="row">			
									<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
										<div class="signup__header">
											<h1>Sign Up</h1>
										</div>
										<form action="signup-process.php" method="post">
											<div class="signup__userlog ">
												<input class="signup__userlog--userinfo form-control" placeholder="First Name" type="text" name="firstname" required>
												<input class="signup__userlog--userinfo form-control" placeholder="Last Name" type="text" name="lastname" required>
												<input class="signup__userlog--userinfo form-control" placeholder="Contact" type="text" name="contact" required>
												<select name="gender" id="" class="signup__userlog--userinfo form-control" required>
													<option value="">Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
												<div class="signup__username">
													<input class="signup__userlog--userinfo form-control" placeholder="Username" type="text" name="username" required>
												</div>
												<input class="signup__userlog--userinfo form-control" placeholder="Create a password" type="password" name="password" required>
												
												<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
											</div>
										</form>
											

										<form action="/">
											<button type="submit" class="btn btn-primary btn-block">Back</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				

	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script src="/library/plugins/mdb/js/jquery-3.1.1.min.js"></script>
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/library/plugins/mdb/js/mdb.min.js"></script>
	<script src="/library/js/global.js"></script>
	<script>
		<?php if (isset($_SESSION['user_exist'])): ?>
			$(".signup__username").append( "<h6 style='color: red;'><b>Sorry. That username already Exist!</b></h6>" );
			<?php unset($_SESSION['user_exist']); ?>
		<?php endif ?>
	</script>
</body>
</html>
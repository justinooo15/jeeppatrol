<?php
	session_start();

	$username = $_SESSION['username'];
	if (!isset($username)) {
		$_SESSION['login_first'] = "You need to login first";
		header('Location: /');
	}

	include("includes/connection.php");

	$getdata = $conn->prepare("select * from tbl_users where uname = ?");
	$getdata->execute(array($username));

	while($row = $getdata->fetch()){
		$uid = $row['user_id'];
		$fname = $row['f_name'];
		$lname = $row['l_name'];
		$email = $row['email'];
		$contact = $row['contact_no'];
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

	<title>Update details - <?php echo $fname." ".$lname; ?></title>

	<link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">
	
	<link rel="stylesheet" href="/library/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/library/css/style.css">
</head>
<body class="logback">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
   		<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        	<span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			
			<div class="logo">
				<a href="/" class="imglog"><img src="/library/images/jeep_logo.jpg" class="logo__images" alt=""></a>
				<a href="/" class="imgtxt"><img src="/library/images/logo_text.png" class="logo__text" alt=""></a>
			</div>
		</div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
			    <li><a href=""><i class="fa fa-user" aria-hidden="true"></i> <?php echo $fname . " " . $lname; ?></a></li>
			    <li><a href="account-settings.php"><i class="fa fa-cog" aria-hidden	="true"></i> Account Settings</a></li>
			    <li><a href="includes/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<main>
	<div class="home">
		<div class="container">
			<div class="col-xs-12">
				<div class="edituser">
					<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
						<div class="edituser__header">
							<h1>Edit your Personal data</h1>
						</div>
						<form method="post" action="update-userprofile.php" class="edituser__form" enctype="multipart/form-data">
							<p>Profile Picture</p>
								<div class="col-sm-6 col-md-6 col-md-offset-3">
									<img src="/library/images/user.jpg" alt="">
								</div>
								<input type="hidden" name="uid" value="<?php echo $uid; ?>">
								<input type="file" name="image" class="form-control">
								<p>Firstname</p>
								<input type="text" name="first_name" value="<?php echo $fname; ?>" class="form-control" required>

								<p>Lastname</p>
								<input type="text" name="last_name" value="<?php echo $lname; ?>" class="form-control" required>

								<p>Email</p>
								<input type="text" name="email" value="<?php echo $email; ?>" class="form-control" required>

								<p>Contact No.</p>
								<input type="text" name="contact" value="<?php echo $contact; ?>" class="form-control" required>

								<p>Change Password</p>
								<div class="password">
									<input type="password" id="pass" name="pass_word" class="form-control" placeholder="Password" required>
									<input type="password" id="pass" name="password_con" class="form-control" placeholder="Confirm Password" required>
								</div>
							<div class="row">
								<button type="submit" class="btn btn-primary">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/library/js/global.js"></script>
	<script>
		<?php if (isset($_SESSION['confirm_pass'])): ?>
			$(".password").append( "<p style='color: red;'><b>Password do not Match!</b></p>" );
			<?php unset($_SESSION['confirm_pass']); ?>
		<?php endif ?>
			
	</script>
</body>
</html>
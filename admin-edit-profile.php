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
<body class="admin">

			<div class="site-header">
				<div class="col-md-7">
					<div class="logo">
						<a href="/"><img src="/library/images/jeep_logo.jpg" class="logo__images" alt=""></a>
						<a href="/"><img src="/library/images/logo_text.png" class="logo__text" alt=""></a>
					</div>
				</div>
				<!--
				<div class="locale"></div>
				<div class="account"></div>
				-->
				<div class="mobile-toggle">
					<i class="fa fa-bars mobile-toggle__icon" aria-hidden="true"></i>
				</div>
				<div class="col-md-5">
					<div class="site-nav">
						<ul class="site-nav__list">
							<div class="col-md-7">
								<li class="site-nav__item">						
									<form action="">
										<div class="input-group">
										    <input type="text" class="form-control" placeholder="Search for...">
										    <span class="input-group-btn">
										      <button class="btn btn-secondary" type="button">Go!</button>
										    </span>
									    </div>
									</form>
								</li>
							</div>
							<div class="col-md-5">
								<li class="site-nav__item"><a href="home.php" class="site-nav__link">HOME</a></li>
								<li class="site-nav__item">
									<div class="dropdown">
								  		<a class=" site-nav__link dropdown-toggle" type="button" data-toggle="dropdown"> More
								  		<span class="caret"></span></a>
								  		<ul class="dropdown-menu">
								  			<li><a href="user_info.php" class=""><?php echo $fname; ?>'s Profile</a></li>
								    		<li><a href="includes/logout.php">Log out</a></li>
								  		</ul>
									</div>
								</li>
								<!--<a href="#" class="site-nav__link" data-title="Friends" data-toggle="modal" data-target="#add-friend">-->
							</div>
						</ul>	
					</div>
				</div>
			</div>
			<main>
				<div class="home">
					<div class="container">
						<div class="col-xs-12">
							<div class="edituser">
								<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
									<div class="edituser__header">
										<h1>Edit Admins Profile</h1>
									</div>
									<form method="post" action="update-admin-profile.php" class="edituser__form" enctype="multipart/form-data">
										<label for="">Profile Picture</label>
											<div class="col-sm-6 col-md-6">
												<img src="/library/images/user.jpg" alt="">
											</div>
											<input type="hidden" name="uid" value="<?php echo $uid; ?>">
											<input type="file" name="userdp" class="form-control">
											<label for="">Firstname</label>
											<input type="text" name="first_name" value="<?php echo $fname; ?>" class="form-control" required>

											<label for="">Lastname</label>
											<input type="text" name="last_name" value="<?php echo $lname; ?>" class="form-control" required>

											<label for="">Contact No.</label>
											<input type="text" name="contact" value="<?php echo $contact; ?>" class="form-control" required>

											<label for="">Gender</label>
											<select name="gender" id="" class="signup__userlog--userinfo form-control" required>
												<option value=""></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>

											<label for="">Change Password</label>
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
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1"">
							<div class="footer__logo">
								<a href="/"><img src="/library/images/trans_text.png" alt=""></a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4">
							<div class="footer__content">
						        <ul class="nav nav-pills nav-justified">
						            <li><a href="#">Terms of Service</a></li>
						            <li><a href="#">Privacy</a></li>
						            <li><a href="#">About us</a></li>
						        </ul>
						    </div>
					    </div>
					</div>
				</div>
			</footer>
			<div class="mobile">
				<div class="mobile">
					<li class="mobile__list">
						<form action="">
							<div class="input-group">
							    <input type="text" class="form-control" placeholder="Search for...">
							    <span class="input-group-btn">
							      <button class="btn btn-secondary" type="button">Go!</button>
							    </span>
						    </div>
						</form>
					</li>
					<li class="mobile__list"><a href="" class="mobile__item">Home</a></li>
					<li class="mobile__list"><a href="" class="mobile__item">Profile</a></li>
					<li class="mobile__list"><a href="" class="mobile__item" data-title="Delete" data-toggle="modal" data-target="#add-friend">Notifications</a></li>
					<li class="mobile__list"><a href="" class="mobile__item">Jeepney</a></li>
				</div>
			</div>
			<div class="modal fade mdal" id="add-friend" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                	<div class="col-xs-12">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
	                        <h4 class="modal-title custom_align" id="Heading">Friend Request</h4>
	                        </div>
	                        <div class="col-xs-12">
		                        <div class="modal-body">
		                        	<div class="col-xs-12">
			                        	<div class="mdl__friend">
			                        		<div class="col-xs-4">
			                        			<img src="/library/images/user.jpg" alt="" class="">
			                        		</div>
			                        		<div class="col-xs-8">
			                        			<p>Juan Dela Cruz</p>
			                        		</div>
			                        	</div>
		                        	</div>
		                        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6">
		                        		<div class="mdl__accept">
			                            	<button class="btn btn-primary">Accept</button>
			                            	<button class="btn btn-danger">Delete</button>
		                            	</div>
		                        	</div>
		                        </div>
	                        </div>
	                        <div class="modal-footer ">
	                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Back</button>
	                        </div>
	                    </div><!-- /.modal-content --> 
                    </div>
                </div><!-- /.modal-dialog --> 
            </div>
			

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
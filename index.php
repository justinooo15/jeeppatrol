<?php 
	session_start();

	
	if (isset($_SESSION['username'])) {
		header("Location: /home.php");
	}

?>
<?php
if(isset($_POST["name2check"]) && $_POST["name2check"] != ""){
    include("includes/connection.php");
    $username = preg_replace('#[^a-z0-9]#i', '', $_POST['name2check']); 
	$sql = $conn->prepare("SELECT uname FROM tbl_users WHERE uname = ? LIMIT 1");
	$sql->execute(array($username));
	$count = $sql->rowCount();
	if (strlen($username) < 4) {
	 	echo '<p style="color:red;"><b> 4 - 15 characters please </b></p>';
	    exit();
    }
	if (is_numeric($username[0])) {
	    echo '<p style="color:red;"><b>First character must be a letter </b></p>';
	    exit();
    }
    if ($count < 1) {
	    echo '<p style="color:green;"><b>The username ' . $username . ' is Available</b></p> ';
	    exit();
    } else {
	    echo '<p style="color:red;"><b>The username ' . $username . ' already exist</b></p>';
	    exit();
    }
} ?>
<?php
if(isset($_POST["passcheck"])){
   $password = preg_replace('#[^a-z0-9]#i', '', $_POST['passcheck']);
	if (strlen($password) < 5) {
	 	echo '<p style="color:red;"><b>Password must be atleast 5 - 15 characters</b></p>';
	    exit();
    }else {
	    echo '<p style="color:green;"><b>Password is ok </b></p>';
	    exit();
    }
}
?>
<!-- <?php 
if(isset($_POST["conpasscheck"])){
   $conpassword = preg_replace('#[^a-z0-9]#i', '', $_POST['conpasscheck']);
	if ($conpassword != $password) {
	 	echo '<p style="color:red;">password does not match</p>';
	    exit();
    }else {
	    echo '<p style="color:green;">password is matched</p>';
	    exit();
    }
}
?> -->
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
	<script type="text/javascript" language="javascript">
	function checkusername(){
		var status = document.getElementById("usernamestatus");
		var u = document.getElementById("username").value;
			if(u != ""){
				status.innerHTML = 'checking...';
				var hr = new XMLHttpRequest();
				hr.open("POST", "index.php", true);
				hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				hr.onreadystatechange = function() {
					if(hr.readyState == 4 && hr.status == 200) {
						status.innerHTML = hr.responseText;
					}
				}
        var v = "name2check="+u;
        hr.send(v);
			}
	}

	function pass(){
		var status = document.getElementById("passstatus");
		var p = document.getElementById("password").value;
			if(p != ""){
				status.innerHTML = 'checking...';
				var hr = new XMLHttpRequest();
				hr.open("POST", "index.php", true);
				hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				hr.onreadystatechange = function() {
					if(hr.readyState == 4 && hr.status == 200) {
						status.innerHTML = hr.responseText;
					}
				}
        var v = "passcheck="+p;
        hr.send(v);
			}
	}
	function conpass(){
		var status = document.getElementById("conpassstatus");
		var cp = document.getElementById("conpassword").value;
			if(cp != ""){
				status.innerHTML = 'checking...';
				var hr = new XMLHttpRequest();
				hr.open("POST", "index.php", true);
				hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				hr.onreadystatechange = function() {
					if(hr.readyState == 4 && hr.status == 200) {
						status.innerHTML = hr.responseText;
					}
				}
        var v = "conpasscheck="+cp;
        hr.send(v);
			}
	}
	</script>
</head>
	<body class="logback">
		<div class="main">
			<div class="row">
				<div class="col-xs-12">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
								<ul class="nav nav-tabs">
								  <li class="tab active"><a data-toggle="tab" class="tab__link" href="#sched">Log In</a></li>
								  <li class="tab"><a data-toggle="tab" class="tab__link" href="#list">Sign Up</a></li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
								<div class="tab-content">
								    <div id="sched" class=" tab-pane fade in active">
								    	<div class="login">
											<div class="login__contain">
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
														<div class="row">
															<div class=" col-xs-4 col-xs-offset-4 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
																<div class="login__contain--logo">
																	<img src="/library/images/jeep_logo.jpg" alt="">
																</div>
															</div>
														</div>
														<div class="login__contain--header">
															<h1>Welcome to JEEP Patrol!</h1>
														</div>
														<div class="row">
															<div class="col-xs-10 col-xs-offset-1">
																<form action="login-process.php" method="post">
																	<div class="login__contain--userlog">
																		
																		<label for="form1" class="login__lbel">Email or Username</label>
																		<input type="text" id="form1" class="login__contain--userlog--userinfo form-control input-md" type="text" name="username" required>
																		 
																		
																		<label for="form1" class="login__lbel">Enter Password</label>
																		<input type="password" id="form1" class="login__contain--userlog--userinfo form-control input-md" type="password" name="password" required>
																		    
																		<a href="forgot-password.php">Forgot password?</a>
																		<button type="submit" class="btn btn-primary btn-block">Login</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								    </div>
								    <div id="list" class="tab-pane fade">
								    	<div class="signup">
											<div class="row">			
												<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
													<div class="signup__header">
														<h1>Please Sign Up!</h1>
													</div>
													<form action="signup-process.php" method="post">
														<div class="signup__userlog ">
															<label for="form1" class="signup__lbel">Firstname</label>
															<input type="text" id="form1" class="signup__userlog--userinfo form-control" type="text" name="firstname" required>

															<label for="form1" class="signup__lbel">Last Name</label>
															<input type="text" id="form1" class="signup__userlog--userinfo form-control" type="text" name="lastname" required>
															 
															<label for="form1" class="signup__lbel">Email Address</label>
															<input type="email" id="form1" class="signup__userlog--userinfo form-control" name="email" required>
															 
															<label for="form1" class="signup__lbel">Contact</label>
															<input type="text" id="form1" class="signup__userlog--userinfo form-control" name="contact" required>

															<label for="form1" class="signup__lbel">Username</label>
															<input type="text" class="signup__userlog--userinfo form-control" name="username" id="username" onblur="checkusername()" required>
															<span id="usernamestatus"></span>																		
															<label for="form1" class="signup__lbel">Password</label>
															<input type="password" class="signup__userlog--userinfo form-control" name="password" id="password" onblur="pass()" required>
															<span id="passstatus"></span>

															<label for="form1" class="signup__lbel">Confirm Password</label>
															<input type="password" class="signup__userlog--userinfo form-control" name="conpassword" id="conpassword" onblur="conpass()" required>
															<span id="conpassstatus"></span>

															<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/library/js/global.js"></script>
		<script>
			<?php if (isset($_SESSION['flash_login'])): ?>
				swal("Error", "Incorrect Login Details", "error");
				<?php unset($_SESSION['flash_login']); ?>
			<?php endif ?>

			<?php if (isset($_SESSION['not_verified'])): ?>
				swal("Account not verified", "Please check your email for the verification.", "error");
				<?php unset($_SESSION['not_verified']); ?>
			<?php endif ?>

			<?php if (isset($_SESSION['signup'])): ?>
				swal("Your account has been successfully created", "Please check email to verify before logging in", "success");
				<?php unset($_SESSION['signup']); ?>
			<?php endif ?>

			<?php if (isset($_SESSION['login_first'])): ?>
				swal("Sorry", "You need to login first", "error");
				//$(".login__userlog").append( "<p style='color: red;'><b>You need to login first</b></p>" );
				<?php unset($_SESSION['login_first']); ?>
			<?php endif ?>

			<?php if (isset($_SESSION['logout'])): ?>
				swal("Success!", "You have successfully logged out.", "success");
				//$(".login__userlog").append( "<p style='color: red;'><b>You need to login first</b></p>" );
				<?php unset($_SESSION['logout']); ?>
			<?php endif ?>

			<?php if (isset($_SESSION['verified'])): ?>
				swal("Error!", "Your account is already been verified!", "error");
				//$(".login__userlog").append( "<p style='color: red;'><b>You need to login first</b></p>" );
				<?php unset($_SESSION['verified']); ?>
			<?php endif ?>

			<?php if (isset($_SESSION['changed_pass'])): ?>
				swal("Success!", "Your Password has been updated!", "success");
				<?php unset($_SESSION['changed_pass']); ?>
			<?php endif ?>
		</script>
	</body>
</html>
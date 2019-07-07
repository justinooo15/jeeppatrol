<?php
	session_start();
	$username = $_SESSION['username'];
	if (!isset($username)) {
		$_SESSION['login_first'] = "You need to login first";
		header('Location: /');
	}

	$admin = "admin";
	include("includes/connection.php");

	$getuserinfo = $conn->prepare("select * from tbl_users where uname = ? or email = ?");
	$getuserinfo->execute(array($username, $username));

	while($userinfo = $getuserinfo->fetch()){
		$userid = $userinfo['user_id'];
		$userfname = $userinfo['f_name'];
		$userlname = $userinfo['l_name'];
		$chcklvl = $userinfo['user_level'];
	}

	if ($chcklvl == $admin) {
		header("Location: dashboard.php");
	}

	$pending = "pending"; 
	$ongoing = "on-going"; 
	$resolved = "resolved"; 
	$getfeedback = $conn->prepare("select * from tbl_posts where post_id = ?");
	$getfeedback->execute(array($_REQUEST['id']));

	$getimage = $conn->prepare("select uploaded_image from tbl_uploaded_images where post_id = ?");
	$getimage->execute(array($_REQUEST['id']));
	$img = $getimage->fetch();

	while ($perfeedback = $getfeedback->fetch()) {
		$status = $perfeedback['post_status'];
		$user = $perfeedback['user_fullname'];
		$date = $perfeedback['date_time'];
		$driver = $perfeedback['driver_name'];
		$violation = $perfeedback['violation'];
		$others = $perfeedback['others'];
	}

	$newdate = date("M-d-Y h:m A", strtotime($date));
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

	<title>Home	- <?php echo $userfname . " " . $userlname; ?></title>

	<link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">
	
	<link rel="stylesheet" href="/library/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/library/plugins/summernote/dist/summernote.css">
	<!--<link rel="stylesheet" href="library/plugins/mdb/css/mdb.min.css">-->
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
			    <li><a href="home.php"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $userfname . " " . $userlname; ?></a></li>
			    <li><a href="account-settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Account Settings</a></li>
			    <li><a href="includes/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<main>
	<div class="home">
		<div class="container">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<div class="user__header">
							<h4><b>Feedback Status</b></h4>
						</div>
						<div class="user__post">
							<div class="user__post--field">
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<div class="col-xs-12">
											<h3 class="pull-left"><b>Status:</b></h3>
										</div>
										<?php 
											if ($status == $pending) {
										?>
										<div class="col-xs-12">
											<img src="/library/images/pending.png" style="height: 100px; width: 100px;" alt="Pending">
											<h4><b>Pending</b></h4>
										</div>
										<?php
											}elseif($status == $ongoing){
										?>
										<div class="col-xs-12">
											<img src="/library/images/on-going.png" style="height: 100px; width: 100px;" alt="Pending">	
											<h4><b>On-Going</b></h4>
										</div>
										<?php
											}elseif($status == $resolved){
										?>
										<div class="col-xs-12">
											<img src="/library/images/success.png" style="height: 100px; width: 100px;" alt="Pending">
											<h4><b>Resolved</b></h4>
										</div>
										<?php
											}
										?>
									</div>
									<div class="col-xs-12 col-md-12">
										<div class="user__feed">
											<h3 for="" class="user__feed"><b>Name: </b></h3>
											<p class=" user__feed"><?php echo $user;?></p>
											<h3 for="" class="user__feed"><b>Date of Incident:</b></h3>
											<p class=" user__feed"><?php echo $newdate;?></p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="user__feed">
													<h3 for="" class="user__feed"><b>Driver:</b></h3>
													<p class="user__feed"><?php echo $driver; ?></p>
													<?php
														if (isset($violation)){	
													?>
													<h3 for="" class="user__feed"><b>Violations committed:</b> </h3>
													<p class="user__feed"><?php echo $violation; ?></p>
													<?php
														}elseif(isset($others)){
													?>
													<h3 for="" class="user__feed"><b>Other committed:</b> </h3>
													<p class="user__feed"><?php echo $others; ?></p>
												</div>
													<?php
														}
													?>
											</div>
										</div>
										<div class="col-xs-12 col-md-8 col-md-offset-2">
											<?php
												
												$postimg = $img['uploaded_image'];
												if (!empty($postimg)) {
											?>
											<img src="/images/post/<?php echo $postimg; ?>" class="user__feed">
											<?php
												}else{
											?>
												<img src="/library/images/no-img.png" alt="No image available">
											<?php
												}
											?>
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
</main>

<div class="mobile">
	<div class="mobile">
		<li class="mobile__list"><a href="user_info.php" class="mobile__item"><?php echo $userfname ." ". $userlname; ?>'s Profile</li>
		<li class="mobile__list"><a href="edit-userprofile.php" class="mobile__item">Account Settings</a></li>
		<li class="mobile__list"><a href="includes/logout.php" class="mobile__item">Log out</a></li>
	</div>
</div>
<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="/library/plugins/mdb/js/jquery-3.1.1.min.js"></script>
<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--<script src="/library/plugins/mdb/js/mdb.min.js"></script>-->
<script src="/library/js/global.js"></script>
</body>
</html>
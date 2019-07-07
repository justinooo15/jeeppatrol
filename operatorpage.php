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

	$getalldriver = $conn->prepare("select * from tbl_drivers, tbl_driver_schedules 
								where tbl_drivers.driver_id = tbl_driver_schedules.driver_id and operator_id= ? order by f_name");
	$getalldriver->execute(array($userid));

	$moballdriver = $conn->prepare("select * from tbl_drivers, tbl_driver_schedules 
								where tbl_drivers.driver_id = tbl_driver_schedules.driver_id and operator_id= ? order by f_name");
	$moballdriver->execute(array($userid));

	$getupdatedriver = $conn->prepare("select * from tbl_drivers where operator_id= ? order by f_name");
	$getupdatedriver->execute(array($userid));

	$getjeepno = $conn->prepare("select * from tbl_jeepbyoperator where user_id = ?");
	$getjeepno->execute(array($userid));


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

	<title>Operator Page</title>

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
    			<li><a href="#"><i class="fa fa-user" aria-hidden="true"> <?php echo $userfname . " " . $userlname; ?></i></a></li>
        		<li><a href="edit-userprofile.php"><i class="fa fa-cog" aria-hidden="true"></i>Account Setting</a></li>
        		<li><a href="includes/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
      		</ul>
    	</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>
<main>
	<div class="home">
		<div class="container">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
						<div class="user">
							
			                <ul class="nav nav-tabs">
			                  <li class="tab active"><a data-toggle="tab" class="tab__link" href="#sched">Drivers Schedule</a></li>
			                  <li class="tab"><a data-toggle="tab" class="tab__link" href="#list">List of drivers</a></li>
			                </ul>

			                <div class="tab-content">
			                    <div id="sched" class=" tab-pane fade in active">
			                    	<div class="row">
				                    	<div class="addhead">
				                    		<h4>Drivers Schedule</h4>
				                    	</div>
			                    	</div>
			                    	<div class="row">
				                    	<div class="add">
					                    	<div class="container-fluid">
											  	<div class="col-md-8 col-md-offset-2">
											      	<form method="post" action="operator-update-driver.php">
												      	<div class="row">
												          	<div class="col-xs-12 col-md-12">
												                <div class="row">
												                	<label for="" class="pull-left">Jeepney Driver</label>
												                	<div class="col-xs-12">
												                		<select name="driver" id="" class="form-control" required>
												                			<option value="">Select Jeep Driver</option>
												                			<?php while($driverall = $getupdatedriver->fetch()) {
												                				
												                			?>
												                			<option value="<?php echo $driverall['driver_id']; ?>">
												                				<?php echo $driverall['f_name'] . " " . $driverall['l_name'] ;?>
												                			</option>
												                			<?php  }?>
												                		</select>
												                	</div>
												                </div>
												                <div class="row">
												                	<label for="" class="pull-left">Jeepney Number</label>
												                	<div class="col-xs-12">
												                		<select name="jeepno" id="" class="form-control" required>
												                			<option value="">Select Jeep No.</option>
												                			<?php while($jeepno = $getjeepno->fetch()) {
												                			?>
												                			<option value="<?php echo $jeepno['jeepney_no'];?>">
												                				<?php echo $jeepno['jeepney_no'];?>
												                			</option>
												                			<?php  }?>
												                		</select>
												                	</div>
												                </div>
												                <div class="row">
													                <label for="" class="pull-left">Schedule :</label>
												                </div>
												                <div class="row pull-left">
												                	<div class="col-xs-2">
													                	<label for="">Monday</label>
													                	<input type="checkbox" name="mon" value="Monday">
												                	</div>
												                	<div class="col-xs-2">
													                	<label for="">Tuesday</label>
													                	<input type="checkbox" name="tues" value="Tuesday">
												                	</div>
												                	<div class="col-xs-2">
													                	<label for="">Wednesday</label>
													                	<input type="checkbox" name="wed" value="Wednesday">
												                	</div>
												                	<div class="col-xs-2">
													                	<label for="">Thursday</label>
													                	<input type="checkbox" name="thurs" value="Thursday">
												                	</div>
												                	<div class="col-xs-2">
													                	<label for="">Friday</label>
													                	<input type="checkbox" name="fri" value="Friday">
												                	</div>
												                	<div class="col-xs-2">
													                	<label for="">Saturday</label>
													                	<input type="checkbox" name="sat" value="Saturday">
												                	</div>
												                	<div class="col-xs-2">
													                	<label for="">Sunday</label>
													                	<input type="checkbox" name="sun" value="Sunday">
												                	</div>
												                </div>
												                <div class="row">
												                	<label for="" class="pull-left">From</label>
													                <input type="time" name="start" class="form-control" required>
													                <label for="" class="pull-left">To</label>
													                <input type="time" name="end" class="form-control" required>

													                <button type="submit" class="btn btn-primary">Update Driver</button>
												                </div>
												          	</div>
												         </div>
											      	</form>
											  	</div>
						                   	</div>
					                   	</div>
				                   	</div>
			                    </div>
			                    <div id="list" class="tab-pane fade">
			                    	<div class="row">
				                    	<div class="list table-responsive">
					                    	<table class="table table-bordered">
											  	<thead>
												    <tr>
												      <th>Driver Name</th>
												      <th>Daily time </th>
												      <th>Weekly Schedule</th>
												      <th>License No.</th>
												      <th>Contact No.</th>
												      <th>View Status</th>
												    </tr>
											  	</thead>
											  	<tbody>
												<?php
													while ($alldriver = $getalldriver->fetch()) {
														$driverid = $alldriver['driver_id'];
														$fname= $alldriver['f_name'];
														$lname = $alldriver['l_name'];
														$license = $alldriver['license'];
														$number = $alldriver['contact_no'];
														$start = $alldriver['start_time'];
														$end = $alldriver['end_time'];
												?>
												    <tr>
												      <td><?php echo $fname . " " . $lname; ?></td>
												      <td>
												      	<?php 
												      	if(!isset($start)){
												      		echo "No data";
												      	}else{
												      		echo $start . " to " . $end;
												      	}
												      	?>	
												      	</td>
												      <td>
											    		<?php 

							                                $schedmon = $alldriver['monday'];
							                                $schedtues = $alldriver['tuesday'];
							                                $schedwed = $alldriver['wednesday'];
							                                $schedthurs = $alldriver['thursday'];
							                                $schedfri = $alldriver['friday'];
							                                $schedsat = $alldriver['saturday'];
							                                $schedsun = $alldriver['sunday'];

							                                if (isset($schedmon)) {
							                                    echo "Monday" . " ";
							                                }if (isset($schedtues)) {
							                                    echo "Tuesday" . " ";
							                                }
							                                 if (isset($schedwed)) {
							                                    echo "Wednesday" . " ";
							                                }
							                                 if (isset($schedthurs)) {
							                                    echo "Thursday" . " ";
							                                }
							                                 if (isset($schedfri)) {
							                                    echo "Friday" . " ";
							                                }
							                                 if (isset($schedsat)) {
							                                    echo "Saturday" . " ";
							                                }
							                                 if (isset($schedsun)) {
							                                    echo "Sunday" . " ";
							                                }											    			
											    		?>
												      </td>
												      <td><?php echo $license; ?></td>
												      <td><?php echo $number; ?></td>
												      <td>
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <p data-placement="top" data-toggle="tooltip" title="View">
                                                                        <a href="driverstats.php?id=<?php echo $driverid; ?>">
                                                                        <button class="btn btn-primary btn-xs">
                                                                        	View Status
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </button>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
												    </tr>
												<?php
												}
												?>    
											  	</tbody>
											</table>
										</div>
										<div class="user__mobile">
											<!-- <h1 class="user__mobile__head">List of drivers</h1>
											<div class="user__mobile__line"></div> -->
											<?php
												while ($mobgetalldriver = $moballdriver->fetch()) {
													$mobdriverid = $mobgetalldriver['driver_id'];
													$mobfname= $mobgetalldriver['f_name'];
													$moblname = $mobgetalldriver['l_name'];
													$moblicense = $mobgetalldriver['license'];
													$mobnumber = $mobgetalldriver['contact_no'];
													$mobstart = $mobgetalldriver['start_time'];
													$mobend = $mobgetalldriver['end_time'];

													$mobschedmon = $mobgetalldriver['monday'];
					                                $mobschedtues = $mobgetalldriver['tuesday'];
					                                $mobschedwed = $mobgetalldriver['wednesday'];
					                                $mobschedthurs = $mobgetalldriver['thursday'];
					                                $mobschedfri = $mobgetalldriver['friday'];
					                                $mobschedsat = $mobgetalldriver['saturday'];
					                                $mobschedsun = $mobgetalldriver['sunday'];
												
											?>
											<div class="user__mobile__contain">
												<h5 class="user__mobile__subhead">Driver Name:</h5>
												<p class="user__mobile">
													<?php echo $mobfname . " " . $moblname; ?>
												</p>
												
												<h5 class="user__mobile__subhead">Daily Time:</h5>
												<p class="user__mobile">
													<?php
														echo "From: ".$mobstart . " to " . $mobend;

													?>
												</p>
												
												<h5 class="user__mobile__subhead">Weekly Schedule:</h5>
												<p class="user__mobile">
													<?php
														if (isset($mobschedmon)) {
							                                    echo "Monday" . " ";
						                                }if (isset($mobschedtues)) {
						                                    echo "Tuesday" . " ";
						                                }
						                                 if (isset($mobschedwed)) {
						                                    echo "Wednesday" . " ";
						                                }
						                                 if (isset($mobschedthurs)) {
						                                    echo "Thursday" . " ";
						                                }
						                                 if (isset($mobschedfri)) {
						                                    echo "Friday" . " ";
						                                }
						                                 if (isset($mobschedsat)) {
						                                    echo "Saturday" . " ";
						                                }
						                                 if (isset($mobschedsun)) {
						                                    echo "Sunday" . " ";
						                                }
													?>
												</p>
												
												<h5 class="user__mobile__subhead">License No.:</h5>
												<p class="user__mobile"><?php echo $moblicense; ?></p>

												<h5 class="user__mobile__subhead">Contact No.:</h5>
												<p class="user__mobile"><?php echo $mobnumber; ?></p>
												
												<h5 class="user__mobile__subhead">Actions:</h5>
												<div class="row">
													<div class="col-xs-12">
														<p data-placement="top" data-toggle="tooltip" title="View">
                                                            <a href="driverstats.php?id=<?php echo $mobdriverid; ?>">
                                                            <button class="btn btn-primary btn-xs">
                                                            	View Status
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </button>
                                                            </a>
                                                        </p>
													</div>
												</div>
												<div class="user__mobile__line"></div>
											</div>
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
		<li class="mobile__list"><a href=" "class="mobile__item">Profile</a></li>
		<li class="mobile__list"><a href="" class="mobile__item">Jeepney</a></li>
	</div>
</div>	
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
		<li class="mobile__list"><a href="user_info.php" class="mobile__item"><?php echo $userfname ." ". $userlname; ?>'s Profile</li>
		<li class="mobile__list"><a href="edit-userprofile.php" class="mobile__item">Account Settings</a></li>
		<li class="mobile__list"><a href="includes/logout.php" class="mobile__item">Log out</a></li>
	</div>
</div>
	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script src="/library/plugins/mdb/js/jquery-3.1.1.min.js"></script>
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!--<script src="/library/plugins/mdb/js/mdb.min.js"></script>-->
	<script src="/library/js/global.js"></script>
	<script>
		$(function() {
			<?php if (isset($_SESSION['operator_login'])): ?>
				swal("Success","You have successfully logged in!","success");
				<?php unset($_SESSION['operator_login']); ?>
			<?php endif ?>
			<?php if (isset($_SESSION['update_driver'])): ?>
				swal("Success","The driver's schedule has been updated.","success");
				<?php unset($_SESSION['update_driver']); ?>
			<?php endif ?>
		});
	</script>
</body>
</html>
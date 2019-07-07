<?php
	include("includes/connection.php");

	$driverid = $_REQUEST['id'];

	$allrecord = $conn->prepare("select * from tbl_drivers, tbl_schedule_records where tbl_drivers.driver_id = tbl_schedule_records.driver_id");
	$allrecord->execute(array($driverid));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

	<title>Driver Status</title>

	<link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">
	
	<link rel="stylesheet" href="/library/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/library/plugins/summernote/dist/summernote.css">
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
        		<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>User</a></li>
        		<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Account Settings</a></li>
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
						<div class="status">
							<div class="status__header">
								<h1>Weekly Schedule Record</h1>
							</div>
							
							<div class="status__body">
								<div class="row">
									<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
										<table class="table table-bordered table-reponsive">
											<thead>
												<tr>
													<th>Driver Name</th>
													<th>Days of work</th>
													<th>Date</th>
												</tr>
											</thead>
											<tbody>
												<?php
													while ($record = $allrecord->fetch()) {
												?>
												<tr>
													<td><?php echo $record['f_name'] . " " . $record['l_name']; ?></td>
													<td><?php echo $record['day_of_work']; ?></td>
													<td><?php echo $record['date_time']; ?></td>
												</tr>
												<?php
													}
												?>
											</tbody>
										</table>
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
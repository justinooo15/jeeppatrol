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

	$getalldrivers = $conn->prepare("select driver_id, f_name, l_name, jeepney_no from tbl_drivers");
	$getalldrivers->execute();

	$getallpostbyuser = $conn->prepare("select * from tbl_posts where user_id = ? order by date_time desc");
	$getallpostbyuser->execute(array($userid));

	$moballpostbyuser = $conn->prepare("select * from tbl_posts where user_id = ? order by date_time desc");
	$moballpostbyuser->execute(array($userid));

	$getiftrue = $conn->prepare("select * from tbl_posts where user_id = ? order by date_time desc");
	$getiftrue->execute(array($userid));
	$checkiftrue = $getiftrue->fetch();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

	<title>Feedback Page</title>

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
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
						<div class="user">
							<ul class="nav nav-tabs">
								<li class="tab active"><a data-toggle="tab" class="tab__link" href="#feedback">Send a feedback</a></li>
								<li class="tab"><a data-toggle="tab" class="tab__link" href="#view">View all Feedback</a></li>
							</ul>
							<div class="tab-content">
								<div id="feedback" class=" tab-pane fade in active">

									<div class="row">
									<div class="user__header">	
										<h4>Create a feedback</h4>
									</div>
									<form action="post-process.php" method="post" enctype="multipart/form-data">
										<div class="user__post">
											<div class="user__post--field">
											<div class="row">
											<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
												<div class="row">
													<div class="user__post--field--top">
														<div class="row">
															<div class="col-xs-12 col-sm-6 col-md-6">
																<p>Select Jeepney Driver</p>
																<select name="driver" id="" class="form-control" required>
																	<option value="">Select Jeepney No.</option>
																		<?php
																		while ($rowdriver = $getalldrivers->fetch()){

																		?>
																		<option value="<?php echo $rowdriver['driver_id']; ?>">
																			<?php echo $rowdriver['jeepney_no']. " - " . $rowdriver['f_name'] . " " .$rowdriver['l_name']; ?>
																		</option>
																		<?php
																			}
																		?>
																</select>
															</div>	
															<div class="col-xs-12 col-sm-12 col-md-12">
																<input type="file" id="name" name="post_image">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="panel-group">
														<div class="panel panel-default">
															<div class="panel-heading">
																<h4 class="panel-title">
																  <a data-toggle="collapse" href="#collapse1">Violations</a>
																</h4>
															</div>
															<div id="collapse1" class="panel-collapse collapse">
																<div class="panel-body">
																		<div class="col-xs-12 user__post--field--chkbox">
																		 <div class="col-xs-12 col-sm-6 col-md-6 user__post--field--chkbox">
																			<div class="checkbox checkbox-default">
																			    <label class="check"><input type="checkbox" name="violation[]" value="Discourteous disrespectful conduct to passenger.">Discourteous disrespectful conduct to passenger.</label>
																			</div>
																			<div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Disobedience to the traffic officer.">Disobedience to the traffic officer.</label>
																		   	</div>
																		   	<div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Disregarding traffic sign or signal.">Disregarding traffic sign or signal.</label>
																		   	</div>
																		   	<div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="driving under the influence of liquor. ">driving under the influence of liquor. </label>
																		   	</div>
																		   	<div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Loading and unloading at the middle of the street.">Loading and unloading at the middle of the street.</label>
																		   	</div>
																		   	<div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Loading and unloading at the street corner.">Loading and unloading at the street corner.</label>
																		   	</div>
																		   	<div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Refusal of convey passenger.">Refusal of convey passenger.</label>
																		  	 </div>
																		   	<div class="checkbox checkbox-default ">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Non wearing of proper current identification card.">Non wearing of proper current identification card.</label>
																		   	</div>
																		   	 <div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Non posting of current passenger fare">Non posting of current passenger fare</label>
																		   </div>
																		</div>
																		<div class="col-xs-12 col-sm-6 col-md-6 user__post--field--chkbox">
																		  
																		   <div class="checkbox checkbox-default ">
																		       <label class="check"><input type="checkbox" name="violation[]" value="No uniform">No uniform</label>
																		   </div>
																		   <div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Obstruction to traffic">Obstruction to traffic</label>
																		   </div>
																		   <div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Over charging of fare">Over charging of fare</label>
																		   </div>
																		   <div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Over loading">Over loading</label>
																		   </div>
																		   <div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Trip cutting">Trip cutting</label>
																		   </div>
																		   <div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Illegal U Turn">Illegal U Turn</label>
																		   </div>
																		   <div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Smoking">Smoking</label>
																		   </div>
																		   <div class="checkbox checkbox-default">
																		       <label class="check"><input type="checkbox" name="violation[]" value="Use cellphone while driving">Use cellphone while driving</label>
																		   </div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading">
																<h4 class="panel-title">
														          <a data-toggle="collapse" href="#collapse2">Others, please specify</a>
														        </h4>
														    </div>
														    <div id="collapse2" class="panel-collapse collapse">
																<div class="panel-body">
															    	<div class="row">
																		<div class="col-xs-12">
																			<input type="hidden" value="<?php echo $userid; ?>" name="uid">
																			<input type="hidden" value="<?php echo $userfname; ?>" name="fname">
																			<input type="hidden" value="<?php echo $userlname; ?>" name="lname">
																		 	<textarea name="others" id="" cols="70" rows="5" placeholder="Please specify the said violation/s"></textarea>
																		</div>
																	</div>
																</div>
														     </div>
														</div>
													</div>
												</div>
												<div class="row">
													<button id="submit" type="submit" class="btn btn-default pull-right">Send feedback</button>
												</div>
											</div>
											</div>
											</div>
										</div>
									</form>
									</div>
								</div>
								<div id="view" class="tab-pane fade">
									<div class="row">
										<div class="user__feedback">
											<div class="table-responsive">
						                    	<table class="table table-bordered">
												  	<thead>
													    <tr>
													    	<th>Reported Driver</th>
													    	<th>Date/Time</th>
													    	<th>Violations</th>
													    	<th>Others</th>
													    	<th>Action</th>
													    </tr>
												  	</thead>
												  	<tbody>
												  	
												  		<?php
													    	while ($allpost = $getallpostbyuser->fetch()) {

													    		$vio = $allpost['violation'];
													    		$otherpost = $allpost['others'];
													    		$idpost = $allpost['post_id'];
													    ?>
													    <tr>
													    	<td><?php echo $allpost['driver_name']; ?></td>
													    	<td><?php echo $allpost['date_time']; ?></td>
													    	<?php
													    		if (empty($vio)) {
													    			
													    	?>
													    		<td><?php echo "Nothing to Show "; ?></td>
													    	
													    	<?php
													    		}else{
													    	?>
																<td><?php echo $vio; ?></td>
													    	<?php
													    		}
													    	?>

													    	<?php
													    		if (empty($otherpost)) {
													    			
													    	?>
													    		<td><?php echo "Nothing to Show"; ?></td>
													    	
													    	<?php
													    		}else{
													    	?>
																<td><?php echo $otherpost; ?></td>
													    	<?php
													    		}
													    	?>
													    		
													    	<td class="tdata">
													    		<div class="row">
													    			<div class="col-md-12">
													    				<p data-placement="top" data-toggle="tooltip" title="View Status">
														    				<a href="view-feedback.php?id=<?php echo $idpost; ?>">
		                                                           	  			<button class="btn btn-primary btn-xs btn-block">
		                                                           	  				Feedback Status
		                                                    	    	   			<i class="fa fa-eye" aria-hidden="true"></i>
		                                                                		</button>
		                                                                	</a>
                                                             			</p>
													    			</div>
													    			<div class="col-md-12">
													    				<p data-placement="top" data-toggle="tooltip" title="Delete">
		                                                                	<button class="btn btn-danger btn-xs modal-delete btn-block" data-id="<?php echo $idpost; ?>" data-title="Delete" data-toggle="modal" data-target="#modal-delete" >
		                                                                		Delete
		                                                                    	<span class="glyphicon glyphicon-trash"></span>
		                                                                	</button>
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
												<?php
												  	if (empty($checkiftrue)) {

											  	?>
													<h3>There is no current data.</h3>

											  	<?php
											  		}
											  	?>
											</div>
										</div>
										<div class="user__mobile">
											<!-- <h1 class="user__mobile__head">View all reports</h1>
											<div class="user__mobile__line"></div> -->
											<?php
											  	if (empty($checkiftrue)) {

										  	?>
												<h3>There is no current data.</h3>

										  	<?php
										  		}
										  	?>
											<?php
												while ($moballpost = $moballpostbyuser->fetch()) {
												
											?>
											<div class="user__mobile__contain">
												<h5 class="user__mobile__subhead">Reported Driver:</h5>
												<p class="user__mobile"><?php echo $moballpost['driver_name']; ?></p>
												
												<h5 class="user__mobile__subhead">Date/Time:</h5>
												<p class="user__mobile"><?php echo $moballpost['date_time']; ?></p>
												
												<h5 class="user__mobile__subhead">Violations:</h5>
												<p class="user__mobile"><?php if (empty($moballpost['violation'])) {
													echo "Nothing to show";}else{ echo $moballpost['violation'];} ?>
														
												</p>
												
												<h5 class="user__mobile__subhead">Others:</h5>
												<p class="user__mobile"><?php if (empty($moballpost['others'])) {
													echo "Nothing to show";}else{ echo $moballpost['others'];;} ?></p>
												
												<h5 class="user__mobile__subhead">Actions:</h5>
												<div class="row">
													<div class="col-xs-6">
														<a href="view-feedback.php?id=<?php echo $moballpost['post_id']; ?>">
														<button class="btn btn-primary btn-xs btn-block">
															Feedback Status
												            <i class="fa fa-eye" aria-hidden="true"></i>
												        </button>
												        </a>
													</div>
													<div class="col-xs-6">
														<p data-placement="top" data-toggle="tooltip" title="Delete">
	                                                    	<button class="btn btn-danger btn-xs modal-delete btn-block" data-id="<?php echo $idpost; ?>" data-title="Delete" data-toggle="modal" data-target="#modal-delete" >
	                                                    		Delete
	                                                        	<span class="glyphicon glyphicon-trash"></span>
	                                                    	</button>
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

<div class="modal fade mdal" id="modal-delete" role="dialog">
	<div class="modal-dialog modal-md">
    	<div class="modal-content">
       		<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<h4 class="modal-title"><b>Delete selected feedback</b></h4>
        	</div>
        	<form action="user-delete-feedback.php" method="post">
        		<div class="modal-body">
        			<input type="hidden" id="SrcId" name="srcid">
        			<h4 style="text-align: center;">Are you sure you want to delete your feedback?</h4>
        		</div>
        		<div class="modal-footer">
        			<button type="submit" class="btn btn-default">Yes</button>
        			<button type="button" data-dismiss="modal" class="btn btn-default">No</button>
        		</div>
        	</form>
    	</div>
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
		$(".modal-delete").click(function() {
			var x = $(this).data('id');
			$(".modal-body #SrcId").val(x);
		});

		<?php if (isset($_SESSION['login'])): ?>
			swal("Success","You have successfully logged in!","success");
			<?php unset($_SESSION['login']); ?>
		<?php endif ?>

		<?php if (isset($_SESSION['feedback'])): ?>
			swal("Success","Your feedback has been successfully sent!","success");
			<?php unset($_SESSION['feedback']); ?>
		<?php endif ?>

		<?php if (isset($_SESSION['record_delete'])): ?>
			swal("Success","The record has been successfully deleted","success");
			<?php unset($_SESSION['record_delete']); ?>
		<?php endif ?>

		<?php if (isset($_SESSION['file_big'])): ?>
			swal("Error","Sorry the File is to big!","error");
			<?php unset($_SESSION['file_big']); ?>
		<?php endif ?>

		<?php if (isset($_SESSION['format_support'])): ?>
			swal("Error","Sorry your File Format is not Supported!","error");
			<?php unset($_SESSION['format_support']); ?>
		<?php endif ?>

		<?php if (isset($_SESSION['file_limit'])): ?>
			swal("Error","Only 3 images/videos are allowed to be uploaded!","error");
			<?php unset($_SESSION['file_limit']); ?>
		<?php endif ?>
	});
</script>
</body>
</html>
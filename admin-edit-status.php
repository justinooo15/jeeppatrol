<?php
  session_start();

  if (!isset($_SESSION['username'])) {
      $_SESSION['login_first'] = "You need to login first"; 
      header("location: index.php");
  }

  if (!isset($_REQUEST['id'])) {
    header("location: admin-list-reports.php");
  }

  include("includes/connection.php");
  $post = $conn->prepare("select * from tbl_posts where post_id = ?");
  $post->execute(array($_REQUEST['id']));

  $pending = "pending";
  $ongoing = "on-going";
  $resolved = "resolved";

  while ($perpost = $post->fetch()) {
    $status = $perpost['post_status'];
    $user = $perpost['user_fullname'];
    $date = $perpost['date_time'];
    $driver = $perpost['driver_name'];
    $violation = $perpost['violation'];
    $others = $perpost['others'];
  }
  $newdate = date("M-d-Y h:m A", strtotime($date));

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

<body class="admin">
	<div class="sec">
    <div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
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
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                        	<li class="headnav"><a href="dashboard.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                        	<li class="headnav"><a href="admin-userprofile.php"><i class="fa fa-users"></i>User Profiles</a></li>
                          <li class="headnav"><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Add Operators</a></li>
                        	<li class="headnav"><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Add Drivers</a></li>
                        	<li class="headnav"><a href=""><i class="fa fa-list" aria-hidden="true"></i>List of reports</a></li>
	                        <li><a href="includes/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="dashboard.php">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-1">
                            <span class="sidebar-icon"><i class="fa fa-bars"></i></span>
                            <span class="sidebar-title">Commutter</span>
                        </a>
                        <ul id="submenu-1" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="admin-user-list.php"><i class="fa fa-plus" aria-hidden="true"></i>Commutters's List</a></li>
                            <li><a href="admin-list-reports.php"><i class="fa fa-list" aria-hidden="true"></i>Commutter's Report</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-bars"></i></span>
                            <span class="sidebar-title">Operator</span>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="admin-add-operators.php"><i class="fa fa-plus" aria-hidden="true"></i>Add operators</a></li>
                            <li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>List of Operators</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
                            <span class="sidebar-icon"><i class="fa fa-bars"></i></span>
                            <span class="sidebar-title">Driver</span>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="admin-add-drivers.php"><i class="fa fa-plus" aria-hidden="true"></i>Add drivers</a></li>
                            <li><a href="admin-drivers-list.php"><i class="fa fa-list" aria-hidden="true"></i>List of Drivers</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>            
        </div>
        <main id="page-content-wrapper" role="main" class="container-fluid dash">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Edit Status</a></li>
            </ol>
          <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
        	   <div class="card">
              <div class="col-xs-12">
               <div class="editstat">
                  <div class="editstat__header">
                      <h1>Edit Status</h1>
                  </div>
                  <div class="editstat__body">
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="editstat__body--head">
                            <div class="col-md-4">
                              <h3><b>Status:</b></h3>
                            </div>
                            <div class="col-md-6">
                              <?php
                                if ($status == $pending) {
                              ?>
                              <div class="col-xs-12">
                              <img src="/library/images/pending.png" alt="" style="height: 70px; width: 70px;">
                              <h5><b>Pending</b></h5>
                              </div>
                              <?php
                                }elseif ($status == $ongoing) {
                              ?>
                              <div class="col-xs-12">
                              <img src="/library/images/on-going.png" alt="" style="height: 70px; width: 70px;">
                              <h5><b>On-Going</b></h5>
                              </div>
                              <?php
                                }elseif ($status == $resolved) {
                              ?>
                              <div class="col-xs-12">
                              <img src="/library/images/success.png" alt="" style="height: 70px; width: 70px;">
                              <h5><b>Resolved</b></h5>
                              </div>
                              <?php
                                }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="editstat__body--details">
                        <div class="row">
                          <div class="col-xs-6">
                            <img src="/library/images/user.jpg" alt="" class="img-responsive">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <label for=""> Commuter report:</label>
                              <p><?php echo $user; ?></p>

                            <label for=""> Reported Driver:</label>
                              <p><?php echo $driver; ?></p>
                            <?php
                              if (isset($violation)) {
                            ?>
                            <label for=""> Violation:</label>
                              <p><?php echo $violation; ?></p>
                            <?php
                              }elseif(isset($others)){
                            ?>
                            <label for=""> Description: </label>
                              <p><?php echo $others; ?></p>
                            <?php
                              }
                            ?>
                          </div>
                        </div>
                      </div>
                      <div class="editstat__foot">
                          <div class="row">
                            <div class="col-xs-12">
                              <label for="">Date report:  </label>
                              <p><?php echo $newdate; ?></p>
                            </div>
                          </div>
                      </div>
                      <form action="admin-update-status.php?id=<?php echo $_REQUEST['id'];?>" method="post">
                        <div class="editstat__foot">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4 for="">Pick 1 to update the status of the report:</h4>
                              <div class="row">
                                <div class="col-xs-12">
                                  <h5 for="pending">Pending:</h5>
                                  <input type="radio" name="status" value="pending" <?php if ($status == $pending) {echo "checked";}?>>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12">
                                  <h5 for="ongoing">On-Going:</h5>
                                  <input type="radio" name="status" value="on-going" <?php if ($status == $ongoing) {echo "checked";}?>>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12">
                                  <h5 for="resolved">Resolved:</h5>
                                  <input type="radio" name="status" value="resolved" <?php if ($status == $resolved) {echo "checked";}?>>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-2 col-sm-offset-0 pull-right">
                              <a href="admin-list-reports.php">
                                <button type="button" class="btn btn-default">Cancel</button>
                              </a>
                            </div>
                            <div class="pull-right">
                              <input type="hidden" name="srcid" value="<?php echo $_REQUEST['id'];?>">
                              <input type="submit" value="Save" class="btn btn-default">
                            </div>
                          </div>
                        </div>
                      </form>
                  </div>
              </div>
            </div>
          </div>
        </main>
    </div> 
	</div>
	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
	<!-- <script src="/library/plugins/mdb/js/jquery-3.1.1.min.js"></script> -->
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--<script src="/library/plugins/mdb/js/mdb.min.js"></script>-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/library/js/global.js"></script>
    <script>
      $(function() {
          <?php if (isset($_SESSION['status_update'])): ?>
            swal("Success!", "This report status has been updated.", "success");
            <?php unset($_SESSION['status_update']) ?>
          <?php endif ?>
      });
    </script>

</body>
</html>
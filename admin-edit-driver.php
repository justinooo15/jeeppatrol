<?php
    session_start();
    include("includes/connection.php");

    $operatorr= "operator";
    $operator = $conn->prepare("select * from tbl_users where user_level = ?");
    $operator->execute(array($operatorr));

    $getinfo = $conn->prepare("select * from tbl_drivers where driver_id = ?");
    $getinfo->execute(array($_REQUEST['id']));
    $driver = $getinfo->fetch();


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
                            <li><a href="admin-user-list.php"><i class="fa fa-list" aria-hidden="true"></i>Commutters's List</a></li>
                            <li><a href="admin-list-reports.php"><i class="fa fa-list" aria-hidden="true"></i>List of Reports</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-bars"></i></span>
                            <span class="sidebar-title">Operator</span>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="admin-add-operators.php"><i class="fa fa-plus" aria-hidden="true"></i>Add operators</a></li>
                            <li><a href="admin-operator-list.php"><i class="fa fa-list" aria-hidden="true"></i>List of Operators</a></li>
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
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="#">Edit Driver</a></li>
            </ol>
            <div class="card">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
                    <div class="driver">
                        <div class="driver__add">
                            <h1>Edit Driver</h1>
                        </div>
                        <form method="post" action="admin-update-driver.php?id=<?php echo $driver['driver_id']; ?>" enctype="multipart/form-data">
                       
                            <label for="">Driver Image</label>
                            <input type="file" name="image" class="form-control">

                            <label for="">Firstname</label>
                            <input type="text" name="f_name" value="<?php echo $driver['f_name']; ?>" class="form-control" required>

                            <label for="">Lastname</label>
                            <input type="text" name="l_name" value="<?php echo $driver['l_name']; ?>" class="form-control" required>
                            
                            <label for="">Operator</label>
                            <select name="operatorid" id="" class="form-control">
                                <option value="">Select a Operator</option>
                                <?php
                                    while ($alloperator = $operator->fetch()) {
                                    $operator_id = $alloperator['user_id'];
                                    $fname = $alloperator['f_name'];
                                    $lname = $alloperator['l_name'];
                                ?>  
                                    <option value="<?php echo $operator_id; ?>"><?php echo $fname . " " . $lname; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            
                            <label for="">Contact No.</label>
                            <input type="text" name="contact_no" value="<?php echo $driver['contact_no']; ?>" class="form-control" required>
                       
                            <label for="">License No.</label>
                            <input type="text" name="license" value="<?php echo $driver['license']; ?>" class="form-control" required>
                            
                            <label for=""></label>
                            <button type="submit" class="btn btn-primary form-control">Update Driver</button>
                        </form>
                    </div>
                </div>    
            </div>
        </main>
    </div> 
	</div>
	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script><!-- 
	<script src="/library/plugins/mdb/js/jquery-3.1.1.min.js"></script> -->
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!--<script src="/library/plugins/mdb/js/mdb.min.js"></script>-->
	<script src="/library/js/global.js"></script>
    <script>
        $(function() {
            <?php if (isset($_SESSION['update_driver'])): ?>
              swal("Success!", "The record of this driver has been updated", "success");
              <?php unset($_SESSION['update_driver']) ?>
            <?php endif ?>
        });
    </script>
</body>
</html>
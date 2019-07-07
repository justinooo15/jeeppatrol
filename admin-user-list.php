<?php
    session_start();
    
    if (!isset($_SESSION['username'])) {
        $_SESSION['login_first'] = "You need to login first"; 
        header("location: index.php");
    }

    include("includes/connection.php");

    $user = "user";
    $alluser = $conn->prepare("select * from tbl_users where user_level = ? order by f_name desc");
    $alluser->execute(array($user));
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
                        	<li class="headnav"><a href="admin-add-drivers.php"><i class="fa fa-plus" aria-hidden="true"></i>Add Drivers</a></li>
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
                <li class="breadcrumb-item"><a href="#">Commuter's List</a></li>
            </ol>
          <div class="card table-responsive">
                <div class="card__head">
                    <h1>List of Commuters</h1>
                </div>
               <div class="card__table">
                    <table class="table">
                       <thead>
                         <tr>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Username</th>
                           <th>Contact</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                           <?php
                           while ($byuser = $alluser->fetch()) {
                               $userid = $byuser['user_id'];
                           ?>
                           <tr>
                               <td><?php echo $byuser['f_name']; ?></td>
                               <td><?php echo $byuser['l_name']; ?></td>
                               <td><?php echo $byuser['uname']; ?></td>
                               <td><?php echo $byuser['contact_no']; ?></td>
                               <td>
                                <div class="row">
                                  <div class="col-xs-3">
                                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                                      <button class="btn btn-danger btn-xs modal-delete" data-id="<?php echo $userid; ?>" data-title="Delete" data-toggle="modal" data-target="#modal-delete" >
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
               </div>
          </div>
        </main>
    </div> 
</div>
<div class="modal fade mdal" id="modal-delete" role="dialog">
  <div class="modal-dialog modal-md">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>Delete selected Commutter</b></h4>
          </div>
          <form action="user-delete-user-process.php" method="post">
            <div class="modal-body">
              <input type="hidden" id="SrcId" name="srcid">
              <h4 style="text-align: center;">Are you sure you want to delete this Commutter?</h4>
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
	<script src="/library/js/global.js"></script>
    <script>
        $(function() {
            $(".modal-delete").click(function() {
              var x = $(this).data('id');
              $(".modal-body #SrcId").val(x);
            });
            <?php if (isset($_SESSION['delete_user'])): ?>
              swal("Success!", "The user has been deleted.", "success");
              <?php unset($_SESSION['delete_user']) ?>
            <?php endif ?>
        });
    </script>
</body>
</html>
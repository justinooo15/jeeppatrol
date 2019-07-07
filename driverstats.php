<?php
	include("includes/connection.php");

	$status = $conn->prepare("select * from tbl_drivers where driver_id = ?");
	$status->execute(array($_REQUEST['id']));
	$driverstats = $status->fetch();
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE driver_id = ? AND  violation LIKE '%Smoking%'");
    $sql->execute(array($_REQUEST['id']));
    $smoke = array();
    while ($row = $sql->fetch()){
    	$smoke[] = $row['smoke'];
    }
?>

<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Illegal U turn%'");
    $sql->execute(array($_REQUEST['id']));
    $uturn = array();
    while ($row = $sql->fetch()){
    	$uturn[] = $row['uturn'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Disrespectful conduct to passenger%'");
    $sql->execute(array($_REQUEST['id']));
    $disrespectful = array();
    while ($row = $sql->fetch()){
    	$disrespectful[] = $row['disrespectful'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Disobedience to the traffic officer%'");
    $sql->execute(array($_REQUEST['id']));
    $disobedience = array();
    while ($row = $sql->fetch()){
    	$disobedience[] = $row['disobedience'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Disregarding traffic sign or signal%'");
    $sql->execute(array($_REQUEST['id']));
    $disregarding = array();
    while ($row = $sql->fetch()){
    	$disregarding[] = $row['disregarding'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Driving under the influence of liquor%'");
    $sql->execute(array($_REQUEST['id']));
    $liquor = array();
    while ($row = $sql->fetch()){
    	$liquor[] = $row['liquor'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Loading and unloading at the middle of the street%'");
    $sql->execute(array($_REQUEST['id']));
    $loading = array();
    while ($row = $sql->fetch()){
    	$loading[] = $row['loading'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Loading and unloading at the street corner%'");
    $sql->execute(array($_REQUEST['id']));
    $unloading = array();
    while ($row = $sql->fetch()){
    	$unloading[] = $row['unloading'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Refusal of convey passenger%'");
    $sql->execute(array($_REQUEST['id']));
    $refusal = array();
    while ($row = $sql->fetch()){
    	$refusal[] = $row['refusal'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Non wearing of proper current identification card%'");
    $sql->execute(array($_REQUEST['id']));
    $identification = array();
    while ($row = $sql->fetch()){
    	$identification[] = $row['identification'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Non posting of current passenger fare%'");
    $sql->execute(array($_REQUEST['id']));
    $fare = array();
    while ($row = $sql->fetch()){
    	$fare[] = $row['fare'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%No uniform%'");
    $sql->execute(array($_REQUEST['id']));
    $uniform = array();
    while ($row = $sql->fetch()){
    	$uniform[] = $row['uniform'];
    }
?>
<?php
$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Obstruction to traffic%'");
    $sql->execute(array($_REQUEST['id']));
    $obstruction = array();
    while ($row = $sql->fetch()){
    	$obstruction[] = $row['obstruction'];
    }
?>
<?php
	$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Over charging of fare%'");
    $sql->execute(array($_REQUEST['id']));
    $charging = array();
    while ($row = $sql->fetch()){
    	$charging[] = $row['charging'];
    }
?>
<?php
	$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Over loading%'");
    $sql->execute(array($_REQUEST['id']));
    $over = array();
    while ($row = $sql->fetch()){
    	$over[] = $row['over'];
    }
?>
<?php
	$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Trip cutting%'");
    $sql->execute(array($_REQUEST['id']));
    $cutting = array();
    while ($row = $sql->fetch()){
    	$cutting[] = $row['cutting'];
    }
?>
<?php
	$sql = $conn->prepare("SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE driver_id = ? AND violation LIKE '%Use cellphone while driving%'");
    $sql->execute(array($_REQUEST['id']));
    $cellphone = array();
    while ($row = $sql->fetch()){
    	$cellphone[] = $row['cellphone'];
    }
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

	<script src="/js/charts/Chart.js"></script>
    <script src="/js/charts/Chart.min.js"></script>
</head>
<body>
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
        		<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
      		</ul>
    	</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<main>
	<div class="home">
		<div class="container">
			<div class="col-xs-12 col-md-12">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-12">
						<div class="status">
							<div class="status__header">
								<h1>Drivers Status</h1>
							</div>
							<div class="status__body">
								<div class="row">
									<div class="col-xs-12 col-sm-8 col-md-12">
										<label for="">Drivers Name:</label>
										<p><?php echo $driverstats['f_name'] . " " . $driverstats['l_name']; ?></p>
			                            <canvas class="card__canvas" id="myChart1" width="auto" height="auto"></canvas>

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
<div class="modal fade mdal " id="modalpic" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
    	<div class="col-xs-12">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Drivers Status</h4>
                </div>
                <div class="col-xs-12">
                    <div class="modal-body">
                    	<div class="row">
                    		<div class="col-xs-12">
                    			<div class="mdal__name">
                    				<label for="">Drivers Name:</label>
                    				<p>Mang Kanor</p>
                    			</div>
                    		</div>
                    	</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="mdal__image">
									<canvas class="card__canvas" id="myChart1" width="auto" height="auto"></canvas>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="mdal__select">
									<label for=""> Violations:</label>
									<select name="" id="" class="form-control ">
										<option value="" class="form-control">Select Violations</option>
										<option value="" class="form-control">All violations</option>
										<option value="" class="form-control">Lorem</option>
										<option value="" class="form-control">Lorem</option>
										<option value="" class="form-control">Lorem</option>
									</select>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div><!-- /.modal-content --> 
        </div>
    </div><!-- /.modal-dialog --> 
</div>
	<script>
                        var ctx = document.getElementById("myChart1").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'horizontalBar',
                            data: {
                                labels: ["Smoking", "No U Turn", "Discourteous disrespectful conduct to passenger", "Disobedience to the traffic officer", "Disregarding traffic sign or signal", "Driving under the influence of liquor", "Loading and unloading at the middle of the street", "Loading and unloading at the street corner", "Refusal of convey passenger", "Non wearing of proper current identification card", "Non posting of current passenger fare", "No uniform", "Obstruction to traffic", "Over charging of fare", "Over loading" , "Trip cutting", "Use cellphone while driving"],
                                datasets: [
                                    {label: 'Total Violations',
                                    data :[<?=json_encode($smoke);?>, <?=json_encode($uturn);?>, <?=json_encode($disrespectful);?>, <?=json_encode($disobedience);?>, <?=json_encode($disregarding);?>, <?=json_encode($liquor);?>, <?=json_encode($loading);?>, <?=json_encode($unloading);?>, <?=json_encode($refusal);?>, <?=json_encode($identification);?>, <?=json_encode($fare);?>, <?=json_encode($uniform);?>, <?=json_encode($obstruction);?>, <?=json_encode($charging);?>, <?=json_encode($over);?>, <?=json_encode($cutting);?>, <?=json_encode($cellphone);?>],
                                    scaleFontColor: "white",
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(146, 66, 244, 0.2)',
                                        'rgba(238, 65, 244, 0.2)',
                                        'rgba(66, 244, 137, 0.2)',
                                        'rgba(74, 244, 65, 0.2)',
                                        'rgba(149, 244, 66, 0.2)',
                                        'rgba(244, 157, 65, 0.2)',
                                        'rgba(65, 244, 244, 0.2)',
                                        'rgba(181, 244, 65, 0.2)',
                                        'rgba(0, 12, 255, 0.2)',
                                        'rgba(255, 0, 174, 0.2)',
                                        'rgba(255, 131, 0, 0.2)',
                                    ],
                                    borderColor: [
                                          'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(146, 66, 244, 1)',
                                        'rgba(238, 65, 244, 1)',
                                        'rgba(66, 244, 137, 1)',
                                        'rgba(74, 244, 65, 1)',
                                        'rgba(149, 244, 66, 1)',
                                        'rgba(244, 157, 65, 1)',
                                        'rgba(65, 244, 244, 1)',
                                        'rgba(181, 244, 65, 1)',
                                        'rgba(0, 12, 255, 1)',
                                        'rgba(255, 0, 174, 1)',
                                        'rgba(255, 131, 0, 1)'
                                    ],
                                    borderWidth: 1}  
                                ],
                            },
                            options: {
                                legend: {
                                 labels: {
                                    fontColor: "black",
                                    fontSize: 12
                                 }
                                },
                                scales: {
                                    yAxes: [{
                                        responsive: true,
                                         gridLines: {
                                            color: "#cccccc"
                                            },
                                        ticks: {
                                            fontColor: "black",
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
             </script>

	<script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script src="/library/plugins/mdb/js/jquery-3.1.1.min.js"></script>
	<script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--<script src="/library/plugins/mdb/js/mdb.min.js"></script>-->
	<script src="/library/js/global.js"></script>
</body>
</html>
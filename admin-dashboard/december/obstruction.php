smoking.php
<?php
   $link = mysql_connect('localhost', 'root', '')
                or die('Could not connect: ' . mysql_error());
        mysql_select_db('jeep') or die('Could not select database');

?>
     <?php
        $sql = "SELECT post_id,  DATE_FORMAT(date_time, '%M %e %Y') AS 'date', COUNT(*) AS 'obstruction' FROM tbl_posts
                WHERE violation LIKE '%Obstruction to traffic%' AND DATEDIFF('2017-12-01', '2017-12-31')
                GROUP BY date DESC";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction13 = array();
        $date = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction13[] = $row["obstruction"];
            $date[] = $row["date"];
        }
    }
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

    <script src="/js/charts/Chart.js"></script>
    <script src="/js/charts/Chart.min.js"></script>

</head>

<body>
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
                        <a href="admin-userprofile.php">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Users Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-add-drivers.php">
                            <span class="sidebar-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Add Drivers</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-list-reports.php">
                            <span class="sidebar-icon"><i class="fa fa-list" aria-hidden="true"></i></span>
                            <span class="sidebar-title">List of reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-drivers-list.php">
                            <span class="sidebar-icon"><i class="fa fa-list" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Drivers Lists</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>
        
        <main id="page-content-wrapper" role="main" class="container-fluid dash">
           <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="/dashboard.php">Dashboard</a></li>
            </ol>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Monthly Summary
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <li>
                    <a class="dropdown-item" href="january.php">January</a>
                </li>
                <li>
                    <a class="dropdown-item" href="febuary.php">February</a>
                </li>
                <li>
                    <a class="dropdown-item" href="march.php">March</a>
                </li>
                <li>
                    <a class="dropdown-item" href="april.php">April</a>
                </li>
                <li>
                    <a class="dropdown-item" href="may.php">May</a>
                </li>
                <li>
                    <a class="dropdown-item" href="june.php">June</a>
                </li>
                <li>
                    <a class="dropdown-item" href="july.php">July</a>
                </li>
                <li>
                    <a class="dropdown-item" href="august.php">August</a>
                </li>
                <li>
                    <a class="dropdown-item" href="september.php">September</a>
                </li>
                <li>
                    <a class="dropdown-item" href="october.php">October</a>
                </li>
                <li>
                    <a class="dropdown-item" href="november.php">November</a>
                </li>
                <li>
                    <a class="dropdown-item" href="december.php">December</a>
                </li>

              </div>
            </div>
            <div class="card">
                    <div class="card__chart">
                        <div class="card__head">
                            <h1>Daily</h1>
                        </div>
                        <div class="card__detail">
                            <canvas class="card__canvas" id="myChart" width="auto" height="auto"></canvas>
                        </div>
                    </div>
                    <script>
                        var ctx = document.getElementById("myChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: <?=json_encode($date);?>,
                                datasets: [
                                    {label: 'Obstruction to traffic',
                                    data :<?=json_encode($obstruction13);?>,
                                    scaleFontColor: "white",
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)'
                                        /*,
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
                                        'rgba(255, 131, 0, 0.2)',*/
                                    ],
                                    borderColor: [
                                          'rgba(255, 99, 132, 1)'/*,
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
                                        'rgba(255, 131, 0, 1)'*/
                                    ],
                                    borderWidth: 1}  
                                ],
                            },
                            options: {
                                legend: {
                                 labels: {
                                    fontColor: "white",
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
                                            fontColor: "white",
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
             </script>
             </div>
            </div>
        </main>
    </div> 
    </div>
    <script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script><!-- 
    <script src="/library/plugins/mdb/js/jquery-3.1.1.min.js"></script> -->
    <script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="/library/plugins/mdb/js/mdb.min.js"></script>-->
    <script src="/library/js/global.js"></script>

</body>
</html>
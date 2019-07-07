<?php
	session_start();
	include("includes/connection.php");

	$driverid = $_POST['driver'];
	$jeepno = $_POST['jeepno'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$setday = 1;

	if (!isset($driverid)) {
		header("location: /operatorpage.php");
	}

	$updatejeep = $conn->prepare("update tbl_jeepbyoperator
									set driver_id = ?
									where jeepney_no = ?");
	$updatejeep->execute(array($driverid, $jeepno));


	if (isset($_POST['mon'])){
		//echo $_POST['mon'];
		$updateday = $conn->prepare("update tbl_driver_schedules 
										set monday = ?
										where driver_id = ?
										");
		$updateday->execute(array($setday, $driverid));
	}
	if (isset($_POST['tues'])){
		//echo $_POST['tues'];
		$updateday = $conn->prepare("update tbl_driver_schedules 
										set tuesday = ?
										where driver_id = ?
										");
		$updateday->execute(array($setday, $driverid));
	}
	if (isset($_POST['wed'])){
		//echo $_POST['wed'];
		$updateday = $conn->prepare("update tbl_driver_schedules 
										set wednesday = ?
										where driver_id = ?
										");
		$updateday->execute(array($setday, $driverid));
	}
	if (isset($_POST['thurs'])){
		//echo $_POST['thurs'];
		$updateday = $conn->prepare("update tbl_driver_schedules 
										set thursday = ?
										where driver_id = ?
										");
		$updateday->execute(array($setday, $driverid));
	}
	if (isset($_POST['fri'])){
		//echo $_POST['fri'];
		$updateday = $conn->prepare("update tbl_driver_schedules 
										set friday = ?
										where driver_id = ?
										");
		$updateday->execute(array($setday, $driverid));
	}
	if (isset($_POST['sat'])){
		//echo $_POST['sat'];
		$updateday = $conn->prepare("update tbl_driver_schedules 
										set saturday = ?
										where driver_id = ?
										");
		$updateday->execute(array($setday, $driverid));
	}
	if (isset($_POST['sun'])){
		//echo $_POST['sun'];
		$updateday = $conn->prepare("update tbl_driver_schedules 
										set sunday = ?
										where driver_id = ?
										");
		$updateday->execute(array($setday, $driverid));
	}

	$updatetime = $conn->prepare("update tbl_driver_schedules
									set start_time = ?, end_time = ?
									where driver_id = ?
									");
	$updatetime->execute(array($start,$end,$driverid));
/*
	$get = $conn->prepare("select * from tbl_driver_schedules where driver_id = ?");
	$get->execute(array($driverid));
	$row = $get->fetch();

	$days = ()

	$updaterecord = $conn->prepare("update tbl_schedule_record
									set day_of_work = ?, date_time = now()
									where driver_id = ?");
	$updaterecord->execute(array($days));*/

	$_SESSION['update_driver'] = "The driver's schedule has been updated.";
	header("location: operatorpage.php");
	
?>
<?php
	session_start();
	include("includes/connection.php");
	$driverid = $_POST['srcid'];

	if (!isset($driverid)) {
		header("location: admin-drivers-list.php");
	}

	$deletedriver = $conn->prepare("delete from tbl_drivers where driver_id = ?");
	$deletedriver->execute(array($driverid));

	$deleterecord = $conn->prepare("delete from tbl_schedule_records where driver_id = ?");
	$deleterecord->execute(array($driverid));

	$deleteschedule = $conn->prepare("delete from tbl_driver_schedules where driver_id = ?");
	$deleteschedule->execute(array($driverid));


	$_SESSION['driver_delete'] = "The driver has been deleted";
	header("location: admin-drivers-list.php");

?>
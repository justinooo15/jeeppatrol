<?php
	session_start();
	include("includes/connection.php");

	if (!isset($_POST['f_name'])) {
		header("location: admin-edit-driver.php?id=" . $_REQUEST['id']);
	}

	$driverid = $_REQUEST['id'];
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$no = $_POST['contact_no'];
	$license =$_POST['license'];
	$operatorid =$_POST['operatorid'];


	$update = $conn->prepare("update tbl_drivers
								set f_name = ?, l_name = ?, contact_no = ?, license = ?, operator_id = ?
								where driver_id = ?");
	$update->execute(array($fname,$lname,$no,$license,$operatorid,$driverid));

	$_SESSION['update_driver'] = "The record of this driver has been updated";
	header("location: admin-edit-driver.php?id=" . $driveridid);
?>
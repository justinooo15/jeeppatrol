<?php 
	session_start();
	if (!isset($_POST['f_name'])) {
		header('admin-add-drivers.php');
	}

	include("includes/connection.php");

	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$no = $_POST['contact_no'];
	$license =$_POST['license'];
	$operatorid =$_POST['operatorid'];

	$insertdriver = $conn->prepare("insert into tbl_drivers (f_name, l_name, contact_no, license, operator_id) values (:fname, :lname, :number, :license, :opid)");

	$insertdriver->bindParam(':fname',$fname);
	$insertdriver->bindParam(':lname',$lname);
	$insertdriver->bindParam(':number',$no);
	$insertdriver->bindParam(':license',$license);
	$insertdriver->bindParam(':opid',$operatorid);

	$insertdriver->execute();
	$last_id = $conn->lastInsertId();

	$insertrecord = $conn->prepare("insert into tbl_schedule_records (driver_id) values (:id)");
	$insertrecord->bindParam(':id',$last_id);
	$insertrecord->execute();

	$insertsched = $conn->prepare("insert into tbl_driver_schedules (driver_id) values (:idd)");
	$insertsched->bindParam(':idd',$last_id);
	$insertsched->execute();


	$_SESSION['add_driver'] = "The driver has been successfully added.";
	header("location: admin-add-drivers.php");

	
?>
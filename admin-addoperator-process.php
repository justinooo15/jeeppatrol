<?php
	session_start();
	include("includes/connection.php");

	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jeepney_no = $_POST['jeepney_no'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	$level = "operator";
	$hashedpass = password_hash($password, PASSWORD_DEFAULT);

	if (!isset($f_name)) {
		header("location: admin-add-operators.php");
	}

	$checkifexistnumber = $conn->prepare("select jeepney_no from tbl_jeepbyoperator where jeepney_no = ?");
	$checkifexistnumber->execute(array($jeepney_no));
	$count = $checkifexistnumber->fetch();
	if (!empty($count)) {
		$_SESSION['jeep_exist'] = "The Jeepney Number already Exist";
		header("location: admin-add-operators.php");
	}

	$checkifexistname = $conn->prepare("select uname from tbl_users where uname = ?");
	$checkifexistname->execute(array($username));
	$countrow = $checkifexistname->fetch();	
	if (!empty($countrow)) {
		$_SESSION['name_exist'] = "The Username already Exist";
		header("location: admin-add-operators.php");
	}

	$addoperator = $conn->prepare("insert into tbl_users (f_name,l_name,contact_no,email,uname,pword,user_level) 
									values (:fname,:lname,:contact,:email,:user,:word,:level)");
	$addoperator->bindParam(':fname', $f_name);
	$addoperator->bindParam(':lname', $l_name);
	$addoperator->bindParam(':contact', $contact_no);
	$addoperator->bindParam(':email', $email);
	$addoperator->bindParam(':user', $username);
	$addoperator->bindParam(':word', $hashedpass);
	$addoperator->bindParam(':level', $level);
	$addoperator->execute();
	$last_id = $conn->lastInsertId();

	
	if(count($_FILES) > 0) {
	//echo "s".$_POST['id'];	
		if(is_uploaded_file($_FILES['image']['tmp_name'])) {
			//echo "s".$_POST['id'];	
    		$imgData = file_get_contents($_FILES['image']['tmp_name']);
    		$imageProperties = getimageSize($_FILES['image']['tmp_name']);
    		$statement = $conn->prepare("Update tbl_posts set photo = ? where post_id = ?");
    		$statement->execute(array($imgData,$last_id));
    		print_r($conn->errorInfo());
		}
	}

	$addjeep = $conn->prepare("insert tbl_jeepbyoperator (jeepney_no, user_id) values (:no, :id)");

	$addjeep->bindParam(':no',$jeepney_no);
	$addjeep->bindParam(':id', $last_id);
	$addjeep->execute();

	$_SESSION['add_operator'] = "The operator has been added successfully";
	header("location: admin-add-operators.php");

?>
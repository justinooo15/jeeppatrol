<?php
	include("includes/connection.php");

	$id = $_POST['post_id'];

	if (!isset($id)) {
		header("location: dashboard.php");
	}

	try{
		
		$deletepost = $conn->prepare("delete from tbl_posts where post_id = ?");
		$deletepost->execute(array($id));

		$deletecomment = $conn->prepare("delete from tbl_comments where post_id = ?");
		$deletecomment->execute(array($id));

		header("location: dashboard.php");
	}catch(PDOExeption $e){
		echo "An Error has occured due to" . $e;
		echo "<h3>Please reload the page to retry</h3>";
	}

?>
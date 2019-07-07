<?php
	include("includes/connection.php");

	$id = $_POST['srcid'];
	$text = $_POST['editpost'];


	if (!isset($id)) {
		header("location: home.php");
	}

	try{
		
		$deletepost = $conn->prepare("update tbl_posts set post_text = ? where post_id = ?");
		$deletepost->execute(array($text,$id));

		header("location: home.php");
	}catch(PDOExeption $e){
		echo "An Error has occured due to" . $e;
		echo "<h3>Please reload the page to retry</h3>";
	}
?>
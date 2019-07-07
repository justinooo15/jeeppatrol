<?php
session_start();
	if(session_destroy()){
		$_SESSION['logout'] = "You have successfully logged out.";
		header("Location: /");
	}
?>
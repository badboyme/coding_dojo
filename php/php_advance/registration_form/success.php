<?php 
	session_start();
	if (isset($_SESSION['success'])) 
	{
		echo "You have successfuly register";
		unset($_SESSION['success']);
	}
	else // malicious users!
	{
		header('location: index.php');
		die();
	}

?>
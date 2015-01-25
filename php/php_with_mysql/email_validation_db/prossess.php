<?php 
session_start();
// echo "Post info<br>";
// var_dump($_POST);
// echo "Session Info";
// var_dump($_SESSION);
include('connection.php');

$_SESSION['email'] = $_POST['email'];
if(isset($_POST['action']) == 'submit')
{ 
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
	{
		$_SESSION['error'] = $_POST['email'];
		// var_dump('error');
		header("location: index.php");
		die();
	}
	else
	{	
		$theemail = $_POST['email'];
		// var_dump($theemail);
		$new_email = "INSERT INTO users (email) VALUES ('$theemail')";
		run_mysql_query($new_email);
		// echo "email submited";
		header("location: success.php");
		die();

	}
}
?>
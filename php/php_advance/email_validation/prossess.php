<?php 
session_start();
// echo "Post info<br>";
// var_dump($_POST);
// echo "Session Info";
// var_dump($_SESSION);
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
		header("location: success.php");
		die();

	}
}
?>
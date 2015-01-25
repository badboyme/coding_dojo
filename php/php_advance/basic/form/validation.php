<?php

echo "FILES INFO<br />";
var_dump($_FILES);
echo "COOKIE INFO<br />";
var_dump($_COOKIE);
echo "SESSION INFO<br />";
var_dump($_SESSION);

echo "SERVER INFO<br />";
var_dump($_SERVER);
echo "REQUEST INFO<br />";
var_dump($_REQUEST);
echo "GET INFO<br />";
var_dump($_GET);
echo "POST INFO<br />";
var_dump($_POST);

if (isset($_POST['music'])) 
{
	$_SESSION['music'] = $_POST['music'];// Save value in session into an array
}
if (isset($_POST['color'])) 
{
	$_SESSION['color'] = $_POST['color'];// Save value in session into an array
}

header('location: index.php');





if (isset($_POST['action']) && $_POST['action'] == 'submit') 
{
	// emty array to collect validation errors
	$errors = array();
	var_dump($_POST);
	//validate name
	var_dump($_POST);
	if (empty($_POST['first_name'])) 
	{
		// add error to the array
		echo "test1";
		$errors[] = "Please include your name!";
	}
	//validate email
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
	{
		echo "test2";
		$errors[] = "Please check your email";
	}
	// if there is any errors at all
	if (count($errors) > 0)
	{
		$_SESSION['errors'] = $errors;
	}
	else
	{
		$_SESSION['success'] = "ongratulations, success!" 
	}
	//end validation
}
?> 
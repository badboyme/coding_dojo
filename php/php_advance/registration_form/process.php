<?php
session_start();
// echo "Post";
// $errors[] = '';
// var_dump($_POST);
// echo "Session";
// var_dump($_SESSION);


if(isset($_POST['action']) && $_POST['action'] == 'register')
	{	
		$errors = array();
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			//Validate email
			// echo "fatal error 1<br />";
			$errors[] = 'Please check your email';
		}
		// Full Name must contain letters, dashes and spaces only and must start with upper case letter.
		if(preg_match("/^[a-zA-Z][a-zA-Z -]+$/", $_POST['first_name']) === 0)
		{
			// echo "fatal error 2<br />";
			$errors[] = 'First name should be letters';
		}
		if(preg_match("/^[a-zA-Z][a-zA-Z -]+$/", $_POST['last_name']) === 0)
		{	
			// Full Name must contain letters, dashes and spaces only and must start with upper case letter.
			// echo "fatal error 3<br />";
			$errors[] = 'Last name should be letters';
		}
		if(strlen($_POST['password']) < 6) 
		{
			// Password must be only digits
			// echo "fatal error 4<br />";
			$errors[] = 'Password must be more than 6 digits';
		}
		if(strlen($_POST['comfirm_password']) < 6) 
		{
			// Password must be only digits
			// echo "fatal error 5<br />";
			$errors[] = 'Password must be more than 6 digits';
		}
		if (empty($_POST['birth_date'])) 
		{	
			// echo "fatal error 6<br />";
			$errors[] = 'Please a valid birth date';
		}
		if (count($errors) > 0) 
		{
			$_SESSION['errors'] = $errors;
			header('location: index.php');
			die();
		}
		
		else
		{
			$_SESSION['success'] = 'Congratulations you are in!';
			header('location: success.php');
			die();
		}
	}
?>
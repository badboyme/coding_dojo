<?php 
	session_start();
	require('connection.php');
	// echo "Post";
	// var_dump($_POST);
	// echo "Session";
	// var_dump($_SESSION);
	// session_destroy();
	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{	
		//call register_user function
		register_user($_POST); // use the actual post
	}

	elseif (isset($_POST['action']) && $_POST['action'] == 'login') 
	{	
		//call login_user function
		login_user($_POST); // use the actual post

	}
	else // malicious navigation to login_process.php OR someone is trying to log out!
	{
		session_destroy();
		header('location: index.php');
		die();
	}

	function register_user($post) // just parameter called post
	{	
		//--------------------------- begin validation checks
		$_SESSION['errors'] = array();

		if(preg_match("/^[a-zA-Z][a-zA-Z -]+$/", $_POST['first_name']) === 0)
		{
			$_SESSION['errors'][] = 'First name should be letters only!';
		}
		if(preg_match("/^[a-zA-Z][a-zA-Z -]+$/", $_POST['last_name']) === 0)
		{	
			$_SESSION['errors'][] = 'Last name should be letters only!';
		}

		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			$_SESSION['errors'][] = 'Please use a valid email address!';
		}
		if($_POST['password'] !== $post['confirm_password']) 
		{
			$_SESSION['errors'][] = 'Password must match!';
		}
		if(empty($_POST['password'])) 
		{
			$_SESSION['errors'][] = 'Password field is require!';
		}
		
		// ---------------------------End of validation checks
		if (count($_SESSION['errors']) > 0) 
		{
			header('location: index.php');
			die();
		}
		else //insert data to the database!
		{
			$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at)
			VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['password']}', '{$post['email']}', NOW(), NOW())";
			run_mysql_query($query);
			
			$_SESSION['success_message'] = 'User successfully created!';
			header('location: wall.php');
			die();
		}
	}

	function login_user($post) // just parameter called post
	{	

		$query = "SELECT * FROM users WHERE users.password = '{$post['password']}' 
				  AND users.email = '{$post['email']}'"; 
		$user = fetch_all($query); // go and attempt to grab user with above credentials!
		if (count($user) > 0 ) 
		{
			$_SESSION['user_id'] = $user[0]['id'];
			$_SESSION['first_name'] = $user[0]['first_name'];
			$_SESSION['logged_in'] = TRUE;
			header('location: wall.php');
			die();
		}
		else
		{
			$_SESSION['errors'][] = "Can't find a user with those credentials!";
			header('location: index.php');
			die();
		}
	}
?>
<?php 
session_start();
// echo "<h2>Session</h2>";
// var_dump($_SESSION);
// echo "<h2>Post</h2>";
// var_dump($_POST);
// session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the wall</title>
	<meta name="Esteban Gallego" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="container">
	<div class="six columns">
	<?php 
		if (isset($_SESSION['errors']))
		{
			foreach ($_SESSION['errors'] as $errors) 
			{
				echo "<p class='errors'>{$errors}</p>";
			}
			unset($_SESSION['errors']);
		}
		if (isset($_SESSION['success_message'])) 
		{
			echo "<p class='success'>{$_SESSION['success_message']}</p>";
			unset($_SESSION['success_message']);
		}
	?>

		<h2>Register</h2>
		<form action="login_process.php" method="post">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" >
			</div>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="first_name">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="last_name">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" maxlength="10"><br />
				<label>Confirm Password</label>
				<input type="password" name="confirm_password" maxlength="10">
			</div>

			<div class="form-group">
				<input type="hidden" name="action" value="register">
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
	<div class="six columns">
		<h2>Login</h2>
		<form action="login_process.php" method="post" id="login">
			<input type="hidden" name="action" value="login">		
			<div>
				<label>Email</label>
				<input type="text" name="email">
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" maxlength="10">
			</div>
			<div>
				<input type="submit" value="login">
			</div>
		</form>
	</div>	
</div>
</body>
</html>
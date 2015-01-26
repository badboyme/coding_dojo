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
	<title>Login</title>
	<style type="text/css">
	.errors{
		color: red;
	}
	.success{
		color: green:;
	}
	</style>
</head>
<body>
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
	<form action="process.php" method="post">
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
	<h2>Login</h2>
	<form action="process.php" method="post" id="login">
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

</body>
</html>
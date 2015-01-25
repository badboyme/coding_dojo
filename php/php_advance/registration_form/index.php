<?php 
session_start();
// echo "Post";
// var_dump($_POST);
// echo "Session";
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style type="text/css">
	  #wraper {
	  	width: 500px;
	  	margin: 0 auto;
	  }
	</style>
</head>
<body>
<?php 
	if (isset($_SESSION['errors'])) 
	{
		foreach ($_SESSION['errors'] as $error) 
		{
			echo "<p> $error </p>";
		}
		unset($_SESSION['errors']);
	}

?>
<div id="wraper">
	<form action="process.php" enctype="multipart/form-data" method="post">
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
			<input type="password" name="comfirm_password" maxlength="10">
		</div>
		<div class="form-group">
			<label>Birth Date</label>
			<input type="date" name="birth_date">
		</div>
		<div class="form-group">
			<label>Profile picture</label>
			 <input type="file" name="fileToUpload" id="fileToUpload">
		</div>
		<div class="form-group">
			<input type="hidden" name="action" value="register">
			<input type="submit" value="Submit">
		</div>
	</form>
</div>
</body>
</html>
<?php 
// session_destroy();
?>
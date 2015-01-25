<?php 
	session_start();
	echo "COOKIE INFO<br />";
	var_dump($_COOKIE);
	echo "SESSION INFO<br />";
	var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<form action="process.php" method="post" enctype="multipart/form-data">
		<div>
			<h2>Add information about yourself!</h2>
			First Name <input type="text" name="first_name">
			Email <input type="email" name="email">	
		</div>
		<div>
			<label>What is your favorite color?</label>
			<input type="text" name="color" placeholder="Put your color here">
		</div>
		<div>
			<label for="color">Whats your favorite type of music?</label>
			<select name="music">
				<option value="hipHop">Hip Hop</option>
				<option value="pop">Pop</option>
				<option value="rock">Rock</option>
				<option value="alternative">Alternative</option>
				<option value="country">Country</option>
				<option value="newAge">New Age</option>
				<option value="classical">Classical</option>
			</select>
		</div>
		<div>
			<label>Choose File:</label>
			<input type="file" name="file">
		</div>
		<div>
			<input type="hidden" name="action" value="submit">
			<input type="submit" value="submit">
		</div>
	</form>
</body>
</html>
<?php 
// 	$_SESSION = array(); Unset variables
?>
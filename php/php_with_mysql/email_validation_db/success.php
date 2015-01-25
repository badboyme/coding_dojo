<?php 
session_start();
include('connection.php');
$query = "SELECT * FROM users";
$people = fetch_all($query);
// var_dump($_SESSION);
// var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
	<style type="text/css">
		#succes  {
			width: 800px;
			height: 55px;
			border: 1px solid black;
			margin: 0 auto;
			background-color: green;
			text-align: center;
			font-size: 20px;
			color: white;
			padding: 30px;
		}
	</style>
</head>
<body>
	<div id="succes">
		The email adreess you entered (<?php echo $_SESSION['email']; ?>) is a VALID email address! Thank You!
	</div>
	<div>
		<h1>Email Addresses Entered:</h1>
		<?php
			krsort($people);
			foreach ($people as $person) 
			{
				echo "<h3>{$person['email']} - " . date("M / j / Y") . "</h3>";
			}?>

	</div>
</body>
</html>
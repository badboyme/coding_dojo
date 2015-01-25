<?php 
session_start();
// var_dump($_SESSION);
// var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
	<style type="text/css">
		div {
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
	<div>
		The email adreess you entered (<?php echo $_SESSION['email']; ?>) is a VALID email address! Thank You!
	</div>
</body>
</html>
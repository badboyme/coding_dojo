<?php 
session_start();
// echo "<h2>Session</h2>";
// var_dump($_SESSION);
// echo "<h2>Post</h2>";
// var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
<title>Email Validation</title>
	<style type="text/css">
		
		h3  {
			width: auto;
			height: 20px;
			border: 1px solid black;
			margin: 0 auto;
			background-color: red;
			text-align: center;
			font-size: 20px;
			padding: 30px;
		}
	</style>

</head>
<body>
	<div id="wraper">
		<?php 
			if (isset($_SESSION['error'])) 
			{
				echo "<h3>The email adreess you entered (" . $_SESSION['email'] . ") is NOT a valid email address!</h3>" ;
			}
		?>
<!-- "The email adreess you entered () is email address! is NOT a valid email address! Thank You!"  -->
		
		<h1>Please enter your email</h1>
		<form action="prossess.php" method="post">
			<input type="text" name="email" placeholder="youremail@email.com">		
			<input type="hidden" name="action" value="submit">
			<input type="submit" value="submit">
		</form>
	</div>
</body>
</html>
<?php 
	session_destroy();
?>
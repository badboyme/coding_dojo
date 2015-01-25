<?php
session_start();
// echo "POST INFO:<br>";
// var_dump($_POST);
// echo "SESSION INFO<br>";
// var_dump($_SESSION);

if (isset($_POST['name'])) 
{
	$_SESSION['name'] = $_POST['name'];
}
if (isset($_POST['location'])) 
{
	$_SESSION['location'] = $_POST['location'];
}
if (isset($_POST['language'])) 
{
	$_SESSION['language'] = $_POST['language'];
}
if (isset($_POST['textarea'])) 
{
	$_SESSION['textarea'] = $_POST['textarea'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Thanks for sumbiting your form!</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style type="text/css">
	#form {
		width: 400px;
		margin: 0 auto;
		border: 1px solid black;
		padding: 25px;
	}

	h2 {
		width: 400px;
		margin: 0 auto;
		border: 1px solid black;
		padding: 25px;
		margin-bottom: 15px;
		background-color: lightgreen;
	}


	
	</style>
</head>
<body>
	<h2>Thanks for submiting this form! You have submitted this form <?php $_SESSION['counter'] = $_SESSION['counter']+1; echo $_SESSION['counter']; ?> times</h2>
	<div id="form">
		
	  <table class="table">
		<tr>
			<td>Name:</td>
			<td><?php echo $_SESSION['name']; ?></td>
		<tr>
			<td>Location:</td>
			<td><?php echo $_SESSION['location']; ?></td>
		</tr>
		<tr>
			<td>Language:</td>
			<td><?php echo $_SESSION['language']; ?></td>
		</tr>
		<tr>
			<td>Textarea:</td>
	  		<td><?php echo $_SESSION['textarea']; ?></td>
	  	</tr>
	  </table>
	  <a href="index.php" class="btn btn-primary btn-lg active" role="button">Go Back</a>
	</div>
</body>
</html>



<?php 
	// session_start();	
	// echo "SESSION INFO<br />";
	// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style type="text/css">
	#form {
		width: 400px;
		margin: 0 auto;
		border: 1px solid black;
		padding: 0px 25px 25px 25px;
	}
	#form div {
		height: 24px;
	}

	input, keygen, select, button {
		float: right;
		width: 50%;
	}
	#form textarea {
		width: 100%;
	}

	</style>

</head>
<body>
<div id="form">
	<h2>Survey Form</h2>
	<form action="prosses.php" method="post"> 
		<div>
			<label>Name:</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Dojo Location:</label>
			<select name="location">
				<option value="Mountain View">Mountain View</option>
				<option value="Los Angeles">Los Angeles</option>
				<option value="Seattle">Seattle</option>
			</select>
		</div>

		<div>
			<label>Favorite Language</label>
			<select name="language">
				<option value="JavA">Java script</option>
				<option value="PHP">PHP</option>
				<option value="Ruby">Ruby</option>
			</select>
		</div>

				
			<label>Comment (optional):</label>
			<textarea name="textarea" rows="4" cols="50"></textarea>
		

		<div>
			<input type="hidden" name="action" value="survey">
			<input class="btn btn-primary btn-lg active" type="submit" value="Submit" >
		<div>
	</form>
</div>
</body>
</html>

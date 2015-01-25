<?php 
session_start();//Use session everywhere
// echo "COOKIE INFO<br />";
// var_dump($_COOKIE);
// echo "SESSION INFO<br />";
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
	
	<style type="text/css">
	#counter{
		width: 400px;
		border: 1px solid black;
		margin: 0 auto;
		text-align: center;
		height: 150px;
	} 
	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container" id="counter">
		<form action="process.php" method="post">
			<h1>You visit this site</h1>
			<div>
				<?php if (isset($_SESSION['counter'])) 
				{
					$_SESSION['counter'] = $_SESSION['counter']+1;
					echo $_SESSION['counter'];
				}?>		
			</div>
		<div>
			<input type="hidden" name="action" value="submit">
			<input type="submit" class="btn btn-primary btn-lg btn-block" value="Reset">
		</div>
		</form>
	</div>
</body>
</html>
<?php 
// session_destroy();
?>
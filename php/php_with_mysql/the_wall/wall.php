<?php 
session_start();
require('connection.php');
echo "<h5>Post</h5>";
var_dump($_POST);
echo "<h5>Session</h5>";
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The Wall</title>
	<meta name="description" content="">
	<meta name="Esteban Gallego" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="row" id="header">
    <div class="four columns">The Wall</div>
    <div class="eight columns">
    	<?php 
			// session_start();
			echo "Hello {$_SESSION['first_name']}! ";
			echo "<a href='login_process.php'>LOG OFF </a>";
		?>
    </div>
</div>
<div class="container">
	<div class="twelve columns post">
		<h2>Post a message</h2>
		<form action="process.php" method="post">
			<?php if (isset($_SESSION['postError'])) 
			{
				echo $_SESSION['postError']; 
				unset($_SESSION['postError']);
			}
			?>
			<textarea class="u-full-width" placeholder="Whats in your mine?" name="postMessage" id="postMessage"></textarea>
			<input type="hidden" name="action" value="postMessage">
			<input type="submit" class="button-primary" value="Post a massage">
		</form>
		
	</div>
</div>
</body>
</html>	
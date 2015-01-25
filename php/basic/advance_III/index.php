<!DOCTYPE html>
<html>
<head>
	<title>Using PHP to generate a CSS file</title>
	<link rel="stylesheet" type="text/css" href="main.css.php">
	<?php require_once 'securimage/securimage.php'; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<?php include 'main.js.php'; ?>
</head>
<body>

	<h1>Heading  1</h1>
	<p>I had no idea you could use PHP to create a CSS files or many other files than HTML</p>
	<hr>
	<?php echo Securimage::getCaptchaHtml() ?>
</body>
</html>
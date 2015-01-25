<?php
header('location: index.php'); 
session_start();
// echo "<h2>Post</h2>";
// var_dump($_POST);
// echo "<h2>Session</h2>";
// var_dump($_SESSION);


// echo $activityarray;

if (isset($_POST['farm'])) 
{
	$_SESSION['farmGold'] = $_SESSION['farmGold'] + rand(10, 20);
	$event_log = ['You entered the Farm! ' . date("F j, Y, ")];
	$_SESSION['mainLog'][] = $event_log;
	
	// echo $_SESSION['farmGold'];
}

if (isset($_POST['cave'])) 
{
	$_SESSION['farmGold'] = $_SESSION['farmGold'] + rand(5, 10);
	$event_log = ['You entered the Cave!' . $_SESSION['farmGold'] . date("F j, Y,")];
	$_SESSION['mainLog'][] = $event_log;
}

if (isset($_POST['house'])) 
{
	$_SESSION['farmGold'] = $_SESSION['farmGold'] + rand(2, 5);
	$event_log = ['You entered the House!' . $_SESSION['farmGold'] . date("F j, Y, ")];
	$_SESSION['mainLog'][] = $event_log;
}
if (isset($_POST['casino'])) 
{
	$_SESSION['farmGold'] = $_SESSION['farmGold'] + rand(-50, 50);
	$event_log = ['You entered the Casino!' . $_SESSION['farmGold'] . date("F j, Y, ")];
	$_SESSION['mainLog'][] = $event_log;
}

die();

// session_destroy();

?>


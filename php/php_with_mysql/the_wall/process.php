<?php 
session_start();
require('connection.php');
// echo "Post";
// var_dump($_POST);
// echo "Session";
// var_dump($_SESSION);

if (isset($_POST['action']) == 'postMessage') 
{
	post_message($_POST);
}

function post_message($post)
{
	// if (isset($_POST['postMessage'])) 
	// {
	// 	$_SESSION['postMessage'] = $_POST['postMessage'];
	// }
	if (empty($_POST['postMessage'])) 
	{
		$_SESSION['postError'] = "You didn't post anything!";
		header('location: wall.php');
		die();
	}
	else
	{
		$query = "INSERT INTO messages (message, created_at, updated_at)
				  VALUES ('{$post['postMessage']}', NOW(), NOW())";
		echo $query;
	}

}


?>
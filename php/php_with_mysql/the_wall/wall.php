<?php 
session_start();
require('connection.php');
// echo "<h5>Post</h5>";
// var_dump($_POST);
// echo "<h5>Session</h5>";
// var_dump($_SESSION);

function comment_function (){

}

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
			if (isset($_SESSION['first_name'])) 
			{
				echo "Hello {$_SESSION['first_name']}! ";
				echo "<a href='login_process.php'>LOG OFF </a>";
			}
			else
			{
				echo "Insecure access bug Fix this bug";
				if (!isset($_SESSION)) {
				header('location: index.php');
				die();
				}
				// header('location: index.php');
				// die();
			}
			
		?>
    </div>
</div>
<div class="container">
	<div class="twelve columns post">
		<h2>Post a message</h2>
		<form action="login_process.php" method="post">
			<?php if (isset($_SESSION['postError'])) 
			{
				echo $_SESSION['postError']; 
				unset($_SESSION['postError']);
			}
			?>
			<textarea class="u-full-width" placeholder="Whats in your mine?" name="postMessage"></textarea>
			<input type="hidden" name="action" value="postMessage">
			<input type="submit" class="button-primary" value="Post">
		</form>
		<?php
		$query = "SELECT messages.*, users.first_name, users.last_name FROM messages LEFT JOIN users ON messages.users_id = users.id";
		$messages = fetch_all($query);

		// var_dump($messages);

			krsort($messages);
			foreach ($messages as $message) 
		{
			// var_dump($message);
			$messageId = $message['id'];
			echo "<b>Posted on {$message['created_at']} - {$message['first_name']} {$message['last_name']}</b> <br /> <p>{$message['message']}</p>";
			comment_function();
			echo "<br />";
			if (isset($_SESSION['commentError'])) 
				{
					echo $_SESSION['commentError']; 
					unset($_SESSION['commentError']);
				}
		?>
		<?php $query ='SELECT comments.*, comments.comment, comments.id, users.first_name, users.last_name 
			FROM comments LEFT 
			JOIN users ON users.id = comments.users_id
			JOIN messages ON messages.id = comments.messages_id'; 
		// echo $query;
		$comments = fetch_all($query);
		// var_dump($comments);
		?>	

		<?php 
				krsort($comments);
				foreach ($comments as $key => $value) 
				{	
					echo "<b>Comment by: {$value['first_name']} {$value['last_name']} - {$value['created_at']} </b>  <br />{$value['comment']}<br />" ;
					// echo "<b>Comment - {$comments} </p>"; 
				}	
					// echo "<b>Comment - {$comments[message]} </p>"; 
				
				// var_dump($comments);
			?>
		
		
			<form action='login_process.php' method='post'>
			<textarea class='u-full-width' placeholder='Comment about the post!' name='commentInPost' ></textarea>
			<input type='submit' class='button-primary' value='Comment'>
			<input type='hidden' name='cmid' value='<?=$messageId?>'>
			</form>
		 <?php } ?>

	</div>
</div>
</body>
</html>	
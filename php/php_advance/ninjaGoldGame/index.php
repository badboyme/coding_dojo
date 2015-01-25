<?php 
session_start();
// echo "<h2>Post</h2>";
// var_dump($_POST);
// echo "<h2>Session</h2>";
// var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ninja Gold Game</title>
	<style type="text/css">
		#activities {
			height: 200px;
			width: 100%;
			overflow-y: scroll;
			border: 1px solid;
		}
		#wraper {
			width: 980px;
			margin: 0 auto;
			text-align: center;
		}
		#boxes div {
			height: 200px;
			width: 240px;
			display: inline-block;
			vertical-align: top;
			border: 1px solid black;
			text-align: center;
		}
		textarea {
			width:100% ;
			height: 140px;
		}
	</style>
</head>
<body>
	<div id="wraper">
		<label>Your Gold</label>
		<?php if (isset($_SESSION['farmGold'])) {
			echo $_SESSION['farmGold'];
		}?>

		  	
		<div id="boxes">
			<div>
				<label>Farm</label>
				<label>(Earn 10-20 golds)</label>
				<form action="process.php" method="post">
					<input type="hidden" name="farm" value="farm">
					<input  type="submit" value="Find Gold">
				</form>	
			</div>
			<div>
				<label>Cave</label>
				<label>(Earn 5-10 golds)</label>
				<form action="process.php" method="post">
					<input type="hidden" name="cave" value="cave">
					<input  type="submit" value="Find Gold">
				</form>
			</div>
			<div>
				<label>House</label>
				<label>(Earn 2-5 golds)</label>
				<form action="process.php" method="post">
					<input type="hidden" name="house" value="house">
					<input  type="submit" value="Find Gold">
				</form>
			</div>
			<div>
				<label>Casino</label>
				<label>(Earn/Takes 0-50 golds)</label>
				<form action="process.php" method="post">
					<input type="hidden" name="casino" value="casino">
					<input  type="submit" value="Find Gold">
				</form>
			</div>
		</div>
		<p>Activities</p>
		<div id="activities">
<!-- 			<?php for ($i=0; $i < count($_SESSION["mainLog"]); $i++) 
			{ ?> 
				
			<?php } ?> -->

			<?php foreach($_SESSION["mainLog"] as $session) { ?>
			<p><?= $session[0] ?></p>
			<?php } ?>
		</div>
	</div>
</body>
</html>

<?php
//keysort 
// session_destroy(); 
?>
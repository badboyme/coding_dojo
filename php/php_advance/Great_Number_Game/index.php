<?php 
session_start();
// echo "Post info<br>";
// var_dump($_POST);
// echo "Session Info";
// var_dump($_SESSION);
// session_destroy(); 
// $_POST['guess'] = 0;

// $_SESSION['thinkingNumber'] = rand(1, 100);
if (!isset($_SESSION['thinkingNumber'])) 
{
	$_SESSION['thinkingNumber'] = rand(1, 100);
	$_POST['guess'] = 0;

}
if ($_POST["guess"] < $_SESSION["thinkingNumber"])
{
	$tooLow = "background-color:red;";
	$tooLowText = "<p>Too Low!</p>";
} 
if ($_POST["guess"] > $_SESSION["thinkingNumber"]) 
{
	$tooHigh = "background-color:red;";
	$tooHighText = "<p>Too High!</p>";
}
if ($_POST["guess"] == $_SESSION["thinkingNumber"]) 
{
	$fuckYehaa = "background-color:green;";
	$fuckYehaaText = $_SESSION["thinkingNumber"] . "<p>was the number!</p>";
	session_destroy();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Great Number Game</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style type="text/css">

		.table {
			font-size: 20px;
			color: white;
		}

		#wraper {
			width: 980px;
			margin: 0 auto;
			text-align: center;
		}
		#wraper div {
			display: inline-block;
			vertical-align: top;
			height: 200px;
			width: 200px;
			border: 1px solid black;
			padding-top: 20px;
		}
		#tooLow{
				<?php echo $tooLow ?>
			}
		#tooHigh{
				<?php echo $tooHigh ?>
			}
		#fuckYehaa{
				<?php echo $fuckYehaa ?>
			}
		.numberInput{
			width: 50px ;
			color: black;
		}
	</style>
</head>
<body>
	<div id="wraper">
		<h2>Welcome to The Great Number Game</h2>
		<p>I am thinkingNumber of a number betwen 1 and 100.</p>
		<p>Take a guess!</p>
		<hr>
		<form action="#" method="post" class="table">
			<div id="tooLow">
				<?php if (isset($tooLowText)) {
					echo $tooLowText;
				} ?>
			</div>
			<div id="fuckYehaa">
				<?php if (isset($fuckYehaaText)) {
					echo $fuckYehaaText;
					echo "<a href='index.php' class='btn btn-primary'>Play Again</a>";
				}
				else
				{
					echo "<input type='text' class='numberInput' name='guess' maxlength='2'><br>";
					echo "<input class='btn btn-primary' type='submit' value='Submit' >";
				}
				?>
			</div>
			<div id="tooHigh">
				<?php if (isset($tooHighText)) {
					echo $tooHighText;
				} ?>
			</div>
		</form>
	</div>
</body>
</html>
<?php 
	 // $_SESSION = array();
?>
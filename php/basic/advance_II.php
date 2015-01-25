<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		li {
			height: 40px;
			width: 40px;
			display: inline-block;
		}
		ul{
			margin: 0px;
		}
		li:nth-child(odd) {
			background-color: red;
		}
		li:nth-child(even){
			background-color: black;
		}
		#wraper{
			width: 500px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div id="wraper">
<?php for ($i=0; $i < 8; $i++) 
{ ?>
		<ul>
<?php for ($j=0; $j < 8; $j++) 
{ if ($j % 2 == 0 ) 
	{
		echo "red";
	}else
	{
		echo "black";
	}


 ?>
			<li></li>
<?php 
} ?>
		</ul>
<?php 
} ?>
	</div>	
</body>
</html>
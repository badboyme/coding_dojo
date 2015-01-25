<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		td	{
			border: 1px solid black;
			width: 30px;
			height: 30px;
			text-align: center;
		}
		.black {
			background-color: black;
		}
		.red {
			background-color: red;
		}
	</style>
</head>
<body>
	<table>
<?php for ($i=0; $i < 8; $i++) 
{ ?>
		<tr>
<?php for ($j=$i; $j < $i + 8; $j++) 
	  { if ($j % 2 == 0) 
	  	{ ?>
	  		<td class="red"></td>
  <?php }
  		else
  		{ ?>
			<td class="black"></td>		
  <?php } 
  	   } ?>			
		</tr>
<?php } ?>
	</table>
</body>
</html>



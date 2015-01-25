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

		td:nth-child(1)
			{ 
			    background-color: yellow;
			    font-weight: bold;
			    font-size: 20px;
			}
		tr:nth-child(1)
			{ 
				background-color: yellow;
			    font-weight: bold;
			    font-size: 20px;
			}
		tr:nth-child(2n+2)
			{ 
			    background: lightgrey;
			}
	</style>
</head>
<body>
	<table>

		<tr>
<?php for ($i=0; $i <= 10; $i++) 
{ ?>
			<td><?php echo $i; ?></td>
<?php } ?>
		</tr>	
<?php for ($i=1; $i <= 10; $i++) 
{ ?>
		<tr>
			<td><?php echo $i; ?></td>
<?php for ($j=1; $j <= 10; $j++) 
{ ?>
			<td><?php echo $i * $j; ?></td>
<?php } ?>
		</tr>
<?php } ?>
	</table>
</body>
</html>



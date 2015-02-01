<?php 
$rows[] = array('first_name' =>'Michael', 'last_name' =>'Choi', 'nick_name' =>'Sensei');
$rows[] = array('first_name' =>'Esteban', 'last_name' =>'Gallego', 'nick_name' =>'Derby');
$rows[] = array('first_name' =>'Sally', 'last_name' =>'Miremadi', 'nick_name' =>'Sally');


var_dump($rows);
?>

<!DOCTYPE html>
<html>
<head>
	<title>HTML Helper</title>
	<style type="text/css">
	table, td
		{
			border:1px solid black;
			padding: 5px;		
		}
	</style>
</head>
<body>
<table>

	
<?php foreach ($rows as $row) //
{?>	<tr>
		<td><?php echo $row['first_name'] ; ?></td>
		<td><?php echo $row['last_name'] ; ?></td>
		<td><?php echo $row['nick_name'] ; ?></td>
	</tr>
<?php }?>	
	
</table>
</body>
</html>
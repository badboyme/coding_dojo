<!DOCTYPE html>
<html>
<head>
	<title>HTML Table</title>
	<style type="text/css">
	td {
		border:1px solid black;
		padding: 5px;
	}
	table {
		border-collapse: collapse;
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
	</style>
</head>
<body>
<?php 
$users = array(
		array('first_name' => 'Michael', 'last_name' => 'Choi'),
		array('first_name' => 'Jhon', 'last_name' => 'Supsupin'),
		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
		array('first_name' => 'Alan', 'last_name' => 'Tan'),
		array('first_name' => 'Salumeh', 'last_name' => 'Miramadi'),
		array('first_name' => 'Michael', 'last_name' => 'Tonel'),
		array('first_name' => 'Jonathan', 'last_name' => 'Test'),
		array('first_name' => 'Manuel', 'last_name' => 'Zapata'),
		array('first_name' => 'Bubu', 'last_name' => 'Gallego'),
		array('first_name' => 'Pepa', 'last_name' => 'Gallego'),
		array('first_name' => 'Jaime', 'last_name' => 'Zapata'),
		array('first_name' => 'Camila', 'last_name' => 'Test@'),
		array('first_name' => 'Ferney', 'last_name' => 'Gallego')
	);
?>
<table>
	<tr>
		<td>User #</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Full Name</td>
		<td>Full Name Uppercase</td>
		<td>Length</td>		
	</tr>
<?php foreach ($users as $key => $value) 
{ ?> 
	<tr>
		<td><?php echo $key + 1; ?></td>
		<td><?php echo $users[$key]['first_name']; ?></td>
		<td><?php echo $users[$key]['last_name']; ?></td>
		<td><?php echo $users[$key]['first_name'] . ' ' . $users[$key]['last_name']; ?></td>
		<td><?php echo strtoupper($users[$key]['first_name']) . ' ' . strtoupper($users[$key]['last_name']); ?></td>
		<td><?php echo strlen($users[$key]['first_name'] . '' . $users[$key]['last_name']); ?></td>
	</tr>
<?php } ?>
</table>
</body>
</html>
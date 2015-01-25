<?php 
	include('test_connection.php');
	// $new_person_query = "INSERT INTO people (first_name, last_name, people.from, people.to) VALUES ('Salumeh', 'Miremadi', NOW(), NOW())";insert values
	// echo $new_person_query; test insertion
	// die();
	// run_mysql_query($new_person_query); 
	$query = "SELECT * FROM people";
	$people = fetch_all($query);
	// $person = fetch_record($query);
	var_dump($people);
?>
<!DOCTYPE html>
<html>
<head>
<title>Hello MySQL</title>
</head>
<body>
<?php 
	// echo "<h3>{$person['first_name']} {$person['last_name']}</h3>";
	// echo "<hr>";
	foreach ($people as $person) {
		echo "<h3>{$person['first_name']} {$person['last_name']}</h3>";
	}
$password = 'hole';
$encripted_password = md5($password);
echo $encripted_password;


?>

</body>
</html>
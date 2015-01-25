<!DOCTYPE html>
<html>
<head>
	<title>States Array</title>
</head>
<body>
<select>
<?php
	$states = array('CA','WA','VA', 'UT', 'AZ');
	for ($i=0; $i < count($states) ; $i++) 
	{ 
		echo '<option value=' . $states[$i] .'>' . $states[$i] . '</option>';
	}	
?>
</select>
<hr>
<select>
<?php	
	$states = array('CA','WA','VA', 'UT', 'AZ');
	foreach ($states as $key => $value) {
		echo '<option value='. $value .'>' . $value . '</option>';
	}	
?>
</select>
<hr>
<select>
<?php 
	$states = array('CA','WA','VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');
	foreach ($states as $key => $value) {
		echo '<option value='. $value .'>' . $value . '</option>';
	}
?>
</select>
</body>
</html>
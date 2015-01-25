<?php 
$a = [];
for ($i=1; $i < 2000; $i++) { 
	if ($i% 2==1) {
		echo 'Number is: ' . $i . '. This is an odd number' ;
	} else {
		echo 'Number is: ' . $i . '. This is an even number' ;
	}
	echo "<br />";
}
?>
<?php 
	$a = array(1,2,3,10,255);
	$sum_of_the_array = 0;

	for ($i=0; $i < count($a); $i++) 
	{ 
		$sum_of_the_array = $sum_of_the_array + $a[$i];
	}
	echo $sum_of_the_array;
?>
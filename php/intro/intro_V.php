<?php 
function multiply($array, $number)
{
	for ($i=0; $i < count($array); $i++) 
	{ 
	  	$array[$i] = $array[$i] * $number;
	  	var_dump($array);
	  	echo $array[$i] . "<br />";
	}return $array;
	
}

$A = array(2, 4, 10, 16);	
$B = multiply($A , 5);
var_dump($B);
?>

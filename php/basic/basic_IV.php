<?php 

function get_min_and_max($array)
{
	$max = $array[0];
	$min = $array[0];
	foreach ($array as $value) 
	{
		if ($array < $value) 
		{
			$max = $value; 
			// var_dump($array);
		}
		if ($array > $value) 
		{
			 $min = $value;
			// var_dump($array);
		}
	}
	return array("max" => $max, "min" => $min);
}
$arr = array(135, 2.4, 2.67, 1.23, 332,2 ,1.05);
$output = get_min_and_max($arr);
var_dump($output);
?>
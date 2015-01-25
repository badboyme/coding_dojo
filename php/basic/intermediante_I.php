<?php 
// $arr = array(4, 6, 1, 3, 5, 7, 25);

// function draw_stars($array)
// {

// 	foreach ($array as $value) {
// 		echo str_repeat('*', $value);
// 		echo '<hr>';
// 	}
// }
// echo draw_stars($arr);

$x = array(4, "Tom", 1, "Michael", 5, 7,"Jimmy Smith");
function draw_stars($array)
{
	foreach ($array as $value) 
	{
		if (is_numeric($value))
		{
			echo str_repeat('*', $value);
			echo "<hr>";
		}else
		{
			$strings = substr($value, 0, 1);
			$b = strlen($value);
			echo str_repeat($strings, $b);
			echo '<hr>';
		}
		// echo substr($x, 1);
		// echo str_repeat('*', $value);
		// echo '<hr>';
	}
}
echo draw_stars($x);
?>
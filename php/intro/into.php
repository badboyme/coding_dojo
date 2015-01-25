<?php 
	// Creating a function
	function print_array($array)
	{
		echo "There are " . count($array). " Values in the array.  <br />";
		foreach ($array as $value) 
		{
			echo $value . "<br />";
		}

	}
	echo "Creating a function<hr>";
	$samples = array("abc", "def", "ght");
	print_array($samples);
	$samples1 = array(3, 5, 5, 12, 11);
	print_array($samples1);
	echo "<hr>";
	// String Function
	// 1 strlen(string) -get string length
	// 2 strtolower(str) - make string lowercase
	// 3 strtoupper(string) - make string Uppercase
	// 4 ucwords(str) - uppercase each word in the string
	// 5 str_replace(search, replace) - search and replace values in the array
	// 6 stristr(haystack, needle) - find the first occurrence of a string
	// 7 strpos(haystack, needle) - find the position of the first occurrence in a string
	// 8 explode(delimiter, string) - split a string
	// 9 implode(glue, pieces) - join arrays to a string

	$str = "I'm a string with to MAN words!";
	echo "'strlen(string)' The amount of characters in the string above is: " .strlen($str)."<hr>";
	echo "'strtolower(str)' The text above in all lower case looks like: " .strtolower($str). "<hr>";
	echo "'ucwords(str)' Each word uppercase will look like: " .ucwords($str)."<hr>";
	echo "'str_replace(search, replace, subject)' The above string will underscores in place of spaces: " .str_replace(' ', '_' , $str). "<hr>"; 
	echo "'stristr(haystack, needle)' The above string starting with the first occurrence of the word 'with': " . stristr($str, 'with') . "<hr>";
	echo "'strpos(haystack, needle)' The word string start at the index characters " . strpos($srt, 'string') . "<hr>";

	echo "<h2>Array Functions</h2>";
	// array Functions
	// 1 shuffle - shuffles the array
	// 2 sort - sort the array
	// 3 count - count the number of rows in the array
	// 4 explode - breaks string into multiple values in the array
	// 5 implode -joins information in the array

	$ary = explode(' ', $str);
	echo "explode array". '<br>';
	foreach ($ary as $index => $value) {
	  	echo "index:".$index .", value: " .$value. "<br>";
	  }
	// The number of items in this array are: 
	echo "The number of items in this array are: " . count($ary) . "<hr>";
	sort($ary);
	echo "sorted array ". 'br';
	foreach($ary as $index => $value)
	{
		echo "index: " .$index. ", value: " .$value. "<hr>";
	}
	// New string in alphabetical order
	echo "New string in alphabetical order" . implode(' ', '$str') . "<hr>";

	// Functions for numbers
	// 1 is_numeric(var) - returns true or false depending on whether or not the value is a number
	//rand(start, end) -generate random numbers

	// Additional Functions
	// 1 isset(var) - retun true if value is set and null if not
	// 2 empty(var) - return FALCE if var exist and has a non-empty, non-zero value. Otherwise retun TRUE 

	echo "<h2>How to create an array and insert values</h2>";
 	$students = array(
 		array()''


 	); // Create a variable ca

 	

 	// 






?>
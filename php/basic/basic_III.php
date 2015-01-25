<?php 
$head = 0;
$tail = 0;
for ($i=1; $i <= 5000; $i++) 	
	{ 
		$random = rand(0, 1);
		if ($random < 1) 
		{
			$head = $head + 1; 
			echo "<h3>Attempt: # " . $i . " Throwing a coin... It's head! Got " . $head . " head(s) so far and " . $tail . " tail(s) so far</h3>";
		}
		else {
			$tail = $tail + 1;
			echo "<h3>Attempt: # " . $i . " Throwing a coin... It's tail! Got " . $head . " head(s) so far and " . $tail . " tail(s) so far</h3>";
		}
		echo '<hr>';
	}	
echo "Test 'Head' result " . $head;
echo '<hr>';
echo "Test 'Tail' result " . $tail;
?>
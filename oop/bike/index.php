<?php 
class Bike
{
	// properties/attributes
	public $price = '$100';
	public $max_speed = '50mph';
	public $miles = 0;

	public function __construct($u_price, $u_max_speed)
	{
		$this->price = $u_price;
		$this->max_speed = $u_max_speed;
	}	

	function displayInfo() 
	{
		echo "Price: " . $this->price . ' - ';
		echo "Max Speed: " . $this->max_speed . ' - '; 
		echo "Total Miles: " . $this->miles . ' - ';
	}

	function drive()
	{
		echo "Driving:" . $this->miles += 10; 
	}

	function reversing()
	{
		echo "Reversing: " . $this->miles -= 5 ;
		if ($this->miles < 0) {
			$this->miles == 0; //work on this bug later!
		}
	}
} 
	// instances
	$bike1 = new Bike('$200', '25mph');
	$bike2 = new Bike('$350', '45mph');
	$bike3 = new Bike('$500', '55mph');

	//bike 1
	echo $bike1->price.'<br>';
	echo $bike1->max_speed.'<br>';
	echo $bike1->miles.'<br>';
	echo $bike1->drive().'<br>';
	echo $bike1->drive().'<br>';
	echo $bike1->drive().'<br>';
	echo $bike1->reversing(). '<br>';
	echo $bike1->displayInfo().'<br>';	
	echo "<hr>";
	//bike 2
	echo $bike2->price.'<br>';
	echo $bike2->max_speed.'<br>';
	echo $bike2->miles.'<br>';
	echo $bike2->drive().'<br>';
	echo $bike2->drive().'<br>';
	echo $bike2->reversing(). '<br>';
	echo $bike2->reversing(). '<br>';
	echo $bike2->displayInfo().'<br>';
	echo "<hr>";
	//bike 3
	echo $bike3->price.'<br>';
	echo $bike3->max_speed.'<br>';
	echo $bike3->miles.'<br>';
	echo $bike3->displayInfo().'<br>';
	echo $bike3->drive().'<br>';
	echo $bike3->reversing().'<br>';
	echo $bike3->reversing().'<br>';
	echo $bike3->reversing().'<br>';


?>
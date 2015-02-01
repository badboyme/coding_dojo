<?php 
class Bike
{
	// properties/attributes-----------------
	public $price = '$100';
	public $max_speed = '50mph';
	public $miles = 0;

	//constructor ---------------------------
	public function __construct($u_price, $u_max_speed)
	{
		$this->price = $u_price;
		$this->max_speed = $u_max_speed;
	}	
	// methods ------------------------------
	function displayInfo() 
	{	
		echo " Price: " . $this->price . ' - ';
		echo " Max Speed: " . $this->max_speed . ' - '; 
		echo " Total Miles: " . $this->miles;
	}

	function drive()
	{
		echo '<br>Driving: ' . $this->miles += 10;
		return $this; 
	}

	function reversing()
	{
		echo '<br> Reversing: ' . $this->miles -= 5;
		if ($this->miles < 0) 
		{
			$this->miles == 0; //work on this bug later!
		}
		return $this;
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
	echo $bike1->drive()->drive()->drive()->displayInfo();

	echo "<hr>";
	//bike 2
	echo $bike2->price.'<br>';
	echo $bike2->max_speed.'<br>';
	echo $bike2->miles.'<br>';
	echo $bike2->drive()->drive()->reversing()->reversing()->displayInfo();
	echo "<hr>";
	//bike 3
	echo $bike3->price.'<br>';
	echo $bike3->max_speed.'<br>';
	echo $bike3->miles.'<br>';
	echo $bike3->drive()->reversing()->reversing()->reversing()->displayInfo();
?>
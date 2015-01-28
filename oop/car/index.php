<?php 

class Car
{
	//constructor ----------------------
	public function __construct($c_price, $c_speed, $c_fuel, $c_mileage, $c_tax)
	{
		$this->price = $c_price;
		$this->speed = $c_speed;
		$this->fuel = $c_fuel;
		$this->mileage = $c_mileage;
		$this->tax = $c_tax;
	}
	// methods -------------------------
	function DisplayAll()
	{
			echo 'Price: ' . $this->price. '<br>'; 
			echo 'Speed: ' . $this->speed. '<br>'; 
			echo 'Fuel: ' . $this->fuel. '<br>'; 
			echo 'Mileage: ' . $this->mileage. '<br>'; 
			echo $tax = $this->TaxPrice(); 
	}
	function TaxPrice()
	{
		 
		if ($this->price > 10000) 
		{
			echo "Tax: " . $this->tax = 0.15;
			// echo "Tax: " . $this->tax = '15% = $' . $this->price * 0.15;
		}
		else
		{
			echo "Tax: " . $this->tax = 0.12 ;
			// echo "Tax: " . $this->tax = '12% = $' . $this->price * 0.12 ;
		}
	}
	// end methods -------------------------

}

	// instances 
	$car1 = new Car('2000', '35mph', 'Full', '15mpg', '$tax');
	$car2 = new Car('2000', '5mph', 'Not Full', '105mpg', '$tax');
	$car3 = new Car('2000', '15mph', 'Kind of Full', '95mpg', '$tax');
	$car4 = new Car('2000', '25mph', 'Full', '25mpg', '$tax');
	$car4 = new Car('2000', '25mph', 'Full', '25mpg', '$tax');
	$car5 = new Car('2000', '45mph', 'Emty', '25mpg', '$tax');
	$car6 = new Car('20000000', '15mph', 'Emty', '25mpg', '$tax');

	// echo
	echo $car1->DisplayAll().'<hr>';
	echo $car2->DisplayAll().'<hr>';
	echo $car3->DisplayAll().'<hr>';
	echo $car4->DisplayAll().'<hr>';
	echo $car5->DisplayAll().'<hr>';
	echo $car6->DisplayAll().'<hr>';

?>
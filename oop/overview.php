<h2>Object Oriented Programing Overview</h2>

Objects and Classes<br>
Class Structure<br>
Instantiation<br>
Properties<br>
Methods<br>
Construct<br>

<?php 
echo "<hr>";
// Class Structure ---------------------------------------------
class MyFirstClass
{
	 //class methods and properties go here
	public $my_property = 'text on my property';

}

	// instantiation
$obj = new MyFirstClass();
echo $obj->my_property.'<br />';
$obj->my_property = 'changed the value of my_property';
echo $obj->my_property.'<br>';
echo $obj->my_property.'<br>';

echo "<hr>";

$obj2 = new MyFirstClass();
echo $obj2->my_property.'<br>';
$obj2->my_property = 'changed the value of my_property of ob 2';
echo $obj2->my_property.'<br>';

echo "<hr>";
// methods -----------------------------------------------------
class MySecondClass
{
	public $my_property = 'default value';

	public function get_my_property() //method
	{
		return $this->print_hello().' '.$this->my_property;
	}

	public function set_my_property($value)
	{
		$this->my_property = $value;
	}

	public function print_hello()
	{
		return 'hello';
	}
}
$obj3 = new MySecondClass();
echo $obj3->get_my_property().'<br>';
echo "<hr>";
$obj4 = new MySecondClass();
echo $obj4->get_my_property().'<br>';
$obj4->set_my_property('obj 4 property value');
echo $obj4->get_my_property().'<br>';

echo "<hr>";

$obj5 = new MySecondClass();
echo $obj5->get_my_property(). '<br>';
$obj5->set_my_property('obj 5 property value');
echo $obj5->get_my_property().'<br>';

// constructor function ---------------------------------------
echo "<hr>";

class Person
{
	public $first_name;
	public $last_name;

	public function __construct($first_name_p, $last_name_p)
	{
		$this->first_name = $first_name_p;
		$this->last_name = $last_name_p;
	}
}

$new_person = new Person('John', 'Doe');
var_dump($new_person);
echo "<br>";
$new_person1 = new Person('John', 'Doe');
var_dump($new_person1);







?>
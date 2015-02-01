<h2>Object Oriented Programing Overview</h2>
<b>Basic</b>
	<ol>
	<li>Objects and Classes</li>
	<li>Class Structure</li>
	<li>Instantiation</li>
	<li>Properties</li>
	<li>Methods</li>
	<li>Construct</li>
</ol>
<b>Advance</b>
<ol>
	<li>Procedural vs OOP</li>
	<li>Inheritance</li>
	<li>Overwriting</li>
	<li>Preserving</li>
	<li>Visibility</li>
		<ul>
			<li>Protected</li>
			<li>Private</li>
		</ul>
</ol>
<b>Inheritance</b>
<p>Extending an existing class.</p>
<b>Overwriting</b>
<p>create a property or method that takes place of existing one in the parent class you would like to overwrite.</p>
<b>Preserving</b>
<p><strong>scope resolution operator</strong> = parent::__construct(instance) this call the parent__contruct() method. </p>

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


// inheritance =  extending an existing class
echo "<hr>";
echo "<h2>Advance</h2>";

class MyFirstClassAdvance
{
	public $property1 = "i'm the first property! wohooo";
	public function __construct($instance)
	{
		echo "I'm getting called for the object: " .$instance;
	}
	public function set_property1()
	{
		$this->property1 = $property1();
	}
	public function get_property1()
	{
		return $this->property1;
	}
}

/**
* extension ------------------------------ 
*/
class MyOtherClass extends MyFirstClassAdvance
{
	
	public function new_method()
	{
		echo "NEW METHOD inside extended class";
	}
}
// this call the __construct() method in MyFirstClassAdvance so we have to pass in a value.

$obj = new MyotherClass('instance of child class = MY OTHERCLASS -');
$obj->new_method(); // we can call methods within our own class.
$obj->get_property1(); // as well as call methods in our parent class.
echo "<hr>";
echo "<h2>Overwriting</h2>";



?>
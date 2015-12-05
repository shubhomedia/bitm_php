<!DOCTYPE html>
<!--
    MD.Owes Quruny Shubho
    http://shubho.info
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            class Student{
	public $name = "Piash";
	public $age = 70;
	
	public function __construct($name="Piash"){
		$this->name = $name;
		// If no parameter passed, default property will be used
		echo "I'm constructing $this->name<br>";
	}
	
	public function sayHello(){
		echo 'Hello, '.$this->name;
	}
}
/* Taking instances of Student class */
	$peter = new Student("Peter"); // #1 Prepare object from the class
	// Setter
	//$peter->name = "Peter"; // assign value to name property (before object creation)
	
	$hossain = new Student("Hossain");	// #2 Prepare object from the class
	// Setter
	//$hossain->name = "Hossain"; // assign value to name property (before object creation)
	
	$shubho = new Student("Shubho"); // #3 Prepare object from the class
	// Setter
	$shubho->name = "Shubho"; // assign value to name property (before object creation)
	
	$default = new Student; // #3 Prepare object from the class 
/***************************************/
	
	echo '<pre>';
	var_dump($peter, $hossain, $shubho);	
	echo '</pre>';
	
	echo '<hr/>';
	echo $peter->sayHello(); // access "name" property (getter)
	echo '<hr/>';
	echo $hossain->sayHello(); // access "name" property (getter)
	echo '<hr/>';
	echo $shubho->sayHello(); // access "name" property (getter)
	echo '<hr/>';
	echo $default->sayHello(); // access default "name" property (getter)
	echo '<hr/>';
        ?>
    </body>
</html>

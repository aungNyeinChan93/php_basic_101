<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("",1);


/*
Compile time is the period when the programming code (such as C#, Java, C, Python) is converted to the machine code (i.e. binary code). 
Runtime is the period of time when a program is running and generally occurs after compile time.
*/
// define method 
define ("MYNAME","Aung Nyein Chan");  //compile time 
const myName = "ANC"; // const is runtime 
class Dog {
    public static $price ;
    public $name;
    public $age;
    public function __construct(string $name,int $age) {
        $this->age = $age;
        $this->name = $name;
    }
    const PI_Value = 3.14;



}
$dog = new Dog("aung net ",10);


Dog::$price = "10$"; 

echo Dog::$price ;
print "<br>";
echo "pi value is ". Dog::PI_Value;
print "<br>";
echo $dog->name ;
echo "<br>";
echo MYNAME;



class myConst {
    const sun = "Raise from east";
    public function callClass ():void{
        echo "<br> this is class: ". __CLASS__ . "|| this is line: " . __LINE__ . "|| this is method: " . __METHOD__;
    }
};

$myConstOne  = new myConst();
echo $myConstOne->callClass();  
echo "<br>";
var_dump($myConstOne);



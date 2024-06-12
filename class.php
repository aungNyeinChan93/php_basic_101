<?php

/* 
    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class
*/

class Animal
{   
    public $name;
    public $age;
    const PI_Value = 3.14;

    public static $sayGrreting = "hello world...";

    public function callPI (){
        return self::PI_Value;
    }
    public $food =array("meal","bone","vegetable","animal_Snack") ;

   
    protected $bithdate = "nov-11" ; # cant access to use and can't extends ,only use static
    public function __construct(string $name, int $age )
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName(): void
    {
        echo "Animal name is $this->name";
    }
    public function run()
    {
        echo "$this->name is running ";
    }
    public function __destruct (){
        echo "running magic fun /destruct";
    }
}

$dog = new Animal("bokyar",10);
$dog2 = new Animal ("gigi",8);


unset( $dog2 );
echo "<br>";
echo "Dog name is ". $dog->name ."<br>";
$dog->run();
echo "<br>";
$dog->getName();
echo "<br>";
echo Animal::PI_Value;
echo  "<br>";
echo Animal::$sayGrreting;

 foreach($dog->food as $food) {
    echo $food . "<br>";
}

echo "<br>";

$pi_val = $dog->callPI();
echo  "pi value is " . $pi_val;
echo "<br>";




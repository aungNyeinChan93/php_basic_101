<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("", 1);

class Dog
{
    public $name;
    public $color;
    public $age;
    public $myData = [];
    public function __construct(string $name, string $color, int $age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;

    }
    public function __toString()
    {
        return "className is: " . __CLASS__ . "<br>"
            . "Name: " . $this->name . "<br> Color: " . $this->color . "<br>Age:  $this->age";
    }
    public function __set($key, $value)
    {
        $this->myData[$key] = $value;
    }
    public function __get($key)
    {
        return $this->myData[$key];
    }
    public function __isset($key)
    {
        return isset($this->myData[$key]);
    }
    public function __unset($key)
    {
        unset($this->myData[$key]);
    }

}
$dogOne = new Dog("bobo", "dark", 10);
echo gettype($dogOne->name);
echo "<br>";
echo $dogOne->color;
echo "<br>";
echo $dogOne->__toString();  //__toString() method;
echo "<br>";
echo gettype($dogOne->__toString());  // >> string
echo "<br>";

echo "<br>";
echo $dogOne;   //__toString() method;
echo "<br>";
echo gettype($dogOne);  //>>obj
echo "<br>";


$dogOne->test = "test";
echo "<br>";
// echo $dogOne->test;
echo "<br>";

//isset()
if (isset($dogOne->test)) {
    echo "$dogOne->test";
} else {
    echo "Not Found";
}
echo "<br>";
unset($dogOne->test);
echo "<br>";
if (isset($dogOne->test)) {
    echo "$dogOne->test";
} else {
    echo "Not Found";
}
echo "<br>";
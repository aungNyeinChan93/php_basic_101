<?php 

declare(strict_types= 1);
error_reporting(E_ALL); 
ini_set("",1);

interface AnimalInterface {
   public function callName();
   public function eat();
};
interface DogInterface {
    public function run();
}
interface CatInterface {
    public function jump();
}


class Dog implements AnimalInterface , DogInterface {
    public $name;
    public function callName() {
        echo "Dog name is $this->name ";
    }
    public function eat() {
        echo "$this->name is eating fish";
    }
    public function run() {
        echo "$this->name is running ";
    }

    public function __construct(string $name) {
        $this->name = $name;
    }
    public function bark() {
        echo "  $this->name  wokwok";
    }
};

class Cat implements AnimalInterface , CatInterface {
    public $name;
    public function __construct(string $name) {
     $this->name = $name;
    }
    public function callName() {
        echo "Cat name is $this->name ";
    }
    public function eat() { 
        echo "$this->name is eating ";
    }
    public function jump() { 
        echo "$this->name is jumping ";
    }
}

$dog1 = new Dog("bobo");
$cat1 = new Cat("Kitty");

echo $dog1->name;
print "<br>";
// echo $dog1->bark();
echo "<br>";
echo $dog1->callName();
echo "<br>";
echo $dog1->eat();
echo "<br>";
echo $dog1->run();

// 

echo "<br>";
echo $cat1->name;
print "<br>";
echo $cat1->eat();
print "<br>";

echo $cat1->jump();
print "<br>";

echo $cat1->callName();





<?php
declare(strict_types=1);
error_reporting(E_ALL); 
ini_set("", 1);


define("DD", realpath("."));
var_dump(DD);
require DD . "/autoLoad.php"; // error>> 


require DD . "/contract/Animalinterface.php";
require DD . "/contract/Doginterface.php";
require DD . "/contract/Catinterface.php";
require DD . "/template/Animal.php";
require DD . "/template/Dog.php";
require DD . "/template/Cat.php";
// die("");

echo "<br>";
$dog = new Dog();
$cat = new Cat();

$dog->eat();
$dog->sleep();
$dog->play();
$cat->jump();
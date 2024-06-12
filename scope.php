<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("", 1);

class Cat
{
    public $name; #
    protected $clwas; # protected property
    private $foods; # private property
    public function __construct(string $name, bool $clwas, array $foods)
    {
        $this->name = $name;
        $this->clwas = $clwas;
        $this->foods = $foods;
    }
    public function getName(): void
    {
        echo "$this->name eat the fish ";
    }
    public function testClaws()
    {
        if ($this->clwas == true) {
            echo "$this->name is claws open ";
        } else {
            echo "$this->name is claws close";
        }
    }
    public function get_Foods()
    {
        var_dump($this->foods);
    }

}
;


class Kitty extends Cat
{
    public function __construct(string $name, bool $clwas, array $foods)
    {
        parent::__construct($name, $clwas, $foods);
    }
    public function sayName()
    {
        echo "Mewo meow this mean I am  $this->name";
        var_dump($this->clwas);     // protected can be call inside of the extends class
        // var_dump( $this->foods ); // can not call private property & method 
    }
}

$cat = new Cat("chit paing", false, ["fish", "cat-food", "vegetable"]);
$cat2 = new Cat("shwe war", true, ["fish", "cat-food", "vegetable"]);
$cat3 = new Cat("phyu ma", true, ["fish", "cat-food", "vegetable"]);
$kitty1 = new Kitty("kitty ", true, ["fish", "cat-food", "fruits"]);

echo $cat->name;
echo "<br>";
$cat->getName();
echo "<br>";
// var_dump($cat);
echo "<br>";
// $cat->foods;
echo "<br>";
echo $cat->testClaws();
echo "<br>";
echo $cat2->testClaws();
echo "<br>";
echo $cat->get_Foods();
echo "<br>";

echo "$kitty1->name";
print "<br>";
echo $kitty1->sayName();
print "<br>";













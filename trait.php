<?php 


declare(strict_types=1);
error_reporting(E_ALL);
ini_set("", 1);

// Interface 
interface AnimalInterface {
    public function eat();
    public function sleep();
}
interface BirdInterface {
    public function sing ();
}

abstract class Animal implements AnimalInterface{
    public $name;
    public function eat(){
        echo "Eatting ";
    }
    public function sleep(){
        echo "Sleeping ";
    }
    public function __construct(string $name){
        $this->name = $name;
    }

}

class Bird extends Animal implements BirdInterface {
    public function __construct(string $name){
        parent::__construct($name);
    }
    public function sing(){
        echo  "$this->name is singing";
    }
    use PhysicalAttack,SkillAttck;
}


// trait >> used for share method ;
// note >> dont run magic method;
trait PhysicalAttack{
    public $test= "helloworld";
    public function normalAtt(){
        echo "Normal attcking ";
    }
    public function one_hit(){
        echo "one hit .. . "; 
    }
    public function two_swword(){
        echo "two sword attck... ";
    }
}
trait SkillAttck{
    public function skillOne(){
        echo " use skill one ";
    }
    public function skillTwo(){
        echo " use skill two ";
    }
    public function ultimate(){
        echo " use skill ultimate ";
    }
}



$bird1 = new Bird("gigi");

echo $bird1->eat(); 
echo "<br>";
echo $bird1->sleep(); 
echo "<br>";
echo $bird1->sing() ;
echo "<br>";
$bird1->skillOne();
$bird1->skillTwo();
$bird1->ultimate();

echo "<br>";
echo " $bird1->test";
echo "<br>";

echo  $bird1->normalAtt() ;
 $bird1->one_hit() ;
echo  $bird1->two_swword() ;




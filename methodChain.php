<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("",1);


// method changing -> -> ->
class Programmer {
    public $name;
    public $hour;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function eat (string ...$foods):Programmer {
        $this->hour += 2;
        $responce = __CLASS__ ." is eating ";
        foreach ($foods as $food) {
            $responce .= $food ." ";
        };
        echo $responce ."<br>";
        return $this;
    }
    public function sleep ():Programmer {
        $this->hour += 2;
        echo "<br>". __CLASS__ ."is sleeping <br>";
        return $this;
    }
    public function code ():Programmer {
        $this->hour += 10;

        echo "<br>". __CLASS__ ."is coding <br>";
        return $this;
    }
    public function repeat ():Programmer {
        $this->hour += 2;

        echo "<br>". __CLASS__ ."is repeat <br>";
        return $this;
    }
};

$ProgrammerOne = new Programmer("aungaung");

$ProgrammerOne->eat("food","food2");
$ProgrammerOne->sleep()->code()->repeat()->eat("banana");  //method changing


echo  $ProgrammerOne->hour ." hours";


class MixedJuice {
    public function addWater (int $liter) :MixedJuice{
        echo "add water $liter ml -> " ;
        return $this;
    }
    
    public function addFlavour (string $flavour ,int $liter) :MixedJuice{
        echo "add $flavour flavour $liter ml -> ";
        return $this;
    }
    public function addIce (int $amount) :MixedJuice{
        echo "add Ice $amount -> " ;
        echo "gottacha !" ;
        return $this;
    }
};

$appleJuice = new MixedJuice();
$orangeJuice = new MixedJuice();

echo "<br>";
$appleJuice->addWater(10)->addFlavour("apple",2)->addIce(3);
echo "<br>";
$orangeJuice->addWater(10)->addFlavour("orange",2)->addIce(3);




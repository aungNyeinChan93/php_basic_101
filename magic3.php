<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("",1);

// invoke ,clone , 

class School {
    public $name;
    public $location;
    public $subject;
    public $language = array("Java","JS","python","php","ruby");
    public function __construct(string $name, string $location , string $subject) {
        $this->name = $name;
        $this->location = $location;
        $this->subject = $subject;
    }
    public function __invoke(string $greet , string $greet2) {
        echo "<br>". $greet ."<br>";
        echo "<br>". $greet2 ."<br>";
    }
    public function __clone (){
        $this->name = "";   //clone method use for reset the class
    }
    public function __debugInfo () {
        return [
            "debugInfo_name"=> $this->name,
            "debugInfo_location"=> $this->location,
            "debugInfo_address"=> $this->subject
        ];
    }
}

$school = new School("ABC","YGN","Programming");

echo  $school->name ."<br>";

$school->__invoke("Hello how are u?" ,"hey!");
$school("Look great!","what up?");

$cloneObj = clone $school;
echo "<br>". $cloneObj->name ."<br>";

var_dump($school);


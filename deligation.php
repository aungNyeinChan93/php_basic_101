<?php 
declare(strict_types= 1);   
error_reporting(E_ALL);
ini_set("",1);

interface CEOinterface {
    public function callMeeting();
}
interface GMinterface {
    public function giveSalary();
}
interface PMinterface{
    public function runApplication();
}


class CEO implements CEOinterface {
   
    public function callMeeting(){
        echo __Class__ ." call meeting ...";
    }
};

class GM implements GMinterface {
    public function giveSalary(){
        echo __Class__ . " Give salary...";
    }
};
class PM  implements PMinterface{
    public $ceo ;
    public $gm;
    public function __construct(CEOinterface $ceo, GMinterface $gm) {
        //deligation injection || dependencie injection ||interface injection 
        $this->ceo = $ceo;
        $this->gm = $gm;
    }
    public function runApplication(){
        echo __Class__ ." run application ... ";
    }
}

$CEO = new CEO();
$GM = new GM();
$PM = new PM($CEO,$GM);

echo "<br>".$PM->ceo->callMeeting() ."<br>";
echo "<br>".$PM->gm->giveSalary() ."<br>";
echo "<br>".$PM->runApplication() ."<br>";


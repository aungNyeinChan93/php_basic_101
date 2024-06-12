
<?php

define("PI", "3.14");
$title = "php is backend development language";
$title2 = "java is backend development language";
$name = "Chan";

// stdClass 
$obj1 = new stdClass();
$obj1->title = $title;
$obj1->name = $name;
$obj1->age = 30;

$obj2 = new stdClass();
$obj2->title = $title2;
$obj2->email = "asdfasdf€@gamil.com";

// and && or ||
$boo ="boo";
$phoo = "phoo";


$customerOne = new StdClass();
$customerOne->name = "chan";
$customerOne->age = 30;
$customerOne->email = "chan@gmial.com";
$customerOne->phone = "094545454";
$customerOne->location = new stdClass();
$customerOne->location->city = "YGN";
$customerOne->location->state = "Thuwunna";

require "index.view.php";

?>
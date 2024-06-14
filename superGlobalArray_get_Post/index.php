<?php 

declare(strict_types= 1);   
error_reporting(E_ALL);
ini_set("",1);

echo "<br> hello world<br>";

// super global array
var_dump($GLOBALS);  
//array(4) { ["_GET"]=> array(0) { } ["_POST"]=> array(0) { } ["_COOKIE"]=> array(0) { } ["_FILES"]=> array(0) { } }


var_dump($_GET);
echo "<br>";

echo "<br>";
var_dump($_GET["test1"]);
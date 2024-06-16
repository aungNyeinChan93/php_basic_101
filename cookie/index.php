<?php 
declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("dispaly_error",1);

echo "<br><h1> read cookies </h1><br>";
// define("DD",realpath("."));
// echo DD;

echo "<br>";
var_dump($_COOKIE);

if (isset($_COOKIE["test"])) {
    echo $_COOKIE ["test"];
}else{
    echo "cookie not found!";
};


// require DD . "/write.php";




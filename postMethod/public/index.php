<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("display_error",1);

DEFINE("DD", realpath("../"));
// echo DD;

var_dump($_POST );
echo ":Post <br><br>";

ob_start();                 //output buffering
echo "<br> output buffering ob_start() <br>";

require DD . "/template/mian.php";

$html = ob_get_clean();     // clean output 


if(!empty($_POST) || !empty($_GET)){
    var_dump($_POST);   
    var_dump($_GET);
}else{
    echo $html;                 //calling output
};





<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("",1);

define("DD",realpath("."));
var_dump(DD);

require DD . "/vendor/autoload.php";

// require DD . "/ANC/src/App/Application.php";
// require DD . "/ANC/src/Foo/Application.php";
// require DD . "/ANC/src/Moo/Application.php";

use CCC\App\Application as ANC_App;
use CCC\Foo\Application as ANC_Foo;
use CCC\Moo\Application ;

$app = new ANC_App();
$Foo = new ANC_Foo();
// $app = new Moo_App();
$moo = new CCC\Moo\Application();

dump($app );

// dump($Foo ,true);
// dump($moo ,false);

echo "<br>";
$myView = new View();
echo "<br>";
$myView2 = new View();

$model = new ModelONe();



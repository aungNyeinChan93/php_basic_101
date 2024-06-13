<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("", 1);

echo "hello world";

$foo = "bar";
$anonymous = function () use ($foo): string {
    return "<br> Anoymonus function $foo <br> ";
};

$anonymous = function (): string {
    return "<br> Anoymonus function <br> ";

};

$test = $anonymous();
echo $test;

class Test
{
    public function __invoke(string $name): string
    {
        return "I am anonymous function from call anonymous $name";
    }
}
;

$arrowFunction = fn(string $name): string => "<br>I am arrow function $name $foo <br>";

$test1 = new Test();
echo $test1("test");

echo $arrowFunction("arrowTest");

$numbers = ["12", '123', "343", "4", "246", "5","10"];
$multiply_five = array_filter($numbers, fn($number) => $number % 5 === 0);
print_r($multiply_five);

foreach ($multiply_five as $key=> $number)     {  
    echo "<br>$number<br>";
    echo "<br>$multiply_five[$key]<br>";
} 



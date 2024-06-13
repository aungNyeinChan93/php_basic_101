<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("",1);

echo    "hello world";

$foo = "bar";
$anonymous = function () use($foo) :string{
    return "<br> Anoymonus function $foo <br> ";
};

$anonymous = function ():string{
    return "<br> Anoymonus function <br> ";

};

$test = $anonymous();
echo $test;

class Test {
    public function __invoke(string $name): string{
        return "I am anonymous function from call anonymous $name";
    }
};

$test1 = new Test();
echo $test1("test");





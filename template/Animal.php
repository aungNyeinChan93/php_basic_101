<?php 

abstract class Animal implements AnimalInterface{
    public function eat():void{
        echo "Eating ... <br>";
    }
    public function sleep() :void{
        echo "Zzz... <br>";
    }
}   
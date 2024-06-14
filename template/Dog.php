<?php 

class Dog extends Animal implements DogInterface{
    public function play() :void{
        echo "playing ...<br>";
    }
}
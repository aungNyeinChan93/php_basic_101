<?php 


class Cat extends Animal implements CatInterface{
    public function jump() :void{
        echo "jumping ...<br>";
    }
}

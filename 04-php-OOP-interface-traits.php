<?php

interface Animal{
    public function makeSound();
}

class Cat implements Animal{
    public function makeSound(){
        echo 'rawr';
    }
    use message1;
}

class Dog implements Animal{
    public function makeSound(){
        echo 'woef';
    }
}

trait message1{
    public function msg1(){
        echo "beware human, I am your master!";
    }
}

$animal = new Cat();
$animal->makeSound();
$animal->msg1();

?>
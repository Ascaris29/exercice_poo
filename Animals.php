<?php

declare(strict_types=1);

class Animals{

    public $typeOfCry;
    public $typeOfDeplacement;
    public $typeOfAlimentation;
    public $gender;

    public function Gender($gender){
        if(gender === 1){

        }
    }
    public function cry(){
        echo "";
    }

    public function eat(){
        echo "";
    }   

    public function moving(){
        echo"";
    }
}

class Cat extends Animals{

    public $typeOfCry = "miaou";
    public $typeOfDeplacement ="walk";
    public $typeOfAlimentation = "carnivorous";
    public $name;
    public $color;


    public function cry(){
        echo $this->typeOfCry;
    }
    public function eat(){
        echo $this->typeOfAlimentation;
    }

}

class Dog extends Animals{

    public $typeOfCry = "waf";
    public $typeOfDeplacement ="walk";
    public $typeOfAlimentation = "carnivorous";
    public $name;
    public $color;

    public function cry(){
        echo $this->typeOfCry;
    }
    public function eat(){
        echo $this->typeOfAlimentation;
    }

}

$minette = new Cat;
$minette->cry;
$minette->name = "minette";

var_dump($minette);
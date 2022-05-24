<?php

declare(strict_types=1);

class Animals{

    public $typeOfCry;
    public $typeOfDeplacement;
    public $typeOfAlimentation;
    public $gender;

    public function getGender($gender){
        if($gender === 1){
            echo "His gender is male !";
        }else if($gender === 2){
            echo "His gender is female !";
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
        echo 'This cat does ' . $this->typeOfCry . '!';
    }
    public function eat(){
        echo 'The cats is ' . $this->typeOfAlimentation . '!';
    }

}

class Dog extends Animals{

    public $typeOfCry = "waf";
    public $typeOfDeplacement ="walk";
    public $typeOfAlimentation = "carnivorous";
    public $name;
    public $color;

    public function cry(){
        echo 'This dog does ' . $this->typeOfCry . '!';
    }
    public function eat(){
        echo 'The dogs is ' . $this->typeOfAlimentation . '!';
    }

}

$minette = new Cat;
$minette->cry();
$minette->eat();
$minetteGender = $minette->getGender(2);
$minette->name = "minette";
$minette->color = "brown";
$minette->gender=$minetteGender;

$dingo = new Dog;
$dingo->cry();
$dingo->eat();
$dingoGender = $dingo->getGender(1);
$dingo->name="Dingo";
$dingo->color="black";
$dingo->gender = $dingoGender;

var_dump($minette);
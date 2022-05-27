<?php

namespace models;


class Dog extends Animals{

public $typeOfCry = "waf";
public $typeOfDeplacement ="walk";
public $typeOfAlimentation = "carnivorous";
public $name;
public $color;

/*function __construct ($gender){
    $this->gender = $gender;
}*/
public function cry(){
    echo 'This dog does ' . $this->typeOfCry . '!<br>';
}
public function eat(){
    echo 'The dogs is ' . $this->typeOfAlimentation . '!<br>';
}

}
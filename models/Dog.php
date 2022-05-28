<?php

namespace models;
require_once('Mamal.php');

class Dog extends Mamal{

public $typeOfCry = "waf";
public $typeOfDeplacement ="walk";
public $typeOfAlimentation = "carnivorous";
public $name;
public $color;


public function displayName(){ 

    echo $this->name ."\r" ;

}


}
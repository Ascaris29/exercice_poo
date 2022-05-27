<?php

namespace models;

require_once('Animals.php');
require_once('FlyingAnimals.php');

abstract class Bird extends Animals implements FlyingAnimals{

    public function __construct($typeOfCry, $typeOfDeplacement, $typeOfAlimentation,$gender){
        parent::__construct($gender);
        $this->typeOfCry =$typeOfCry;
        $this->typeOfAlimentation =$typeOfAlimentation;
        $this->typeOfDeplacement =$typeOfDeplacement;
}  
    abstract public function eat();
    abstract public function fly();

}


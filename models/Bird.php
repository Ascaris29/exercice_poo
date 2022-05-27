<?php

namespace models;

require_once('Animals.php');
require_once('flyingAnimals.php');

abstract class bird extends Animals implements flyingAnimals{

    public function __construct($typeOfCry, $typeOfDeplacement, $typeOfAlimentation,$gender){
        parent::__construct($gender);
        $this->typeOfCry =$typeOfCry;
        $this->typeOfAlimentation =$typeOfAlimentation;
        $this->typeOfDeplacement =$typeOfDeplacement;
}  
    abstract public function eat();
    abstract public function fly();

}


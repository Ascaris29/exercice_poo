<?php 


require('Animals.php');

class Cat extends Animals{

    public $typeOfCry = "miaou";
    public $typeOfDeplacement ="walk";
    public $typeOfAlimentation = "carnivorous";
    public $name;
    public $color;


    public function cry(){
        echo 'This cat does ' . $this->typeOfCry . '!<br>';
    }
    public function eat(){
        echo 'The cats is ' . $this->typeOfAlimentation . '!<br>';
    }

    public function fly(){
        echo 'Miaou, je vole !';
    }
    

}
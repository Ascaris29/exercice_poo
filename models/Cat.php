<?php 

namespace models;

include_once __DIR__ . "/Animals.php";


class Cat extends Animals{

   
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
<?php

namespace models;
require_once('Reptile.php');

 class Lizard extends Reptile{

    public $name;

    public function __construct($name){
        parent::__construct("Psssiiiii", "Carnivorous", "Slith", rand(1,2), "Lizard");
        $this->name = $name;
    }


    public function displayName(){ 

        echo $this->name ."\r" ;

    }
    



}
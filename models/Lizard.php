<?php

namespace models;
require_once('Reptile.php');

 class Lizard extends Reptile{

    public $name;

    public function __construct($name){
        parent::__construct("psssiiiii", "carnivorous", "slith", rand(1,2), "lizard");
        $this->name = $name;
    }


    public function displayName(){ 

        echo $this->name ."\r" ;

    }
    



}
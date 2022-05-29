<?php 

namespace models;

require_once('Mamal.php');


 class Cat extends Mamal{

    public $name;
    
    public function __construct($name){
        parent::__construct("Miaou", "Carnivorous", "Walk", rand(1,2), "Cat");
        $this->name = $name;
    }

    public function displayName(){ 

        echo $this->name ."\r" ;

    }
}


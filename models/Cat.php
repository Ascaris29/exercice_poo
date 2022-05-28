<?php 

namespace models;

require_once('Mamal.php');


 class Cat extends Mamal{

    public $name;
    

    public function displayName(){ 

        echo $this->name ."\r" ;

    }
}


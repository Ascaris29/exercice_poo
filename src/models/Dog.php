<?php

namespace App\Models;

class Dog extends Mamal{

public $name;

public function __construct($name){
    parent::__construct("Wouuaf", "Carnivorous", "Walk", rand(1,2), "Dog");
    $this->name = $name;
}


public function displayName(){ 

    echo $this->name ."\r" ;

}


}
<?php

namespace App\Models;

use App\Models\Category;



class Dog extends Mamal{

public $name;
public $imageAnimal;

public function __construct($name, $imageAnimal, Category $category){
    parent::__construct("Wouuaf", "Carnivorous", "Walk", rand(1,2), $category);
    $this->name = $name;
    $this->imageAnimal = $imageAnimal;
}


public function displayName(){ 

    echo $this->name ."\r" ;

}

public function displayImage(){
    echo $this->imageAnimal;
}


}
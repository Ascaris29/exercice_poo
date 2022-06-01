<?php 

namespace App\Models;


 class Cat extends Mamal{

    public $name;
    public $imageAnimal;
    
    public function __construct($name, $imageAnimal){
        parent::__construct("Miaou", "Carnivorous", "Walk", rand(1,2), "Cat");
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


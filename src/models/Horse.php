<?php 

namespace App\Models;


 class Horse extends Mamal{

    public $name;
    public $imageAnimal;
    
    public function __construct($name, $imageAnimal, Category $category){
        parent::__construct("Huhuhu", "Herbivore", "Walk", rand(1,2), $category );
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


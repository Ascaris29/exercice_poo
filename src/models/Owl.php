<?php 

namespace App\Models;


 class Owl extends Bird{

    public $name;
    public $imageAnimal;
    
    public function __construct($name, $imageAnimal, Category $category){
        parent::__construct("HouHou !", "Carnivorous", "Fly", rand(1,2), $category);
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
<?php 

namespace App\Models;


 class Krokodil extends Reptile{

    public $name;
    public $imageAnimal;

    public function __construct($name, $imageAnimal, Category $category){
        parent::__construct("GRRRRR ! ", "Carnivorous", "slith", rand(1,2), $category);
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
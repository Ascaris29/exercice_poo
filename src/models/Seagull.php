<?php 

namespace App\Models;


 class Seagull extends Bird{

    public $name;
    public $imageAnimal;
    
    public function __construct($name, $imageAnimal){
        parent::__construct("Kikiki", "Omnivorous", "fly", rand(1,2), "Seagull");
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
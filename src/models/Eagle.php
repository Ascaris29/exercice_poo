<?php 

namespace App\Models;


class Eagle extends Bird{

    public $name;

    public function __construct($name){
        parent::__construct("Kiiiii", "Carnivorous", "Fly", rand(1,2), "Eagle");
        $this->name = $name;
    }

    public function displayName(){ 

        echo $this->name ."\r" ;

    }
    

}


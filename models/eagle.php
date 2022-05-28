<?php 

namespace models;

require_once('Bird.php');



class Eagle extends Bird{

    public $name;

    public function __construct($name){
        parent::__construct("kiiiii", "carnivorous", "fly", rand(1,2), "eagle");
        $this->name = $name;
    }

    public function displayName(){ 

        echo $this->name ."\r" ;

    }
    

}


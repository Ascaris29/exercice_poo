<?php 

namespace models;

require_once('bird.php');



class eagle extends bird{

    public $name;
    public $color;

    public function __construct($name, $color){
        parent::__construct("kiiii", "fly", "carnivorous", rand(1,2));
        $this->name = $name;
        $this->color = $color;
    }

    public function eat(){
        echo " This eagle is $this->typeOfAlimentation !<br>";
    }

    public function fly(){
        echo "This animal fly ! <br>";
    }

}


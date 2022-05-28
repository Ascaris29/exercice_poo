<?php 

namespace models;
require_once('Animals.php');
require_once('SlitheringAnimals.php');

abstract class Reptile extends Animals implements SlitheringAnimals{

   

    public function slither(){
        echo "This animal slith";
    }
    
}
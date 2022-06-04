<?php 

namespace App\Models;


abstract class Reptile extends Animals implements SlitheringAnimals{

 
   

    public function slither(){
        echo "This animal slith";
    }
    
}
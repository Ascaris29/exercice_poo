<?php

namespace models;

require_once('Animals.php');
require_once('FlyingAnimals.php');

class Bird extends Animals implements FlyingAnimals{

    public function fly(){
        echo 'This animal fly ! <br>';
    }

}


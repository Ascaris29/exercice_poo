<?php

namespace models;

require_once('Animals.php');
require_once('WalkingAnimal.php');

class Mamal extends Animals implements walkingAnimal{

    public function walking()
    {
        
    }

}


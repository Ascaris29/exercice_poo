<?php

namespace App\Models;


class Bird extends Animals implements FlyingAnimals{

    public function fly(){
        echo 'This animal fly ! <br>';
    }

}


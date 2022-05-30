<?php

namespace App\Controllers;

use models\FeedAble;

function feedAnimal(FeedAble $someAnimal){
    $someAnimal->eat();
}
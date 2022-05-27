<?php

namespace controllers; 

use models\FeedAble;

function feedAnimal(FeedAble $someAnimal){

$someAnimal->eat();
}
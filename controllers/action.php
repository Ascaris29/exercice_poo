<?php

namespace controllers;

require_once('../models/Cat.php');
require_once('../models/Dog.php');
require_once('../models/Eagle.php');
require_once('../models/Lizard.php');
require_once('functions.php');

use models\Cat;
use models\Dog;
use models\eagle;


$minette = new Cat("miaou", "carnivorous", "walk",rand(1,2), "cat");
$minette->name = "minette";
feedAnimal($minette);
$minette->presentationOfAnimal();
$minette->getGender();
$minette->displayName();


$dingo = new Dog("wouaf", "carnivorous", "walk", rand(1,2), "dog");
$dingo->name="Dingo";
feedAnimal($dingo);
$dingo->presentationOfAnimal();
$dingo->getGender();
$dingo->displayName();


$coco = new \models\eagle("kiiiii", "coco", "fly",rand(1,2), "eagle");
$coco->name="coco";
feedAnimal($coco);
$coco->presentationOfAnimal();
$coco->getGender();
$coco->displayName();


$lizo = new \models\Lizard("lizo");
feedAnimal($lizo);
$lizo->presentationOfAnimal();
$lizo->getGender();
$lizo->displayName();





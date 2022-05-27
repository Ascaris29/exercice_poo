<?php

namespace controllers;

require_once('../models/Cat.php');
require_once('../models/Dog.php');
require_once('../models/eagle.php');
require_once('functions.php');

use models\Cat;
use models\Dog;
use models\eagle;


$minette = new Cat(rand(1,2));
$minette->cry();
$minette->name = "minette";
$minette->color = "brown";
$minette->getGender();


$dingo = new Dog(rand(1,2));
$dingo->cry();
$dingo->getGender();
$dingo->name="Dingo";
$dingo->color="black";
feedAnimal($dingo);
feedAnimal($minette);

$coco = new \models\eagle("coco", "white",1);
$coco->cry();
$coco->fly();
feedAnimal($coco);
$coco->getGender();

var_dump($coco);


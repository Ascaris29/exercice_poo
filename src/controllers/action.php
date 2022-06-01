<?php

namespace App\controllers;


use App\Models\Dog;
use App\Models\Eagle;
use App\Models\Lizard;
use App\Models\Cat;
use App\Models\Horse;
use App\Models\Seagull;
use App\Models\Owl;
use App\Models\Krokodil;



$mamals[] = new Dog("Dingo", "../../public/images/dog.jpeg");
$mamals[] = new Cat("Minette", "../../public/images/chat.png");
$mamals[] = new Horse("Bouto", "../../public/images/horse.jpeg");

$birds[] = new Eagle("Coco",'public/images/aigle.jpeg');
$birds[] = new Seagull("Rico", 'images/seagull.jpeg');
$birds[] = new Owl("Penny", "public/images/owl.jpeg");


$reptiles[] = new Lizard("Lizo", "public/images/lezard.jpg");
$reptiles[] = new Krokodil("Crocro", "public/images/krokodile.jpeg");

$currentObject = isset( $_GET["object"]) ?  $_GET["object"] : false;
$currentAnimalType = isset( $_GET["type"]) ?  $_GET["type"] : false;

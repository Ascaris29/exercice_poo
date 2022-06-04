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
use App\Models\Category;




$categories = array();
$categories[1] = new Category(1, "Mamals");
$categories[2] = new Category(2, "Birds");
$categories[3] = new Category(3, "Reptiles");


$animals = array();
$animals[1][] = new Dog("Dingo", "../../public/images/dog.jpeg", $categories[1]);
$animals[1][] = new Cat("Minette", "../../public/images/chat.png", $categories[1]);
$animals[1][] = new Horse("Bouto", "../../public/images/horse.jpeg", $categories[1]);
$animals[2][] = new Eagle("Coco",'public/images/aigle.jpeg', $categories[2]);
$animals[2][] = new Seagull("Rico", 'images/seagull.jpeg', $categories[2]);
$animals[2][] = new Owl("Penny", "public/images/owl.jpeg", $categories[2]);
$animals[3][] = new Lizard("Lizo", "public/images/lezard.jpg", $categories[3]);
$animals[3][] = new Krokodil("Crocro", "public/images/krokodile.jpeg", $categories[3]);



$currentObject = isset( $_GET["object"]) ?  $_GET["object"] : false;
$currentAnimalType = isset( $_GET["type"]) ?  $_GET["type"] : false;
$currentCategoryId = isset( $_GET["cid"]) ?  $_GET["cid"] : false;
$currentAnimalId = isset( $_GET["aid"]) ? $_GET["aid"] : false;
if ($currentCategoryId>0) {
    $currentCategoryObject = $categories[$currentCategoryId];
} else {
    $currentCategoryObject = null;
}

if($currentAnimalId>0){
    $currentAnimalObject= $animals[$currentAnimalId];
}else{
    $currentAnimalObject = null;
}
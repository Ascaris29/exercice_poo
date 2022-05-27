<?php

require_once('dog.php');
require_once('cat.php');
require_once('functions.php');


$minette = new Cat;
$minette->cry();
$minette->name = "minette";
$minette->color = "brown";
$minette->getGender();


$dingo = new Dog();
$dingo->cry();
$dingo->getGender();
$dingo->name="Dingo";
$dingo->color="black";
feedAnimal($dingo);
feedAnimal($minette);



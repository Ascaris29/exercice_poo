<?php

require('Animals.php');
require('cat.php');
require('interface.php');

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



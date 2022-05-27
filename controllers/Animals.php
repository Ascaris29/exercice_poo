<?php

declare(strict_types=1);

require_once('FeedAble.php');


abstract class Animals implements FeedAble{

    public $typeOfCry;
    public $typeOfDeplacement;
    public $typeOfAlimentation;
    public $gender;


    // fonction qui choisit aleatoirement le genre du bebe animal
    public function __construct(){
        $this->gender = rand(1,2);
    }

    //fonction qui decrit le genre du bebe animal

    public function getGender():int{
        if($this->gender === 1){
            echo "His gender is male !<br>";
        }else if($this->gender === 2){
            echo "His gender is female !<br>";
        }else if($this->gender === 3){
            echo "His gender is fluid !<br>";
        }
        return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function cry(){
        echo "";
    }  

    public function moving(){
        echo "";
    }

    public function fly(){
        echo "";
    }

    

}

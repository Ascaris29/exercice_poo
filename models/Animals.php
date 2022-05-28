<?php


namespace models;


require_once __DIR__ . "/FeedAble.php";



abstract class Animals implements FeedAble 
{

    public $typeOfCry;
    public $typeOfDeplacement;
    public $typeOfAlimentation;
    public $gender;
    public $nameOfThisAnimal;


    // fonction qui choisit aleatoirement le genre du bebe animal
    public function __construct($typeOfCry, $typeOfAlimentation, $typeOfDeplacement, int $gender, $nameOfThisAnimal){
        $this->gender = $gender;
        $this->typeOfCry =$typeOfCry;
        $this->typeOfAlimentation =$typeOfAlimentation;
        $this->typeOfDeplacement =$typeOfDeplacement;
        $this->nameOfThisAnimal = $nameOfThisAnimal;
    }
    
        
    // fonction qui choisit aleatoirement le genre du bebe animal
 
    //fonction qui decrit le genre du bebe animal

    public function getGender(){
        if($this->gender === 1){
            echo "male";
        }else if($this->gender === 2){
            echo "female";
        }
    }

    /*public function setGender($gender){
        $this->gender = $gender;
    }*/


    public function eat(){

    }

    public function presentationOfAnimal(){
        echo  $this->nameOfThisAnimal . ' ' .  $this->typeOfCry .' ' . $this->typeOfAlimentation .' ' . $this->typeOfDeplacement . ' ' .$this->gender; 
    }
    

}

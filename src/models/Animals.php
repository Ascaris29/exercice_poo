<?php


namespace App\Models;


abstract class Animals implements FeedAble 
{

    public $typeOfCry;
    public $typeOfDeplacement;
    public $typeOfAlimentation;
    public $gender;
    public $typeOfThisAnimal;


    // fonction qui choisit aleatoirement le genre du bebe animal
    public function __construct($typeOfCry, $typeOfAlimentation, $typeOfDeplacement, int $gender, $typeOfThisAnimal){
        $this->gender = $gender;
        $this->typeOfCry =$typeOfCry;
        $this->typeOfAlimentation =$typeOfAlimentation;
        $this->typeOfDeplacement =$typeOfDeplacement;
        $this->typeOfThisAnimal = $typeOfThisAnimal;
    }
    
        
    // fonction qui choisit aleatoirement le genre du bebe animal
 
    //fonction qui decrit le genre du bebe animal

    public function getGender(){
        if($this->gender === 1){
            echo "Male";
        }else if($this->gender === 2){
            echo "Female";
        }
    }

    public function setGender($gender){
        $this->gender = $gender;
    }


    public function eat(){

    }

    public function presentationOfAnimal(){
        echo  $this->typeOfThisAnimal . ' ' .  $this->typeOfCry .' ' . $this->typeOfAlimentation .' ' . $this->typeOfDeplacement . ' ' .$this->gender; 
    }

    public function displayTypeOfAnimal(){
        echo $this->typeOfThisAnimal;
    }

    public function displayCry(){
        echo $this->typeOfCry;
    }
    public function displayGender(){
        echo $this->gender;
    }
    
    public function displayTypeOfAlimentation(){
        echo $this->typeOfAlimentation;
    }
    public function displayTypeOfDeplacement(){
        echo $this->typeOfDeplacement;
    }
    

}

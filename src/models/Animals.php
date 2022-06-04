<?php


namespace App\Models;

use App\Models\Category;

abstract class Animals implements FeedAble 
{

    public $category;
    public $typeOfCry;
    public $typeOfDeplacement;
    public $typeOfAlimentation; 
    public $gender;


    public function __construct($typeOfCry, $typeOfAlimentation, $typeOfDeplacement, int $gender, Category $category){
        $this->category = $category;
        $this->gender = $gender;
        $this->typeOfCry =$typeOfCry;
        $this->typeOfAlimentation =$typeOfAlimentation;
        $this->typeOfDeplacement =$typeOfDeplacement;
    }

        
    
 
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
        echo  $this->getTypeName() . ' ' .  $this->typeOfCry .' ' . $this->typeOfAlimentation .' ' . $this->typeOfDeplacement . ' ' .$this->gender; 
    }

    public function displayTypeOfAnimal(){
        echo $this->getTypeName();
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

    public function getTypeName(){
        return get_class($this);
    }
    

}

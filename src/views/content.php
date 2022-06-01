<?php
namespace App\views;





if ($currentObject>=0 && $currentAnimalType  ) {


    $clickedAnimal = null;
    
    switch ($currentAnimalType) {
        case "mamal":
            if (isset($mamals[$currentObject])) {
                $clickedAnimal = $mamals[$currentObject];
            }
            break;
        case "birds"; 
            if(isset($birds[$currentObject])) {
                $clickedAnimal = $birds[$currentObject];
            }
            break;

            case "reptile"; 
            if(isset($reptiles[$currentObject])) {
                $clickedAnimal = $reptiles[$currentObject];
            }
            break;
    }
    
    require_once('animal.php');
        


}

?>


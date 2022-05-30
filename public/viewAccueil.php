<?php
    namespace views;
    require('../vendor/autoload.php');
    require_once('../src/controllers/action.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../views/assets/style.css">
    <title>Exercice OOP : Animals</title>
</head>
<body>

    <main class="content">

            <section class="animals">

                <div class="container">

                    <div class="animaux">

                        <div class="animaux_items">
                            <div class="img_animals">
                                <img src="../images/chat.png" alt="cat">
                            </div>
                            <div class="text">
                                <div class="title_animals">
                                    <h2><?php $minette->displayName(); ?></h2>
                                </div>
                                <div class="type">
                                    <p>Type of animal: <span class="php"><?php $minette->displayTypeOfAnimal(); ?></span></p>
                                </div>
                                <div class="gender">
                                    <p>Gender: <span class="php"><?php $minette->getGender(); ?></span></p>
                                </div>
                                <div class="cry">
                                    <p>Type of cry: <span class="php"><?php $minette->displayCry(); ?></span></p>
                                </div>
                                <div class="deplacement">
                                    <p>Type of deplacement : <span class="php"><?php $minette->displayTypeOfDeplacement(); ?></span></p>
                                </div>
                                <div class="alimentation">
                                    <p>Type of alimentation: <span class="php"><?php $minette->displayTypeOfAlimentation(); ?></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="animaux_items">
                            <div class="img_animals">
                                <img src="../images/Dog.jpeg" alt="dog">
                            </div>
                            <div class="text">
                                <div class="title_animals">
                                    <h2><?php $dingo->displayName(); ?></h2>
                                </div>
                                <div class="type">
                                    <p>Type of animal: <span class="php"><?php $dingo->displayTypeOfAnimal(); ?></span></p>
                                </div>
                                <div class="gender">
                                    <p>Gender: <span class="php"><?php $dingo->getGender(); ?></span></p>
                                </div>
                                <div class="cry">
                                    <p>Type of cry: <span class="php"><?php $dingo->displayCry(); ?></span></p>
                                </div>
                                <div class="deplacement">
                                    <p>Type of deplacement : <span class="php"><?php $dingo->displayTypeOfDeplacement(); ?></span></p>
                                </div>
                                <div class="alimentation">
                                    <p>Type of alimentation: <span class="php"><?php $dingo->displayTypeOfAlimentation(); ?></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="animaux_items">
                            <div class="img_animals">
                                <img src="../images/aigle.jpeg" alt="eagle">
                            </div>
                            <div class="text">
                                <div class="title_animals">
                                    <h2><?php $coco->displayName(); ?></h2>
                                </div>
                                <div class="type">
                                    <p>Type of animal: <span class="php"><?php $coco->displayTypeOfAnimal(); ?></span></p>
                                </div>
                                <div class="gender">
                                    <p>Gender: <span class="php"><?php $coco->getGender(); ?></span></p>
                                </div>
                                <div class="cry">
                                    <p>Type of cry: <span class="php"><?php $coco->displayCry(); ?></span></p>
                                </div>
                                <div class="deplacement">
                                    <p>Type of deplacement : <span class="php"><?php $coco->displayTypeOfDeplacement(); ?></span></p>
                                </div>
                                <div class="alimentation">
                                    <p>Type of alimentation: <span class="php"><?php $coco->displayTypeOfAlimentation(); ?></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="animaux_items">
                            <div class="img_animals">
                                <img src="../images/lezard.jpg" alt="lizard">
                            </div>
                            <div class="text">
                                <div class="title_animals">
                                    <h2><?php $lizo->displayName(); ?></h2>
                                </div>
                                <div class="type">
                                    <p>Type of animal: <span class="php"><?php $lizo->displayTypeOfAnimal(); ?></span></p>
                                </div>
                                <div class="gender">
                                    <p>Gender: <span class="php"><?php $lizo->getGender(); ?></span></p>
                                </div>
                                <div class="cry">
                                    <p>Type of cry: <span class="php"><?php $lizo->displayCry(); ?></span></p>
                                </div>
                                <div class="deplacement">
                                    <p>Type of deplacement : <span class="php"><?php $lizo->displayTypeOfDeplacement(); ?></span></p>
                                </div>
                                <div class="alimentation">
                                    <p>Type of alimentation: <span class="php"><?php $lizo->displayTypeOfAlimentation(); ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </main>
    
</body>
</html>
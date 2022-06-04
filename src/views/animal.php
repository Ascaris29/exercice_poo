<?php
    namespace App\views;
?>
    <main class="content">
            <section class="animals">
                <div class="container">
                    <div class="animaux">
                        <div class="animaux_items">
                           <div class="text">
                                <div class="title_animals">
                                    <h2><?php $clickedAnimal->displayName(); ?></h2>
                                </div>
                                <div class="type">
                                    <p>Type of animal: <span class="php"><?php $clickedAnimal->displayTypeOfAnimal(); ?></span></p>
                                </div>
                                <div class="gender">
                                    <p>Gender: <span class="php"><?php $clickedAnimal->getGender(); ?></span></p>
                                </div>
                                <div class="cry">
                                    <p>Type of cry: <span class="php"><?php $clickedAnimal->displayCry(); ?></span></p>
                                </div>
                                <div class="deplacement">
                                    <p>Type of deplacement : <span class="php"><?php $clickedAnimal->displayTypeOfDeplacement(); ?></span></p>
                                </div>
                                <div class="alimentation">
                                    <p>Type of alimentation: <span class="php"><?php $clickedAnimal->displayTypeOfAlimentation(); ?></span></p>
                                </div>
                            </div>
                            <div class="img_animals">
                                <?php $clickedAnimal->displayImage(); ?>
                            </div>
                        </div>
        </section>
    </main>
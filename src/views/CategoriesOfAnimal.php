<?php

namespace App\views;

?>

<?php
require_once('head.php');
require_once('navbar.php');
?>

<main class="content">
            <section class="categories">
                <div class="container">
                    <?php echo  $animals[$currentCategoryObject->id][$currentAnimalId]->name ?>  
                </div>
        </section>
    </main>
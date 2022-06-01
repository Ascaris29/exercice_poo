<?php
    namespace App\views;
?>



<header>
    <div class="navbar">
        <div class="navbarIcon">
            <h1><a href="index.php?view=home">The Animals </a></h1>
        </div>
        <div class="navbarItems">
            <div class="menuderoulant">
                <ul>
                    <li>The Mamals</li>
                        <ul class="Animals">
                            <?php 
                                foreach($mamals as $index => $mamal){
                                echo "<li><a href='index.php?view=home&object=".$index."&type=mamal'>".$mamal->typeOfThisAnimal."</a></li>";
                            }
                            ?>
                        </ul>
                </ul>
                <ul>
                    <li>The Birds</li>
                            <ul class="Animals">
                                <?php 
                                foreach($birds as $index => $bird){
                                echo "<li><a href='index.php?view=home&object=".$index."&type=birds'>".$bird->typeOfThisAnimal."</a></li>";
                            }
                                ?>
                            </ul>
                </ul>
                <ul>
                    <li>The Reptils</li>
                            <ul class="Animals">
                                <?php 
                                        foreach($reptiles as $index => $reptile){
                                            echo "<li><a href='index.php?view=home&object=".$index."&type=reptile'>".$reptile->typeOfThisAnimal."</a></li>";
                                    }
                                    ?>
                            </ul>
                </ul>
            </div>
        </div>
    </div>
</header>
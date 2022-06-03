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
                <?php foreach ($categories as $indexCategory => $categorie):?>
                    <ul>
                        <li>
                            <a href="index.php?view=CategoriesOfAnimal&cid=<?php echo $indexCategory;?>"><?php echo $categorie->name;?></a>
                            <ul>
                                <?php foreach($animals[$indexCategory] as $indexAnimal => $animal):?>
                                <li>
                                    <a href="index.php?view=CategoriesOfAnimal&aid=<?php echo $indexAnimal;?>&cid=<?php echo $indexCategory;?>"><?php echo $animal->name;?></a>
                                </li>
                                <?php endforeach; ?>   
                            </ul>
                        </li>
                    </ul>
                <?php endforeach ?>   
            </div>
        </div>
    </div>
</header>
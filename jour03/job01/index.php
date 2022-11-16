<?php

$tableau_1 = [200,204,173,98,171,404,459,];
//    print_r ($tableau_1);

    foreach ($tableau_1 as $valeur) {
        if ($valeur&1)
        echo "$valeur est impair <br>";
        else
        echo "$valeur est pair <br>";
    }

?>

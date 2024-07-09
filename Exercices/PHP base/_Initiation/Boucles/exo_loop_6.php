<?php
// Faites une boucle qui, à partir d'une valeur de départ stockée dans une variable, affiche les dix nombres suivants. Par exemple, si la valeur stockée est 17, le programme affichera les nombres de 18 à 27. Faites deux versions de l'algorithme : while et for.

    // $number = 17;
    // $number_bis = $number + 10;

    // echo "➡️  WHILE :";
    // while ($number < $number_bis) {
    //     $number++;
    //     echo " $number";
    // }
    $number = 17;
    $number_bis = $number + 1;

    echo "➡️  WHILE :";
    while ($number < ($number + 10)) {
        $number++;
        echo " $number";
    }
    
    // echo "\n➡️  FOR   :";
    // for ($number = 17+1; $number < $number_bis+1; $number++) {
    //     echo " $number";
    // }
?>
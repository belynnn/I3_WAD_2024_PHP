<?php
    // Demandez à l'utilisateur la température de la salle où il se trouve. Si elle vaut entre 15 et 25 affichez "Il fait bon". Si la valeur est inférieure, affichez "Ça caille !! Montez la température !" et si la valeur est supérieure affiche "Trop chaud ! Descendez la température !"

    $temp = (int)readline("Température ambiante : ");

    if ($temp >= 15 AND $temp <= 25) {
        echo "😎";
    } elseif ($temp < 15) {
        echo "🥶";
    } else {
        echo "🥵";
    }
?>
<?php
// Créez un logiciel qui calcule la multiplication d'une suite de valeurs saisis par l'utilisateur. L'entrée de données doit s'arrêter quand l'utilisateur saisit la valeur -1.

    $count = 0;
    $nb_entry = (int)readline("Combien de valeurs ? : ");

    $multiply = 1;
    while ($count < $nb_entry) {
        $user_value = (int)readline("Valeurs ? : ");

        $count++;

        $multiply *= $user_value;
    }

    echo " $multiply"
?>
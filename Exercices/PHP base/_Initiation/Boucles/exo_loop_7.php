<?php
// Créez un logiciel qui calcule la multiplication d'une suite de valeurs saisies par l'utilisateur. Le logiciel doit demander à l'utilisateur le nombre de valeurs qu'il souhaite saisir

    // $count = 0;
    // $nb_entry = (int)readline("Combien de valeurs ? : ");
    
    // $total = 0;
    // while ($count != $nb_entry) {
    //     $user_value = (int)readline("Nombre : ");
        
    //     $count++;
        
    //     $total += $user_value;
    // }

    // echo "$total";

    $count = 0;
    $nb_entry = (int)readline("Combien de valeurs ? : ");
    
    $multiply = 1;
    while ($count != $nb_entry) {
        $user_value = (int)readline("Nombre : ");
        
        $count++;
        
        $multiply *= $user_value;
    }

    echo "$multiply";

    //////////////////////////////
    // FOR
    //////////////////////////////
    $result = 1;
    $nb_entry = (int)readline("Combien de valeurs ? : ");

    for ($i = 1; $i <= $nb_entry; $i++) {
        $result = $result * (int)readline("Valeur ? : ");
    }
    echo "$result";

?>
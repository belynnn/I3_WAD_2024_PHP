<?php
    // Demandez deux chiffres à l'utilisateur et une opération à réaliser avec ces deux chiffres (addition, multiplication, soustraction et division). Affichez le calcul correspondant.

    $operator = readline("Opérateur (+, -, /, *) : ");
    $first_user_number = (int)readline("Nombre 1 : ");
    $second_user_number = (int)readline("Nombre 2 : ");

    if ($operator == "+") {
        $result = $first_user_number + $second_user_number;
        echo $result;
    } elseif ($operator == "-") {
        $result = $first_user_number - $second_user_number;
        echo $result;
    } elseif ($operator == "/") {
        $result = $first_user_number / $second_user_number;
        echo $result;
    } elseif ($operator == "*") {
        $result = $first_user_number * $second_user_number;
        echo $result;
    } else {
        echo "Vous n'avez pas sélectionné un bon opérateur.";
    }

?>
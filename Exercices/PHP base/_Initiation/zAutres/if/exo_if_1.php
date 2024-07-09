<?php
    $user_width = (int)readline("Largeur : ");
    $user_lenght = (int)readline("Longueur : ");

    if($user_width == $user_lenght){
        echo "SI la largeur est égale à la longueur :\n";
        echo " ➡️  L=$user_width, l=$user_lenght : La chambre est carrée.";
    } else {
        echo "SI la largeur n'est pas égale à la longueur :\n";
        echo " ➡️  L=$user_width, l=$user_lenght : La chambre n'est pas carrée.";
    }
?>
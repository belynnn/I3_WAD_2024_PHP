<?php
// Modifiez l'exercice précedant pour que l'utilisateur puisse se tromper 3 fois ... mais pas plus!

    $user_age = readline("\nVotre âge : ");
    $count = 1;

    while (($user_age < 0 OR $user_age > 130) AND $count < 3) {
        $user_age = readline("\nVotre âge : ");
        $count++;
    }

    if ($user_age >= 18 AND $user_age < 130) {
        echo "\nBienvenue.";
    } elseif ($user_age >= 0 AND $user_age < 18) {
        echo "\nVous êtes trop jeune.";
    } else {
        echo "\nPas le bon âge.";
    }
?>
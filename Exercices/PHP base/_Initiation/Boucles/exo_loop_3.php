<?php
// Faites un logiciel qui demande son âge à l'utilisateur. Le logiciel continue à demander jusqu'à ce qu'il introduise une valeur entre 0 et 130. Utilisez une boucle while. Si l'utilisateur est une personne majeure on lui donne la bienvenue. Dans le cas contraire, on affiche le message « Vous êtes encore très jeune»

    $user_age = readline("Votre âge : ");

    while (ctype_digit($user_age) == FALSE AND $user_age < 0 OR $user_age > 130) {
        $user_age = readline("Votre âge : ");
    }
    
    if ($user_age >= 18) {
        echo "Bienvenue.";
    } else {
        echo "Vous êtes trop jeune.";
    }
?>
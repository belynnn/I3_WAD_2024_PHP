<?php

/*
    Chapitre 5 - Les structures itératives
*/

//? Il existe plusieurs structures itératives.
//? Le but d'une structure itérative est de répéter un certain nombre de fois (définie ou indéfinie)
//? un bloc d'instructions.


//! → La structure : WHILE

while (true) {
    // Le bloc d'instructions sera répété tant que la condition sera vraie.
    // Dans ce cas-ci, l'instruction sera répétée de manière indéfinie.
}

while (false) {
    // Le bloc d'instruction ne sera pas exécuté.
    // La vérification de l'expression booléenne se fait avant l'exécution du bloc.
}

//? Le but sera de maîtriser nos boucles
//? Pour y arriver, mettons un objectif à atteindre :

$a = 0;

while ($a <= 10) {
    // Nous arrêterons la boucle lorsque la variable $a aura atteint la valeur 10.

    echo "Valeur de la variable a : $a";

    // Pour ce faire, nous devons à chaque passage dans la boucle, faire varier cette variable
    // Sous peine d'être dans le même état que le premier while énoncé plus haut.

    $a = $a + 1;
}



//! → La structure DO ... WHILE
//? Contrairement à la structure précédente, la structure do ... while exécute une première fois le bloc.

do {
    // Le bloc sera exécuté une première fois
    // ensuite la boucle sera exécuté indéfiniement
} while (true);

do {
    // Le bloc sera exécuté une première fois
    // ensuite la boucle sera arrêtée (ne respectant plus la condition)
} while (false);

//? Dans la même optique, nous pouvons également contrôler cette boucle grâce à un compteur.

$a = 0;

do {
    echo "Valeur de la variable a : $a";

    // Il ne faut toujours pas oublier d'incrémenter cette variable sous peine d'avoir une boucle infinie.
    $a = $a + 1;
} while ($a <= 10);



//! → La structure : FOR
//? Permet de répéter un bloc d'instructions un nombre défini de fois
//? Toutes les informations que nous avions besoin pour contrôler une boucle se trouve au même endroit.

//? Initialisation ; condition ; incrémentation
for ($i = 0; $i < 10; $i++) { 
    echo "Valeur de i : $i";
}



//! → La structure : FOREACH
//? Permet de parcourir une structure telle qu'un tableau
//? Sera vue pour le prochain chapitre.

?>
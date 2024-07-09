<?php

/*
    Chapitre 4 - Les structures conditionnelles
*/

//! → La structure : IF
//? Permet l'exécution de blocs d'instructions suivant une condition

if (true) {
    // Le bloc sera exécuté
}

if (false) {
    // Le bloc sera ignoré
}

if (true) {
    // Le bloc sera exécuté
}
else {
    // Celui-ci sera ignoré
}

if (false) {
    // Celui-ci sera ignoré
}
else {
    // Le bloc sera exécuté
}

//? Si vous avez plusieurs conditions à tester, vous pouvez créer autant de bloc que vous souhaitez :

if (false) {
    // Le bloc sera ignoré
}
else if (false) {
    // Le bloc sera ignoré
}
else if (false) {
    // Le bloc sera ignoré
}
else if (true) {
    // Le bloc sera exécuté
}
else {
    // Le bloc sera ignoré
}



//! → La structure : SWITCH
//? Permet, en fonction d'une égalité stricte, d'exécuter un ou plusieurs blocs d'instructions

$variable = "Ma valeur";

switch ($variable) {
    case 'Pas la bonne valeur':
        // Le bloc sera ignoré
        break;
    
    case 'Ma valeur':
        // Le bloc sera exécuté
        break;

    default:
        // Le bloc sera ignoré
        break;
}

//? Attention toutefois, si vous oubliez le mot-clef "break", votre code continuera son exécution

switch ($variable) {
    case 'Ma valeur':
        // Le bloc sera exécuté

    case 'Pas la bonne valeur':
        // Le bloc sera exécuté
        break;
    
    default:
        // Le bloc sera ignoré
        break;
}

?>
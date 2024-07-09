<?php

// print("Hello, World!\n");
// print("Aloha\n");

// $name = readline("Entrez votre nom : ");

// $age = 30;
// // print("\nVous avez " . $age . " ans.");
// // print("\nVous avez $age ans.");
// // print('\nJ\'ai $age ans.'); // ne prend pas en compte les variables ou les retour à la ligne

// print("\nJe suis $name et j'ai $age ans.");

// // $interdit = TRUE; // Affichera 1, si FALSE -> 0
// $interdit = true;

// if ($interdit == true) {
//     print("\nC'est vrai");
// }

// EXEMPLE : pour expliquer qu'un if vérifie si la valeur de l'expression est vraie
// if (true) {
//     print("\nC'est vrai aussi");
// }

// if ($age >= 18){
// // if (18 >= 18){
// // if (true){
//     print("\nVous pouvez entrer.");
// } else {
//     print("\nVous êtes trop jeune.");
// }

// $age2 = (int)readline("Entrez votre âge : ");
// print($age2)

$ageStr = "50";
$ageInt = (int)ageStr;

$age = 30;

if ($age < 18) {
    print("\nVous êtes trop jeune.");
} elseif ($age > 90) {
    print("\nVous êtes trop vieux.");
} else {
    print("\nVous pouvez entrer.");
}

?>
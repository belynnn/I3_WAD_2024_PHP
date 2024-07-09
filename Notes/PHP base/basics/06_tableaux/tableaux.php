<?php

/*
    Chapitre 06 - Les tableaux
*/

//? L'avantage d'un tableau par rapport à une variable, est que nous pouvons aliaser plusieurs emplacements
//? à une seule variable. Et donc permettre d'avoir plusieurs emplacements en mémoire sous un même nom.

//! → Déclaration d'un tableau
//? Pour créer un tableau, nous devons faire appel à la méthode array()

$tab = array();

//? Ou encore utiliser l'initialisation à la volée

$tab = [];

//? Imaginez un tableau comme une grosse armoire avec plein de tiroir.
//? Tous ces tiroirs sont numérotés (un indice).
//? Pour accéder à une case spécifique de mon tableau, je dois utiliser un indice.

//? Imaginons le tableau suivant : 
//? [ 123, 5, 94, 23, 10 ]
//? Dans ce tableau, il y a 5 valeurs, chacune d'une possède un numéro allant de 0 jusqu'à la taille du tableau - 1.



//! → Initialisation d'un tableau avec des valeurs
$tab = [123, 5, 94, 23, 10];

//? Si je veux atteindre la valeur 94, celle-ci se trouve dans la case portant le numéro 2 (commence à 0).
//? Pour y arriver, je dois utiliser une paire de crochet en précisant le numéro de la case que je souhaite récupérée.



//! → Récupération d'une valeur dans le tableau
echo "Valeur du tableau à l'indice 0 : " . $tab[0]; // 123
echo "Valeur du tableau à l'indice 1 : " . $tab[1]; // 5
echo "Valeur du tableau à l'indice 2 : " . $tab[2]; // 94
echo "Valeur du tableau à l'indice 3 : " . $tab[3]; // 23
echo "Valeur du tableau à l'indice 4 : " . $tab[4]; // 10

//! → Les différentes fonctions liées aux tableaux : 
//? Il existe un bon nombre de fonctions, nous allons en voir quelques unes.
//? Pour plus d'informations, vous pouvez vérifier la documentation officielle
//? https://www.php.net/manual/fr/function.array.php



//! • Ajouter une valeur à un tableau : array_push ()
$newTab = []; // Création d'un tableau vide

//? Ajout des valeurs : 1, 2, 3 au tableau
array_push($newTab, 1, 2, 3);

?>
<?php

/*
    Chapitre 01 - Les variables
*/

//! → Variables
//? Emplacement en mémoire où on peut stocker une valeur
//? Préfixer le nom d'un $

//? Déclaration
//? Réservation d'un emplacement en mémoire

$maVariable;

//? Affectation
//? Donner une valeur à une variable

$a = 1;
$b = "Hello";
$c = 'Hello';
$d = `Hello`;
$e = 2 + 2;
$f = $a + $e;

$A = 5; // variable différente de $a (sensible à la casse)


//! → Constantes
//? Emplacement en mémoire où on peut stocker une valeur 
//? <!> ne peut pas être réaffectée

define('PI', 3.141592); // <!> fonctionne uniquement en dehors de la définition d'une classe
$e = PI * $a; // 3.141592 * 1
//? PI = 42; // Impossible de modifier une constante

const MY_CONSTANTE = "Hello"; // <!> fonctionne dans et en dehors de la définition d'une classe

//! → Bonnes pratiques

/*
- Nom doit être cohérent (alphabet à éviter)
- Accents et caractères spéciaux interdits => langage anglophone
- lowerCamelCase pour les variables (UpperCamelCase pour les classes)
- UPPERCASE pour les constantes (vues après)
*/

//! → NULL
//? Absence de valeur (rien informatique)

$variableNull = NULL;

//! → Types de données

//? Entier
$entier1 = 42;
$entier2 = -42;

//? Décimal
$decimal1 = 1.23;
$decimal2 = -1.23;
$decimal3 = 42;

//? Chaine de caractères
$chaine1 = "Hello world !";
$chaine2 = "";
$chaine3 = "zB42$1a-!2";

//? Booléen
$booleen1 = true;
$booleen2 = false;

//? Tableau
//? Vu plus tard

//? Object
//? Vu plus tard

?>
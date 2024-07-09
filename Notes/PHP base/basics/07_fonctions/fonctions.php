<?php

/*
    Chapitre 07 - Les fonctions
*/

//? Permet de stocker des blocs d'instructions dans un espace mémoire accessible par un alias.
//? Utilisation de paramètres pour transmettre une ou plusieurs valeurs du programme principal
//? vers le sous-programme.
//? Utilisation d'un retour pour transmettre une valeur du sous-programme au programme principal.

//? Vous pouvez déclarer une fonction avec le mot-clef function.
//? Vous devez ensuite définir l'alias de cette fonction.
function myFunction () {
    echo "Hello";
}



//? Pour exécuter la fonction, vous devez simplement l'appeler via son alias et suivi d'une paire
//? de parenthèse.
myFunction();



//? Vous pouvez également fournir des paramètres pour transmettre une donnée originaire du programme
//? principal vers le sous-programme
function mySecondFunction ($prenom) {
    echo "Hello $prenom";
}

mySecondFunction("Debby");
$name = "Debby";
mySecondFunction($name);



//? Vous pouvez également transmettre une valeur du sous-programme vers le programme principal grace
//? au mot-clef "return" qui retourne la valeur.
function myThirdFunction ($prenom) {
    return "Hello $prenom";
}

echo myThirdFunction("Debby");
echo myThirdFunction($name);



//? Vous pouvez également typer les paramètres et le retour.
//? Il suffit de mettre le type de la donnée devant le paramètre
//? Ou d'ajouter les ": type" après les paranthèses de la fonction
function myFourthFunction (string $prenom) : string {
    return "Hello $prenom";
}

echo myFourthFunction(4);
echo myFourthFunction("Debby");
echo myFourthFunction($name);



//? Pour obliger la personne à typer correctement, vous pouvez activer le mode strict
// declare(strict_types=1);



//? Ainsi la personne est obligé d'utiliser les bons types au niveau de la définition et utilisation
function myFifthFunction (int $a, float $b) : int {
    return (int)($a + $b);
}

//? myFifthFunction("a", 5); // Ne fonctionne pas car "a" n'est pas un int

//? Passage par référence
//? Par défaut, vos valeurs sont passées par copie, c'est à dire que la valeur de la variable passée
//? en paramètre est copiée du programme principal vers le sous-programme
//? Toutes les modifications de base ne modifieront pas la variable copiée dans le programme principal
//? Si vous voulez transmettre une référence, c'est à dire l'adresse en mémoire de la case de la variable
//? Vous pouvez ajouter le symbole "&" devant la variable pour indiquer que vous envoyez sa référence
function func (&$a) {
    $a += 4;
}

$myVariable = 5;

func($myVariable);

echo $myVariable; // Valeur de myVariable : 9

?>
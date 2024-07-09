<?php

/*
    Chapitre 03 - Les opérateurs
*/

//! → Opérateurs arithmétiques
//? +  : Addition
//? -  : Soustraction
//? *  : Multiplication
//? /  : Division
//? %  : Modulo (reste d'une division d'entiers)
//? ** : Exposant

$res = 2 + 3; // 5
echo "<p>2 + 3 = " . $res . "</p>";
$res = 2 - 3; // -1
echo "<p>2 - 3 = " . $res . "</p>";
$res = 2 * 3; // 6
echo "<p>2 * 3 = " . $res . "</p>";
$res = 2 / 3; // 0.66
echo "<p>2 / 3 = " . $res . "</p>";
$res = 2 % 3; // 2
echo "<p>2 % 3 = " . $res . "</p>";
$res = 2 ** 3; // 8
echo "<p>2 ** 3 = " . $res . "</p>";



//! → Opérateurs conditionnels
//? Basé sur une expression booléenne
//? 2 états possibles : true ou false

//?  > : Plus grand que
//?  < : Plus petit que
//? >= : Supérieur ou égale à
//? <= : Inférieur ou égale à
//? != : Différent de
//? == : Égale à

$a = 2;
$b = 3;

$etat = $a > $b; // true
echo "<p>$a > $b = " . $a > $b . "</p>";
$etat = $a < $b; // false
echo "<p>$a < $b = " . $a < $b . "</p>";
$etat = $a >= $b; // true
echo "<p>$a >= $b = " . $a >= $b . "</p>";
$etat = $a <= $b; // false
echo "<p>$a <= $b = " . $a <= $b . "</p>";
$etat = $a != $b; // true
echo "<p>$a != $b = " . $a != $b . "</p>";
$etat = $a == $b; // false
echo "<p><$a == $b = " . $a == $b . "/p>"; 



//! → Opérateurs logiques
//? Permet de combiner plusieurs conditions
//? Il existe 3 opérateurs logiques : ET, OU, NON

//? ET  : and ou &&
//? OU  : or ou ||
//? NON : !

//? • &&
echo "<p>true && true : " . true && true . "</p>"; // true
echo "<p>false && true : " . false && true . "</p>"; // false
echo "<p>true && false : " . true && false . "</p>"; // false
echo "<p>false && false : " . false && false . "</p>"; // false

//? • ||
echo "<p>true || true : " . true || true . "</p>"; // true
echo "<p>false || true : " . false || true . "</p>"; // true
echo "<p>true || false : " . true || false . "</p>"; // true
echo "<p>false || false : " . false || false . "</p>"; // false

//? • !
echo "<p>!true : " . !true . "</p>"; // false
echo "<p>!false : " . !false . "</p>"; // true

?>
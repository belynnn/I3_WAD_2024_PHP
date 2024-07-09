<?php
// print('Je suis généré en PHP.');

// prend une structure de données et génère un string JSON
// $catList = ["Débby", "Lancelot", "Xena", "Calynn"];
// $catList2 = [
//     'nom' => 'Démon',
//     'prenom' => "D'amour"
// ];

$lancelot = [
    'prenom' => 'Poupou',
    'nom' => "D'amour"
];
$xena = [
    'prenom' => 'Nounouille',
    'nom' => "D'amour"
];
$calynn = [
    'prenom' => 'Démon',
    'nom' => "D'amour"
];

$catList3 = [$lancelot, $xena, $calynn];

// print(json_encode($catList));
print(json_encode($catList3));

// prend un string JSON et génère une structure de données
// json_decode();
?>
<?php
// Faites une boucle while et une boucle for pour afficher les valeurs entre 50 et 70

$count = 50;

echo "➡️  WHILE :";
while ($count <= 70) {
    echo " $count";
    $count += 1;
}

echo "\n➡️  FOR   :";
for ($count = 50; $count <= 70; $count++)
    echo " $count";
?>
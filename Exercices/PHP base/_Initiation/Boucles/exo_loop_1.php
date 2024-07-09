<?php
// Faites une boucle while pour afficher les valeurs entre 0 et 10. Utilisez while et for (deux versions différentes)

$count = 1;

echo "➡️  WHILE :";
while ($count <= 10) {
    echo " $count";
    $count += 1;
}

echo "\n➡️  FOR   :";
for($count = 1; $count <= 10; $count++) {
    echo " $count";
}

?>
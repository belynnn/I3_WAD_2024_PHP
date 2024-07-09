<?php
    // Créez un code capable de calculer la surface d'une chambre. Demandez à l'utilisateur la largeur et la longueur. Si les valeurs sont pareilles, affichez le message "La chambre est carrée!"
    
    $lenght = (int)readline("Entrez la longueur : ");
    $width = (int)readline("Entrez la largeur : ");

    $surface = $lenght * $width;

    if ($lenght == $width) {
        echo " ➡️  La pièce est carrée et a une surface de $surface m².";
    } else {
        echo " ➡️  La pièce n'est pas carrée et a une surface de $surface m².";
    }
?>
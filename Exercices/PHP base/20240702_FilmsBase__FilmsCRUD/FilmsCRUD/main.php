<?php
    $listeCarteMajeure = ["Empereur", "Impératrice", "Lune", "Soleil", "Etoile"];

    $listeCarteMineure = ["As d'épée", "valet d'épée", "cavalier d'épée", "roi d'épée", "reine d'épée"];

    $paysage = ["Forêt", "Plage"];

    foreach ($listeCarteMajeure as $carteMajeure) {
        print($carteMajeure);
        print("<br>");
        print("<p>Description : L'".$listeCarteMajeure[0]." aime la ". $paysage[1]."</p>");
        print("<ul>");
            print("<li>");
                print("Valeureux");
                print("Chanceux");
                print("Chanceux");
            print("</li>");
        print("</ul>");
    }

    // Si l'utilisateur pioche carte 1 : empereur
    // ALORS -> contexte = guerre
    // Si l'utilisateur pioche carte 2 : Soleil
    // ALORS -> paysage = la plage
?>
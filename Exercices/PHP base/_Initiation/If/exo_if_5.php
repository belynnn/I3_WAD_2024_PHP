<?php
    // Nous voulons calculer le prix d'une commande dans un magasin de téléphonie. On vend juste trois produits :
        // Samsung Galaxy S24 - 1000 euros
        // IPhone 15 - 1500 euros
        // Huawei P60 Pro - 800 euros

    // Demandez à l'utilisateur le nombre d'unités qu'il veut acheter de chaque produit (fonction "readline" ;) )

    // Calculez le total de la commande sachant que :

        // Si on commande plus de 5 unités d'un certain produit on a une remise du 10% sur le prix de ce produit

        // Les produits peuvent être retirés au magasin ou livrés. La livraison coute 2% du prix total de la commande, mais elle est gratuite si notre commande dépasse 100 euros

        // Une carte de fidélité accorde 20% de réduction sur le prix total de la commande
        
    $price_huawei_p60_pro = 800;
    $price_samsung_galaxy_s24 = 1000;
    $price_iphone_15 = 1500;
    // $base_total = $price_huawei_p60_pro + $price_samsung_galaxy_s24 + $price_iphone_15;
    // echo $base_total;

    // HOW MANY
    $quantity_huawei = (int)readline("Combien d'Huawei ? : ");
    $qty_huawei = $quantity_huawei * $price_huawei_p60_pro;

    $quantity_samsung = (int)readline("Combien de Samsung ? : ");
    $qty_samsung = $quantity_samsung * $price_samsung_galaxy_s24;

    $quantity_iphone = (int)readline("Combien de Samsung ? : ");
    $qty_iphone = $quantity_iphone * $price_iphone_15;

    // IF LESS THAN 5 -> TOTAL
    if ($quantity_huawei < 5 and $quantity_samsung < 5 and $quantity_iphone < 5) {
        $total = $qty_huawei + $qty_samsung + $qty_iphone;
        echo "\nTOTAL : $total";
        
    // IF MORE THAN 5 -> REDUCTION -> TOTAL
    } elseif ($quantity_huawei > 5 and $quantity_samsung > 5 and $quantity_iphone > 5) {
        $total_huawei = $qty_huawei*0.9;
        $total_samsung = $qty_samsung*0.9;
        $total_iphone = $qty_iphone*0.9;
        
        $total = $total_huawei + $total_samsung + $total_iphone;
        echo "\nTOTAL -10% : $total";
    }
    


    $ask_fidelity = readline("\nCarte de fidélité ? (oui/non) : ");
    if ($ask_fidelity == "oui") {
        echo "\nCarte de fidélité : OUI";
        $total_huawei = $qty_huawei*0.8;
        $total_samsung = $qty_samsung*0.8;
        $total_iphone = $qty_iphone*0.8;
        
        $total = $total_huawei + $total_samsung + $total_iphone;
        echo "\nTOTAL -20% : $total";
    } elseif ($ask_fidelity == "non") {
        echo "\nCarte de fidélité : NON";
        $total = $qty_huawei + $qty_samsung + $qty_iphone;
        echo "\nTOTAL : $total";
    } else {
        echo "\nVous n'avez pas entré de valeur valide.";
    }
    


    $ask_delivery = readline("\nLivraison ? (oui/non) : ");
    if ($ask_delivery == "oui") {
        echo "\nLivraison : OUI";
        
        $total = $qty_huawei + $qty_samsung + $qty_iphone;
        if ($total <= 3000) {

            $total_huawei = $qty_huawei*1.02;
            $total_samsung = $qty_samsung*1.02;
            $total_iphone = $qty_iphone*1.02;

            $total = $total_huawei + $total_samsung + $total_iphone;
            echo "\nTOTAL +2% de livraison : $total";
        } else {
            echo "\nLivraison gratuite.";
        }
    } elseif ($ask_delivery == "non") {
        echo "\nLivraison : NON";
    }


    // if ($product == "1") {
    //     $quantity = readline("Quantité : ");
    //     $total = $product * $quantity;
    //     $ask_fidelity_card = readline("Carte de fidelité ? (oui/non) : ");

    //     if ($ask_fidelity_card == "oui") {
    //         $fidelity_card = TRUE;
    //     } elseif ($ask_fidelity_card == "non") {
    //         $fidelity_card = FALSE;
    //     } else {
    //         echo "Vous n'avez pas entré une réponse valide.";
    //     }

    //     $product = readline("Quel produit ? : ");
    // } elseif ($product == "2") {
    //     $quantity = readline("Quantité : ");
    //     $total = $product * $quantity;

    //     $ask_fidelity_card = readline("Carte de fidelité ? (oui/non) : ");

    //     if ($ask_fidelity_card == "oui") {
    //         $fidelity_card = TRUE;
    //     } elseif ($ask_fidelity_card == "non") {
    //         $fidelity_card = FALSE;
    //     } else {
    //         echo "Vous n'avez pas entré une réponse valide.";
    //     }

    //     $product = readline("Quel produit ? : ");
    // } elseif ($product == "3") {
    //     $quantity = readline("Quantité : ");
    //     $total = $product * $quantity;

    //     $ask_fidelity_card = readline("Carte de fidelité ? (oui/non) : ");

    //     if ($ask_fidelity_card == "oui") {
    //         $fidelity_card = TRUE;
    //     } elseif ($ask_fidelity_card == "non") {
    //         $fidelity_card = FALSE;
    //     } else {
    //         echo "Vous n'avez pas entré une réponse valide.";
    //     }

    //     $product = readline("Quel produit ? : ");
    // } else {
    //     echo "L'article n'est pas dans notre base de données.";
    // }

?>
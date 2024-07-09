<?php
    // // // // // // // // // // // // // // // // 
    //
    // Correction formateur
    //
    // // // // // // // // // // // // // // // // 
    $prix_S24 = 1000;
    $prix_IPhone = 1500;
    $prix_Huawei = 800;

    $unites_S24 = readline("Tapez le nombre d'unités du S24 : ");
    $unites_IPhone = readline("Tapez le nombre d'unités du IPhone : ");
    $unites_Huawei = readline("Tapez le nombre d'unités du Huawei : ");

    if($unites_S24 > 5){
        $prix_S24 *= 0.9; 
    }
    if($unites_IPhone > 5){
        $prix_IPhone *= 0.9; 
    }
    if($unites_Huawei > 5){
        $prix_Huawei *= 0.9; 
    }

    $total = $unites_S24 * $prix_S24 + $unites_IPhone * $prix_IPhone +$unites_Huawei * $prix_Huawei;

    $carte = readline("Avez-vous une carte de fidélité ? : ");

    $totalSansReduction = $total;

    if($carte == "oui"){
        $total = $total * 0.80;    
    }else{
        $total = $total;
    }

    $livraison = readline("Livrer à la maison ? : ");
    if($livraison == "oui"){
        if($totalSansReduction <= 3000){
            $total = $total * 1.02;
        }
    }

    print ("Total final : $total");


    // // // // // // // // // // // // // // // // 
    //
    // Refacto Debby
    //
    // // // // // // // // // // // // // // // // 
    // // threshold = seuil
    // // rate = pourcentage

    // // Prix des produits
    // const SAMSUNG_PRICE = 1000;
    // const IPHONE_PRICE = 1500;
    // const HUAWEI_PRICE = 800;

    // // Seuil à atteindre (quantité) pour avoir une réduction
    // const DISCOUNT_THRESHOLD = 5;
    // // Taux de réduction si 5 produits achetés
    // const DISCOUNT_RATE = 0.1;

    // // Taux des frais de livraison
    // const DELIVERY_RATE = 0.02;
    // // Seuil à atteindre (euros) pour avoir la livraison gratuite
    // const FREE_DELIVERY_TRESHOLD = 3000;

    // // Taux de réduction si carte de fidélité
    // const LOYALTY_CARD_DISCOUNT = 0.2;

    // function calculateDiscount($quantity, $price) {
    //     if ($quantity >= DISCOUNT_THRESHOLD) {
    //         return $price * DISCOUNT_RATE * $quantity;
    //     } else {
    //         return 0;
    //     }
    // }

    // // Récupérer les données entrées par l'utilisateurice
    // $samsung_quantity = (int)readline("Combien de Samsung ? : ");
    // $iphone_quantity = (int)readline("Combien d'IPhone ? : ");
    // $huawei_quantity = (int)readline("Combien de Huawei ? : ");

    // // Calculer le sous total pour chaque produit
    // $samsung_subtotal = $samsung_quantity * SAMSUNG_PRICE;
    // $iphone_subtotal = $iphone_quantity * IPHONE_PRICE;
    // $huawei_subtotal = $huawei_quantity * HUAWEI_PRICE;

    // // Calculer le total de réduction pour chaque produits
    // $samsung_discount = calculateDiscount($samsung_quantity, SAMSUNG_PRICE);
    // $iphone_discount = calculateDiscount($iphone_quantity, IPHONE_PRICE);
    // $huawei_discount = calculateDiscount($huawei_quantity, HUAWEI_PRICE);

    // // Calculer le total du sous total
    // $total_subtotal = $samsung_subtotal + $iphone_subtotal + $huawei_subtotal;

    // // Calculer le total des réductions
    // $total_discount = $samsung_discount + $iphone_discount + $huawei_discount;

    // // Demander si carte de fidélité
    // $has_loyalty_cart = readline("Carte de fidélité ? (oui/non) : ");

    // // Calculer la réduction avec la carte de fidélité (si 'oui')
    // $loyalty_card_discount = 0;
    // if ($has_loyalty_cart === "oui"){
    //     $loyalty_card_discount = $total_subtotal * LOYALTY_CARD_DISCOUNT;
    // }

    // // Calculer le total AVANT les frais de livraisons
    // $total_before_delivery = $total_subtotal - $total_discount - $loyalty_card_discount;

    // // Demander si livraison
    // $delivery = readline("Livraison ? (oui/non) : ");

    // // Calculer les frais de livraisons (si 'oui')
    // $delivery_fee = 0;
    // if($delivery === "oui"){
    //     if($total_before_delivery >= FREE_DELIVERY_TRESHOLD){
    //         $delivery_fee = 0;
    //     } else {
    //         $delivery_fee = $total_before_delivery * DELIVERY_RATE;
    //     }
    // }
    
    // // Calculer le total final
    // $final_total = $total_before_delivery + $delivery_fee;

    // // Affichage de la commande
    // echo "________________________________________________________\n";
    // echo "\nCommande :\n";
    // echo "Samsung Galaxy S24 x $samsung_quantity : " . number_format($samsung_subtotal, 2) . " €\n";
    // echo "iPhone 15 x $iphone_quantity : " . number_format($iphone_subtotal, 2) . " €\n";
    // echo "Huawei P60 Pro x $huawei_quantity : " . number_format($huawei_subtotal, 2) . " €\n";
    // echo "________________________________________________________\n";
    // echo "Réduction :\n";
    // echo "- Article * 5 : " . number_format($total_discount, 2) . " €\n";
    // echo "- Carte de fidélité : " . number_format($loyalty_card_discount, 2) . " €\n";
    // echo "________________________________________________________\n";
    // echo "Sous total : " . number_format($total_subtotal, 2) . " €\n";
    // echo "Frais de livraison : " . number_format($delivery_fee, 2) . " €\n\n";
    // echo "**Total Final : " . number_format($final_total, 2) . " €**\n";
    // echo "________________________________________________________";
?>
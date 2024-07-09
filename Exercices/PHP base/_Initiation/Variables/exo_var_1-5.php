<?php 
    // Le Vendôme est un cinéma cher (contrairement au Styx, qui d'ailleurs n'existe plus) et de fois ils offrent une réduction de 3€ sur les entrées. Affichez le prix d'un ticket normal et le prix qu'on payerait si on avait la réduction.
    
    $price_ticket = 12;
    $reduction = 3;
    $price_reduction = $price_ticket - $reduction;
    
    echo " ➡️  Le prix du ticket, avec une réduction de $reduction €, est de $price_reduction €.";
    
    echo "\n";
    
    $percent10 = 10;
    $price_percent = $price_ticket / 100 * $percent10;
    $final_price_percent = $price_ticket - $price_percent;
    echo " ➡️  Le prix du ticket, avec la réduction de $percent10%, est de $final_price_percent €.";
    
    echo "\n";
    
    $percent0dot9 = 0.9;
    $price_percent = $price_ticket * $percent0dot9;
    echo " ➡️  Le prix du ticket, avec la réduction de $percent10%, est de $price_percent €.";
?>
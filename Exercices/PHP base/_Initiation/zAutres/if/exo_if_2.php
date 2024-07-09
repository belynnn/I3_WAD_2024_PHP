<?php
    $user_temperature = (float)readline("Température : ");

    if($user_temperature >= 15 && $user_temperature <= 25){
        echo " ➡️  $user_temperature : Il fait bon.";
    } elseif ($user_temperature <= 15){
        echo " ➡️  $user_temperature : Il fait froid.";
    } else {
        echo " ➡️  $user_temperature : Il fait chaud. Descendez la température.";
    }
?>
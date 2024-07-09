<?php
    $user_number1 = (float)readline("Numéro 1 : ");
    $user_operation = readline("Opération (+, -, *, /) : ");
    $user_number2 = (float)readline("Numéro 2 : ");

    if ($user_operation == "+"
        || $user_operation == "addition"
        || $user_operation == "plus")
    {
        $result = $user_number1 + $user_number2;
        echo " ➡️  $user_number1 + $user_number2 = $result\n";
    }

    elseif($user_operation == "-"
        || $user_operation == "soustraction"
        || $user_operation == "moins")
    {
        $result = $user_number1 - $user_number2;
        echo " ➡️  $user_number1 - $user_number2 = $result\n";
    }

    elseif($user_operation == "*"
        || $user_operation == "multiplication"
        || $user_operation == "fois")
    {
        $result = $user_number1 * $user_number2;
        echo " ➡️  $user_number1 * $user_number2 = $result\n";
    }

    elseif($user_operation == "/"
        || $user_operation == "division"
        || $user_operation == "divisé par")
    {
        $result = $user_number1 / $user_number2;
        echo " ➡️  $user_number1 / $user_number2 = $result";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays - Exercice 10</title>
</head>
<body>
    <?php
        // $table1 = [3, 6];
        // $table2 = [4, 8, 7, 12];

        // $result = 0;
        // foreach($table1 as $value1){
        //     foreach($table2 as $value2){
        //         $total = $value1 * $value2;
        //         $result += $total;
        //         echo "0 + $value1 * $value2 ";
        //     }
        // }
        // echo " = $result";
        
        // echo "<br><br>3 * 4 + 3 * 8 + 3 * 7 + 3 * 12 + 6 * 4 + 6 * 8 + 6 * 7 + 6 * 12 = 279";



        $tableau1 = [3, 6];
        $tableau2 = [4, 8, 7, 12];

        $operationFinale = "";
        for ($i = 0; $i < count($tableau1); $i++) {
            for ($j = 0; $j < count($tableau2); $j++) {
                $operation = "$tableau1[$i] * $tableau2[$j]";

                if ($i === 0 && $j === 0) {
                    $operationFinale .= $operation;
                } else {
                    $operationFinale .= " + " . $operation;
                }
            }
        }

        $operationFinale .= " = 279";

        echo $operationFinale;
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays - Exercice 9</title>
</head>
<body>
    <?php
        $table1 = [4, 8, 7, 9, 1, 5, 4, 6];
        $table2 = [7, 6, 5, 2, 1, 3, 7, 4];
        $table_result = [];

        for($i = 0; $i < count($table1); $i++){
            $table_result[] = $table1[$i] + $table2[$i];
        }

        echo "New table :<br>";
        foreach($table_result as $value) {
            echo "$value ";
        }
    ?>
</body>
</html>
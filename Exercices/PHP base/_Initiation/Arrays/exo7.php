<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays - Exercice 7</title>
</head>
<body>
    <?php
        echo "Tableau original : <br><br>";
        for ($i = 0; $i < 200; $i++) {
            $list_number[] = $i+1;
            print("$list_number[$i]\n");
        }
        
        echo "<br><br>Tableau modifié : <br><br>";
        for ($i = 0; $i < count($list_number); $i++) {
            $list_number[$i] *= 2;
            print("$list_number[$i]\n");
        }
    ?>
</body>
</html>
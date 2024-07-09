<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays - Exercice 6</title>
</head>
<body>
    <?php
        for ($i = 0; $i < 200; $i++) {
            $list_number[] = $i+1;
            echo "$list_number[$i]<br>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays - Exercice 2</title>
</head>
<body>
    <?php
        $list_prices = [10, 20, 50];

        array_push($list_prices, 8, 70);

        echo "$list_prices[1] - $list_prices[4]";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays - Exercice 3</title>
</head>
<body>
    <?php
        $list_country = ["Séoul", "Bruxelles", "Nancy", "Salou", "Madrid"];

        for ($i = 0; $i < count($list_country); $i++) {
            echo "$list_country[$i]<br>";
        }
    ?>
</body>
</html>
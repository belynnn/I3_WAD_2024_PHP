<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercices formulaires - Exercice 6</title>
</head>
<body>
    <?php
    echo "<h1>Ajouter la TVA d'un prix HTVA</h1>";
        $user_price_entry = $_POST['user_price_entry'];

        $final_price = $user_price_entry * 1.12;

        echo "<h3>Prix entré par l'utilisateurice :</h3>";
        echo $user_price_entry;
        echo "<br>";
        echo "<h3>Prix TVAC :</h3>";
        echo $final_price;
    ?>
</body>
</html>
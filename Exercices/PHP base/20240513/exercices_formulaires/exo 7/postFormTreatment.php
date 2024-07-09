<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercices formulaires - Exercice 7</title>
</head>
<body>
    <?php
        var_dump ($_POST);

        $pet_select = $_POST['pets'];

        $animals = ['chat.png', 'chien.png', 'perroquet.png'];

        echo "<h1>Centre Vétérinaire ZooZoo</h1>";
        echo "<h2>Profil propriétaire</h2>";
        echo "<img src='./img/".$pet_select.".png'>";
        
        // if ($pet_select == "chat") {
        //     echo "<h4>Lancelot</h4>";
        //     echo "<img src='./img/".$pet_select.".png'>";
        // } elseif ($pet_select == "chien") {
        //     echo "<h4>Eden</h4>";
        //     echo "<img src='./img/".$pet_select.".png'>";
        // } elseif ($pet_select == "perroquet") {
        //     echo "<h4>Bilou</h4>";
        //     echo "<img src='./img/".$pet_select.".png'>";
        // } 
    ?>
</body>
</html>
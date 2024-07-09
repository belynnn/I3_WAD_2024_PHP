<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Traitement</h1>
    <h2>du formulaire</h2>

    <?php
        $nom = $_POST['nom'];
        $description = $_POST['description'];

        print('Vous avez entré la formation : <br>' .$nom. '<br><br> et sa description : <br>' .$description);

        include('./db/config.php');

        $cnx = new PDO(DSN, USERNAME, PASSWORD);
        var_dump($cnx);

        $sql = "INSERT INTO formation (id, nom, description)
        VALUES (null, '" .$nom. "', '" .$description. "')";

        $stmt = $cnx->prepare($sql);

        $stmt->execute();
    ?>
    
</body>
</html>
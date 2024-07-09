<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Insertion DB</title>
</head>
<body>
<?php
    include('./db/config.php');

    $cnx = new PDO(DSN, USERNAME, PASSWORD);
    var_dump($cnx);

    $sql = "INSERT INTO stagiaire (id, prenom, hobby, idFormation) VALUES (null, 'Marwa', 'Chanter', 1)";

    // $sql = "DELETE FROM stagiaire WHERE prenom='Mariam'";

    $stmt = $cnx->prepare($sql);

    $stmt->execute();
?>
</body>
</html>
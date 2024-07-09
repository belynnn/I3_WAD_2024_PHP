<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exemple SELECT</title>
</head>
<body>
<?php
    //! 1. Créer un objet de connexion (PDO)
    include('./db/config.php');

    $cnx = new PDO(DSN, USERNAME, PASSWORD);
    var_dump($cnx);
    
    //! 2. Créer un string contenant la requête
    $sql = "SELECT prenom, hobby from stagiaire";

    //! 3. Préparer la requête (statement / déclaration)
    // Fait appel à la méthode 'prepare' de la class PDO ($cnx)
    // pour obtenir un objet de la class PDOStatment ($stmt)
    $stmt = $cnx->prepare($sql);

    //! 4. Lancer la requête sur le serveur MySQL
    $stmt->execute();

    //! 5. Obtenir les données dans un array (tableau)
    // Renvoie un array associatif contenant le résultat de l'exécution de la requête
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //! 6. Afficher les données obtenues
    var_dump($resultat);
    
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($resultat);
?>
</body>
</html>
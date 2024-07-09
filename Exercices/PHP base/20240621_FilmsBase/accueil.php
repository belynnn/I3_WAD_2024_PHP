<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chips'Flix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
        include "./nav.php";
    ?>

    <h1 class="bg-primary">Bienvenue !</h1>
    <!-- Afficher la liste de films  -->

    <?php
    // 1. Connecter à la BD
    include "./db/config.php";

    try {
        // essayer de connecter
        $cnx = new PDO(DSN, USERNAME, PASSWORD);
    } catch (Exception $e) {
        // problème de connexion!!
        // instructions à suivre en cas de 
        // problème de connexion
        print("<h3>Un problème est survenu</h3>");
        print("<img src='./image.jpg'>");
        print("<a href='./accueil.php'>Accueil</a>");

        // var_dump ($e->getMessage());
        die();
    }

    // 2. Créer la requête
    $sql = "SELECT * FROM film ORDER BY id DESC LIMIT 3";

    // 3. Préparer la requête
    $stmt = $cnx->prepare ($sql);

    // 4. Lancer la requête
    $stmt->execute();

    // 5. Obtenir le résultat (les films dans ce cas)
    // et les mettre dans un array
    $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 6. Afficher les données de la manière choisie
    // var_dump ($arrayFilms);
    
    print ("<ul>");
    foreach ($arrayFilms as $film){
        print ("<hr>");
        print ("<li>Titre: " . $film['titre'] . "</li>");
        print ("<li>Description: " . $film['description'] . "</li>");
        print ("<li>Durée: " . $film['duree'] . "</li>");

    }
    print ("</ul>");

    ?>
</body>

</html>
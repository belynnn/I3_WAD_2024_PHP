<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chips'Flix • Rechercher un film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
        include "./nav.php";
    ?>

    <h1>Résultat de votre recherche</h1>

    <?php
        // var_dump($_POST);
        
        // 1. Obtenir les données du formulaire 
        $termeRecherche = $_POST['termeRecherche'];

        // 2. Connecter à la BD (PDO)
        include "./db/config.php";

        try{ 
            // essayer de connecter
            $cnx = new PDO (DSN, USERNAME, PASSWORD);
        }
        catch (Exception $e){
            // problème de connexion!!
            // instructions à suivre en cas de 
            // problème de connexion
            print ("<h3>Un problème est survenu</h3>");
            print ("<img src='./image.jpg'>");
            print ("<a href='./accueil.php'>Accueil</a>");

            // var_dump ($e->getMessage());
            die();
        }

        // 3. Créer une requête du type INSERT
        //  3.1. Titre spécifique
        // $sql = "SELECT * FROM film WHERE titre=:termeRecherche";
        $sql = "SELECT * FROM film WHERE titre LIKE :termeRecherche";

        // 4. Préparer la requête
        $stmt = $cnx->prepare ($sql); // pbjet PDOStatement

        // 5. Donner des valeurs aux paramètres
        $stmt->bindValue(":termeRecherche", "%" . $termeRecherche . "%", PDO::PARAM_STR);

        // 6. Lancer la requête
        $stmt->execute();

        // 7. Obtenir les données
        $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // 8. Afficher les données de la manière choisie
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
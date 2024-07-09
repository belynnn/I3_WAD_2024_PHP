<!DOCTYPE html>
<html lang="en">

<?php
    include "./head.php";
?>

<body>
    <?php
    include "./checkSession.php";
    include "./nav.php";
    ?>
    <?php
    // var_dump ($_POST);

    // 1. Obtenir le terme de la recherche (du form)
    $termeRecherche = $_POST['termeRecherche'];

    // 2. Connecter à la BD
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

    // 3. Créer une requête
    $sql = "SELECT * FROM film WHERE titre LIKE :termeRecherche";

    // 4. Préparer
    $stmt = $cnx->prepare($sql);

    // 5. Donner des valeurs aux paramètres (placeholders)
    $stmt->bindValue(":termeRecherche", "%" . $termeRecherche . "%", PDO::PARAM_STR);

    // 6. Executer la requête
    $stmt->execute();

    // 7. Obtenir les données
    $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrayFilms);

    // 8. Afficher les données
    print("<ul>");
    foreach ($arrayFilms as $film) {
        print("<hr>");
        print("<li>Titre: " . $film['titre'] . "</li>");
        print("<li>Description: " . $film['description'] . "</li>");
        print("<li>Durée: " . $film['duree'] . "</li>");
        print ("<img class='affiche' src='./uploads/" . $film['image'] . "'>");



    }
    print("</ul>");


    ?>
</body>

</html>
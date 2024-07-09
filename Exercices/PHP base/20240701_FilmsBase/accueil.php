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

    <h1>Bienvenue
        <?php
            print ($_SESSION['nomUtilisateur']);
        ?>
    </h1>
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
        print ("<img class='affiche' src='./uploads/" . $film['image'] . "'>");

        // form pour noter le film
        print ("<input type='number' class='note'>");
    }
    print ("</ul>");

    ?>
</body>

</html>
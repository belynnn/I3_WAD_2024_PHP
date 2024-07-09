<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        include("./nav.php");
        include("./checkSession.php");

        // var_dump($_SESSION['panier']);

        include("./db/config.php");

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
        };

        print("IDs DES FILMS :");
        // on obtient tous les ids dans un array
        $ids = array_keys($_SESSION['panier']);
        // var_dump($ids);

        // on crée un string de la forme 3,4,5,7
        $stringIds = implode(",", $ids);

        print("string ids : " . $stringIds);
        $sql = "SELECT * FROM film WHERE film.id IN (". $stringIds .")";

        $stmt = $cnx->prepare($sql);

        $stmt->execute();

        $tabFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // var_dump($tabFilms);

        $panier = $_SESSION['panier'];

        foreach ($tabFilms as $film) {
            print("<div>");
                print("<h3>". $film['titre'] ."</h3>");
                print("<img class='affiche' src='./uploads/". $film['image'] ."'>");
            print("</div>");

            print("<p>Quantité : ". $panier[$film['id']] ."</p>");
        };
    ?>
</body>
</html>
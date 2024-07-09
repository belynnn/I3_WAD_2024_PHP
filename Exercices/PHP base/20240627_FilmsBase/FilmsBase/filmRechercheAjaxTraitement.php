<?php

// Obtenir les données du form
// (dans ce cas le terme de recherche)
// print($_POST['termeRecherche']);

// connecter à la db et obtenir tous les films qui correspondent à la recherche
$termeRecherche = $_POST['termeRecherche'];

include "./db/config.php";
try {
    $cnx = new PDO(DSN, USERNAME, PASSWORD);
} catch (Exception $e) {
    print("<h3>Un problème est survenu</h3>");
    print("<img src='./image.jpg'>");
    print("<a href='./accueil.php'>Accueil</a>");

    die();
}

$sql = "SELECT * FROM film WHERE titre LIKE :termeRecherche";

$stmt = $cnx->prepare($sql);

$stmt->bindValue(":termeRecherche", "%" . $termeRecherche . "%", PDO::PARAM_STR);

$stmt->execute();

$arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Encoder le tableau contenant les films en JSON
$tableauJSON = json_encode($arrayFilms);

print($tableauJSON);

?>
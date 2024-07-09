<?php
include "./db/config.php";

try {
    $cnx = new PDO(DSN, USERNAME, PASSWORD);
} catch (Exception $e) {
    print("<h3>Un problème est survenu</h3>");
    print("<img src='./image.jpg'>");
    print("<a href='./accueil.php'>Accueil</a>");

    die();
}

// $sql = "SELECT * FROM film WHERE id=:id";
$sql = "";

// SELECT AVG(valeur) AS moyenne FROM note WHERE idFilm=14;
// SELECT *, AVG(valeur) AS moyenne FROM film INNER JOIN note ON film.id = note.idFilm WHERE film.id=14; 

$stmt = $cnx->prepare($sql);

$stmt->bindValue(":id", $idFilm);

$stmt->execute();

$film = $stmt->fetch(PDO::FETCH_ASSOC);
?>
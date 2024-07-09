<?php

echo $_GET['nom'];
echo $_GET['prenom'];

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];

echo "<p>Votre message a bien été envoyé ! Merci " . $nom . ' ' . $prenom . "</p>";

?>
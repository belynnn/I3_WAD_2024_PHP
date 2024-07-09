<?php

echo $_POST['nom'];
echo $_POST['prenom'];

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

echo "<p>Votre message a bien été envoyé ! Merci " . $nom . ' ' . $prenom . "</p>";

?>
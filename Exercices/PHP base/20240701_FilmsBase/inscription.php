<!DOCTYPE html>
<html lang="fr-be">

<?php
    include "./head.php";
?>

<body>
    <h1>Inscription</h1>
    <form action="./inscriptionTraitement.php" method="POST">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
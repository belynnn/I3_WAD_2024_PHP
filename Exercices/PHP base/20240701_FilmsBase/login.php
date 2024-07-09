<!DOCTYPE html>
<html lang="fr-be">

<?php
    include "./head.php";
?>

<body>
    <form action="./loginTraitement.php" method="POST">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
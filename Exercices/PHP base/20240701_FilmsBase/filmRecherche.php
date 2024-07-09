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
    <form action="./filmRechercheTraitement.php" method="POST">
        <!-- <label for="termeRecherche">Recherche</label> -->
        <input type="text" id="termeRecherche" name="termeRecherche">
        <input type="submit" value="Rechercher!">
    </form>
</body>

</html>
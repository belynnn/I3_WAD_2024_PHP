<!DOCTYPE html>
<html lang="fr-be">

<?php
    include "./head.php";
?>

<body>
    <?php
        include "./checkSession.php";
        include "./nav.php";
    ?>
    <form id="formHTML">
        <label for="termeRecherche">Rechercher :</label>
        <input type="text" id="termeRecherche" name="termeRecherche">

        <button id="btnRecherche">Rechercher</button>

        <div id="divResultat">

        </div>
    </form>

    <div id="divFilms">
    </div>
</body>
</html>
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
    <h3>Tapez les données du film</h3>

    <form action="./filmInsererTraitement.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre">
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
        </div>

        <div>
            <label for="duree">Durée</label>
            <input type="number" id="duree" name="duree">
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>

        <div>
            <input type="submit" value="Envoyer" id="envoyer">
        </div>
    </form>
</body>
</html>
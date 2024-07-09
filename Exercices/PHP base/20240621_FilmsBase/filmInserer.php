<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chips'Flix • Insérer un film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
        include "./nav.php";
    ?>

    <h1>Insérer les données d'un film</h1>

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
            <label for="duree">Duree</label>
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
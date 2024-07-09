<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chips'Flix • Rechercher un film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        include "./nav.php";
    ?>

    <h1>Rechercher un film</h1>

    <form action="./filmRechercheTraitement.php" method="POST">
        <input type="text" id="termeRecherche" name="termeRecherche">
        <input type="submit" value="Rechercher">
    </form>
</body>
</html>
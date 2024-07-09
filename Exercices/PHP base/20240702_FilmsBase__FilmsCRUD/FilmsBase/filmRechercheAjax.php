<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
        include "./nav.php";
        include "./checkSession.php";
    ?>
    
    <form id="formHTML">
        <label for="termRecherche">Rechercher</label>
        <input type="text" id="termRecherche" name="termRecherche">
        <button id="btnRecherche">Recherche!</button>
    </form>

    <div id="divFilms">
        Ici on affichera les films
    </div>
    <script src="./js/filmRechercheAjax.js"></script>
</body>

</html>
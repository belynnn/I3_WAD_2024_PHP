<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Formulaire d'ajout d'une formation</h1>

    <form method="POST" action="./formInsertFormationTraitement.php">
        <section>
            <div>
                <label for="nom">Nom de la formation</label>
                <br>
                <input type="text" name="nom" id="nomFormation">
            </div>
            <br>

            <div>
                <label for="description">Description de la formation</label>
                <br>
                <input type="text" name="description" id="descriptionFormation">
            </div>
            <br>

            <button type="submit">Enregistrer</button>
        </section>
    </form>
</body>
</html>
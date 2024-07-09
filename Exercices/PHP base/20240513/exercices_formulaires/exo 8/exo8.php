<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercices formulaires - Exercice 8</title>
</head>
<body>
    <h1>Super'By</h1>
    <h2>Ajouter la TVA</h2>
    <form action="postFormTreatment.php" method="post">
        <label for="">Prix client :</label>
        <input type="number" name="price" id="">
        <select name="tva" id="">
            <option value="1.06">6%</option>
            <option value="1.12">12%</option>
            <option value="1.21">21%</option>
        </select>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
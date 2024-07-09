<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercices formulaires - Exercice 7</title>
</head>
<body>
    <form action="postFormTreatment.php" method="post">
        <label for="pet_select">Animal</label>
        <select name="pets" id="pet_select">
            <option value="">--Veuillez sélectionner un animal--</option>
            <option value="chat">Chat</option>
            <option value="chien">Chien</option>
            <option value="perroquet">Perroquet</option>
        </select>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
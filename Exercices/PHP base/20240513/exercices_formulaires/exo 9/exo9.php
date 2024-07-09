<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="postFormTreatment.php" method="post">
        <label for="">Nombre de chambres :</label>
        <input type="number" name="room_qty">
        <br>
        <br>
        <label for="">Type de chambres :</label>
        <select name="room_type" id="">
            <option value="50">Simple</option>
            <option value="100">Double</option>
            <option value="599">Suites</option>
        </select>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
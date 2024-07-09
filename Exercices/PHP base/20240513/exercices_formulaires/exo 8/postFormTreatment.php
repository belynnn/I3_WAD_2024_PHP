<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $htva = $_POST['price'];
        $tva = $_POST['tva'];

        $final_price = $htva * $tva;

        echo $final_price;
    ?>
</body>
</html>
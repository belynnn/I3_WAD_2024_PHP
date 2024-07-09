<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $room_type = $_POST['room_type'];
        $room_qty = $_POST['room_qty'];

        $final_price = $room_qty * $room_type;

        echo "<h2>Prix total</h2>";
        echo $final_price;
    ?>
</body>
</html>
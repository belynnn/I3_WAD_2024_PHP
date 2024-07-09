<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exemple manipulation Object Date</title>
</head>
<body>
    <?php
        $date1 = "03/06/2024";
        
        $date2 = new DateTime();
        var_dump($date2);
        
        $date3 = new DateTime("8-10-2025");
        var_dump($date3);

        print($date2->format("Y-M-D"));
        print('<br>');
        print($date2->format("Y-m-d"));
    ?>
</body>
</html>